<?php

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
$data = 'Admin@1234';
$data = explode('@',$data);
// echo $data[0];   @den evvelkileri gosteir
// echo $data[1]  @den sonrakilari gosterir eger 2ci @ => onda $data[3] yazariq
$login= $data[0];
$parol = $data[1];
echo "$login and $parol";
// ders 14





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




