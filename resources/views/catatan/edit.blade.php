@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Ubah Catatan</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <form action="{{ route('catupdate', [$catat->id]) }}" method="POST">@csrf
            <div class="form-floating mb-3">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ $catat->nama }}" id="floatingInput" placeholder="name@example.com"
                    autocomplete="nama" autofocus>
                <label for="floatingInput">Nama</label>
                @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input id="catatan" type="text" class="form-control @error('catatan') is-invalid @enderror"
                    name="catatan" value="{{ $catat->catatan }}" id="floatingInput" placeholder="name@example.com"
                    autocomplete="catatan" autofocus>
                <label for="floatingInput">Catatan</label>
                @error('catatan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</div>
@endsection
