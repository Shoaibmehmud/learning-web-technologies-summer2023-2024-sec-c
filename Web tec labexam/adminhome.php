<?php 
session_start();
include("./userModel.php");

// Establish a database connection
$con = getConnection();

// Check if the user is logged in (you should have user authentication logic)
if ($_SESSION["flag"]) {
    // Retrieve the username from the database based on the user's session information
    $userId = $_SESSION["ID"];
    $sql = "SELECT username FROM user WHERE ID = $userId";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row["username"];
    }
}


; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php if ($_SESSION["flag"]) : ?>
        <h2>Welcome, <?php echo $username; ?></h2>
       >
    <?php else : ?>
        <?php endif; ?>
    <center>
    <h1>Hello</h1>
    <a href="profile.php">Profile</a>
    <a href="passchange.php"></a>
    <a href="viewuser.php">View Users</a>
    <a href="logout.php"></a>
</center>
</body>
</html>