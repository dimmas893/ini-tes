
      <div class="modal-body">
        <form action="/pegawai/update/{{ $pegawai->id }}" method="post">
            @csrf
            {{-- <input type="text" name="kode"> --}}
            {{-- <input type="text" name="nama_kelurahan"> --}}
            <input type="text" name="nama_pegawai" placeholder="{{ $pegawai->nama_pegawai }}">
            <input type="text" name="tempat_lahir" placeholder="{{ $pegawai->tempat_lahir }}">
            <input type="text" name="tgl_lahir" placeholder="{{ $pegawai->tgl_lahir }}">
            <input type="text" name="agama" placeholder="{{ $pegawai->agama }}">
            <input type="text" name="alamat" placeholder="{{ $pegawai->alamat }}">
            <input type="text" name="jenis_kelamin" placeholder="{{ $pegawai->jenis_kelamin }}">

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
                {{-- <select name="id_provinsi" id="id_provinsi">
                    <option>--------pilih provinsi------</option>   
                    @foreach ($provinsi as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_provinsi }}</option>   
                    @endforeach
                </select> --}}
            </div>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>
      </div>