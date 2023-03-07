<?php
    $title = "Feedback Page";
    include_once('db.php');
    include 'header.php';
?>
<!-- Leave us feedback -->

<br><br><br>
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








<?php include 'footer.php'; ?>
