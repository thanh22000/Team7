<?php
$title = "Read data from db";
include "header.php";
?>
<?php
include 'db.php';
$sql = "select * from reservation_anuradha ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "
    <table style=\"color:aliceblue\"  class='table '>
    <tr><th>Referance Number</th><th>First Name</th><th>Last Name</th><th>Phone number</th><th>Date </th><th>Time</th><th>No of Guests</th></tr>";
    while($row=$result->fetch_assoc()){
    echo"
    <tr>
    <td><a href='updatesingle.php?referance=$row[referance]'>$row[referance]</a></td>
    <td>$row[fname]</td>
    <td>$row[lname]</td>
    <td>$row[phonenum]</td> 
    <td>$row[resdate]</td>
    <td>$row[time]</td>
    <td>$row[noguest]</td>
    </tr>
     ";
    }
    echo"</table>";

}
else{
    echo"No Result";
}
$conn->close();
?>


<div class="col-md-6">
<br>
<a class="btn btn-danger" href="reservation.php" role="button">Back</a>
</div>
<br> <br> <br> <br> <br> <br> <br> <br> <br> 


<?php
include "footer.php";
?>