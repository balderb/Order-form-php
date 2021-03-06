<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Order form food & drinks becode exerxise</title>
</head>


<body>
<div class="container">
    <h1>Order food in restaurant "the Personal Ham Processors"</h1>
    
    // php section
    <?php if (isset($_POST['order'])) : ?>
            <?php if (!array_filter($errors)) : ?>
                <?php session_unset(); ?>
                <?php $_COOKIE['order'] += $totalValue; ?>
                <?php setcookie('order', $_COOKIE['order'], time() + (86400 * 30), '/'); ?>
                <div class="alert alert-success text-success text-center" role="alert"><?= success($delivery, $totalValue); ?></div>
                <?php
                require 'email.php';
                ?>
            <?php endif; ?>
        <?php endif; ?>

    // end php section

    <nav>
        <ul class="nav">
            <li class="nav-item" <?= (!$_GET || $_GET['food']) ? 'active' : ''; ?> px-2">>
                <a class="nav-link active" href="?food=1">Order food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Order drinks</a>
            </li>
        </ul>
    </nav>
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">First name</label>
                <input type="text" id="email" name="firstname" class="form-control" placeholder="Please specify your first name"/>
            </div>
            <div></div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Last name</label>
                <input type="text" id="email" name="lastname" class="form-control" placeholder="Please specify your last name"/>
            </div>
            <div></div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Please specify your email"/>
            </div>
            <div></div>
        </div>

        <fieldset>
            <legend>Address</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Street:</label>
                    <input type="text" name="street" id="street" class="form-control" placeholder="Please specify your street name">
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Street number:</label>
                    <input type="text" id="streetnumber" name="streetnumber" class="form-control" placeholder="Please specify your street number">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" class="form-control" placeholder="In which city do you live?">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Zipcode</label>
                    <input type="text" id="zipcode" name="zipcode" class="form-control" placeholder="What's your Zipcode?">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Products</legend>
            <?php foreach ($products AS $i => $product): ?>
                <label>
                    <input type="checkbox" value="1" name="products[<?php echo $i ?>]"/> <?php echo $product['name'] ?> -
                    &euro; <?php echo number_format($product['price'], 2) ?></label><br />
            <?php endforeach; ?>
        </fieldset>

        <button type="submit" class="btn btn-primary">Order!</button>
    </form>

    <footer>You already ordered <strong>&euro; <?php echo $totalValue ?></strong> in food and drinks.</footer>
</div>

<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>