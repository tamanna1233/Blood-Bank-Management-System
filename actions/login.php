<?php
include('connect.php');
include('donorreg.php');

 session_start();
if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $password =$_POST['password'];

    $query="SELECT * FROM donor_registration WHERE email='$email' AND password='$password'";
    $run =mysqli_query($conn,$query);
    $row =mysqli_num_rows($run);

    if($row>0){
        header("location:../blood_donation_donor/blooddonationform.html");

    }
    else{
        echo  "<script>alert('wrong id or password');
        window.location.href='../actions/donorlogin.html'</script>";
    }

}

?>