<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $master_topic = Topic::all();
        return view('back.topic.index', ['master_topic' => $master_topic]);
    }

    public function tambah() {
        return view('back.topic.formTambah');
    }

    public function prosesTambah(Request $request) {

        $request->validate([
            'name' => 'required',
        ]);

        $topic = new Topic();
        $topic->name = $request->name;
        // $topic->description = $request->description;

        try {
            $topic->save();
            return redirect()->route('topic.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->route('topic.index')->with('error', 'Data gagal ditambahkan');
        } 
    }
}
