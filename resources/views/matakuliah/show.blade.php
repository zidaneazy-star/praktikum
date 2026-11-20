<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h2>Detail Mata Kuliah</h2>

    <p>
        <strong>Kode Mata Kuliah:</strong><br>
        {{ $matakuliah->kode_matakuliah }}
    </p>

    <p>
        <strong>Nama Mata Kuliah:</strong><br>
        {{ $matakuliah->nama_matakuliah }}
    </p>

    <p>
        <strong>Jumlah SKS:</strong><br>
        {{ $matakuliah->sks }}
    </p>

    <p>
        <strong>Tanggal Dibuat:</strong><br>
        {{ $matakuliah->created_at }}
    </p>

    <p>
        <strong>Tanggal Diperbarui:</strong><br>
        {{ $matakuliah->updated_at }}
    </p>

    <br>
    <a href="{{ route('matakuliah.index') }}">
        <button type="button">Kembali ke Daftar</button>
    </a>
</body>
</html>
