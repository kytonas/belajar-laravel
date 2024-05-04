<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
</head>
<body>
    <center>
        <h2>Data Tabel Transaksi</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama_barang</th>
            <th>Nama_pembeli</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
        </tr>
        @php $no = 1; @endphp
        @foreach($transaksi as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data -> id }}</td>
            <td>{{ $data -> barangg -> nama_barang}}</td>
            <td>{{ $data -> pembeli -> nama_pembeli}}</td>
            <td>{{ $data -> jumlah }}</td>
            <td>{{ $data -> tanggal }}</td>
        @endforeach
    </table>
    </center>
</body>
</html>