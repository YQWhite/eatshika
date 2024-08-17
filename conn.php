<?php
// Change this to your own configuration
$link = new mysqli('123.117.167.62','kano','kano','kano');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";
