<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Meminjam;

class MeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Buku $buku)
    {
        $user = Auth::id();
        $result = Meminjam::create([
            'id_user' => $user,
            'id_buku' => $request->input('id', $buku->id_buku),
            'tanggal_pinjam' => Carbon::now(),
            'tanggal_kembali' => Carbon::now(),
        ]);

        if ($result) {
            return redirect('/buku')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect('/buku')->with('failed', 'Data gagal ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meminjam  $meminjam
     * @return \Illuminate\Http\Response
     */
    public function show(Meminjam $meminjam)
    {
        //
    }
}
