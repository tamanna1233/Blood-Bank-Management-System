
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

// ======== type of blood buttons=======//

let wholeblood = document.getElementById("wholeblood");
    let panel1 = document.getElementById("panel1");
    let panel2 = document.getElementById("panel2");
    let panel3 = document.getElementById("panel3");
    let plasma =document.getElementById("Plasma");
    let Platelet =document.getElementById("Platelet")
    wholeblood.onclick = function() {
      panel1.style.display = "block";
      panel2.style.display = "none";
      panel3.style.display = "none";
    }
   
    Plasma.onclick = function() {
      panel1.style.display = "none";
      panel2.style.display = "block";
      panel3.style.display = "none";
    }
    Platelet.onclick = function() {
      panel1.style.display = "none";
      panel2.style.display = "none";
      panel3.style.display = "block";
    }




//    

//  toogle clicked on button click
















// <!-- patient login form -->

  function openpatientloginform(){
    // Show the login form container
    document.getElementById('patientloginformcontainer').style.display;'block';
  }

    //    <!-- loGin form -->
    
        function validateLogin() {
          var username = document.getElementById('username').value;
          var password = document.getElementById('password').value;
      
          // Perform simple validation (you may want to use more secure methods)
          if (username === 'tamanna@gmail.com' && password === '8894097320') {
            alert('Login successful!');
            // Redirect or perform other actions after successful login
            window.location.href = 'patientdashboard.html';
            
            if(username ==='taniya@gmail.com' && password ==='987654321'){

                alert('login successfuly');
                // Redirect or perform other actions after successful login
                window.location.href='dashboard.php';
            }
          } else {
            alert('Invalid username or password. Please try again.');
          }
        }
    

//   donor login form javascript


function opendonorloginform(){
        // Show the login form container
        document.getElementById('donorloginformcontainer').style.display = 'block';

}

// login form of donor

function validateLogin2(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

// Perform simple validation (you may want to use more secure methods)
if(username ==='taniya@gmail.com' && password ==='987654321'){
    alert('login successfuly');
    // Redirect or perform other actions after successful login
    window.location.href='donordashboard.html';

    if(username ==='tamanna@gmail.com' && password ==='8894097320'){

        alert('login successfuly');
        // Redirect or perform other actions after successful login
        window.location.href='dashboard.php';
    }
    }

else{
    alert('invalid username or password. Please try again.');
}}


// admin login form
//   admin login form javascript


function openadminloginform(){
    // Show the login form container
    document.getElementById('adminloginformcontainer').style.display = 'block';

}

              // login form of donor

function validateLogin3(){
var username = document.getElementById('username').value;
var password = document.getElementById('password').value;

// Perform simple validation (you may want to use more secure methods)
if(username ==='taniya@gmail.com' && password ==='987654321'){
alert('login successfuly');
// Redirect or perform other actions after successful login
window.location.href='dashboard.php';
    if(username ==='tamanna@gmail.com' && password ==='8894097320'){

        alert('login successfuly');
        // Redirect or perform other actions after successful login
        window.location.href='dashboard.php';
    }
}
    
else{
alert('invalid username or password. Please try again.');
}
}

// sumit  patient registration form

function openpatientlogin(){
  window.open('patientlogin.html','_blank');
}