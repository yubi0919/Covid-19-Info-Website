<?php
    session_start();
    $username = "";
    $email = "";
    $errors = array();

    $con = mysqli_connect('localhost', 'root', '', 'cmt322');

    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($con, $_POST['user']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password1 = mysqli_real_escape_string($con, $_POST['pass']);
        $password2 = mysqli_real_escape_string($con, $_POST['pass2']);
        if (empty($username)){
            array_push($errors, "Username is required");
        }
        if (empty($email)){
            array_push($errors, "Email is required");
        }
        if (empty($password1)){
            array_push($errors, "Password is required");
        }
        if($password1 != $password2){
            array_push($errors, "Passwords do not match");
        }
        if(count($errors) == 0){
            $password = md5($password1);     //encrypt password b4 store into database
            $sql = "INSERT INTO admin (username, email, password) 
                        VALUES ('$username', '$email', '$password')";
            
            mysqli_query($con, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in!";
            header('location: admin.php');
        }

    }

    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($con, $_POST['user']);
        $password = mysqli_real_escape_string($con, $_POST['pass']);

        if (empty($username)){
            array_push($errors, "Username is required");
        }
        if (empty($password)){
            array_push($errors, "Password is required");
        }
        if(count($errors) == 0){
            $password = md5($password);     //encrypt password b4 store into database
            $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in!";
                header('location: admin.php');
            }
            else{
                array_push($errors, "wrong username/password combination");
                header("localtion: login.php");
            }
        }
    }

    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.html');
    }
    
    
    
?>