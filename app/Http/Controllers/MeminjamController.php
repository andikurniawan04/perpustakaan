<?php

namespace App\Http\Controllers;

use App\Models\Meminjam;
use App\Models\Buku;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexAnggota()
    {

        $books = Buku::all()->count();
        $collBooks = Buku::with('category')->latest()->paginate(6);
        $categories = Kategori::all()->count();
        $users = User::where('status', 'anggota')->count();
        $admins = User::where('status', 'admin')->count();
        return view('anggota.index', compact('collBooks', 'books', 'admins', 'users', 'categories'));
    }

    public function index()
    {
        $buku = Buku::all();
        $keterangan = Kategori::get();
        return view('anggota.pinjam.index', ['keterangan' => $keterangan], compact('buku', 'keterangan'));
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
        $date = Carbon::now();
        $request->validate([
            'id_user',
            'id_buku'
        ]);
        $result = Meminjam::create([

            'id_user' => $request->id_user,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $date->toDateString()
        ]);

        if ($result) {
            return redirect()->route('pinjam.index')
                ->with('Berhasil', 'Buku Berhasil Dipinjam');
        } else {
            return redirect()->route('pinjam.index')
                ->with('Gagal', 'Buku gagal Dipinjam');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meminjam  $meminjam
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('anggota.pinjam.show', compact('buku'));
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
