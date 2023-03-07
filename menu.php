<?php
    $title = "Home Page";
    include_once('db.php');
    include 'header.php';

    // Truy vấn
    $sql = "SELECT * FROM tblfood ORDER BY food_id DESC";
    $result = $conn->query($sql);
    $products = [];

    // Save data to products array
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
?>

<!-- Menu -->
<br><br>
<h2 style="text-align: center" id="menu_food">Menu</h2> <br><br>
    
<div class="menu">
    <?php  foreach($products as $item) :?>
        <div class="card" style="text-align: center; font-weight: bold; background-color: darkgray;">
            <img src="<?= $item['food_image'] ?>" alt="pittu" style="height: 250px; width: 350px;">
            <p> <?= $item['food_name'] ?><br>
                <?= $item['food_code'] ?><br>
                € <?= $item['food_price'] ?>
                <a href="http://localhost:81/Team7/add-cart.php?id=<?= $item['food_id'] ?>">Add to cart</a>
            </p>
        </div>
    <?php endforeach; ?>
</div><br>



<?php include 'footer.php'; ?>
