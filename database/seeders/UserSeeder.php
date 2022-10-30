<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'       => 1,
            'email'      => 'ralphheersink@gmail.com',
            'password'   => '$2y$10$jiU.2wHEYEMQC6Jl9ZG4tOFz59TZcWzuE2JmF/8f6ZaDSy.w7.nE.',
            'verified'   => 1,
            'created_at' => Carbon::now(),
        ]);
    }
}
