<?php

// $goster_ad = $_POST['ad'];

// $goster_soyad = $_POST['soyad'];

// $goster_age = $_POST['age'];

// echo "Your name , $goster_ad,your last name : $goster_soyad, your age $goster_age";

$a= $_POST['reqema'];
$b = $_POST['reqemb'];
$emeliyyat = $_POST['emeliyyat'];
if($a == "" or $b == ""){
    echo "xanalari doldurun";
    die();
    // xana bosdursa artiq isleme demekdi buna exit(); de yamaq olar
}

    if($emeliyyat == 'toplama'){
        $cavab = $a+ $b;
    }else if($emeliyyat == 'cixma'){
        $cavab = $a - $b;
    }
    else if($emeliyyat == 'vurma'){
        $cavab = $a * $b;
    }
    else{
        $cavab = $a%$b;
    }
    echo $cavab;






?>