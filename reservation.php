<?php
    $title = "Reservation Page";
    include_once('db.php');
    include 'header.php';
?>

<!-- Reservation --> 
<div class="reservation " >
<h2 id="reservation" style="text-align: center; color:aliceblue;">RESERVATION</h2> <br>
<form method = "post" action = "" name = "form1" onsubmit="return checknum()" >
    <div class =reservation style="padding-left: 200px; padding-right: 200px; color:aliceblue">
      <div class = "row">
        <div class = "col">
          First Name <br> <input type = "text" name="fname" placeholder = "First name"  style="width: 300px; height: 40px;" requiredspan onmouseover="this.style.backgroundColor = 'yellow';" onmouseout="this.style.backgroundColor = 'white';"></span> 
        </div>
        <div class = "col">
          Last Name <br> <input type = "text" name="lname" placeholder = "Last name" style="width: 300px; height: 40px;" required span onmouseover="this.style.backgroundColor = 'yellow';" onmouseout="this.style.backgroundColor = 'white';"></span> <br>
        </div>
      </div> <br>
      <div class = "row">
        <div class = "col">
          Email <br>  <input type = "email" name="email" style="width: 300px; height: 40px;" required> 
        </div>
        <div class = "col">
          Phone Number <br> <input type = "tel" name="phonenum" style="width: 300px; height: 40px;" required> <br>
        </div>
      </div> <br>
      <div class = "row">
        <div class = "col">
          Reservation Date <br>  <input type = "date" name="resdate"  required> 
        </div>
        <div class = "col">
          Time <br> <input type = "time" name="time" min="09:00" max="23:00" > <br><br>
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
          <input type = "submit" value = "Submit" name = "submit" span onmouseover="this.style.backgroundColor = 'blue';" onmouseout="this.style.backgroundColor = 'white';"></span> 

          <div class="col-md-6">
          <br>
          <a class="btn btn-danger" href="readdata.php" role="button">View Report</a>
          </div>


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


    <?php include 'footer.php'; ?>
