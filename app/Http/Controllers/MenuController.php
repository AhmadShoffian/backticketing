<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    // MenuController.php

public function index()
{
    $menu_master = Menu::whereNull('parent_code')->with('children')->orderBy('sequence')->get();
    return view('back.menu.index', compact('menu_master'));

}

    public function add()
    {
        $menu_master = Menu::all(); // Ambil semua data menu
        $type = DB::select("SHOW COLUMNS FROM master_menu WHERE Field = 'status'");
        preg_match("/^enum\((.*)\)$/", $type[0]->Type, $matches);
        $enumValues = str_getcsv($matches[1], ",", "'");
    
        return view('back.menu.add', compact('menu_master', 'enumValues'));
    }
        

    public function prosesAdd(Request $request )
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'icon' => 'required',
            'status' => 'required',
            'code' => 'required|unique:master_menu,code',
            'parent_code' => 'nullable|exists:master_menu,code',
            'sequence' => 'required|integer',
        ]);

        $menu = new Menu();
        $menu->name = $request->name;
        $menu->url = $request->url;
        $menu->icon = $request->icon;
        $menu->status = $request->status;
        $menu->code = $request->code;
        $menu->parent_code = $request->parent_code;
        $menu->sequence = $request->sequence;

        try {
            $menu->save();
            return redirect()->route('menu.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->route('menu.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id); // Gunakan findOrFail agar error lebih jelas
        $menu_master = Menu::all();

        // Ambil daftar ENUM dari kolom 'status' pada tabel 'master_menu'
    $type = DB::select("SHOW COLUMNS FROM master_menu WHERE Field = 'status'");

    // Parse hasilnya untuk mengambil nilai ENUM
    preg_match("/^enum\((.*)\)$/", $type[0]->Type, $matches);
    $enumValues = str_getcsv($matches[1], ",", "'");

    // Kirim data menu dan enumValues ke view
    return view('back.menu.edit', compact('menu','menu_master', 'enumValues'));
    }

    public function prosesEdit(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:master_menu,id',
            'name' => 'required',
            'url' => 'required',
            'icon' => 'required',
            'status' => 'required|in:Active,Inactive',
            'code' => 'required',
            'parent_code' => 'nullable|exists:master_menu,code|not_in:' . $request->code,
            'sequence' => 'required|integer',
        ]);

        $menu = Menu::find($request->id);
        $menu->name = $request->name;
        $menu->url = $request->url;
        $menu->icon = $request->icon;
        $menu->status = $request->status;
        $menu->code = $request->code;
        $menu->parent_code = $request->parent_code;
        $menu->sequence = $request->sequence;

        try {
            $menu->save();
            return redirect()->route('menu.index')->with('success', 'Data berhasil diubah');
        } catch (\Exception $e) {
            return redirect()->route('menu.index')->with('error', 'Data gagal diubah');
        }
    }

    public function delete($id)
    {
        $menu = Menu::find($id);
        Menu::where('parent_code', $menu->code)->delete();

        try {
            $menu->delete();
            return redirect()->route('menu.index')->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('menu.index')->with('error', 'Data gagal dihapus: ' . $e->getMessage());
        }
    }
}
