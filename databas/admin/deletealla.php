<?php
require_once ("C:\MAMP\htdocs\databas\header.php");
require_once ("C:\MAMP\htdocs\databas\database.php");
require_once ("admin.php");


$customer_id = htmlspecialchars($_GET['customer_id']);

//echo "<h2>Ta bort</h2>";

$sql = "DELETE FROM customers";


$stmt = $conn->prepare($sql);
$stmt->bindParam(':customer_id', $customer_id);
$stmt->execute();
$rowCount = $stmt->rowCount();


$message = "<div class='alert alert-danger' role='alert'>
                <p>$rowCount rader har raderats!</p>
            </div>";


            //echo $message;

require_once ("C:\MAMP\htdocs\databas\footer.php");
