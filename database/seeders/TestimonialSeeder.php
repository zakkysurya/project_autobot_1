<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<5; $i++){
            DB::table('testimonial')->insert([
                'image' => 'fe/images/team/img'.$i.'.png',
                'name' => 'user fulan-'.$i,
                'position' => 'embedded analytics',
                'text' => 'we use a customized application specifically designed a testing gnose to keep away for people.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
        
    }
}
