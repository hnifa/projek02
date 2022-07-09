<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa</title>
</head>
<body>
    <div class='col-md-12'>
        <h4 style="text-align: center;">
            Sewa Mobil
        </h4>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>Tanggal Mulai</th>                
                <th>Tanggal Akhir</th>                
                <th>Tujuan</th>                
                <th>Nomor KTP</th>                
                <th>ID Users</th>                
                <th>ID Mobil</th>                            
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$sw->tanggal_mulai?></td>
                <td><?=$sw->tanggal_akhir?></td>
                <td><?=$sw->tujuan?></td>
                <td><?=$sw->noktp?></td>
                <td><?=$sw->users_id?></td>
                <td><?=$sw->mobil_id?></td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>
