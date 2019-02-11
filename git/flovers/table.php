<!DOCTYPE html> 
<html> 
<head> 

</head> 
<body> 
<?php 

include('connect.php');
include('header.php');
/*$linc=mysqli_connect($host,$user,$pass,$name_bd); 
if ($linc){ 
echo "ок"; 
}else { 
echo "err"; 
} */

//создаем запрос 
$query ="select * from flover"; 
//указываем к каой бд и какой запрос пишем 
$result = mysqli_query($linc,$query); 

?> 
 
<table> 
<tr> 
<th>ид</th><br>
<th>имя</th> 
<th>цвет</th> 
<th>вес</th> 
<th>картинка</th> 
</tr> 
<?php 
$count_row=mysqli_num_rows($result); 
for($i=0;$i<$count_row;$i++){ 
echo "<tr>"; 
$row=mysqli_fetch_row($result);//получаем строку с данными 
echo "<td>".$row[0]."</td>"; 
echo "<td>".$row[1]."</td>"; 
echo "<td>".$row[2]."</td>"; 
echo "<td>".$row[3]."</td>"; 
echo "<td><img width='200' src='".$row[4]."'></td>"; 
echo "</tr>"; 
} 
?> 
</table >

<form action="#" method="POST"> 
<p>имя</p> 
<input type="text" name="name"> 
<p>цвет</p> 
<input type="text" name="color"> 
<p>вес</p> 
<input type="text" name="ves"> 
<p>фото</p> 
<input type="text" name="photo"> 
<input type="submit" name="sub"> 
</form> 
<?php 
 
if (isset($_POST['name'])) 
{ 
$n=$_POST['name']; 
$c=$_POST['color']; 
$v=$_POST['ves']; 
$p=$_POST['photo']; 
$g="insert into flover(id, name, color, ves, photo) VALUES ('','$n','$c',$v,'$p')"; 
$r=mysqli_query($linc,$g); 
echo $g; 

} 

?> 

</body> 
</html>