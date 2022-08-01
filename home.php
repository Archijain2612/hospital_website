<!DOCTYPE html>
<html>
<head>
 <title></title>

</head>
<body>
<header>
 <div class="mainheader">
  <div class="logo">
   <img src="Priya_hospital-removebg.png";>
  </div>

  <nav>
   <a href="home.php">home</a>
   <a href="service.php">services</a>
   <a href="about.php">about</a>
   <a href="contact.php">contact</a>
  </nav>


  <div class="menubtn">
  <button><a href="Helpline.html">HELPLINE</a></button>


  </div>
 </div>

 <main>
  <section class="left-sec">
   <h2> We Are Here For Your Care</h2>
   <h1>  We The Best Doctors</h1>
   <p>We are here for your care 24/7. Any help just call us.</p>
   <button>
     <a href="Make an appointment.php">Make an appointment</a>
   </button>
  </section>

  
 </main>
</header>
</body>
</html>


<style>

*{
margin: 0; padding: 0;
box-sizing: border-box;
font-family: 'Josefin Sans', sans-serif;
}

header{
 width: 100%;
 height: 100vh;
 background-image: url("+.png"); 
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
 width: 300px; height: 300px;
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
 color: black;
 text-transform: uppercase;
 display: inline-block;
}

/* .menubtn { */
 /* margin-right: 60px; */

.mainheader button {
 padding: 10px 45px;
 text-align: center;
 font-size: 14px;
 color: #fff;
 border: none;
 background-image: linear-gradient(to right,#649bff,#0070fa,#649bff);
 border-radius: 10px;
}


main{
 width: 100%;
 display: flex;
 justify-content: space-between;
 align-items: center;
}

main .right-sec{
 padding-right: 70px;
 width: 1000;
 height: 1000;
}

main .left-sec {
 padding-left: 100px;
}

.left-sec h2{
 font-size: 20px;
 text-transform: capitalize;
 font-weight: lighter;
 color: #242424;
 margin-top: 100px;
}

.left-sec h1{
 font-size: 55px;
 text-transform: capitalize;
 font-weight: 700;
 margin: 15px 0;
}

.left-sec p{
 margin-bottom: 20px;
}

.left-sec button a{
 padding: 15px 45px;
 text-align: center;
 font-size: 14px;
 color: #fff;
 border: none;
 background-image: linear-gradient(#649bff,#0070fa,#649bff);
 border-radius: 10px;
}

