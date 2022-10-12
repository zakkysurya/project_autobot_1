<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Database\QueryException;

class ServiceController extends Controller
{
    public function show(){
        try{
            $data = Service::all();
            return response()->json($this->res(true, "", $data));
        } catch (QueryException $e) {
            return response()->json(false, $e->errorInfo);
        }
    }

    public function store(Request $request){
        // dd($request->all());
        $dataService = [ 'icon' => 'mdi-comment-plus-outline', 'service_name' => $request->service, 'description' => $request->description ];

        $insert = Service::create($dataService);
        if($insert){
            return response()->json($this->res(true, "Data berhasil diinput"));
        }else{
            return response()->json($this->res(false, "Data gagal diinput"));
        }
    }

    public function delete($id_service=null){
        $data = Service::where('id_service', $id_service);
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
