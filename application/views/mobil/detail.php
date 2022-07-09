<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil</title>
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
                <th>Nomor Polisi</th>             
                <th>Warna</th>                
                <th>Biaya Sewa</th>               
                <th>Deskripsi</th>               
                <th>CC</th>                
                <th>Tahun</th>                 
                <th>ID Merk</th>              
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$mbl->id?></td>
                <td><?=$mbl->nopol?></td>
                <td><?=$mbl->warna?></td>
                <td><?=$mbl->biaya_sewa?></td>
                <td><?=$mbl->deskripsi?></td>
                <td><?=$mbl->cc?></td>
                <td><?=$mbl->tahun?></td>
                <td><?=$mbl->merk_id?></td>
            </tr>
        </tbody>
        </table>
    </div>
    <div class="col-sm-4">
        
        <?php
        $filegambar = base_url('/uploads/photos/'.$mbl->foto);
        // echo $filegambar;
        $array = get_headers($filegambar);
        $string = $array[0];
        if (strpos($string,"200")) {
                echo '<img width="70%" src="'.$filegambar.'"class="img-thumbnail" alt="foto"/>';
            }else{
                echo '<img src="'.base_url('/uploads/download.png').'" alt="foto"/>';
        }
        ?>
        <br/>
        Nama File : <?= $mbl->nopol?>
        <br/>
        <?php echo form_open_multipart('mobil/upload/'.$mbl->id);?>
            <br>
            <input type="file" name="nopol_file"  size="300"/>
            <input type="hidden" name="nopol" value="<?=$mbl->nopol?>"/>
            <br>
            <input type="submit" class="btn btn-success" value="Upload"/>
         <?php echo form_close()?>
    </div>
</body>
</html>
