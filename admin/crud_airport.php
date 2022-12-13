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

        public function add($name, $location){

            $conn = $this->conn();

            $sql = "INSERT INTO airport VALUES (NULL, '$name', '$location')";

            $conn->query($sql);
        }

        public function displayAll(){
            $conn = $this->conn();

            $sql = "SELECT * FROM airport";

            $result = $conn->query($sql);

            $i = 1;

            if($result){
                if($result->num_rows > 0){
                    while($fetch = $result->fetch_assoc()){

                        echo "
                            <tr>
                                <td>" . $i++ . "</td>
                                <td>" . $fetch ["name"] . "</td>
                                <td>" . $fetch ["location"] . "</td>

                                <td>
                                    <form method='POST'><center>
                                            <button class='btn btn-outline-warning' data-toggle='modal' type='button' data-target='#update_modal" .$fetch ["airport_ID"] . "'><span class='glyphicon glyphicon-edit'></span>Update</button>
                                    
                                        <button class='btn btn-outline-danger' type ='submit' name ='btnDelete' value='". $fetch ["airport_ID"] ."'>Delete</button>
                                    </center></form>
                                </td>
                            </tr>
                            ";
                            include 'update_airport_modal.php';    
                    }
                }else{
                    echo "No Records Found!";
                }
            }else{
                echo "Query Error!";
            } 
        }

        public function update($airport_ID, $name, $location){

            $conn = $this->conn();

            $sql = "UPDATE airport SET name='$name', location='$location' WHERE airport_ID = '$airport_ID'";

            $conn->query($sql);
        }
        
        public function del($id){

            $conn = $this->conn();

            $sql = "DELETE FROM airport WHERE airport_ID = $id"; 
            
            $conn->query($sql);
        }

        // public function searchDestinations(){
        //     $conn = $this->conn();

        //     $sql = "SELECT * FROM 'destinations' WHERE '$desti_id', '$desti_name', '$desti_picture', '$desti_description' LIKE '%$keyword%' ORDER BY $desti_id', '$desti_name', '$desti_picture', '$desti_description'"

        //     $conn->query($sql);
        // }

        // public function uploadImage(){
        //     $status = $statusMsg = ''; 
        //     if(isset($_POST["btnAdd"])){ 
        //         $status = 'error'; 
        //         if(!empty($_FILES["desti_picture"]["name"])) { 
        //             // Get file info 
        //             $fileName = basename($_FILES["desti_picture"]["name"]); 
        //             $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                     
        //             // Allow certain file formats 
        //             $allowTypes = array('jpg','png','jpeg','gif'); 
        //             if(in_array($fileType, $allowTypes)){ 
        //                 $desti_picture = $_FILES['desti_picture']['tmp_name']; 
        //                 $imgContent = addslashes(file_get_contents($desti_picture)); 
                     
        //                 // Insert desti_picture content into database 
        //                 $insert = $db->query("INSERT into desti_pictures (desti_picture, created) VALUES ('$imgContent', NOW())"); 
                         
        //                 if($insert){ 
        //                     $status = 'success'; 
        //                     $statusMsg = "File uploaded successfully."; 
        //                 }else{ 
        //                     $statusMsg = "File upload failed, please try again."; 
        //                 }  
        //             }else{ 
        //                 $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        //             } 
        //         }else{ 
        //             $statusMsg = 'Please select an desti_picture file to upload.'; 
        //         } 
        //     } 

        //     // Display status message 
        //     echo $statusMsg;    
        // }
    }

?>