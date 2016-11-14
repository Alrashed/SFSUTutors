<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    
    <meta charset="utf-8">
    
    <title>SFSU TUTORS</title>
    
    <meta name="description" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
        
	</script>
    
</head>
    
<body>
    <!--Nav Bar-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        
        <div class="container-fluid">  

            <div class="navbar-header">

                <a class="navbar-brand" href="<?php echo URL; ?>home/index">SFSU TUTORS</a>

            </div>

            <ul class="nav navbar-nav">

                <li><a href="<?php echo URL; ?>search/results">Browse Tutors</a></li>

                <li><a href="<?php echo URL; ?>tutor/register">Become a Tutor</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

              <li><a href="<?php echo URL; ?>student/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

              <li><a href="<?php echo URL; ?>login/index"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

            </ul>

        </div>

    </nav>
    