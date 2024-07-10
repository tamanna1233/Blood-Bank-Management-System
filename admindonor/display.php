<?php
include 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
  @import url(./navbar.css);
 
  *{
    margin: 0%;
    padding: 0%;

  }

  html ,body{
    height: 100%;
    width: 100%;
    background-color: rgb(199, 227, 245);
  }

  .container{
    display: grid;
     padding: 1% 0% 0% 0%; 
    align-content: space-between;
    justify-content: space-around;
    align-items: center;
    justify-items: end;
  }


  /* table{
    /* background-color: aqua; */
    /* width: max-content;
    padding: 1em;
    border: 2px solid red;
    border-bottom: 1px solid black;
  } */ */

  table{
    border-collapse: collapse;
    width: 100%; 
}

.container table th,td{
    border-bottom: 0.5px solid black;
    padding: 1vb;
}
  /* table tr:nth-child(even){
    background-color: rgb(223, 219, 219);
 };  */


 
 table tr:hover{
                background-color:rgb(167, 165, 165);
                color: rgb(7, 7, 7);
 }

 @media screen and (max-width:600px) {
    .container{
        margin: 0px;
    }
    
 }

.container button{
  height: 2rem;
  width: 5rem;
  background-color: rgb(3, 116, 57);
  color: aliceblue;
  text-decoration: none;
  border-radius: 1rem;
  
}

.container .button{
  text-decoration: none;
  color: aliceblue;
}
.container button:hover{
  color: green;
  background-color: white;
}
.container .button:hover{
  color: green;
}


</style>

</head>
<body>
  <!-- nav bar  -->
  <div class="nav">
    <nav style="position:fixed; top:0px;width:100%">
       

<div class="topnav" id="myTopnav">
    <a href="../index.php">home</a>
    <a href="../dashboard.php">DashBoard</a>
    <a href="#donor" class="active" >Donor </a>
    <a href="../adminpatient/display.php">patient</a>
  
  <a href="http://localhost/final/blood_donation_donor/donations.php">Donations</a>
  <a href="../blood request/request.php">requests
  </a>
  <a href="../logout.php">logout</a>
   <a href="javascript:void(0);" class="icon" onclick="myFunction()"> 
    <i class="fa fa-bars"></i>
  </a>
</div>
        
    </nav>
   </div>
<br><br><br>
   <!-- nav bar finish -->
   <h1 style="text-align: center; padding:2%;"> <u>List of Donors</u></h1>
       <div class="container">
       
       
       <!-- <button><a href="user.php" class="button"> Add Donor </a></button> -->
        <table>
          <thead>
          <tr style="background-color: rgb(84, 6, 6); color: antiquewhite;">
                <th>Sl no.</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>email</th>
                <th>password</th>
               
                <th>mobile</th>
                
                <th>dob</th>
                <th>blood_group</th>
                <th>operations</th>
            </tr>
          </thead>
          <tbody>

          <?php
$sql = "select * from `donor_registration`";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $password = $row['password'];
        $mobile = $row['mobile'];
       
        $dob = $row['dob'];
        $blood_group = $row['blood_group'];
        // Hash the password securely before displaying it
        echo ' <tr>
        <td scope="row">'.$id.'</td>
        <td>'.$first_name.'</td>
        <td>'.$last_name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$mobile.'</td>
        
        <td>'.$dob.'</td>
        <td>'.$blood_group.'</td>
        <td>
        <button><a href="update.php? updateid='.$id.'" class="button">update</a></button>
        <button><a href="delete.php? deleteid='.$id.'" class="button">delete</a></button></td>
      </tr>';
    }
}
?>


          <!-- <tr>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr> -->
          </tbody>
        </table>
       </div>
</body>
</html>