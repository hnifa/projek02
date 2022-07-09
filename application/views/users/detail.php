<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
</head>
<body>
    <div class='col-md-12'>
        <h4 style="text-align: center;">
            Pelanggan
        </h4>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>Username</th>                
                <th>Password</th>                
                <th>Email</th>                
                <th>Pembuatan</th>                
                <th>Terakhir Login</th>                          
                <th>Status</th>                          
                <th>Role</th>                          
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$ur->username?></td>
                <td><?=$ur->password?></td>
                <td><?=$ur->email?></td>
                <td><?=$ur->created_at?></td>
                <td><?=$ur->last_login?></td>
                <td><?=$ur->status?></td>
                <td><?=$ur->role?></td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>
