    <!-- Page Content -->
<?php 
foreach($grounds as $ground)
    {?>    
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
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

</body>

</html>
