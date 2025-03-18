<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){

        $master_unit = Unit::all();
        $menu_master = Menu::whereNull('parent_code')->with('children')->orderBy('sequence')->get();
        return view('back.peran.index', compact('master_unit','menu_master'));
    }

    public function add(){
        return view('back.peran.formTambah');
    }

    public function prosesAdd(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $unit = new Unit();
        $unit->name = $request->name;

        try {
            $unit->save();
            return redirect()->route('peran.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->route('peran.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id){
        $unit = Unit::findOrFail($id);
        return view('back.peran.formEdit', compact('unit'));
    }

    public function prosesEdit(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $unit = Unit::find($request->id);
        $unit->name = $request->name;

        try {
            $unit->save();
            return redirect()->route('peran.index')->with('success', 'Data berhasil diubah');
        } catch (\Exception $e) {
            return redirect()->route('peran.index')->with('error', 'Data gagal diubah');
        }
    }

    public function delete($id){
        $unit = Unit::find($id);
        $unit->delete();
        return redirect()->route('peran.index')->with('success', 'Data berhasil dihapus');
    }
}
