<?php
$userId = $_GET['id'];
include_once 'userRepositoryC.php';

$userRepository = new UserRepositoryC();

$userRepository->deleteUser($userId);

header("location:dashboardi.php");
?>