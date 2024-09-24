<?php

session_name('grocery_admin');
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: http://localhost/grocery/admin/pages/authentication/login");

    exit();
}

?>