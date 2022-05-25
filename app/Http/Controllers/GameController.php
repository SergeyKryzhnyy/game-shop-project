<?php

namespace App\Http\Controllers;

use App\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{



    public function indexAction(Request $request)
    {
        $result['status'] = 'main';
        $game_list = 'game_list';
        $games_result = GameListController::indexAction($request);
        $category = Category::getAllCategories();
//        if (Auth::check())
//        {
//            $user = Auth::user();
//            $id = $user->id;
//            $result['admin'] = $user->admin;
//        }
//        else
//        {
//            $result['admin'] = 0;
//        }

        return view('index',['result'=>$result, 'game_list'=>$game_list, 'games_result'=>$games_result, 'category'=>$category]);
    }

    public function newsAction(Request $request)
    {
        $category = Category::getAllCategories();
        $result['status'] = 'news';
        return view('index',['result'=>$result, 'category'=>$category]);
    }

    public function aboutAction(Request $request)
    {
        $category = Category::getAllCategories();
        $result['status'] = 'about';
        return view('index',['result'=>$result, 'category'=>$category]);
    }

    public function orderAction(Request $request)
    {
        $category = Category::getAllCategories();
        $result['status'] = 'order';
        return view('index',['result'=>$result, 'category'=>$category]);
    }

    public function registerAction(Request $request)
    {
        $result['status'] = 'RegisterForm';
        return view('index',['result'=>$result, 'category'=>$category]);
    }
}
