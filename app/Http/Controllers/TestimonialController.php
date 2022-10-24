<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    public function show(){
        try {
           $data = Testimonial::all();
           return response()->json($this->res(true, "", $data));
        } catch (QueryException $e) {
            return response()->json(false, $e->errorInfo);
        }
    }

    public function store(Request $request){
        $validator =  Validator::make($request->all(),[
            'photo'         => 'required|mimes:jpg,png,jpeg',
            'inputName'     => 'required',
            'inputPosition' => 'required',
            'inputText'     => 'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json([ 'sts' => 0, 'error' => $validator->errors()->toArray() ]);
        }
        
        try {
            $image = $request->file('photo');
            $file_name = time().'.'.$image->extension();
            $this->upload('public/testimonial', $image, $file_name );
            $path = 'storage/testimonial/'.$file_name;       

            $dataTestimonial = [ 
                'image'     =>  $path,
                'name'      =>  $request->inputName,
                'position'  =>  $request->inputPosition,
                'text'      =>  $request->inputText
            ];
        
            $insert = Testimonial::create($dataTestimonial);
    
            if($insert){
                return response()->json($this->res(true, "Data berhasil diinput"));
            }
        } catch (QueryException $e) {
            return response()->json($this->res(false, $e->errorInfo));
        }
    
      }

    public function update(Request $request){
        $validator =  Validator::make($request->all(),[
            'photo'         => 'required|mimes:jpg,png,jpeg',
            'inputName'     => 'required',
            'inputPosition' => 'required',
            'inputText'     => 'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json([ 'sts' => 0, 'error' => $validator->errors()->toArray() ]);
        }
        
        try {
            $image = $request->file('photo');
            $file_name = time().'.'.$image->extension();
            $this->upload('public/testimonial', $image, $file_name );
            $path = 'storage/testimonial/'.$file_name;       

            $dataTestimonial = [ 
                'image'     =>  $path,
                'name'      =>  $request->inputName,
                'position'  =>  $request->inputPosition,
                'text'      =>  $request->inputText
            ];
        
            $insert = Testimonial::create($dataTestimonial);
    
            if($insert){
                return response()->json($this->res(true, "Data berhasil diinput"));
            }
        } catch (QueryException $e) {
            return response()->json($this->res(false, $e->errorInfo));
        }
    
      }

    
      public function delete($id_testimonial){
        $data = Testimonial::where('id_testimonial', $id_testimonial);
        $this->deleteCurrentFile($data->first()->image);
        $data->delete();
        return response()->json($this->res(true, "Data berhasil dihapus"));
    }
    
    public function detail($id_testimonial){
        try {
            $data = Testimonial::where('id_testimonial', $id_testimonial)->get();
            
            if($data){
                return response()->json($this->res(true, "", $data));
            }
        } catch (QueryException $e) {
            return response()->json($this->res(false, $e->errorInfo));
        }

    }

    public function upload($path, $file, $name){
        return Storage::putFileAs($path, $file, $name);
    }

    public function deleteCurrentFile($file){ //untuk hapus current picture sebelumnya
        if(file_exists(public_path($file))){
            unlink(public_path($file));
        }else{
            dd('File does not exists.');
        }
    }
    
    private function res($sts, $msg, $data=null){
        return array(
            'sts' => $sts,
            'msg' => $msg,
            'data' => $data
        );
    }

}
