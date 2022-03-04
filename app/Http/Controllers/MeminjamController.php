<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Meminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        $admins = User::where('status', 'petugas')->count();
        return view('anggota.index', compact('collBooks', 'books', 'admins', 'users', 'categories'));
    }

    public function index()

    {

        $buku = Buku::all();
        $keterangan = Kategori::get();
        return view('anggota.pinjam.index', ['keterangan' => $keterangan], compact('buku', 'keterangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Buku $buku)
    {
        $start = Carbon::today();
        $until = clone $start;
        $end = $until->addWeek();

        $request->validate([
            'id_user',
            'id_buku'
        ]);

        $result = Meminjam::create([
            'id_user' => $request->id_user,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $start->toDateString(),
            'tanggal_kembali' => $end->toDateString(),
        ]);

        if ($result) {
            Alert::success('Berhasil', 'Buku berhasil dipinjam selama satu minggu');
            return redirect()->route('pinjam.index');
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
}
