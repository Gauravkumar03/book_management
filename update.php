<?php
    include('connection.php');
    echo 'working';
    // echo $_GET['updateid'];
    $ids = $_GET['updateid'];
    echo $ids;

    $sql = "SELECT * FROM `books` WHERE `s_no` = $ids";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    $name = $row['Name'];
    $author = $row['Author'];
    $price = $row['Price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        form {
            margin: 50px auto;
            width: 50%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Book Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Listing</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled">Disabled</a>
        </div>
        </div>
    </div>
    </nav>
    <form method="post" action="insert.php">
        <input type="hidden" name="hidden" value="<?php echo $ids ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Book's Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="<?php echo $name ?>">
            
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="<?php echo $author ?>">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="<?php echo $price ?>">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Add</button>
    </form>
</body>
</html>

