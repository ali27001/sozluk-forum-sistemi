<!doctype html>
<?php
session_start();
include ("baglan.php"); ?>


<html lang="en">
  <head>
  <title> sözlük sitesi </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link  rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"   rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/main.css"/>
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
crossorigin="anonymous"></script>



  </head>
  <body style="background-color:#ececec";>


       <!-- menu cubugu  header -->
          <?php include('header.php') ?>

     <div class="container-fluid mt-3">


        <div class="row">
           <div class="col-md-3">  <!-- sol taraf   -->

               <?php include('sol.php') ?>


           </div>
           <div class="col-md-6">  <!-- içerikler  -->
                <div class="alert alert-danger" role="alert">
                 Websitemiz geliştirme aşamasındadır. Bu ilk sürümüdür. O yüzden aksaklıklar eksikler var. En kısa sürede gidereceğiz.
                </div>
                <?php include('icerik.php')   ?>

          </div>
           <div class="col-md-3">  <!-- sağ   -->
                <?php include('sag.php') ?>
           </div>
        </div>



     </div>


  <footer> <!-- footer   -->

  </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src"js/jquery-3.2.1.min.js"> </script>
    <script src"js/Bootstrap.min.js"> </script>
    <script src"js/main.js"> </script>
  </body>
</html>
