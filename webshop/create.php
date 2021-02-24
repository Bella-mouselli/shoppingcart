<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    require_once ("database.php");

    

    $food_id = htmlspecialchars($_GET['food_id']);
    $title = htmlspecialchars($_GET['title']);
    $price = htmlspecialchars($_GET['price']);
    $description = htmlspecialchars($_GET['description']);
    $image = htmlspecialchars($_GET['image']);

// Skapa en SQL-sats (förbereda en sats)
$stmt = $conn->prepare("SELECT * from foods (food_id, title, price, description, image)
                            VALUES (:food_id , :title , :price, description, image)");

// Binda parametrar (binda variabler med platshållare)
$stmt->bindParam(':food_id', $food_id);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':image', $image);

    // Kör SQL-sats
    $stmt->execute();

    $last_id = $conn->lastInsertId();

    $message = "<div class='alert alert-success' role='alert'>
                    <p>Hej $food_id! Ditt meddelande har skickats.</p>
                </div>";  
    
}






