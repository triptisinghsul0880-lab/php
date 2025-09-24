<?php
$name = isset($_GET['name']) ? $_GET['name'] : "Guest";
echo "Thank you, " . htmlspecialchars($name) . "! Your feedback has been submitted.";
?>
