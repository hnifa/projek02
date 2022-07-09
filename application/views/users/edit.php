<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form Edit Pelanggan</h2>
<br>
<?php echo form_open("users/save")?>
  <div class="form-group row">
    <label for="username" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="username" name="username" type="text" value="<?php echo $obj_users->username ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" type="password" value="<?php echo $obj_users->password ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" value="<?php echo $obj_users->email ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="created_at" class="col-4 col-form-label">Pembuatan</label> 
    <div class="col-8">
      <input id="created_at" name="created_at" type="date" value="<?php echo $obj_users->created_at ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="last_login" class="col-4 col-form-label">Terakhir Login</label> 
    <div class="col-8">
      <input id="last_login" name="last_login" type="date" value="<?php echo $obj_users->last_login ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-4 col-form-label">Status</label> 
    <div class="col-8">
      <input id="status" name="status" type="text" value="<?php echo $obj_users->status ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="role" class="col-4 col-form-label">Role</label> 
    <div class="col-8">
      <input id="role" name="role" type="text" value="<?php echo $obj_users->role ?>" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php echo form_close() ?>
</div>