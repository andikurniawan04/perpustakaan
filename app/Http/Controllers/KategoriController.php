<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama',
        ]);
        $result = Kategori::create([

            'keterangan' => $request->nama
        ]);


        if ($result) {
            Alert::success('Berhasil', 'Data Berhasil ditambahkan');
            return redirect()->route('kategori.index');
        } else {
            Alert::warning('Gagal', 'Data tidak Berhasil ditambahkan');
            return redirect()->route('kategori.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama',
        ]);
        $result = Kategori::findOrFail($id)->update([
            'keterangan' => $request->nama
        ]);

        if ($result) {
            Alert::success('Berhasil', 'Data Berhasil diUbah');
            return redirect()->route('kategori.index');
        } else {
            Alert::warning('Gagal', 'Data tidak Berhasil diUbah');
            return redirect()->route('kategori.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Kategori::findOrFail($id)->delete();
        if ($result) {
            Alert::success('Berhasil', 'Data Berhasil diHapus');
            return redirect()->route('kategori.index');
        } else {
            Alert::warning('Gagal', 'Data tidak Berhasil diHapus');
            return redirect()->route('kategori.index');
        }
    }
}
