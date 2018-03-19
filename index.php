<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Marval</title>
    <link rel="icon" type="image/png" href="images/marvel-logo.png" />
    <!-- Bootstrap CSS-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CUSTOM CSS SOURCE  -->
    <link href="style.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <h1>MARVAL</h1>

    <?php require_once('partials/navbar.php');?>
    <div class="tab-content" id="nav-tabContent">
        <!-- MAKE A POST-->
        <div class="tab-pane fade show active" id="nav-make-posts" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="mk-pt-cont">
                <div class="mk-pt-txt-cont">
                    MAKE A POST
                </div>
                <div class="mk-pt-in-cont">
                    <form action="/action_page.php">
                        <div class="row">
                            <div class="col-2">
                                Topic:
                            </div>
                            <div class="col-10">
                                <input type="text" name="topic">
                            </div>
                            <br>
                            <br>
                            <div class="col-2">
                                Author:
                            </div>
                            <div class="col-10">
                                <input type="text" name="author">
                            </div>
                        </div>
                        <input id="submit" type="submit" value="Submit">
                    </form>

                </div>
            </div>
        </div>
        <!-- SEE ALL POSTS-->
        <div class="tab-pane fade" id="nav-all-posts" role="tabpanel" aria-labelledby="nav-profile-tab">all posts</div>
    </div>

    <!-- JQuery source -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- BOOTSTRAP JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- CUSTOM JS SCRIPT-->
    <script src="main.js"></script>

</body>

</html>
