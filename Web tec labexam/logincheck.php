 <!-- <?php 

session_start();
require_once('./userModel.php');
$con = getConnection(); //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['Password'];

    if ($username == "" || $password == "") {
        echo "null Name or Password";
    } else {
      
        $query = "SELECT * FROM user WHERE username = '$username' AND Password = '$password'";
        $result = mysqli_query($con, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            $user_type = $row['User_type'];
            
            // Determine the user type and redirect accordingly
            if ($user_type === 'Admin') {
                $_SESSION['flag'] = "true"; // Set the session flag
                header("Location: adminhome.php");
            } elseif ($user_type === 'User') {
                $_SESSION['flag'] = "true"; // Set the session flag
                header("Location: userhome.php");
            
            } else {
                echo "Invalid user type.";
            }
        } else {
            echo "Invalid username or password.";
        }
    }
} else {
    echo "Invalid request method.";
}

 ?>