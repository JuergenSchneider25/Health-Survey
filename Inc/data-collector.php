<?php
session_start();

$lastPageId = $_POST("lastPageID");

//$_SESSION($lastPageID) = $_POST;
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>



