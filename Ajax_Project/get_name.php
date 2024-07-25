<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "Hello, " . $name . "!";
} else {
    echo "Please enter a name.";
}
?>
