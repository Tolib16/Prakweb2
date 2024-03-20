<!-- panggil file atas atau header -->
<?php
include 'atas.php';
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Week 1</a></li>
                            <li class="breadcrumb-item active">array multidimensi</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
            <!-- tempat isi konten kita -->
    <?php

$mahasiswas =
[["Anies","TI","8"],
["Prabowo","SI","9"],
["Ganjar","BD","16"]];

foreach ($mahasiswas as $mahasiswa ) {
    echo "Nama : " .$mahasiswa[0] ."<br>";
    echo "Jurusan : " .$mahasiswa[0] ."<br>";
    echo "Semester : " .$mahasiswa[0] ."<br>";
    echo "<br>";
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
