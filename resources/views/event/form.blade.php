<!DOCTYPE html>
<html>
  <head>
    <title>Form {{ $title }} Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%">
      <div class="col-3">
        <h4>Form {{ $title }} Event</h4>
        <form class="border" style="padding:20px" method="POST" action="/{{ $action }}">
          @csrf
          <input type="hidden" name="_method" value="{{ $method }}" />
          <div class="form-group">
            <label>Judul</label>
            <input type="text" name="name" class="form-control" value="{{ isset($data)?$data->judul:'' }}" />
          </div>
          <div class="form-group">
            <label>Lokasi</label>
            <input type="number" name="price" class="form-control" value="{{ isset($data)?$data->lokasi:'' }}" />
          </div>
          <div class="form-group">
            <label>tanggal</label>
            <input type="number" name="price" class="form-control" value="{{ isset($data)?$data->tanggal:'' }}" />
          </div>
          <div class="form-group">
            <label>detail</label>
            <input type="number" name="price" class="form-control" value="{{ isset($data)?$data->detail:'' }}" />
          </div>
          <div class="form-group">
            <label>gambar</label>
            <input type="number" name="price" class="form-control" value="{{ isset($data)?$data->gambar:'' }}" />
          </div>
          <div style="text-align:center">
            <button class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
