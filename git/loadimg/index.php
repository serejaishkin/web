<?php
include ("header.php");
?>
sys_getloadavg
<form method="post" enctype="multipart/form-data">
<input type="file" name="picture">
<input type="submit" name="load" value="загрузить">
</form>
<?php
if (isset($_POST['load'])){ 
    $types = array('image/gif', 'image/png', 
    'image/jpeg','image/jpg');
    if (in_array($_FILES['picture']['type'],$types)){
    copy($_FILES['picture']['tmp_name'], 
    "img/".$_FILES['picture']['name']); }
    else{
        echo"не допустимый формат";
    }
    //copy("где берем","куда копируем"); копирует указанный в 
    //форме файл 
    } 
include ("footer.php");
?>