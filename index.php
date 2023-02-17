<?php 
$title = "Home Page";
include 'header.php'; ?>

<div class="row">
    <div class="col-md-6" style="font-size: 65px; font-weight: bolder; text-align: center; font-family:cursive; color: aliceblue; padding-top: 50px;">
      <p1>It's not just food....<br>
        Its an incredible <br>
        Experience...!</p1>
    </div>
    <div class="col-md-6" style="padding: 40px;"> 
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/stringhoppers2.jpeg" class="d-block w-100" alt="stringhoppers" style="height: 450px; width: 350px;">
            <div class="carousel-caption d-none d-md-block" style="color: cornsilk; font-weight: bold;">
              <h3>String Hoppers</h3>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/idly2.jpg" class="d-block w-100" alt="idly" style="height: 450px; width: 350px;" >
            <div class="carousel-caption d-none d-md-block" style="color:cornsilk; font-weight: bold;">
              <h3>Idly</h3>
              
            </div>
        </div>
          <div class="carousel-item">
            <img src="Images/noodles3.jpg" class="d-block w-100" alt="noodles" style="height: 450px; width: 350px;">
            <div class="carousel-caption d-none d-md-block" style="color:cornsilk; font-weight: bold;">
              <h3>Noodles</h3>
              
            </div>
          </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        </div>
    </div>
    
    <div class="cards" style="padding-top: 40px; padding-bottom: 30px;">
        <div class="card">
            <img src="Images/pittu.jpeg" alt="pittu" style="height: 180px; width: 180px;">
            </div>
    
        <div class="card" >
            <img src="Images/stringhoppers.jpeg" alt="stringhoppers" style="height: 180px; width: 180px;">
            </div>
    
        <div class="card">
            <img src="Images/idly.jpeg" alt="idly" style="height: 180px; width: 180px;">
            </div>
    
        <div class="card">
            <img src="Images/dhosa.jpeg" alt="dhosa" style="height: 180px; width: 180px;">
        </div>
        <div class="card">
            <img src="Images/noodles.jpeg" alt="noodles" style="height: 180px; width: 180px;">
        </div>
        <div class="card">
            <img src="Images/potatos.jpeg" alt="potatos" style="height: 180px; width: 180px;">
        </div>
        </div>

        <div class="cusions">
        <div class="row" style="font-size: 25px; text-align: center; font-weight: bold; font-style: italic; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: aliceblue;">
            <div class="col-md-4">                
                <a href="http://localhost:81/Team7/srilankan.php">Srilankan</a>
            </div>
            <div class="col-md-4">
              <a href="http://localhost:81/Team7/indian.php">Indian</a>
            </div>
            <div class="col-md-4" >
              <a href="http://localhost:81/Team7/chinese.php">Chinese</a>
            </div>
            <p></p><p></p>
          </div>  
        </div>
    

<?php include 'footer.php'; ?>