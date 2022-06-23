<?php
include 'config.php';
$flag = true;
if (isset($_POST['submit'])) {
    $username = $_POST['emailid'];
    $pass = $_POST['password'];

    if (empty(trim($username))) {
        header("location:../login.php?email-empty");
        $flag = false;
        exit();
    }
    if (empty(trim($pass))) {
        header("location:../login.php?password-empty");
        $flag = false;
        exit();
    }
    if ($flag === true) {
        $sql = "SELECT user_email FROM user_login WHERE user_email = :email";
        $stmt = $config->prepare($sql);
        $stmt->bindParam(':email', $username);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $sql = "SELECT user_pass FROM user_login WHERE user_pass = :pass";
            $stmt = $config->prepare($sql);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                session_start();
                $_SESSION['email'] = $username;
                header('location:../login.php?success');
            } else {
                header("location:../login.php?invalid-password");
            }
        } else {
            header("location:../login.php?invalid-email");
        }
    } else {
        header("location:../Login.php?un-authorize-user");
    }
}
