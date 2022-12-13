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
        
        public function add($flight_ID, $book_name, $book_cp_no, $book_email){

            $conn = $this->conn();

            $sql = "INSERT INTO bookings VALUES (NULL, '$flight_ID', '$book_name', '$book_cp_no', '$book_email')";

            $conn->query($sql);

            include 'emailSMTP.php';

            $sql_dest = "SELECT ad.name as departure_name, aa.name as arrival_name, f.price FROM flights f 
                        INNER JOIN airport ad ON f.departure_airport_ID = ad.airport_ID
                        INNER JOIN airport aa ON f.arrival_airport_ID = aa.airport_ID
                        WHERE flight_ID = $flight_ID;";

            $result = $conn->query($sql_dest);

            $destination = $result->fetch_assoc();

            bookedFlight($flight_ID, $book_name, $book_cp_no, $book_email, $destination);
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

                        echo "<tr>
                                <td>" . $aname[$fetch['departure_airport_ID']] . "</td>
                                <td>" . $aname[$fetch['arrival_airport_ID']] . "</td>
                                <td>" . date('M d,Y h:i A',strtotime($fetch['departure_datetime']))  . "
                                <td>
                                    <form method='POST'><center>
                                        <button class='btn btn-outline-warning' data-toggle='modal' type='button' data-target='#book_modal" .$fetch ["flight_ID"] . "'><span class='glyphicon glyphicon-edit'></span>Book Now</button>
                                    </form>
                                </td>
                            </tr>"; 

                            include 'book_modal.php';
                    }
                }else{
                    echo "No Records Found!";
                }
            }else{
                echo "Query Error!";
            } 
        }

        // public function booked($recipientAddress) {
        //     try {
        //         include "emailSMTP.php";

        //         bookedFlight($recipientAddress, $subject, $body);
        //         $this->okMsg = "Mail sent";
        //     } catch (Exception $e) {
        //         $this->errMsg[] = "Error: $e";
        //     }
        // }
    }