<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id'    => 1,
            'status'     => 'paid',
            'items'      => json_encode([
                0 => [
                    'name' => 'Dell Monitor',
                    'count' => 1
                ]
            ]),
            'created_at' => Carbon::now()
        ]);
    }
}
