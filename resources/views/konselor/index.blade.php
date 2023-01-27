@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Data Konselor</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <a href="{{ route('koninput') }}" class="btn btn-success">Tambah Data Konselor</a><br><br>
        <div class="table-responsive">
            <table class="table align-middle table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col" style="text-align:center;width:5%;">No.</th>
                        <th scope="col" style="text-align:center;">Nama</th>
                        <th scope="col" style="text-align:center;">Jenis Kelamin</th>
                        <th scope="col" style="text-align:center;">Nomor Telepon</th>
                        <th scope="col" colspan="2" style="text-align:center;width:15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($konselors)>0)
                @foreach ($konselors as $konselor)
                    <tr>
                        <td style="text-align:center;">{{ $loop->iteration }}</td>
                        <td style="text-align:center;">{{ $konselor->nama }}</td>
                        <td style="text-align:center;">{{ $konselor->jk }}</td>
                        <td style="text-align:center;">{{ $konselor->notelp }}</td>
                        <td style="text-align:center;"><a class="btn btn-sm btn-primary" href="{{ route('konedit', [$konselor->id]) }}">Ubah</a></td>
                        <td style="text-align:center;"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal{{$konselor->id}}">Hapus</button></td>
                    </tr>

                    <div class="modal fade" id="exampleModal{{$konselor->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('kondelete', [$konselor->id]) }}" method="POST">@csrf
                                {{method_field('DELETE')}}
                                <div class="modal-content bg-secondary bg-gradient">
                                    <div class="modal-header" style="display:flex;">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Konselor</h5>
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
                <td style="text-align:center;" colspan="6">Tidak ada data konselor yang bisa ditampilkan.</td>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
