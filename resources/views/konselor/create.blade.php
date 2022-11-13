@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Tambah Data Konselor</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <form action="{{ route('kontambah') }}" method="POST">@csrf
        <div class="mb-3">
                <select class="form-select mb-3 p-3" aria-label="Default select example" name="jadwal_id">
                    <option value="" selected>Pilih Nama Konselor</option>
                    @foreach(App\Models\Jadwal::all() as $jadwal)
                    <option value="{{ $jadwal->id }}">{{ $jadwal->nama }}</option>
                    @endforeach
                </select>
                @error('jadwal_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <p class="text-info ml-1">Jika nama tidak ada, isi jadwal bertugas terlebih dahulu</p>
            </div>
            <br>
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
                <input id="notelp" type="number" class="form-control @error('notelp') is-invalid @enderror" name="notelp"
                    value="{{ old('notelp') }}" id="floatingInput" placeholder="name@example.com"
                    autocomplete="notelp">
                <label for="floatingInput">Nomor Telepon Konselor</label>
                @error('notelp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</div>
@endsection
