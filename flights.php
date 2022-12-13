<?php 
    include 'crud_book.php';

    $obj = new Crud;


    extract($_POST);

    if(isset($btnBook)){
        $obj->add($txtflight_ID, $txtbook_name, $txtbook_cp_no, $txtbook_email);
    }
    // if(isset($btnBook)){
    //     $obj2->bookedFlight($txtbook_email);
    // }
 ?>


<!-- FLIGHT -->
<div class="container">
        <div class="card mt-3">
            <div class="card-header col-auto">
                <h3 class="float-left">Book Flight</h3>
            </div>
            <div class="row mr-2">
                <div class="col"></div>
                    <div class="col-auto">
                        <div>
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search Available Flight">
                        </div>
                    </div>
                </div>

            <form method="POST">
                <div class="table-responsive">
                    <table class="table" id="book">
                        <thead class="table-success">
                            <tr>
                                <th>Departure Location</th>
                                <th>Arrival Location</th>
                                <th>Departure Date</th>
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

<!-- SEARCH -->
<script>
    $(document).ready(function(){
        $('#search').keyup(function(){
            search_table($(this).val());
        });

        function search_table(value){
            $('#book tr').each(function(){
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
