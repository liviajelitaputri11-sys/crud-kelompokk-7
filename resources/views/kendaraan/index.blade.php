<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kendaraan</title>
</head>
<body>
    <h1>Daftar Kendaraan</h1>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nomor Polisi</th>
            <th>Merek</th>
            <th>Tipe</th>
            <th>Kategori</th>
            <th>Tahun</th>
            <th>Warna</th>
        </tr>

        @foreach ($kendaraans as $kendaraan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kendaraan->nomor_polisi }}</td>
            <td>{{ $kendaraan->merek }}</td>
            <td>{{ $kendaraan->tipe }}</td>
            <td>{{ $kendaraan->kategori }}</td>
            <td>{{ $kendaraan->tahun }}</td>
            <td>{{ $kendaraan->warna }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>