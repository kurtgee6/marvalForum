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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    <!-- Resources -->
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
</head>

<body>
    <h1 style="margin: 4px 8px; font-size:42pt; color:#e23636; text-shadow: 2px 2px 2px #fff;">MARVAL</h1>

    <?php require_once('partials/navbar.php');?>
    <div class="tab-content" id="nav-tabContent">
        <!-- MAKE A POST TAB-->
        <div class="tab-pane fade show active" id="nav-make-posts" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="mk-pt-cont">
                <div class="mk-pt-txt-cont">
                    CREATE A POST
                </div>
                <div class="mk-pt-in-cont">
                    <form action="partials/process.php" method="post">
                        <div class="row">
                            <div class="col-4">
                                Topic:
                            </div>
                            <div class="col-8">
                                <input type="text" name="topic" required>
                            </div>
                            <br>
                            <br>
                            <div class="col-4">
                                Author:
                            </div>
                            <div class="col-8">
                                <input type="text" name="author" required>
                            </div>
                            <br>
                            <br>
                            <div class="col-4">
                                Write your theory:
                            </div>
                            <div class="col-8">
                                <textarea class="form-control" name="theory" rows="4" required></textarea>
                            </div>
                        </div>
                        <input id="submit" type="submit" value="Submit">
                    </form>

                </div>
            </div>
        </div>
        <!-- SEE ALL POSTS TAB-->
        <div class="tab-pane fade" id="nav-all-posts" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="container" style="margin-top: 10px;">
                <table class="table table-hover">
                    <thead>
                        <tr class="hd">
                            <th scope="col">DATE</th>
                            <th scope="col">TOPIC</th>
                            <th scope="col">AUTHOR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $connection = mysqli_connect('localhost', 'root', 'root', 'marvalForum');        
                        $selectAll = "SELECT * FROM users ORDER BY timestamp DESC LIMIT 7;";

                        $r = mysqli_query($connection, $selectAll);
                            foreach($r as $k => $v){
                            
                                $createdDate = date('F j, Y', strtotime($v['timestamp']));

                                echo '<tr>
                                    <th scope="row">'.$createdDate.'</th>
                                    <td><a href="posts.php?id='.$v['id'].'">'.$v['topic'].'</a></td>
                                    <td>'.$v['author'].'</td>
                                    </tr>';

                            };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- SEE ALL POSTS TAB-->
        <div class="tab-pane fade" id="nav-videos" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="container" style="margin-top: 10px; background-color:rgba( 0, 0, 0, 0.7); border-radius: 15px;">
                <div id="chartdiv"></div>
            </div>
        </div>
    </div>

    <?php require_once('partials/news.php');?>

    <!-- JQuery source -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- BOOTSTRAP JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- CUSTOM JS SCRIPT-->
    <script src="main.js"></script>

</body>

</html>
