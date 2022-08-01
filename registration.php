<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>best school in india | Myschool.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"media="screen and (max-width:1170px" href="css/phone.css">
    
</head>
<body>
<!-- <centre> <h2> Bcccho ki Pathshala </h2></centre> -->
<table>
<tr>
<td>
 
<!-- <h3> Registration Form</h3> -->
<div class="container">
    <div class="title">Registration Form</div>
    <form action = "#">
<div class="user-details">
<div class="input-box">
<span class="details">Full name</span>
<input type = "text"  placeholder = "Enter the full name">
</div>
<!-- <div class="user-details"> -->
<div class="input-box">
<span class="details">Username</span>
<input type = "text" placeholder = "Enter the user name">
</div>
<div class="input-box">
    <span class="details">E-mail</span>
    <input type = "text" placeholder = "Enter the email">
    </div>
<!-- 
<div class="user-details"> -->
<div class="input-box">
<span class="details">Phone no</span>
<input type = "text"  placeholder = "Enter your phone no">
    </div>

<!-- <div class="user-details"> -->
<div class="input-box">
<span class="details">Password</span>
<input type = "text"  placeholder = "Enter password">
</div>
  
<div class="input-box">
<span class="details">Confirm password</span>
<input type = "text"  placeholder = "Enter confirm password" required>
</div>
</div>
 
<div class="gender-details">
<span class="gender-title">Gender</span>
<div class="category">
  
<label for = "">
    <span class="dot one"></span>
    <span class="gender">Male</span>
</label>


<label for = "">
    <span class="dot one"></span>
    <span class="gender">Female</span>
</label>
<label for = "">
    <span class="dot one"></span>
    <span class="gender">Prefer not to say</span>
</label>
</div>
</div>
<div class="button">
<input type="Submit" value="Register">
</div>




<!-- <label> Full name:- </label>
<label class = "validation-error hide" id = "userNamevalidationError"> </label>
<input type = "text" name = "userName" id = "userName" placeholder = "Enter the user name">
 </div> -->

            </form>
        
        </td>
    </tr>

  </table>
</body>
</html>
<style>
    .title{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-size: large ;
        font-family: poppins,sans-serif;
    }
    body{
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg,#71b7e6,#9b59b6);

    }
   .container{
    max-width: 500px;
    width: 100%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
   }
   .container .title{
    font-size: 25px;
    font-weight: 500;
    
    position: relative;
   }
   .container .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background: linear-gradient(135deg,#71b7e6,#9b59b6);

   }
   .container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    
   }
   form .user-details .input-box{
    margin-bottom: 15px;
      width: calc(100% / 2 - 20px);
      margin: 20px 0 12px 0 ;
   }
   .user-details .input-box .details{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
   }
   .user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
   }
   .user-details .input-box input:focus,
   .user-details .input-box input:valid{
    border-color: #9b59b6;


   }
   form .gender-details .gender-title{
    font-size: 20px;
    font-weight: 500;
   }
   form .gender-details .category{
    width: 80%;
    display: flex;
    margin: 14px 0;
    justify-content: space-between;
   }
   form .gender-details .category label{
    display: flex;
    align-items: center;
   }
   form .gender-details .category .dot{
    height: 18px;
    width: 18px;
    background: #d9d9d9;
    border-radius: 50%;
    margin-right: 10px;
    border-radius: 5px solid transparent;
   }
</style>