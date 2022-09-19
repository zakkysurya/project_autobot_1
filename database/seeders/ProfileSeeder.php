<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('profile')->insert([
           'photo' => './fe/images/home/home.png',
           'full_name' => 'admin',
           'nick_name' => 'lagi',
           'position' => 'be developer',
           'address' => 'jl, main no.21, sukamaju, cilodong, kota depok',//[char:50]
           'phone' => '089678993441',
           'email' => 'admin@admin.com',
           'fb' => Null,
           'ig' => Null,
           'tweeter' => Null,
           'linkid' => Null,
           'job_description' => 'building simple and beautiful things for complex interfaces is what I enjoy most about my work. I am also interested in crafting beautiful minimal products and exploring worlds.',//[char:180],
           'self_description' => 'it is a kong established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using normal distribution of letters, as opposed to using content here, content here', //[char:250]
           'user_id' => 1,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        ]);
    }
}
