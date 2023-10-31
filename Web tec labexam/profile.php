<?php 
include("./userModel.php");
$con = getConnection();

; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <h2>Your Profile</h2>
    <p><strong>Username:</strong> <?php echo $username; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <!-- Add more fields here as needed -->

</body>
</html>