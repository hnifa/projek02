<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perawatan</title>
</head>
<body>
    <div class='col-md-12'>
        <h4 style="text-align: center;">
            Perawatan
        </h4>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>Tanggal</th>                
                <th>Biaya</th>                
                <th>Km Mobil</th>                
                <th>Deskripsi</th>                         
                <th>ID Mobil</th>                         
                <th>ID Jenis Perawatan</th>                         
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$rt->tanggal?></td>
                <td><?=$rt->biaya?></td>
                <td><?=$rt->km_mobil?></td>
                <td><?=$rt->deskripsi?></td>
                <td><?=$rt->mobil_id?></td>
                <td><?=$rt->jenis_perawatan_id?></td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>
