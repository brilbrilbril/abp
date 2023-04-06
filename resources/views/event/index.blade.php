<!DOCTYPE html>
<html>
  <head>
    <title>Daftar Produk</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%">
      <div class="col-3">
	        <span class="float-left">{{ session('msg') }}</span>
	        <a href="/event/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
        <table class="table table-bordered table-striped">
          <tr>
            <th>judul</th>
            <th>lokasi</th>
            <th>tanggal</th>
            <th>detail</th>
            <th>gambar</th>
            <th>Aksi</th>
          </tr>
          @foreach($list as $d)
          <tr>
            <td>{{ $d->judul }}</td>
            <td>{{ $d->lokasi }}</td>
            <td>{{ $d->tanggal }}</td>
            <td>{{ $d->detail }}</td>
            <td>{{ $d->gambar }}</td>
            <td>
              <a href="/event/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
	              <form method="post" action="/event/{{ $d->id }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
	                @csrf
	                @method('DELETE')
	                <button class="btn btn-danger">Hapus</button>
	              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </body>
</html>
