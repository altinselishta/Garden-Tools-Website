<?php
$userId = $_GET['id'];
include_once 'userRepositoryA.php';

$userRepository = new UserRepositoryA();

$user = $userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document2</title>
</head>
<body>
    <h3>Edit User2</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$user['id']?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$user['name']?>"> <br> <br>
        <input type="text" name="surname"  value="<?=$user['surname']?>"> <br> <br>
        <input type="text" name="email"  value="<?=$user['email']?>"> <br> <br>
        <input type="text" name="username"  value="<?=$user['username']?>"> <br> <br>
        <input type="text" name="password"  value="<?=$user['password']?>"> <br> <br>
        <input type="text" name="role"  value="<?=$user['role']?>"> <br> <br>


        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php
if (isset($_POST['editBtn'])) {
    $id = $user['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    $userRepository->updateUser($id, $name, $surname, $email, $username, $password,$role);
    header("location:dashboardA.php");
}
?>