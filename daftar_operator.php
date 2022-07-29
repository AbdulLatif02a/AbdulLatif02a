<?php 
include("conn.php");

$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    die ('Gagal terhubung MySQL: ' . mysqli_connect_error());   
}

$sql = 'SELECT *
        FROM tbl_operator ORDER BY id_operator desc';
        
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
echo' <div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Barang</h3>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Operator</th>
                    <th>Nama Operator</th>
                    <th>Username</th>
                    <th>Email</th>
                  
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>';
                while($row = mysqli_fetch_array($query)){
                            echo '<tr>
                                <td>'.$row['id_operator'].'</td>
                               
                                <td>'.$row['nama_operator'].'</td>
                                <td>'.$row['username'].'</td>
                               
                                <td>'.$row['email'].'</td>
                                <td>';
                            echo'        <a href="index.php?hal=edit_operator&id='.$row['id_operator'].'" class="btn btn-sm btn-primary">
                                        <i class="far fa-edit"></i> 
                                        Edit
                                    </a>
                                    <a href="index.php?hal=hapus_operator&id='.$row['id_operator'].'" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                                </td>
                            </tr>
            
                
                
            </tbody>';}
            echo'
          
        </table>
    </div>

</div>';?>