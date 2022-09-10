<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EducationalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            'school_name' => 'stt nf',
            'level' => 's1',
            'start_year' => '2018',
            'end_year' => '2022',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
