<?php
$conn = mysqli_connect("containers-us-west-202.railway.app", "root", "BdYKl1bIg73riN1Bc59B", "railway", 6470);

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
