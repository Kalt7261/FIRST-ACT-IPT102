<?php
// hello.php - Returns data as JSON, not HTML

header('Content-Type: application/json; charset=utf-8');

$response = [
    'message' => 'hello from the server!',
    'student' => 'khane tonggalong',
    'course' => 'IPT 2',
    'time' => date('2026-10-20 03:26:50')
    ];

    // Return JSON response
    echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    ?>