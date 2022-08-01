<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    }

    header{
    width: 100%;
    height: 800px;
    background-image: url("contact.png");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    }

   .mainheader{
    width: 100%;
    height: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
   
   }
   
   .mainheader .logo img{
    width: 300px; height: 200px;
    padding-left: 60px;
   }
   
   .mainheader nav{
    width: 450px;
    display: flex;
    justify-content: space-around;
    align-items: center;
   }
   
   .mainheader nav a{
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    display: inline-block;
    
   }
   
#contact{
   position: relative;
   top:350px;
   width:70%;
}
#contact1{
   position: relative;
   width: 100%;
   height:800px;
   z-index: -1;
   opacity: 0.7;
}
#contact-box{
   display: flex;
   justify-content: center;
   align-items: center;
   padding-bottom: 34px;
   
}
#contact-box input,
#contact-box textarea{
   width: 100%;
   padding: 0.5rem;
   border-radius: 9px;
   font-size: 1.1rem;

}
#contact-box form{
   width: 35%;
}
#contact-box label{
   font-size: 1.3rem;
   font-family: sans-serif;


}
#footer{
   background: black;
   color: white;
   padding: 9px 20px;
}
/* utility class */
.h-primary{
   font-family: cursive;
   font-size: 3.8rem;
   padding: 12px;
   
}
.h-secondary{
   font-family: cursive;
   font-size: 2.3rem;
   padding: 12px;
}

.btn{
   padding: 6px 20px;
   border: 2px solid white;
   background-color:black;
   color: white;
   margin: 17px;
   font-size: 1.2rem;
   border-radius: 10px;
   cursor: pointer;
   position: absolute;
   left: 350px;
}
.center{
   text-align: center;
}
#contact3{
    right:600px;
}



</style>
<body>
    <div class ="contact1><img src="contact.png"></div>
    <header>

        <nav>
            <div class="mainheader">
                <div class="logo">
                 <img src="Priya_hospital-removebg.png";>
                </div>
        
 <section id="contact">
    <h1 class="h-primary center">Contact Us</h1>
    <div id="contact-box">
        <form action="contactinfo.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name"
                 placeholder="Enter your name">
            </div>
            <div class="form-group">
             <label for="name">Email:</label>
             <input type="email" name="email" id="name"
              placeholder="Enter your email">
         </div> 
         <div class="form-group">
             <label for="name">Phone number:</label>
             <input type="phone" name="phone" id="name"
              placeholder="Enter your phone">
         </div> 
         <div class="form-group">
             <label for="name">Query:</label>
            <textarea name="Query" id="Query" cols="30" rows="10"></textarea>
         </div>
         <div>
         <input type="submit" value="Submit">
         </div>
        </form>
    </div>
    
</section>
    
        <nav><div id="contact3">
            <a href="home.php">home</a>&nbsp;&nbsp;&nbsp;
            <a href="service.php">services</a>&nbsp;&nbsp;&nbsp;
            <a href="about.php">about</a>&nbsp;&nbsp;&nbsp;
            <a href="contact.php">contact</a>&nbsp;&nbsp;&nbsp;</div>
           </nav>

   
</body>
</html>