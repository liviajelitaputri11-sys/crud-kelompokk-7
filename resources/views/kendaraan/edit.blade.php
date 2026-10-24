<!DOCTYPE html>
<html>
<head>
    <title>Edit Kendaraan</title>
</head>
<body>
    <h1>Edit Kendaraan</h1>

    <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
        @csrf
        @method('PUT')

        Nomor Polisi:
        <input type="text" name="nomor_polisi"
            value="{{ $kendaraan->nomor_polisi }}" required><br><br>

        Merek:
        <input type="text" name="merek"
            value="{{ $kendaraan->merek }}" required><br><br>

        Tipe:
        <input type="text" name="tipe"
            value="{{ $kendaraan->tipe }}" required><br><br>

        Kategori:
        <input type="text" name="kategori"
            value="{{ $kendaraan->kategori }}" required><br><br>

        Tahun:
        <input type="number" name="tahun"
            value="{{ $kendaraan->tahun }}" required><br><br>

        Warna:
        <input type="text" name="warna"
            value="{{ $kendaraan->warna }}" required><br><br>

        Keterangan:
        <textarea name="keterangan">{{ $kendaraan->keterangan }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('kendaraan.index') }}">Kembali</a>
</body>
</html>