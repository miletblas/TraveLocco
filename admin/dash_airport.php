<?php
    // session_start();

    include 'crud_airport.php';

    $obj = new Crud;

    extract($_POST);

    if(isset($btnAdd)){
        $obj->add($txtairport_name, $txtairport_location);
    }
    if(isset($btnUpdate)){
        $obj->update($update_airport_ID, $update_airport_name, $update_airport_location);
    }
    if(isset($btnDelete)){
		$obj->del($btnDelete);
	}
 
?>
<style>
   /* table{
        counter-reset: row-num;
    }
    table tr{
        counter-reset: row-num;
        counter-increment: row-num;
    }
    table td:first-child::before{
        content: counter(row-num)". ";
    }*/
</style>
<div class="content">
    <div class="row" style="margin-top: 7%;">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <!-- <a href="dashboard.html" class="btn btn-primary">Back</a> -->
        			<h3>Manage Airport</h3>
        		</div>
                <div class="row mr-2">
                    <div class="col">
                        <input class="btn btn-primary" type="submit" name="btnAdd" value="Add Airport" data-toggle="modal" data-target="#addID">
                    </div>
                    <div class="col-auto">
                        <div>
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                        </div>
                    </div>
                </div>

                <form method = "POST">
                    <table class="table" id="airport">
                        <thead class="table-success">
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <?php
                            $obj->displayAll();
                        ?>
                   
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Modal For Add Airport -->
    <div class="modal fade" id="addID" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Airport</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>

                <div class="modal-body ">
                    <form method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Airport Name</label>
                                <input class="form-control" type="text" name="txtairport_name" placeholder="Airport Name" required>
                            </div>
                        
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label>Location</label>
                                <textarea class="form-control" type="text" name="txtairport_location" placeholder="Location" required></textarea>
                            </div>
                        </div>
                    </div>

                        <div class="modal-footer">
                            
                            <button type="reset" class="btn btn-warning" data-dismiss="modal">Reset Values</button>
                            <input class="btn btn-primary" type="submit" name="btnAdd" value="Add Airport">
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
            $('#airport tr').each(function(){
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
