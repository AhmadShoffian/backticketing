<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $master_status = Status::all();
        return view('back.status.index', ['master_status' => $master_status]);
    }
}
