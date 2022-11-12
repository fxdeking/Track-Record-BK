@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Tambah Data Pengunjung</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <form action="{{ route('pengtambah') }}" method="POST">@csrf
            <div class="form-floating mb-3">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama') }}" id="floatingInput" placeholder="name@example.com"
                    autocomplete="nama" autofocus>
                <label for="floatingInput">Nama Pengunjung</label>
                @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas"
                    value="{{ old('kelas') }}" id="floatingInput" placeholder="name@example.com"
                    autocomplete="kelas" autofocus>
                <label for="floatingInput">Kelas Pengunjung</label>
                @error('kelas')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="usia" type="number" class="form-control @error('usia') is-invalid @enderror" name="usia"
                    value="{{ old('usia') }}" id="floatingInput" placeholder="name@example.com"
                    autocomplete="usia" autofocus>
                <label for="floatingInput">Usia Pengunjung</label>
                @error('usia')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="form-floating mb-3">
                <p class="bg-primary rounded p-3">Jenis Kelamin</p>
                <div class="form-check">
                    <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Laki-laki">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Laki-laki
                    </label>
                    <input class="form-check-input" name="jk" style="margin-left:27px;" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Perempuan">
                    <label class="form-check-label"  style="margin-left:50px;" for="flexRadioDefault1">
                        Perempuan
                    </label>
                </div>
                @error('jk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="2" style="height:100%;" id="floatingInput" placeholder="name@example.com"
                    autocomplete="alamat" autofocus>{{ old('alamat') }}</textarea>
                <label for="floatingInput">Alamat Pengunjung</label>
                @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="notelp" type="number" class="form-control @error('notelp') is-invalid @enderror" name="notelp"
                    value="{{ old('notelp') }}" id="floatingInput" placeholder="name@example.com"
                    autocomplete="notelp" autofocus>
                <label for="floatingInput">Nomor Telepon Pengunjung</label>
                @error('notelp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="mb-3">
                <select class="form-select mb-3 p-3" aria-label="Default select example" name="kategori_id">
                    <option value="" selected>Pilih Kategori Keluhan</option>
                    @foreach(App\Models\Kategori::all() as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endforeach
                </select>
                @error('kategori_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</div>
@endsection
