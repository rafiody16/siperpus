<?php 

$koneksi = mysqli_connect("localhost","root","","siperpus");
include '../aset/header.php';

$id = $_GET['id_buku'];
$sql = mysqli_query($koneksi, ("SELECT * FROM buku WHERE id_buku = '$id' "));
$buku = mysqli_fetch_assoc($sql);
// $query = mysqli_query($koneksi,"SELECT * FROM kategori");
if (isset($_POST['simpan'])) {
    $id                 = $_POST['id_buku'];
    $judul              = $_POST['judul'];
    $penerbit           = $_POST['penerbit'];
    $pengarang          = $_POST['pengarang'];
    $ringkasan          = $_POST['ringkasan'];
    $cover              = $_POST['cover'];
    $stok               = $_POST['stok'];
    $id_kategori        = $_POST['id_kategori'];

    $query = ("UPDATE buku SET judul = '$judul', penerbit = '$penerbit', pengarang = '$pengarang', ringkasan = '$ringkasan', cover = '$cover', stok = '$stok', id_kategori = '$id_kategori' WHERE id_buku = '$id' ");
    $buku1 = mysqli_query($koneksi,$query);

    if ($buku1>0) {
        echo 
        "
            <script>
                alert('Berhasil');
                document.location.href='index.php'
            </script>
        ";
    }
    else{
        var_dump($buku1);
    }
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>Tambah Data Buku</title>
 </head>
 <body>
 <div class="container">
     <div class="row mt-4">
        <div class="col-md">
            <center>
            <div class="card" style="width: 100%;">
                <div class="card-header" style="width: 100%;">
                    <h2 class="card-title"><i class="fas fas fa-book"></i>Tambah Data Buku</h2>
                </div>
                <div class="card-body">
                    
                    <form action="" method="post">
                    
                     <table class="table">
                         <tr>
                             <td>Judul Buku</td>
                             <td><input type="text" name="judul" value="<?= $buku["judul"]?>"></td>
                         </tr>
                         <tr>
                             <td>Penerbit</td>
                             <td><input type="text" name="penerbit" value="<?= $buku["penerbit"]?>"></td>
                         </tr>
                         <tr>
                             <td>Pengarang</td>
                             <td><input type="text" name="pengarang" value="<?= $buku["pengarang"]?>"></td>
                         </tr>
                         <tr>
                             <td>Ringkasan</td>
                             <td>
                                 <textarea name="ringkasan" value="<?= $buku["ringkasan"]?>">
                                     
                                 </textarea>
                             </td>
                         </tr>
                         <tr>
                             <td>Cover</td>
                             <td><input type="file" name="cover" value="<?= $buku["cover"]?>"></td>
                         </tr>
                         <tr>
                             <td>Stok</td>
                             <td><input type="number" name="stok" value="<?= $buku["stok"]?>"></td>
                         </tr>
                         <tr>
                             <td>Kategori</td>
                             <td>
                                 <select style="width: 200px" name="id_kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    <?php 
                                        while($kategori = mysqli_fetch_assoc($query)):
                                     ?>
                                     <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>

                                     <?php 
                                        endwhile;
                                      ?>
                                     
                                 </select>
                             </td>
                         </tr>
                         <tr>
                             <th></th>
                             <th><input type="submit" name="simpan" class="btn btn-primary" value="Simpan"></th>
                         </tr>
                     </table>   

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