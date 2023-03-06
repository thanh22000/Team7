<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/ea68801435.js" crossorigin="anonymous"></script>  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <style>

    
    .container{
      width: 1400px;}
    h1{   
      text-align: center;
      font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
      font-size: 45px;
      color: azure;
      padding-top: 25px;
      padding-bottom: 5px;}
    h2{
      text-align: center;
      font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 30px;
      color: aliceblue;}
    .navbar{
      padding-top: 0;
      padding-bottom: 0;
      font-weight: bolder;}
    .img-fluid{    
      border-radius: 7%;}
    .cards{
      display: grid;
      grid-template-columns: 180px 180px 180px 180px 180px 180px 180px;
      gap: 45px;
      margin: 0 auto;
      padding-top: 10px;}
    .cards img{
      border-radius: 10%;}
    .cards img:hover {  
      border:2px solid red;  
      box-shadow: 0 0 10px #333;  
      -webkit-box-shadow: 0 0 10px #333;  
      -moz-box-shadow: 0 0 10px #333;  
      -o-box-shadow: 0 0 10px #333;  
      -ms-box-shadow: 0 0 10px #333;}
    .cusions{
      text-decoration: underline;}
    .menu{
      display: grid;
      grid-template-columns: 350px 350px 350px;
      gap: 60px;
      justify-content: center;}
    .gallery{
      display: grid;
      grid-template-columns: 350px 350px 350px;
      gap: 60px;
      justify-content: center;}
    * {
      box-sizing: border-box;}
      /* Style the search field */
      form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;}
      /* Style the submit button */
      form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none; /* Prevent double borders */
        cursor: pointer;}
      form.example button:hover {
        background: #0b7dda;}
      /* Clear floats */
      form.example::after {
        content: "";
        clear: both;
        display: table;}
      .menu2{
        display: grid;
        grid-template-columns: 350px 350px 350px;
        gap: 60px;
        justify-content: center;}
      .menu img:hover {  
        border:2px solid red;  
        box-shadow: 0 0 10px #333;  
        -webkit-box-shadow: 0 0 10px #333;  
        -moz-box-shadow: 0 0 10px #333;  
        -o-box-shadow: 0 0 10px #333;  
        -ms-box-shadow: 0 0 10px #333;}
      .menu2  img:hover {  
        border:2px solid red;  
        box-shadow: 0 0 10px #333;  
        -webkit-box-shadow: 0 0 10px #333; 
        -moz-box-shadow: 0 0 10px #333;  
        -o-box-shadow: 0 0 10px #333;  
        -ms-box-shadow: 0 0 10px #333;}
      .container-fluid{
        background-color: bisque;}
      .container-fluid ul li{
        padding: 0 15px; }
      body{
        background-image: url("Images/background.jpg");}
      .backtotop{
        position: fixed;
        width: 50px;
        height: 50px;
        background: #27ae60;
        bottom: 40px;
        right: 50px;
        text-decoration: none;
        text-align: center;
        line-height: 50px;
        color: aliceblue;
        font-size: 22px;}
      .shoppingcart{
        text-decoration: none;
        text-align: center;
        line-height: 50px;
        color: black;
        font-size: 18px;}
      .reservation{
        font-size: 18px ;
      }

      /*fixing the nav bar css */
      nav.sticky{
        position: fixed;
        top : 0;
        left: 0;
        padding: 10px 8%;
        background: #000;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
      nav.sticky ul{
        width : auto;
      }

    </style>
    <script src="../layout/site.js"></script>
</head>
<body>     
<!-- OUR PAGE -->   
<div class="container">
  <div class="row" style="background-color:aliceblue;">
    <div class="col-md-2" style="padding-top: 15px;">
      <img class="img-fluid" src="Images/logonobg.png" alt="logo" style="height: 70px; width: 140px; " > 
    </div>
    <div class="col-md-10"> 
      <h1 id="top" style="color:black;">We bring the taste of Srilankan foods to Suomi </h1>
    </div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar1">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" id ="menu">
            <li class="nav-item">
              <a class="nav-link active" href="http://localhost:81/Team7/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href='#reservation'>Reservation</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Menu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#srilankan">Srilankan</a></li>
                  <li><a class="dropdown-item" href="#indian">Indian</a></li>                  
                  <li><a class="dropdown-item" href="#chinese">Chinese</a></li>
                </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#contact">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#feedback">Leave us Feedback</a>
            </li>
          </ul>
            <a class="shoppingcart" href="#mycart"> <i class="fa-solid fa-cart-shopping"></i> </a>
        </div>
      </div>
      </nav>
    
  </div>
  <!-- FIXING THE NAV BAR CODING --> 
  <script src="site.js"></script>
  <script>
    var navbar1 = document.getElementById("navbar1");
    var menu = document.getElementById("menu");
    window.onscroll = function(){
        if (window.pageYOffset >= menu.offsetTop){
            navbar1.classList.add("sticky");
            }
        else{
            navbar1.classList.remove("sticky");
        }
    }
  </script>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

