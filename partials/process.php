<?php session_start();

$topic = $_POST['topic'];
$author = $_POST['author'];

// connecnting to the database with 4 params
$connection = mysqli_connect('localhost', 'root', 'root', 'marvalForum');

$qry = "INSERT INTO users (author, topic) VALUES ('$author', '$topic');";

mysqli_query($connection, $qry);
    
$selectAll = "SELECT * FROM users;";
$r = mysqli_query($connection, $selectAll);
        
mysqli_close($connection);   

header('Location:../submitForm.php');

?>
