@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Ubah Kategori Keluhan</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <form action="{{ route('katupdate', [$kategori->id]) }}" method="POST">@csrf
            <div class="form-floating mb-3">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ $kategori->nama }}" id="floatingInput" placeholder="name@example.com"
                    autocomplete="nama" autofocus>
                <label for="floatingInput">Nama Kategori</label>
                @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="2" style="height:100%;" id="floatingInput" placeholder="name@example.com"
                    autocomplete="deskripsi" autofocus>{{ $kategori->deskripsi }}</textarea>
                <label for="floatingInput">Deskripsi</label>
                @error('deskripsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <button type="submit" class="btn btn-success">Ubah</button>
    </div>
</div>
@endsection
