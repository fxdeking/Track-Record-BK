@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" style="color:red;">Catatan</h4>
        </div>
        <a href="{{ route('catinput') }}" class="btn btn-success">Tambah Catatan</a><br><br>
        <div class="table-responsive">
            <table class="table align-middle table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">Nama</th>
                        <th scope="col">Catatan</th>
                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$123</td>
                        <td>Paid</td>
                        <td><a class="btn btn-sm btn-primary" href="">Ubah</a></td>
                        <td><a class="btn btn-sm btn-primary" href="">Hapus</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
