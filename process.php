<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "Chan Myae Oo" && $password == "106399209") {
    $_SESSION['user'] = $username;
    header("Location: welcome.php");
    exit();
} else {
    echo 'Invalid login. <a href="login.html">Try again</a>';
}
?>