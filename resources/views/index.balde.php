<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Buku</title>
</head>
<body>
    <h1>Buku</h1>
    <a href="{{ route('buku.create') }}" class="btn btn-primary float-start">Tambah Buku</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Pemain</th>
                <th>Nomor Punggung</th>
                <th>Posisi Pemain</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pemain as $pemain => $pemain)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
