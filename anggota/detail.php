<?php  
include '../aset/header.php';
$connect = mysqli_connect("localhost","root","","siperpus");

$id=$_GET["id_anggota"];
$query=mysqli_query($connect,"SELECT * FROM anggota where id_anggota='$id'");
$s=mysqli_fetch_assoc($query);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-7">
            <h2>Data Anggota</h2>
            <hr class="bg-ligth">
            <table class="table table-bordered">
            <tr>
                    <td><strong>Nama</strong></td>
                    <td><?= $s['nama']?></td>
                </tr>
                <tr>
                    <td><strong>Kelas</strong></td>
                    <td><?= $s['kelas']?></td>
                </tr>
                <tr>
                    <td><strong>Telp</strong></td>
                    <td><?= $s['telp']?></td>
                </tr>
                <tr>
                    <td><strong>Username</strong></td>
                    <td><?= $s['username']?></td>
                </tr>
                <tr>
                    <td><strong>Password</strong></td>
                    <td><?= $s['password']?></td>
                </tr>
                
                
                <tr>
                    <td class="text-rigth" colspan="2">
                    <a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>
                        <a class="btn btn-primary" href="edit.php?id=<?= $id;?>" role="button">Form Edit</a>
                
                            </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php  
include '../aset/footer.php';
?>