<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kendaraan</title>
</head>
<body>
    <h1>Daftar Kendaraan</h1>
    <a href="{{ route('kendaraan.create') }}">Tambah Kendaraan</a>
<br><br>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nomor Polisi</th>
            <th>Merek</th>
            <th>Tipe</th>
            <th>Kategori</th>
            <th>Tahun</th>
            <th>Warna</th>
            <th>keterangan</th>
            <th>Aksi</th>
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
            <td>{{ $kendaraan->keterangan }}</td>

            <td>
    <a href="{{ route('kendaraan.edit', $kendaraan->id) }}">Edit</a>
</td>
<td>
    <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}"
          method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit"
                onclick="return confirm('Yakin ingin menghapus kendaraan ini?')">
            Hapus
        </button>
    </form>
</td>
        </tr>
        @endforeach
    </table>
</body>
</html>