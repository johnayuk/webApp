<?php

namespace App\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function admin()
    {
        return view('dashBoard.dashboard');
    }

    public function user()
    {
        return view('dashBoard.user');
    }

    public function table()
    {
        return view('dashBoard.tableList');
    }
}
