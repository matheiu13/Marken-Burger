<?php
session_start();
include "connection.php";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    

    if(empty($username)){
        header("Location: login.php?error=usernameinputrequired");
        exit();
    }

    else if(empty($password)){
        header("Location: login.php?error=passwordinputrequired");
        exit();
    }
    
    else if(empty($username) && empty($password))
    {
        header("Location: login.php?error=usernamepasswordinputrequired");
        exit();
    }

    else{ 
        $sql = "SELECT * FROM admin_acc WHERE username='$username' AND password='$password'"; 
        $result = mysqli_query($link, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            if($row['username']===$username && $row['password']===$password){
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                header("Location: home.php?login=successful");
            }
           

            else{
                header ("Location: login.php?login=nouserexist");
                exit();
            }
        }
        else
        {
            header ("Location: login.php?login=nouserexist");
            exit();
        }
    }

} 

