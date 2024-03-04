<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['mobilenumber'];
    $password = $_POST['password'];

    // Check if any required field is empty
    if (empty($name) || empty($username) || empty($email) || empty($number) || empty($password)) {
        // Redirect to a page if any required field is empty
        header("Location: ../Signup-Failed/Please fill in all required fields.php");
        exit();
    } else {
        $con = mysqli_connect("localhost", "mathanmithun", "password", "projectphp");

        // Check for duplicate entry
        $check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' OR mobilenumber = '$number'";
        $check_result = mysqli_query($con, $check_query);

        while ($row = mysqli_fetch_assoc($check_result)) {
            // Check specifically for duplicate username
            if ($row['username'] == $username) {
                // Redirect to usernameorpasswordexist.php if the username is already taken
                header("Location: ../Signup-Failed/usernameorpasswordexist.php");
                exit();
            }

            // Check specifically for duplicate email
            if ($row['email'] == $email) {
                // Redirect to emailalreadyexist.php if the email is already taken
                header("Location: ../Signup-Failed/emailalreadyexist.php");
                exit();
            }

            // Check specifically for duplicate phone number
            if ($row['mobilenumber'] == $number) {
                // Redirect to numberalreadyexist.php if the phone number is already taken
                header("Location: ../Signup-Failed/numberalreadyexist.php");
                exit();
            }
        }

        // Insert the new record into the database
        $insert_query = "INSERT INTO users (name, username, email, mobilenumber, password) VALUES ('$name', '$username', '$email', '$number', '$password')";
        $insert_result = mysqli_query($con, $insert_query);

        if ($insert_result) {
            header("Location: ../Sign-Up/registration_success.php?error=Please Login Your Account");
            exit();
        } else {
            echo "Submission Failed";
        }
    }
}
?>
