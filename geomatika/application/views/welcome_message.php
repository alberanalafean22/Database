<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Provinsi Lampung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
			background-color: grey;
			
        }

        table {
            border-collapse: collapse;
            width: 80%; 
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
			background-color: rgba(0, 0, 0, 0);
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Luas Wilayah Kabupaten/Kota di Provinsi Lampung</h1>
	<img src="https://raw.githubusercontent.com/alberanalafean22/database/refs/heads/main/Logolampung.png" alt="Lambang Provinsi Lampung" width="100" height="150">
    <h2> ㅤ</h2>
	<table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kabupaten/Kota</th>
                <th>Ibu Kota</th>
                <th>Luas Wilayah (Km²)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lampung as $l): ?>
            <tr>
                <td><?php echo $l['id']; ?></td>
                <td><?php echo $l['adm']; ?></td>
                <td><?php echo $l['ibukota']; ?></td>
                <td><?php echo $l['luas']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h2> ㅤ</h2>
	<h4>Alber Analafean- 121450146</h4>
    <h4>Tugas WEBGIS- Database</h4>
</body>
</html>
