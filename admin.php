<?php
// Check if user is admin (implement your authentication logic)
$isAdmin = true; // Change this to your actual admin check

if ($isAdmin) {
    echo "<h1>Submitted Data</h1>";
    $submissions = file_get_contents('submissions.txt');
    echo nl2br($submissions); // Show the content with line breaks
} else {
    echo "Access denied. You are not authorized to view this page.";
}
?>
