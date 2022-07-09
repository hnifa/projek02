<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perawatan</title>
    <script>
        function hapusPerawatan(pesan){
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
            Perawatan
        </h4>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>                
                <th>Biaya</th>                
                <th>Km Mobil</th>                
                <th>Deskripsi</th>                           
                <th>Action</th>                           
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($rawat as $rt){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$rt->tanggal?></td>
                <td><?=$rt->biaya?></td>
                <td><?=$rt->km_mobil?></td>
                <td><?=$rt->deskripsi?></td>
                <td>
                    <a href="<?php echo base_url("index.php/perawatan/detail/$rt->id") ?>">Detail</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/perawatan/edit/$rt->id") ?> class="btn btn-success active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/perawatan/delete/$rt->id") ?> class="btn btn-danger active" onclick="return hapusMobil('Apakah Anda yakin ingin menghapus?')" >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
        </table>
        <a href= <?php echo base_url("index.php/perawatan/form") ?> class="btn btn-primary active" >Tambah</a>
     </div>
</body>
</html>
