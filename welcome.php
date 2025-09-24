<?php
if (isset($_POST['username'])) {
    $name = $_POST['username'];
    echo "<h2>Welcome, " . htmlspecialchars($name) . "!</h2>";
} else {
    echo "Please enter your name first!";
}
?>
