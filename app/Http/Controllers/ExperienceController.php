<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(){
        return view('admin.experience', [ "years" => $this->select_option_years() ]);
    }

    private function select_option_years(){
        $current_year = date("Y");
        for($i="2000"; $i <= $current_year; $i++){
           $years[$i] = $i; 
        }

        return $years;
    }
}
