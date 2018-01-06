<?php
include ("baglan.php");
session_start();

if( isset($_SESSION['adi']) ){
  //kullanıcı girişi varsa index yönlendir
 header("Location:index.php");


} else {
  $v= $db->prepare("SELECT * FROM uyeler WHERE email=? and sifre=?");
  if ($_POST){
    $name =$_POST["name"];
    $pass =md5($_POST["pass"]);


    	$v ->execute(array($name,$pass));
    	$x = $v->fetch(PDO::FETCH_ASSOC);
       $d=$v->rowCount();

    if($d)  {//üye adı şifreye eşitse o zaman burayı gösterir
    	//$x["adi"]; şeklinde ise veri tabanındaki alan çekilir
    	$_SESSION['adi'] = $x["adi"];  //veritabanındak adı sesiona aktardık
    	$_SESSION['id'] = $x["id"];

   echo "hoş geldin lan dallama".$_SESSION['adi'];

   header("Location:index.php");

    }else {
      $mesaj= "işlem başarısız !";
    }

  }


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
                     <form action="#" method="POST">


                         <?php if(!empty($mesaj)): ?>
                               <div class="alert alert-danger" role="alert"><?= $mesaj ?>  </div>
                           <?php endif; ?>

                       <h3 class="mb-3"> Kullanıcı Girişi </h3>
                   <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                       <input type="email" class="form-control" name="name" id="inputEmail3" placeholder="Email">
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">Şifre</label>
                     <div class="col-sm-10">
                       <input type="password" class="form-control"  name="pass" id="inputPassword3" placeholder="Password">
                     </div>
                   </div>

                   <div class="form-group row">
                     <div class="col-sm-2"></div>
                     <div class="col-sm-10">
                       <div class="form-check">
                         <label class="form-check-label">
                           <input class="form-check-input" type="checkbox"> Beni hatırla
                         </label>
                       </div>
                     </div>
                   </div>
                   <div class="form-group row">
                     <div class="col-sm-10">
                       <button type="submit" class="btn btn-info">Giriş Yap</button>
                     </div>
                   </div>
                   </form>
                       <div class="form-group">
                     <label>  üye değilim  </label> <a href="kayit.php" class="badge badge-danger">Üye olmak istiyorum</a>

                       </div>

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src"js/jquery-3.2.1.min.js"> </script>
    <script src"js/Bootstrap.min.js"> </script>
    <script src"js/main.js"> </script>
  </body>
</html>
