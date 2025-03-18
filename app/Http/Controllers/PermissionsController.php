<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Masterpermission;

class PermissionsController extends Controller
{
    public function index()
    {
        $master_permissions = Masterpermission::all();
        $menu_master = Menu::whereNull('parent_code')->with('children')->orderBy('sequence')->get();
        return view('back.permission.index', compact('master_permissions','menu_master'));
    }
}
