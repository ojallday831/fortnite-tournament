<?php
    include "functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-color: #E5E7E9;
            }
        </style>
        <meta charset="UTF-8">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        
        <style> @import url("css/style.css");</style>
       
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="teams.php">Teams</a></li>
        <li><a href="bracket.php">Bracket</a></li>
        <li><a href="winners.php">Previous Winners</a></li>
        <li><a href="rules.php">Rules</a></li>
        <li><a class="active" href="signup.php">Sign up</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="highlights.php">Highlights</a></li>
        </ul>
        <br></br>
        <center>
        <form action="submitteams.php" method="post">
            Team name: <input type="text" name="team"><br>
            First player (psn name): <input type="text" name="first_player"><br>
            Second player (psn name): <input type="text" name="second_player"><br>
            <input type="submit" value="Submit">
        </form>
        </center>
        <br>
        </br>
        <center>
            Current Teams for this weeks tournament. Only the first 16 Teams will be in the tournament. First come, First serve<br>

        </center>
        <br>
        <?php
        getTeams();
        
        
        ?>
        <br>
        </br>
        <!-- <center><iframe src="https://docs.google.com/forms/d/e/1FAIpQLScyuwMdYw3WVCwFki3NW1gP86UFRjaEtjRewC-mTWFKnc6kdQ/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe></center> -->
        
    </body>
    <div class="footer">
        <center>
        <footer>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!-- Add font awesome icons -->
            <a href="facebook.php" class="fa fa-facebook"></a>
            <a href="twitter.php" class="fa fa-twitter"></a>
            <br>
            <small>&copy; Copyright 2018, Just for Fun</small>
            <br>
        </footer>
        </center>
    </div>
</html>