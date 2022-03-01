<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meminjam;

class HistoryController extends Controller
{
    
    public function index()
    {
        $history = Meminjam::all();
        return view('anggota.history.index', compact('history'));
    }
}
