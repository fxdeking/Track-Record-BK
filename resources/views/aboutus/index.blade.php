@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h3 class="mb-0" style="color:red;text-align:center;">Tentang Kami</h3>
        <br><br>
        <div style="text-align:center;">
        <img src="{{ asset('gambar/trackrecordbklogo.jpeg') }}" width="300px">
        </div>
        <br><br>
        <div class="d-flex align-items-center justify-content-between mb-4">
            Kami adalah kelompok dari kelas XII RPL 1 Cinta kasih Tzu Chi angkatan 2022/2023 yang beranggotakan Hendy Tandika, Keila Marie Setiawan, Cecilya Lim, Steaven, Leonardo Setiawan, dan William. Website ini kami buat sebagai rekam jejak untuk bimbingan konseling agar dapat mempermudah dalam pengecekan segala hal yang telah dilakukan oleh BK sehingga dapat menunjukkan kualitas dan kuantitas BK dalam membantu mengatasi masalah, dan lain sebagainya. Harapannya dengan adanya track record ini dapat membantu para konselor atau guru BK dalam mendata laporan konseling secara akurat.
        </div>
    </div>
</div>
@endsection