    <!-- Page Content -->
   
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Campsite 1</a>
                    <a href="#" class="list-group-item">Campsite 2</a>
                    <a href="#" class="list-group-item">Campsite 3</a>
                    <a href="#" class="list-group-item">Campsite 1</a>
                    <a href="#" class="list-group-item">Campsite 2</a>
                    <a href="#" class="list-group-item">Campsite 3</a>
                    <a href="#" class="list-group-item">Campsite 1</a>
                    <a href="#" class="list-group-item">Campsite 2</a>
                    <a href="#" class="list-group-item">Campsite 3</a>                                        
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <div class="caption-full">
                        <h4 class="pull-right">$24.99</h4>
                        <h4><a href="#">Name: <?= $name ?></a>
                        </h4>
                        <p>Ammenities: <?= $ammenities ?></p>
                        <form action='/campgrounds/reserve' type='POST'>
                            <table class="table table-striped">
                                <tr>
                                    <th>Start Date</th>
                                </tr>
                                <tr>
                                    <td><input type="text" id="startdate"></td>
                                </tr>
                            </table>                  
                            <table class="table table-striped">
                                <tr>
                                    <th>End Date</th>
                                </tr>
                                <tr>
                                    <td><input type="text" id="enddate"></td>
                                </tr>
                            </table>                    
                            <button type="submit" class="btn btn-success">Book Site</button>
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

