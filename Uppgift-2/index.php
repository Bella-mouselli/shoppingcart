<?php 

include 'App.php';

$sortiment = $_GET['type'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Brand store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="Anonym">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container">

    <h1 class="display-1 text-center"><b>Brand store</b></a></h1> <br><br>
    <h2 class="display-20 text-center"><b>The best brands for you</b></a></h2> <br><br>
    <div class="text-center">
        <span class="badge badge bg-danger">
            <a class="text-light" href="?type=women clothing">Women</a>
        </span>
        <span class="badge badge bg-danger">
            <a class="text-light" href="?type=men clothing">Men</a>
        </span>
        <span class="badge badge bg-danger">
            <a class="text-light" href="?type=jewelery">Jewelery</a>
        </span>

    </div>
    <hr><br>

    <h3 class="display-25 text-center">Brand store - 
    <?php 
    echo $sortiment;
    ?>
    </h3>

    <?php 
    App::main($sortiment);
    ?>



</body>

</html>
http://localhost/test/webshop/api1.json
