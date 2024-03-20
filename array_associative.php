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
                            <li class="breadcrumb-item active">array associative</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- tempat isi konten kita -->
                                <?php

$animals = ["k"=>"kucing","a"=>"ayam","b"=>"banteng","i"=>"ikan"];
echo 'Ini hewan : ' .$animals["a"];
echo "<br>";
echo 'Ini hewan : ' .$animals["i"];
echo "<br>";
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