<?php

// The URL of the website you want to take a screenshot of
$url = 'https://www.example.com';

// The time to wait for the website to load in seconds
$timer = 10;

// Execute the command to take the screenshot
$output = shell_exec("wkhtmltoimage --quality 100 --disable-smart-width '$url' -");

// Check if the screenshot was taken successfully
if(empty($output)) {
    echo "Failed to take screenshot";
    exit;
}

// Wait for the website to load
sleep($timer);

// Set the content type to image/png
header('Content-Type: image/png');

// Output the screenshot as a BLOB
echo $output;

?>
