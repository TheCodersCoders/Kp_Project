@extends('layouts.main')
@section('container')
@section('title', 'Mutasi')
@section('page1','Mutasi')

<form>
  {{-- Pengirim --}}
  <div class="pengirim">
    <h3 class="mt-2">Pengirim</h3>
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Penanggung Jawab">
    </div>
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Divisi">
    </div>
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Dibuat Oleh">
    </div>
  </div>
  {{-- Akhir Pengirim --}}
  {{-- Tujuan --}}
  <div class="tujuan">
    <h3 class="mt-2">Tujuan</h3>
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Lokasi">
    </div>
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Divisi">
    </div>
  </div>
 {{-- Akhir Tujuan --}}
</form>

@endsection
