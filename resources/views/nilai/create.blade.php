@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center>Input Nilai</center></div>

                <div class="card-body">
                   <form action="{{ route('simpan.nilai') }}" method="post" class="form-item">
                        @csrf
                        <div class="form-group">
                    <label for="name">Nama Makul</label>
                    <select name="makul_id" id="makul_id" class="form-control col-md-10">
                        <option value="" disabled selected>--Pilih Nama Makul--</option>
                        @foreach ($makul as $mk)
                            <option value="{{ $mk->id }}">{{ $mk->nama_makul }}</option>
                        @endforeach
                    </select>
                    </div>


                    <div class="form-group">
                    <label for="name">Nama Mahasiswa</label>
                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control col-md-10">
                        <option value="" disabled selected>--Pilih Nama Mahasiswa--</option>
                        @foreach ($mahasiswa as $mhs)
                            <option value="{{ $mhs->id }}">{{ $mhs->user->name }}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                    <label for="nilai">Nilai</label>
                    <input type="number" name="nilai" class="form-control col-md-6" placeholder="Masukkan nilai" maxlength="3">
                    </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                 <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                 <a href="{{ route('matakuliah') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
