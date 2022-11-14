@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Tambah Jadwal Bertugas</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <form action="{{ route('jadtambah') }}" method="POST">@csrf
            <div class="form-floating mb-3">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama') }}" id="floatingInput" placeholder="name@example.com"
                    autocomplete="nama" autofocus>
                <label for="floatingInput">Nama Konselor</label>
                @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="form-floating mb-3">
                <p class="bg-primary rounded p-3">Hari Bertugas</p>
                <div class="form-check">
                    <input class="form-check-input" name="hari[]" type="checkbox" value="Senin" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Senin
                    </label>

                    <input class="form-check-input" name="hari[]" style="margin-left:27px;" type="checkbox" value="Selasa" id="flexCheckDefault">
                    <label class="form-check-label" style="margin-left:50px;" for="flexCheckDefault">
                        Selasa
                    </label>

                    <input class="form-check-input" name="hari[]" style="margin-left:27px;" type="checkbox" value="Rabu" id="flexCheckDefault">
                    <label class="form-check-label" style="margin-left:50px;" for="flexCheckDefault">
                        Rabu
                    </label>

                    <input class="form-check-input" name="hari[]" style="margin-left:27px;" type="checkbox" value="Kamis" id="flexCheckDefault">
                    <label class="form-check-label" style="margin-left:50px;" for="flexCheckDefault">
                        Kamis
                    </label>

                    <input class="form-check-input" name="hari[]" style="margin-left:27px;" type="checkbox" value="Jumat" id="flexCheckDefault">
                    <label class="form-check-label" style="margin-left:50px;" for="flexCheckDefault">
                        Jumat
                    </label>
                </div>
                @error('hari')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="form-floating mb-3">
                <p class="bg-primary rounded p-3">Jam Bertugas (Mulai - Selesai)</p>
                <input type="time" class="@error('jammulai') is-invalid @enderror" name="jammulai" value="{{ old('jammulai') }}" autofocus>
                @error('jammulai')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                -
                <input type="time" class="@error('jamselesai') is-invalid @enderror" name="jamselesai" value="{{ old('jamselesai') }}" autofocus>
                @error('jamselesai')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</div>
@endsection
