<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
   public function show(){
      try{
          $data = Portfolio::all();
          return response()->json($this->res(true, "", $data));
      } catch (QueryException $e) {
          return response()->json(false, $e->errorInfo);
      }
  }

  public function store(Request $request){
    // dd($request->all());
    $validator =  Validator::make($request->all(),[
        'img' => 'required|mimes:jpg,png,jpeg'
    ]);
    
    if ($validator->fails()) {
        return response()->json([ 'sts' => 0, 'error' => $validator->errors()->toArray() ]);
    }
    
    try {
        $image = $request->file('img');
        $file_name = time().'.'.$image->extension();
        $this->upload('public/portfolio', $image, $file_name );
        $path = 'storage/portfolio/'.$file_name;       


        $dataPortfolio = [ 'images' =>  $path ];
    
        $insert = Portfolio::create($dataPortfolio);

        if($insert){
            return response()->json($this->res(true, "Data berhasil diinput"));
        }
    } catch (QueryException $e) {
        return response()->json($this->res(false, $e->errorInfo));
    }

  }

  public function delete($id_portfolio){
      $data = Portfolio::where('id_portfolio', $id_portfolio);
      $this->deleteCurrentFile($data->first()->images);
      $data->delete();
      return response()->json($this->res(true, "Data berhasil dihapus"));
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
