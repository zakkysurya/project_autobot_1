<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'name' => 'fulan1',
                'email' => 'fulan1@gmail.com',
                'subject' => 'ask for everything',
                'text' => 'text body for question here',
                'is_read' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'fulan2',
                'email' => 'fulan2@gmail.com',
                'subject' => 'ask for everything',
                'text' => 'text body for question here',
                'is_read' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
