<?php

 require_once ("C:\MAMP\htdocs\databas\database.php");
 require_once ("admin.php");
 

 


 
 $stmt = $conn->prepare("SELECT * FROM foods");

 
 $stmt->execute();

 $result = $stmt->fetchAll();

 $table = "
    <table class='table table-hover'>
    <tr>
        <th>Pizza</th>
        <th>Burgare</th>
        <th>Pasta</th>
        <th>Dricka</th>
    </tr>
    ";

 foreach($result as $key => $value){



    $id = $value['id']; 

    $table .= "
        <tr>
            
            <td>$value[category]</td>
            <td>$value[foods]</td>
            <td>$value[meddelande]</td>
            <td>
                <a href='delete.php?id=$value[id]'>Ta bort alla</a>
            </td>

            <td>
            <a href='deletealla.php?id=$value[id]'>Ta bort </a>
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