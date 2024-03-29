<?php
include_once 'databaseConnectionC.php';

class UserRepositoryC {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnectionC();
        $this->connection = $conn->startConnection();
    }

    function insertUser($user) {
        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $role = $user->getRole();

        $sql = "INSERT INTO user (id, name, surname, email, username, password, role) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $name, $surname, $email, $username, $password, $role]);

        echo "<script> alert('User has been inserted successfully!'); </script>";
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$surname,$email,$username,$password,$role){
         $conn = $this->connection;

         $sql = "UPDATE user SET name=?, surname=?, email=?, username=?, password=?, role=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$surname,$email,$username,$password,$role,$id]);

         echo "<script>alert('update was successful'); </script>";
    }

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
    }
}
?>