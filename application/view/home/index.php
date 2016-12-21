<!--First Grid-->
<div id="homehead" class="home container-fluid static-page library">
    
    <h1>TUTORING SERVICES MADE SIMPLE FOR SFSU STUDENTS!</h1>
    
    <hr style="width: 75%;">
                
    <h3 style="color: #f0ffff; text-shadow: 2px 2px 2px rgba(0, 0, 0, 10);">We Connect Students With Tutors</h3>
                
    <br><br>

    <p>
        <a href="<?php echo URL; ?>search/results" class="btn btn-primary btn-lg">Find a Tutor Now</a>
    </p>

</div>

<!--Second Grid-->
<div class="steps container-fluid bg-1" id="students-steps">

    <h2 class="section-header">How it works for students</h2>

    <div class="container">

        <div class="row">

            <div class="col-sm-4 text-center">

                <img src="<?php echo URL . '/img/browse.png' ?>" class="circle-icon">

                <h3>Step 1</h3>

                <p>Browse through SFSU tutors with expertise specifically in SFSU classes. Filter by major, and class code.</p>

            </div>

            <div class="col-sm-4 text-center">

                <img src="<?php echo URL . '/img/register.png' ?>" class="circle-icon">

                <h3>Step 2</h3>

                <p>Login in to SFSU Tutors in order to message and book tutors directly.</p>

            </div>

            <div class="col-sm-4 text-center">

                <img src="<?php echo URL . '/img/thumbs-up.png' ?>" class="circle-icon">

                <h3>Step 3</h3>

                <p>Find the time and date that work best for you on the tutor’s schedule, then book your tutor with a credit card. You’ll receive a confirmation of your session via email confirming that you are booked.</p>

            </div>

        </div>
        <br>
<!--
        </?php if (isset($_SESSION['loggedInStudent_id'])) : ?>
        
        <p style="text-align: center;">
            <a href="<?php echo URL; ?>studentAccount/account" class="btn btn-primary btn-lg">Sign Up as Student Now</a>
        </p>
        
        </?php elseif (isset($_SESSION['loggedInTutor_id'])) : ?>
        
        <p style="text-align: center;">
            <a href="<?php echo URL; ?>tutorAccount/account" class="btn btn-primary btn-lg">Sign Up as Student Now</a>
        </p>
        
        </?php else : ?>
-->
        
        <p style="text-align: center;">
            <a href="<?php echo URL; ?>student/register" class="btn btn-primary btn-lg">Sign Up as Student Now</a>
        </p>

    </div>

</div>

<!--Third Grid-->
<div class="steps container-fluid bg-1" id="students-steps" style="margin-top: -1.8%; margin-bottom: -30px;">

    <h2 class="section-header">How it works for Tutors</h2>

    <div class="container" >

        <div class="row">

            <div class="col-sm-4 text-center">

                <img src="<?php echo URL . '/img/signup.png' ?>" class="circle-icon">

                <h3>Step 1</h3>

                <p>You create your tutor profile (free!) and set your own hourly rate. Signing up is quick as it gets with your SFSU email.</p>

            </div>

            <div class="col-sm-4 text-center">

                <img src="<?php echo URL . '/img/book.png' ?>" class="circle-icon">

                <h3>Step 2</h3>

                <p>Students browse, message, schedule, and pay for online or in-person tutoring.</p>

            </div>

            <div class="col-sm-4 text-center">

                <img src="<?php echo URL . '/img/getpaid.png' ?>" class="circle-icon">

                <h3>Step 3</h3>

                <p>48 hours after the tutoring session, SFSU Tutors transfers the payment directly to your bank or PayPal account (minus a 10% fee).</p>

            </div>

        </div>

    </div>
    <br>
<!--
    </?php if (isset($_SESSION['loggedInStudent_id'])) : ?>
        
    <p style="text-align: center;">
        <a href="<?php echo URL; ?>studentAccount/account" class="btn btn-primary btn-lg">Become a Tutor Now</a>
    </p>

    </?php elseif (isset($_SESSION['loggedInTutor_id'])) : ?>

    <p style="text-align: center;">
        <a href="<?php echo URL; ?>tutorAccount/account" class="btn btn-primary btn-lg">Become a Tutor Now</a>
    </p>

    </?php else : ?>
-->
    
    <p style="text-align: center;">
        <a href="<?php echo URL; ?>tutor/register" class="btn btn-primary btn-lg">Become a Tutor Now</a>
    </p>

</div>