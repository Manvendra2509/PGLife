<?php
$conn = mysqli_connect($MYSQL_URL, $MYSQLUSER, $MYSQLPASSWORD, $MYSQLDATABASE);

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
