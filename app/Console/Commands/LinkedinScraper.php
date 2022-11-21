<?php

namespace App\Console\Commands;

use App\Models\Scrape;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Exports\ProfilesExport;
use App\Imports\ProfileImport;
use Carbon\Carbon;
use Storage;
use Excel;

class LinkedinScraper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'linkedin:scrape {--url= : LinkedIn search url} 
                                            {--cookie= : LinkedIn session cookie} 
                                            {--page= : The page to start at}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape a LinkedIn search url';

    public function searchProfile(array $list, string $url)
    {
        foreach($list as $item)
        {
            if($item['url'] == $url) {
                return true;
            } 
        }
        return false;
    }

    public function getHandle(string $url)
    {   
        return Str::betweenFirst(urldecode($url), '"', '"');
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $scrape = Scrape::findOrFail(1);

        $url = $this->option('url');
        $cookie = 'li_at='.$this->option('cookie');

        $i = 0;
        $count = 0;
        $scrape_count = 0;
        $page_count = $scrape->page;

        $profiles = [];
        $urls = collect([]);

        Cache::put('source_url', $url);

        $file = Excel::toArray(new ProfileImport, $this->getHandle($url).'.csv');

        //dd($this->searchProfile($rows, 'https://www.linkedin.com/in/yuhenobi'));

        if($page_count == 1) {
            Cache::put('url', $url);
        } else {
            Cache::put('url', $url.'&page='.$page_count);
        }

        if(!empty($file[0])) {

            foreach($file[0] as $row) {
                $urls->push($row['url']);
            }

            $first_run = false;

        } else {
            $first_run = true;
        }
        
        while ($count <= 50 && $page_count <= 100) {

            $request = Http::retry(1, 100)->timeout(90)->get('https://app.scrapingbee.com/api/v1/', [
                'api_key' => 'PUXYD73NERX8EB9DGQ6AA12MCSO323EQFX92SRYRF0VRAVL8WJVAVHQPSXJFVQ0XQ96A2S1CIM41ST5K',
                'url' => Cache::get('url'),
                'premium_proxy' => 'true',
                'country_code' => 'nl',
                'cookies' => $cookie,
                'extract_rules' => '{"profiles":{"selector":".entity-result__title-text  > .app-aware-link","type":"list","output":"@href"}}'
            ]);

            $response = json_decode($request->body());
            
            if($request->successful()) {

                // scraping empty 
                if(count($response->profiles) > 0) {

                    // loop through profiles
                    foreach($response->profiles as $profile) {
                        
                        // only process profile urls from scrape
                        if(Str::contains($profile, ['miniProfileUrn'])) {

                            // don't check for ducplicate profiles on first run
                            if(!$first_run) {
                                // check if profile is duplicate
                                if(!$urls->contains(Str::before($profile, '?'))) {
                                    $profiles = Arr::add($profiles, $i, ['url' => Str::before($profile, '?'), 'date' => Carbon::now()->toDateTimeString()]);
            
                                }else {
                                    $this->info('duplicate profile!');
                                }

                            } else {
                                $profiles = Arr::add($profiles, $i, ['url' => Str::before($profile, '?'), 'date' => Carbon::now()->toDateTimeString()]);
                            }

                            $scrape_count++;

                            $i++;
                        }
                    }

                    $count++;

                    $this->info('scraped '.count($response->profiles).' profiles from page '.$count.' - '.Cache::get('url'));
                    $this->info('total profiles: '.$scrape_count);

                    $page_count++;

                    Cache::put('url', Cache::get('source_url').'&page='.$page_count);

                    sleep(30);
                } else {

                    $resuming_at = Carbon::now()->addMinutes(15);

                    $this->info('empty page detected.. stopping scrape - '.Cache::get('url'));
                    $this->info('resuming scrape at '.$resuming_at->toDateTimeString());

                    $scrape->page = $page_count;
                    $scrape->resume_at = $resuming_at;
                    $scrape->save();

                    break;
                }

            } else {
                $this->error($response->message);

                break;
            }
        }

        // don't merge on first run
        if(!$first_run){
            $mergedProfiles = array_merge($file[0], $profiles);
        } else {
            $mergedProfiles = $profiles;
        }

        $this->info('saving profiles to '.$this->getHandle($url).'.csv');

        Excel::store(new ProfilesExport($mergedProfiles), $this->getHandle($url).'.csv');
    }
}
