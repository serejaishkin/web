<!DOCTYPE html> 
<html> 
<head> 

</head> 
<body> 

<?php 
//все что пишем тут это PHP 

echo "ЭТО печатает PHP"; 

$my=75; 
$my2=60; 
$rez=$my+$my2; 
echo "<br>".$rez; 

/*&& and логическое и два варианта 
|| or логическое или два варианта*/ 

if ($my>$my2){ 
echo "<br><h1>первая больше</h1>"; 
} 
else{ 
echo "вторая больше"; 
} 

$den_ned=7; 
if ($den_ned>=1 && $den_ned<6){ 
echo "работаем"; 
} 
elseif ($den_ned==6){ 
echo "почти не работаем"; 
} 
elseif($den_ned==7){ 
echo "<br>"."отдыхаем"; 
} 
else{ 
echo "Err"; 
} 

//циклы такие же как и в javascript 
for($i=1;$i<10; $i++){ 
echo "<br>".$i; 
} 

$mass=array("1"=>1, "2"=>2); 
$mass["drygoj"]="gkhgkhg"; 

print_r($mass);//функция печати массива на экран 

foreach ($mass as $i){ 
echo "<br>".$i; 
} 

echo '<br>не видит переменную $my'; 
echo "<br>видит переменную $my"; 
?> 
<a href="bd.php">Работа с БД</a>
 
</body> 
</html>
