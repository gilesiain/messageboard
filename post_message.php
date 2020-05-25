<?php
$dbServername = "";
$dbUsername = "";
$dbPassword = "";
$dbName = "";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$name  = mysqli_real_escape_string($conn, $_POST['name']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$spl = "INSERT INTO posts (user_name, message_post) VALUES ('$name' , '$message');";
mysqli_query($conn, $spl);

header("Location:/messageboard.html");
