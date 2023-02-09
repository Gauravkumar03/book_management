<?php

include('connection.php');
$name = $_POST['name'];
$author = $_POST['author'];
$price = $_POST['price'];
$ids = $_POST['hidden'];



    
    //Create a database


if(isset($_POST['update'])) {
    $sqli = "UPDATE `books` SET `Name`='$name',`Author`='$author',`Price`='$price' WHERE `s_no`='$ids'";
    $resulti = mysqli_query($conn, $sqli);
    echo $result;
    if($resulti == 1) {
        header('Location: table.php');
    }
}
else {
    $sql_insert = "INSERT INTO `books` (`Name`, `Author`, `Price`) VALUES ('$name', '$author', '$price')";
    $result_insert = mysqli_query($conn, $sql_insert);
    if($result_insert == 1) {
        header('Location: table.php');
    }
    
}

?>
