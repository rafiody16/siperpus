<?php  
$connect = mysqli_connect("localhost","root","","siperpus");
include 'fungsi-transaksi.php';
// session_start();

if(isset($_POST['btnPinjam'])){
	$id_anggota = $_POST['id_anggota'];
	$id_buku = $_POST['id_buku'];
	$tgl_pinjam = $_POST['tgl_pinjam'];
	$tgl_jatuh_tempo = date('Y-m-d', strtotime($tgl_pinjam.'+ 7 days'));
	$id_petugas = 1;//var dump en kabeh

$sql = "INSERT INTO peminjaman(id_anggota, tgl_pinjam, tgl_pinjam_tempo, id_petugas) VALUES('$id_anggota', '$tgl_pinjam', '$tgl_jatuh_tempo', '$id_petugas')";

	$stok = ambilStok($connect, $id_buku); //ambil data stok buku

	if(cekPinjam($connect, $id_anggota) && $stok > 0){
		$res = mysqli_query($connect, $sql);
		// var_dump($res);
		$query = mysqli_query($connect, "SELECT id_pinjam FROM peminjaman WHERE tgl_pinjam='$tgl_pinjam' AND id_anggota='$id_anggota' AND tgl_jatuhtemp='$tgl_jatuh_tempo' AND id_petugas='$id_petugas'");
		$wd = mysqli_fetch_assoc($query);
		$idp = $wd["id_pinjam"];
		$queryy = "INSERT INTO detail_pinjam(id_pinjam, id_buku, tgl_kembali, status) VALUES ('$idp', '$id_buku', '$tgl_pinjam', 'dipinjam')";
		$sql1 = mysqli_query($connect,$queryy);
		$count = mysqli_affected_rows($connect);
		var_dump($sql1);
		$stok_update = $stok - 1;
		if($sql1>0){
			updateStok($connect, $id_buku, $stok_update);
			
			// echo "
			// <script>
			// alert('Data Berhasil Di tambah !!!');
			// document.location.href='index.php';
			// </script>
			// ";
		}
		// echo "
		// 	<script>
		// 	alert('Data Berhasil Di tambah !!!');
		// 	document.location.href='index.php';
		// 	</script>
		// 	";
	}if(cekPinjam($connect, $id_anggota)==false){
		updateStok($connect, $id_buku, $stok_update);
		// echo "<script>alert('Data berhasil di tambahkan,Yeay!');history.go(-1);</script>";
		// echo 'Data berhasil di tambahkan! ';
		// echo '<a href="index.php">Kembali</a>';
		echo "
			<script>
			alert('Data Berhasil Di tambah !!!');
			document.location.href='index.php';
			</script>
		";
	}
}else{
	// echo 'Data gagal di tambahkan! ';
	// header("Location:index.php");
	echo "
			<script>
			alert('BERHASILL!!!');
			document.location.href='form-pinjam.php';
			</script>
		";
}
?>