<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kendaraan</title>
</head>
<body>
    <h1>Tambah Kendaraan</h1>

    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf

        Nomor Polisi:
        <input type="text" name="nomor_polisi" required><br><br>

        Merek:
        <input type="text" name="merek" required><br><br>

        Tipe:
        <input type="text" name="tipe" required><br><br>

        Kategori:
        <input type="text" name="kategori" required><br><br>

        Tahun:
        <input type="number" name="tahun" required><br><br>

        Warna:
        <input type="text" name="warna" required><br><br>

        Keterangan:
        <textarea name="keterangan"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('kendaraan.index') }}">Kembali</a>
</body>
</html>