<?php 
include('connection.php');
$ids = $_GET['deleteid'];

$sql = "DELETE FROM `books` WHERE `s_no`='$ids'";
$result = mysqli_query($conn, $sql);

if($result == 1) {
    header('Location: table.php');
}

?>