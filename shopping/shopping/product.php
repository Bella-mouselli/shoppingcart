<?php
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$product) {
        exit('Product does not exist!');
    }
} else {
    exit('Product does not exist!');
}
?>


<?=template_header('Product')?>

<div class="product content-wrapper">
    <img src="imgs/<?=$product['img']?>" width="500" height="500" alt="<?=$product['name']?>">
    <div>
        <h1 class="name"><?=$product['name']?></h1>
        <span class="price">
            &dollar;<?=$product['price']?>
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp">&dollar;<?=$product['rrp']?></span>
            <?php endif; ?>
        </span>
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            

<?php
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

    


    

    

}
?> 


<legend> Leverans information</legend>

<form action="#" class="#" method="post">
<div>
    <input type="hidden" value= " <?=$product['id']?>"class="form-control" name="id" required placeholder= "id">
</div>

<div>
    <input type="text" class="form-control" name="name" required placeholder= "Namn">
</div>

<div>
    <input type="text" class="form-control" name="tel" required placeholder= "Telefon">
</div>

<div>
    <input type="text" class="form-control" name="email" required placeholder= "E-post">
</div>

<div>
    <input type="text" class="form-control" name="address" required placeholder= "adress">
</div>

<div>
    <input type="submit" value="Skicka Beställning" class="form-control btn btn-outline-dark">
</div>


</form>

        </form>
        <div class="description">
            <?=$product['desc']?>
        </div>
    </div>
</div>



<?=template_footer()?>
