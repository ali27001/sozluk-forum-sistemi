<!doctype html>
<?php
session_start();
include ("baglan.php"); ?>





<html lang="en">
  <head>
  <title> yorumlar </title>
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
  <body>


       <!-- menu cubugu  header -->
          <?php include('header.php') ?>

     <div class="container-fluid mt-3"  style="background-color:#f9f9f9;">


        <div class="row">
           <div class="col-md-3">  <!-- sol taraf   -->

               <?php include('sol.php') ?>


           </div>
           <div class="col-md-6">  <!-- içerikler  -->


             <div class="card">
               <div class="card-body">
                 <div class="row">
                    <div class="col-md-2">
                       <img src="https://t4.ftcdn.net/jpg/01/02/98/45/240_F_102984560_hdfURvoA3oBqTWwbxxvfhGsexf9aapO7.jpg" alt="..." class="rounded-circle w-50" >
                    </div>
                     <div class="col-md-3">

                       <h6 class="card-subtitle mb-2 text-muted">ali <span class="badge badge-secondary">Kral</span></h6>
                     </div>
                  </div>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <hr>

                     <div class= "text-right">
                       <i  class="material-icons mr-3">share</i>
                       <i  class="material-icons mr-3">flag</i>
                        <span>12.12.12 </span>
                      </div>

               </div>
              </div>

              <div class="">
                <form  id="yorum_formu" action="" method="post" onsubmit="return false">

                   
                <div class="form-group">
                     
                  <label for="exampleFormControlTextarea1">Example textarea 2</label>
                  <textarea class="form-control"  id="yorum" placeholder="yorumunuz..." rows="3"></textarea>
                </div>
                <button type="submit" value="yorum_ekle" onclick="yorumekle()" class="btn btn-primary">yorum yap</button>
              </form>

              </div>
              <center> yorumlar </center>

      <div id="yorumlar_div">
              <?php

              $icerik = $db->query("SELECT uyeler.adi, yorumlar.yorum, yorumlar.tarih ,yorumlar.id  FROM yorumlar, uyeler WHERE uyeler.id=yorumlar.yazar_id and yorumlar.yazi_id=".$g." ORDER BY id Desc");


              $icerik ->execute();
              while ($islem = $icerik->fetch(PDO::FETCH_ASSOC)){
                # code...
              echo '

                <div class="media mb-3">
                  <img class="mr-3" src="https://secure.gravatar.com/avatar/1391626bdfedd775b8426e7b821b31ec?s=64&d=mm&r=g" alt="Generic placeholder image">
                  <div class="media-body">
                    <h5 class="mt-0">'.$islem["adi"].'</h5>
                  '.$islem["yorum"].'
                  </div>
                </div>


              ';

              }
                 ?>

      </div>


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
