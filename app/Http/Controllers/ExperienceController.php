<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{
    public function show(){
        try {
           $data = Experience::all();
           return response()->json($this->res(true, "", $data));
      } catch (QueryException $e) {
          return response()->json(false, $e->errorInfo);
      }
    }
    public function store(Request $request){
        $validator =  Validator::make($request->all(),[
            'inputCompanyName' => 'required',
            'inputPosition' => 'required',
            'inputStartYear' => 'required',
            'inputEndYear' => 'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json([ 'sts' => 0, 'error' => $validator->errors()->toArray() ]);
        }
        
        try {
            $dataExperience = [ 
                'company_name'  =>  $request->inputCompanyName,
                'position'      =>  $request->inputPosition,
                'start_year'    =>  $request->inputStartYear,
                'end_year'      =>  $request->inputEndYear
            ];
        
            $insert = Experience::create($dataExperience);
    
            if($insert){
                return response()->json($this->res(true, "Data berhasil diinput"));
            }
        } catch (QueryException $e) {
            return response()->json($this->res(false, $e->errorInfo));
        }
    
      }

    public function delete($id_experience){
        $data = Experience::where('id_experience', $id_experience);
        $data->delete();
        return response()->json($this->res(true, "Data berhasil dihapus"));
    }
    
    private function res($sts, $msg, $data=null){
        return array(
            'sts' => $sts,
            'msg' => $msg,
            'data' => $data
        );
    }

}
