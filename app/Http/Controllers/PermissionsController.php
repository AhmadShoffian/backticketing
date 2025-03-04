<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterpermission;

class PermissionsController extends Controller
{
    public function index()
    {
        $master_permissions = Masterpermission::all();
        return view('back.permission.index', ['master_permissions' => $master_permissions]);
    }
}
