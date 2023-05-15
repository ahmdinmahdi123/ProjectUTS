<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['tipe_pakaian'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 1

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO tipe_pakaian (tipe) VALUES (?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 2
    $sql = "UPDATE tipe_pakaian SET tipe_pakaian=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_jenis_produk.php');
?>