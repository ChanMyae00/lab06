<?php
session_start();

if (isset($_SESSION['user'])) {
    include "header.inc";

    echo "<h1>Welcome, " . $_SESSION['user'] . "!</h1>";
    echo '<p>You have successfully logged in.</p>';

    include "footer.inc";
} else {
    header("Location: login.html");
    exit();
}
?>