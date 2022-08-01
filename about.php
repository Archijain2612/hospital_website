<!DOCTYPE html>
<html>

<head>
	<title>About us Page</title>
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
</div>

</header>
<div>
<div class="about">
  <br><h1>ABOUT US</h1></br>
  <p>Our team of highly trained professionals uses the latest healing technologies to restore you to pain-free health, quickly and easily. We thoroughly evaluate & treat all of the contributing root factors related to your issue. This includes, but is not limited to, your work and home stressors, overall body condition, nutrition, genetic & postural habits, emotional connections and patterns that are held in your muscles.</p>
</div>


<div class="person">
    <div class="container">
      <div class="container-inner">
        <img
          class="circle"
          src="Dr-Shubhanshu-Jain.jpg";
        />
      </div>
    </div>
    <div class="divider"></div>
    <div class="name">Dr.Shubhanshu Jain</div>
    <div class="title">MBBS, MS ORTHO</div>
  </div>
  <div class="person">
    <div class="container">
      <div class="container-inner">
        <img
          class="circle"
          src="Dr-siddarth-sethi.jpg";
        />
      </div>
    </div>
    <div class="divider"></div>
    <div class="name">Dr.Siddharth sethi</div>
    <div class="title">MBBS, MD (Medicine) DNB Cardiology</div>
  </div>
  <div class="person">
    <div class="container">
      <div class="container-inner">
        <img
          class="circle"
          src="Dr-kailash-chand-sethi.jpg";
       
          />
      </div>
    </div>
    <div class="divider"></div>
    <div class="name">Dr.Kailash chand sethi</div>
    <div class="title">MBBS,MD(Medicine)</div>
  </div>
</div>	
</body>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Sumana:wght@700&display=swap");
body {
  align-items: center;
  background-color: #f2f2f2;
  display: flex;
  font-family: "Merriweather", serif;
  flex-wrap: wrap;
  justify-content: center;
  height: 100vh;
  margin: 0;
  background-image: url("about.png");
  
}

header{
 width: 100%;
 height: 10ch;
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
 padding-left: 100px; 
 
 
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
.person {
  align-items: center;
  display: flex;
  flex-direction: column;
  width: 280px;
  margin-left: auto;
  margin-right: auto;
}
.container {
  border-radius: 50%;
  height: 312px;
  -webkit-tap-highlight-color: transparent;
  transform: scale(0.48);
  transition: transform 250ms cubic-bezier(0.4, 0, 0.2, 1);
  width: 400px;
}
.container:after {
  background-color: #f2f2f2;
  content: "";
  height: 10px;
  position: absolute;
  top: 390px;
  width: 100%;
}
.container:hover {
  transform: scale(0.54);
}
.container-inner {
  clip-path: path(
    "M 390,400 C 390,504.9341 304.9341,590 200,590 95.065898,590 10,504.9341 10,400 V 10 H 200 390 Z"
  );
  position: relative;
  transform-origin: 50%;
  top: -200px;
}
.circle {
  background-color: #fee7d3;
  border-radius: 50%;
  cursor: pointer;
  height: 380px;
  left: 10px;
  pointer-events: none;
  position: absolute;
  top: 210px;
  width: 380px;
}
.img {
  pointer-events: none;
  position: relative;
  transform: translateY(20px) scale(1.15);
  transform-origin: 50% bottom;
  transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
  margin-left: auto;
}
.container:hover .img {
  transform: translateY(0) scale(1.2);
}
.about{
  position:center;
  top:50px;
}
.img1 {
  left: 22px;
  top: 164px;
  width: 340px;
  display: flex;
  justify-content: center;
 position: center;

  
}
.img2 {
  left: -46px;
  top: 174px;
  width: 444px;
}
.img3 {
  left: -16px;
  top: 144px;
  width: 466px;
}
.divider {
  background-color: #ca6060;
  height: 1px;
  width: 160px;
}
.name {
  color: #404245;
  font-size: 36px;
  font-weight: 600;
  margin-top: 16px;
  text-align: center;
}
.title {
  color: #6e6e6e;
  font-family: arial;
  font-size: 14px;
  font-style: italic;
  margin-top: 4px;
}
.about{
 margin-top: 20px;
}
.about h1{
  text-align: center;
}
.about p{
  text-align: center;
}


</style>
</html>
