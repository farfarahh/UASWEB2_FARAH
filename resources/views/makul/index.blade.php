@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Data Makul
                  <a href="{{ route('tambah_makul') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No. </th>
                                <th>Kode Makul :</th>
                                <th>Nama Makul :</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($makul as $mk)
                                <tr>
                                    <td>{{ $mk->id}}</td>
                                    <td>{{ $mk->kode_makul}}</td>
                                    <td>{{ $mk->nama_makul}}</td>
                                    <td>{{ $mk->sks}}</td>
                                    <td>
                                        <a href="{{ route('makul.edit', $mk->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                                        <a href="#" class="btn btn-sm btn-danger">HAPUS</a>
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
