<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){

        $master_unit = Unit::all();
        return view('back.unit.index', ['master_unit' => $master_unit]);
    }
}
