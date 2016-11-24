<div class="container" style="width:80%;">
            
    <div class="row" style=" margin-top:4%; margin-bottom:4%;">

        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

            <div class="row" style="margin-top: 8.5%; margin-right: 0.5%;">

                <div class="panel-heading clearfix center" style="background:#d0d0d0">

                    <span class="panel-title"><b>Advanced Search</b></span>

                </div>

                <div class="panel-body" style="padding: 15px 20px; background-color:#f7f7f7;">

                    <div class="center">

                        <h5 style="font-size:14px">Filter by Major:</h5>

                        <form action="<?php echo URL; ?>search/filter" method="GET" class="nav-form">

                            <select name='filterby' class="filter-select" onchange='' id="filter_menu" style="width: 200px !important; min-width: 200px; max-width: 200px; height: 35px;">

                                <option value="all">All Majors</option>
                                <option value="computer-science">Computer Science</option>
                                <option value="engineering">Engineering</option>
                                <option value="biology">Biology</option>

                            </select>
<!--
                            <noscript><input type='submit' name='submit_filter_major' value="Submit" id="searchButton" /></noscript>
-->

                        </form>

                    </div>

                    <br><br>

                    <div class="center">

                        <h5 style="font-size:14px">Filter by Class Code:</h5>

                        <form class="form-inline" action="<?php echo URL; ?>search/filter" method="GET">

                            <div class="form-group float-left">

                                <input class="form-control" type="text" name="class" size="13" value="" placeholder="class code" required/>

                            </div>


                            <div class="form-group float-left">   
                                <input type="submit" class="btn btn-info" name="submit_filter_class" value="Submit">

                            </div>

                        </form>

                    </div>

                    <br><br>

                    <div class="center">

                        <h5 style="font-size:14px">Filter by Price Range:</h5>

                        <form class="form-inline" action="<?php echo URL; ?>search/filter" method="GET">

                            <div class="form-group float-left">

                                <input class="form-control" type="text" name="minprice" size="3" value="" placeholder="Min Price" required/>

                            </div>

                            <div class="form-group float-left">   
                                <input class="form-control" type="text" name="maxprice" size="3" value="" placeholder="Max Price" required/>

                            </div>

                            <div class="form-group float-left">   
                                <input type="submit" class="btn btn-info" name="submit_filter_price_product" value="Submit">

                            </div>

                        </form>

                    </div>

                    <br><br><br>

                    <div class="center">

                        <form action="<?php echo URL; ?>search/filter" method="GET">

                            <input type="submit" class="btn btn-info " name="reset_filter" value="Reset All Filters">

                        </form>

                    </div>

                    <br>

                </div>

            </div>

        </div>

        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">

            <div class="row" style="margin-top: 2.6%; margin-left: 0.5%;">

                <div class="panel-heading clearfix" style="background:#d0d0d0">

                    <span class="panel-title pull-left"><b>Showing 1-10 of <?php echo count($tutors) ?> tutors that meet your criteria.</b></span>

                    <div>

                        <form action="<?php echo URL; ?>search/sort" method="GET" class="nav-form pull-right">

                            <span class='panel-title pull-left'><b>Sort by &nbsp</b></span>

                            <select name='sortby' class="sort-select" onchange='' id="sort_menu">

                                <option value="rating">rating</option>
                                <option value="price-low-high">price low to high</option>
                                <option value="price-high-low">price high to low</option>

                            </select>
<!--
                            <noscript><input type='submit' name='submit_sort' value="Submit" id="searchButton" /></noscript>
-->

                        </form>

                    </div>

                </div>

                <div class="panel-body" style="padding: 15px 30px; background-color:#f7f7f7;">

                    <div class="row center">

                    <?php foreach ($tutors as $tutor) { ?>
                        
                        <div class="col-sm-12" style="border:5px solid #DEDEDE; padding: 15px 10px; margin-top: 15px;">

                            <div class="col-sm-3 col-lg-2 panel-body" style="float:left">

                                <a href="<?php echo URL. 'tutor/view/' . htmlspecialchars($tutor->tutor_id, ENT_QUOTES, 'UTF-8'); ?>" >
                                    <img src="<?php echo URL . '/img/demo-image.png' ?>">
                                </a>

                            </div>

                            <div class="col-sm-9 col-lg-10">

                                <div class="row">

                                    <div class="col-md-9">

                                        <div class="panel-body">

                                            <h3 class="tutor-name" style="float: left; margin:0px; text-transform: uppercase;"><b>
                                                <?php if (isset($tutor->firstName)) {
                                                        echo htmlspecialchars($tutor->firstName, ENT_QUOTES, 'UTF-8');
                                                        echo "&nbsp". htmlspecialchars($tutor->lastName, ENT_QUOTES, 'UTF-8'); }
                                                ?></b>
                                            </h3>
                                            
                                            <br><br>
                                            
                                            <h5 class="tutor-major" style="float: left; margin:0px"><b>Major:&nbsp</b>
                                                <?php if (isset($tutor->major))
                                                    echo htmlspecialchars($tutor->major, ENT_QUOTES, 'UTF-8');
                                                ?>
                                            </h5>
                                            
                                            <br>
                                            
                                            <h5 class="tutor-offering" style="float: left;"><b>Offering:&nbsp</b>
                                                <?php if (isset($tutor->offering))
                                                    echo htmlspecialchars($tutor->offering, ENT_QUOTES, 'UTF-8');
                                                ?>
                                            </h5>

                                        </div>

                                    </div>

                                    <div class="col-md-3">

                                        <div class="">

                                            <h3 class="tutor-price" style=" margin:0px;"><b>
                                                <?php if (isset($tutor->price))
                                                    echo "$". htmlspecialchars($tutor->price, ENT_QUOTES, 'UTF-8');
                                                ?> /h</b>
                                            </h3>
                                            <br>

                                            <div class="tutor-rating" style="margin:0px;">

                                                <label>★★★★★</label>

                                            </div>

                                            <div class="">

                                                <form action="<?php echo URL . 'tutor/view/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>">

                                                    <button class="view-tutor-button"><b>VIEW TUTOR</b></button>

                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    
                    <?php } ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>