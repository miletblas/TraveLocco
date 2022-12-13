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

        public function displayAll(){
            $conn = $this->conn();

            $airport = "SELECT * FROM airport";
            $res = $conn->query($airport);
            while($fetch = $res->fetch_assoc()){
                $aname[$fetch['airport_ID']] = ucwords($fetch['name'].', '.$fetch['location']);
            }

            $sql = "SELECT * FROM flights 
                    JOIN airlines ON flights.airline_ID = airlines.airline_ID 
                    JOIN airport ON flights.departure_airport_ID = airport.airport_ID
                    JOIN bookings ON flights.flight_ID = bookings.flight_ID";
            $result = $conn->query($sql);


            // $sql = "SELECT * FROM bookings";

            // $result = $conn->query($sql);

            if($result){
                if ($result->num_rows > 0) {
                    while ($fetch = $result->fetch_assoc()) {

                        echo "
                            <tr>
                                <td>" . $fetch ["book_ID"] . "</td>
                                <td> 
                                    <p>Name:<b>" . $fetch ["book_name"] . "</b><br>
                                    Contact No.<b>:" . $fetch ["book_cp_no"] . "</b><br>
                                    Email:<b>" . $fetch ["book_email"] . "</b></p>
                                </td>
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
                                <td><center>
                                    <button class='btn btn-outline-warning' data-toggle='modal' type='button' data-target='#update_modal" .$fetch ["book_ID"] . "'><span class='glyphicon glyphicon-edit'></span>Update</button>
                                    <button class='btn btn-outline-danger' type = 'submit' name = 'btnDelete' value= ". $fetch ["book_ID"] .">Delete</button>
                                </center</td>
                            </tr>";

                            include 'update_user_modal.php';
                            include 'update_booking_modal.php';
                    }
                }else {
                    echo "No Records Found!";
                }
            }else {
                    echo "Query Error!";
            }
        }

        public function update($book_ID, $book_name, $book_cp_no, $book_email){

            $conn = $this->conn();

            $sql = "UPDATE bookings SET book_name='$book_name', book_cp_no='$book_cp_no', book_email='$book_email'  WHERE book_ID = '$book_ID'";

            $conn->query($sql);
        }
        
        public function del($id){

            $conn = $this->conn();

            $sql = "DELETE FROM bookings WHERE book_ID = '$id'"; 
            
            $conn->query($sql);
        }
    }

?>