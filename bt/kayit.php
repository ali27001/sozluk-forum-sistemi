
<?php
 session_start();
require_once "baglan.php"

?>

<?php

if( isset($_SESSION['adi']) ){
  //kullanıcı girişi varsa index yönlendir
 header("Location:index.php");


} else {

if(isset($_POST['kayitol'])){

        $k_adi =trim ($_POST['k_adi']);
        $e_mail = trim($_POST['e_mail']);
        $sifre = trim(md5($_POST['sifre'])); //şifreleri md5 cevirdik
        $cinsiyet =trim( $_POST['cinsiyet']);

        if(!$k_adi || !$e_mail || !$sifre || !$cinsiyet){

          $msjdoldur="lüften tüm alanları doldurunuz!";
        }else{
          if(filter_var($e_mail,FILTER_VALIDATE_EMAIL) == false){
            echo "lütfen gecerli bir mail adresi girin";
          }else {
            	$stmt = $db->prepare('SELECT * FROM uyeler WHERE adi = ?');
	$stmt->bindValue(1, $k_adi, PDO::PARAM_STR);
	$stmt->execute();
	if($stmt->rowCount() > 0)
	{
		echo "Bu üye adı daha önce başkası tarafından alınmış!";
    
	}
          
          } else 
          {
            $insert = $db->prepare("INSERT INTO uyeler SET
              adi=?,
              sifre=?,
              email=?,
              cinsiyet=?");
              $insert->execute([$k_adi,$sifre,$e_mail,$cinsiyet]);

              if($db->lastInsertId()){

                $msjbasarili="üyeliğiniz başarlı şekilde kayıt edildi!";
              //  header("Refresh:2; url=index.php");
              }  else{
                  echo "Hata oluştu kayıt yapılamadı!";
                }
              }
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
  <body style="background-color:#ececec";>


       <!-- menu cubugu  header -->
          <?php include('header.php') ?>

     <div class="container-fluid mt-3">


        <div class="row">
           <div class="col-md-3">  <!-- sol taraf   -->

               <?php include('sol.php') ?>


           </div>
           <div class="col-md-6">  <!-- içerikler  -->

            <div class="row">
              <div class="col-md-3"> <!-- bos  -->
              </div>
              <div class="col-md-6">


                  <?php if(!empty($msjdoldur)): ?>
                        <div class="alert alert-danger" role="alert"><?= $msjdoldur ?>  </div>
                    <?php endif; ?>

                    <?php if(!empty($msjbasarili)): ?>
                          <div class="alert alert-success" role="alert"><?= $msjbasarili ?>  </div>
                      <?php endif; ?>



                <h3> Üye Kayıt </h3>

                <form class="form-horizotal" action="#" method="post">
                        <div class="form-group row">
                          <label  class="col-sm-5 col-form-label">Kullanıcı adı</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" name="k_adi" placeholder="kulanıcı adı">
                          </div>
                        </div>
                      <div class="form-group row">
                        <label  class="col-sm-5 col-form-label">Email</label>
                        <div class="col-sm-7">
                          <input type="email" class="form-control" name="e_mail" id="staticEmail" placeholder="email@example.com">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Şifre</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control" name="sifre" id="inputPassword" placeholder="şifre">
                        </div>
                      </div>
                      <div class="form-grup row">
                          <label  class="col-sm-5 col-form-label">Cinsiyet</label>
                            <div class="col-sm-7">
                          <select class="form-control" name="cinsiyet">
                            <option value="0">seçiniz</option>
                            <option value="erkek">erkek</option>
                            <option value="kadin">kadın</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                         <div class="form-check">
                           <label class="form-check-label">
                             <input class="form-check-input" type="checkbox"> Bütün kuralları okudum kabul ediyorum.
                           </label>
                         </div>
                        </div>
                        <button type="submit" name="kayitol" class="btn btn-primary">Kayıt ol</button>
                </form>

              </div> <!-- uye kayıt formu  -->
              <div class="col-md-3"> <!-- bos  -->
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
