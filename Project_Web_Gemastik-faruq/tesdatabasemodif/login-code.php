<?php
session_start();
require_once "dbcon.php";

if (isset($_POST['loginBtn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $errors = [];

    if ($email == '' || $password == '') {
        array_push($errors, "All fields are required");
    }

    if ($email != '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Enter valid email address");
    }

    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                $_SESSION['loggedInStatus'] = true;
                $_SESSION['username'] = $user['name'];
                $_SESSION['email'] = $user['email'];

                header('Location: index.php');
                exit();
            } else {
                array_push($errors, "Invalid email or password");
            }
        } else {
            array_push($errors, "Something went wrong. Please try again");
        }
    }

    if (count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        header('Location: login.php');
        exit();
    }
}
?>
