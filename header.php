<?php

$base = $_SERVER["PHP_SELF"];

echo '<div class="topnav">';

if ($base == "/Trab/index.php") {
    echo '<a href="index.php" class="active">Home</a>';
} else {
    echo '<a href="index.php">Home</a>';
}

if ($base == "/Trab/cliente.php") {
    echo '<a href="./cliente.php" class="active">Cliente</a>';
} else {
    echo '<a href="./cliente.php">Cliente</a>';
}

if ($base == "/Trab/reserva.php") {
    echo '<a href="./reserva.php" class="active">Reserva</a>';
} else {
    echo '<a href="./reserva.php">Reserva</a>';
}

echo '</div><br>';
