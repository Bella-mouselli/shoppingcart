<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    

<?php
 require_once ('database.php');


 $stmt = $conn->prepare("SELECT * FROM foods");

 $stmt->execute();

 $result = $stmt->fetchAll();

 $table = "
    <table class='table table-hover'>
    <tr>  
        <th>Bild</th>
        <th>Titel</th>
        <th>Innehåll</th>
        <th>Pris</th>
        

    </tr>
    ";

 foreach($result as $key => $value){

    $id = $value['id']; 
    $table .= "
        <tr> 
        <td><img class='card col-2' src='food_image/$value[image]'</td>  
        <td><b>$value[title]</b></></td>
        <td>$value[description]</td>
        <td>$value[price]:-</td>
       
        
            <td>|<a href='buy.php?id=$value[id]'>Lägg till</a>| <br> 
            </td>
        </tr>
    ";
 }

 

 $table .= "</table>";

 echo $table;

 
 require_once("footer.php");
 ?>

 <hr size="8" width="90%" color="red"> 


 

