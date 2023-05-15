<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";  
require_once 'dbkoneksi.php'
?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM tipe_pakaian WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>
<form method="POST" action="proses_jenis_produk.php">
<div class="form-group row">
    <label for="tipe" class="col-4 col-form-label">Tipe</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="tipe" name="tipe" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
  
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
      <input type="hidden" name="idedit" value="<?=$_idedit?>"/>
    </div>
  </div>
</form>
<?php require_once "layouts/footer.php"; ?>