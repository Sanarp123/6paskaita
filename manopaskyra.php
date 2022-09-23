<?php
session_start();
echo $_SESSION["vardas"];

session_unset();
session_destroy();
?>