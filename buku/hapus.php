<?php

$koneksi = mysqli_connect("localhost","root","","siperpus");

$id = $_GET["id_buku"]; 

$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");

// var_dump($query);

if ($query>0) {
    echo 
    "
    <script>
        alert('DATA BERHASIL DI HAPUS');
        document.location.href='index.php'
    </script>
";
}

?>