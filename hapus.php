<?php

$koneksi = mysqli_connect("localhost","root","","siperpus");

$id = $_GET["id_anggota"]; 

$query = mysqli_query($koneksi, "DELETE FROM anggota WHERE id_anggota=$id");

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