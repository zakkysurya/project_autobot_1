<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        try {
            $dataProfile = Profile::first();
            $dataSkills  = Skill::all();
            $dataExperiences    = Experience::all();
            $dataEducation      = Education::all();
            $dataServices       = Service::all();
            $dataPortfolio      = Portfolio::all();
            $dataTestimonial    = Testimonial::all();
    
            $data = [
                "home" => [
                    'photo'     => $dataProfile->photo,
                    'full_name' => $dataProfile->full_name,
                    'nick_name' => $dataProfile->nick_name,
                    'position' => $dataProfile->position,
                    'job_description' => $dataProfile->job_description,
                    'email' => $dataProfile->email,
                    'fb' => $dataProfile->fb,
                    'ig' => $dataProfile->ig,
                    'tweeter' => $dataProfile->tweeter,
                    'linkid' => $dataProfile->linkid,
                ],
                "about_me" => [
                    'photo'         => $dataProfile->photo,
                    'self_description' => $dataProfile->self_description,
                    'skills'        => $dataSkills,
                    'experiences'   => $dataExperiences,
                    'educations'    => $dataEducation,
                ],
                "services"      => $dataServices,
                "work"          => $dataPortfolio,
                "testimonial"   => $dataTestimonial,
                "contact" => [
                    'address'   => $dataProfile->address,
                    'phone'     => $dataProfile->phone,
                    'email'     => $dataProfile->email,
                ],
            ];
        } catch (QueryException $e) {
            $data = [ "errors" => true, "msg" => $e->errorInfo ];
        }
        return view('web.index', $data);
    }
}
