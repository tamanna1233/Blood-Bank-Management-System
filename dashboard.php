<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url(./css/images/bluepatternimg.jpg);">
    <!-- nav bar html -->
    <div class="nav">
        <nav>
           
    
    <div class="topnav" id="myTopnav">
        <a href="./index.php">home</a>
        <a href="#dashboard" class="active">DashBoard</a>
        <a href="./admindonor/display.php">Donor </a>
        <a href="./adminpatient/display.php">patient</a>
      
      <a href="./blood_donation_donor/donations.php">Donations</a>
      <a href="./blood request/request.php">requests
      </a>
      <a href="./logout.php">logout</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()"> 
        <i class="fa fa-bars"></i>
      </a>
    </div>
            
        </nav>
       </div>


       <div class="container">
        <div class="container1">
            <div class="item item1">
                             <!--///////////////////// A+//////////////// -->
            <h3>A+ </h3>
                <br> Blood Available<br>
                 Total <div><?php
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
                          echo "    A+: " . $totalCount;
                      } else {
                          echo "Error executing query: " . $conn->error;
                      }
                      
                      // Close the connection
                      $conn->close();
                      ?></div>
                  <!-- units change -->
                </div>
                <div class="item item2"> 
                          <!-- *****************A-************- -->
                <h3>A-</h3> <br> 
                    Blood Available<br>
                    Total <div><?php
                      $conn=new mysqli('localhost','root','','database1');
           
                      if(!$conn){
                          die(mysqli_error($conn));
                      
                      }
                     
                      // SQL query to count total IDs
                      $sql = "SELECT sum(units) AS total FROM blood_donation where blood_group = 'A-'"; // Change 'your_table' to your actual table name
                      
                      // Execute query
                      $result = $conn->query($sql);
                      
                      // Check if query executed successfully
                      if ($result) {
                          // Fetch the result as an associative array
                          $row = $result->fetch_assoc();
                          
                          // Get the total count
                          $totalCount = $row['total'];
                          
                          // Output the total count
                          echo " A-: " . $totalCount;
                      } else {
                          echo "Error executing query: " . $conn->error;
                      }
                      
                      // Close the connection
                      $conn->close();
                      ?></div>
                     <!-- units change -->
                </div>
                <div class="item item3"> 
                              <!-- *************B+********* -->
                <h3>B+ </h3><br> 
                    Blood Available<br>
                    Total <div><?php
                      $conn=new mysqli('localhost','root','','database1');
           
                      if(!$conn){
                          die(mysqli_error($conn));
                      
                      }
                     
                      // SQL query to count total IDs
                      $sql = "SELECT sum(units) AS total FROM blood_donation where blood_group = 'B+'"; // Change 'your_table' to your actual table name
                      
                      // Execute query
                      $result = $conn->query($sql);
                      
                      // Check if query executed successfully
                      if ($result) {
                          // Fetch the result as an associative array
                          $row = $result->fetch_assoc();
                          
                          // Get the total count
                          $totalCount = $row['total'];
                          
                          // Output the total count
                          echo " B+: " . $totalCount;
                      } else {
                          echo "Error executing query: " . $conn->error;
                      }
                      
                      // Close the connection
                      $conn->close();
                      ?></div>
                     <!-- units change -->
                </div>
                <div class="item item4">
                                  <!--***********B-***********  -->
                <h3>B- </h3><br> 
                    Blood Available<br>
                    Total <div><?php
                      $conn=new mysqli('localhost','root','','database1');
           
                      if(!$conn){
                          die(mysqli_error($conn));
                      
                      }
                     
                      // SQL query to count total IDs
                      $sql = "SELECT sum(units) AS total FROM blood_donation where blood_group = 'B-'"; // Change 'your_table' to your actual table name
                      
                      // Execute query
                      $result = $conn->query($sql);
                      
                      // Check if query executed successfully
                      if ($result) {
                          // Fetch the result as an associative array
                          $row = $result->fetch_assoc();
                          
                          // Get the total count
                          $totalCount = $row['total'];
                          
                          // Output the total count
                          echo " B-: " . $totalCount;
                      } else {
                          echo "Error executing query: " . $conn->error;
                      }
                      
                      // Close the connection
                      $conn->close();
                      ?></div>
                     <!-- units change -->
                </div> 
        </div>
        <br><br><br>
      <div class="container2">
        <div class="item item5"> 
                          <!--  **********AB+ ********* -->
        <h3>AB+</h3> <br> 
            Blood Available<br>
            Total <div><?php
                      $conn=new mysqli('localhost','root','','database1');
           
                      if(!$conn){
                          die(mysqli_error($conn));
                      
                      }
                     
                      // SQL query to count total IDs
                      $sql = "SELECT sum(units) AS total FROM blood_donation where blood_group = 'AB+'"; // Change 'your_table' to your actual table name
                      
                      // Execute query
                      $result = $conn->query($sql);
                      
                      // Check if query executed successfully
                      if ($result) {
                          // Fetch the result as an associative array
                          $row = $result->fetch_assoc();
                          
                          // Get the total count
                          $totalCount = $row['total'];
                          
                          // Output the total count
                          echo " AB+: " . $totalCount;
                      } else {
                          echo "Error executing query: " . $conn->error;
                      }
                      
                      // Close the connection
                      $conn->close();
                      ?></div>
             <!-- units change --> <br>
        </div>
        <div class="item item6"> 
                   <!--****************AB-********  -->
        <h3>AB-</h3> <br> 
             Blood Available<br>
             Total <div><?php
                      $conn=new mysqli('localhost','root','','database1');
           
                      if(!$conn){
                          die(mysqli_error($conn));
                      
                      }
                     
                      // SQL query to count total IDs
                      $sql = "SELECT sum(units) AS total FROM blood_donation where blood_group = 'AB-'"; // Change 'your_table' to your actual table name
                      
                      // Execute query
                      $result = $conn->query($sql);
                      
                      // Check if query executed successfully
                      if ($result) {
                          // Fetch the result as an associative array
                          $row = $result->fetch_assoc();
                          
                          // Get the total count
                          $totalCount = $row['total'];
                          
                          // Output the total count
                          echo " AB-: " . $totalCount;
                      } else {
                          echo "Error executing query: " . $conn->error;
                      }
                      
                      // Close the connection
                      $conn->close();
                      ?></div>
        </div>
        <div class="item item7"> 
          <!--******O-*********  -->
        <h3>O- </h3><br> 
            Blood Available<br>
                     Total <div><?php
                      $conn=new mysqli('localhost','root','','database1');
           
                      if(!$conn){
                          die(mysqli_error($conn));
                      
                      }
                     
                      // SQL query to count total IDs
                      $sql = "SELECT sum(units) AS total FROM blood_donation where blood_group = 'O-'"; // Change 'your_table' to your actual table name
                      
                      // Execute query
                      $result = $conn->query($sql);
                      
                      // Check if query executed successfully
                      if ($result) {
                          // Fetch the result as an associative array
                          $row = $result->fetch_assoc();
                          
                          // Get the total count
                          $totalCount = $row['total'];
                          
                          // Output the total count
                          echo " O-: " . $totalCount;
                      } else {
                          echo "Error executing query: " . $conn->error;
                      }
                      
                      // Close the connection
                      $conn->close();
                      ?></div>
        </div>
        <div class="item item8">
          <!--********O+*********  -->
        <h3>O+ </h3><br> 
            
            Blood Available<br>
            Total <div><?php
                      $conn=new mysqli('localhost','root','','database1');
           
                      if(!$conn){
                          die(mysqli_error($conn));
                      
                      }
                     
                      // SQL query to count total IDs
                      $sql = "SELECT sum(units) AS total FROM blood_donation where blood_group = 'O+'"; // Change 'your_table' to your actual table name
                      
                      // Execute query
                      $result = $conn->query($sql);
                      
                      // Check if query executed successfully
                      if ($result) {
                          // Fetch the result as an associative array
                          $row = $result->fetch_assoc();
                          
                          // Get the total count
                          $totalCount = $row['total'];
                          
                          // Output the total count
                          echo " O+: " . $totalCount;
                      } else {
                          echo "Error executing query: " . $conn->error;
                      }
                      
                      // Close the connection
                      $conn->close();
                      ?></div>
             <!-- units change -->
                      <!-- units change -->
        </div>
       </div>
      </div>















      <script>
        // nav bar javascript
    
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
       var x = document.getElementById("myTopnav");
       if (x.className === "topnav") {
         x.className += " responsive";
       } else {
         x.className = "topnav";
       }
     }
     </script>
</body>
</html>