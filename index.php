<?php
    $title = "Home Page";
    include 'header.php';
?>
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
                        <img src="Images/main1_stringhoppers2.jpeg" class="d-block w-100" alt="stringhoppers" style="height: 450px; width: 350px;">
                        <div class="carousel-caption d-none d-md-block" style="color: cornsilk; font-weight: bold;">
                            <h3>String Hoppers</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/main2_idly2.jpg" class="d-block w-100" alt="idly" style="height: 450px; width: 350px;" >
                        <div class="carousel-caption d-none d-md-block" style="color:cornsilk; font-weight: bold;">
                            <h3>Idly</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/main3_noodles3.jpg" class="d-block w-100" alt="noodles" style="height: 450px; width: 350px;">
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
            <img src="Images/srilankan1_pittu.jpeg" alt="pittu" style="height: 180px; width: 180px;">
        </div>
        <div class="card" >
            <img src="Images/srilankan2_stringhoppers.jpeg" alt="stringhoppers" style="height: 180px; width: 180px;">
        </div>
        <div class="card">
            <img src="Images/indian4_idly.jpeg" alt="idly" style="height: 180px; width: 180px;">
        </div>
        <div class="card">
            <img src="Images/indian2_dhosa.jpeg" alt="dhosa" style="height: 180px; width: 180px;">
        </div>
        <div class="card">
            <img src="Images/chinese1_noodles.jpg" alt="noodles" style="height: 180px; width: 180px;">
        </div>
        <div class="card">
            <img src="Images/chinese6_potatos.jpg" alt="potatos" style="height: 180px; width: 180px;">
        </div>
    </div>

    <div class="cusions">
        <div class="row" style="font-size: 25px; text-align: center; font-weight: bold; font-style: italic; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: aliceblue;">
            <div class="col-md-4">
                <a href="#srilankan">Srilankan</a>
            </div>
            <div class="col-md-4">
                <a href="#indian">Indian</a>
            </div>
            <div class="col-md-4" >
                <a href="#chinese">Chinese</a>
            </div>
            <br><br>
        </div>
    </div>
    <br><br>

    <!-- About us -->
    <br>
    <h2 id="aboutus" style="text-align: center; color:aliceblue;"> ABOUT US </h2>
    <h3 id="aboutus" style="text-align: left; color:aliceblue;"> The Sri Lankan Restaurant </h3><br>
    <h6 id="aboutus" style="text-align: left; color:aliceblue;"> From North to South, East to West you will be able to have anything and everything of the Sri Lankan flavors. There are different spices and herbs which are added to the dishes which makes it a perfect delight and toothsome in every BITE.
    </h6><br>
    <h6 id="aboutus" style="text-align: left; color:aliceblue;"> There are different spices like cardamom, turmeric, red chili, green chili, cloves, cinnamon, garam masala, nutmeg, and much more. The best part is that the combination of all these flavors will not override each other. They are in a perfect balance and it will make sure that the end product is delightful & perfect the way any other cuisine is not.
    </h6><br>
    <h6 id="aboutus" style="text-align: left; color:aliceblue;"> Authenticity - Our recipes have been passed down through generations and are true to the region they belong to. Our chefs have been specially brought in from Sri Lanka and are experienced in the Sri Lankan food tradition.
    </h6><br>
    <h6 id="aboutus" style="text-align: left; color:aliceblue;"> Passion for Details - We have a zeal for ingredient quality, hygiene and service consistency across all our locations.
    </h6><br>
    <h6 id="aboutus" style="text-align: left; color:aliceblue;"> Customer is our God - At the very core of our commitment lies a spirit of celebrating our guests, understanding their needs and serving them in the most humble way.
    </h6><br>
    <h6 id="aboutus" style="text-align: left; color:aliceblue;"> Modern - To show the modern Sri Lankan food which has never been showcased in Finland.
    </h6>
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
<div class="reservation " >
<h2 id="reservation" style="text-align: center; color:aliceblue;">RESERVATION</h2> <br><br>
<form method = "post" action = "">
    <div class =reservation style="padding-left: 200px; padding-right: 200px; color:aliceblue">
      <div class = "row">
        <div class = "col">
          Name <br> <input type = "text" name="fname" placeholder = "First name"  style="width: 300px; height: 40px;" required> 
        </div>
        <div class = "col">
                <br> <input type = "text" name="lname" placeholder = "Last name" style="width: 300px; height: 40px;" required> <br><br>
        </div>
      </div> <br>
      <div class = "row">
        <div class = "col">
          Email <br>  <input type = "email" name="email" style="width: 300px; height: 40px;" required> 
        </div>
        <div class = "col">
          Phone Number <br> <input type = "tel" name="phonenum" style="width: 300px; height: 40px;" required> <br><br>
        </div>
      </div> <br>
      <div class = "row">
        <div class = "col">
          Reservation Date <br>  <input type = "date" name="resdate"  required> 
        </div>
        <div class = "col">
          Time <br> <input type = "time" name="time" min="09:00" max="23:00" step="900" > <br><br>
        </div>
      </div> <br>
      <div class = "row">
        <div class = "col">
          Number of guests <br> <input type = "number" name="noguest" required>  
        </div>
        <div class = "col">
          Where do you like to sit? <br> <br>
          <select name="liketosit">  
            <option value = "inside"> Inside the restaurant </option>
            <option value = "outside"> Outside the restaurant </option> 
          </select>
        </div>
      </div> <br>
      <div class = "row">
        <div class = "col">
          Special Notes (If any special arrangements needed) <br> <input type = "text" name="notes" style="width: 750px; height: 100px;" >  <br><br><br>
          <input type = "submit" value = "Submit" name = "submit"> 
        </div> 
      </div>
</form>
</div>
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

    include 'db.php';
    $sql = "insert into reservation_anuradha (fname , lname , email , phonenum ,resdate , time, noguest , liketosit , notes)
    values ('$fname' , '$lname' , '$email' , '$phone' , '$date' , '$time' , '$guests' , '$place' , '$notes' )";

    //geting data from database quary   

    if($conn -> query($sql) === true){
      echo "<p style=\"color:aliceblue\"> Your information is added successfully.<p>";
  }
  else {
      echo "<p style=\"color:aliceblue\"> Error : <p>" .$conn->error;
  }
    }
    ?>
    <br><br>


<!-- Contact us -->
<h2 id="contact" style="text-align:center; color:aliceblue;">CONTACT US</h2><br>


<div class="row">
    <div class="col-md-6" style="color: aliceblue; text-align: center; font-size: larger;">
              <br><img class="img-fluid" img src="Images/contactus.jpg" alt="Contact Us">
    </div>
    <div class="col-md-6" style="color: aliceblue;"> 

    
    <form action=" " method="post" name="form2"onsubmit="return formContact()">
              
            <!-- <div>
             Customer Id:<br>
              <input id="Customer_id" type="number" name="Customer_id"  placeholder="Enter your identity number" style="width: 500px" required></input>
            </div>--> 
            <div>
            <br>Your name:<br>
              <input id="Name" type="text" name="Name"  placeholder="Example: First Name / Last Name" style="width: 500px"></input>
            </div>
            <div>
            <br>Phone Number:<br>
              <input id="Phone_Number" type="text" name="Phone_Number"  placeholder="Example: 0401234567" style="width: 500px" required></input>
            </div>
            <div>
            <br>E-mail address:<br>
              <input id="Email" type="text" name="Email" placeholder="Example: xxxxxxxa@xxxxx.xxx" style="width: 500px" required></input>
            </div>
            <div>
            <br>Subject:<br>
              <input id="Subject" type="text" name="Subject" class="form-control" style="width: 500px" required></input>
            </div>
            <div>
            <br>Message:<br>
              <textarea id="Message" type="text" name="Message" class="form-control" style="width: 500px" rows="4" placeholder="Your message here please..." required></textarea>
            </div>
            <div>
              <br><button type="submit" class="btn btn btn-yellow btn-outline" >
              <input type="submit" value="Submit" name="submit"  style="color:coral; font-weight: bold; background-color: blanchedalmond;" class="btn btn btn-yellow btn-outline">
             </div><br><br>
      </form>
         <?php
         if (isset($_POST['submit'])){
         //$Customer_id = $_POST['Customer_id'];
         $Name = $_POST['Name'];
         $Phone_Number = $_POST['Phone_Number'];
         $Email = $_POST['Email'];
         $Subject = $_POST['Subject'];
         $Message = $_POST['Message'];
         include 'db.php';
         $sql = "insert into contactus(Name,Phone_Number,Email,Subject,Message)
         values('$Name','$Phone_Number','$Email','$Subject','$Message')";

         if($conn -> query($sql) === true){
          echo "<p style=\"color:aliceblue\">Your information is added successfully. We will contact you soon<p>";
        }
         else {
          echo "Error : " .$conn->error;
          }}?>
      </div>
        </div>
        </div>

        
      
    </div><br>
        </form>
      


      <br><br>


    <!-- Leave us feedback -->
    <h2 id="feedback" style="text-align:center; color:aliceblue;">LEAVE US FEEDBACK</h2><br>


<div class="row">
    <div class="col-md-6" style="color: aliceblue; text-align: center; font-size: larger; padding-left:90px;">
              <img class="img-fluid" img src="Images/LeaveUsFeedback.jpg" alt="Contact Us">
    </div>
    <div class="col-md-6" style="color: aliceblue;"> 
    <form action=" " method="POST" name="feedback" onsubmit="return validateform()">
            <div>
            Full name:<br>
              <input id="fullname" type="text" name="fullname"  placeholder="First Name / Last Name" style="width: 500px" ></input>
            </div>
            <div>
            <br>E-mail address:<br>
              <input id="emailaddress" type="text" name="emailaddress" placeholder="xxxxxxxa@xxxxx.xxx" style="width: 500px"></input>
            </div>
            <div>
            <br>Feedback:<br>
              <textarea id="Feedback" type="text" name="Feedback" class="form-control" style="width: 500px" rows="4" placeholder="Your feedback...(Maximum words 300 only)"  required></textarea>
            </div>
            <div>
            <!--<br>Feedback Id:<br>
            <input id="Feedback_id" type="number" name="Feedback_id"  placeholder="Keep it blank. This will be auto generated" style="width: 500px" ></input>
            </div>-->
            <div>
              <br><button type="submit" class="btn btn btn-yellow btn-outline" >
              <input type="submit" value="Submit" name="submit"  style="color:coral; font-weight: bold; background-color: blanchedalmond;" class="btn btn btn-yellow btn-outline">
             </div><br><br> 
      </form>
         <?php
         if (isset($_POST['submit'])){
         $fullname = $_POST['fullname'];
         $emailaddress = $_POST['emailaddress'];
         $Feedback = $_POST['Feedback'];
         //$Feedback_id = $_POST['Feedback_id'];
         include 'db.php';
         $sql = "INSERT INTO feedback(fullname,emailaddress,Feedback)
         values('$fullname','$emailaddress','$Feedback')";

         if($conn -> query($sql) === true){
          echo "<h4>Thank you for your Valuable feedback.<h4>";
          echo "<p>Have a nice day!<p>";
        }
         else {
          echo "Error : " .$conn->error;
          }}?>
      </div>
</div> <br><br>


        </main>
        <div id="wrap-footer"></div>
    </div>

    <a class="backtotop" href="#top"> <i class="fa-solid fa-arrow-up"></i></i> </a>

<?php include 'footer.php'; ?>
