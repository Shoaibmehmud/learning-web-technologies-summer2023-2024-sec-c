<?php 

include_once("userModel.php");
$con = getConnection();
$user = getAllUser();
; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="1" cellspacing="0">
   
      
<tr><th>Users</th></tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>User Type</th>
        </tr>
        
        <tr>
        <?php for($i=0; $i<count($user); $i++){ ?>
            <td> <?=$user[$i]['ID']?></td>
            <td><?=$user[$i]['username']?></td>
            <td> <?=$user[$i]['password']?></td>
            <td><?=$user[$i]['User_type']?></td>
           
        </tr>
      


<?php } ?>
<tr><td><a href="adminhome.php">Go Home</td> </tr>
</body>
</html>