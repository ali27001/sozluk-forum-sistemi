
<?php include "baglan.php" ?>

<?php
 session_start();
$gosterilecek_yazi=@$_GET['yazi_id'];


$icerik = $db->query("SELECT uyeler.adi,yazilar.baslik,yazilar.detay,yazilar.tarih,yazilar.id ,yazilar.yazar_id FROM yazilar,uyeler WHERE uyeler.id=yazilar.yazar_id AND yazilar.id=$gosterilecek_yazi");
$icerik ->execute();
while ($islem = $icerik->fetch(PDO::FETCH_ASSOC)) {
  # code...
    
    
//  yorum saydırma conunt start
    
    $sorgu = $db->prepare("SELECT COUNT(*) FROM yorumlar WHERE yazi_id='$gosterilecek_yazi' ");
    $sorgu->execute();
    $yorumsayisi = $sorgu->fetchColumn();
   
    
    ///// count bitirs


   ?>




   <!doctype html>
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


    <!-- burası butona basıldıgında yapılacak ıslemler  yorumlar post ediyor-->
          <script type="text/javascript">

                 function yorumekle(){
                     $('#yorumlar-div').html();
                     $('.ust-yorum-ilk').remove();
                     $('.ust-yorum-alt').remove();
                     var yaziId = $('#yazi_id').val()
                     var yorum = document.getElementById('yorum').value;
                     if(yorum!="")
                     {
                        jQuery.ajax({
                            type:'POST',
                            url:'yorum.php',
                            data:'yorum='+yorum+'&yazi_id='+yaziId,
                            success:function(response){
                              document.getElementById("yorumlar_div").innerHTML = response+document.getElementById("yorumlar_div").innerHTML;
                              document.getElementById("yorum_formu").reset();
                            }




                        })

                     }
                     else {
                       alert("Boş yorum gönderezsniz!. ")
                     }
                 }


         </script>








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

                <div class="card mb-4">

                    <div class="card-body">
                      <div class="row">
                         <div class="col-md-2">
                            <img src="https://pbs.twimg.com/profile_images/420664858137202688/-rVVPBPf_400x400.png" alt="..." class="rounded-circle w-50" >
                         </div>
                          <div class="col-md-3">

                            <h5 class="card-title"><?php echo $islem["adi"]; ?> <span class="badge badge-secondary">Kral</span></h5>
                          </div>
                          <div class="col-md-7">
                             <h5 class="card-title" id="baslik_div"><?php echo $islem["baslik"];?> </h5>
                          </div>
                      </div>



                      <p class="card-text"> <?php echo $islem["detay"]; ?></p>
                      <hr>
                      <div class="row">
                        <div class="col-md-6">

                            <a href="#"><i class="material-icons">comment</i><span class="mr-3"> <?php echo $yorumsayisi;?> </span> </a>
                          
                         </div>
                         <div class= "col-md-6 text-right">
                           <i  class="material-icons mr-3">share</i>
                           <i  class="material-icons mr-3">flag</i>
                            <span><?php echo $islem["tarih"]; ?> </span>
                          </div>
                      </div>
                    </div>



                </div>  <!-- yazı  -->
                    <?php include ("yorumlaroz.php"); ?>
                 <!-- yorumlar  -->

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




<?php } ?>
