<?php session_start(); 
//making the connection
$connection = mysqli_connect('localhost', 'root', 'root', 'marvalForum');
$id = $_GET['id'];
$query = "SELECT * FROM `users` WHERE `id`='" . $id . "'";
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)) {
    $Topic = $row['topic'];
    $Author = $row['author'];
    $Theory = $row['theory'];
    $Time = $row['timestamp'];
    $createdDate = date('F j, Y', strtotime($Time));
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Marval</title>
    <link rel="icon" type="image/png" href="images/marvel-logo.png" />
    <!-- Bootstrap CSS-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CUSTOM CSS SOURCE  -->
    <link href="post.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

</head>

<body>
    <h1 style="margin: 4px 8px; font-size:42pt; color:#e23636; text-shadow: 2px 2px 2px #fff;">
        <a href="index.php">MARVAL</a>
    </h1>
    <hr>
    <div class="container fm-ct">
        <div class="row">
            <div class="col-2 pt">
                Topic:
            </div>
            <div class="col-10 pt-tx-s">
                <?php echo strtoupper($Topic);?>
            </div>
            <div class="col-2 pt">
                Author:
            </div>
            <div class="col-10 pt-tx">
                <?php echo $Author;?>
            </div>
            <div class="col-2 pt">
                Date:
            </div>
            <div class="col-10 pt-tx">
                <?php echo $createdDate;?>
            </div>
            <div class="col-2 pt">
                Theory:
            </div>
            <div class="col-10 pt">
                <?php echo $Theory;?>
            </div>
        </div>
    </div>
    <hr>
    <div class="container fm-ct">
        <div class="ad-cm-ct">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Add your own comment</label>
                    <textarea class="form-control" name="m_th" rows="6" required></textarea>
                    <button class="ad-bt-cm">POST <i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- JQuery source -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- BOOTSTRAP JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- CUSTOM JS SCRIPT-->
    <script src="main.js"></script>

</body>

</html>
