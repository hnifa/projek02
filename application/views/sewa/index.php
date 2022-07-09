<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa</title>
    <script>
        function hapusSewa(pesan){
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
            Sewa Mobil
        </h4>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Mulai</th>                
                <th>Tanggal Akhir</th>                
                <th>Tujuan</th>               
                <th>Action</th>     
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($sewa as $sw){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$sw->tanggal_mulai?></td>
                <td><?=$sw->tanggal_akhir?></td>
                <td><?=$sw->tujuan?></td>
                <td>
                    
                    <a href="<?php echo base_url("index.php/sewa/detail/$sw->id") ?>">Detail</a>
                    &nbsp;
                    <?php
                    if($this->session->userdata('role')=='administrator'){
                    ?>
                    <a href= <?php echo base_url("index.php/sewa/edit/$sw->id") ?> class="btn btn-success active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/sewa/delete/$sw->id") ?> class="btn btn-danger active" onclick="return hapusSewa('Apakah Anda yakin ingin menghapus?')" >Hapus</a>
                    <?php } ?>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
        </table>
        <a href= <?php echo base_url("index.php/sewa/form") ?> class="btn btn-primary active" >Tambah</a>
    </div>
</body>
</html>
