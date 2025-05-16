<?php
header('Content-Type: application/json');

// Simple API endpoint
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SERVER['REQUEST_URI'])) {
    $uri = $_SERVER['REQUEST_URI'];
    if (strpos($uri, '/api/data') !== false) {
        // Sample response
        $response = [
            'status' => 'success',
            'message' => 'Hello from PHP backend! This is sample data.'
        ];
        echo json_encode($response);
        exit;
    }
}

// Return 404 if endpoint not found
http_response_code(404);
echo json_encode(['status' => 'error', 'message' => 'Endpoint not found']);
?>