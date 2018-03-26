<?php session_start();

$topic = $_POST['topic'];
$author = $_POST['author'];
$theory = $_POST['theory'];

// connecnting to the database with 4 params
$connection = mysqli_connect('localhost', 'root', 'root', 'marvalForum');

$qry = "INSERT INTO users (author, topic, theory) VALUES ('$author', '$topic', '$theory');";

mysqli_query($connection, $qry);

mysqli_close($connection);   

header('Location:../index.php');

?>
