@extends('layouts.main')
@section('container')
@section('title', 'Surat Jalan')
@section('page1','Surat Jalan')


<form action="{{ route('suratJalan.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <button type="button" class="btn bg-gradient-info btn-block col-3" data-bs-toggle="modal" data-bs-target="#exampleModalSignUp">
    Tambah Data Barang
  </button>
  @extends('suratJalan.modal')
   <table class="table mb-4">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jumlah Barang</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($surat_jalans as $item )
      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->namaBarang }}/td>
        <td>{{ $item->jumlahBarang }}</td>
      @endforeach
    </tbody>
  </table>
  {{-- Tujuan --}}
  <div class="tujuan">
    <h3 class="mt-2">Tujuan</h3>
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Nomor Surat" id="nomorSurat" name="nomorSurat">
      @error('nomorSurat')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group input-group-outline my-3">
      <input type="text" class="form-control" placeholder="Lokasi" id="tujuanTempat" name="tujuanTempat">
    </div>
    <div class="input-group input-group-outline my-3">
      <label class="form-label mt-3" style="display: block"></label>
      <input type="date" class="form-control" id="tglKirim" name="tglKirim" class="form-control" placeholder="Tanggal Kirim" value="{{ old('tglKirim') }}">
    </div>
  </div>
 {{-- Akhir Tujuan --}}
 {{-- Data Mutasi --}}
 {{-- Akhir Data Mutasi --}}
 <div class="text-center tombol col-md-12">
  <button type="submit" class="btn bg-gradient-primary btn-lg w-100 mt-1 mb-0 ">Submit</button>
</div>
</form>

@endsection
