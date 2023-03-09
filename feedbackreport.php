<?php
$title = "Read data from db";
include "header.php";
?>
<?php
include 'db.php';
$sql = "INSERT INTO feedback(fullname,emailaddress,Feedback)
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "
    <table style=\"color:aliceblue\"  class='table'>
    <tr><th>fullname</th><th>emailaddress</th><th>feedback</th><th>Feedback_id</th></tr>";
    while($row=$result->fetch_assoc()){
    echo"
    <tr>
    <td><a href='updatesingle.php?referance=$row[referance]'>$row[referance]</a></td>
    <td>$row[fullname]</td>
    <td>$row[emailaddress]</td> 
    <td>$row[feedback]</td>
    <td>$row[Feedback_id]</td>
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