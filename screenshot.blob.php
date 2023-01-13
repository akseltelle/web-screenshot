<?php

// The URL of the website you want to take a screenshot of
$url = 'https://www.example.com';

// Execute the command to take the screenshot
$output = shell_exec("wkhtmltoimage --quality 100 --disable-smart-width '$url' -");

// Check if the screenshot was taken successfully
if(empty($output)) {
    echo "Failed to take screenshot";
    exit;
}

// Set the content type to image/png
header('Content-Type: image/png');

// Output the screenshot as a BLOB
echo $output;

?>