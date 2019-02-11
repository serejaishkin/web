
<?php
//подключаем внешние файлы с помощью функции
// include
include("header.php");
?>

    <div class="content" >
        <h1 align="center">сайт про цветы</h1>
        <h1>добро пожаловать!!!</h1>
        
        <img src="https://million-wallpapers.ru/wallpapers/4/58/14475804657355694385.jpg" 
        class="img-fluid">
        

        <?php
        if (empty($_POST)){
        ?>
        
        <?php
        }
        else{
            include('connect.php');
            $num=$_POST['num'];
            $s="delete from user where id=$num";
            mysqli_query($linc,$s);
        }
         
        ?>
      
    </div>


<?php
include("footer.php");
?>
    