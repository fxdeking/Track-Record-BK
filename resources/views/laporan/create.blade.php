@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Buat Laporan Keluhan</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif

        @error('pengunjung_id')
            <p class="alert alert-danger alert-dismissable">
                {{ $message }} <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </p>
        @enderror
        <form action="{{ route('laptambah') }}" method="POST">@csrf
            <input type="hidden" name="pengunjung_id" value="{{ $pengunjung->id }}">
            <input type="hidden" name="kategori_id" value="{{ $pengunjung->kategori->id }}">
            <div class="form-floating mb-3">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ $pengunjung->nama }}" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="nama" autofocus disabled>
                <label for="floatingInput">Nama Pengunjung</label>
                @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="kategori" type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori"
                    value="{{ $pengunjung->kategori->nama }}" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="kategori" autofocus disabled>
                <label for="floatingInput">Kategori Keluhan</label>
                @error('kategori')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="form-floating mb-3">
                <textarea class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" id="keluhan" rows="2" style="height:100%;" id="floatingInput" placeholder="name@example.com"
                    autocomplete="keluhan" autofocus>{{ old('keluhan') }}</textarea>
                <label for="floatingInput">Keluhan Pengunjung</label>
                @error('keluhan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="form-floating mb-3">
                <p class="bg-primary rounded p-3">Waktu Kunjungan (Mulai - Selesai)</p>
                <input type="time" class="@error('kunjungan') is-invalid @enderror" name="kunjungan" value="{{ old('kunjungan') }}" autofocus>
                @error('kunjungan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                -
                <input type="time" class="@error('keluar') is-invalid @enderror" name="keluar" value="{{ old('keluar') }}" autofocus>
                @error('keluar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</div>
@endsection
