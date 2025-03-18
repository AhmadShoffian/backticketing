<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $unit_kerja = UnitKerja::all();
        $menu_master = Menu::whereNull('parent_code')->with('children')->orderBy('sequence')->get();
        return view('back.unit_kerja.index', compact('unit_kerja', 'menu_master'));
    }
}
