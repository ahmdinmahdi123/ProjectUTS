<?php 
require_once "layouts/header.php";
require_once "layouts/menu.php";
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pakaian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>Nama Produk</td><td><?=$row['nama']?></td></tr>
        <tr>  <td>Ukuran</td><td><?=$row['ukuran']?></td></tr>
        <tr>   <td>Warna</td><td><?=$row['warna']?></td></tr>
        <tr>   <td>Stok</td><td><?=$row['stok']?></td></tr>
        <tr>   <td>Harga</td><td><?=$row['harga']?></td></tr>
        <tr>   <td>Tipe Pakaian</td><td><?=$row['tipe_pakaian_id']?></td></tr>
    </tbody>
</table>
<?php require_once "layouts/footer.php"; ?>