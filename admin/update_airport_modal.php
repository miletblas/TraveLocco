
<!-- ******************************* -->
        <!-- Modal for Update -->
<!-- ******************************* -->
<div class="modal fade" id="update_modal<?php echo $fetch ["airport_ID"]?>" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Airpor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
                <div class="modal-body ">
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label>ID</label>
                            <input type="text" name="update_airport_ID" value="<?php echo $fetch['airport_ID']?>" class="form-control" readonly/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Airport Name</label>
                            <input type="text" name="update_airport_name" value="<?php echo $fetch['name']?>" class="form-control" required/>
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label>Location</label>
                            <input type="text" name="update_airport_location" value="<?php echo $fetch['location']?>" class="form-control" required/>
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

<!-- i_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE airline_ID = '3'' at line 1 in C:\xampp\htdocs\admin\crud_airline.php:69 Stack trace: #0 C:\xampp\htdocs\admin\crud_airline.php(69): mysqli->query('UPDATE airlines...') #1 C:\xampp\htdocs\admin\dash_airlines.php(14): Crud->update('3', 'Cebu Pacific', 'Cebus') #2 C:\xampp\htdocs\admin\index.php(8): include('C:\\xampp\\htdocs...') #3 {main} thrown in C:\xampp\htdocs\admin\crud_airline.php on line 69 -->