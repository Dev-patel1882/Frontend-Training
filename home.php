<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
   <link rel="stylesheet" type="text/css" href="home.css">
    

    <title>Hello, world!</title>
    <style type="text/css">
      /* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
  display: block;
}
body {
  line-height: 1;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}


* {
  box-sizing: border-box;
}
.topbar{
  height: 30px;
  background-color: #7E5A85;
}

.navbar{
  height: 100px;
  background-color: #ffffff;
}

.logo{
  margin-top: 10px;
  margin-left: 50px;
  width: auto;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #ffffff;
  height: 100px;
  float: right;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin-top: 40px;
  padding-left: 10px;
  font-size: 20px;
  color: #7E5A85;
  font-weight: bold;
}

.banner-main{
  background-image: url("images/3491708_02.jpg");
  background-repeat: no-repeat;
  background-size: 100% auto;
  width: 100%;
  height: 800px;
}

.banner-middel{
  background-image: url("images/3491708_03.png");
  background-repeat: no-repeat;
  background-position:center 50px;
  width: 100%;
  height: 800px;
/*  margin-left: 280px;*/
  padding-top: 100px;
  margin-top: 108px

}

.banner-text{
   
    margin-top: 200px;
    text-align: center;
}
.banner-title{
  font-size: 10px;
}

.half-round-img{
  background-image: url("images/3491708_02.png");
   background-position:center 0px;
   background-repeat: no-repeat;
   background-size: 100% auto;
  width: 100%;
  height: 230px;
}

.half-round-img-text{
    text-align: center;
}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.third-sec{
    background-image: url("images/3491708_021_02.jpg");
    background-repeat: no-repeat;
    background-size: 100% 1123px;
    
    height: 1123px;
    background-position:left 0px;
}

.discount{
  
  background-position: center;
  margin-left: 100px;
}
.forth-sec{
  width: 100%;
  height: 500px;
  background-image: url("images/34917083_02.png");
  background-repeat: no-repeat;

}
.forth-img{
  background-image: url("images/34917082_03.jpg");
  background-repeat: no-repeat;
  background-size: 100% auto;
  background-position: center 10px;

  height: 500px;
  margin-top: 150px;
}

.fifth-sec{
  width: 100%;
  height: 400px;
  background-image: url("images/34917083_03.png");
  background-repeat: no-repeat;
  background-position: right;
}



.fifth-sec-img{
  background-image: url("images/34917082_03.jpg");
  background-repeat: no-repeat;
  background-size: 100% auto;
  background-position: center 10px;
  height: 500px;
  margin-top: 150px;

}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.seven-img{
  background-image: url("images/34917082_03.jpg");
  background-repeat: no-repeat;
/*  background-size: 100% auto;*/
  background-position: center ;
 background-size: contain;
  height: 500px;
}

.btn{
  width: 100px;
  height: 50px;
  background-color:#7E5A85;
  color:white;
  border-radius: 10px;
}

.img-sec-last{
  background-image: url("images/34917082_03.jpg");
  background-repeat: no-repeat;
  background-size: 100% auto;
  width: 100%;
  height: 400px;
}

.footer-img{
  background-image: url("images/349170866_02.png");
  background-size: 100% auto;
  background-repeat: no-repeat;
  background-position: center 0px;
  height: 500px;
}
.footer-h2{
          padding-top: 20%;
    text-align: center;
    font-size: 18px;
    width: 451px;
    margin-left: 416px;
    color: #7E5A85;

    letter-spacing: 2px;
}
.f-sec1{
      width: 400px;
    font-size: 20px;
    color: #7E5A85;
    margin-left: 176px;
    margin-top: 75px;
}
.f-sec2{
       margin-left: 931px;
    font-size: 20px;
    color: #7E5A85;
    margin-top: -104px;
}

.f-sec3{
       margin-left: 1136px;
    font-size: 20px;
    color: #7E5A85;
    margin-top: -104px;
}

.f-sec4{
         margin-left: 700px;
    font-size: 20px;
    color: #7E5A85;
    margin-top: -104px;
}
.page_wrapper{
    max-width: 1290px;
    padding: 0px 0px;
    margin: 0px auto;
}

    </style>
  </head>
  <body>
    <div class="page_wrapper">
       <div class="topbar" style="">

       </div>  
    </div>
    
  

     <div class="page_wrapper">
       <nav style="background-color:fff;">
       <ul style="float: left;color: fff;width: 25%;border: 0px;">
            <li><img src="images/logo_03.png" class="logo"></img></li>
        </ul>
        <ul class="float:right" style="width: 75%;border: 0px;">    
            <li><a class="active" href="#home" style="margin-left: 400px;">Home</a></li>
            <li><a href="#home" style="margin-left:20px;"><b>Class</b></a></li>
            <li><a href="#news" style="margin-left:20px;">Promo</a></li>
            <li><a href="#contact" style="margin-left:20px;">Online Class</a></li>
            <li><a href="#about" style="margin-left:20px;">Contact</a></li>
         </ul>
        </nav>
      </div>
  

<div class="page_wrapper">
   <div class="banner-main">
      <div class="banner-middel">
         <div class="banner-text">
           <h1 class="banner-title"><spen style="font-size: 38px;color: #7E5A85;">Healthy</spen> <spen style="font-size: 22px;color: #7E5A85;"> & </spen><spen style="font-size: 38px;color: #7E5A85;"> Fresh</spen></h1>
           <h1 style="font-size:38px;margin-top: 2%;color: #7E5A85;letter-spacing: 7px;"><b>YOGA</b></h1>
         </div>
      </div>
   </div>
</div>

<div class="page_wrapper">
  <div class="half-round-img">
     <div class="half-round-img-text">
        <h1 style="font-size: 38px;padding-top: 65px;color: #7E5A85;letter-spacing: 3px;">MEET OUR</h1>
       <ht style="font-size: 38px;margin-top: 0px;color: #7E5A85;letter-spacing: 3px;"><b>YOGA CLASSES</b></ht>
     </div>
   </div>
</div>


<div class="page_wrapper">
    <div class="third-sec">
    <div class="discount">
       <img src="images/34917081_03.png" >
    </div>
    <div class="third-sec-text" style="margin-top:11%">
       <h1 style="font-size:34px;margin-left:8%;letter-spacing: 2px;color: #ffffff;"><b>SUMMER</b></h1>
       <h1 style="font-size:34px;margin-left:8%;letter-spacing: 3px;color: #ffffff;">CLASS</h1>

       <p style="font-size:13px;margin-left:8%;letter-spacing: 2px;color: #ffffff;margin-top:20px;">24.12.2020</p>
       <p style="font-size:13px;margin-left:8%;letter-spacing: 2px;color: #ffffff;">24.03.2021</p>
    </div>
    
  </div>
</div>
   


   <!-- <div class="row">
      <div class="column" style="background-color:#aaa;">
         <img src="images/3491708_03.jpg">
      </div>
      <div class="column" style="background-color:#bbb;">
         <img src="images/34917082_03.jpg">
      </div>
      <div class="column" style="background-color:#ccc;">
        <img src="images/3491708_021_02.jpg">
      </div>
  </div> -->

 
<div class="page_wrapper">
  <div class="forth-sec">
     <div class="row">
      <div class="column" style="margin-top: 10%;margin-left:10%;">
        
        <h1><b style="color: #7E5A85;font-size: 30px;">PRACTICE</b></h1>
        <H1 style="color: #7E5A85;font-size: 30px;">DYNAMICS</H1>

        <h2 style="margin-top: 10%;font-size:25px;color: #7e5a85;">1. HATHA YOGA</h2>
        <p style="margin-top:3%;color: #7e5a85;font-size: 20px;">Hatha is the most classic yoga. its origin is in the raya Yoga or Patanjali and other classical texts such as Bagvad Gita and Hatha Yoga Pradipika.</p>
        <br>
        <hr style="background-color: red;"><br>
        <p style="color:#7e5a85;">10 modules</p>
        <p style="color:#7e5a85;font-size: 17px;">divide into 5 weekends</p>
        <p style="font-size: 15px;word-spacing: 5px;margin-top: 10px;color:#7e5a85;">Start Price</p>
        <p style="font-size: 15px;word-spacing: 5px;margin-top: 10px;color:#7e5a85;">April 15   $900</p>
        <p style="font-size: 15px;word-spacing: 5px;margin-top: 10px;color:#7e5a85;">20.00hr</p>
      </div>
      <div class="column" style="margin-left:10%;margin-top:10px;padding-right: 20px;width: 3;">
        <div class="forth-img"></div>
        <!-- <img src="images/34917082_03.jpg" style="height: 400px;width: 100%;margin-top: 100px;"> -->
      </div>
    </div>
</div>
  
</div>    

    
<div class="page_wrapper">
   <div class="fifth-sec">
  
<div class="row" style="margin-left:10%;">
  <div class="column" style="background-color:#fff;">
    <!-- <img src="images/34917082_03.jpg" style="height: 400px;width: 100%;margin-top: 100px;"> -->
    <div class="fifth-sec-img">
      
    </div>
  </div>
  <div class="column" style="background-color:#fff;margin-left: 20%;margin-top: 10%;">
    <h1><b style="color: #7E5A85;font-size: 30px;">POSITIONS</b></h1>
        <H1 style="color: #7E5A85;font-size: 30px;">DYNAMICS</H1>

        <h2 style="margin-top: 10%;font-size:25px;color: #7e5a85;">2. KUNDALINI YOGA</h2>
        <p style="margin-top:3%;color: #7e5a85;font-size: 20px;">Kundalini is the most classics yoga in emgin is in Raya Yoga of Patanjali and other classical texts such as Bhagvad Gita and Hatha Yoga Pradipika</p>
        <br>
        <hr style="background-color: red;"><br>
        <p style="color:#7e5a85;">17 modules</p>
        <p style="color:#7e5a85;font-size: 17px;">divide into 5 weekends</p>
        <p style="font-size: 15px;word-spacing: 5px;margin-top: 10px;color:#7e5a85;">Start Price</p>
        <p style="font-size: 15px;word-spacing: 5px;margin-top: 10px;color:#7e5a85;">April 15   $900</p>
        <p style="font-size: 15px;word-spacing: 5px;margin-top: 10px;color:#7e5a85;">20.00hr</p>
  </div>
</div>

</div>  
</div>

<div class="page_wrapper">
   <div class="row" style="margin-top:200px;text-align: center;padding: 100px;">
  <div class="column" style="background-color:#fff;">
    <hr width="90%;" align="right">

    <img src="images/34917083_0311_03.png" style="margin-top: 5%">

    <h1 style="margin-top:20px;font-size:24px;color:#7E5A85"><strong>Exercise</strong></h1>

    <p style="color:#7E5A85;margin-top:5%;">Kundalini is the most classics yoga in emgin is in Raya Yoga of Patanjali and other classical texts such as Bhagvad Gita and Hatha Yoga Pradipika</p>
  </div>
  <div class="column" style="background-color:#fff;">
    <h2 style="align-items: center;
    margin: auto;
    font-size: 20px;
    color: #7E5A85;">HEALTHY</h2>
    
    

    <img src="images/34917083_0311_03.png" style="margin-top: 5%">


    <h1 style="margin-top:20px;font-size:24px;color:#7E5A85"><strong>Fading</strong></h1>

     <p style="color:#7E5A85;margin-top:5%;">Kundalini is the most classics yoga in emgin is in Raya Yoga of Patanjali and other classical texts such as Bhagvad Gita and Hatha Yoga Pradipika</p>
  </div>
  <div class="column" style="background-color:#fff;">
    <hr width="90%;" align="left">

    <img src="images/34917083_0311_03.png" style="margin-top: 5%;">

    <h1 style="margin-top:20px;font-size:24px;color:#7E5A85"><strong>Maditation</strong></h1>

       <p style="color:#7E5A85;margin-top:5%;">Kundalini is the most classics yoga in emgin is in Raya Yoga of Patanjali and other classical texts such as Bhagvad Gita and Hatha Yoga Pradipika</p>
  </div>
</div>

  
</div>




<div class="page_wrapper">
   <div style="text-align: center;margin-top: 0px;">
   <h1 style="font-size:30px;font-style: oblique;color: #7E5A85;">LOOK AT OUR</h1>
   <h1 style="font-size:30px;color: #7e5a85;letter-spacing: 2px;">SUMMER CLASSES</h1>
</div>  
</div>


<div class="page_wrapper">
  <div class="row" style="padding:100px;">
      <div class="column" style="background-color:#fff;">
        <div class="seven-img">
         </div>
         <h1 style="font-size:20px;text-align: left;color: #7E5A85;">Anusara</h1>
         <p style="text-align:left;margin-top:10px;color: #7E5A85;">most classics yoga in emgin is in Raya Yoga of Patanjali and other classical texts such as Bhagvad Gita and Hatha Yoga Pradipika</p>
         <hr>
         <h1 style="text-align:left;">Monday<strong> 20:00 hr</strong></h1>
      </div>
      <div class="column" style="background-color:#fff;">
       <div class="seven-img">
         </div>
         <h1 style="font-size:20px;text-align: left;color: #7E5A85;">Anusara</h1>
         <p style="text-align:left;margin-top:10px;color: #7E5A85;">most classics yoga in emgin is in Raya Yoga of Patanjali and other classical texts such as Bhagvad Gita and Hatha Yoga Pradipika</p>
         <hr>
         <h1 style="text-align:left;"><strong>Saturday 20:00 hr</strong></h1>
      </div>
      <div class="column" style="background-color:#fff;">
          <div class="seven-img">
         </div>
         <h1 style="font-size:20px;text-align: left;color: #7E5A85;">Anusara</h1>
         <p style="text-align:left;margin-top:10px;color: #7E5A85;">most classics yoga in emgin is in Raya Yoga of Patanjali and other classical texts such as Bhagvad Gita and Hatha Yoga Pradipika</p>
         <hr>
         <h1 style="text-align:left;"><strong>Friday 20:00 hr</strong></h1>
      </div>
    </div>
</div>

    
<div class="page_wrapper">
  <div class="row" style="margin-top:30%;padding: 40px;align-items: center;margin-left: 20%;">
    <div class="column" style="background-color:#fff;margin-top: 60px;">
      <h2 style="font-size:24px;color:#7E5A85"> YOGA INITIATION</h2>
      <h5 style="color:#7E5A85;font-size:24px;latter-specing:2px;">WORKSHOP</h5>
      <p style="margin-top:20px;color:#7E5A85;">TRY YOUR FIRST </p>
      <p style="color:#7E5A85;">FREE YOGA CLASS</p>
    </div>
  <div class="column" style="background-color:#fff;">
     <div class="img-sec-last"></div>
  </div>
</div>

</div>

   


 <div class="page_wrapper">
   <div class="footer-img">
       <h2 class="footer-h2">THE ASANAS PURIFY OUR BODY AND KEEP IT HEAL THY , MAKING IT A SUITABLE VEHICLE FOR THE SOUL</h2>
       <div class="f-sec1">
         <h3>About</h3>
         <br>
         <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s</p>
       </div>
       <div class="f-sec2">
         <h1>About</h1>
         <br>
         <p>Team</p>
         <p>Join us</p>
         <p>Ethic</p>
         <p></p>
       </div>
       <div class="f-sec3">
         <h1>About</h1>
         <br>
         <p>Team</p>
         <p>Join us</p>
         <p>Ethic</p>
         <p></p>
       </div>
       <div class="f-sec4">
         <h1>About</h1>
         <br>
         <p>Team</p>
         <p>Join us</p>
         <p>Ethic</p>
         <p></p>
       </div>
    </div>
 </div>
    
  </body>
</html>