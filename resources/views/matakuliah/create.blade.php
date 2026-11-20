<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h2>Tambah Data Mata Kuliah</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <p>
            <label>Kode Mata Kuliah:</label><br>
            <input type="text" name="kode_matakuliah" value="{{ old('kode_matakuliah') }}" maxlength="20">
        </p>

        <p>
            <label>Nama Mata Kuliah:</label><br>
            <input type="text" name="nama_matakuliah" value="{{ old('nama_matakuliah') }}" maxlength="100">
        </p>

        <p>
            <label>Jumlah SKS:</label><br>
            <input type="number" name="sks" value="{{ old('sks') }}" min="1" max="6">
        </p>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('matakuliah.index') }}">
        <button type="button">Kembali ke Daftar</button>
    </a>
</body>
</html>
