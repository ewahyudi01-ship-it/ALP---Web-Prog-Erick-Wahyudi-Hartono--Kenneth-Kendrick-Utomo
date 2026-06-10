<?php

include 'connect.php';

$id = $_GET['id'];

mysqli_query(
    $conn,
    "DELETE FROM categories_wallpapers_pivot
     WHERE wallpaper_id = $id"
);

mysqli_query(
    $conn,
    "DELETE FROM wallpapers
     WHERE wallpaper_id = $id"
);

header("Location: dashboard.php");
exit();