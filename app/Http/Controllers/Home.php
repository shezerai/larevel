<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class Home extends Controller
{
    function Index(){
        return view("Index");
    }
    function Trekking(Request $request){
        //$request->validate()
             $this->validate($request,
           [ 'number1'=>'required|min:1',
            'number2'=>'required|min:1',
            'number3'=>'required|min:1',
            'number4'=>'required|min:1',
            'number5'=>'required|min:1',
            'number6'=>'required|min:1']);

        $cijfers = array();
        $cijfers[]=$request->input("number1");
        $cijfers[]=$request->input("number2");
        $cijfers[]=$request->input("number3");
        $cijfers[]=$request->input("number4");
        $cijfers[]=$request->input("number5");
        $cijfers[]=$request->input("number6");
        $trekking = array();
        $trekking[0] =rand ( 0 , 20 );
        $trekking[1] =rand ( 0 , 20 );
        $trekking[2] =rand ( 0 , 20 );
        $trekking[3] =rand ( 0 , 20 );
        $trekking[4] =rand ( 0 , 20 );
        $trekking[5] =rand ( 0 , 20 );
        $data = array($cijfers,$trekking);

        return view("Trekking",['data' =>$data]);
    }
}
