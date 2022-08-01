<?php

   $connection = mysqli_connect('localhost','root','','school');
   if($connection) {
    echo "connected";
   }

   if(isset($_POST)){
      
     
      $email = $_POST['email'];
      $password = $_POST['password'];
      
     

      $request = " insert into login( `email`, `password`) values('$email','$password')";
      $result=mysqli_query($connection, $request);
      if(!$result){
        echo mysqli_connect_error();
      }

         header('location:login1.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
   ?>