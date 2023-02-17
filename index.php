<?php 
$title = "Home Page";
include 'header.php'; ?>
<!-- Home Page -->
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
  <br><br>
  </div>  
</div>
<br><br>

<!-- About us -->
<br>
<h2 id="aboutus" style="text-align: center; color:aliceblue;"> ABOUT US </h2>
<br><br><br>

<!-- Gallery -->
<h2 id="gallery" style="text-align:center;">GALLERY</h2><br>
<div class="gallery">
  <div class="card" >
    <img src="Images/gallery4.jpg" alt="pittu" style="height: 550px; width: 400px;">
  </div>
  <div class="card" >
    <img src="Images/gallery5.jpg" alt="stringhoppers" style="height: 550px; width: 400px;">
  </div>
  <div class="card" >
    <img src="Images/gallery8.jpg" alt="idly" style="height: 550px; width: 400px;">
  </div>
</div><br>
<div class="gallery">
  <div class="card" >
    <img src="Images/gallery1.jpg" alt="roti" style="height: 250px; width: 400px;">
  </div>
  <div class="card" >
    <img src="Images/gallery6.jpg" alt="hoppers" style="height: 250px; width: 400px;">
  </div>
  <div class="card" >
    <img src="Images/gallery12.jpg" alt="ricencurry" style="height: 250px; width: 400px;">
  </div>
</div><br>
<div class="gallery">
  <div class="card" >
    <img src="Images/gallery7.jpg" alt="pittu" style="height: 550px; width: 400px;">
  </div>
  <div class="card" >
    <img src="Images/gallery10.jpg" alt="stringhoppers" style="height: 550px; width: 400px;">
  </div>
  <div class="card" >
    <img src="Images/gallery11.jpg" alt="idly" style="height: 550px; width: 400px;">
  </div>
</div><br>
<br><br>

<!-- Reservation --> 
<h2 id="reservation" style="text-align: center; color:aliceblue;">RESERVATION</h2>
<form method = "post" action = "">
    <div class =reservation style="padding-left: 200px; padding-right: 200px; color:aliceblue">
      <div class = "row">
        <div class = "col">
          Name <br> <input type = "text" name="fname" placeholder = "First name"  style="width: 300px;" required> 
        </div>
        <div class = "col">
                <br> <input type = "text" name="lname" placeholder = "Last name" style="width: 300px;" required> 
        </div>
      </div> <br>
      <div class = "row">
        <div class = "col">
          Email <br>  <input type = "email" name="email" style="width: 300px;;" required> 
        </div>
        <div class = "col">
          Phone Number <br> <input type = "tel" name="phonenum" style="width: 300px;" required> 
        </div>
      </div> <br>
      <div class = "row">
        <div class = "col">
          Reservation Date <br>  <input type = "date" name="resdate"  required> 
        </div>
        <div class = "col">
          Time <br> <input type = "time" name="time" min="09:00" max="23:00" step="900" > 
        </div>
      </div> <br>
      <div class = "row">
        <div class = "col">
          Number of guests <br> <input type = "number" name="noguest" required>  
        </div>
        <div class = "col">
          Where do you like to sit? <br> 
          <select name="liketosit">  
            <option value = "inside"> Inside the restaurant </option>
            <option value = "outside"> Outside the restaurant </option> 
          </select>
        </div>
      </div> <br>
      <div class = "row">
        <div class = "col">
          Special Notes (If any special arrangements needed) <br> <input type = "text" name="notes" style="width: 750px;" >  <br><br>
          <input type = "submit" value = "Submit" name = "submit"> 
        </div> 
      </div>
</form>
<?php
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phonenum'];
    $date = $_POST['resdate'];
    $time = $_POST['time'];
    $guests = $_POST['noguest'];
    $place = $_POST['liketosit'];
    $notes = $_POST['notes'];

    include('db.php');
    $sql = "insert into tblreserv (fname , lname , email , phonenum ,resdate , time, noguest , liketosit , notes)
    values ('$fname' , '$lname' , '$email' , '$phone' , '$date' , '$time' , '$guests' , '$place' , '$notes' )";

    if($conn -> query($sql) === true){
        echo " <p style=\"color:aliceblue\">Your information is added successfully.<p>";
    }
    else {
        echo "Error : " .$conn->error;
    }}?>
    </div><br><br>

<!-- Menu -->
<h2 style="text-align: center">WHAT DO WE SERVE?</h2>
<!-- Srilankan food -->
<h3 id="srilankan" style="text-align:center; color:aliceblue;">SRILANKAN FOOD</h3><br>

    <div class="menu">
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/pittu.jpeg" alt="pittu" style="height: 250px; width: 350px;">
            <p> Pittu with Katta sambal and<br>
                Potato Curry<br>
                € 9.50 </p>
        </div>
    
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/stringhoppers.jpeg" alt="stringhoppers" style="height: 250px; width: 350px;">
            <p> String Hoppers with Pol<br>
                sambal and Dhal Curry<br>
                € 9.50 </p>
        </div>
    
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/milkrice.jpeg" alt="idly" style="height: 250px; width: 350px;">
            <p> Milk rice with Katta<br>
                sambal <br>
                € 9.50 </p>
        </div>
    </div><br>

    <div class="menu2">
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/roti.jpeg" alt="roti" style="height: 250px; width: 350px;">
            <p>Pol roti with katta<br>
                Sambal<br>
                € 9.50 </p>
        </div>
        
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/hoppers.jpeg" alt="hoppers" style="height: 250px; width: 350px;">
             <p> Hoppers with katta <br>
                 sambal<br>
                 € 9.50 </p>
        </div>
        
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/riceandcurry.jpeg" alt="ricencurry" style="height: 250px; width: 350px;">
            <p> Sri Lankan Rice<br>
                 and Curry<br>
                € 12.00 </p>
        </div>
    </div>
<br><br>
<!-- Indian food -->
<h3 id="indian" style="text-align:center; color:aliceblue;">INDIAN FOOD</h3><br>
    <div class="menu">
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/ulunduwada.jpeg" alt="ulunduwada" style="height: 250px; width: 350px;">
            <p> Ulundu wada with<br>
                sambal<br>
                € 6.50 </p>
            </div>
    
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/dhosa.jpeg" alt="dhosa" style="height: 250px; width: 350px;">
            <p> Dhosa with Dhal curry<br>
                and sambal<br>
                € 9.50 </p>
            </div>
    
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/gheerice.jpeg" alt="gheerice" style="height: 250px; width: 350px;">
            <p> Gee rice with Chicken<br>
                kuruma <br>
                € 12.50 </p>
            </div>
        </div><br>

        <div class="menu2">
            <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
                <img src="Images/idly.jpeg" alt="idly" style="height: 250px; width: 350px;">
                <p>Idly with curry <br>
                    and sambal<br>
                    € 9.50 </p>
                </div>
        
            <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
                <img src="Images/parota.jpg" alt="parota" style="height: 250px; width: 350px;">
                <p> Parota with <br>
                    sambal<br>
                    € 9.50 </p>
                </div>
        
            <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
                <img src="Images/biriyani.jpeg" alt="biriyani" style="height: 250px; width: 350px;">
                <p> Chicken biriyani<br>
                    <br>€ 12.50
                    </p>
                </div>
            </div>
<br><br>
<!-- Chinese food -->
<h3 id="chinese" style="text-align:center; color:aliceblue;">CHINESE FOOD</h3><br>

    <div class="menu">
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/noodles.jpg" alt="noodles" style="height: 250px; width: 350px;">
            <p> Noodles - seafood mixed<br>
                <br>
                € 11.50 </p>
            </div>
    
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/friedrice.jpg" alt="friedrice" style="height: 250px; width: 350px;">
            <p> Chinese chicken<br>
              fried rice<br>
                € 12.50 </p>
            </div>
    
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="Images/riceamngosalad.jpg" alt="riceamngosalad" style="height: 250px; width: 350px;">
            <p> Salad with beef and mango<br>
                <br>
                € 9.50 </p>
            </div>
        </div><br>

        <div class="menu2">
            <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
                <img src="Images/sandwitch.jpg" alt="sandwitch" style="height: 250px; width: 350px;">
                <p>Sandwich with scrambled <br>
                    and sambal<br>
                    € 9.50 </p>
                </div>
        
            <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
                <img src="Images/friedbeef.jpg" alt="friedbeef" style="height: 250px; width: 350px;">
                <p> Stir fried beef <br>
                    <br>
                    € 9.50 </p>
                </div>
        
            <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
                <img src="Images/potatos.jpg" alt="biriyani" style="height: 250px; width: 350px;">
                <p> Smashed potatos boiled<br>
                  veg with chicken<br>
                  € 12.00 </p>
                </div>
            </div>
<br><br>

<!-- Contact us -->
<h2 id="contact" style="text-align:center; color:aliceblue;">CONTACT US</h2><br>

    <div class="form-group mb-4" style="color: aliceblue;>
              <label for="name">Your name*:</label>
              <input id="name" type="text" name="name" class="form-control" placeholder="Example: Dhanushke Perera" required></input>
            </div>
            <div class="form-group my-4" style="color: aliceblue;>
              <label for="Email">E-mail address*:</label>
              <input id="Email" type="email" name="email" class="form-control" placeholder="Example: dhanushke22000@student.hamk.fi" required>
            </div>
            <div class="form-group my-4" style="color: aliceblue;>
              <label for="subject">Subject:</label>
              <input id="subject" type="text" name="subject" class="form-control" required>
            </div>
            <div class="form-group my-4" style="color: aliceblue;>
              <label for="subject">Phone Number*:</label>
              <input id="subject" type="text" name="subject" class="form-control" required>
            </div>
            <div class="form-group my-4" style="color: aliceblue;>
              <label for="details">Details*:</label>
              <textarea id="details" name="body" class="form-control" rows="4" placeholder="Message." required></textarea>
            </div>
            <div class="form-group my-4" style="color: aliceblue;>
              <button type="submit" class="btn btn btn-yellow btn-outline" >
              <input type="submit" value="Submit" style="color:coral; font-weight: bold; background-color: blanchedalmond;" class="btn btn btn-yellow btn-outline">
            <div>
          
    </div>
  </div>
</div>
        </form>
      </div>

          
      </main>
      
        <div id="wrap-footer"></div>
    </div>

<a class="backtotop" href="#top"> <i class="fa-solid fa-arrow-up"></i></i> </a>
<?php include 'footer.php'; ?>