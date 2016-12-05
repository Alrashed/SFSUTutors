<div class="container" id="register">

    <div class="box" style="margin-top:4%; margin-bottom:4%;">

        <div class="col-lg-10 col-lg-offset-1">

            <div class="panel panel-default well">

                <div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Tutor Registeration</div>

                <form class="panel-body form-horizontal" style="font-size: 16px;background-color: #87CEFA"  name="tutor" role="form" action="<?php echo URL; ?>tutor/registertutor" method="POST">

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="first name" >First Name:</label>

                        <div class="col-sm-3">

                            <input type="text" class="form-control  placeholder" name="firstname" id="firstname" placeholder="Enter your first name" required>

                        </div>

                        <label class="control-label col-sm-2" for="last name" style="margin-left: -4%;">Last Name:</label>

                        <div class="col-sm-3">

                            <input type="text" class="form-control placeholder" name="lastname" id="lastname" placeholder="Enter your last name" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="email">SFSU Email:</label>

                        <div class="col-sm-6">

                            <input type="email" class="form-control placeholder email_field" name="email" id="email" placeholder="Enter your SFSU email" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="password">Password:</label>

                        <div class="col-sm-6">

                            <input type="password" class="form-control placeholder password_field" name="password" id="password" placeholder="Enter password" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="password">Verify pass:</label>

                        <div class="col-sm-6">

                            <input type="password" class="form-control placeholder password_field" name="cpassword" id="cpassword" placeholder="Verify password" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="birthdate">Date of Birth:</label>

                        <div class="col-sm-4">

                            <input type="text" class="form-control placeholder" name="birthdate" placeholder="mm/dd/yyyy" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="phone">Phone Number:</label>

                        <div class="col-sm-4">

                            <input type="text" class="form-control placeholder" name= "phone" placeholder="10 digit phone No." maxlength="10" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="major">Major:</label>

                        <div class="col-sm-4">

                            <input type="text" class="form-control placeholder" name= "major" placeholder="Enter your major" required>

                        </div>
                        
                        <label class="control-label col-sm-2" for="major_id" style="margin-left: -5%;">Major ID:</label>

                        <div class="col-sm-2">

                            <select name="major_id" id="major_id" style="width: 140px !important; min-width: 100px; max-width: 140px; height: 34px;">
                                
                                <option value="">Select major ID</option>
                                <?php
                                    foreach ($majors as $major) {
                                        if (isset($major->mName)) {
                                            echo "<option value =" . htmlspecialchars($major->major_id, ENT_QUOTES, 'UTF-8') . ">" . htmlspecialchars($major->major_id, ENT_QUOTES, 'UTF-8') . "</option>";
                                        }
                                    }
                                ?>
                                
                            </select>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="gpa">GPA:</label>

                        <div class="col-sm-2">

                            <input type="text" class="form-control placeholder" name= "gpa" placeholder="Your current GPA" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="about">About Me:</label>

                        <div class="col-sm-8">

                            <textarea rows="7" class="form-control input-lg placeholder" name= "about" maxlength="1000" placeholder="This what students will see on your profile..." required></textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="available">Availability:</label>

                        <div class="col-sm-8">

                            <input type="text" class="form-control placeholder" name= "available" placeholder="When you are available on weekly basis. Ex. MWF 4pm to 6pm, TTh 1pm to 2pm" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="offering">Offering:</label>

                        <div class="col-sm-8">

                            <input type="text" class="form-control placeholder" name= "offering" placeholder="Enter the classes you'll be tutoring. Ex: CSC 340, CSC 413" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="price">Hourly Rate:</label>

                        <div class="col-sm-2">

                            <input type="text" class="form-control placeholder" name= "price" placeholder="Ex: 20.00" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="photo" >Personal Photo:</label>

                        <div class="col-sm-10">
                            <br>
                            <input type="file" name="photo" id="photo" class="" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="" style="text-align:center">

                            <div class="checkbox">

                                <label><input type="checkbox" required> I agree with term and condition</label>

                            </div>

                        </div>

                    </div>

                    <div class="" style="text-align:center">

                        <a href="<?php echo URL; ?>login/index"><h4>Already registered? Click here to login.</h4></a>

                    </div>

                    <div class="form-group">

                        <div class="col-lg-4 col-lg-offset-5">

                            <button type="submit" class="btn btn-success submit" style="margin-right:20%; margin-bottom:0%;" name= "submit" value="submit" onclick="validateEmail()">Sign Up</button>

                        </div>

                    </div>

                </form>

            </div>

         </div>

    </div>

</div>

<!-- Script that validates password and email -->
<script>
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("cpassword");
    function validatePassword() {
        if (password.value !== confirm_password.value) {
            confirm_password.setCustomValidity("Passwords must match!");
        } else {
            confirm_password.setCustomValidity('');
        }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

    function validateEmail() {
        var email = document.getElementById("email");
        var domain1 = /^\w+([-+.]\w+)*@mail.sfsu.edu$/; // accepts common characters before @ symbol
        var domain2 = /^\w+([-+.]\w+)*@sfsu.edu$/;
        if (email.value.match(domain1) || email.value.match(domain2)) {
            email.setCustomValidity('');
        } else {
            email.setCustomValidity("Email must be from SFSU!")
        }
        email.onchange = validateEmail;
    }
</script>