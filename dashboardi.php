<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboardi</title>
</head>
<body>
    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>SURNAME</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>
                 <th>Role</th>
                 <th>Edit</th>
                 <th>Delete</th>
             </tr>

             <?php 
             include_once 'userRepositoryC.php';

             $userRepository = new UserRepositoryC();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[id]</td>
                     <td>$user[name]</td>
                     <td>$user[surname] </td>
                     <td>$user[email] </td>
                     <td>$user[username] </td>
                     <td>$user[password] </td>
                     <td>$user[role] </td>
                     <td><a href='editC.php?id=$user[id]'>Edit</a> </td>
                     <td><a href='deleteC.php?id=$user[id]'>Delete</a></td>
                </tr>
                ";
             }
             ?>
    </table>
</body>
</html>