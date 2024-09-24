<?php

session_name('grocery_admin');
session_start();
session_destroy();
header("Location: http://localhost/grocery/admin/pages/authentication/login");

?>