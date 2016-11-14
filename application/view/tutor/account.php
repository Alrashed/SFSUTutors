<div class="container" id="account-overview" style="margin-bottom: 50px;">
        
        <div class="box">
            
            <div class="col-lg-8 col-lg-offset-2" style="margin-top:2%;" >
                
                <div class="panel panel-default well">
                
                    <div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Student Account Overview</div>

                    <ul class="nav nav-justified nav-pills" id="account-tab" style="border-radius:0px">

                        <li class="active" style="border-radius:0px; background:#EEEEEE;"><a data-toggle="tab" href="#home" >Account Profile</a></li>

                        <li id="selling-item" style="background: #EEEEEE;"><a data-toggle="tab" href="#menu1">Bookings</a></li>

                    </ul>

                    <div class="tab-content" style="border-radius:0px">

                        <div id="home" class="tab-pane fade in active" style="width:100%">

                            <div class="panel-body">

                                <h5 class="col-lg-3 col-lg-offset-1"><i>First Name   </i></h5><h5 class="float-left">: <?php if (isset($tutor[0]->firstName)) echo htmlspecialchars($tutor[0]->firstName, ENT_QUOTES, 'UTF-8'); ?></h5>
                                
                                </br></br></br>
                    
                                <h5 class="col-lg-3 col-lg-offset-1  float-left"><i>Last Name     </i></h5><h5 class="float-left">: <?php if (isset($tutor[0]->lastName)) echo htmlspecialchars($tutor[0]->lastName, ENT_QUOTES, 'UTF-8'); ?></h5>
                    
                                </br></br></br>
    
                                <h5 class="col-lg-3 col-lg-offset-1 float-left"><i>Email </i></h5><h5>: <?php if (isset($tutor[0]->email)) echo htmlspecialchars($tutor[0]->email, ENT_QUOTES, 'UTF-8'); ?></h5>
                                
                                </br></br></br>
                                
                                <h5 class="col-lg-3 col-lg-offset-1  float-left"><i>Phone No.     </i></h5><h5 class="float-left">: <?php if (isset($tutor[0]->phone)) echo htmlspecialchars($tutor[0]->phone, ENT_QUOTES, 'UTF-8'); ?></h5>

                                </br></br></br>
                                
                                <h5 class="col-lg-3 col-lg-offset-1 float-left"><i>Major </i></h5><h5>: <?php if (isset($tutor[0]->major)) echo htmlspecialchars($tutor[0]->major, ENT_QUOTES, 'UTF-8'); ?></h5>
                                
                                </br></br></br>

                                <h5 class="col-lg-3 col-lg-offset-1 float-left"><i>GPA </i></h5><h5>: <?php if (isset($tutor[0]->gpa)) echo htmlspecialchars($tutor[0]->gpa , ENT_QUOTES, 'UTF-8'); ?></h5>
                                
                                </br></br></br>

                                <h5 class="col-lg-3 col-lg-offset-1 float-left"><i>About Me </i></h5><h5>: <?php if (isset($tutor[0]->about)) echo htmlspecialchars($tutor[0]->about, ENT_QUOTES, 'UTF-8'); ?></h5>
                                
                                </br></br></br>

                                <h5 class="col-lg-3 col-lg-offset-1 float-left"><i>Offering </i></h5><h5>: <?php if (isset($tutor[0]->offering)) echo htmlspecialchars($tutor[0]->offering, ENT_QUOTES, 'UTF-8'); ?></h5>
                                
                                </br></br></br>
                                
                                <h5 class="col-lg-3 col-lg-offset-1 float-left"><i>Hourly Rate </i></h5><h5>: <?php if (isset($tutor[0]->price)) echo htmlspecialchars($tutor[0]->price, ENT_QUOTES, 'UTF-8'); ?></h5>
                                
                                </br></br></br>
                                
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