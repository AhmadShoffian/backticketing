<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $master_users = User::all();
        return view('back.user.index', ['master_users' => $master_users]);
    }
}
