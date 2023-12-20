<?php
$UC = "SENDFORMFIRST";

if (!isset($_COOKIE['counter'])) {
    $counter = 0;
} else {
    $counter = $_COOKIE['counter'];
}

if (isset($_GET['add'])) {
    $UC = "SUBMITFORM";
}

if (isset($_GET['finish'])) {
    $UC = "TERMINER";
}

if ($UC == "SENDFORMFIRST") {
    include "contactForm.php";
}

if ($UC == "SUBMITFORM") {
    $fname = isset($_GET['fname']) ? $_GET['fname'] : '';
    $lname = isset($_GET['lname']) ? $_GET['lname'] : '';
    $address = isset($_GET['address']) ? $_GET['address'] : '';
    $tel = isset($_GET['tel']) ? $_GET['tel'] : '';

    setcookie('fname' . $counter, $fname, time() + 3600);
    setcookie('lname' . $counter, $lname, time() + 3600);
    setcookie('address' . $counter, $address, time() + 3600);
    setcookie('tel' . $counter, $tel, time() + 3600);
    setcookie('counter', $counter, time() + 3600);

    $counter++;
    
    include "contactForm.php";
}

if ($UC == "TERMINER") {
    echo "You entered form data " . $_COOKIE['counter']. " times";
}
?>
