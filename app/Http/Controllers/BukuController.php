<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    public function index()
    {
        return view('admin.buku.index', [
            'title' => 'List Buku Perpustakaan',
            'bukus' => Buku::with('category')->latest()->paginate(5)
        ]);
    }


    public function create()
    {
        return view('admin.buku.create', [
            'categories' => Kategori::all()
        ]);
    }

    public function store(Request $request)
    {
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
    public function update(Request $request, Buku $buku)
    {
        $data = ([
            'judul_buku' => $request->judul,
            'id_kategori' => $request->kategori_id,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
        ]);

        $result = Buku::where('id', $buku->id_buku)->update($data);

        if ($result) {
            return redirect('/buku')->with('message', 'Data added Successfully');;
        } else {
            return redirect('/buku')->with('failed', 'Data gagal ditambahkan!');
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
        Buku::destroy([$buku->id_buku]);

        return redirect('/buku')->with('success', 'Game is successfully saved');
    }
}
