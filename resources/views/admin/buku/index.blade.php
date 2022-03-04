@extends('layouts/app')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Buku Perpustakaan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <a href="{{ route('buku.create') }}"
                            class="btn btn-primary text-decoration-none font-weight-normal mb-3"><i>Buat
                                data
                                Buku</i></a>
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="5%">Kategori</th>
                                <th width="40%">Judul</th>
                                <th width="15%">Pengarang</th>
                                <th width="15%">Penerbit</th>
                                <th width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bukus as $buku)
                                <tr>
                                    <th scope="buku">{{ $loop->iteration }}</th>
                                    <td>{{ $buku->category->keterangan }}</td>
                                    <td>{{ $buku->judul_buku }}</td>
                                    <td>{{ $buku->pengarang }}</td>
                                    <td>{{ $buku->penerbit }}</td>
                                    <td>
                                        <a href="/buku/{{ $buku->id_buku }}" type="button" class="btn btn-success"><span>
                                                <i class="fas fa-eye"></i></span></a>
                                        <a href="/buku/{{ $buku->id_buku }}/edit" type="button"
                                            class="btn btn-primary"><span>
                                                <i class="fas fa-edit"></i></span></a>
                                        <form action="{{ route('buku.destroy', $buku->id_buku) }}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger border-0" type="submit"
                                                onclick="return confirm('Apakah kamu yakin?')"><span>
                                                    <i class="fas fa-trash"></i></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        {{ $bukus->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
