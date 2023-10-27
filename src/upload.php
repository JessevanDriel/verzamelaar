<?php
global $conn;
require('connection.php');

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $info = $_POST["info"];
    $price = $_POST["price"];
    $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];

    $tname = $_FILES["file"]["tmp_name"];

    $uploads_dir = 'media/';
    move_uploaded_file($tname, $uploads_dir . $pname);

    $sql = "INSERT into fileup(title, info, price, image) VALUES('$title', '$info', '$price', '$pname')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error";
    }
}