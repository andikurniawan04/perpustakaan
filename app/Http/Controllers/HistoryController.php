<?php

namespace App\Http\Controllers;

use App\Models\Meminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{

    public function index()
    {
        $id = Auth::user()->id_user;
        $history = Meminjam::all()->where('id_user', '=', $id);
        return view('anggota.history.index', compact('history'));
    }
}
