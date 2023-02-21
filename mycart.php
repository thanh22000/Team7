<?php 
$title = "My cart";
include 'cartdb.php';
include 'header.php'; 
?>

<h2> My cart </h2>
<?php 
$sql = "Select * from tblfood where fid='1'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='menu'>
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/srilankan1_pittu.jpeg' alt='pittu' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
            <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' 
        </div>
        ";
    }
}
$sql = "Select * from tblfood where fid='2'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/srilankan2_stringhoppers.jpeg' alt='stringhoppers' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
        </div>
        </div>
        ";
    }
}

?>

            





<?php include 'footer.php'; ?>