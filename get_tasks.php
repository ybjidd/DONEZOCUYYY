<?php
include "config.php";

// Fetch all tasks from database
$query = "SELECT * FROM tasks ORDER BY start_date ASC";
$result = mysqli_query($conn, $query);

$tasks = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tasks[] = [
            'id' => $row['id'],
            'title' => $row['title'],
            'description' => $row['description'],
            'status' => $row['status'],
            'start_date' => $row['start_date'],
            'end_date' => $row['end_date']
        ];
    }
}

echo json_encode(['status' => 'success', 'tasks' => $tasks]);
?> 