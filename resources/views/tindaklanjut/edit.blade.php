@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Ubah Tindak Lanjut</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <form action="{{ route('tinupdate', [$tindak->id]) }}" method="POST">@csrf
            <input type="hidden" name="laporan_id" value="{{ $tindak->laporan_id }}">

            <div class="form-floating mb-3">
                <input id="pertemuan" type="number" class="form-control @error('pertemuan') is-invalid @enderror" name="pertemuan"
                    value="{{ $tindak->pertemuan }}" id="floatingInput" placeholder="name@example.com"
                    autocomplete="pertemuan" autofocus>
                <label for="floatingInput">Pertemuan</label>
                @error('pertemuan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <select class="form-select mb-3 p-3" aria-label="Default select example" name="status" required>
                @foreach(App\Models\Laporan::where('id', $tindak->laporan_id)->get() as $laporan)
                    <option value="Proses" {{ ($laporan->status=="Proses")? "selected" : "" }}>Proses</option>
                    <option value="Selesai" {{ ($laporan->status=="Selesai")? "selected" : "" }}>Selesai</option>
                @endforeach
                </select>
                @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control @error('tindakan') is-invalid @enderror" name="tindakan" id="tindakan" rows="2" style="height:100%;" id="floatingInput" placeholder="name@example.com"
                    autocomplete="tindakan" autofocus>{{ $tindak->tindakan }}</textarea>
                <label for="floatingInput">Tindak Lanjut</label>
                @error('tindakan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="mb-3">
                <select class="form-select mb-3 p-3" aria-label="Default select example" name="konselor_id" required>
                    @foreach(App\Models\Konselor::all() as $konselor)
                    <option value="{{ $konselor->id }}" {{ ($tindak->konselor_id=="$konselor->id")? "selected" : "" }}>{{ $konselor->nama }}</option>
                    @endforeach
                </select>
                @error('konselor_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</div>
@endsection
