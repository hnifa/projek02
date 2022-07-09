<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form Input Perawatan</h2>
<br>
<?php echo form_open("perawatan/save")?>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="date" value="<?php echo $obj_perawatan->tanggal ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="biaya" class="col-4 col-form-label">Biaya</label> 
    <div class="col-8">
      <input id="biaya" name="biaya" type="text" value="<?php echo $obj_perawatan->biaya ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="km_mobil" class="col-4 col-form-label">Km Mobil</label> 
    <div class="col-8">
      <input id="km_mobil" name="km_mobil" type="text" value="<?php echo $obj_perawatan->km_mobil ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" type="text" value="<?php echo $obj_perawatan->deskripsi ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mobil_id" class="col-4 col-form-label">ID Mobil</label> 
    <div class="col-8">
      <input id="mobil_id" name="mobil_id" type="text" value="<?php echo $obj_perawatan->mobil_id ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_perawatan_id" class="col-4 col-form-label">ID Jenis Perawatan</label> 
    <div class="col-8">
      <input id="jenis_perawatan_id" name="jenis_perawatan_id" type="text" value="<?php echo $obj_perawatan->jenis_perawatan_id ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php echo form_close() ?>
</div>