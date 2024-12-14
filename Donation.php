<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $donor_id = $_POST['donor_id'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    $sql = "INSERT INTO donations (donor_id, amount, date) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ids', $donor_id, $amount, $date);

    if ($stmt->execute()) {
        echo "Donation recorded successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>