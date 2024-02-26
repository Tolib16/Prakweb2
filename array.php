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