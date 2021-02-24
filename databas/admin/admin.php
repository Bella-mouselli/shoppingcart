<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leverans information</title>
</head>
<body class="container">

<?php

require_once ("C:\MAMP\htdocs\databas\header.php");
require_once ("C:\MAMP\htdocs\databas\database.php");


?>
<form method="post" action="C:\MAMP\htdocs\databas\index.php">
    <button class="form-control btn btn-outline-dark" type="submit">Tillbaka</button>
</form>
<?php

require_once ("read.php");
require_once ("delete.php");
require_once ("deletealla.php");
require_once ("C:\MAMP\htdocs\databas\footer.php");

 ?>
</form>
</body>
</html>
