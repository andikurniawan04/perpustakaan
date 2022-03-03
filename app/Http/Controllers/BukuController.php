<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Meminjam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BukuController extends Controller
{

    public function index()
    {
        $user = auth()->user()->id;
        if (Auth::user($user)->status == 'petugas') {
            return view('admin.buku.index', [
                'title' => 'List Buku Perpustakaan',
                'bukus' => Buku::with('category')->latest()->paginate(5)
            ]);
        } else if (Auth::user($user)->status == 'anggota') {
            return view('anggota.buku.index', [
                'title' => 'List Buku Perpustakaan',
                'bukus' => Buku::with('category')->latest()->paginate(5)
            ]);
        }
    }


    public function create()
    {
        return view('admin.buku.create', [
            'categories' => Kategori::all()
        ]);
    }

    public function store(Request $request)
    {
        $user = auth()->user()->id;
        if (Auth::user($user)->status == 'petugas') {
            $result = Buku::create([
                'judul_buku' => $request->judul,
                'id_kategori' => $request->kategori_id,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
            ]);

            if ($result) {
                return redirect('/buku')->with('success', 'Data berhasil ditambahkan!');
            } else {
                return redirect('/buku')->with('failed', 'Data gagal ditambahkan!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        return view('admin.buku.detail', ['buku' => $buku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        return view('admin.buku.edit', [
            'buku' => $buku,
            'categories' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ([
            'judul_buku' => $request->judul,
            'id_kategori' => $request->kategori_id,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
        ]);

        $result = Buku::findOrFail($id)->update([
            'judul_buku' => $request->judul,
            'id_kategori' => $request->kategori_id,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
        ]);

        if ($result) {
            return redirect()->route('buku.index')
                ->with('Berhasil', 'Data Berhasil Diubah');
        } else {
            return redirect()->route('buku.index')
                ->with('Gagal', 'Data gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $result = Buku::destroy([$buku->id_buku]);

        if ($result) {
            return redirect()->route('buku.index')
                ->with('Berhasil', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('buku.index')
                ->with('Gagal', 'Data gagal Dihapus');
        }
    }
}
