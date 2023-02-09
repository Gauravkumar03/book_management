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
        .table {
            margin: 30px;
        }
    </style>
</head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Book Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="table.php">Listing</a>
                <a class="nav-link disabled">Disabled</a>
            </div>
            </div>
        </div>
        </nav>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include('connection.php');
                    $sql_display = "SELECT * FROM `books` ORDER BY `s_no` DESC";
                    $result_display = mysqli_query($conn, $sql_display);
                    $n = 1;
                
                    while($row = mysqli_fetch_assoc($result_display)) {
                        echo '
                            <tr>
                                <th scope="row">'.$n.'</th>
                                <td>'.$row['Name'].'</td>
                                <td>'.$row['Author'].'</td>
                                <td>'.$row['Price'].'</td>
                                <td> 
                                    <button><a href="update.php?updateid=' . $row["s_no"] . '">Update</a></button>
                                    <button><a href="delete.php?deleteid=' . $row["s_no"] . '">Delete</a></button>
                                </td>
                            </tr>
                        ';
                        $n++;
                    }

                ?>
            </tbody>
        </table>
    </body>
</html>

