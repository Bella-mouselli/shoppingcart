<?php

 require_once ("C:\MAMP\htdocs\databas\database.php");
 require_once ("admin.php");
 

 


 
 $stmt = $conn->prepare("SELECT * FROM customers");

 
 $stmt->execute();

 $result = $stmt->fetchAll();

 $table = "
    <table class='table table-hover'>
    <tr>
        <th>Namn</th>
        <th>e-post</th>
        <th>Telefon</th>
        <th>Adress</th>
    </tr>
    ";

 foreach($result as $key => $value){



    $id = $value['id']; 

    $table .= "
        <tr>
            
            <td>$value[name]</td>
            <td>$value[email]</td>
            <td>$value[tel]</td>
            <td>$value[address]</td>
            <td>
                <a href='delete.php?id=$value[id]'>Skicka beställning</a>
            </td>

            <td>
            <a href='deletealla.php?id=$value[id]'>Skicka beställning </a>
        </td>
        </tr>
    ";

 }

 $table .= "</table>";
 

 echo $table;


 /*
 echo "<hr><pre>";
 print_r($result);
 echo "</pre>";
 */