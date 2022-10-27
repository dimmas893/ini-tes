<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>tes</title>
  </head>
  <body>
   
    <table class="table">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Kecamatan
</button>
  <thead>
      <th>kode</th>
      <th>nama kecamatan</th>
      <th>Active</th>
      <th>action</th>
  </thead>
  <tbody>
        @foreach ($kecamatan as $p)
            <tr>
                <td>{{ $p->kode }}</td>
                <td>{{ $p->nama_kecamatan }}</td>
                <td>{{ $p->active }}</td>
                <td>
                    <a href="/kecamatan/edit/{{ $p->id }}">edit</a>
                    <a href="/kecamatan/store/{{ $p->id }}">detele</a>
                </td>
            </tr>
        @endforeach
  </tbody>
</table>

<!-- Button trigger modal -->

<table class="table">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#provinsi">
  Tambah Provinsi
</button>
  <thead>
      <th>kode</th>
      <th>nama provinsi</th>
      <th>Active</th>
      <th>action</th>
  </thead>
  <tbody>
        @foreach ($provinsi as $p)
            <tr>
                <td>{{ $p->kode }}</td>
                <td>{{ $p->nama_provinsi }}</td>
                <td>{{ $p->active }}</td>
                <td>
                    <a href="/provinsi/edit/{{ $p->id }}">edit</a>
                    <a href="/provinsi/store/{{ $p->id }}">detele</a>
                </td>
            </tr>
        @endforeach
  </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kecamatan/store" method="post">
            @csrf
            {{-- <input type="text" name="kode"> --}}
            <input type="text" name="nama_kecamatan">
            <div>
                <select name="active" id="active">
                    <option value="active">active</option>
                    <option value="tidak active">tidak active</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="provinsi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/provinsi/store" method="post">
            @csrf
            {{-- <input type="text" name="kode"> --}}
            <input type="text" name="nama_provinsi">
            <div>
                <select name="active" id="active">
                    <option value="active">active</option>
                    <option value="tidak active">tidak active</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>
      </div>
    </div>
  </div>
</div>


<table class="table">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kelurahan">
  Tambah kelurahan
</button>
  <thead>
      <th>kode</th>
      <th>nama kelurahan</th>
      <th>nama kecamatan</th>
      <th>Active</th>
      <th>action</th>
  </thead>
  <tbody>
        @foreach ($kelurahan as $p)
            <tr>
                <td>{{ $p->kode }}</td>
                <td>{{ $p->nama_kelurahan }}</td>
                <td>{{ $p->kecamatan->nama_kecamatan }}</td>
                <td>{{ $p->active }}</td>
                <td>
                    <a href="/provinsi/edit/{{ $p->id }}">edit</a>
                    <a href="/provinsi/store/{{ $p->id }}">detele</a>
                </td>
            </tr>
        @endforeach
  </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="kelurahan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kelurahan/store" method="post">
            @csrf
            {{-- <input type="text" name="kode"> --}}
            {{-- <input type="text" name="nama_kelurahan"> --}}
            <input type="text" name="nama_kelurahan" placeholder="nama kelurahan">
            <div>
                <select name="id_kecamatan" id="id_kecamatan">
                    <option>--------pilih kecamatan------</option>   
                    @foreach ($kecamatan as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_kecamatan }}</option>   
                    @endforeach
                </select>
            </div>
            <div>
                <select name="active" id="active">
                    <option value="active">active</option>
                    <option value="tidak active">tidak active</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>
      </div>
    </div>
  </div>
</div>



<table class="table">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pegawai">
  Tambah pegawai
</button>
  <thead>
      <th>nama pegawai</th>
      <th>tempat lahir</th>
      <th>tgl</th>
      <th>jenis kelamin</th>
      <th>agama</th>
      <th>alamat</th>
      <th>kelurahan</th>
      <th>kecamatan</th>
      {{-- <th>provinsi</th> --}}
      <th>action</th>
  </thead>
  <tbody>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->nama_pegawai }}</td>
                <td>{{ $p->tempat_lahir }}</td>
                <td>{{ $p->tgl_lahir }}</td>
                <td>{{ $p->jenis_kelamin }}</td>
                <td>{{ $p->agama }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->kelurahan->nama_kelurahan }}</td>
                <td>{{ $p->kecamatan->nama_kecamatan }}</td>
                {{-- <td>{{ $p->provinsi->id_provinsi }}</td> --}}
                {{-- <td>{{ $p->provinsi->id }}</td> --}}
                <td>
                    <a href="/pegawai/edit/{{ $p->id }}">edit</a>
                    <a href="/pegawai/store/{{ $p->id }}">detele</a>
                </td>
            </tr>
        @endforeach
  </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="pegawai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pegawai/store" method="post">
            @csrf
            {{-- <input type="text" name="kode"> --}}
            {{-- <input type="text" name="nama_kelurahan"> --}}
            <input type="text" name="nama_pegawai" placeholder="nama pegawai">
            <input type="text" name="tempat_lahir" placeholder="tempat lahir">
            <input type="text" name="tgl_lahir" placeholder="tgl">
            <input type="text" name="agama" placeholder="agama">
            <input type="text" name="alamat" placeholder="alamat">
            <input type="text" name="jenis_kelamin" placeholder="jenis_kelamin">

            <div>
                <select name="id_kecamatan" id="id_kecamatan">
                    <option>--------pilih kecamatan------</option>   
                    @foreach ($kecamatan as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_kecamatan }}</option>   
                    @endforeach
                </select>
            </div>
                        <div>
                <select name="id_kelurahan" id="id_kelurahan">
                    <option>--------pilih kelurahan------</option>   
                    @foreach ($kelurahan as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_kelurahan }}</option>   
                    @endforeach
                </select>
            </div>

                                    <div>
                <select name="id_provinsi" id="id_provinsi">
                    <option>--------pilih provinsi------</option>   
                    @foreach ($provinsi as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_provinsi }}</option>   
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
     <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    //sweetalert for success or error message
    @if(session()->has('success'))
        swal({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ session('success') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @elseif(session()->has('error'))
        swal({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @endif
  </script>
  </body>
</html>
