<?php 

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        echo "<h2>null username/password!</h2>";
    }else if($username == $password){
        setcookie('flag', 'true', time()+3000, '/');
        header('location: dashboard.php');
    }else{
        echo "invalid user!";
    }
?>