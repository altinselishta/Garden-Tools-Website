<?php
$userId = $_GET['id'];
include_once 'userRepositoryA.php';

$userRepository = new UserRepositoryA();

$userRepository->deleteUser($userId);

header("location:dashboardA.php");
?>