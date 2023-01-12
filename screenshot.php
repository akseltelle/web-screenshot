<?php

// The URL of the website you want to take a screenshot of
$url = 'https://www.example.com';

// The path where the screenshot will be saved
$screenshot = '/path/to/screenshot.png';

// Execute the command to take the screenshot
$output = shell_exec("wkhtmltoimage --quality 100 --disable-smart-width '$url' '$screenshot'");

// Check if the screenshot was taken successfully
if (!file_exists($screenshot)) {
    echo "Failed to take screenshot";
    exit;
}

// Display the screenshot
echo "<img src='$screenshot' alt='Screenshot'/>";

?>
