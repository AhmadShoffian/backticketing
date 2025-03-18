<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Topic;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
       return view('front.layouts.index');
    }

    public function faqs()
    {
        return view('front.layouts.faqs');
    }

    public function contact()
    {
        return view('front.layouts.contact');
    }

    public function kirimcepat()
    {
        $peran = Unit::all();
        $kategori = Topic::all(); 
        return view('front.layouts.input_form_kc', compact('peran','kategori'));
    }

    public function home()
    {
        return view('front.layouts.dashboard.home');
    }

    public function detail_ticket_kc()
    {
        return view('front.layouts.detail_ticket_kc');
    }
}
