<?=template_header('Kontakt')?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    //print_r($_POST);
    echo "</pre>";

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    


    $stmt = $pdo->prepare("INSERT INTO contact (name, tel, email)
                                VALUES (:name , :tel, :email)");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':email', $email);
    


    $stmt->execute();


    $last_id = $pdo->lastInsertId();

    $message = "<div class='alert alert-success' role='alert'>
                    <p> Tack för att du kontaktat oss $name.</p>
                    <p> Din angivna information är: <br> Telefon: $tel, <br> E-post: $email.</p>
                </div>";

}
?> 


<legend> Kontakta oss</legend>

<form action="#" class="#" method="post">

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
    <input type="submit" value="Skicka" class="form-control btn btn-outline-dark">
</div>



</form>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



<body class="container">

    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Mobil</th>
                <th>E-mail</th>
                <th>Adress</th>
            </tr>
            <tr>
                <td class="table-warning"> 0737183032 <br> 0735821941</td>
                <td class="table-warning"> chappa_atallah@hotmail.com <br> bellam95@hotmail.com</td>
                <td class="table-warning"> Stockholm/Vasagatan 5 <br> Stockholm/Vasagatan 5 </td>
            </tr>
    </table>
    </thead>
    <?php

if(isset($message)) echo $message;
?>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2035.0625383147535!2d18.055417951192016!3d59.33190971776832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d60ec522fcb%3A0x2beba3f65f906753!2sVasagatan%205%2C%20111%2020%20Stockholm!5e0!3m2!1ssv!2sse!4v1611704040369!5m2!1ssv!2sse"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
</body>

</html>



 