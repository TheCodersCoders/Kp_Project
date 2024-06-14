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
 {{-- Data Mutasi --}}
 <div class="row">
  <h3>Tambah Data</h3>
  <div class="col-md-6">
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Nama Barang">
    </div>
  </div>
  <div class="col-md-6">
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Model">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Model`">
    </div>
  </div>
  <div class="col-md-6">
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Nomor Inventaris">
    </div>
  </div>
  <div class="col-md-12">
    <select class="form-select" aria-label="Default select example" aria-placeholder="Kategori">
      <option value="1" > Baru</option>
      <option value="2"> Mutasi</option>
      <option value="3"> Rusak</option>
    </select>
  </div>
  <div class="col-md-12">
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Keterangan">
    </div>
  </div>
</div>
 {{-- Akhir Data Mutasi --}}
 <div class="text-center col-md-3 justify-align-center">
  <button type="submit" class="btn bg-gradient-primary btn-lg w-100 mt-1 mb-0">Submit</button>
</div>
</form>

@endsection
