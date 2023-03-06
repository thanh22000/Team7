<?php
    include 'db.php';
    $title = "My cart";
    include 'header.php';
    $sum = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = [
            'total_price' => $_SESSION['sums'],
        ];

        // try to insert
        $id_instart = insert("tbl_orders", $data, $conn);

        if ((isset($_SESSION['cart'])) && count($_SESSION['cart']) > 0) {
            foreach ($_SESSION['cart'] as $m => $l) {
                $data2       = [
                    'order_id' => $id_instart,
                    'food_id'  => $m,
                    'price'    => $l['food_price'] * $l['qty'],
                ];
                $id_instart2 = insert("tbl_transactions", $data2, $conn);

            }

            unset($_SESSION['cart']);
            unset($_SESSION['sums']);

            header("location: " . '/');
            $_SESSION['success'] = ' You are all set ! ';
        }
    }


    function insert($table, array $data, $conn)
    {
        var_dump($data);
        //code
        $sql     = "INSERT INTO {$table} ";
        $columns = implode(',', array_keys($data));
        $values  = "";
        $sql     .= '(' . $columns . ')';

        foreach ($data as $field => $value) {
            $values .= $value . ",";
        }

        $values = substr($values, 0, -1);
        $sql    .= " VALUES (" . $values . ')';
        var_dump($sql);
        mysqli_query($conn, $sql) or die("ERROR:  query  insert ----" . mysqli_error($conn));
        return mysqli_insert_id($conn);
    }

?>
<h2 style='color:aliceblue'> My cart </h2> <br>

<div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
        <?php foreach ($_SESSION['cart'] as $key => $item) : ?>
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card p-2 border-secondary mb-2">
                        <img src="<?= $item['food_image'] ?>" class="card-img-top" height="250">
                        <div class="card-body p-1">
                            <h4 class="card-title text-center black"><?= $item['food_name'] ?></h4>
                            <h5 class="card-text text-center black">€ <?= number_format($item['food_price'], 2) ?>
                                x <?= $item['qty'] ?></h5>
                            <h5 class="card-text text-center black">Sum
                                €<?= number_format($item['food_price'] * $item['qty'], 2) ?> </h5>
                        </div>
                    </div>
                </div>
                <?php $sum += $item['food_price'] * $item['qty'] ?>
            </div>
        <?php endforeach; ?>
        <div class="col-lg-12">
            <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                    <h5>Total € <?= number_format($sum, 2) ?></h5>
                    <?php
                    $_SESSION['sums'] = $sum;
                    ?>
                    <form action="" method="POST">
                        <button type="submit"> ORDER </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'footer.php'; ?>
