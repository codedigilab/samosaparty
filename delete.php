<?php


require __DIR__ . '/database/laptop.php';


if (!isset($_POST['id'])) {
  include 'database/not_found.php';
  exit;
}

$userId = $_POST['id'];
deleteUser($userId);
header("Location: laptop.php");

?>