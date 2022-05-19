<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{

    public function indexAction(Request $request)
    {
        $result['status'] = 'main';
        $game_list = 'game_list';
        return view('index',['result'=>$result, 'game_list'=>$game_list]);
    }

    public function newsAction(Request $request)
    {
        $result['status'] = 'news';
        return view('index',['result'=>$result]);
    }

    public function aboutAction(Request $request)
    {
        $result['status'] = 'about';
        return view('index',['result'=>$result]);
    }

    public function orderAction(Request $request)
    {
        $result['status'] = 'order';
        return view('index',['result'=>$result]);
    }

    public function registerAction(Request $request)
    {
        $result['status'] = 'RegisterForm';
        return view('index',['result'=>$result]);
    }
}
