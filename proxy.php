<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    
    // Validate the URL to prevent security risks and only allow specific domains if needed.
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Set up cURL options
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow any redirects
        curl_setopt($ch, CURLOPT_HEADER, false); // Exclude header from the output
        
        // Execute cURL and get the content
        $response = curl_exec($ch);
        
        // Check for cURL errors
        if (curl_errno($ch)) {
            header('HTTP/1.1 500 Internal Server Error');
            echo 'Error: ' . curl_error($ch);
            exit;
        }
        
        // Close cURL
        curl_close($ch);
        
        // Output the fetched content
        echo $response;
        exit; // Important: End the script here to prevent further output.
    } else {
        header('HTTP/1.1 400 Bad Request');
        echo 'Invalid URL';
        exit; // Important: End the script here to prevent further output.
    }
} else {
    header('HTTP/1.1 400 Bad Request');
    echo 'Missing URL parameter';
    exit; // Important: End the script here to prevent further output.
}
?>
