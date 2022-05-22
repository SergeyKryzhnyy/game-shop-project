<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{

    public function indexAction(Request $request)
    {
        $result['status'] = 'main';
        $game_list = 'game_list';

        if (Auth::check())
        {
            $user = Auth::user();
            $id = $user->id;
            $result['admin'] = $user->admin;
        }
        else
        {
            $result['admin'] = 0;
        }

        return view('index',['result'=>$result, 'game_list'=>$game_list, 'admin'=>$result['admin']]);
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
