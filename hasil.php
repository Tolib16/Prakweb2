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
