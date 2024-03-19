<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the booking details from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pickup = $_POST['pickup'];
    $destination = $_POST['destination'];
    $pickupDate = $_POST['pickup_date'];
    $pickupTime = $_POST['pickup_time'];


}
?>
