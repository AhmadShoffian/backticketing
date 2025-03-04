<?php

namespace App\Http\Controllers;

use App\Models\Type;

class TypeController extends Controller
{

    public function index()
    {
        $master_type = Type::with('topic')->get();
        return view('back.type.index', ['master_type' => $master_type]);
    }
}
