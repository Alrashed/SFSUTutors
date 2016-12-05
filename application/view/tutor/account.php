<div class="container account-overview" id="" style="">
        
    <div class="box" style="margin-top:4%; margin-bottom:4%;">

        <div class="col-lg-8 col-lg-offset-2" style="">

            <div class="panel panel-default well">

                <div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Tutor Account Overview</div>

                <ul class="nav nav-justified nav-pills" id="account-tab" style="border-radius:0px">

                    <li class="active" style="border-radius:0px; background:#EEEEEE;"><a data-toggle="tab" href="#home" style="font-size: 18px;"><b>Account Profile</b></a></li>

                    <li id="selling-item" style="background: #EEEEEE;"><a data-toggle="tab" href="#menu1" style="font-size: 18px;"><b>Bookings</b></a></li>

                </ul>

                <div class="tab-content" style="border-radius:0px">

                    <div id="home" class="tab-pane fade in active" style="width:100%">

                        <div class="panel-body">

                            <div class="row">

                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>First Name</i></h5><h5 class="col-lg-9">: <?php if (isset($tutor[0]->firstName)) echo htmlspecialchars($tutor[0]->firstName, ENT_QUOTES, 'UTF-8'); ?></h5>

                                </div>

                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>Last Name</i></h5><h5 class="col-lg-9">: <?php if (isset($tutor[0]->lastName)) echo htmlspecialchars($tutor[0]->lastName, ENT_QUOTES, 'UTF-8'); ?></h5>

                                </div>

                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>Email</i></h5><h5 class="col-lg-9">: <?php if (isset($tutor[0]->email)) echo htmlspecialchars($tutor[0]->email, ENT_QUOTES, 'UTF-8'); ?></h5>

                                </div>

                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>Phone No.</i></h5><h5 class="col-lg-9">: <?php if (isset($tutor[0]->phone)) echo htmlspecialchars($tutor[0]->phone, ENT_QUOTES, 'UTF-8'); ?></h5>

                                </div>

                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>Major ID</i></h5><h5 class="col-lg-9">: <?php if (isset($tutor[0]->major_id)) echo htmlspecialchars($tutor[0]->major_id, ENT_QUOTES, 'UTF-8'); ?></h5>

                                </div>

                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>Major</i></h5><h5 class="col-lg-9">: <?php if (isset($tutor[0]->major)) echo htmlspecialchars($tutor[0]->major, ENT_QUOTES, 'UTF-8'); ?></h5>

                                </div>

                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>GPA</i></h5><h5 class="col-lg-9">: <?php if (isset($tutor[0]->gpa)) echo htmlspecialchars($tutor[0]->gpa , ENT_QUOTES, 'UTF-8'); ?></h5>

                                </div>

                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>About Me</i></h5><h5 class="col-lg-9" style="word-wrap: break-word; white-space: pre-line;">: <?php if (isset($tutor[0]->about)) echo htmlspecialchars($tutor[0]->about, ENT_QUOTES, 'UTF-8'); ?></h5>

                                </div>

                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>Offering</i></h5><h5 class="col-lg-9">: <?php if (isset($tutor[0]->offering)) echo htmlspecialchars($tutor[0]->offering, ENT_QUOTES, 'UTF-8'); ?></h5>

                                </div>

                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>Hourly Rate</i></h5><h5 class="col-lg-9">: <?php if (isset($tutor[0]->price)) echo "$". htmlspecialchars($tutor[0]->price, ENT_QUOTES, 'UTF-8'); ?> /h</h5>

                                </div>
                                
                                <div class="" style="padding-bottom: 6%;">

                                    <h5 class="col-lg-3 center"><i>Current images</i></h5>
                                    
                                    <img <?php if (isset($tutor[0]->photo) && $tutor[0]->photo != "") echo 'src="data:image/jpeg;base64, '.base64_encode($tutor[0]->photo).'" height="100" width="100"'; ?> class="col-lg-9 img-tutor">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div id="menu1" class="tab-pane fade" style="background-color:#B3B3B3; margin-bottom:50px">

                        <table>

                            <thead style="background: linear-gradient(grey,white,white,white,grey); font-weight: bold;height: 15px">

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Edit<b style="float:right;margin-right:25%">|</b> </td>
                                <td>Delete</td>
                            </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td id="table-image" ><img style="padding:5px; height=50, width=50;"></td>

                                    <td id="table-image" ><img style="padding:5px; height=50, width=50;"></td>

                                    <td id="table-image" ><img style="padding:5px; height=50, width=50;"></td>

                                    <td id="table-image" ><img style="padding:5px; height=50, width=50;"></td>

                                    <td id="table-image" ><img style="padding:5px; height=50, width=50;"></td>

                                    <td><a href="">EDIT</a></td>

                                     <td><a onclick="return confirm('This will permanantly delete your booking.')" href="">DELETE</a></td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>