# web-screenshot
A basic PHP script that uses the shell_exec function to take a screenshot of a website using the command-line tool wkhtmltoimage.

Requirements: wkhtmltopdf 


There are 3 versions of the script:

screenshot.php will generate a screenshot and save it on your server.

screenshot.blob.php will generate a BLOB of the screenshot. Screenshot will not be saved on the server.

screenshot.blob.wait10sec.php will wait 10 seconds before generating a BLOB of the screenshot, to make sure the entire website have loaded. Screenshot will not be saved on the server.