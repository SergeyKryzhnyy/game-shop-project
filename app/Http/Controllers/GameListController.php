<?php

namespace App\Http\Controllers;

use App\Gamelist;
use Illuminate\Http\Request;

class GameListController extends Controller
{

    static public function indexAction(Request $request)
    {
        return Gamelist::all();
    }



}
