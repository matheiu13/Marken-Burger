<?php
include "connect.php";
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
    else{
        $sql = "SELECT * FROM accounts WHERE email='$username' AND pass='$password'";
        $result = mysqli_query($link, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['email']===$username && $row['pass']===$password){
                echo "Login successful";
                exit();
            }
        }
        
        
    }

} 

