<?php

namespace App\Http\Controllers;

use App\Models\Meminjam;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Appointment;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meminjam  $meminjam
     * @return \Illuminate\Http\Response
     */
    public function edit(Meminjam $meminjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meminjam  $meminjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meminjam $meminjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meminjam  $meminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meminjam $meminjam)
    {
        //
    }
}
