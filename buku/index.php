<?php
$koneksi = mysqli_connect("localhost","root","","siperpus");



$query = mysqli_query($koneksi,"SELECT * FROM buku ORDER BY judul");

$b = mysqli_fetch_assoc($query);

?>

<?php
include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>    
    </div>
</div>

<?php
include '../aset/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>

<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-book"></i></i>Data Buku</h2>
    <span class="btn btn-primary"><a href="tambah.php" class="btn btn-primary">Tambah Data</a></span>
  </div>
  <div class="card-body">
  
  <table class="table">
  <thead class="thead-dark">
   <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Ringkasan</th>
        <th scope="col">Cover</th>
        <th scope="col">Stok</th>
        <th scope="col">Kategori</th>
        <th scope="col">Aksi</th>
   </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    <?php while($buku = mysqli_fetch_assoc($query)):?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $buku ["judul"] ?></td>
        <td><?php echo $buku ["penerbit"] ?></td>
        <td><?php echo $buku ["pengarang"] ?></td>
        <td><?php echo $buku ["ringkasan"] ?></td>
        <td><img src="<?php echo $buku ["cover"] ?>" height="100px" width="100px" alt=""></td>
        <td><?php echo $buku ["stok"] ?></td>
        <td><?php echo $buku ["id_kategori"] ?></td>
        <td>
            <span class="badge badge-info"><a href="detail.php?id_buku=<?= $b['id_buku']; ?>" class="badge badge-info">Detail</a></span>
            <span class="badge badge-success"><a href="edit.php?id_buku=<?= $b['id_buku']; ?>" class="badge badge-warning">Edit</a></span>
            <span class="badge badge-danger"><a href="hapus.php?id_buku=<?= $b['id_buku']; ?>" class="badge badge-danger">Hapus</a></span>                        
        </td>
        <small class="form-text text-muted">Kategori: 1(fiksi) 2(non fiksi)</small>
        
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
    </tr>
                    
  </tbody>
</table>
    
  </div>
</div>

</body>
</html>