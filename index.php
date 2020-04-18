<?php
include 'aset/header.php';
?>
    <div style="background-image: url('gambarapik.jpg');"></div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md">
                <h2><i class="fas fa-chart-line mr-2"></i>Dashboard</h2>
                <hr class="bg-light">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body text-white" style="background-color: maroon">
                        <h5 class="card-title">Jumlah Buku</h5>
                        <p class="card-text" style="font-size:60px">420</p>
                        <a href="../buku/index.php" class="text-white">Lebih detail <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <div class="card-body text-white" style="background-color: #e67e22">
                        <h5 class="card-title">Jumlah Anggota</h5>
                        <p class="card-text" style="font-size:60px">666</p>
                        <a href="../anggota/index.php" class="text-white">Lebih detail <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>           
    </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <div class="card-body text-white" style="background-color: #2980b9">
                        <h5 class="card-title">Jumlah Peminjaman</h5>
                        <p class="card-text" style="font-size:60px">212</p>
                        <a href="../transaksi/index.php" class="text-white">Lebih detail <i class="fas fa-angle-double-right"></i></a>

        </div>
    </div>   
            </div>
        </div>

</div>


<?php
include 'aset/footer.php';
?>