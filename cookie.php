<?php
$link=mysqli_connect("localhost",'dbuser',123,'lakshmi');
if(isset($_POST['email'],$_POST['password']))
{
    $email=mysqli_real_escape_string($link,$_POST['email']);
    $password=sha1($_POST['password']);
    $users=mysqli_query($link,"SELECT * FROM uses WHERE email='$email' AND password='$password'");
    $total=mysqli_fetch_all($users);
    if($total)
    {
        setcookie('email',$_POST['email']);
        print_r($_COOKIE['email']);
        setcookie('password',$password);
    }
}
       
?>
<html>
    <head></head>
    <body>
        <p>
            <?php
            if(isset($_COOKIE['logged_in']))            
            echo 'u are logged in';
            ?>
        </p>
        <form action='' method='post'>
            <p>
                <label for='user'>Email</label>
                <input type='email' name='email'>
            </p>
            <p>
                <label for='password'>Password</label>
                <input type='password' name='password'>
            </p>
            <p><input type='submit' value='Login'></p>
        </form>
    </body>
</html>