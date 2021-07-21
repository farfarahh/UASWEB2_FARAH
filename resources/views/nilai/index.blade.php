@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Data Nilai
                  <a href="{{ route('tambah_nilai') }}" class="btn btn-md btn-primary float-right">Tambah Nilai</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No. </th>
                                <th>Nama Lengkap :</th>
                                <th>NPM </th>
                                <th>Nama Mata Kuliah :</th>
                                <th>SKS</th>
                                <th>Nilai</th>
                                <th>AKSI </th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($nilai as $n)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <th>{{ $n->mahasiswa->user->name }}</th>
                                <td>{{ $n->mahasiswa->npm }}</td>
                                <td>{{ $n->makul->nama_makul }}</td>
                                <td>{{ $n->makul->sks }}</td>
                                <td>{{ $n->nilai }}</td>
                                <td>
                                    <a href="{{ route('nilai.edit', $n->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus.nilai', $n->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
