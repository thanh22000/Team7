<?php
$title = "Update info";
include "header.php";
$a = $_GET['referance'];
include 'db.php';
$result = mysqli_query($conn,"Select * from reservation_anuradha where id='$a'");
$row = mysqli_fetch_array($result);
?>
<h2> Update your Info <h2>
    <form name="update" method = "post" action="">
    <input type = "text" name="fname" placeholder = "First name" value="<?php echo $row['fname'];?>"><br>
    <input type = "text" name="lname" placeholder = "Last name" value="<?php echo $row['lname'];?>"><br>
    <input type = "email" name="email" value="<?php echo $row['email'];?>"><br>
    <input type = "tel" name="phonenum" value="<?php echo $row['phonenum'];?>"><br>
    <input type = "date" name="resdate" value="<?php echo $row['resdate'];?>"><br>
    <input type = "time" name="time" min="09:00" max="23:00" value="<?php echo $row['time'];?>"><br>
    <input type = "number" name="noguest"value="<?php echo $row['noguest'];?>"><br>

