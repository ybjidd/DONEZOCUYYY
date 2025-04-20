<?php
include "config.php";

// Get data from POST request
$title = $_POST['judul'];
$description = $_POST['deskripsi'];
$status = $_POST['status'];
$start_date = $_POST['tanggal-mulai'];
$end_date = $_POST['tanggal-selesai'];

// Insert task into database
$query = "INSERT INTO tasks (title, description, status, start_date, end_date) 
         VALUES ('$title', '$description', '$status', '$start_date', '$end_date')";

if (mysqli_query($conn, $query)) {
    $response = [
        'status' => 'success',
        'message' => 'Task added successfully',
        'task_id' => mysqli_insert_id($conn)
    ];
} else {
    $response = [
        'status' => 'error',
        'message' => 'Error: ' . mysqli_error($conn)
    ];
}

echo json_encode($response);
?> 