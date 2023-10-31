<?php 




session_start();
include('userModel.php');
$con = getConnection();
// Check if the user is logged in (adjust this based on your authentication logic)
if (!isset($_SESSION["loggedin"])) {
    header('location: login.php'); // Redirect to the login page if not logged in
    exit();
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = $_SESSION["userId"];


    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];


    $con = getConnection();

    $sql = "SELECT Password FROM user WHERE ID = $user_id";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row["Password"];

        if (password_verify($old_password, $stored_password)) {
            // Old password is correct, now validate the new password
            if ($new_password === $confirm_password) {
                // Update the password in the database
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                $update_sql = "UPDATE user SET Password = '$hashed_password' WHERE ID = $user_id";
                if ($con->query($update_sql) === TRUE) {
                    echo "Password changed successfully.";
                } else {
                    echo "Error updating password: " . $con->error;
                }
            } else {
                echo "New passwords do not match.";
            }
        } else {
            echo "Incorrect old password.";
        }
    } else {
        echo "User not found.";
    }

    $con->close();
}
?>





; ?>