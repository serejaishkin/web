
<?php
//подключаем внешние файлы с помощью функции
// include
include("header.php");
?>

    <div class="content">
        <h1>Стартовая страница нашего сайта</h1>
        <img src="http://krasivie-kartinki.ru/images/multik_339.gif" 
        class="img-fluid">

        <?php
        if (empty($_POST)){
        ?>
        <form method='POST'>
            <input type="text" name="num"><br>
            <input type="submit" name="del">
        </form>
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
    