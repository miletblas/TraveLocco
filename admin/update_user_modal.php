
<!-- *******************************
        Modal for Update
******************************* -->
<div class="modal fade" id="update_modal<?php echo $fetch ['user_ID']?>" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Accounts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
                <div class="modal-body ">
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group col-6 ">
                            <label>ID</label>
                            <input type="text" name="update_user_ID" value="<?php echo $fetch ['user_ID']?>" class="form-control" readonly/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" name="update_user_name" value="<?php echo $fetch ['user_name']?>" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="update_user_cp_no" value="<?php echo $fetch ['user_cp_no']?>" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6 ">
                            <label>Email</label>
                            <input type="text" name="update_email" value="<?php echo $fetch ['email']?>" class="form-control" required/>
                        </div>
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