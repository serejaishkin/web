<?php
include('header.php');
include("connect.php"); 
?>
<div>
<?php
    if (empty($_POST)){
?>
    <form method='POST'>
        Логин<br>
        <input type="text" name="login"><br>
        Пароль<br>
        <input type="password" name="pass"><br>
        Подтвердите пароль<br>
        <input type="password" name="pass2"><br>
        <input type="submit" name="reg">
    </form>
<?php
    }
    else{
        if (isset($_POST['reg'])){
            $log=$_POST['login'];
            $pass=$_POST['pass'];
            $pass2=$_POST['pass2'];
            $que="select * from user where login='$log'";
            $result = mysqli_query($linc,$que);
            if(mysqli_num_rows($result)>0){
                echo "ЛОГИН ЗАНЯТ!!!";
                echo "<a href='reg.php' class='btn btn-info'>Регистрация</a>";
            }
            else{
                if ($pass==$pass2){
                    $s="insert into user(id, login, pass) values('','$log','$pass')";
                    mysqli_query($linc,$s);
                    echo "Регистрация прошла успешно";
                }
                else{
                    echo "Пароли не совпадают";
                    echo "<a href='reg.php' class='btn btn-info'>Регистрация</a>";
                }
            }
        }
    }
?>
</div>

<?php
include('footer.php');
?>