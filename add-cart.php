<?php
    include_once('db.php');
    /**
     *  Add to cart
     */
    $path = $_SERVER["HTTP_REFERER"];

    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $id = intval($id);
    }
//    session_destroy();

    /**
     *  Select ID = $id;
     */
    $sql     = "SELECT * FROM tblfood where food_id = $id LIMIT 1";
    $result  = $conn->query($sql);
    $product = [];

    // Save data to products array
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $product = $row;
        }
    }

    if (isset($_SESSION['cart'][$id])) {
        $qty        = $_SESSION['cart'][$id]['qty'] + 1;
        $tensanpham = $product['food_name'];
        $gia        = $product['food_price'];
        $hinhanh    = $product['food_image'];
    } else {
        $qty        = 1;
        $tensanpham = $product['food_name'];
        $gia        = $product['food_price'];
        $hinhanh    = $product['food_image'];
    }


    $_SESSION['cart'][$id]['qty']        = $qty;
    $_SESSION['cart'][$id]['food_name']  = $tensanpham;
    $_SESSION['cart'][$id]['food_price'] = $gia;
    $_SESSION['cart'][$id]['food_image'] = $hinhanh;
    //var_dump("DIE");die;
    header("location: http://localhost:81/Team7/#menu_food");
?>