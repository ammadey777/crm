<?php

include "dbcon.php"; // Using database connection file here

if(isset($_GET['id'])){
    $id = $_GET['id']; // get id through query string

    $sql="DELETE from 'issues' where id = '$id'";
    $del = mysqli_query($con,"delete from issues where id = '$id'"); // delete query

    if($del)
    {
        mysqli_close($con); // Close connection
        header("location:issues.php"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
}
// echo "<font color='green'>Record Deleted from Database";
// echo "<font color='red'>Failed to Delete Record from Database";
?>
