<?php 
include_once 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){
        $conn = $this->connection;

        $id = $useri->getId();
        $name = $useri->getName();
        $surname = $useri->getSurname();
        $email = $useri->getEmail();
        $username = $useri->getUsername();
        $password = $useri->getPassword();
        $role = $useri->get.Role();

        $sql = "INSERT INTO user (id,name,surname,email,username,password,role) VALUES (?,?,?,?,?,?)";


        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$surname,$email,$username,$password,$role]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";
        
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

    function updateUser($id,$name,$surname,$email,$username,$password){
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