<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        // controllerからtemplateに変数を渡す処理
        $data = ['msg' => 'これはコントローラから渡されたメッセージです。'];
        return view('hello.index', $data);
    }
}
