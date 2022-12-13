<?php
    // session_start();

    $conn = mysqli_connect("localhost", "root", "", "travelocco");

?>
<div class="content">
    <div class="row" style="margin-top: 7%;">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header col-auto">
                    <h3 class="float-left">Reviews</h3>
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
                            <table class="table" id="reviews">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Ratings</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tr>
                <?php

                    $sql = "SELECT * FROM reviews";
                    $result = $conn -> query($sql);

                    if($result){
                        if ($result->num_rows > 0) {
                            while ($fetch = $result->fetch_assoc()) {

                                echo "
                                    <tr>
                                        <td>" . $fetch ["review_ID"] . "</td>
                                        <td>" . $fetch ["review_name"] . "</td>
                                        <td>" . $fetch ["review_rating"] . "</td>
                                        <td>" . $fetch ["review_comment"] . "</td>
                                    </tr>";
                            }
                        }else {
                            echo "No Records Found!";
                        }
                    }else {
                            echo "Query Error!";
                    }
                ?>
                            </table>
                        </div>
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
            $('#reviews tr').each(function(){
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
