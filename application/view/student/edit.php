<div class="container" id="register">

    <div class="box" style="margin-top:4%; margin-bottom:4%;">

        <div class="col-lg-8 col-lg-offset-2">

            <div class="panel panel-default well">

                <div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Edit Student Account</div>

                <form class="panel-body form-horizontal" style="font-size: 16px;background-color: #87CEFA"  name="student" role="form" action="<?php echo URL; ?>student/editstudent" method="POST">

                    <div class="form-group">

                        <label class="control-label col-sm-3" for="first name" >First Name:</label>

                        <div class="col-sm-3">

                            <input type="text" class="form-control  placeholder" name="firstname" id="firstname" value="<?php if (isset($student->firstName)) echo htmlspecialchars($student->firstName, ENT_QUOTES, 'UTF-8'); ?>" readonly>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-3" for="last name" >Last Name:</label>

                        <div class="col-sm-3">

                            <input type="text" class="form-control placeholder" name="lastname" id="lastname" value="<?php if (isset($student->lastName)) echo htmlspecialchars($student->lastName, ENT_QUOTES, 'UTF-8'); ?>" readonly>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-3" for="email">SFSU Email:</label>

                        <div class="col-sm-6">

                            <input type="email" class="form-control placeholder email_field" name="email" id="email" value="<?php if (isset($student->email)) echo htmlspecialchars($student->email, ENT_QUOTES, 'UTF-8'); ?>" readonly>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-3" for="password">Password:</label>

                        <div class="col-sm-6">

                            <input type="password" class="form-control placeholder password_field" name="password" id="password" placeholder="Enter password" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-3" for="password">Verify pass:</label>

                        <div class="col-sm-6">

                            <input type="password" class="form-control placeholder password_field" name="cpassword" id="cpassword" placeholder="Verify password" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-3" for="birthdate">Date of Birth:</label>

                        <div class="col-sm-4">

                            <input type="text" class="form-control placeholder" name="birthdate" value="<?php if (isset($student->birthdate)) echo htmlspecialchars($student->birthdate, ENT_QUOTES, 'UTF-8'); ?>" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-sm-3" for="phone">Phone Number:</label>

                        <div class="col-sm-4">

                            <input type="text" class="form-control placeholder" name= "phone" value="<?php if (isset($student->phone)) echo htmlspecialchars($student->phone, ENT_QUOTES, 'UTF-8'); ?>" maxlength="10" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-lg-offset-5">

                            <button type="submit" class="btn btn-success submit" style="margin-right:20%; margin-bottom:0%;" name= "submit" value="submit">Update Account</button>

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