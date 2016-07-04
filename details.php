<?php
session_start();
require_once "include/config.php";

//provjera dal postoji id filma kao parametar
if(!empty($_GET["id"])){
    $id_filma = (int)htmlspecialchars($_GET['id']);

    //dohvati podatke
    $sql_query = "SELECT * FROM predstava WHERE id = ".mysqli_real_escape_string($conn, $id_filma)."";
    $sql_data_query = mysqli_query($conn, $sql_query);
    $sql_data_result = mysqli_fetch_assoc($sql_data_query);
}
else{
    header("Location: index.php");
    die();    
}
?>  

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                /*padding-top: 50px;*/
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<!--     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Marvel theater</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          <ul>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          </ul>
          <p><a class="btn btn-primary btn-lg col-md-2" href="#" role="button">Cijenik &raquo;</a></p>
          <p><a class="btn btn-primary btn-lg col-md-2" href="#" role="button">Raspored &raquo;</a></p>
        </div> 
        
      </div>
    </nav> -->
    <!-- /.navbar-collapse -->
    <div class="row">
    <nav class="navbar navbar-default ">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Marvel theater</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-inverse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="cjenik.php">Cijenik</a></li>
            <li><a href="raspored.html">Raspored</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action 
    <!-- <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div> -->

    <div class="container">
        <div class="row">
        <?php
            echo "<img class='img-responsive img-thumbnail' src='img/".htmlspecialchars($sql_data_result['slika'])."'>";

            echo "<h3>GLumci:</h3> ".htmlspecialchars($sql_data_result['glumci'])."";
            echo "<h3>Cijena:</h3> ".htmlspecialchars($sql_data_result['cijena'])."";

            echo "<hr><ul class='nav nav-tabs'>
                        <li class='active'><a data-toggle='tab' href='#home'>Hrvatski</a></li>
                        <li><a data-toggle='tab' href='#menu1'>Engleski</a></li>
                    </ul>

                    <div class='tab-content'>
                        <div id='home' class='tab-pane fade in active'>
                            <h2>".htmlspecialchars($sql_data_result['ime'])."</h2><hr>
                            <p>".htmlspecialchars($sql_data_result['opis'])."</p>
                        </div>
                        <div id='menu1' class='tab-pane fade'>
                            <h2>".htmlspecialchars($sql_data_result['imeEng'])."</h2><hr>
                            <p>".htmlspecialchars($sql_data_result['opisEng'])."</p>
                        </div>
                    </div>";

        ?>

            <a href="index.php">
                <button class="btn btn-primary">Povratak na početnu</button>    
            </a>
        </div>        
    </div>

    <footer class="text-center">
        <p>&copy; Zvonimir Stubicar 2016</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
