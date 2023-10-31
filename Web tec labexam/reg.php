<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="signupcheck.php" enctype="">
            <fieldset>
                <legend>Signup</legend>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
               
                Password: <input type="password" name="Password" value="" /> <br>
              
                Confirm Password: <input type="password" name="confirmPassword" value="" /> <br>
              
                Email: <input type="email" name="Email" value="" /> <br>
                Name: <input type="text" name="Name" value="" /> <br>
                <label for="User_type">User Type:</label>
                <input type="radio" name="User_type" value="User">
                <label for="user">User</label><br>

              <input type="radio" name="User_type" value="Admin">
             <label for="Admin">Admin</label><br>
                <input type="submit" name="signup" value="Signup" />
                <a href="login.php" value="">Sign In</a>
            </fieldset>
        </form>
</body>
</html>
