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

            $query = "SELECT * FROM useraccounts ORDER BY user_ID";
            $result = mysqli_query($conn, $query);

            while($fetch = mysqli_fetch_array($result))
            {
                echo "
                    <tr>
                        <td>" . $fetch["user_ID"] . "</td>
                        <td>" . $fetch["user_name"] . "</td>
                        <td>" . $fetch["user_cp_no"] . "</td>
                        <td>" . $fetch["email"] . "</td>
                        <td><center>
                            <button class='btn btn-outline-warning' data-toggle='modal' type='button' data-target='#update_modal" .$fetch ["user_ID"] . "'><span class='glyphicon glyphicon-edit'></span>Update</button>
                            <button class='btn btn-outline-danger' type = 'submit' name = 'btnDelete' value= ". $fetch ["user_ID"] .">Delete</button>
                        </center></td>
                    </tr>";

                    include 'update_user_modal.php';
            }
        }

        public function update($user_ID, $user_name, $user_cp_no, $email){

            $conn = $this->conn();

            $sql = "UPDATE useraccounts SET user_name='$user_name', user_cp_no='$user_cp_no', email='$email' WHERE user_ID = '$user_ID'";

            $conn->query($sql);
        }
        
        public function del($id){

            $conn = $this->conn();

            $sql = "DELETE FROM useraccounts WHERE user_ID = '$id'"; 
            
            $conn->query($sql);
        }
    }

?>