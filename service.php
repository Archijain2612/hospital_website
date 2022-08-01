<!doctype html>
<html lang="en">
  <head>
    <title>Service</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <style>
        body{
  font-family: 'Roboto', sans-serif;
}
/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
.nav-back{
    background: rgba(17, 219, 207,0.8);
    color: #fff;
}
.navbar-brand{
  color: #000;
}
.navbar-brand:hover{
  color: #fff;
}
.nav-link{
  color: #000;
}
.nav-link:hover{
  color:#fff;
}
.navbar-toggler{
  outline: none!important;
}

   
 
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
    height: 80vh;
    background: url("service.png") center center;
    background-size: cover;
    position: relative;
  }
  
  #hero .container {
    padding-top: 80px;
  }
  
  #hero:before {
    content: "";
    background: rgba(0, 0, 0, 0.6);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }
  
  #hero h1 {
    margin: 0 0 10px 0;
    font-size: 48px;
    font-weight: 700;
    line-height: 56px;
    color: #fff;
  }
  
  #hero h2 {
    color: #eee;
    margin-bottom: 40px;
    font-size: 15px;
    font-weight: 500;
    font-family: "Open Sans", sans-serif;
    letter-spacing: 0.5px;
    text-transform: uppercase;
  }
  
  .main-btn {
    font-family: "Poppins", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 28px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 10px;
    border: 2px solid #fff;
    color: #fff;
  }
  
   .main-btn:hover {
    background: #11dbcf;
    border: 2px solid #11dbcf;
    text-decoration: none;
    color:#fff;
  }
   
  /*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
 .service {
    text-align: center;
    padding: 70px 20px 80px 20px;
    transition: all ease-in-out 0.3s;
    background: rgba(17, 219, 207,0.8);
    box-shadow: 0px 5px 90px 0px rgba(3, 117, 111, 0.63);
  }
  
 .service .icon {
    margin: 0 auto;
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: ease-in-out 0.3s;
    position: relative;
    background: #f5f5f5;
    border-radius: 50px;
  }
  
   .service .icon i {
    font-size: 32px;
    transition: 0.5s;
    line-height: 1;
    position: relative;
  }
  
   .service h4 {
    font-weight: 600;
    margin: 10px 0 15px 0;
    font-size: 22px;
  }
  
   .service h4 a {
    color: #000;
    transition: ease-in-out 0.3s;
  }
  
   .service p {
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }
  
    .services i{
    color: #47aeff;
  }



    </style>
    <nav class="navbar navbar-expand-lg nav-back fixed-top" 
    id="mainNav">
      <div class="container">
          <a class="navbar-brand" href="#">Priya Hospital</a>
          <button class="navbar-toggler navbar-toggler-right" type="button"
           data-toggle="collapse" data-target="#navbarResponsive" 
           aria-controls="navbarResponsive" aria-expanded="false" 
           aria-label="Toggle navigation"><i class="fas fa-syringe fa-2x"></i>
           </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" 
                  href="home.php">HOME</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                  <li class="nav-item"><a class="nav-link" 
                    href="service.php">SERVICE</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                  <li class="nav-item"><a class="nav-link" 
                    href="about.php">ABOUT</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  <li class="nav-item"><a class="nav-link" 
                    href="contact.php">CONTACT</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
              </ul>
          </div>
      </div>
  </nav>
   

   <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative">
      <h1>24/7 Care is available</h1>
      <h2>The purpose of these individuals is to ensure that the needs of the residents are met..</h2>
      <a href="#about" class="main-btn">Get Started</a>
    </div>
  </section>
   <section id="services" class="services mt-5 mb-3 py-3">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center">Services</h2>
        <p>Most doctors are affiliated with one or more hospitals where they can perform procedures on the patients they see in their offices. Hospitals offer a variety of services that mainly cover inpatient procedures that require overnight stays or outpatient operations that require anesthesia or use of expensive diagnostic and surgical equipment.

        </p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="service shadow">
            <div class="icon">
                <i class="fas fa-tooth"></i>
            </div>
            <h4><a href="">Dental</a></h4>
            <p>Modern clinics offer the very latest advantages in dental technology and equipment. Doctors are continually trained.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="service c shadow">
            <div class="icon">
                <i class="fas fa-lungs"></i>
            </div>
            <h4><a href="">Lungs</a></h4>
            <p>Creating strong, healthy lungs through exercise helps you to better resist aging and disease. Even if you do develop lung disease down the road, exercise helps to slow the progression and keeps you active longer.

            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="service shadow">
            <div class="icon">
                <i class="fas fa-heart"></i>
            </div>
            <h4><a href="">Heart</a></h4>
            <p>A healthy diet and lifestyle are essential to maintaining a healthy heart.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="service c shadow">
            <div class="icon">
                <i class="fas fa-dna"></i>
            </div>
            <h4><a href="">DNA</a></h4>
            <p>a self-replicating material that is present in nearly all living organisms as the main constituent of chromosomes. It is the carrier of genetic information.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="service shadow">
            <div class="icon">            
          <i class="fas fa-ambulance"></i>
            </div>
            <h4><a href="">Emergency</a></h4>
            <p>Most hospitals provide emergency care for traumas and other serious conditions. Emergency room staffs are prepared to provide triage and stabilize patients until they can be moved to a room or treated and released.</p>
        
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="service shadow">
            <div class="icon">
            <i class="fas fa-allergies"></i>
            </div>
            <h4><a href="">Allergies</a></h4>
            <p>Staying away from the allergen is recommended as it cannot be cured; medications can treat symptoms.</p>
          </div>
        </div>

      </div>

    </div>
  </section>
  </body>
</html>