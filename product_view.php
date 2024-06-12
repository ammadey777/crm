<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="/create_product.php" method="POST">
        <label for="order_date">Order Date:</label>
        <input type="date" name="order_date" required><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="category">Category:</label>
        <input type="text" name="category"><br>

        <label for="origin">Origin:</label>
        <input type="text" name="origin"><br>

        <label for="qty">Quantity:</label>
        <input type="number" name="qty" required><br>

        <label for="cost">Cost:</label>
        <input type="number" step="0.10"  name="cost" required><br>

        <label for="sell_price">Sell Price:</label>
        <input type="number" step="0.10" name="sell_price" required><br>

        <label for="t_min_price">Total Min Price:</label>
        <input type="number" step="0.10"  name="t_min_price"><br>

        <label for="t_max_price">Total Max Price:</label>
        <input type="number" step="0.10"  name="t_max_price"><br>

        <label for="est_delivery">Estimated Delivery:</label>
        <input type="date" name="est_delivery"><br>

        <label for="received">Received:</label>
        <input type="date" name="received"><br>

        <label for="sold">Sold:</label>
        <input type="date" name="sold"><br>

        <label for="no_sold">No. Sold:</label>
        <input type="number" name="no_sold"><br>

        <label for="sold_date">Sold Date:</label>
        <input type="date" name="sold_date"><br>

        <label for="status">Status:</label>
        <input type="text" name="status"><br>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>

<?php include('<includes/footer.php'); ?>