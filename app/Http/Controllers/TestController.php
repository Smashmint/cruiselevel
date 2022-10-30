<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Storage;

class TestController extends Controller
{
    public function test()
    {
        $count = 0;

        Cache::put('url', 'https://github.com/tailwindlabs/tailwindcss/network/dependents');

        while ($count <= 10) {

            $request = Http::get('https://app.scrapingbee.com/api/v1/', [
                'api_key' => 'PUXYD73NERX8EB9DGQ6AA12MCSO323EQFX92SRYRF0VRAVL8WJVAVHQPSXJFVQ0XQ96A2S1CIM41ST5K',
                'url' => Cache::get('url'),
                'extract_rules' => '{"username":{"selector":"#dependents .color-fg-muted a:nth-child(1)","type":"list"},"nextpage":{"selector":".paginate-container > .BtnGroup > :nth-child(2)","output":"@href"}}'
    
            ]);
            
            if($request->successful()) {
                
                $response = json_decode($request->body());

                foreach($response->username as $username) {
                    
                    Storage::append('test.txt', $username);
                }

                Cache::put('url', $response->nextpage);

                $count++;

                sleep(5);

            } else {
                return json_decode($request->body());
            }
        }
    }
}
