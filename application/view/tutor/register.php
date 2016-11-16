<div class="container" id="register">

    <div class="box">

        <div class="col-lg-10 col-lg-offset-1" style="margin-bottom:-20%">

            <div class="panel panel-default well">

                <div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Tutor Registeration</div>

                <form class="panel-body col-lg-offset-0 form-horizontal" style="font-size: 16px;background-color: #87CEFA"  name="tutor" role="form" action="<?php echo URL; ?>tutor/registertutor" onsubmit="return validateForm();" method="POST">

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="first name" >First Name:</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control input-lg placeholder" name="firstname" id="firstname" placeholder="Enter your first name">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="last name" >Last Name:</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control input-lg placeholder" name="lastname" id="lastname" placeholder="Enter your last name">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="email">SFSU Email:</label>

                        <div class="col-sm-10">

                            <input type="email" class="form-control input-lg placeholder email_field" name="email" placeholder="Enter your SFSU email">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="password">Password:</label>

                        <div class="col-sm-10">

                            <input type="password" class="form-control input-lg placeholder password_field" name= "password" placeholder="Enter password">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="birthdate">Date of Birth:</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control input-lg" name="birthdate">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="phone">Phone Number:</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control input-lg placeholder" name= "phone" placeholder="10 digit phone No." maxlength="10">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="major">Major:</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control input-lg placeholder" name= "major" placeholder="Enter your major">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="gpa">GPA:</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control input-lg placeholder" name= "gpa" placeholder="Your current GPA">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="about">About Me:</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control input-lg placeholder" name= "about" placeholder="Something for future students to see">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="available">Availability:</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control input-lg placeholder" name= "available" placeholder="When you are available on weekly basis">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="offering">Tutoring Classes:</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control input-lg placeholder" name= "offering" placeholder="Enter the classes you'll be tutoring. Ex: CSC 340, CSC 413.">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="price">Hourly Rate:</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control input-lg placeholder" name= "price" placeholder="Ex: $20/h">

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="" style="text-align:center">

                            <div class="checkbox">

                                <label><input type="checkbox"> I agree with term and condition</label>

                            </div>

                        </div>

                    </div>

                    <div class="" style="text-align:center">

                        <a href="<?php echo URL; ?>login/index">Already registered? Click here to login.</a>

                    </div>

                    <div class="form-group">

                        <div class="col-lg-4 col-lg-offset-5">

                            <button type="submit" class="btn btn-success submit" style="margin-right:20%; margin-top:20%; margin-bottom:0%;" name= "submit" value='submit'>Sign Up</button>

                        </div>

                    </div>

                </form>

            </div>

         </div>

    </div>

</div>