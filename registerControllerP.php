<?php
include_once 'userRepositoryP.php';
include_once 'userP.php';


if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) ||
    empty($_POST['username']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
       $role = $_POST['role'];

        $user  = new UserP(null,$name,$surname,$email,$username,$password,$role);
        $userRepository = new UserRepositoryP();

        $userRepository->insertUser($user);
    }
}
?>