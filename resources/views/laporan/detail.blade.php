@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Detail Laporan Keluhan</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif

            <div class="form-floating mb-3">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ $laporan->pengunjung->nama }}" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="nama" autofocus disabled>
                <label for="floatingInput">Nama Pengunjung</label>
            </div>

            <div class="form-floating mb-3">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ $laporan->pengunjung->kelas }}" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="nama" autofocus disabled>
                <label for="floatingInput">Kelas Pengunjung</label>
            </div>

            <div class="form-floating mb-3">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ $laporan->pengunjung->usia }}" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="nama" autofocus disabled>
                <label for="floatingInput">Usia Pengunjung</label>
            </div>

            <div class="form-floating mb-3">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ $laporan->pengunjung->jk }}" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="nama" autofocus disabled>
                <label for="floatingInput">Jenis Kelamin Pengunjung</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" id="keluhan" rows="2" style="height:100%;background-color:#EB1616;" id="floatingInput" placeholder="name@example.com"
                    autocomplete="keluhan" autofocus disabled>{{ $laporan->pengunjung->alamat }}</textarea>
                <label for="floatingInput">Alamat Pengunjung</label>
            </div>

            <div class="form-floating mb-3">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ $laporan->pengunjung->notelp }}" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="nama" autofocus disabled>
                <label for="floatingInput">Nomor Telepon Pengunjung</label>
            </div>

            <div class="form-floating mb-3">
                <input id="kategori" type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori"
                    value="{{ $laporan->kategori->nama }}" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="kategori" autofocus disabled>
                <label for="floatingInput">Kategori Keluhan</label>
            </div>
            
            <div class="form-floating mb-3">
                <textarea class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" id="keluhan" rows="2" style="height:100%;background-color:#EB1616;" id="floatingInput" placeholder="name@example.com"
                    autocomplete="keluhan" autofocus disabled>{{ $laporan->keluhan }}</textarea>
                <label for="floatingInput">Keluhan Pengunjung</label>
            </div>
            
            <div class="form-floating mb-3">
                <input id="kategori" type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori"
                    value="{{ $laporan->kunjungan }} - @if (($laporan->keluar) == '')Belum Diisi @else {{ $laporan->keluar }} @endif" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="kategori" autofocus disabled>
                <label for="floatingInput">Waktu Kunjungan</label>
            </div>
            
            @php
                $kunjungan = new DateTime($laporan->kunjungan);
                $keluar = new DateTime($laporan->keluar);
                $jarak = $kunjungan->diff($keluar);

                $durasi = $jarak->format('%h jam %i menit'); 
            @endphp
            <div class="form-floating mb-3">
                <input id="durasi" type="text" class="form-control @error('durasi') is-invalid @enderror" name="durasi"
                    value="{{ $durasi }}" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="durasi" autofocus disabled>
                <label for="floatingInput">Durasi Konseling</label>
            </div>
            
            <div class="form-floating mb-3">
                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status"
                    value="{{ ($laporan->status=="Belum")? "Belum Ada" : "" }}" id="floatingInput" placeholder="name@example.com" style="background-color:#EB1616;"
                    autocomplete="status" autofocus disabled>
                <label for="floatingInput">Status</label>
            </div>

            <div class="form-floating mb-3">
                <div style="background-color:#EB1616;border-radius:5px;border:1px solid black;">
                <label style="padding:1rem 0.75rem;opacity:.65;">Tindak Lanjut</label><br>
                            <b>
                            <table class="table align-middle table-hover mb-0" style="padding:1rem 0.75rem;">
                <thead>
                    <tr class="text-white">
                        <th scope="col" style="text-align:center;">Pertemuan</th>
                        <th scope="col" style="text-align:center;">Nama Konselor</th>
                        <th scope="col" style="text-align:center;">Tanggal dan Waktu</th>
                        <th scope="col" style="text-align:center;">Tindak Lanjut</th>
                        <th scope="col" style="text-align:center;width:15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count(App\Models\Tindak::where('laporan_id', $laporan->id)->get())>0)
                @foreach(App\Models\Tindak::where('laporan_id', $laporan->id)->get() as $tindak)
                    <tr>
                        <td style="text-align:center;">Pertemuan ke - {{ $tindak->pertemuan }}</td>
                        <td style="text-align:center;">{{ $tindak->konselor->nama }}</td>
                        <td style="text-align:center;">{{ $tindak->created_at }}</td>
                        <td style="text-align:center;">{{ $tindak->tindakan }}</td>
                        <td style="text-align:center;"><a class="btn btn-sm btn-info" href="{{ route('tinedit', [$tindak->id]) }}">Ubah</a></td>
                    </tr>
                @endforeach
                @else
                <td style="text-align:center;" colspan="5">Tidak ada tindak lanjut yang bisa ditampilkan.</td>
                @endif
                </tbody>
            </table>
                            </b>
                </div>
            </div><br><br>
            <a href="{{ route('tininput', [$laporan->id]) }}" class="btn btn-success">Beri Tindak Lanjut</a> 
    </div>
</div>
@endsection
