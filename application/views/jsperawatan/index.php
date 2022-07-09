<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perawatan</title>
    <script>
        function hapusJsperawatan(pesan){
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
            Jenis Perawatan 
        </h4>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>                
                <th>Action</th>                
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($jsperawatan as $jp){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$jp->nama?></td>
                <td>
                    <a href= <?php echo base_url("index.php/jsperawatan/edit/$jp->id") ?> class="btn btn-success active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/jsperawatan/delete/$jp->id") ?> class="btn btn-danger active" onclick="return hapusJsperawatan('Apakah Anda yakin ingin menghapus?')" >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
        </table>
        <a href= <?php echo base_url("index.php/jsperawatan/form") ?> class="btn btn-primary active" >Tambah</a>
    </div>
</body>
</html>
