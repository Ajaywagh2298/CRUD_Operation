<?php
include "../Database/DBConnect.php" ;
session_destroy();
// or...
unset($_SESSION['id']);

header('Location: ../index.php');
?>
