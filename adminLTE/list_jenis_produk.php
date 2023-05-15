<?php 
require_once "layouts/header.php";
require_once "layouts/menu.php";
require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM tipe_pakaian";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_jenis_produk.php" role="button">Create Produk</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tipe</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['tipe']?></td>
                        <td>
<a class="btn btn-primary" href="form_jenis_produk.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_jenis_produk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['tipe']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
<?php require_once "layouts/footer.php"; ?>