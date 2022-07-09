<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merk</title>
    <script>
        function hapusMerk(pesan){
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
            Merk Mobil
        </h4>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>                
                <th>Produk</th>                
                <th>Action</th>                
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($merk as $mk){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$mk->nama?></td>
                <td><?=$mk->produk?></td>
                <td>
                    <a href= <?php echo base_url("index.php/merk/edit/$mk->id") ?> class="btn btn-success active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/merk/delete/$mk->id") ?> class="btn btn-danger active" onclick="return hapusMerk('Apakah Anda yakin ingin menghapus?')" >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
        </table>
        <a href= <?php echo base_url("index.php/merk/form") ?> class="btn btn-primary active" >Tambah</a>
    </div>
</body>
</html>
