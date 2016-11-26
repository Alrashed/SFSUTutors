<div class="container" style="wdith: 80%;">

    <div class="row" style="margin-top: 6%; margin-bottom: 4%;">

        <div class="col-sm-8">

            <div class="row" style="margin-right: 0.5%; margin-left: 0.5%; ">

                <div class="col-sm-12 center" style="border:5px solid #DEDEDE; margin-top: 15px; padding: 15px 10px; background-color:#f7f7f7;">

                    <div class="col-sm-3 col-lg-2 panel-body" style="float:left">

                        <a href="">
                            <img src="/img/demo-image.png">
                        </a>

                    </div>

                    <div class="col-sm-9 col-lg-10">

                        <div class="row">

                            <div class="col-md-9 panel-body">

                                <h3 class="tutor-name" style="float: left; margin:0px; text-transform: uppercase;"><b>
                                    <?php if (isset($tutorPage->firstName)) {
                                            echo htmlspecialchars($tutorPage->firstName, ENT_QUOTES, 'UTF-8');
                                            echo "&nbsp". htmlspecialchars($tutorPage->lastName, ENT_QUOTES, 'UTF-8'); }
                                    ?></b>
                                </h3>

                                <br><br>

                                <h4 class="tutor-major" style="float: left; margin:0px; padding-top: 10px;"><b>Major:&nbsp</b>
                                    <?php if (isset($tutorPage->major))
                                            echo htmlspecialchars($tutorPage->major, ENT_QUOTES, 'UTF-8');
                                    ?>
                                </h4>

                            </div>

                            <div class="col-md-3 panel-body">

                                <h3 class="tutor-price" style=" margin:0px;"><b>
                                    <?php if (isset($tutorPage->price))
                                            echo "$". htmlspecialchars($tutorPage->price, ENT_QUOTES, 'UTF-8');
                                    ?> /h</b>
                                </h3>

                                <br>

                                <div class="tutor-rating" style="margin:0px;">

                                    <label>★★★★★</label>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-12" style="padding-top: 20px;">

                        <h4 style="text-align: left; width: 100%;"><b>ABOUT ME</b></h4>

                        <p style="word-wrap: break-word; white-space: pre-line; float: left; text-align: left;">
                            <?php if (isset($tutorPage->about))
                                    echo htmlspecialchars($tutorPage->about, ENT_QUOTES, 'UTF-8');
                            ?>
                        </p>

                    </div>

                    <div class="col-sm-12" style="margin-top: 30px;">

                        <h4 style="text-align: left; width: 100%;"><b>CLASSES OFFERED</b></h4>

                        <p style="word-wrap: break-word; white-space: pre-line; float: left; text-align: left;">
                            <?php if (isset($tutorPage->offering))
                                    echo htmlspecialchars($tutorPage->offering, ENT_QUOTES, 'UTF-8');
                            ?>
                        </p>

                    </div>

                </div>

                <div class="col-sm-12" style="border:5px solid #DEDEDE; margin-top: 15px; padding: 15px 10px; background-color:#f7f7f7;">

                    <div class="col-sm-12 reviews">

                        <h4 style="text-align: left; width: 100%; padding: 5px 0;"><b>REVIEWS</b></h4>

                        <ul class="reviews-list" style="list-style-type: none; padding: 0; margin: 0;">

                            <li class="row" style="border-top: 1px solid #DEDEDE; padding: 15px 0; position: relative;">

                                <div class="col-xs-8 col-sm-12 col-md-8" style="">

                                    <h5 style="text-align: left; width: 100%;     font-size: 16px;"><b>Student Name</b></h5>

                                    <p style="word-wrap: break-word; white-space: pre-line; float: left; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                </div>

                                <div class="col-xs-4 col-sm-12 col-md-4" style="">

                                    <div class="tutor-rating" style="margin-right: 5px; float: right;">

                                        <h5 class="center">Rating: 5/5</h5>
                                        <label>★★★★★</label>

                                    </div>

                                </div>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-sm-4">

            <div class="row" style="margin-right: 0.5%; margin-left: 0.5%;">

                <div class="col-sm-12 center" style="border:5px solid #DEDEDE; margin-top: 15px; padding: 15px 30px; background-color:#f7f7f7;">

                    <div class="col-sm-12">

                        <h4 style=" width: 100%;"><b>AVAILABILITY</b></h4>
                        <br>
                        <p style="word-wrap: break-word; white-space: pre-line; float: left; text-align: left; margin-bottom: 20px;"><b>I am available on:</b>
                            <?php if (isset($tutorPage->available))
                                    echo htmlspecialchars($tutorPage->available, ENT_QUOTES, 'UTF-8');
                            ?></p>

                        <div class="" style="">

                            <form action="">

                                <button class="view-tutor-button"><b>BOOK NOW</b></button>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="col-sm-12 center" style="border:5px solid #DEDEDE; margin-top: 15px; padding: 15px 30px; background-color:#f7f7f7;">

                    <div class="col-sm-12">

                        <h4 style=" width: 100%;"><b>MESSAGE 
                            <?php if (isset($tutorPage->firstName)) {
                                    echo htmlspecialchars($tutorPage->firstName, ENT_QUOTES, 'UTF-8'); }
                            ?></b>
                        </h4>
                        <br>
                        <div class="row">

                            <div class="col-sm-12">

                                <textarea placeholder="Enter message..." style="width: 100%; border: 1px solid #d9d9d9; height: 150px; padding: 10px; margin-bottom: 10px; resize: none;"></textarea>

                                <button class="view-tutor-button"><b>SEND MESSAGE</b></button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>