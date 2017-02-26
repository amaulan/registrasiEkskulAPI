<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkskulSiswaController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $check = \DB::table('siswa_ekskul')
                 ->where('siswa_id',$data['siswa_id'])
                 ->where('ekskul_id',$data['ekskul_id'])
                 ->first();

        if(count($check))
        {
            $code = 501;
            $res['code'] = $code;
            $res['msg'] = 'error, you have been registated';

            return \Response::json($res, $code);
        }

        $validasi  = \Validator::make($data,[
            'siswa_id' => 'required|integer',
            'ekskul_id' => 'required|integer',
            'alasan'   => 'required'
        ]);

        if($validasi->fails())
        {
            $code = 501;
            $res['code'] = $code;
            $res['msg'] = $validasi->errors()->all();

            return \Response::json($res, $code);
        }

        $create = \DB::table('siswa_ekskul')->insert([
            'siswa_id' => $data['siswa_id'],
            'ekskul_id' => $data['ekskul_id'],
            'alasan'  => $data['alasan']
        ]);

        if($create)
        {
            $code = 201;
            $res['code'] = $code;
            $res['msg'] = 'success';   
        }
        else{
            $code = 501;
            $res['code'] = $code;
            $res['msg'] = 'fail';
        }
        return \Response::json($res, $code);
    }
}
