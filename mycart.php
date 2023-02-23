<?php 
$title = "My cart";
include 'header.php'; 
?>
<h2 style='color:aliceblue'> My cart </h2> <br>
<a style='color:aliceblue' href='mycart.php'> Foods </a> <br>
<a style='color:aliceblue' href='#'> Categories </a> <br>
<a style='color:aliceblue' href='checkout.php'> Checkout </a> <br>
<a style='color:aliceblue' href='cart.php'><i class='fas fa-shopping-cart'></i> <span id="cart-item" class="bade badge-danger">1</span></a> <br>

<div class="container">
    <div id="message"> </div>
    <div class="row mt-2 pb-3">
        <?php
            include 'mycartdb.php';
            $stmt = $conn->prepare("SELECT * FROM tblfood");
            $stmt->execute();
            $result3 = $stmt->get_result();
            while($row=$result3->fetch_assoc()):
        ?>
        <div class="col-lg-4">
            <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">    
                    <img src="<?= $row['food_image'] ?>" class="card-img-top" height="250">
                    <div class="card-body p-1">
                        <h4 class="card-title text-center black"><?= $row['food_name'] ?></h4>
                        <h5 class="card-text text-center black">€ <?= number_format($row['food_price'],2) ?></h5>
                    </div>
                    <div class="card-footer p-1 text-center">
                        <form action="" class="form-submit">
                            <input type="hidden" class="foodid" value="<? $row['food_id'] ?>">
                            <input type="hidden" class="foodname" value="<? $row['food_name'] ?>">
                            <input type="hidden" class="foodprice" value="<? $row['food_price'] ?>">
                            <input type="hidden" class="foodimage" value="<? $row['food_image'] ?>">
                            <input type="hidden" class="foodcode" value="<? $row['food_code'] ?>">
                            <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".addItemBtn").click(function(e){
            e.preventDefault();
            var $form = $(this).closest(".form-submit");
            var foodid = $form.find(".foodid").val();
            var foodname = $form.find(".foodname").val();
            var foodprice = $form.find(".foodprice").val();
            var foodimage = $form.find(".foodimage").val();
            var foodcode = $form.find(".foodcode").val();
            $.ajax({
                url: 'myaction.php',
                method: 'post',
                data: {foodid:foodid,foodname:foodname,foodprice:foodprice,foodimage:foodimage,foodcode:foodcode},
                success:function(response){
                    $("#message").html(response);
                    window.scrollTo(0, 0);
                    load_cart_item_number();
                }       
            });
        });
    });
</script>

<?php include 'footer.php'; ?>