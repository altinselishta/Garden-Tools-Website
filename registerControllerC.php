<?php
include_once 'userRepositoryC.php';
include_once 'UserC.php';


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

        $user  = new UserC(null,$name,$surname,$email,$username,$password,$role);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }
}
?>