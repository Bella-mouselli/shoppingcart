<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ("database.php");

    
    echo "<pre>";
    // print_r($_POST);
    echo "</pre>";

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    
    $stmt = $conn->prepare("INSERT INTO customers (name, tel, email, address)
                                VALUES (:name , :tel, :email, :address)");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);

    
    $stmt->execute();

    
    $last_id = $conn->lastInsertId();

    $message = "<div class='alert alert-success' role='alert'>
                    <p>$name har sparats i databasen med id=$last_id</p>
                </div>";  
    
}

?>

<legend> leverans information</legend>
<form action="#" class="#" method="post">

<div class="col-md-6 my-2">
    <input type="text" class="form-control" name="name" required placeholder= "Namn">
</div>

<div class="col-md-6 my-2">
    <input type="text" class="form-control" name="tel" required placeholder= "Telefon">
</div>

<div class="col-md-6 my-2">
    <input type="text" class="form-control" name="email" required placeholder= "E-post">
</div>

<div class="col-md-6 my-2">
    <input type="text" class="form-control" name="address" required placeholder= "adress">
</div>

<div class="col-md-6 my-4">
    <input type="submit" value="Skicka Beställning" class="form-control btn btn-outline-dark">
</div>
<span class="badge badge bg-danger">
            <a class="text-light" href="admin/admin.php">Admin</a>
        </span>

</form>


<?php

if(isset($message)) echo $message;

// echo isset($message) ? $message : "";