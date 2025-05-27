<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e3f2fd;
            padding: 30px;
        }

        .container {
            background: #ffffff;
            max-width: 600px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #0d47a1;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        td {
            padding: 8px;
        }

        .label {
            font-weight: bold;
            width: 35%;
        }

        .value {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Biodata Diri</h2>
        <table>
            <tr>
                <td class="label">Nama</td>
                <td class="value">: {{ $biodata['nama'] }}</td>
            </tr>
            <tr>
                <td class="label">Tempat, Tanggal Lahir</td>
                <td class="value">: {{ $biodata['ttl'] }}</td>
            </tr>
            <tr>
                <td class="label">Jenis Kelamin</td>
                <td class="value">: {{ $biodata['jenis_kelamin'] }}</td>
            </tr>
            <tr>
                <td class="label">Alamat</td>
                <td class="value">: {{ $biodata['alamat'] }}</td>
            </tr>
            <tr>
                <td class="label">Email</td>
                <td class="value">: {{ $biodata['email'] }}</td>
            </tr>
            <tr>
                <td class="label">Telepon</td>
                <td class="value">: {{ $biodata['telepon'] }}</td>
            </tr>
            <tr>
                <td class="label">Hobi</td>
                <td class="value">: {{ $biodata['hobi'] }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
