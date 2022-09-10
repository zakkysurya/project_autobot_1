<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'icon' => 'mdi-cached',
            'service_name' => 'research & analysis',
            'description' => 'we use a customized application specifically designed a testing gnose to keep away for people.',//[char:100]
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'icon' => 'mdi-comment-plus-outline',
            'service_name' => 'web development',
            'description' => 'we use a customized application specifically designed a testing gnose to keep away for people.',//[char:100]
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'icon' => 'mdi-layers',
            'service_name' => 'network management',
            'description' => 'we use a customized application specifically designed a testing gnose to keep away for people.',//[char:100]
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'icon' => 'mdi-inbox-arrow-up',
            'service_name' => 'ui/ux development',
            'description' => 'we use a customized application specifically designed a testing gnose to keep away for people.',//[char:100]
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'icon' => 'mdi-chart-line',
            'service_name' => 'mobile app development',
            'description' => 'we use a customized application specifically designed a testing gnose to keep away for people.',//[char:100]
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'icon' => 'mdi-email-open',
            'service_name' => 'network management',
            'description' => 'we use a customized application specifically designed a testing gnose to keep away for people.',//[char:100]
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]];
        
        DB::table('services')->insert($data);
    }
}
