<?php 

    session_start();
    $connect = mysqli_connect('localhost','root','','test');


    if(isset($_POST['username']))
    {
        $uname = $_POST['username'];
        $password = md5($_POST['password']) ;

        $sql = "select * from loginform where User = '".$uname."' and Password = '".$password."' limit 1";

        $result = mysqli_query($connect,$sql);

        $num_rows = mysqli_num_rows($result);

        if($num_rows > 0)
        {
            $_SESSION['dangnhap']=$uname;
            header('Location:./index.php');
        }
        else echo("You logged fail");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login form</title>
        <link rel="stylesheet" href="../css/admincp.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="../images/login.png" alt="login" class="avatar">
                <h1>Login Here</h1>
                <form method="POST" autocomplete="off" action="#">
                    <p>User Name</p>
                    <input type="text" name="username" id="" placeholder="Enter UserName">
                    <p>User Password</p>
                    <input type="password" name="password" id="" placeholder="Enter Password"><br>
                    <input type="submit" name="submit" id="" value="Login" class="btn-login"><br>
                    <a href="#">Lost your password?</a> <br>
                    <a href="#">Don't have a account?</a>
                </form>
        </div>
    </body>
</html>