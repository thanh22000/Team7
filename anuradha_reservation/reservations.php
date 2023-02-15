<?php $title = "Online table reservation";
include"../header.php"; ?>

<form method = "post" action = "">
    <div class =reservation style="padding-left: 200px; padding-right: 200px;">
<div class = "row">
    <div class = "col">
    Name <br> <input type = "text" name="fname" placeholder = "First name"  style="width: 300px;" required> </div>
    <div class = "col">
     <br> <input type = "text" name="lname" placeholder = "Last name" style="width: 300px;" required> </div>
</div> <br>

<div class = "row">
    <div class = "col">
    Email <br>  <input type = "email" name="email" style="width: 300px;" required> </div>
    <div class = "col">
    Phone Number <br> <input type = "tel" name="phonenum" style="width: 300px;" required> </div>
</div> <br>

<div class = "row">
    <div class = "col">
    Reservation Date <br>  <input type = "date" name="resdate"  required> </div>
    <div class = "col">
    Time <br> <input type = "time" name="time" min="09:00" max="23:00" step="900" >  </div>
</div> <br>

<div class = "row">
    <div class = "col">
    Number of guests <br> <input type = "number" name="noguest" required>  </div>
    <div class = "col">
    Where do you like to sit? <br> <select name="liketosit" >  
        <option value = "inside"> Inside the restaurant </option>
        <option value = "outside"> Outside the restaurant </option> </select>
    </div>
</div> <br>

<div class = "row">
    <div class = "col">
    Special Notes (If any special arrangements needed) <br> <input type = "text" name="notes" style="width: 750px;" >  <br><br>

    
    <input type = "submit" value = "Submit" name = "submit"> </div> 
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
    $sql = "insert into studentinfo (fname , lname , email , phonenum ,resdate , time, noguest , liketosit , notes)
    values ('$fname' , '$lname' , '$email' , '$phone' , '$date' , '$time' , '$guests' , '$place' , '$notes' )";

    if($conn -> query($sql) === true){
        echo "Your information is added successfully.";
    }
    else {
        echo "Error : " .$conn->error;
    }

}


?>

<?php  include"../footer.php";?>