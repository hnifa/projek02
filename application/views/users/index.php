<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <script>
        function hapusUser(pesan){
            if(confirm(pesan)){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
</head>
<body>
    <div class='col-md-12'>
        <h4 style="text-align: center;">
            Pelanggan
        </h4>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>                
                <th>Email</th>                
                <th>Pembuatan</th>                
                <th>Terakhir Login</th>                           
                <th>Action</th>                           
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($user as $ur){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$ur->username?></td>
                <td><?=$ur->email?></td>
                <td><?=$ur->created_at?></td>
                <td><?=$ur->last_login?></td>
                <td>
                    <a href="<?php echo base_url("index.php/users/detail/$ur->id") ?>">Detail</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/users/edit/$ur->id") ?> class="btn btn-success active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/users/delete/$ur->id") ?> class="btn btn-danger active" onclick="return hapusUser('Apakah Anda yakin ingin menghapus?')" >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
        </table>
        <a href= <?php echo base_url("index.php/users/form") ?> class="btn btn-primary active" >Tambah</a>
    </div>
</body>
</html>
