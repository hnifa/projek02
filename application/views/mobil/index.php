 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil</title>
    <script>
        function hapusMobil(pesan){
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
            Mobil
        </h4>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>             
                <th>Warna</th>                
                <th>Biaya Sewa</th>               
                <th>CC</th>                
                <th>Tahun</th>                
                <th>Action</th>                
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($mobil as $mbl){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$mbl->warna?></td>
                <td><?=$mbl->biaya_sewa?></td>
                <td><?=$mbl->cc?></td>
                <td><?=$mbl->tahun?></td>
                <td>
                    <a href="<?php echo base_url("index.php/mobil/detail/$mbl->id") ?>">Detail</a>
                    &nbsp;
                    <?php
                    if($this->session->userdata('role')=='administrator'){
                    ?> 
                    <a href= <?php echo base_url("index.php/mobil/edit/$mbl->id") ?> class="btn btn-success active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/mobil/delete/$mbl->id") ?> class="btn btn-danger active" onclick="return hapusMobil('Apakah Anda yakin ingin menghapus?')" >Hapus</a>
                    <?php } ?>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
        </table>
        <a href= <?php echo base_url("index.php/mobil/form") ?> class="btn btn-primary active" >Tambah</a>
    </div>
</body>
</html>
