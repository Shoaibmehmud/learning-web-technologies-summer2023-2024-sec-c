<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h2>Change Password</h2>
    <form action="passcheck.php" method="post">
        <label for="old_password">Old Password:</label>
        <input type="password" id="old_password" name="old_password" required><br>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br>

        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>

        <input type="submit" value="Change Password">
    </form>


</body>
</html>