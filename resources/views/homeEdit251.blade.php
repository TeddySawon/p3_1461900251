<form action="{{url('mahasiswa/' . $mahasiswa->id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="patch">
    NBI : <input type="text" name="nbi" value="{{$mahasiswa->nbi}}">
    Nama : <input type="text" name="nama" value="{{$mahasiswa->nama}}">
    <button type="submit">Simpan</button>
</form>