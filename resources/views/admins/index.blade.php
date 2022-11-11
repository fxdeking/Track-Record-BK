@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Admin</h4>
        </div>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <br>
        <div class="table-responsive">
            <table class="table align-middle table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col" style="text-align:center;width:15%;">No.</th>
                        <th scope="col" style="text-align:center;">Nama Admin</th>
                        <th scope="col" style="text-align:center;">Email Admin</th>
                        <th scope="col" style="text-align:center;">Nomor Telepon Admin</th>
                        <th scope="col" style="text-align:center;width:15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($admins)>0)
                @foreach ($admins as $admin)
                    <tr>
                        <td style="text-align:center;">{{ $loop->iteration }}</td>
                        <td style="text-align:center;">{{ $admin->name }}</td>
                        <td style="text-align:center;">{{ $admin->email }}</td>
                        <td style="text-align:center;">{{ $admin->telepon }}</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal{{$admin->id}}">Hapus</button></td>
                    </tr>

                    <div class="modal fade" id="exampleModal{{$admin->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('admdelete', [$admin->id]) }}" method="POST">@csrf
                                {{method_field('DELETE')}}
                                <div class="modal-content bg-secondary bg-gradient">
                                    <div class="modal-header" style="display:flex;">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Admin</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @if (($admin->id) == Auth::user()->id)
                                    <div class="modal-body">
                                        Apakah Anda Yakin ?<br><br><p class="text-danger"><b>(Akun admin ini sedang digunakan, jika ingin menghapusnya anda harus mendaftar ulang)</b></p>
                                    </div>
                                    @else
                                    <div class="modal-body">
                                        Apakah Anda Yakin ?
                                    </div>
                                    @endif
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
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
