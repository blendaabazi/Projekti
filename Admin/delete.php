<?php
$userId = $_GET['id'];
include_once '../user/userRepository.php';

$userRepository = new UserRepository();

$userRepository->deleteUser($userId);

header("location:../admin/dashboard.php");
?>