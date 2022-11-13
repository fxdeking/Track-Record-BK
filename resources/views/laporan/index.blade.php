@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Data Laporan Pengunjung</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <div class="table-responsive">
            <table class="table align-middle table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col" style="text-align:center;width:5%;">No.</th>
                        <th scope="col" style="text-align:center;width:15%;">Nama</th>
                        <th scope="col" style="text-align:center;width:13%;">Kategori Keluhan</th>
                        <th scope="col" style="text-align:center;">Keluhan Pengunjung</th>
                        <th scope="col" style="text-align:center;width:20%;">Waktu Kunjungan</th>
                        <th scope="col" style="text-align:center;width:13%;">Durasi Konseling</th>
                        <th scope="col" colspan="2" style="text-align:center;width:15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($laporans)>0)
                @foreach ($laporans as $laporan)
                @php
                    $kunjungan = new DateTime($laporan->kunjungan);
                    $keluar = new DateTime($laporan->keluar);
                    $jarak = $kunjungan->diff($keluar);

                    $durasi = $jarak->format('%h jam %i menit'); 
                @endphp
                    <tr>
                        <td style="text-align:center;">{{ $loop->iteration }}</td>
                        <td style="text-align:center;">{{ $laporan->pengunjung->nama }}</td>
                        <td style="text-align:center;">{{ $laporan->kategori->nama }}</td>
                        <td style="text-align:center;">{{ $laporan->keluhan }}</td>
                        <td style="text-align:center;">{{ $laporan->kunjungan }} - @if (($laporan->keluar) == '')Belum Diisi @else {{ $laporan->keluar }} @endif</td>
                        <td style="text-align:center;">{{ $durasi }}</td>
                        <td style="text-align:center;"><a class="btn btn-sm btn-primary" href="{{ route('lapedit', [$laporan->id]) }}">Ubah</a></td>
                        <td style="text-align:center;"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal{{$laporan->id}}">Hapus</button></td>
                    </tr>

                    <div class="modal fade" id="exampleModal{{$laporan->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('lapdelete', [$laporan->id]) }}" method="POST">@csrf
                                {{method_field('DELETE')}}
                                <div class="modal-content bg-secondary bg-gradient">
                                    <div class="modal-header" style="display:flex;">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Laporan Pengunjung</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda Yakin ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
                @else
                <td style="text-align:center;" colspan="10">Tidak ada data laporan pengunjung yang bisa ditampilkan.</td>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
