
<?php

define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/grocery");
define("BASE_URL", "/grocery");

date_default_timezone_set('Asia/Kolkata');

$conn = mysqli_connect("localhost","root", "","Picknmix");

function pathOf($path)
{
    return BASE_DIR . "/" . $path;
}

function urlOf($path)
{
    return BASE_URL . '/' . $path;
}
