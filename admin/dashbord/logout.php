
<?php
session_start();
session_destroy();
 
header("Location: /clgproject2024/admin/admin.php"); // Redirect to login page after logout
?>
