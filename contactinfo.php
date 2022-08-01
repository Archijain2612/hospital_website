<?php

   $connection = mysqli_connect('localhost','root','','hospital');
   if($connection) {
    echo "connected";
   }

   if(isset($_POST)){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $Query = $_POST['Query'];
      
     

      $request = " insert into info(`name`, `email`, `phone`,`Query`) values('$name','$email','$phone','$Query')";
      $result=mysqli_query($connection, $request);
      if(!$result){
        echo mysqli_connect_error();
      }

         header('location:contact.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
   ?>