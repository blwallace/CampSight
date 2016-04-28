 <form>
            <div class="row">
                <div class="col-md-3">
                    <table class="table table-striped">
                        <tr>
                            <th>Location</th>
                        </tr>
                        <tr>
                            <td><input type="text"></td>
                        </tr>
                    </table>    
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <tr>
                            <th>Type</th>
                        </tr>
                        <tr>
                            <td>                            
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Campground Type
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                <li><a href="#">Private</a></li>
                                <li><a href="#">Public</a></li>
                                <li><a href="#">All</a></li>
                              </ul>
                            </div></td>
                        </tr>
                    </table>    
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <tr>
                            <th>Start Date</th>
                        </tr>
                        <tr>
                            <td><input type="text" id="startdate"></td>
                        </tr>
                    </table>                  
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <tr>
                            <th>End Date</th>
                        </tr>
                        <tr>
                            <td><input type="text" id="enddate"></td>
                        </tr>
                    </table>                    
                </div>                                    
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <a href="campgrounds" class="btn btn-dark btn-lg">Search</a>
                </div>
            </div>            
        </form>