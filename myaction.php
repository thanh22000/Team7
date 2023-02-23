<?php
    session_start();
    require 'mycartdb.php';

    if(isset($_POST['foodid'])){
        $foodid = $_POST['foodid'];
        $foodname = $_POST['foodname'];
        $foodprice = $_POST['foodprice'];
        $foodimage = $_POST['foodimage'];
        $foodcode = $_POST['foodcode'];
        $fqty = 1;

        $stmt = $conn->prepare("SELECT food_code FROM cart WHERE food_code=?");
        $stmt->bind_param("s",$foodcode);
        $stmt->execute();
        $res=$stmt->get_result();
        $r=$res->fetch_assoc();
        $fcode = isset($r['food_code']);
        
        if(!$fcode){
            $query = $conn->prepare("INSERT INTO cart (food_name,food_price,food_image,qty,total_price,food_code) VALUES (?,?,?,?,?,?)");
            $query->bind_param("sssiss",$foodname,$foodprice,$foodimage,$fqty,$foodprice,$foodcode);
            $query->execute();
            echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong> Item added to your cart! </strong>
                    </div> ';
        }
        else {
            echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong> Item already added to your cart! </strong>
                    </div> ';
        }
    }

    
?>