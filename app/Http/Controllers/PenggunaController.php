<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Pengguna;

class PenggunaController extends Controller
{
    // mahasiswa

    // mendapatkan data mahasiswa
    public function getMhs()
    {
        $data = Pengguna::get();
        return response()->json($data);
    }
    public function mhsDetail($id_pengguna)
    {   
        $data = Pengguna::where('id_pengguna',$id_pengguna)->get();
        foreach($data as $data){
            return response()->json([
                'nim' => $data->id_pengguna,
                'nama'  => $data->nama,
                'alamat'    =>  $data->alamat,
                'telepon'   =>  $data->telepon
            ]);
        }
    }
    public function LoginMhs(Request $request)
    {
        $user   =   Pengguna::where('id_pengguna',$request['username'])->get();
        if(count($user)==1){
            foreach($user as $user){
                if(Hash::check($request['password'],$user->password)){
                    return response()->json([
                        'pesan' =>  "Y",
                        'data'  =>  $user
                    ]);
                }else{
                    return response()->json([
                        'pesan' =>  "N",
                    ]);
                }
            }
        }else{
            return response()->json([
                'pesan' =>  "N"
            ]);
        }
    }
}
