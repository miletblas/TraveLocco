
<!-- ******************************* -->
        <!-- Modal for Update -->
<!-- ******************************* -->
<div class="modal fade" id="update_modal<?php echo $fetch ['book_ID']?>" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
                <div class="modal-body">
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label>ID</label>
                            <input type="text" name="update_book_ID" value="<?php echo $fetch['book_ID']?>" class="form-control" readonly/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label>Name</label>
                            <input type="text" name="update_book_name" value="<?php echo $fetch['book_name']?>" class="form-control" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Cellphone Number</label>
                            <input type="text" name="update_book_cp_no" value="<?php echo $fetch['book_cp_no']?>" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label>Email</label>
                            <input type="text" name="update_book_email" value="<?php echo $fetch['book_email']?>" class="form-control" required/>
                        </div>
                        <!-- <div class="form-group col-md-6">
                            <label>price</label>
                            <input type="text" name="update_book_price" value="<?php echo $fetch ['book_price']?>" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Destination</label>
                            <input type="text" name="update_book_destination" value="<?php echo $fetch ['book_destination']?>" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="datetime-local" name="update_book_datetime" value="<?php echo $fetch ['book_datetime']?>" class="form-control" required/>
                        </div> -->
                        <!-- <div class="form-group">
                            <label>Time</label>
                            <input type="time" name="update_book_time" value="<?php echo $fetch ['book_time']?>" class="form-control" required/>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="btnUpdate" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>