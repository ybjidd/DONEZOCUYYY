<?php
include "config.php";

// Get data from POST request
$id = $_POST['id'];
$title = $_POST['judul'];
$description = $_POST['deskripsi'];
$status = $_POST['status'];
$start_date = $_POST['tanggal-mulai'];
$end_date = $_POST['tanggal-selesai'];

// Update task in database
$query = "UPDATE tasks SET 
          title = '$title',
          description = '$description',
          status = '$status',
          start_date = '$start_date',
          end_date = '$end_date'
          WHERE id = $id";

if (mysqli_query($conn, $query)) {
    $response = [
        'status' => 'success',
        'message' => 'Task updated successfully'
    ];
} else {
    $response = [
        'status' => 'error',
        'message' => 'Error: ' . mysqli_error($conn)
    ];
}

echo json_encode($response);
?> 