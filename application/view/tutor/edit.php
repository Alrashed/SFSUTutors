<div class="container" id="register">

    <div class="box" style="margin-top:4%; margin-bottom:4%;">

        <div class="col-lg-10 col-lg-offset-1">

            <div class="panel panel-default well">

                <div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Edit Tutor Account</div>

                <form class="panel-body form-horizontal" style="font-size: 16px;background-color: #87CEFA"  name="tutor" role="form" action="<?php echo URL; ?>tutor/edittutor" method="POST">

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="first name" >First Name:</label>

                        <div class="col-sm-3">

                            <input type="text" class="form-control  placeholder" name="firstname" id="firstname" value="<?php if (isset($tutor->firstName)) echo htmlspecialchars($tutor->firstName, ENT_QUOTES, 'UTF-8'); ?>" readonly>

                        </div>

                        <label class="control-label col-sm-2" for="last name" style="margin-left: -4%;">Last Name:</label>

                        <div class="col-sm-3">

                            <input type="text" class="form-control placeholder" name="lastname" id="lastname" value="<?php if (isset($tutor->lastName)) echo htmlspecialchars($tutor->lastName, ENT_QUOTES, 'UTF-8'); ?>" readonly>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="email">SFSU Email:</label>

                        <div class="col-sm-6">

                            <input type="email" class="form-control placeholder email_field" name="email" id="email" value="<?php if (isset($tutor->email)) echo htmlspecialchars($tutor->email, ENT_QUOTES, 'UTF-8'); ?>" readonly>

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

                            <input type="text" class="form-control placeholder" name="birthdate" value="<?php if (isset($tutor->birthdate)) echo htmlspecialchars($tutor->birthdate, ENT_QUOTES, 'UTF-8'); ?>" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="phone">Phone Number:</label>

                        <div class="col-sm-4">

                            <input type="text" class="form-control placeholder" name= "phone" value="<?php if (isset($tutor->phone)) echo htmlspecialchars($tutor->phone, ENT_QUOTES, 'UTF-8'); ?>" maxlength="10" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="major">Major:</label>

                        <div class="col-sm-4">

                            <input type="text" class="form-control placeholder" name= "major" value="<?php if (isset($tutor->major)) echo htmlspecialchars($tutor->major, ENT_QUOTES, 'UTF-8'); ?>" readonly>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="gpa">GPA:</label>

                        <div class="col-sm-2">

                            <input type="text" class="form-control placeholder" name= "gpa" value="<?php if (isset($tutor->gpa)) echo htmlspecialchars($tutor->gpa, ENT_QUOTES, 'UTF-8'); ?>" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="about">About Me:</label>

                        <div class="col-sm-8">

                            <textarea rows="7" class="form-control input-lg placeholder" name= "about" maxlength="1000" value="<?php if (isset($tutor->about)) echo htmlspecialchars($tutor->about, ENT_QUOTES, 'UTF-8'); ?>" required></textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="available">Availability:</label>

                        <div class="col-sm-8">

                            <input type="text" class="form-control placeholder" name= "available" value="<?php if (isset($tutor->available)) echo htmlspecialchars($tutor->available, ENT_QUOTES, 'UTF-8'); ?>" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="offering">Offering:</label>

                        <div class="col-sm-8">

                            <input type="text" class="form-control placeholder" name= "offering" value="<?php if (isset($tutor->offering)) echo htmlspecialchars($tutor->offering, ENT_QUOTES, 'UTF-8'); ?>" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="price">Hourly Rate:</label>

                        <div class="col-sm-2">

                            <input type="text" class="form-control placeholder" name= "price" value="<?php if (isset($tutor->price)) echo htmlspecialchars($tutor->price, ENT_QUOTES, 'UTF-8'); ?>" required>

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

                        <div class="col-lg-4 col-lg-offset-5">

                            <button type="submit" class="btn btn-success submit" style="margin-right:20%; margin-bottom:0%;" name= "submit" value="submit">Edit Account</button>

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
</script>