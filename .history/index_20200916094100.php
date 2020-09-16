<?php
//this line makes PHP behave in a more strict way. it might be interesting to look-up more about this! 
declare(strict_types=1);

//we are going to use session variables so we need to enable sessions
session_start();

$totalValue = 0;
$fname = $lname = $email = $street = $streetnumber = $city = $zipcode = $success = '';
$errors = ['fname' => '', 'lname' => '', 'email' => '', 'street' => '', 'streetnumber' => '', 'city' => '', 'zipcode' => '', 'product' => '', 'delivery' => ''];
define("dp_email", "becodephp@gmail.com");



function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

//your products with their price. (!)Important information: this is an "associative array"
$products = [
    ['name' => 'Club Ham', 'price' => 3.20],
    ['name' => 'Club Cheese', 'price' => 3],
    ['name' => 'Club Cheese & Ham', 'price' => 4],
    ['name' => 'Club Chicken', 'price' => 4],
    ['name' => 'Club Salmon', 'price' => 5]
];

$products = [
    ['name' => 'Cola', 'price' => 2],
    ['name' => 'Fanta', 'price' => 2],
    ['name' => 'Sprite', 'price' => 2],
    ['name' => 'Ice-tea', 'price' => 3],
];

$totalValue = 0;

require 'form-view.php';
