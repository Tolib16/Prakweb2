<!-- panggil file atas atau header -->
<?php
include 'atas.php';
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Week 3</a></li>
                            <li class="breadcrumb-item active">hasil</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
            <!-- tempat isi konten kita -->

            <!DOCTYPE html>
<html>
<head>
    <style>
        .hasil {
            border: 3px solid #000;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="hasil">
<?php
// menangkap value form berdasarkan unique name & simpan kedalam variable
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skill = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$nilai = 0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
            $nilai += 10;
            break;
        }
    }
foreach ($skill as $data) {
    switch ($data) {
        case 'css':
            $nilai += 10;
            break;
        }
    }
foreach ($skill as $data) {
    switch ($data) {
        case 'js':
            $nilai += 20;
            break;
        }
    }
foreach ($skill as $data) {
    switch ($data) {
        case 'rwd':
            $nilai += 20;
            break;
        }
    }
foreach ($skill as $data) {
    switch ($data) {
        case 'php':
            $nilai += 30;
            break;
        }
    }
foreach ($skill as $data) {
    switch ($data) {
        case 'java':
            $nilai += 50;
            break;
        }
    }
foreach ($skill as $data) {
    switch ($data) {
        case 'phyton':
            $nilai += 30;
            break;
        }
    }
// tampilkan value ke dalam web browser
echo "<h4>Informasi Yang dikirim : </h4>";
echo "NIM : $nim";
echo "<br>Nama : $nama";
echo "<br>Jenis Kelamin : $jk";
echo "<br>Domisili : $domisili";
echo "<br>Program Studi : $prodi";
echo "<br>Skill : ";
foreach ($skill as $data){
    echo $data . ",";
}
echo "<br>Skor Skill : $nilai";
echo "<br>Kategori Skill : ";

if ($nilai >= 0 && $nilai <= 40) {
    echo "Kurang.";
} elseif ($nilai > 40 && $nilai <= 60) {
    echo "Cukup.";
} elseif ($nilai > 60 && $nilai < 100) {
    echo "Baik.";
} elseif ($nilai >= 100 && $nilai <= 150) {
    echo "Sangat Baik.";
} else {
    echo "Skor tidak valid.";
}
echo "<br>Email : $email";
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