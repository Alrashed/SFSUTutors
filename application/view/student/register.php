<div class="container" id="register">

    <div class="box">

        <div class="col-lg-4 col-lg-offset-4" style="margin-top:1%">

            <div class="panel panel-default well">

                <div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Student Registeration</div>

                <form class="panel-body col-lg-offset-0 " style="font-size: 16px;background-color: #87CEFA"  name="student" role="form" action="<?php echo URL; ?>student/registerstudent" onsubmit="return validateForm();" method="POST">

                    <div class="form-group">

                        <label class="" for="first name" >First Name:</label>

                        <div class="">

                            <input type="text" class="form-control input-lg placeholder" name="firstname" id="firstname" placeholder="Enter your first name">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="" for="last name" >Last Name:</label>

                        <div class="">

                            <input type="text" class="form-control input-lg placeholder" name="lastname" id="lastname" placeholder="Enter your last name">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="" for="email">SFSU Email:</label>

                        <div class="">

                            <input type="email" class="form-control input-lg placeholder email_field" name="email" placeholder="Enter your SFSU email here">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="" for="password">Password:</label>

                        <div class=""> 

                            <input type="password" class="form-control input-lg placeholder password_field" name= "password" placeholder="Enter password">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="" for="birthdate">Date of Birth:</label>

                        <div class=""> 

                            <input type="date" class="form-control input-lg" name="birthdate">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="" for="phone">Phone Number:</label>

                        <div class=""> 

                            <input type="text" class="form-control input-lg placeholder" name= "phone" placeholder="Enter your phone No." maxlength="10">

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

                        <a href="">Already registered? Click here to login.</a>

                    </div>

                    <div class="form-group">

                        <div class="col-lg-4 col-lg-offset-4">

                            <button type="submit" class="btn btn-success submit" style="margin-right:20%; margin-top:20%; margin-bottom:0%;" name= "submit" value='submit'>Sign Up</button>

                        </div>

                    </div>

                </form>

            </div>

         </div>

    </div>

</div>