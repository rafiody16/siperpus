<?php 

$koneksi = mysqli_connect("localhost","root","","siperpus");
include '../aset/header.php';
$query = mysqli_query($koneksi,"SELECT * FROM kategori");

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
                    
                    <form action="proses-tambah.php" method="post">
                    
                     <table class="table">
                         <tr>
                             <td>Judul Buku</td>
                             <td><input type="text" name="judul"></td>
                         </tr>
                         <tr>
                             <td>Penerbit</td>
                             <td><input type="text" name="penerbit"></td>
                         </tr>
                         <tr>
                             <td>Pengarang</td>
                             <td><input type="text" name="pengarang"></td>
                         </tr>
                         <tr>
                             <td>Ringkasan</td>
                             <td>
                                 <textarea name="ringkasan">
                                     
                                 </textarea>
                             </td>
                         </tr>
                         <tr>
                             <td>Cover</td>
                             <td><input type="file" name="cover"></td>
                         </tr>
                         <tr>
                             <td>Stok</td>
                             <td><input type="number" name="stok"></td>
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