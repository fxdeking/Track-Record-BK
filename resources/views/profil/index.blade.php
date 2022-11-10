@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h3 class="mb-0" style="color:red;text-align:center;">Profil Anda</h3>
        <br><br>
        <div style="text-align:center;">
            <img class="rounded-circle" src="{{ asset('foto') }}/{{ Auth::user()->foto }}" alt="" style="width: 200px; height: 200px;">
        </div>
        <br>
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissable">{{ Session::get('message') }} <button type="button"
                class="close" data-dismiss="alert" aria-hidden="true">&times;</button></p>
        @endif
        <div class="d-flex align-items-center justify-content-between">
            <table class="table table-borderless">
                <tr>
                    <td class="align-middle" style="padding-left:20px;">Nama : <b>{{ Auth::user()->name }}</b></td>
                    <td class="align-middle"><button type="button" class="btn btn-square btn-outline-info m-1" data-toggle="modal" data-target="#exampleModalNama{{Auth::user()->id}}"><i class="fa fa-edit"></i></button></td>
                    <div class="modal fade" id="exampleModalNama{{Auth::user()->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalNamaLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('profilupdatenama', [Auth::user()->id]) }}" method="POST">@csrf
                                <div class="modal-content bg-secondary bg-gradient">
                                    <div class="modal-header" style="display:flex;padding-left:39%;">
                                        <h5 class="modal-title" id="exampleModalNamaLabel">Ubah Nama</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ Auth::user()->name }}" id="floatingInput" placeholder="Nama Lengkap" autocomplete="nama" autofocus>
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                    <div class="modal-footer" style="padding-right:35%;">
                                        <button type="submit" class="btn btn-danger">Ubah</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </tr>
                
                <tr>
                    <td class="align-middle" style="padding-left:20px;">Email : <b>{{ Auth::user()->email }}</b></td>
                    <td class="align-middle"><button type="button" class="btn btn-square btn-outline-info m-1" data-toggle="modal" data-target="#exampleModalEmail{{Auth::user()->id}}"><i class="fa fa-edit"></i></button></td>
                    <div class="modal fade" id="exampleModalEmail{{Auth::user()->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalEmailLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('profilupdateemail', [Auth::user()->id]) }}" method="POST">@csrf
                                <div class="modal-content bg-secondary bg-gradient">
                                    <div class="modal-header" style="display:flex;padding-left:39%;">
                                        <h5 class="modal-title" id="exampleModalEmailLabel">Ubah Email</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" id="floatingInput" placeholder="Email" autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                    <div class="modal-footer" style="padding-right:35%;">
                                        <button type="submit" class="btn btn-danger">Ubah</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </tr>

                <tr>
                    <td class="align-middle" style="padding-left:20px;">Telepon : <b>{{ Auth::user()->telepon }}</b></td>
                    <td class="align-middle"><button type="button" class="btn btn-square btn-outline-info m-1" data-toggle="modal" data-target="#exampleModalTelepon{{Auth::user()->id}}"><i class="fa fa-edit"></i></button></td>
                    <div class="modal fade" id="exampleModalTelepon{{Auth::user()->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalTeleponLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('profilupdatetelepon', [Auth::user()->id]) }}" method="POST">@csrf
                                <div class="modal-content bg-secondary bg-gradient">
                                    <div class="modal-header" style="display:flex;padding-left:30.5%;">
                                        <h5 class="modal-title" id="exampleModalTeleponLabel">Ubah Nomor Telepon</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <input id="telepon" type="number" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ Auth::user()->telepon }}" id="floatingInput" placeholder="Nomor Telepon" autocomplete="telepon" autofocus>
                                    @error('telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                    <div class="modal-footer" style="padding-right:35%;">
                                        <button type="submit" class="btn btn-danger">Ubah</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </tr>

                <tr>
                    <td class="align-middle" style="padding-left:20px;">Ganti Kata Sandi</td>
                    <td class="align-middle"><button type="button" class="btn btn-square btn-outline-info m-1"  data-toggle="modal" data-target="#exampleModalPassword{{Auth::user()->id}}"><i class="fa fa-edit"></i></button></td>
                    <div class="modal fade" id="exampleModalPassword{{Auth::user()->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalPasswordLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('profilupdatepassword') }}" method="POST">@csrf
                                <div class="modal-content bg-secondary bg-gradient">
                                    <div class="modal-header" style="display:flex;padding-left:34%;">
                                        <h5 class="modal-title" id="exampleModalPasswordLabel">Ubah Kata Sandi</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" id="floatingInput" placeholder="Kata Sandi Sekarang" autocomplete="current_password" autofocus>
                                    @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <br>
                                    <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="floatingInput" placeholder="Kata Sandi Baru" autocomplete="new_password" autofocus>
                                    @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <br>
                                    <input id="new_confirm_password" type="password" class="form-control @error('new_confirm_password') is-invalid @enderror" name="new_confirm_password" id="floatingInput" placeholder="Konfirmasi Kata Sandi Baru" autocomplete="new_confirm_password" autofocus>
                                    @error('new_confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                    <div class="modal-footer" style="padding-right:35%;">
                                        <button type="submit" class="btn btn-danger">Ubah</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </tr>

                <tr>
                    <td class="align-middle" style="padding-left:20px;">Ubah Foto Profil</td>
                    <td class="align-middle"><button type="button" class="btn btn-square btn-outline-info m-1" data-toggle="modal" data-target="#exampleModalFoto{{Auth::user()->id}}"><i class="fa fa-edit"></i></button></td>
                    <div class="modal fade" id="exampleModalFoto{{Auth::user()->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalFotoLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('profilupdatefoto', [Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">@csrf
                                <div class="modal-content bg-secondary bg-gradient">
                                    <div class="modal-header" style="display:flex;padding-left:35%;">
                                        <h5 class="modal-title" id="exampleModalFotoLabel">Ubah Foto Profil</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <style>
                                        input[type=file]::file-selector-button {
                                        background-color: gray;
                                        }    
                                        </style>
                                    <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror bg-dark" name="foto" id="floatingInput" placeholder="Foto Profil">
                                    @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                    <div class="modal-footer" style="padding-right:35%;">
                                        <button type="submit" class="btn btn-danger">Ubah</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection