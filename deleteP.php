<?php
$userId = $_GET['id'];
include_once 'userRepositoryP.php';

$userRepository = new UserRepositoryP();

$userRepository->deleteUser($userId);

header("location:dashboardiP.php");
?>