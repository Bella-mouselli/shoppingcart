<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ("database.php");

    
    echo "<pre>";
    // print_r($_POST);
    echo "</pre>";

    $foods = $_POST['foods'];
    $category = $_POST['category'];
    $meddelande = $_POST['meddelande'];

    
    $stmt = $conn->prepare("INSERT INTO foods (foods, category, meddelande)
                                VALUES (:name , :mail, :meddelande)");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':meddelande', $meddelande);

    
    $stmt->execute();

    
    $last_id = $conn->lastInsertId();

    $message = "<div class='alert alert-success' role='alert'>
                    <p>$name har sparats i databasen med id=$last_id</p>
                </div>";  
    
}

?>


<form action="#" class="row" method="post">

<div class="col-md-6 my-2">
    <input type="text" class="form-control" name="name" required placeholder= "Namn">
</div>

<div class="col-md-6 my-2">
    <input type="text" class="form-control" name="mail" required placeholder= "E-post">
</div>

<div class="col-md-6 my-4">
    <input type="text" class="form-control" name="meddelande" required placeholder= "Meddelande">
</div>

<div class="col-md-6 my-4">
    <input type="submit" value="Lägg till" class="form-control btn btn-outline-dark">
</div>
<span class="badge badge bg-danger">
            <a class="text-light" href="admin/admin.php">Admin</a>
        </span>

</form>


<?php

if(isset($message)) echo $message;

// echo isset($message) ? $message : "";