<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h2>Daftar Nama Mata Kuliah</h2>
        <a href="{{ route('dataMahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col">SKS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mata_kuliah as $MK)
                    <tr>
                        <th scope="row">{{ $MK->id }}</th>
                        <td>{{ $MK->Kelas }}</td>
                        <td>{{ $MK->Kode }}</td>
                        <td>{{ $MK->Nama_Mata_Kuliah }}</td>
                        <td>{{ $MK->SKS }}</td>
                        <td>
                            <a href="{{ route('dataMahasiswa.edit', ['dataMahasiswa' => $MK->id]) }}"
                                class="btn btn-primary">Edit</a>
                            <a href="{{ route('dataMahasiswa.show', ['dataMahasiswa' => $MK->id]) }}"
                                class="btn btn-warning">Detail</a>
                            <form action="{{ route('dataMahasiswa.destroy', ['dataMahasiswa' => $MK->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>