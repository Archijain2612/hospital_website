<?php

   $connection = mysqli_connect('localhost','root','','hospital');
   if($connection) {
    echo "connected";
   }

   if(isset($_POST)){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $Appointment_request = $_POST['Appointment_request'];
      $Morning_desired = $_POST['Morning_desired'];
      $Afternoon_desired = $_POST['Afternoon_desired'];
      $Confirmation_requested_by = $_POST['Confirmation_requested_by'];
     
     

      $request = " insert into hospital(`name`,  `email`, `phone`,`Appointment_request`,`Morning_desired`,`Afternoon_desired`,`Confirmation_requested_by`) values('$name','$email','$phone','$Appointment_request','$Morning_desired','$Afternoon_desired','$Confirmation_requested_by')";
      $result=mysqli_query($connection, $request);
      if(!$result){
        echo mysqli_connect_error();
      }

         header('location:make an appointment.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
   ?>