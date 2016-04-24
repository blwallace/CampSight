<?php 
foreach($grounds as $ground)
    {?>
    <div class="row">
        <div class="col-md-3">
            <div class="thumbnnail-image">
                <img class="img-responsive" src="/assets/img/beach.jpg" alt="">
            </div>
        </div>    
        <div class="col-md-9">
            <div class="thumbnail">
                <div class="caption-full">
                    <h4 class="pull-right">$24.99</h4>
                    <h4><a href="campgrounds/view/<?= $ground['id']?>"><?= $ground['name'] ?></a></h4>
                    <p>Ammenities:<?= $ground['ammenities'] ?></p>
                    <p>State:<?= $ground['state'] ?></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
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
    </div>
<?php } ?>
