<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()//ルートの場合
    {
        $item=[
            'content'=> 'Hello World',
            'param'=>'',
        ];
        return view('index',$item);
    }
    
    public function index2($text)//  /test/{text}の場合
    {
        $item=[
                'content'=> 'Hello World22',
                'param'=>$text,
            ];
        return view('index',$item);
    }
}
