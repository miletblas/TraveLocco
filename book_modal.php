<!-- BOOK NOW -->
    <div class="modal fade" id="book_modal<?php echo $fetch ["flight_ID"] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Book Now</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>

                <div class="modal-body ">
                    <form method="POST">
                         <div class="form-row">
                            <div class="form-group col-12 ">
                                <label>Departure Location</label>
                                <input class="form-control" type="text" value="<?php echo $aname[$fetch['departure_airport_ID']] ?>" readonly></input>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 ">
                                <label>Arrival Location</label>
                                <input class="form-control" type="text" value="<?php echo $aname[$fetch['arrival_airport_ID']] ?>" readonly></input>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12 ">
                                <label>Flight ID</label>
                                <input class="form-control" type="text" name="txtflight_ID" value="<?php echo $fetch['flight_ID'] ?>" readonly></input>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input class="form-control" type="text" name="txtbook_name" placeholder="Enter Name" required>
                            </div>
                        
                            <div class="form-group col-md-6">
                                <label>Contact Number</label>
                                <input class="form-control" type="text" name="txtbook_cp_no" placeholder="Enter Contact Number" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 ">
                                <label>Email</label>
                                <input class="form-control" type="text" name="txtbook_email" placeholder="travelocco@sample.com" required></input>
                            </div>
                        </div>
                    </div>

                        <div class="modal-footer">
                            <button type="reset" class="btn btn-warning">Reset Values</button>
                            <input class="btn btn-primary" type="submit" name="btnBook" value="Book">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    