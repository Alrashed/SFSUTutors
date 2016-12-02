<div class="container" style="width: 85%;">
            
    <div class="row" style="margin-top: 6%; margin-bottom: 4%;">

        <div class="col-sm-8" style="border:5px solid #DEDEDE; margin-top: 15px; padding: 15px 10px; background-color:#f7f7f7;">

            <form role="form"  action="<?php echo URL. 'booking/newbooking/'. htmlspecialchars($tutor->tutor_id, ENT_QUOTES, 'UTF-8'); ?>" method="POST" enctype="multipart/form-data">

                <div class="panel-heading clearfix center" style="background:#d0d0d0; margin: -16px -15px 0 -15px;">

                    <h3 style="text-transform: uppercase;"><b>APPOINTMENT BOOKING WITH 
                        <?php if (isset($tutorPage->firstName))
                                echo htmlspecialchars($tutorPage->firstName, ENT_QUOTES, 'UTF-8');
                        ?></b>
                    </h3>

                </div>

                <div class="col-sm-12" style="border:5px solid #333; background-color: #333; border-radius: 10px; margin-top: 3%; margin-bottom: 2%; width: 100%;">

                    <h4 style="color: white;">STEP 1: SESSION INFORMATION</h4>

                </div>

                <div>

                    <div class="col-lg-offset-1">

                        <div class="form-group row">

                            <label for="class" class="col-xs-2 col-form-label">Class</label>

                            <div class="col-xs-3">

                                <input class="form-control" type="text" name="class" id="class" placeholder="Ex. CSC 413">

                            </div>

                        </div>

                        <div class="form-group row">

                            <label for="date" class="col-xs-2 col-form-label">Date</label>

                            <div class="col-xs-3">

                                <input class="form-control" type="date" name="date" id="date">

                            </div>

                        </div>

                        <div class="form-group row">

                            <label for="time" class="col-xs-2 col-form-label">Time</label>

                            <div class="col-xs-3">

                                <input class="form-control" type="time" name="time" id="time">

                            </div>

                        </div>

                        <div class="form-group row">

                            <label for="length" class="col-xs-2 col-form-label">Length</label>

                            <div class="col-xs-2" id="length">

                                <select class="calculate" name="length" class="form-control">

                                    <option value="" hour="">Choose length</option>
                                    <option value="1 hour" hour="1">1 hour</option>
                                    <option value="2 hours" hour="2">2 hours</option>
                                    <option value="3 hours" hour="3">3 hours</option>
                                    <option value="4 hours" hour="4">4 hours</option>

                                </select>

                            </div>

                            <h3 class="col-xs-3" style="float: right; ">
                                <b>TOTAL: $<span id="totalprice">
                                    <?php if (isset($tutorPage->price))
                                            echo htmlspecialchars($tutorPage->price, ENT_QUOTES, 'UTF-8');
                                    ?></span></b>
                            </h3>

                            <input type="hidden" name="total" id="total">
                                        
                            <script>
                                $(document).ready(function() {
                                    var price = document.getElementById("totalprice").innerHTML;
                                    $('.calculate').change(function() {
                                        var hour = 0;
                                        var totalprice = Number(price);
                                        $('.calculate').find('option:selected').each(function() {
                                            if($(this).attr('hour')) {
                                                hour = Number($(this).attr('hour'));
                                                totalprice *= hour;
                                            }
                                        });
                                        $('#totalprice').text(totalprice.toFixed(2));
                                        $('#total').val(totalprice.toFixed(2));
                                    });
                                });
                            </script>

                        </div>

                    </div>

                </div>

                <div class="col-sm-12" style="border:5px solid #333; background-color: #333; border-radius: 10px; margin-top: 2%; margin-bottom: 2%;">

                    <h4 style="color: white;">STEP 2: BILLING AND PAYMENT INFORMATION</h4>

                </div>

                <div>

                    <h3 style="margin-left: 4%;">Billing Address:</h3>

                    <div class="col-lg-offset-1">

                        <div class="form-group row">

                            <label for="" class="col-xs-2 col-form-label">First Name</label>

                            <div class="col-xs-3">

                                <input class="form-control" type="text" value="" id="">

                            </div>

                        </div>

                        <div class="form-group row">

                            <label for="" class="col-xs-2 col-form-label">Last Name</label>

                            <div class="col-xs-3">

                                <input class="form-control" type="search" value="" id="">

                            </div>

                        </div>

                        <div class="form-group row">

                            <label for="" class="col-xs-2 col-form-label">Address</label>

                            <div class="col-xs-4">

                                <input class="form-control" type="email" value="" id="">

                            </div>

                        </div>

                        <div class="form-group row">

                            <label for="" class="col-xs-2 col-form-label">City</label>

                            <div class="col-xs-4">

                                <input class="form-control" type="url" value="" id="">

                            </div>

                        </div>

                        <div class="form-group row">

                            <label for="" class="col-xs-2 col-form-label">State</label>

                            <div class="col-xs-1">

                                <input class="form-control" type="" value="" id="">

                            </div>

                        </div>

                        <div class="form-group row">

                            <label for="" class="col-xs-2 col-form-label">Zip Code</label>

                            <div class="col-xs-2">

                                <input class="form-control" type="" value="" id="">

                            </div>

                        </div>

                    </div>

                </div>

                <div>

                    <h3 style="margin-left: 4%;">Credit Card:</h3>

                    <div class="col-lg-offset-1">

                        <div class="form-group row">

                            <label for="" class="col-xs-2 col-form-label">Credit Card Number</label>

                            <div class="col-xs-5">

                                <input class="form-control" type="number" value="" id="">

                            </div>

                        </div>  

                        <div class="form-group row">

                            <label for="" class="col-xs-2 col-form-label">Expiration Date</label>

                            <div class="col-xs-5">

                                <input class="form-control" type="month" value="" id="">

                            </div>

                        </div>

                        <div class="form-group row">

                            <label for="" class="col-xs-2 col-form-label">Security Code</label>

                            <div class="col-xs-2">

                                <input class="form-control" type="number" value="" id="">

                            </div>

                        </div>

                    </div>

                </div>

                <div class="center">

                    <button type="submit" class="view-tutor-button" name="submit" value="submit" id="submit"><b>CONFIRM BOOKING</b></button>

                </div>

            </form>

        </div>

        <div class="col-sm-4">

            <div class="row" style="margin-right: 0.5%; margin-left: 0.5%;">

                <div class="col-sm-12 center" style="border:5px solid #DEDEDE; margin-top: 15px; padding: 15px 30px; background-color:#f7f7f7;">

                    <div class="col-sm-12">

                        <h4 style=" width: 100%;"><b>AVAILABILITY</b></h4>
                        <br>
                        <p style="word-wrap: break-word; white-space: pre-line; float: left; text-align: left; margin-bottom: 20px;"><b>
                            <?php if (isset($tutorPage->firstName))
                                    echo htmlspecialchars($tutorPage->firstName, ENT_QUOTES, 'UTF-8');
                            ?> is available on:</b>
                            <?php if (isset($tutorPage->available))
                                    echo htmlspecialchars($tutorPage->available, ENT_QUOTES, 'UTF-8');
                            ?>
                        </p>

                    </div>

                </div>

                <div class="col-sm-12 center" style="border:5px solid #DEDEDE; margin-top: 15px; padding: 15px 30px; background-color:#f7f7f7;">

                    <div class="col-sm-12">

                        <h4 style=" width: 100%; text-transform: uppercase;"><b>
                            <?php if (isset($tutorPage->firstName))
                                    echo htmlspecialchars($tutorPage->firstName, ENT_QUOTES, 'UTF-8');
                            ?>'S SCHEDULE</b>
                        </h4>
                        <br>
                        <div class="row">

                            <div class="col-sm-12">

                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Length</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>12/01/2016</td>
                                        <td>4:00 PM</td>
                                        <td>2 hours</td>
                                      </tr>
                                      <tr>
                                        <td>12/13/2016</td>
                                        <td>12:00 PM</td>
                                        <td>1 hour</td>
                                      </tr>
                                      <tr>
                                        <td>12/19/2016</td>
                                        <td>2:00 PM</td>
                                        <td>1 hour</td>
                                      </tr>
                                    </tbody>
                                  </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>