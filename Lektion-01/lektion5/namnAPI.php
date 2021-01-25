<?php

// 1. Skapa en HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");

// 2. Skapa två PHP-arrayer för att lagra förnamn och efternamn.
$femaleFN = ["Åsa",  "Sara",  "Anna"];
$maleFN = ["Mahmud", "Kalle", "Adam"];
$lastNames = ["Öberg", "Al Hakim", "Andersson", "Johansson", "Nilsdotter", "Ericsson"];


// 3. Skapa 10 olika namn (förnamn och efternamn)
//    och spara dessa i en ny array som heter names.

$names = array();
$firstNames ="";
$gender ="";
$email ="";
$lastName ="";
for ($i=0; $i < 10 ; $i++) { 
    $random = rand(0,1);
    $age = rand(1,100);
    

    if($random==0){
         $firstNames = $femaleFN[rand(0, count($femaleFN) - 1)];
         $gender = 'female';}
    else {$firstNames = $maleFN[rand(0, count($maleFN) - 1)];
        $gender = 'male';}
    $lastName = $lastNames[rand(0, count($lastNames) - 1)];
    $email = email($firstNames,$lastName); 
    $name = array(
       "firstname" => $firstNames,        
        "lastname" => $la

        return $name.'@yh.nackademin.se';
}

// 4. Konvertera PHP-arrayen till en JSON-string.
$json = json_encode($names, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

// Skicka JSON till klienten.
echo $json;

