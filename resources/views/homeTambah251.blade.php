<form action="{{route('mahasiswa.store')}}" method="POST">
    @csrf
    NBI : <input type="text" name="nbi">
    Nama : <input type="text" name="nama">
    <button type="submit">Simpan</button>
</form>