<?php
    // session_start();

?>
<style>
    h5{
        margin-left: 50%;
        margin-right: auto;
        margin-top: 5%;
        font-family: arial;
        font-weight: bold;
        letter-spacing: 2px;
    }
    table{
        margin-left: 50%;
    }
    table th{
        background-color:  #C1E1C1;
    }
    table th, td{
        text-align: center;
    }
</style>
<div class="content">
    <div class="row" style="margin-top: 7%;">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Manage Reports</h3>
                </div>
                <div class="row mr-2">
                    <div class="col-md-6">
                        <?php
                            $conn = mysqli_connect("localhost", "root", "", "travelocco");

                            // $booked = $conn->query("SELECT * FROM bookings where flight_ID = ".$row['flight_ID'])->num_rows;

                            $sql = "SELECT YEAR(departure_datetime) as year, MONTHNAME(departure_datetime) as mname, sum(seats * price) as total FROM flights GROUP BY YEAR(departure_datetime), MONTH(departure_datetime)";
                            $result = $conn->query($sql);

                        ?>
                        <h5>Monthly  Income</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>Year</th>
                                <th>Month</th>
                                <th>Total</th>
                            </tr>
                            <?php
                                while ($row = $result->fetch_object()): ?>
                            <tr>
                                <td><?php echo $row->year; ?></td>
                                <td><?php echo $row->mname; ?></td>
                                <td><?php echo $row->total; ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </div>
                <div class="row mr-2">
                    <div class="col-md-6">
                        <?php
                            $sql1 = "SELECT YEAR(departure_datetime) as year, sum(seats * price) as total FROM flights GROUP BY YEAR(departure_datetime)";
                            $result = $conn->query($sql1);

                        ?>
                        <h5>Yearly  Income</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>Year</th>
                                <th>Total</th>
                            </tr>
                            <?php
                                while ($row = $result->fetch_object()): ?>
                            <tr>
                                <td><?php echo $row->year; ?></td>
                                <td><?php echo $row->total; ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
