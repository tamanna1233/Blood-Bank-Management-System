<?php
           $conn=new mysqli('localhost','root','','database1');

           if(!$conn){
               die(mysqli_error($conn));
           
           }
          
           // SQL query to count total IDs
           $sql = "SELECT sum(units) AS total FROM blood_donation where blood_group = 'A+'"; // Change 'your_table' to your actual table name
           
           // Execute query
           $result = $conn->query($sql);
           
           // Check if query executed successfully
           if ($result) {
               // Fetch the result as an associative array
               $row = $result->fetch_assoc();
               
               // Get the total count
               $totalCount = $row['total'];
               
               // Output the total count
               echo "Total number of A+: " . $totalCount;
           } else {
               echo "Error executing query: " . $conn->error;
           }
           
           // Close the connection
           $conn->close();
           ?>
           


