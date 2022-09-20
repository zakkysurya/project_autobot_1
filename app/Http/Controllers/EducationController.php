<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index(){
        return view('admin.education', [ "years" => $this->select_option_years(), "levels" => $this->select_option_level_school() ]);
    }

    private function select_option_level_school(){
        $levels = ['sd','smp','sma','d1','d2','d3','s1','s2','s3'];
        return $levels;
    }

    private function select_option_years(){
        $current_year = date("Y");
        for($i="2000"; $i <= $current_year; $i++){
           $years[$i] = $i; 
        }

        return $years;
    }
}
