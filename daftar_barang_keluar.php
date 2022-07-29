<?php 
include("conn.php");

$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    die ('Gagal terhubung MySQL: ' . mysqli_connect_error());   
}

$sql = 'SELECT *
        FROM tbl_barang_keluar ORDER BY id_barang_keluar desc';
        
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}

echo '<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Barang Keluar</h3>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>id barang keluar</th>
                    <th>Nama Barang</th>
                    <th>Operator</th>
                </tr>
            </thead>
            <tbody>';
               
                    while($row = mysqli_fetch_array($query)){
                            echo '<tr>
                                <td>'.$row['id_barang_keluar'].'</td>
                                <td>'.$row['qty_keluar'].'</td>
                                <td>'.$row['id_barang'].'</td>
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