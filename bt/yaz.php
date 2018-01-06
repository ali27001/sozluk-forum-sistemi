<?php require_once "baglan.php" ?>

<?php
session_start();




if( isset($_SESSION['adi']) ){



	if(isset($_POST['paylas'])){

	$baslik=trim($_POST['konu']);
	$detay=trim($_POST['detay']);

$yazar_id= $_SESSION['id'];




	if(!$baslik || !$detay){


		$bos_mesaj = "lütfen tüm alanları doldurunuz ";
	}else {

$detay=nl2br($detay);
		$insert= $db->prepare("INSERT INTO yazilar SET
	baslik=?,
	detay=?,
	yazar_id=?");
		$insert->execute([$baslik,$detay,$yazar_id]);
		if($db->lastInsertId()){
			echo "mesajınız kaydedildi";
			header("refresh :2; url=index.php");

		}else {
			echo "veri tabanı hatası nedeniyle kaydedilmedi";
		}
	}

	}





}
 else {
 header("Location:index.php");
 }
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


  </head>
  <body  style="background-color:#ececec";>


       <!-- menu cubugu  header -->
          <?php include('header.php') ?>

     <div class="container-fluid mt-3">


        <div class="row">
           <div class="col-md-3">  <!-- sol taraf   -->

               <?php include('sol.php') ?>


           </div>
           <div class="col-md-6">  <!-- içerikler  -->

             <div class="row justify-content-center">
             <div class="col-5">


               <div class="col-md-12">
                 <h2> Yaz! </h2>

                 <form action="#" method="post">

										 <?php if(!empty($bos_mesaj)): ?>
										 <div class="alert alert-danger" role="alert"><?= $bos_mesaj ?>  </div>
								 <?php endif; ?>


   <div class="form-group">
     <label for="exampleFormControlInput1">konu başlığı</label>
     <input type="text" class="form-control" name="konu" id="exampleFormControlInput1" placeholder="baslik">
   </div>


   <div class="form-group">
     <label for="exampleFormControlTextarea1">Detay</label>
     <textarea class="form-control" name="detay" id="exampleFormControlTextarea1" placeholder="anlatacaklarını burada detaylı yaz" rows="3"></textarea>
   </div>
   <div class="form-group row">
     <div class="col-sm-10">
       <button type="submit" name="paylas" class="btn btn-primary">paylaş</button>
     </div>
   </div>
 </form>

                 </div>



             </div>

           </div>



           </div>



           <div class="col-md-3">  <!-- sağ   -->
                <?php include('sag.php') ?>
           </div>
        </div>



     </div>


  <footer> <!-- footer   -->

  </footer>


      <?php

  if(isset($_POST['kayitol'])){

              $k_adi =trim ($_POST['k_adi']);
              $e_mail = trim($_POST['e_mail']);
              $sifre = trim(md5($_POST['sifre'])); //şifreleri md5 cevirdik
              $cinsiyet =trim( $_POST['cinsiyet']);

              if(!$k_adi || !$e_mail || !$sifre || !$cinsiyet){
                echo "lüften tüm alanları doldurunuz";
              }else{
                if(filter_var($e_mail,FILTER_VALIDATE_EMAIL) == false){
                  echo "lütfen gecerli bir mail adresi girin";
                }else {
                  $insert = $db->prepare("INSERT INTO uyeler SET
                    adi=?,
                    sifre=?,
                    email=?,
                    cinsiyet=?");
                    $insert->execute([$k_adi,$sifre,$e_mail,$cinsiyet]);

                    if($db->lastInsertId()){
                      echo "başarılı şekilde kayıt edildi.";
                    //  header("Refresh:2; url=index.php");
                    }  else{
                        echo "Hata oluştu kayıt yapılamadı!";
                      }
                    }
                }

              }







       ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src"js/jquery-3.2.1.min.js"> </script>
    <script src"js/Bootstrap.min.js"> </script>
    <script src"js/main.js"> </script>
  </body>
</html>
