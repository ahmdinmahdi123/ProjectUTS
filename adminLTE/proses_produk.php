<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];
   $_ukuran = $_POST['ukuran'];
   $_warna= $_POST['warna'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_tipe = $_POST['tipe'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 1
   $ar_data[]=$_ukuran; // ? 2
   $ar_data[]=$_warna; // ? 3
   $ar_data[]=$_stok; // ? 4
   $ar_data[]=$_stok; // 5
   $ar_data[]=$_tipe; // ? 6

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pakaian (nama,ukuran,warna,stok,harga,
    tipe_pakaian_id) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 7
    $sql = "UPDATE pakaian SET nama=?,ukuran=?,warna=?,stok=?,harga=?,
    tipe_pakaian_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_produk.php');
?>