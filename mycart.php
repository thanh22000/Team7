<?php 
$title = "My cart";
include 'cartdb.php';
include 'header.php'; 
?>

<!-- Menu -->
<h2 style="text-align: center">WHAT DO WE SERVE?</h2> <br>

<!-- Srilankan food -->
<h3 id="srilankan" style="text-align:center; color:aliceblue;">SRILANKAN MENU</h3><br>
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
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
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
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> 
        ";
    }
}
$sql = "Select * from tblfood where fid='3'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/srilankan3_milkrice.jpeg' alt='milkrice' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> </div> <br>
        ";
    }
}
$sql = "Select * from tblfood where fid='4'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='menu'>
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/srilankan4_roti.jpeg' alt='roti' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
            <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div>
        ";
    }
}
$sql = "Select * from tblfood where fid='5'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/srilankan5_hoppers.jpeg' alt='hoppers' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> 
        ";
    }
}
$sql = "Select * from tblfood where fid='6'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/srilankan6_riceandcurry.jpeg' alt='riceandcurry' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> </div> <br>
        ";
    }
}
?>
<!-- Indian menu -->
<h3 id="indian" style="text-align:center; color:aliceblue;">INDIAN MENU</h3><br>
<?php 
$sql = "Select * from tblfood where fid='7'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='menu'>
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/indian1_ulunduwada.jpeg' alt='ulunduwada' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
            <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div>
        ";
    }
}
$sql = "Select * from tblfood where fid='8'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/indian2_dhosa.jpeg' alt='dhosa' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> 
        ";
    }
}
$sql = "Select * from tblfood where fid='9'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/indian3_gheerice.jpeg' alt='gheerice' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> </div> <br>
        ";
    }
}
$sql = "Select * from tblfood where fid='10'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='menu'>
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/indian4_idly.jpeg' alt='idly' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
            <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div>
        ";
    }
}
$sql = "Select * from tblfood where fid='11'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/indian5_parota.jpg' alt='parota' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> 
        ";
    }
}
$sql = "Select * from tblfood where fid='12'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/indian6_biriyani.jpeg' alt='biriyani' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> </div> <br>
        ";
    }
}
?>
<!-- Chinese menu -->
<h3 id="chinese" style="text-align:center; color:aliceblue;">CHINESE MENU</h3><br>
<?php 
$sql = "Select * from tblfood where fid='13'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='menu'>
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/chinese1_noodles.jpg' alt='noodles' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
            <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div>
        ";
    }
}
$sql = "Select * from tblfood where fid='14'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/chinese2_friedrice.jpg' alt='friedrice' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> 
        ";
    }
}
$sql = "Select * from tblfood where fid='15'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/chinese3_riceamngosalad.jpg' alt='riceamngosalad' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> </div> <br>
        ";
    }
}
$sql = "Select * from tblfood where fid='16'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='menu'>
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/chinese4_sandwitch.jpg' alt='sandwitch' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
            <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div>
        ";
    }
}
$sql = "Select * from tblfood where fid='17'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/chinese5_friedbeef.jpg' alt='friedbeef' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> 
        ";
    }
}
$sql = "Select * from tblfood where fid='18'";
$result3 = $conn->query($sql);
if($result3 -> num_rows > 0){
    while($row=$result3 -> fetch_assoc()) {
        echo "
        <div class='card' style='text-align: center; font-weight: bold; background-color: darkgray; width: 350px;'>
            <img src='Images/chinese6_potatos.jpg' alt='potatos' style='height: 250px; width: 350px;'>
            <p> $row[name] <br>
                $row[fcode] <br>
                € $row[price] </p>
                <div class='cart-action'>
                <input type='text' class='food-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Add to Cart' class='btnAddAction' />
            </div>
        </div> </div> <br>
        ";
    }
}
?>
<!-- running shopping cart -->




<!-- Shopping cart -->
<div id="shopping-cart">
    <h3 style='color:aliceblue'> Shopping Cart </h3>
    <a id="btnEmpty" href="mycart.php?action=empty"> Empty Cart </a>
    <?php

    ?>
    <table class="tbl-cart" cellpadding="10" cellspacing="1" style='color:aliceblue'>
    <tbody>
    <tr>
        <th style="text-align:left;">Name</th>
        <th style="text-align:left;">Code</th>
        <th style="text-align:right;" width="5%">Quantity</th>
        <th style="text-align:right;" width="10%">Unit Price</th>
        <th style="text-align:right;" width="10%">Price</th>
        <th style="text-align:center;" width="5%">Remove</th>
    </tr>
    <?php 

    ?>
    <tr>
    </tr>
    </tbody>
    </table>

</div>



<?php include 'footer.php'; ?>