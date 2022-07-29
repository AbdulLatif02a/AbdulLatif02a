<?php 
include("conn.php");

//$data = $conn->query("SELECT b.*, o.nama_operator FROM tbl_barang b INNER JOIN tbl_operator o ON b.id_operator=o.id_operator and b.deleted_at is null ORDER BY b.id_barang desc");

// print_r($data);

//$server = 'localhost'; // Nama Server
//$user = 'root'; // User Server
//$pass = ''; // Password Server
//$db = 'wpa_inventori'; // Nama Database
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    die ('Gagal terhubung MySQL: ' . mysqli_connect_error());   
}

$sql = 'SELECT *
        FROM tbl_barang ORDER BY id_barang desc';
        
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}

echo '<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Barang</h3>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga Barang</th>
                    <th>Operator</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>';
               
                    while($row = mysqli_fetch_array($query)){
                            echo '<tr>
                                <td>'.$row['id_barang'].'</td>
                                <td>'.$row['kode_barang'].'</td>
                                <td>'.$row['nama_barang'].'</td>
                                <td>'.$row['satuan'].'</td>
                                <td>'.number_format($row['harga_barang'], 0, ',', '.').'</td>
                                <td>'.$row['id_operator'].'</td>
                                <td>';
                                echo'
                                    <a href="index.php?hal=edit_barang&id='.$row['id_barang'].'" class="btn btn-sm btn-primary">
                                        <i class="far fa-edit"></i> 
                                        Edit
                                    </a>
                                    <a href="index.php?hal=hapus_barang&id='.$row['id_barang'].'" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                                </td>
                            </tr> </tbody>';
                        }
                
                
                
            echo'
         
        </table>
    </div>

</div>';?>