<?php
include "config.php";

// Get task ID from POST request
$id = $_POST['id'];

// Delete task from database
$query = "DELETE FROM tasks WHERE id = $id";

if (mysqli_query($conn, $query)) {
    $response = [
        'status' => 'success',
        'message' => 'Task deleted successfully'
    ];
} else {
    $response = [
        'status' => 'error',
        'message' => 'Error: ' . mysqli_error($conn)
    ];
}

echo json_encode($response);
?> 