<?php 
    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from user where Name='{$username}' and Password='{$password}'";
      
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;  
        }
        }
      


        function getAllUser(){
            $con = getConnection(); 
            $sql = "select * from user";
    
            $result = mysqli_query($con, $sql);
            $user = [];
            while($row = mysqli_fetch_assoc($result)){
                array_push($user, $row);
            }
            return $user;
        }

    ?>