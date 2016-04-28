

<div class="row">
    <div class="col-md-3">
    </div>    
    <div class="col-md-6">
        <h3>View Active Reservations</h3>
    </div>
    <div class="col-md-3">
    </div>          
</div>
<?php 
foreach($reservations as $reservation)
    {?>
    <div class="row">
        <div class="col-md-3">
        </div>    
        <div class="col-md-6">
            <div class="thumbnail">
                <div class="caption-full">
                    <h4>Campground: <a href="campgrounds/view/<?= $reservation['id']?>"><?= $reservation['campground'] ?></a></h4>
                    <h4>Campsite: <?= $reservation['name'] ?></a></h4>
                    <h4>Start Date: <?= $reservation['start_date']?></h4>
                    <h4>End Date: <?= $reservation['end_date']?></h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
        </div>          
    </div>
<?php } ?>
