<?php
session_start();

unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["address"]);
unset($_SESSION["phone"]);

header("location:signin.php");
?>