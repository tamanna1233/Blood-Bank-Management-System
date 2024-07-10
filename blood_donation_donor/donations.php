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
    <link rel="stylesheet" href="./navbar.css">
     <link rel="stylesheet" href="./donations.css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:rgb(188, 227, 243);">
    

 <!-- nav bar html -->
 <div class="nav">
    <nav >
       

<div class="topnav" id="myTopnav">

    <a href="../index.php">Home</a>
    <a href="../dashboard.php">DashBoard</a>
    <a href="./donors.php">Donor</a>
    <a href="../adminpatient/display.php">patient</a>
  
  <a href="#donations" class="active">Donations</a>
  <a href="../blood request/request.php">requests
  </a>
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
        <thead>
          <caption style="padding: 2em ;"><h2 style="text-decoration: underline;">Manage Donation request</h2></caption>

         <tr style="font-weight: 200;
         font-size: 2;
         font-style: bold;
         border-bottom: 2px solid black;">
             <th>S.No</th> 
            <th>donor Name</th>
            <th>Mobile No</th>
            <th>date of birth</th>
            <th>Blood type</th>
             <th>Units(in ml)</th>
             <th>disease</th>
             <th>status</th>
            <th>Action</th>
         </tr>

        </thead>
        <tbody>
          <?php
          $sql = "select * from `blood_donation`";
          $result = mysqli_query($conn, $sql);
          if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $s_no = $row['s_no'];
 
                $name = $row['name'];
                  $mobile = $row['mobile'];
                  $dob = $row['dob'];
                  $units = $row['units'];

                  $blood_group = $row['blood_group'];
                  $disease = $row['disease'];
                  $status = $row['status']; // get the status value from the database

                  echo ' <tr>
                  <td>'.$s_no.'</td>
                  <td>'.$name.'</td>
                  <td>'.$mobile.'</td>

                  <td>'.$dob.'</td>
                  <td>'.$units.'</td>

                  <td>'.$blood_group.'</td>
                  <td>'.$disease.'</td>
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
                    <input type="hidden" name="s_no" value="'.$s_no.'">
                    <button type="submit" name="approve" class="button">Approve</button></form>
                    <form action="reject.php" method="post">
                    <input type="hidden" name="s_no" value="'.$s_no.'">
                    <button type="submit" name="reject" class="button">Reject</button>
                    </form>
                </tr>';
              }
          }
          ?>

        </tbody>
        
            </table></div>
<!-- cont the blood group values -->
<?php
if ($result) {
  $blood_group_counts = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $blood_group = $row['blood_group'];
      if (!isset($blood_group_counts[$blood_group])) {
          $blood_group_counts[$blood_group] = 0;
      }
      $blood_group_counts[$blood_group] += $row['units'];
  }

}


//    <script>
//     // nav bar javascript

//     /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
// function myFunction() {
//    var x = document.getElementById("myTopnav");
//    if (x.className === "topnav") {
//      x.className += " responsive";
//    } else {
//      x.className = "topnav";
//    }
//  }
//  </script>


// </body>
// </html>