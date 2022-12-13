<?php
    // session_start();

    include 'crud_destination.php';

    $obj = new Crud;

    extract($_POST);

    if(isset($btnAdd)){
        $obj->add($txtdesti_name, $txtdesti_picture, $txtdesti_description, $txtdesti_price, $txtembed_code);
    }
    if(isset($btnUpdate)){
        $obj->update($update_desti_ID, $update_desti_name, $update_desti_picture, $update_desti_description, $update_desti_price, $update_embed_code);
    }
    if(isset($btnDelete)){
		$obj->del($btnDelete);
	}

    error_reporting(0);

    $status = $statusMsg = ''; 
    if(isset($btnAdd)){ 
        $status = 'error'; 
        if(!empty($_FILES["desti_picture"]["name"])) { 
            // Get file info 
            $fileName = basename($_FILES["desti_picture"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
            
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg','gif'); 
            if(in_array($fileType, $allowTypes)){ 
                $desti_picture = $_FILES['desti_picture']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($desti_picture)); 
             
                // Insert desti_picture content into database 
                $insert = $db->query("INSERT into desti_pictures (desti_picture) VALUES ('$imgContent')"); 
                 
                if($insert){ 
                    $status = 'success'; 
                    $statusMsg = "File uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            } 
        } 
    } 

    // Display status message 
    echo $statusMsg;  
?>
    <div class="content">
        <div class="row" style="margin-top: 7%;">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header col-auto">
                        <h3 class="float-left">Manage Destinations</h3>
                    </div>
                    <div class="row mr-2">
                        <div class="col">
                            <input class="btn btn-primary" type="submit" name="btnAdd" value="Add Destination" data-toggle="modal" data-target="#addID">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                        </div>
                    </div>

                    <form method = "POST">
                        <div class="table-responsive">
                            <table class="table" id="destinations">
                                <colgroup>
                                    <col width="8%">
                                    <col width="8%">
                                    <col width="30%">
                                    <col width="10%">
                                    <col width="15%">
                                </colgroup>
                                <thead class="table-success">
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Name</th>
                                        <th>Picture</th>
                                        <th>Description</th>
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
    </div>

    <!-- Modal For Add Destination -->
    <div class="modal fade" id="addID" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Destination</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>

                <div class="modal-body ">
                    <form method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input class="form-control" type="text" name="txtdesti_name" placeholder="Destination Name" required>
                            </div>
                        
                            <div class="form-group col-md-6">
                                <label>Picture</label>
                                <input type="file" name="txtdesti_picture" value="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 ">
                                <label>Description</label>
                                <textarea class="form-control" type="text" name="txtdesti_description" placeholder="Description" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Price</label>
                                <input class="form-control" type="number" name="txtdesti_price" placeholder="Price" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 ">
                                <label>Embedded Code</label>
                                <textarea class="form-control" type="text" name="txtembed_code" placeholder="Embed Code" required></textarea>
                            </div>
                        </div>
                    </div>

                        <div class="modal-footer">
                            
                            <button type="reset" class="btn btn-warning">Reset Values</button>
                            <input class="btn btn-primary" type="submit" name="btnAdd" value="Add Destination">
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
            $('#destinations tr').each(function(){
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
