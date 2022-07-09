<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form Edit Sewa</h2>
<br>
<?php echo form_open("sewa/save")?>
  <div class="form-group row">
    <label for="tanggal_mulai" class="col-4 col-form-label">Tanggal Mulai</label> 
    <div class="col-8">
      <input id="tanggal_mulai" name="tanggal_mulai" type="date" value="<?php echo $obj_sewa->tanggal_mulai ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
    <div class="col-8">
      <input id="tanggal_akhir" name="tanggal_akhir" type="date" value="<?php echo $obj_sewa->tanggal_akhir ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tujuan" class="col-4 col-form-label">Tujuan</label> 
    <div class="col-8">
      <input id="tujuan" name="tujuan" type="text" value="<?php echo $obj_sewa->tujuan ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="noktp" class="col-4 col-form-label">Nomor KTP</label> 
    <div class="col-8">
      <input id="noktp" name="noktp" type="text" value="<?php echo $obj_sewa->noktp ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="users_id" class="col-4 col-form-label">ID User</label> 
    <div class="col-8">
      <select class="form-control" value="<?= $obj_users->users_id?>" name="users_id" id="users_id">
        <?php include "config.php"; 
        $result = mysqli_query($connect, "SELECT * FROM users");
        while ( $row = mysqli_fetch_array($result))
        { ?>
        <option value="<?= $row[0]?>"><?= $row[0]?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="mobil_id" class="col-4 col-form-label">ID Mobil</label> 
    <div class="col-8">
      <select class="form-control" value="<?= $obj_mobil->mobil_id?>" name="mobil_id" id="mobil_id">
        <?php include "config.php"; 
        $result = mysqli_query($connect, "SELECT * FROM mobil");
        while ( $row = mysqli_fetch_array($result))
        { ?>
        <option value="<?= $row[0]?>"><?= $row[0]?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php echo form_close() ?>
</div>