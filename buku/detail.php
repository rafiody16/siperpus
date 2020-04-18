<?php 

	include '../aset/header.php';
	$koneksi = mysqli_connect("localhost","root","","siperpus");
	$query = mysqli_query($koneksi,"SELECT * FROM buku");

	while ($d = mysqli_fetch_array($query)) {
		# code...
	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
</head>
<body>

	<div class="container">
     <div class="row mt-4">
        <div class="col-md">
            <center>
            <div class="card" style="width: 100%;">
                <div class="card-header" style="width: 100%;">
                    <h2 class="card-title"><i class="fas fas fa-book"></i>Detail Buku</h2>
                </div>
                <div class="card-body">
                    
                    <form action="" method="post">
                    
                     <table class="table">
                         <tr>
                             <td>Judul Buku</td>
                             <td><?php echo $d['judul']; ?></td>
                         </tr>
                         <tr>
                             <td>Penerbit</td>
                             <td><?php echo $d['penerbit']; ?></td>
                         </tr>
                         <tr>
                             <td>Pengarang</td>
                             <td><?php echo $d['pengarang']; ?></td>
                         </tr>
                         <tr>
                             <td>Ringkasan</td>
                             <td><?php echo $d['ringkasan']; ?></td>
                         </tr>
                         <tr>
                             <td>Cover</td>
                             <td><img src="<?php echo $d ["cover"] ?>" height="100px" width="100px" alt=""></td>
                         </tr>
                         <tr>
                             <td>Stok</td>
                             <td><?php echo $d['stok']; ?></td>
                         </tr>
                         <tr>
                             <td>Kategori</td>
                             <td><?php echo $d['id_kategori']; ?></td>
                         </tr>
                     </table> 
                     <?php  
                 }
                 	?>
                    </form>

                </div>
            </div>
            </center>
        </div>
     </div>
 </div>

</body>
</html>

 <?php 

 	include '../aset/footer.php';

  ?>