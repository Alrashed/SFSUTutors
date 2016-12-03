<div class="container" id="login">
    
    <div class="box" style="margin-top:4%; margin-bottom:4%;">

        <div class="col-lg-6 col-lg-offset-3">

            <div class="panel panel-default">

                <div class="panel-heading" style="text-align:center; margin-top:2%; margin-bottom:0%; font-weight:800; font-size:20px">Member Login</div>

                <ul class="nav nav-justified nav-pills" id="account-tab" style="border-radius:0px">

                    <li class="active" style="border-radius:0px; background:#EEEEEE;">

                        <a data-toggle="pill" href="#home" style="font-size: 18px;"><b>STUDENT</b></a>

                    </li>

                    <li id="selling-item" style="background: #EEEEEE;">

                        <a data-toggle="pill" href="#menu1" style="font-size: 18px;"><b>TUTOR</b></a>

                    </li>

                </ul>

                <div class="tab-content" style="border-radius:0px">

                    <div id="home" class="tab-pane fade in active well" style="width:100%">

                        <form class="panel-body col-lg-offset-0" style="font-size: 16px;background-color: #87CEFA"  role="form" action="<?php echo URL; ?>login/loginstudent" method="GET">

                            <div class="form-group">

                                <label class="" for="email">SFSU Email:</label>

                                <div>

                                    <input type="email" name="email" required class="form-control input-lg username_field"  style="font-size:16px" placeholder="Enter SFSU email" required>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="" for="password">Password:</label>

                                <div>

                                    <input type="password" name="password" required class="form-control input-lg password_field"  style="font-size:16px" placeholder="Enter password" required>

                                </div>

                            </div>

                            <div class="form-group">

                                <?php
                                    if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
                                        echo "<p class="center"><font color='red'>You entered an invalid SF State Email or Password.</font></p>"; }
                                ?>

                                <div class="col-lg-4 col-lg-offset-4">

                                    <button type="submit" name="loginstudent" class="btn btn-success login" >Login</button>

                                </div>

                            </div>

                        </form>

                    </div>

                    <div id="menu1" class="tab-pane fade in well" style="width:100%">

                        <form class="panel-body col-lg-offset-0" style="font-size: 16px;background-color: #87CEFA"  role="form" action="<?php echo URL; ?>login/logintutor" method="GET">

                            <div class="form-group">

                                <label class="" for="email">SFSU Email:</label>

                                <div>

                                    <input type="email" name="email" required class="form-control input-lg username_field"  style="font-size:16px" placeholder="Enter SFSU email" required>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="" for="password">Password:</label>

                                <div>

                                    <input type="password" name="password" required class="form-control input-lg password_field"  style="font-size:16px" placeholder="Enter password" required>

                                </div>

                            </div>

                            <div class="form-group">

                                <?php
                                    if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
                                        echo "<p class="center"><font color='red'>You entered an invalid SF State Email or Password.</font></p>"; }
                                ?>

                                <div class="col-lg-4 col-lg-offset-4">

                                    <button type="submit" name="logintutor" class="btn btn-success login" >Login</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

         </div>

    </div>

</div>