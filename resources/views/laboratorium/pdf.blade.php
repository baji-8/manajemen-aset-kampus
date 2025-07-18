<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Laboratorium</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Daftar Laboratorium</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Lokasi</th>
                <th>Penanggung Jawab</th>
                <th>Fasilitas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laboratorium as $lab)
                <tr>
                    <td>{{ $lab->nama }}</td>
                    <td>{{ $lab->lokasi }}</td>
                    <td>{{ $lab->penanggung_jawab }}</td>
                    <td>{{ $lab->fasilitas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
