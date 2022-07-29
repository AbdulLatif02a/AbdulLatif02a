<?php

if(isset($_POST['simpan'])){
    include("./conn.php");
    date_default_timezone_set("Asia/Jakarta");
    
    $id_barang_keluar = $_POST['id_barang_keluar'];
    $qty_keluar = $_POST['qty_keluar'];
    $id_barang = $_POST['id_barang'];
    $id_operator = $_POST['id_operator'];

    $tgl = date('Y-m-d H:i:s', time());
    // insert into table barang masuk 
    $query = "INSERT into tbl_barang_keluar (id_barang_keluar, qty_keluar, id_barang, id_operator) values ('$id_barang_keluar', '$qty_keluar', '$id_barang', '$id_operator')";

    $insert = $conn->query($query);

    if($insert){
        ?>
        <script>
            alert("Berhasil menambahkan data");
            window.location="index.php?hal=daftar_barang_keluar";
        </script>
        <?php
    }
}
?>

<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Barang Keluar</h3>
        </div>

        <form method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Barang keluar</label>
                    <input type="number" class="form-control" name="id_barang_keluar" placeholder="Masukkan ID Barang Keluar">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Barang Keluar</label>
                    <input type="text" class="form-control" name="qty_keluar" placeholder="Masukkan nama barang Keluar">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ID Barang</label>
                    <input type="number" class="form-control" name="id_barang" placeholder="Masukan ID Barang">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">ID Operator</label>
                    <input type="number" class="form-control" name="id_operator" placeholder="Masukan ID operator">
                </div>

            <div class="card-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>