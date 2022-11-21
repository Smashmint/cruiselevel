<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Storage;

class GithubScraper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:scrape';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape github usernames';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $count = 66;

        Cache::put('url', 'https://github.com/tailwindlabs/tailwindcss/network/dependents?dependents_after=MjQ1Nzg2NTM0ODY');

        while ($count <= 120) {

            $request = Http::timeout(90)->get('https://app.scrapingbee.com/api/v1/', [
                'api_key' => 'PUXYD73NERX8EB9DGQ6AA12MCSO323EQFX92SRYRF0VRAVL8WJVAVHQPSXJFVQ0XQ96A2S1CIM41ST5K',
                'url' => Cache::get('url'),
                'extract_rules' => '{"username":{"selector":"#dependents .color-fg-muted a:nth-child(1)","type":"list"},"nextpage":{"selector":".paginate-container > .BtnGroup > :nth-child(2)","output":"@href"}}'
    
            ]);

            $response = json_decode($request->body());
            
            if($request->successful()) {

                foreach($response->username as $username) {
                    
                    Storage::append('tailwind2.txt', $username);
                }

                Cache::put('url', $response->nextpage);

                $this->info('scraped page '.$count.' - '.$response->nextpage);

                $count++;

                sleep(5);

            } else {
                $this->error($response->message);

                break;
            }
        }
    }
}
