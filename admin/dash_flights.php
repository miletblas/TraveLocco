<?php
    // session_start();

    include 'crud_flight.php';

    $obj = new Crud;

    extract($_POST);

    if(isset($btnAdd)){
        $obj->add($txtairline, $txtplane_no, $txtdeparture_airport_id, $txtarrival_airport_id, $txtdeparture_datetime, $txtarrival_datetime, $txtseats, $txtprice);
    }
    if(isset($btnUpdate)){
        $obj->update($update_flight_ID, $update_airline, $update_plane_no, $update_departure_airport_ID, $update_arrival_airport_ID, $update_departure_datetime, $update_arrival_datetime, $update_seats, $update_price);
    }
    if(isset($btnDelete)){
		$obj->del($btnDelete);
	}

?>
    <div class="content">
        <div class="row" style="margin-top: 7%;">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header col-auto">
                        <h3 class="float-left">Manage Flight List</h3>
                    </div>
                    <div class="row mr-2">
                        <div class="col">
                            <input class="btn btn-primary" type="submit" name="btnAdd" value="Add New Flight" data-toggle="modal" data-target="#addID">
                        </div>
                        <div class="col-auto">
                            <div>
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </div>

                    <form method="POST">
                        <div class="table-responsive">
                            <table class="table" id="flights">
                                <colgroup>
                                    <col width="10%">
                                    <col width="8%">
                                    <col width="25%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="15%">
                                </colgroup>
                                <thead class="table-success">
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Date</th>
                                        <th></th>
                                        <th>Information</th>
                                        <th>Seats</th>
                                        <th>Booked</th>
                                        <th>Available</th>
                                        <th>Price</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <?php
                                    $obj->displayAll();
                                ?>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal For Add New Flight -->
    <div class="modal fade" id="addID" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Flight</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>

                <div class="modal-body ">
                    <form method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="" class="control-label">Airline</label>
                                <select name="txtairline" class="custom-select browser-default select2">
                                    <option>- Select a Airline -</option>
                                    <?php 
                                        $airline = $conn->query("SELECT * FROM airlines order by airline asc");
                                        while($row = $airline->fetch_assoc()):
                                    ?>
                                        <option value="<?php echo $row['airline_ID'] ?>" <?php echo isset($airline_ID) && $airline_ID == $row['airline_ID'] ? "selected" : '' ?>><?php echo $row['airline'] ?></option>
                                    <?php endwhile; ?>

                                </select>
                            </div>
                        
                            <div class="form-group col-md-6">
                                <label>Plane Number</label>
                                <input class="form-control" type="text" name="txtplane_no" placeholder="Plane number" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6 ">
                               <label for="">Departure Location</label>
                                <select name="txtdeparture_airport_id" class="custom-select browser-default select2">
                                    <option>- Select a Location -</option>
                                <?php
                                    $airport = $conn->query("SELECT * FROM airport order by name asc");
                                while($row = $airport->fetch_assoc()):
                                ?>
                                    <option value="<?php echo $row['airport_ID'] ?>" <?php echo isset($departure_airport_ID) && $departure_airport_ID == $row['airport_ID'] ? "selected" : '' ?>><?php echo $row['location'].", ".$row['name'] ?></option>
                                <?php endwhile; ?>
                                </select>
                            
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Arrival Location</label>
                                <select name="txtarrival_airport_id" class="custom-select browser-default select2">
                                    <option>- Select a Location -</option>
                                <?php
                                    $airport = $conn->query("SELECT * FROM airport order by name asc");
                                while($row = $airport->fetch_assoc()):
                                ?>
                                    <option value="<?php echo $row['airport_ID'] ?>" <?php echo isset($departure_airport_ID) && $departure_airport_ID == $row['airport_ID'] ? "selected" : '' ?>><?php echo $row['location'].", ".$row['name'] ?></option>
                                <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6 ">
                                <label>Departure Date/Time</label>
                                <input class="form-control" type="datetime-local" name="txtdeparture_datetime" required></input>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Arrival Date/Time</label>
                                <input class="form-control" type="datetime-local" name="txtarrival_datetime" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label>Seats</label>
                                <input class="form-control" type="number" name="txtseats" placeholder="Seats" required></input>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Price</label>
                                <input class="form-control" type="number" name="txtprice" placeholder="Price" required>
                            </div>
                        </div>
                    </div>

                        <div class="modal-footer">
                            
                            <button type="reset" class="btn btn-warning">Reset Values</button>
                            <input class="btn btn-primary" type="submit" name="btnAdd" value="Add Flight">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
<!-- Search -->
<script>
    
    $(document).ready(function(){
        $('#search').keyup(function(){
            search_table($(this).val());
        });

        function search_table(value){
            $('#flights tr').each(function(){
                var found = 'false';
                $(this).each(function(){
                    if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
                    {
                        found = 'true';
                    }
                });
                if(found == 'true')
                {
                    $(this).show();
                }
                else
                {
                    $(this).hide();
                }
            });
        }

    });

</script>
