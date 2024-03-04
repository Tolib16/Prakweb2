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
