<?php

// $qovluq = '.';
// $qv = opendir($qovluq);
// while($sadala = readdir($qv)){
//     if($sadala != '.' and $sadala != ".."){
//         if(is_dir($sadala)){
//             echo $sadala ."<br>Qovluqdur<br>";
//         }elseif(is_file($sadala)){
//             echo $sadala ."<br>Filedir<br>";
//         }
       
//     }

// }
// mkdir("yeni", 777);  qovluga giris icazesi
// ders 25




// $a = 51;
// $b = 10;
// $a +=1;
// evvelki anin ustune 1 gelir
//  echo $a;
//  % qaligi hesablayir


// $a = 7;
// if($a > 5 and $a < 10){
//     echo " emeliyyat ugurludur";
// }else{
//     echo " emeliyyat ugurlu deyil";
// }

//  == => eger beraberdirse ,  != beraber deyilse >= <= novleride var && = and eyni menaya gelir,eyniyle || ve or eyni mena


// echo ' <a href="google.com" > link </a>';
// echo "<a href=\"google.com\" > link </a>" ;
// $ad = "Test";
// echo "Salam, $ad ";
// ECHO "Salam, {$ad}";
// echo 'Salam,'.$ad .'';
// echo '$ad';  echo "\$ad";
// kohne versiyalarda \ istifade etmek olmur bunun ucun \\ yeni 2 sin yazirsan


// $a = 15;
// echo abs($a);
// abs() menfi eded sqrt() -> kvadrat,paw( $a,2) -> ustlu max() min()
//  $a = "" ;
//  echo gettype($a);
// echo settype($a,"string");
// echo var_dump(isset($a));
// yeni bele bir deyisken var
// $salam = "gjfjgjg";
// echo $salam;

// unset($salam);
// bu deyiskeni silir yox edir


// $yazi = "My Name is Firengiz";
//echo substr($yazi,6);  // ilk 6 simvolu silir
//echo substr($yazi,6,10);   //6dan 10 simvol gosterir say olaraq 10
//echo substr($yazi,-10) //sonuncu 10 simvol
// echo strlen($yazi);
// echo strtoupper($yazi);
// echo strtolower($yazi);
// echo ucfirst($yazi);
// trimlerden bosluqlari kesmek ucun istifade olunur trim($yazi)

// $yazi = "<b>My Name is Firengiz</b>";
// echo htmlspecialchars($yazi); html kodlarini zerersizlesdirir
// $yazi2 =" salam 
// my name is 
// Fira?";
// echo Nl2br($yazi2);  alty alta yazilmani gorur
// $yazi3 = str_replace('My','Menim',$yazi); evez edir 
// echo $yazi3;
// $data = 'Admin@1234';
// $data = explode('@',$data);
// echo $data[0];   @den evvelkileri gosteir
// echo $data[1]  @den sonrakilari gosterir eger 2ci @ => onda $data[3] yazariq
// $login= $data[0];
// $parol = $data[1];
// echo "$login and $parol";
// ders 14

// $a = 1;
// switch($a){
//     case "1":
//         echo "salam";
//         break;
// }


// if(isset($_GET['sehife'])){
//     $sehife =$_GET['sehife'];
// }else{
//     $sehife ='';
// }
// switch($sehife){
//     case  "haqqinda":
//     echo "bu bolme haqqimizdadir";
//     case "elaqe":
//         echo "Elaqe";
//     default:
//     echo "ana sehife";
//   echo ' <a href="index.php?sehife=haqqinda">Haqqinda</a><br>|<a href="index.php?sehife=elaqe">Elaqe</a><br>' ;
//     break;
// }
// localhost/core_php/index/php?sehife=haqqinda olarsa kod isleyecekdir



// $a = 4567889;
// $array = array("Sariyev",'Fira',21,'Baki');
// echo $array[4];

// $array = array(
//     'soyad' => 'Sariyev',
//     "ad" => 'Fira',
//     'yas'=>21,
//     'seher'=>'baku'

// );
// $array['ata'] = ' Sahib';
// echo $array['ata'];


// array icinde array
// $array = array(
//     array('Sariyeva','fira',21,'baki'),

// );
// echo $array[0][3];
// print_r($array)   butun arrayi aciq formada gosterer

// $arr = array('sariyeva','fira',21,'baki');
//  array_shift($arr);
//  0ci elementi silir
// array_unshift($arr,21);
// 1ci elemente 21 yazir
// array_pop($arr);
// sonuncu elementi silir
// array_push($arr,'dada');
// sonuna yeni element elave edir

// echo $arr[0];
// print_r($arr);

// $array = array(
//     'soyad' => 'Sariyev',
//     "ad" => 'Fira',
//     'yas'=>21,
//     'seher'=>'baku'

// );
// extract($array);
// arrayin elementlerini $ deyiskenine cevirir
// echo $soyad;

// $arr= array('a','b','a','c','c','c');
// $arr2 =['a','b']; 
// her 2side arraydi
// echo count($arr); sayir
// print_r( array_count_values($arr));
// hansi elementden nece denedirse gosterir


// $a =1;
// while($a <10){
//     echo $a;
//     $a++;
// }

// for($a =1;$a<10;$a++){
//     echo $a;
// }
// $arr = array('a','b',23);
// $array = array(
//     'soyad' => 'Sariyev',
//     "ad" => 'Fira',
//     'yas'=>21,
//     'seher'=>'baku'

// );
// for($say = 0;$say <count($arr);$say++){
//     echo $arr[$say]."/";
// }
// arrayin butun elementlerini yazdirar

// foreach($array as $array2 => $arx){
//     echo $array2;
//     echo $arx;
// } arrayda key value olanda
// buda butun elementleri  yazdirar;







// calculator



// if($_POST){
//     // eger form a tiklanilibsa demekdir
//  $a = trim($_POST['reqema']);
//  $b = trim($_POST['reqemb']);
//  $emeliyyat = $_POST['emeliyyat'];
// //  !$a ve ya empty($a)
//  if(!$a or empty($b)){
//     echo ' Xanalari doldurun';
//     die();
//  }
// // is_numeric burda reqem olmasi demekdi ! ile eksini yoxlayiriq
//  if(!is_numeric($a) or !is_numeric($b))
// echo " sadece reqem ola biler";
// };
// if(strlen($a) > 5){
//     echo "cox simvol daxil etdiniz";
// };

// if($emeliyyat == 1){
//      $cavab =$a+$b;
// };
// if($emeliyyat ==2){
//     $cavab =$a-$b;
// };
// if($emeliyyat ==3){
//     $cavab =$a*$b;
// };
// if($emeliyyat == 4){
//     $cavab =$a/$b;
// };
// // burda switch da ola biler

// echo $cavab;


// include "cagir.php";
// bu basqa filedir $a ise cagir.php icindeki a filesidir
// echo $a;

// echo " Firngiz Sariyeva";
// include "cagir.php";
// bir nece defe cagirila biler ve emeliyyat her defe cagirildiqda isheyer sehv yazilsa error verer ama novbeti funksiya isleyer
// include_once "cagir.php";
// include_once ise bir nece defe yazilsada yalniz 1 defe isleyer
// require "cagir.php";
// require_once "cagir.php"; bir defe ucundu
// require ise sehv yazilsa die olur avtomativ ve daha islemir novbeti funksiyalar


?>








<!-- <form action="gonder.php" method="get">
ad: <br>
<input type="text" name="ad"> <br>
Soyad: <br>
<input type="text" name="soyad"> <br>
Yas: <br>
<input type="text" name="age"> <br>
<input type="submit" value="gonder">
</form> -->

<!-- get methodla form goinderdikde urla yazilir ve gonder.php de $_get le nameler tutulur -->



<!-- <form action="gonder_POST.php" method="post">
ad: <br>
<input type="text" name="ad"> <br>
Soyad: <br>
<input type="text" name="soyad"> <br>
Yas: <br>
<input type="text" name="age"> <br>
<input type="submit" value="gonder">
</form> -->
<!-- BU POST METODUYLA yazilmis formdur ve sehifeni 2 ci defe refresh etdikde sehifede error verer cunki getden ferqli olaraq 
postda sehifeye 1 defe girise icaze verir -->



<!-- <form action="gonder_post.php" method="post">
Reqem a <br>
<input type="text" name="reqema"> <br>
Reqem b: <br>
<input type="text" name="reqemb"> <br>

<select name="emeliyyat">
    <option value="toplama">Toplama</option>
    <option value="cixma">Cixma</option>
    <option value="vurma">Vurma</option>
    <option value="bolme">Bolme</option>
</select>  <br>


<input type="submit" value="Hesabla">
</form> -->
<!-- 

<form action="index.php" method="post">
reqem A <br>
<input type="text" name="reqema">
reqem b <br>
<input type="text" name="reqemb">
emeliiyat : <br>
<select name="emeliyyat" id="">
    <option value="1">toplama</option>
    <option value="2">cixma</option>
    <option value="3">vurma</option>
    <option value="4">bolme</option>
</select>

<input type="submit" value="hesable">
</form> -->

