<?php
$dbServername = "";
$dbUsername = "";
$dbPassword = "";
$dbName = "";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$spl = "SELECT * FROM posts;";
$result = mysqli_query($conn, $spl);
$resultCHECK = mysqli_num_rows($result);

$i = 0;
$my_array = array();

if ($resultCHECK > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $my_array[$i]['id'] = $row[(string) 'id'];
        $my_array[$i]['name'] = $row[(string) 'user_name'];
        $my_array[$i]['message'] = $row[(string) 'message_post'];
        $i++;
    }
    echo json_encode($my_array);
}
