<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Surat Jalan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1 class="text-center mb-3">Tambah Data Ikan</h1>
        <form class="forms-sample " action="{{ route('suratJalan.store') }}" method="post" enctype="multipart/form-data">@csrf
          <div class="form-group">
            <div class="mb-3 col-lg-6">
                <label  class="form-label">Nomor Surat</label>
                <input type="text" class="form-control" id="nomorSurat" placeholder="nomor surat" value="{{ old('nomorSurat') }}" name="nomorSurat">
                @error('nomorSurat')
                <span class="text-danger">{{ $message }}</span>
                
            @enderror
                <label for="date">Pilih tanggal </label>
                <input type="tglKirim" id="tglKirim" name="tglKirim" class="form-control">
                @error('tglKirim')
                <span class="text-danger">{{ $message }}</span>
                <br>
            @enderror
                <label  class="form-label">Nama Barang</label>
                <textarea type="text" class="form-control" id="namaBarang" placeholder="Nama Barang" value="{{ old('namaBarang') }}" name="namaBarang"> </textarea>
                @error('namaBarang')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                <label  class="form-label">Jumlah Barang</label>
                <textarea type="text" class="form-control" id="jumlahBarang" placeholder="jumlahBarang" value="{{ old('jumlahBarang') }}" name="jumlahBarang"> </textarea>
                @error('jumlahBarang')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                <label  class="form-label">Tujuan Pengiriman</label>
                <textarea type="text" class="form-control" id="tujuanTempat" placeholder="Tujuan Pengiriman" value="{{ old('tujuanTempat') }}" name="tujuanTempat"> </textarea>
                @error('tujuanTempat')
                <span class="text-danger">{{ $message }}</span>
            @enderror
    
              </div>
            </div>
              <button type="submit" class="btn btn-info me-2 col-lg-6">Submit</button>
            </form>
            <a href="{{ route('suratJalan.index') }}"><button class="btn btn-danger mt-2 col-lg-6">Cancel</button></a>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
  $(document).ready(function(){
    $('#tglKirim').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });
  });
</script>

  </script>
</body>
</html>