<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form Edit Mobil</h2>
<br>
<?php echo form_open("mobil/save")?>
  <div class="form-group row">
    <label for="nopol" class="col-4 col-form-label">Nomor Polisi</label> 
    <div class="col-8">
      <input id="nopol" name="nopol" type="text" value="<?php echo $obj_mobil->nopol ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="warna" class="col-4 col-form-label">Warna</label> 
    <div class="col-8">
      <input id="warna" name="warna" type="text" value="<?php echo $obj_mobil->warna ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="biaya_sewa" class="col-4 col-form-label">Biaya Sewa</label> 
    <div class="col-8">
      <input id="biaya_sewa" name="biaya_sewa" type="text" value="<?php echo $obj_mobil->biaya_sewa ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" type="text" value="<?php echo $obj_mobil->deskripsi ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="cc" class="col-4 col-form-label">CC</label> 
    <div class="col-8">
      <input id="cc" name="cc" type="text" value="<?php echo $obj_mobil->cc ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tahun" class="col-4 col-form-label">Tahun</label> 
    <div class="col-8">
      <input id="tahun" name="tahun" type="text" value="<?php echo $obj_mobil->tahun ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="merk_id" class="col-4 col-form-label">ID Merk</label> 
    <div class="col-8">
      <select class="form-control" value="<?= $obj_mobil->merk_id?>" name="merk_id" id="merk_id">
        <?php include "config.php"; 
        $result = mysqli_query($connect, "SELECT * FROM merk");
        while ( $row = mysqli_fetch_array($result))
        { ?>
        <option value="<?= $row[0]?>"><?= $row[0]?></option>
        <?php } ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" type="text" value="<?php echo $obj_mobil->foto ?>" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php echo form_close() ?>
</div>