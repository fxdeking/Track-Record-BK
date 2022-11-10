@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h3 class="mb-0" style="color:red;text-align:center;">Profil Anda</h3>
        <br><br>
        <div style="text-align:center;">
            <img class="rounded-circle" src="{{ asset('foto') }}/{{ Auth::user()->foto }}" alt="" style="width: 200px; height: 200px;">
        </div>
        <br><br>
        <div class="d-flex align-items-center justify-content-between">
            <table class="table table-borderless">
                <tr>
                    <td class="align-middle" style="padding-left:20px;">Nama : <b>{{ Auth::user()->name }}</b></td>
                    <td class="align-middle"><button type="button" class="btn btn-square btn-outline-info m-1" data-toggle="modal" data-target="#exampleModal{{$catats->id}}"><i class="fa fa-edit"></i></button></td>
                    <div class="modal fade" id="exampleModal{{$catat->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('catdelete', [$catat->id]) }}" method="POST">@csrf
                                {{method_field('DELETE')}}
                                <div class="modal-content bg-secondary bg-gradient">
                                    <div class="modal-header" style="display:flex;">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Catatan</h5>
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
                </tr>
                <tr>
                    <td class="align-middle" style="padding-left:20px;">Email : <b>{{ Auth::user()->email }}</b></td>
                    <td class="align-middle"><button type="button" class="btn btn-square btn-outline-info m-1"><i class="fa fa-edit"></i></button></td>
                </tr>
                <tr>
                    <td class="align-middle" style="padding-left:20px;">Telepon : <b>{{ Auth::user()->telepon }}</b></td>
                    <td class="align-middle"><button type="button" class="btn btn-square btn-outline-info m-1"><i class="fa fa-edit"></i></button></td>
                </tr>
                <tr>
                    <td class="align-middle" style="padding-left:20px;">Ganti Password</td>
                    <td class="align-middle"><button type="button" class="btn btn-square btn-outline-info m-1"><i class="fa fa-edit"></i></button></td>
                </tr>
                <tr>
                    <td class="align-middle" style="padding-left:20px;">Ubah Foto Profil</td>
                    <td class="align-middle"><button type="button" class="btn btn-square btn-outline-info m-1"><i class="fa fa-edit"></i></button></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection