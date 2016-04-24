    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
               
            </div>
            <div class="col-md-6">
               <h3><a href="campadmin/add_campground">Add Campground</a></h3>
               <h3>Edit Campground</h3>
                <form action='campadmin/update_campground' method='post'>
                    <input type="text" placeholder="Campground Name" name = 'name' class="form-control">
                    <input type="text" placeholder="Campground ID" name = 'id' class="form-control">
                    <input type="text" placeholder="State" name = 'state' class="form-control">
                    <input type="text" placeholder="Ammenities" name = 'ammenities' class="form-control">
                    <button type="submit" class="btn btn-success">Edit Campground</button>
                </form>
            </div>
            <div class="col-md-3">
                
            </div>            

        </div>

    </div>
    <!-- /.container -->