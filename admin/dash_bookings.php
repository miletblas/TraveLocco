<?php
    // session_start();

    include 'crud_booking.php';

    $obj = new Crud;

    extract($_POST);

    if(isset($btnUpdate)){
        $obj->update($update_book_ID, $update_book_name, $update_book_cp_no, $update_book_email);
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
                        <h3 class="float-left">Manage Booking</h3>
                    </div>
                    <div class="row mr-2">
                        <div class="col"></div>
                            <div class="col-auto">
                                <div>
                                    <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </div>

                        <form method="POST">
                            <div class="table-responsive">
                                <table class="table" id="bookings">
                                    <colgroup>
                                        <col width="5%">
                                        <col width="10%">
                                        <col width="5%">
                                        <col width="25%">
                                        <col width="15%">
                                    </colgroup>
                                    <thead class="table-success">
                                        <tr>
                                            <th>ID</th>
                                            <th>Information</th>
                                            <th></th>
                                            <th>Flight Information</th>
                                            <!-- <th>Name</th>
                                            <th>Contact Number</th>
                                            <th>Email</th>
                                            <th>Destination</th>
                                            <th>Price</th>
                                            <th>Date/Time</th> -->
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

<!-- Search -->
<script>
    
    $(document).ready(function(){
        $('#search').keyup(function(){
            search_table($(this).val());
        });

        function search_table(value){
            $('#bookings tr').each(function(){
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
