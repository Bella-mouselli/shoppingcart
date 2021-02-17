<?php
require_once ("C:\MAMP\htdocs\databas\header.php");
require_once ("C:\MAMP\htdocs\databas\database.php");
require_once ("admin.php");


$id = htmlspecialchars($_GET['id']);

//echo "<h2>Ta bort</h2>";

$sql = "DELETE FROM foods";


$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$rowCount = $stmt->rowCount();


$message = "<div class='alert alert-danger' role='alert'>
                <p>$rowCount rader har raderats!</p>
            </div>";


            //echo $message;

require_once ("C:\MAMP\htdocs\databas\footer.php");
