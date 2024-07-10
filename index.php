<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">
    <!-- font awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- footer css -->
    <link rel="stylesheet" href="./footer.css">
    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
    <!-- animation aos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <!-- nav bar icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="redwings"><h1>Redwings</h1></div>

        <!-- red wing complete -->

   <div class="nav">
    <nav style="position: sticky;">
       

<div class="topnav" id="myTopnav">
    <a href="#home" class="active">Home</a>
  <a href="./patient/patientlogin.html" onclick="openpatientloginform()">Patient</a>
  
  
  <a href="./actions/donorlogin.html" onclick="opendonorloginform()">Donor </a>
  <!-- <a href="">Donate Blood</a> -->
  <a href="./adminlogin.html" onclick="openadminloginform()">Admin login
  </a>
  <a href="about page\about page.html">About Us</a>
   <a href="javascript:void(0);" class="icon" onclick="myFunction()"> 
    <i class="fa fa-bars"></i>
  </a>
</div>
        
    </nav>
   </div>
        <!-- ist picture  -->

   <div class="istpic">
    <!-- <div class="txt">
        <h3>Never feel yourself weak you have the ability to save a life. <h2>Just donate blood.</h2></h3><br>
        <img src="./priyanshu/drop.png" alt=""> -->
    <!-- </div> --> 
    <img src="./css/images/1ST IMAGE.jpg" alt="1st picture ">
   </div>
   <br>

    <!--********* DONOR REGISTRATION & TOTAL BLOOD AVIALABLE -->

    
    <div class="square">
        <div data-aos="zoom-out-right">
            <div class="item item1">
                <h3>DONOR REGISTER</h3><br>
                <div>
                <?php
                   $conn=new mysqli('localhost','root','','database1');
        
                   if(!$conn){
                       die(mysqli_error($conn));
                   
                   }
                  
                   // SQL query to count total IDs
                   $sql = "SELECT COUNT(id) AS total FROM donor_registration"; // Change 'your_table' to your actual table name
                   
                   // Execute query
                   $result = $conn->query($sql);
                   
                   // Check if query executed successfully
                   if ($result) {
                       // Fetch the result as an associative array
                       $row = $result->fetch_assoc();
                       
                       // Get the total count
                       $totalCount = $row['total'];
                       
                       // Output the total count
                       echo " " . $totalCount;
                   } else {
                       echo "Error executing query: " . $conn->error;
                   }
                   
                   // Close the connection
                   $conn->close();
                   ?>
                </div>
            </div>
        </div>
   
    <div data-aos="zoom-out-left">
        <div class="item item2">
            <h3>BLOOD AVIALABLE</h3><br>
           <div>
               <?php
                  $conn=new mysqli('localhost','root','','database1');
       
                  if(!$conn){
                      die(mysqli_error($conn));
                  
                  }
                 
                  // SQL query to count total IDs
                  $sql = "SELECT sum(units) AS total FROM blood_donation"; // Change 'your_table' to your actual table name
                  
                  // Execute query
                  $result = $conn->query($sql);
                  
                  // Check if query executed successfully
                  if ($result) {
                      // Fetch the result as an associative array
                      $row = $result->fetch_assoc();
                      
                      // Get the total count
                      $totalCount = $row['total'];
                      
                      // Output the total count
                      echo " " . $totalCount;
                  } else {
                      echo "Error executing query: " . $conn->error;
                  }
                  
                  // Close the connection
                  $conn->close();
                  ?>
                  
       
       
       
               </div>
           
           </div>
    </div>
    
   </div>
         <!-- **********   DONOR REGISTRATION AND TOTAL BLOOD AVIALABLE FINISH -->
         
<br><br>


   


           


   <!-- second image -->
   <h2 style="text-align: center; background-color: rgb(24, 35, 65); padding: 0.5em; color: white;"> Learn About Blood Donating</h2>
<br><br>

   <div class="secondimg">


    <img src="./css/priyanshu/3lives.png" alt="">
   
        <div class="text"> 
            After donating blood,the blood works to replenish the bloodloss. 
    This stimulates the product of new blood cells and in turn,  hepl in maintaining good health.
    <br><br>
    <div data-aos="zoom-in-left">  <button ><a href="./actions/donorlogin.html">Donate blood</a></button></div>
  
    </div>
    </div>


   </div>
<br>
<br><br>
   <div class="table">
    
           <!--           COMPATIBLE BLOOD GROUP         -->
           <table>
            <tr>
            <caption style="background-color:rgb(24, 35, 65); color: white;font-size: 2em; padding: 0.4em;">Compatible Blood Type Donors</caption></tr>
            <tr>
                <th>Blood Type</th>
                <th>Donate Blood To</th>
                <th>Receive Blood From</th>
            </tr>
            <tr>
                <td style="color: rgb(127, 10, 10); font-style: bold; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 1.2em;">A+</td>
                <td>A+ AB+</td>
                <td>A+ A- O+ O-</td>
            </tr>
            <tr>
                <td style="color: rgb(127, 10, 10); font-style: bold; font-size: 1.2em;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >O+</td>
            <td>O+ A+ B+ AB+</td>
            <td>O+ O-</td>
            </tr>
            <tr>
                <td style="color: rgb(127, 10, 10); font-style: bold; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 1.2em;">B+</td>
                <td>B+ AB+</td>
                <td>B+ B- O+ O-</td>
            </tr>
            <tr>
                <td style="color: rgb(127, 10, 10); font-style: bold; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 1.2em;">AB+</td>
                <td>AB+</td>
                <td>Everyone</td>
            </tr>
            <tr>
                <td style="color: rgb(127, 10, 10); font-style: bold; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 1.2em;">A-</td>
                <td>A+ A- AB+ AB-</td>
                <td>A- O-</td>
            </tr>
            <tr>
                <td style="color: rgb(127, 10, 10); font-style: bold; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 1.2em;">O-</td>
                <td>O-</td>
                <td>O-</td>
            </tr>
            <tr>
                <td style="color: rgb(127, 10, 10); font-style: bold; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 1.2em;">B-</td>
            <td>B+ B- AB+ AB-</td>
             <td>B- O-</td>
        </tr>
        <tr>
            <td style="color: rgb(127, 10, 10); font-style: bold; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 1.2em;">AB-</td>
            <td>AB+ AB-</td>
            <td> AB- A- B- O-</td>
    
        </tr>
    
        </table>
   </div><br>

   <!-- table complete -->
<!-- three circle -->
<div class="container2">
    <div data-aos="fade-right"> <div class="circle1" >
        <a href="./index blood availability.php" style="text-decoration:none;font-size:large;color: red;
    ">
            <img src="css/images/—Pngtree—blood donation hand icon vector_7426344.png" alt="">
          <b> Blood Availability</b></a> 
        </div></div>
    
        <div data-aos="zoom-in">
            <div class="circle2">
        
                <a href="./patient/patientlogin.html" style="text-decoration:none;font-size:large;color: red;
        ">
                <img src="css/priyanshu/drop.png" alt="">
        <b>Request Blood</b></a></div>
        </div>
<div data-aos="fade-left">
    <div class="circle3">
        <a href="./actions/donorlogin.html" style="text-decoration:none;font-size:large;color: red;
">
        <img src="css/images/pngwing.com (1).png" alt="">
    <b>Donate Blood</b></a></div>
</div>
   
   </div>
   <!-- three circle complete -->


   <div class="types">
 <h1>TYPES OF DONATION</h1><br>
        <p>The average human body contains about five liters of blood, which is made of several cellular and non-cellular components such as <b>Red blood cell, Platelet, and Plasma.</b><br>
            Each type of component has its unique properties and can be used for different indications. The donated blood is separated into these components by the blood centre and one donated unit can save upto four lives depending on the number of components separated from your blood.</p>
   
    </div>

    
   

    <!-- red blood donation -->
<div class="donationtype">
    <button id="wholeblood" >wholeblood</button>
    <button id="Plasma">Plasma</button>
    <button id="Platelet">Platelet</button><hr>
    
    
    <div id="panel1">
        <!-- about whole blood -->
        <div class="section1">
           <h2 style="text-align: center; color: red;"> What is it?</h2><br>
<p>
    Blood Collected straight from the donor into a blood bag and mixed with an anticoagulant is called as whole blood. This collected whole blood is then centrifuged and red cell, platelets and plasma are separated. The separated Red cells are mixed with a preservative to be called as packed red blood cells.

</p>        </div>
<div class="section2"><br>
   
<h2 style="text-align: center; color: red;"> Who can donate?</h2><br>
<p>
    You need to be 18-65 years old, weight 45kg or more and be fit and healthy.
</p>
</div>
<div class="section3"><br>
    <h2 style="text-align: center; color: red;">User For?</h2><br>
    <p>Correction of severe anemia in a number of conditions and blood loss in case of child birth, surgery or trauma settings.</p>
</div>
<div class="section4"><br>
    <h2 style="text-align: center; color: red;">Lasts For?</h2><br>
    <p>Red cells can be stored for 42 days at 2-6 degree celsius.</p>
</div>
<div class="section5"><br>
    <h2 style="text-align: center; color: red;">How long does it take to donate?</h2><br>
    <p>15-30 minutes to donate.including the pre-donation check-up.</p>
</div>
<div class="section6"><br>
    <h2 style="text-align: center; color: red;"">How often can I donate?</h2><br>
    <p>Male donors can donate again after 90 days and female donors can donate again after 120 days.</p>
</div>
     
    </div>
    
   
    <div id="panel2">
      <div class="section1"><br>
        <h2 style="text-align: center; color: red;">What is it? </h2><br>
        <p>The straw-coloured liquid in which red blood cells, white blood cells, and platelets float in is called plasma.Contains special nutrients which can be used to create 18 different type of medical products to treat many different medical conditions. Plasma can be obtained from the collected whole blood after red blood cells and platelets have been separated. Additionally, it can also be collected using an apheresis equipment where other components are returned to the donor. The former is a common method of plasma preparation in our country.</p>
      </div>
      <div class="section2"><br>
        <h2 style="text-align: center; color: red;">Who can donate? </h2><br>
        <p>The donation criteria is similar to that of red blood cell. However, for apheresis plasma collection minimum weight is 50 kgs.</p>
      </div>
      <div class="section3"><br>
        <h2 style="text-align: center; color: red;"> User For?</h2><br>
        <p>Used for bleeding patients with coagulation factor deficiency such as hemophilia A and B, von willibrand disease etc. also used in cases of blood loss due to trauma.</p>
      </div>
      <div class="section4"><br>
        <h2 style="text-align: center; color: red;">Lasts For? </h2><br>
        <p>Plasma after separation if frozen below -30 degrees can be stored up to one year.</p>
      </div>
      <div class="section5"><br>
        <h2 style="text-align: center; color: red;"> How long does it take?</h2><br>
        <p>15-30 minutes to donate including the pre-donation check-up.</p>
      </div>
      <div class="section6"><br>
        <h2 style="text-align: center; color: red;">How often can I donate? </h2><br>
        <p>similar to the red cell donation.</p>
      </div>
    </div>
    
    
    <div id="panel3">
       
            <div class="section1"><br>
                <h2 style="text-align: center; color: red;">What is it?</h2><br>
                <p>These are cellular elements in blood which wedge together to help to clot and reduce bleeding. Always in high demand, Vital for people with low platelet count, like hematology and cancer patients.</p>
            </div>
            <div class="section2"><br>
                <h2 style="text-align: center; color: red;">Who can donate?</h2><br>
                <p>One can donate whole blood from which the blood centre will separate platelets from other components. Criteria similar to whole blood donation apply. Alternatively, one can donate using apheresis equipment where only platelets are collected and rest components are returned back to donate. One need to satisfy whole blood criteria and pre- donation screening which include negative infectious markers and platelet count >1,50,000 per microlitre of blood. Weight should be >50kgs.</p>
            </div>
            <div class="section3"><br>
                <h2 style="text-align: center; color: red;">User For?</h2><br>
                <p>Conditions with very low platelet count such as Cancer, blood diseases, trauma, dengue etc.</p>
            </div>
            <div class="section4"><br>
                <h2 style="text-align: center; color: red;">Lasts For?</h2><br>
                <p>can be stored for 5 days at 20-24 degree celsius.</p>
            </div>
            <div class="section5"><br>
                <h2 style="text-align: center; color: red;">How does it work?</h2><br>
                <p>We collect your blood, keep platelet and return rest to you by apheresis donation.</p>
            </div>
            <div class="section6"><br>
                <h2 style="text-align: center; color: red;">How long does it take?</h2><br>
                <p>45-60 minutes to donate. 2-3 hours for pre-donation screening.</p>
            </div>
            <div class="section7"><br>
                <h2 style="text-align: center; color: red;">How often can I donate?</h2><br>
                <p>Every 2 weeks but should not exceed more than 24 times in a year.

                </p>
            </div>
         <hr>
 </div>
</div>
<br><br><br>

   <!-- footer html start -->
    
   <footer>
    <div class="footer">
        <div class="divfooter">
            <h3>About us</h3>
             <p>Welcome to Red Wings, an innovative blood bank management system designed to revolutionize the way blood banks operate. In an era where every drop of blood counts, efficient management of blood inventory, donor information, and distribution processes are paramount. Red Wings offers a comprehensive solution tailored to meet the unique needs of blood banks, ensuring smooth operations, enhanced accessibility, and ultimately, saving lives. </p>
    
        </div>
        <div class="divfooter"><h3> Links </h3>
        <ol>
            <li><a href="./index.html">
                   Home</a></li>
            <LI><a href="./patient/patientlogin.html">Patient</a></LI>
            <li><a href="./actions/donorlogin.html"></i>Donor</a></li>
            <li><a href="./about page/about page.html">About Us</a></li>
        </ol>
        </div>
        <div class="divfooter">
            <h3 style="color: aliceblue;">Address</h3

       <h3 style="color: aliceblue; text-align: center;">
                BLOOD BANK MANAGEMENT SYSTEM </h3><br>
            <p style="font-size:13px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, dicta...</p>
           
            
        </div>
    </div><br>
    <hr>
<div class="links">

<a href="https://www.instagram.com/blood_donation_welfare_/"><i class="fa-brands fa-square-instagram" style="color: #d4497a; font-size: 30px;"></i>
</a>
<a href="mailto:tamannakarthol320@gmail.com" target="_blank"><i class="fa-solid fa-envelope" style="color: #035ca0; font-size: 30px;"></i></a>

<a href="https://youtu.be/1yb7QzpHAQo?si=bXLmZK4Dv_kyS2aR" target="_blank"><i class="fa-brands fa-youtube" style="color: #f90101; font-size: 30px;"></i></a>

<a href="tel:+918894097320" target="_blank"><i class="fa-solid fa-phone" style="color: #041981; font-size: 30px;"></i></a>

</div>
    <div class="copyright">
        <hr>
    <p style="text-align: center; color: white;">copyright@ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium nemo minima vero adipisci quisquam eaque molestias, repellendus,</p>
    <hr>
    </div>
    </footer>
<script src="./server.js"></script>
<!-- aos animation -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>