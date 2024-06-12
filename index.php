<?php
    session_start();
    require 'dbcon.php';
?>

<?php include('<includes/header.php'); ?>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Details
                            <a href="product_create.php" class="btn btn-primary float-end">Add Products</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>ID</th>
            <th>Order Date</th>
            <th>Name</th>
            <th>Category</th>
            <th>Origin</th>
            <th>Quantity</th>
            <th>Cost</th>
            <th>Total Cost</th>
            <th>Sell Price</th>
            <th>Total Min Price</th>
            <th>Total Max Price</th>
            <th>Profit</th>
            <th>Total Profit</th>
            <th>Sold Total Profit</th>
            <th>Profit %</th>
            <th>Estimated Delivery</th>
            <th>Received</th>
            <th>Sold</th>
            <th>No. Sold</th>
            <th>Sold Date</th>
            <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM products";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $product)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $product['id']; ?></td>
                                                <td><?= $product['order_date']; ?></td>
                                                <td><?= $product['name']; ?></td>
                                                <td><?= $product['category']; ?></td>
                                                <td><?= $product['origin']; ?></td>
                                                <td><?= $product['qty']; ?></td>
                                                <td><?= $product['cost']; ?></td>
                                                <td><?= $product['t_cost']; ?></td>
                                                <td><?= $product['sell_price']; ?></td>
                                                <td><?= $product['t_min_price']; ?></td>
                                                <td><?= $product['t_max_price']; ?></td>
                                                <td><?= $product['profit']; ?></td>
                                                <td><?= $product['t_profit']; ?></td>
                                                <td><?= $product['sold_t_profit']; ?></td>
                                                <td><?= $product['profit_percent']; ?></td>
                                                <td><?= $product['est_delivery']; ?></td>
                                                <td><?= $product['received']; ?></td>
                                                <td><?= $product['sold']; ?></td>
                                                <td><?= $product['no_sold']; ?></td>
                                                <td><?= $product['sold_date']; ?></td>
                                                <td><?= $product['status']; ?></td>
                                                <td>
                                                    <a href="product_view.php?id=<?= $product['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="product_edit.php?id=<?= $product['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_product" value="<?=$product['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('<includes/footer.php'); ?>

 