<?php

if ($_POST) {
    require 'db_key.php';
    $conn = connect_db();
    if (isset($_POST['register'])) {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
//sanitize your input
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);
        $passwordHashed = mysqli_real_escape_string($conn, $passwordHashed);
//check for existing record
        $sql = "Select username From users Where username = '$username' or email='$email'";
        $sql = $conn->query($sql) or die($conn->error);
        $sql = $sql->fetch_assoc();
        if ($sql) {
            header('location: /login.php');
            exit();
        } else {
            //Hust insert Plain password for now. Will Encrypt later
            $sql = "Insert Into users (username, email, password,first_name,last_name) VALUES ('$username', '$email', '$password','$first_name','$last_name')";
            $sql = $conn->query($sql) or die($conn->error);
            if ($sql) {
                echo "Registration succesful. You may <a href= '/login.php'>login</a> now";
//header('location: index.php');
            }
//$sql = $sql->fetch_assoc();
//echo $username.$email.$password;
        }
    } else if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
        $sql = "Select * From users Where email = '$email'";
        $sql = $conn->query($sql) or die($conn->error);
        if ($sql) {

            $sql = $sql->fetch_assoc();
            //just compare passwords kienyeji will compare with hash verifier in future

            echo (strtoupper( $sql["password"])."<br>");
            var_dump($email);
            if (strtoupper($password)==strtoupper( $sql["password"])) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $sql["username"];
                $_SESSION["first_name"]=$sql["first_name"];
                $_SESSION["last_name"]=$sql["last_name"];
                header('location: /profile');
            }
        } else {
            header('location: index.php');
            exit();
        }
    }
}
//header('location: index.php');
?>