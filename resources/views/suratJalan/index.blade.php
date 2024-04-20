@extends('layouts.main')

@section('container')
<h1 style="text-align: center" class="mb-3">Surat Jalan</h1>
@foreach ($isiSurat as $item)
    <h2>{{ $item['nomorSuratJalan'] }}</h2>
    <h2>{{ $item['tglPengiriman'] }}</h2>
    <h2>{{ $item['jumlahBarang'] }}</h2>
    <h2>{{ $item['namaBarang'] }}</h2>
@endforeach
@endsection