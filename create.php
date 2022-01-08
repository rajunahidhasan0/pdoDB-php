<?php

if (isset($_GET['title'])) {
    array_push($db, $data);

    $db_enc = json_encode($db);
    file_put_contents('db.json', $db_enc);

    $added = true;

    require "database/connection.php";
    require "database/functions.php";
    $pddb = connect();
    add($pddb, htmlspecialchars($_GET['title']), $_GET['author'],  $_GET['available'], 
                        $_GET['isbn'], $_GET['pages']);

    header('Location: index.php');
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add New Book</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="create-body">
    <nav class="sticky-top navbar navbar-default navbar-style bg-dark">
        <div class="container-fluid">
            <a href="index.php" class="text-light" style="font-size: 35px;"><b>Enter Information About New Book</b></a>
            <form class="d-flex" action="search.php" method="POST">
                <input class="form-control me-2" type="search" name="search" placeholder="Search keyword" aria-label="Search">
                <button class="btn btn-primary btn-sm" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- create new item -->

    <div class="form-container bg-gradient">
        <form action="" method="GET">
            <h5> </h5>
            <div class="form-left form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="title" name="title" required>
            </div>
            <div class="form-left form-group">
                    <label for=>Author</label>
                    <input type="text" class="form-control" placeholder="author name" name="author" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Availability</label>
                    <select class="form-control" name="available" required>
                        <option value="true" Selected>Yes</option>
                        <option value="false">No</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Pages</label>
                    <input type="number" class="form-control" placeholder="No. of pages" name="pages" required>
                </div>
                <div class="form-group col-md-6">
                    <label>ISBN</label>
                    <input type="number" class="form-control" placeholder="ISBN No." name="isbn" required>
                </div>
            </div>
            <button type="submit" class="form-sub btn btn-info ">Add</button>
        </form>

    </div>


    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>
