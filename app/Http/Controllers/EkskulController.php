<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ekskul;

class EkskulController extends Controller
{
    public function index()
    {
        // return 1;
        $data = Ekskul::with('user')->get();
        
        $num = 0;
        foreach($data as $val)
        {
            // $data[$num]->user = count($val->user);
            $data[$num]->user_count = count($data[$num]->user);
            unset($data[$num]->user);
            $num++;
        }

        $res['code']  = 200;
        $res['msg']   = 'OK';
        $res['data']  = $data;

        return \Response::json($res, 200);
    }

    public function show(Request $request)
    {
        $data = Ekskul::with('user')->where('ekskul.id','=',$request->id)->first();

        // $index = 0;
        for($i = 0; $i <=count($data->user)-1; $i++)
        {
            unset($data->user[$i]->token);
            unset($data->user[$i]->pivot);
        }

        if(!count($data))
        {
            $code = 404;
            $res['code'] = $code;
            $res['msg']  = 'not found';
        }else {
            $code = 200;
            $res['code']  = $code;
            $res['msg']   = 'OK';
            $res['data']  = $data;

        }

        return \Response::json($res, $code);
    }
}
