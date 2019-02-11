<?php
include("header.php");
?>

<div>
    <?php
       include("connect.php"); 
       if(empty($_POST)){
           //empty проверяет переменную на пустоту
    ?>

    <form method="POST">
        Логин<br>
        <input type="text" name="login"><br>
        Пароль<br>
        <input type="password" name="pass"><br>
        <input type="submit" name="avtoriz">
    </form>

    <?php
       }
       else{
           if (isset($_POST['avtoriz'])){
               $log=$_POST['login'];
               $pass=$_POST['pass'];
               $que="select * from user where login='$log'";
               $result = mysqli_query($linc,$que);//!!!!
               if (mysqli_num_rows($result)>0){//!!!!!
                   $mas=mysqli_fetch_array($result);//!!!!
                   if ($mas['pass']==$pass){
                       echo "ВЫ ВОШЛИ В СИСТЕМУ!!!";
                   }
                   else{
                    echo "ОШИБКА АВТОРИЗАЦИИ";
                    echo "<br><a href='avtor.php'>Еще раз авторизоваться</a>";
                    echo "<br><a href='reg.php'>Зарегистрироваться</a>";
                   }
               }
               else{
                echo "ОШИБКА АВТОРИЗАЦИИ";
                echo "<br><a href='avtor.php'>Еще раз авторизоваться</a>";
                echo "<br><a href='reg.php'>Зарегистрироваться</a>";
               }
           }

       }
    ?>
</div>

<?php
include("footer.php");
?>
