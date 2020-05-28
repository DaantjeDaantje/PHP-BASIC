<?php
$producten = array("Appels", "Peren", "Melk", "Banaan", "Meloen", "Ananas", "Fanta", "Water", "Cola", "Limonadesiroop");
$prijzen = array(0.25, 0.33, 1.15, 0.69, 1.54, 0.55, 1.25, 0.69, 1.32, 1.14);

function getInput(){
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    var_dump($input);
}

function getProductNr(){
    $producten = array("Appels", "Peren", "Melk", "Banaan", "Meloen", "Ananas", "Fanta", "Water", "Cola", "Limonadesiroop");
    $productnummer = $_GET['productnummer'] ?? 0;
    echo $producten[$productnummer];
}

function getAmount(){
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getTotalPrice(){
    $producten = array("Appels", "Peren", "Melk", "Banaan", "Meloen", "Ananas", "Fanta", "Water", "Cola", "Limonadesiroop");
    $prijzen = array(0.25, 0.33, 1.15, 0.69, 1.54, 0.55, 1.25, 0.69, 1.32, 1.14);
    $productnummer = $_GET['productnummer'] ?? 0;
    $aantalProd = $_GET['aantal'] ?? 0;
    echo $aantalProd * $prijzen[$productnummer];
}

function getAge(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function getDiscount(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch($leeftijd){
        case $leeftijd <= 15: 
        echo "1 euro";
        break;
        case 16:
        echo "16 cent";
        break;
        case 17:
        echo "17 cent";
        break;
        case 18:
        echo "18 cent";
        break;
        case 19:
        echo "19 cent";
        break;
        default:
        echo "geen korting";
    }
}
?>