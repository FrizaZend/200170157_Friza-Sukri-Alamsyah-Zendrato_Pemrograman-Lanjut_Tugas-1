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
        <h2>Form Edit Data Mata Kuliah</h2>
        <form action="{{ route('dataMahasiswa.update', ['dataMahasiswa' => $dataMahasiswa->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="Kelas" class="form-label">Kelas Mata Kuliah</label>
                <input type="text" class="form-control" name="Kelas" value="{{ $dataMahasiswa->Kelas }}">
            </div>
            <div class="mb-3">
                <label for="Kode" class="form-label">Kode Mata Kuliah</label>
                <input type="text" class="form-control" name="Kode" value="{{ $dataMahasiswa->Kode }}">
            </div>
            <div class="mb-3">
                <label for="Nama Mata Kuliah" class="form-label">Nama Mata Kuliah</label>
                <input type="text" class="form-control" name="Nama_Mata_Kuliah" value="{{ $dataMahasiswa->Nama_Mata_Kuliah }}">
            </div>
            <div class="mb-3">
                <label for="SKS" class="form-label">Jumlah SKS</label>
                <input type="text" class="form-control" name="SKS" value="{{ $dataMahasiswa->SKS }}">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>