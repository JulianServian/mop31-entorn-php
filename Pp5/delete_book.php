<?php

session_start();
require_once "functions.php";

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
    header("Location: home.php");
    exit();
}

if (isset($_GET["id"])) {

    eliminarLibro($_GET["id"]);

}

header("Location: home.php");
exit();

?>