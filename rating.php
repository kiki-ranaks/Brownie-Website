         <?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
                $rating = $_POST["rating"];
                $feedback = $_POST["feedback"];

                $host = "localhost";
                $username = "root";
                $password = "";
                $database = "brownie";

               
                $conn = new mysqli($host, $username, $password, $database);

              
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

           
                $sql = "INSERT INTO  rating (rating, feedback) VALUES ('$rating', '$feedback')";

                if ($conn->query($sql) === TRUE) {
                    echo "Rating and feedback submitted successfully!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close connection
                $conn->close();
            }
            ?>



