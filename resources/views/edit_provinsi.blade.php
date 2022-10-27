 <form action="/provinsi/update/{{ $provinsi->id }}" method="post">
            @csrf
            {{-- <input type="text" name="kode"> --}}
            <input type="text" name="nama_provinsi" placeholder="{{$provinsi->nama_provinsi}}">
            <div>
                <select name="active" id="active">
                    <option value="active">active</option>
                    <option value="tidak active">tidak active</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>