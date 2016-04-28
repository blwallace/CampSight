    <!-- Page Content -->
   
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Browse Sites</p>
                <div class="list-group">
<?php
                    foreach($sites as $site){
?>                      
                        <button class="list-group-item" ref="<?= $site['id'] ?>">Campsite <?= $site['name'] ?></button>
<?php                    }
?>                                     
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <div class="caption-full">
                        <h4 class="pull-right">$24.99</h4>
                        <h4>Campground: <?= $campground['name'] ?></h4>
                        <h4 id="site-name-selected"> Site: <?= $sites[0]['name'] ?></h4>
                        <p>Ammenities: <?= $campground['ammenities'] ?></p>
                        <div>
                            <div class="site-booked">Mon 5/4</div>
                            <div class="site-available">Tues 5/5</div>
                            <div class="site-booked">Tues 5/5</div>
                            <div class="site-booked">Tues 5/5</div>
                            <div class="site-booked">Sat 12/12</div>
                            <div class="site-available">Sat 12/12</div>
                            <div class="site-available">Sat 12/12</div>
                            <div class="site-available">Sat 12/12</div>
                            <div class="site-booked">Sat 12/12</div>
                        </div>
                        <form action='/sites/book' method='post'>
                            <table class="table table-striped">
                                <tr>
                                    <th>Start Date</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="startdate" id="startdate"></td>
                                </tr>
                            </table>                  
                            <table class="table table-striped">
                                <tr>
                                    <th>End Date</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="enddate" id="enddate"></td>
                                </tr>
                            </table> 
                            <input type="hidden" name="site-id-selected" id="site-id-selected" >                   
                            <button type="submit" class="btn btn-success" id="submit-date">Book Site</button>
                        </form>                        
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>                                         
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <img class="img-responsive" src="/assets/img/lake.jpg" alt="">
                <img class="img-responsive" src="/assets/img/beach.jpg" alt="">
            </div>            

        </div>

    </div>

