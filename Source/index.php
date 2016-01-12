<?php
        require 'required.php';

        //onglet actif
        $activeTab = "index";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Magic School</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="jquery/jquery-2.0.3.js"></script>

  </head>

  <body>

    <div class="container">

     <?php include("includes/header.php"); ?>

      <div class="jumbotron" style="width:1200px;height:800px;">
        <div id="affichage">
            <center><img src='images/hermione.jpg'></img></center>
        </div>
      </div>

  <?php include("includes/footer.php"); ?>

  </div>

  </body>
</html>
