
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<?php 
template_header('cart');



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    echo "</pre>";

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    $stmt = $pdo->prepare("INSERT INTO customers (name, tel, email, address)
                                VALUES (:name , :tel, :email, :address)");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);


    $stmt->execute();


    $last_id = $pdo->lastInsertId();
    $orderN= $_POST['id'];
    $stmt = $pdo->prepare("INSERT INTO orders (customer_id, product_id)
    VALUES (:customer_id , :product_id)");
    $stmt->bindParam(':customer_id', $last_id);
    $stmt->bindParam(':product_id', $orderN);
    $stmt->execute();

    $message = "<div class='alert alert-success' role='alert'>
                    <p> Tack för din order $name. <br> Kundnummer: $last_id <br> Ordernummer: $orderN</p>
                </div>";

}

?>



<?php

if(isset($message)) echo $message;
?>


 <?=template_footer()?>
