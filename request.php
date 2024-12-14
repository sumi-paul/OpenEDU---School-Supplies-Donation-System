<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $receiver_id = $_POST['receiver_id'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    $sql = "INSERT INTO requests (receiver_id, amount, date) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ids', $receiver_id, $amount, $date);

    if ($stmt->execute()) {
        echo "Request recorded successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>