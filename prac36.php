<?php
if (isset($_GET['name'])) {
    echo "Hello, " . $_GET['name'];
} else {
    echo "Hello, Guest";
}
?>