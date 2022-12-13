
<!-- ******************************* -->
        <!-- Modal for Update -->
<!-- ******************************* -->
<div class="modal fade" id="update_modal<?php echo $fetch ["desti_ID"]?>" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Destination</h5>
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
                        <div class="form-group col-6">
                            <label>ID</label>
                            <input type="text" name="update_desti_ID" value="<?php echo $fetch['desti_ID']?>" class="form-control" readonly/>
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" name="update_desti_name" value="<?php echo $fetch['desti_name']?>" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Current Picture</label><br>
                            <input type="text" value="<?php echo $fetch['desti_picture']?>" class="form-control" readonly/>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Change Picture</label><br>
                            <input type="file" name="update_desti_picture" value="<?php echo $fetch['desti_picture']?>" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label>Description</label>
                            <input type="text" name="update_desti_description" value="<?php echo $fetch['desti_description']?>" class="form-control" required></input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label>Price</label>
                            <input type="number" name="update_desti_price" value="<?php echo $fetch['desti_price']?>" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 ">
                            <label>Embedded Code</label>
                            <input class="form-control" type="text" name="update_embed_code" value="<?php echo $fetch['embed_code']?>" required></input>
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