<!-- ******************************* -->
        <!-- Modal for Update -->
<!-- ******************************* -->
<div class="modal fade" id="update_modal<?php echo $fetch ["flight_ID"]?>" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Flight</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body ">
                <?php
                    // echo '<pre>';
                    // echo var_dump($fetch);
                    // echo '</pre>'; 
                ?>
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label>ID</label>
                            <input type="text" name="update_flight_ID" value="<?php echo $fetch['flight_ID']?>" class="form-control" readonly/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="control-label">Airline</label>
                            <select name="update_airline" class="custom-select browser-default select2">
                            <option value="<?php echo $row['airline'] ?>"></option>
                                <?php 
                                    $airline = $conn->query("SELECT * FROM airlines order by airline asc");
                                    while($row = $airline->fetch_assoc()):
                                ?>
                                    <option value="<?php echo $row['airline_ID'] ?>" <?php echo ($row['airline_ID'] == $fetch['airline_ID']) ? "selected" : '' ?>>
                                        <?php echo $row['airline'] ?>
                                            
                                    </option>
                                <?php endwhile; ?>

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Plane Number</label>
                            <input class="form-control" type="text" name="update_plane_no" placeholder="Plane Number" value="<?php echo $fetch['plane_no']?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6 ">
                           <label for="">Departure Location</label>
                            <select name="update_departure_airport_ID" class="custom-select browser-default select2">
                            <option value="<?php echo $row['name'].", ".$row['location'] ?>"></option>

                            <?php
                                $airport = $conn->query("SELECT * FROM airport order by name asc");
                                while($row = $airport->fetch_assoc()):
                            ?>
                                <option value="<?php echo $row['airport_ID'] ?>" <?php echo ($row['airport_ID'] == $fetch['departure_airport_ID']) ? "selected" : '' ?>>
                                    <?php echo $row['name'].", ".$row['location'] ?></option>
                            <?php endwhile; ?>

                            </select>
                        
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Arrival Location</label>
                            <select name="update_arrival_airport_ID" class="custom-select browser-default select2">

                            <?php
                                $airport = $conn->query("SELECT * FROM airport order by name asc");
                                while($row = $airport->fetch_assoc()):
                            ?>
                                <option value="<?php echo $row['airport_ID'] ?>" <?php echo ($row['airport_ID'] == $fetch['arrival_airport_ID']) ? "selected" : '' ?>>
                                    <?php echo $row['name'].", ".$row['location'] ?></option>
                            <?php endwhile; ?>                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6 ">
                            <label>Departure Date/Time</label>
                            <input class="form-control" type="datetime-local" name="update_departure_datetime" value="<?php echo $fetch['departure_datetime']?>" required></input>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Arrival Date/Time</label>
                            <input class="form-control" type="datetime-local" name="update_arrival_datetime" value="<?php echo $fetch['arrival_datetime']?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label>Seats</label>
                            <input class="form-control" type="number" name="update_seats" value="<?php echo $fetch['seats']?>" required></input>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Price</label>
                            <input class="form-control" type="number" name="update_price" value="<?php echo $fetch['price']?>" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit"name="btnUpdate" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>