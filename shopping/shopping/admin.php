

<?=template_header('Admin')?>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<?php

 $stmt = $pdo->prepare("SELECT * FROM contact");

 $stmt->execute();

 $result = $stmt->fetchAll();

 $table = "
    <table class='table table-hover'>
    <tr>
        <th>Namn</th>
        <th>telefon</th>
        <th>Email</th>
    </tr>
    ";

 foreach($result as $key => $value){

    $id = $value['id']; 

    $table .= "
        <tr>
        <td>$value[name]</td>    
        <td>$value[tel]</td>
        <td>$value[email]</td>
        </tr>
    ";
 }
 

$id = htmlspecialchars($_GET['id']);


$sql = "DELETE FROM customers WHERE id = :id";


$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$rowCount = $stmt->rowCount();


$message = "<div class='alert alert-danger' role='alert'>
                <p>$rowCount har tagits bort!</p>
            </div>";




 $table .= "</table>";

 echo $table;
 ?>
 <hr size="8" width="90%" color="red">