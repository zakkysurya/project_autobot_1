<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    public function show(){
        try {
           $data = Education::all();
           return response()->json($this->res(true, "", $data));
      } catch (QueryException $e) {
          return response()->json(false, $e->errorInfo);
      }
    }
    public function store(Request $request){
        $validator =  Validator::make($request->all(),[
            'inputSchoolName'   => 'required',
            'inputLevel'        => 'required',
            'inputStartYear'    => 'required',
            'inputEndYear'      => 'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json([ 'sts' => 0, 'error' => $validator->errors()->toArray() ]);
        }
        
        try {
            $dataEducation = [ 
                'school_name'   =>  $request->inputSchoolName,
                'level'         =>  $request->inputLevel,
                'start_year'    =>  $request->inputStartYear,
                'end_year'      =>  $request->inputEndYear
            ];
        
            $insert = Education::create($dataEducation);
    
            if($insert){
                return response()->json($this->res(true, "Data berhasil diinput"));
            }
        } catch (QueryException $e) {
            return response()->json($this->res(false, $e->errorInfo));
        }
    
      }

    public function delete($id_education){
        $data = Education::where('id_education', $id_education);
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
