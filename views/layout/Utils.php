<?php
if ($_POST) {
    require 'db_key.php';
    $conn = connect_db();
    if (isset($_POST['register'])) {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
//sanitize your input
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);
        $passwordHashed = mysqli_real_escape_string($conn, $passwordHashed);
//check for existing record
        $sql = "Select username From users Where username = '$username'";
        $sql = $conn->query($sql) or die($conn->error);;
        $sql = $sql->fetch_assoc();
        if ($sql) {
            header('location: login.php');
            exit();
        } else {
            $sql = "Insert Into users (username, email, password) VALUES ('$username', '$email', '$passwordHashed')";
            $sql = $conn->query($sql);
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
            echo ($sql["password"]."<br>");
            echo ($passwordHashed);
            if (password_verify($password, $sql['password'])) {
                session_start();
                $_SESSION['email'] = $email;
                echo 'You have successfully logged-in';
                header('location: account.php');
            }
        } else {
            header('location: index.php');
            exit();
        }
    }
} else {
    header('location: index.php');
    exit();
}
//header('location: index.php');
?>