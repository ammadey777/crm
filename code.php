<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_product']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['delete_product']);

    $query = "DELETE FROM products WHERE id='$product_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "product Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "product Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_product']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE products SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$product_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "product Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "product Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_product']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO products (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "product Created Successfully";
        header("Location: product_create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "product Not Created";
        header("Location: product_create.php");
        exit(0);
    }
}

?>