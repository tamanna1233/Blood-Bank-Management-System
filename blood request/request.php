<?php
$conn=new mysqli('localhost','root','','database1');

if(!$conn){
    die(mysqli_error($conn));

}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./request.css">
    <!-- nav bar icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:rgb(188, 227, 243)">
      <!-- nav bar html -->
      <div class="nav">
        <nav >
           
    
    <div class="topnav" id="myTopnav">

         <a href="../index.php">home</a> 
        <a href="../dashboard.php">DashBoard</a>
        <a href="../admindonor/display.php">Donor</a> 
        <a href="../adminpatient/display.php">patient</a> 
      
       <a href="../blood_donation_donor/donations.php">Donations</a>
      <a href="#request" class="active">Request</a>
      
      <a href="../logout.php">logout</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()"> 
        <i class="fa fa-bars"></i>
      </a>
    </div>
            
        </nav>
       </div>


        <!-- donation request -->
   <div class="container">

    <table>
        <caption style="padding: 2em ;"><h2 style="text-decoration: underline;">Manage blood request</h2></caption>

         <tr style="font-weight: 200;
         font-size: 2;
         font-style: bold;
         border-bottom: 2px solid black;">
            <thead>
              <th>S_No</th> 
              <th>donor Name</th>
              <th>Mobile No</th>
              <th>Blood type</th>
               <th>Units(in ml)</th>
               <th>reason</th>
               <th>status</th>
              <th>Action</th>
           </tr>
          </thead>
           <tbody>
           <?php
          $sql = "select * from `request_blood`";
          $result = mysqli_query($conn, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id =$row['id'];
              $name = $row['name'];
                  $mobile = $row['mobile'];

                  $blood_group = $row['blood_group'];
                  $units = $row['units'];

                  $reason = $row['reason'];
                  $status = $row['status'];
                  echo ' <tr>
                  <td>'.$id.'</td>
                  <td>'.$name.'</td>
                  <td>'.$mobile.'</td>


                  <td>'.$blood_group.'</td>
                  <td>'.$units.'</td>

                  <td>'.$reason.'</td>
                  <td>';
                  switch($status){
                    case 0:
                      echo "pending";
                      break;
                    case 1:
                      echo "approved";
                      break;
                    case 2:
                      echo "rejected";
                      break;
                    default:
                      echo "unknown";
                  }

                  echo '

                  <td>
                  <form action="approve.php" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <button type="submit" name="approve" class="button">Approve</button></form>
                    <form action="reject.php" method="post">
                      <input type="hidden" name="id" value="'.$id.'">
                      <button type="submit" name="reject" class="button">Reject</button>
                      </form>
                 
                 
            

                 
                </tr>';
              }
          }
          ?>

           </tbody>
         
        </table>
        <td> <i class="fa-duotone fa-rectangle-xmark"></i></td>
        <!-- // <td> -->
                  <!-- // <button><a href="update.php? updateid='.$id.'" class="button">approved</a></button> -->
                  <!-- // <button><a href="delete.php? deleteid='.$id.'" class="button">reject</a></button></td> -->

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