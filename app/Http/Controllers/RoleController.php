<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $master_roles = Role::all();
        return view('back.role.index', ['master_roles' => $master_roles]);
    }

    public function add()
    {
        $getPermission = Permission::getRecord();
        // dd($getPermission);
        $data['getPermission'] = $getPermission;
        return view('back.role.role-add', $data);
    }
}
