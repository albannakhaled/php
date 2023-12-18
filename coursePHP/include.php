<?php
// Example 1: Using include
include 'nonexistent_file.php'; // PHP will emit a warning, but the script continues
echo "Script continues after include.";

// Example 2: Using require
require 's.php'; // PHP will emit a fatal error, and the script stops
echo "This line will not be executed.";
?>
