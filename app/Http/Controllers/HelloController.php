<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
           'msg'=>'これはコントローラから渡されたメッセージです。',
           'id'=>$request->id //クエリパラメータのキーidを取り出す。
       ];
        return view('hello.index', $data);
    }
}
