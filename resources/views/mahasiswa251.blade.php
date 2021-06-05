<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data mahasiswa</title>
        <style>
            table {
                border-collapse: collapse;
                border-spacing : 0;
                width : 100% ;
                border : 1px solid white;
            }
            thead {
                background-color: beige;
            }
            th, td {
                text-align: left;
                padding: 8px;
            }tr:nth-child(even) {background-color : white}.tambah {
                padding: 8px 16px;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div style="overflow-x: auto">
            <a class="tambah" href="{{ route('mahasiswa.create') }}">Tambah Data</a>
            <table>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>NBI</td>
                        <td>Nama Mahasiswa</td>
                        <td>Aski</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1?>
                    @foreach ($mahasiswa as $mhs)
                        
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $mhs->nbi }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>
                            <a href="{{url('mahasiswa/' . $mhs->id . '/edit')}}">Edit</a>
                            |
                            <form action="{{url('mahasiswa/' . $mhs->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>