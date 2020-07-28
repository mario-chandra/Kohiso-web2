<?php
  session_start();
 ?>
<html>

<head>
    <title>Kohiso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel='stylesheet' type="text/css" href="asset/style/style.css">
</head>

<body>
    <div class="head-container">
        <div class="container-img">
            <img src="asset/img/head.png">
        </div>
        <div class='container-main'>
            <?php include "navbar.php" ?>
            <div class="head-title">
                <h1>ABOUT US / PRESS</h1>
            </div>

        </div>
    </div>

    <div class="us-tab">
        <div class="row" style="width: 50%;margin: auto">

            <div class="col-6 tab">
                <a href="us.php" class="mr-5 nav-link active">ABOUT US</a>
            </div>
            <div class="col-6 tab">
                <a href="press.php" class="mr-5 nav-link">PRESS</a>
            </div>

        </div>
    </div>

    <div class="container-us">
        <div class="row m-0">
            <div class="col-6 us-img">
                <img src="asset/img/about%20(3).png">
            </div>
            <div class="col-6 us-main">
                <h1 class="us-main">OUR SHOPS</h1>
                <p class="us-main">Born and brewed in Indonesia since 2001, KoHiSo has always been passionate about connecting loyal customers with carefully handcrafted products.</p>
            </div>
        </div>

        <div class="row m-0">
            <div class="col-6 us-main">
                <h1 class="us-main">COFFEE SOURCING</h1>
                <p class="us-main">Our coffee master, Yusli Anto, only selects the top 1% of Arabica beans from the world’s best growing regions.</p>
            </div>
            <div class="col-6 us-img">
                <img src="asset/img/about%20(4).png">
            </div>
        </div>

        <div class="row m-0">
            <div class="col-6 us-img">
                <img src="asset/img/about%20(1).png">
            </div>
            <div class="col-6 us-main">
                <h1 class="us-main">TEA SOURCING</h1>
                <p class="us-main">When our tea master Andiak Nata became the Tea Ambassador of Indonesia, we figured we were doing something right.</p>
            </div>
        </div>

        <div class="row m-0">
            <div class="col-6 us-main">
                <h1 class="us-main">KOHISO</h1>
                <p class="us-main">KOHISO is program that every cup purchased about 10% will be funding to help children in the world. </p>
            </div>
            <div class="col-6 us-img">
                <img src="asset/img/about%20(2).png">
            </div>
        </div>
    </div>

    <?php
        require "footer.php";
    ?>

    <script src="asset/script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
