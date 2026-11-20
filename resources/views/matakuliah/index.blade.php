<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <h2>Daftar Mata Kuliah</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <p>
        <a href="{{ route('matakuliah.create') }}">
            <button type="button">+ Tambah Mata Kuliah</button>
        </a>
    </p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliahs as $index => $mk)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mk->kode_matakuliah }}</td>
                    <td>{{ $mk->nama_matakuliah }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>
                        <a href="{{ route('matakuliah.show', $mk->id) }}">
                            <button type="button">Detail</button>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data mata kuliah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
