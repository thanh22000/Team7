<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
</head>
<body>
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
        background-image: url("Images/Background.jpg");}
    </style>  
    <div class="container">

        <div class="row">
            <div class="col-md-2" style="padding-top: 15px;">
              <img class="img-fluid" src="Images/logonobg.png" alt="logo" style="height: 120px; width: 220px; " > 
            </div>
            <div class="col-md-10"> 

    <h1>We bring the taste of Srilankan foods to Suomi </h1>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost:81/Team7/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href='http://localhost:81/Team7/reservations.php'>Reservation</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Our Menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://localhost:81/Team7/srilankan.php">Srilankan</a></li>
              <li><a class="dropdown-item" href="http://localhost:81/Team7/indian.php">Indian</a></li>                  
              <li><a class="dropdown-item" href="http://localhost:81/Team7/chinese.php">Chinese</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost:81/Team7/gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost:81/Team7/contactus.php">Contact us</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
    </div>
  </nav>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

