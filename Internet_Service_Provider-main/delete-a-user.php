<?php
    require('conn.php');
    $id = $_GET['id'];
    if(mysqli_query($conn,"DELETE FROM clients WHERE id = {$id}")){
        header('Location: admin.php');
    } else {
        echo "Error deleting the booking.";
    }
?>