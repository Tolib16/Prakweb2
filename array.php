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
                            <li class="breadcrumb-item active">array</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
            <!-- tempat isi konten kita -->
            <?php

$animals = ["kucing","ayam","banteng","ikan"];
echo 'Hewan dengan index ke 1 : ' .$animals[1];
echo "<br>";
echo 'Hewan dengan index ke 3 : ' .$animals[3];
echo "<br>";

foreach ($animals as $animal) {
    echo '<li>'.$animal.'</li>';
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