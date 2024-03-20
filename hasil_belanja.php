<!-- panggil file atas atau header -->
<?php
include 'atas.php';
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Week 2</a></li>
                            <li class="breadcrumb-item active">Hasil Belanja</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
            <!-- tempat isi konten kita -->
            <h4>Hasil Inputan : </h4>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $customer = $_POST["customer"];
  $produk = $_POST["produk"];
  $jumlah = $_POST["jumlah"];


  if ($jumlah <= 0) {
      echo "Jumlah harus lebih besar dari 0. Silakan kembali dan masukkan jumlah yang valid.";
  } else {
      $total_harga = hitungTotalHarga($produk, $jumlah);


      echo "Customer: $customer<br>";
      echo "Produk: $produk<br>";
      echo "Jumlah: $jumlah<br>";
      echo "Total harga: Rp " . number_format($total_harga, 0, ',', '.');

  }
  } else {

     echo "Akses tidak valid.";
  }
    function hitungTotalHarga($produk, $jumlah) {
      $harga_produk = [
      "TV" => 4200000,
      "Kulkas" => 3100000,
      "Mesincuci" => 3800000
  ];

  $total_harga = $harga_produk[$produk] * $jumlah;
  return $total_harga;
}
?>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
<!-- panggil file bawah atau footer -->
<?php
include 'bawah.php';
?>

