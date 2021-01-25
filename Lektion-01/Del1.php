<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del 1</title>
    
</head>
<body>

    <?php
date_default_timezone_set("Europe/Stockholm");

$dateNow = getdate();
$weekNow = idate("W");
switch ($dateNow["weekday"]) {
    case "Monday";
        $dateNow["weekday"] = "Måndag";
        break;
    case "Tuesday";
        $dateNow["weekday"] = "Tisdag";
        break;
    case "Wednesday";
        $dateNow["weekday"] = "Onsdag";
        break;
    case "Thursday";
        $dateNow["weekday"] = "Torsdag";
        break;
    case "Friday";
        $dateNow["weekday"] = "Fredag";
        break;
    case "Saturday";
        $dateNow["weekday"] = "Lördag";
        break;
    case "Sunday";
        $dateNow["weekday"] = "Söndag";
        break;
    default:
        echo "error!";
}
switch ($dateNow["month"]) {
    case "January";
        $dateNow["month"] = "Januari";
        break;
    case "February";
        $dateNow["month"] = "Februari";
        break;
    case "March";
        $dateNow["month"] = "Mars";
        break;
    case "May";
        $dateNow["month"] = "Maj";
        break;
    case "june";
        $dateNow["month"] = "Juni";
        break;
    case "july";
        $dateNow["month"] = "Juli";
        break;
    case "august";
        $dateNow["month"] = "Augusti";
        break;
    case "October";
        $dateNow["month"] = "Oktober";
        break;
    default:
        echo "error!";
}
if(strlen($dateNow['minutes']) == 1){
    $dateNow['minutes'] = "0".$dateNow['minutes'];
}
echo "Vecka ".$weekNow. " - ".$dateNow['weekday']. " den ".$dateNow['mday']." ".$dateNow['month']." ".$dateNow['year']." kl: " .$dateNow['hours']. ":".$dateNow['minutes'];
?>

</body>
</html>