<?php
session_start();

if (isset($_SESSION['product_codes']) && !empty($_SESSION['product_codes'])) {
    echo "Geselecteerde ID's:<br>";
    foreach ($_SESSION['product_codes'] as $product_code) {
        echo $product_code . "<br>";
    }
} else {
    echo "Geen ID's geselecteerd.";
}
?>
