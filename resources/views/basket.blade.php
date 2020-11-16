<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Basket</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<?php
include 'header.php';

?>
<div class="container">
    <div class="row" style="padding-top:25px">
        <!-- <div class="container"> -->
        <div class="column">
            <div class="card" style="margin-bottom:25px">
                <div class="card-body">
                    <div class="container">
                        <h3>Basket (3)</h3>
                        <p class="lead">Choose all</p>
                    </div>
                </div>
            </div>
            <?php for ($i=0; $i < 3; $i++) { ?>
            <div class="card mb-3" style="max-width: 750px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://m.buro247.ru/images/senina/iPhone-12-black_large455678.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Product name</h5>
                            <p class="card-text">Description: This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Price: 231$</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <hr>
                            <a href="#" class="btn btn-primary">Order from this seller</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- </div> -->

        <div class="column">
            <!-- <div class="container"> -->
            <div class="card" style="margin-left:60px; width:300px">
                <div class="card-body">
                    <h5 class="card-title">Order price</h5>
                    <p class="card-text">The cost:</p>
                    <p class="card-text">Delivery:</p>
                    <hr>
                    <p class="card-text">To pay:</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>

</body>
</html>
