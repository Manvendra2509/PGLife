<?php
$conn = mysqli_connect("mysql://root:BdYKl1bIg73riN1Bc59B@containers-us-west-202.railway.app:6470/railway", "root", "BdYKl1bIg73riN1Bc59B", "railway");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
