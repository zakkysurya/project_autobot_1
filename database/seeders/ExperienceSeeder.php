<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([
            'company_name' => 'pt indonesia itu indah',
            'position' => 'be developer',
            'start_year' => '2020',
            'end_year' => '2018',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
