<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembeli</title>
</head>
<body>
    <center>
        <h2>Data Tabel Pembeli</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama_pembeli</th>
            <th>Jenis_kelamin</th>
        </tr> 
        @php $no = 1; @endphp
        @foreach($pembeli as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data -> id }}</td>
            <td>{{ $data -> nama_pembeli }}</td>
            <td>{{ $data -> jenis_kelamin }}</td>
        @endforeach
    </table>
    </center>
</body>
</html>