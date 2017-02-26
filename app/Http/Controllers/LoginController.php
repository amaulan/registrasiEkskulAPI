<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $cek_login = User::with('ekskul')->where('nis',$request->nis)->first();

        if(!count($cek_login))
        {
            return \Response::json('Nis Not Found',500);
        }

        if(\Hash::check($request->password,$cek_login->password))
        {
            return \Response::json($cek_login,200);
        }
        else{
            return \Response::json('Username Or Password Wrong', 501);
        }
    }
}
