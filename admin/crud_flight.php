<?php
    class Crud{
        public $db_host = "localhost";
        public $db_user = "root";
        public $db_pass = "";
        public $db_name = "travelocco";

        public function conn(){
            $conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

            if($conn->connect_error){
                echo "Cannot connect to database.".$conn->connect_error;
            }else {
                return $conn;
            }
        }

        // public function add($airline_ID, $plane_no, $departure_airport_ID, $arrival_airport_ID, $departure_datetime, $arrival_datetime, $seats, $price){

        //     $conn = $this->conn();

        //     $sql = "INSERT INTO flights VALUES (NULL, '$airline_ID', '$plane_no', '$departure_airport_ID', '$arrival_airport_ID', '$departure_datetime', '$arrival_datetime', '$seats', '$price')";

        //     $conn->query($sql);
        // }

        public function add($airline_ID, $plane_no, $departure_airport_ID, $arrival_airport_ID, $departure_datetime, $arrival_datetime, $seats, $price){

            $conn = $this->conn();

            $sql = "INSERT INTO flights VALUES (NULL, '$airline_ID', '$plane_no', '$departure_airport_ID', '$arrival_airport_ID', '$departure_datetime', '$arrival_datetime', '$seats', '$price', CURRENT_TIMESTAMP)";

            $conn->query($sql);
        }

        public function displayAll(){
            $conn = $this->conn();

            $airport = "SELECT * FROM airport";
            $res = $conn->query($airport);
            while($fetch = $res->fetch_assoc()){
                $aname[$fetch['airport_ID']] = ucwords($fetch['name'].', '.$fetch['location']);
            }

            $sql = "SELECT * FROM flights 
                    JOIN airlines ON flights.airline_ID=airlines.airline_ID 
                    JOIN airport ON flights.departure_airport_ID = airport.airport_ID
                    ORDER BY date_created ASC";
            $result = $conn->query($sql);

            if($result){
                if($result->num_rows> 0){
                    while($fetch = $result->fetch_assoc()){
                        $booked = $conn->query("SELECT * FROM bookings where flight_ID = ".$fetch['flight_ID'])->num_rows;
                        /*$aname[$fetch['departure_airport_ID']].' - '.$aname[$fetch['arrival_airport_ID']]
                        $fetch ["airline"]*/
                        $available = $fetch ["seats"] - $booked;

                        echo "
                            <tr>
                                <td>" . date('M d,Y',strtotime($fetch ["date_created"])) . "</td>
                                <td>
                                    <div class='row'>
                                        <div class='col-sm-4'>
                                            <img src='airline-logo/" . $fetch['logo_path'] . "' class='rounded-circle'>
                                        </div>
                                </td>
                                <td>
                                        <div class='col-sm-10'>
                                            <p>Airline:<b>" . $fetch ['airline'] . "</b><br>
                                            Location:<b>" . $aname[$fetch['departure_airport_ID']].' - '.$aname[$fetch['arrival_airport_ID']] . "</b><br>
                                            Departure:<b>" . date('M d,Y h:i A',strtotime($fetch['departure_datetime']))  . "</b><br>
                                            Arrival:<b>" . date('M d,Y h:i A',strtotime($fetch['arrival_datetime'])) . "</b></p>
                                        </div>
                                    </div>
                                </td>
                                <td>" . $fetch ["seats"] . "</td>
                                <td>" . $booked . "</td>
                                <td>" . $available . "</td>
                                <td>" . $fetch ["price"] . "</td>
                                    

                                <td>
                                    <form method='POST'><center>
                                            <button class='btn btn-outline-warning' data-toggle='modal' type='button' data-target='#update_modal" .$fetch ["flight_ID"] . "'><span class='glyphicon glyphicon-edit'></span>Update</button>
                                    
                                        <button class='btn btn-outline-danger' type ='submit' name ='btnDelete' value='". $fetch ["flight_ID"] ."'>Delete</button>
                                    </center></form>
                                </td>
                            </tr>
                            ";
                            include 'update_flight_modal.php';    
                    }
                }else{
                    echo "No Records Found!";
                }
            }else{
                echo "Query Error!";
            } 
        }

        public function update($flight_ID, $airline_ID, $plane_no, $departure_airport_ID, $arrival_airport_ID, $departure_datetime, $arrival_datetime, $seats, $price){

            $conn = $this->conn();

            // $sql = "UPDATE flights SET airline_ID='$airline_ID', plane_no='$plane_no', departure_airport_ID='$departure_airport_ID', arrival_airport_ID='$arrival_airport_ID', departure_datetime='$departure_datetime', arrival_datetime='$arrival_datetime', seats='$seats', price='$price' WHERE flight_ID = '$id'";

            // $sql = "UPDATE flights f 
            //     SET airline.airline_ID='$airline.airline_ID', f.plane_no='$f.plane_no', airport.departure_airport_ID='$airport.departure_airport_ID', airport.arrival_airport_ID='$airport.arrival_airport_ID', f.departure_datetime='$f.departure_datetime', f.arrival_datetime='$f.arrival_datetime', f.seats='$seats', f.price='$price'
            //     JOIN airlines ON f.airline_ID=airlines.airline_ID 
            //     JOIN airport ON f.departure_airport_ID = airport.airport_ID WHERE f.flight_ID = '$flight_ID'";


            $sql = "UPDATE flights 
                    SET airline_ID = '$airline_ID', 
                        plane_no = '$plane_no', 
                        departure_airport_ID = '$departure_airport_ID', 
                        arrival_airport_ID = '$arrival_airport_ID', 
                        departure_datetime = '$departure_datetime', 
                        arrival_datetime = '$arrival_datetime', 
                        seats = '$seats', 
                        price = '$price'
                    WHERE flight_ID = '$flight_ID'";


            $conn->query($sql);
        }
        
        public function del($id){

            $conn = $this->conn();

            $sql = "DELETE FROM flights WHERE flight_ID = $id"; 
            
            $conn->query($sql);
        }
    }

?>