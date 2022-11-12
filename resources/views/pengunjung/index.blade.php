@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Data Pengunjung</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <a href="{{ route('penginput') }}" class="btn btn-success">Tambah Data Pengunjung</a><br><br>
        <div class="table-responsive">
            <table class="table align-middle table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col" style="text-align:center;width:5%;">No.</th>
                        <th scope="col" style="text-align:center;">Nama</th>
                        <th scope="col" style="text-align:center;">Kelas</th>
                        <th scope="col" style="text-align:center;">Usia</th>
                        <th scope="col" style="text-align:center;">Jenis Kelamin</th>
                        <th scope="col" style="text-align:center;">Alamat</th>
                        <th scope="col" style="text-align:center;">Nomor Telepon</th>
                        <th scope="col" style="text-align:center;">Kategori Keluhan</th>
                        <th scope="col" style="text-align:center;">Laporan</th>
                        <th scope="col" colspan="2" style="text-align:center;width:15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($pengunjungs)>0)
                @foreach ($pengunjungs as $pengunjung)
                    <tr>
                        <td style="text-align:center;">{{ $loop->iteration }}</td>
                        <td style="text-align:center;">{{ $pengunjung->nama }}</td>
                        <td style="text-align:center;">{{ $pengunjung->kelas }}</td>
                        <td style="text-align:center;">{{ $pengunjung->usia }} tahun</td>
                        <td style="text-align:center;">{{ $pengunjung->jk }}</td>
                        <td style="text-align:center;">{{ $pengunjung->alamat }}</td>
                        <td style="text-align:center;">{{ $pengunjung->notelp }}</td>
                        <td style="text-align:center;">{{ $pengunjung->kategori->nama }}</td>
                        <td style="text-align:center;"><a class="btn btn-sm btn-info" href="{{ route('pengedit', [$pengunjung->id]) }}">Buat Laporan</a></td>
                        <td style="text-align:center;"><a class="btn btn-sm btn-primary" href="{{ route('pengedit', [$pengunjung->id]) }}">Ubah</a></td>
                        <td style="text-align:center;"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal{{$pengunjung->id}}">Hapus</button></td>
                    </tr>

                    <div class="modal fade" id="exampleModal{{$pengunjung->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('pengdelete', [$pengunjung->id]) }}" method="POST">@csrf
                                {{method_field('DELETE')}}
                                <div class="modal-content bg-secondary bg-gradient">
                                    <div class="modal-header" style="display:flex;">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pengunjung</h5>
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
                <td style="text-align:center;" colspan="10">Tidak ada data pengunjung yang bisa ditampilkan.</td>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
