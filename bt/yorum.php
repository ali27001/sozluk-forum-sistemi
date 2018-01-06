<?php require_once "baglan.php";
    
    
session_start();




if( isset($_SESSION['adi']) ){

$yazar_id= $_SESSION['id'];
$yorum=trim(@$_POST["yorum"]);
$gosterilecek_yazi=@$_POST['yazi_id'];


$yorum=nl2br($yorum);
   $insert = "";
		$insert= $db->prepare("INSERT INTO yorumlar SET yorum=?, yazar_id=?, yazi_id=".$gosterilecek_yazi);
		$insert->execute([$yorum, $yazar_id]);
    
    
		if($db->lastInsertId()){
?>
			<div id="yorumlar_div">
                
              <?php
$icerik2 = "";
            /*
							$icerik2 = $db->query("SELECT uyeler.adi, yorumlar.yorum, yorumlar.tarih ,yorumlar.id  
                            FROM yorumlar, uyeler 
                            WHERE yorumlar.yazi_id=$gosterilecek_yazi
                            ORDER BY id Desc");
            */

            $yorumlarSql = "SELECT uyeler.adi, yorumlar.yorum, yorumlar.tarih ,yorumlar.id  FROM yorumlar, uyeler WHERE uyeler.id=yorumlar.yazar_id AND yorumlar.yazi_id=$gosterilecek_yazi ORDER BY id ASC";
$icerik2 = $db->query($yorumlarSql);
            

              $icerik2->execute();
              while ($islem2 = $icerik2->fetch(PDO::FETCH_ASSOC)){
                # code...
              echo '

                <div class="media mb-3 ust-yorum-alt"  style="background-color:#fff; padding: 10px; border-radius: 5px;";>
                  <img class="mr-3" src="https://pbs.twimg.com/profile_images/420664858137202688/-rVVPBPf_400x400.png"  widht="50px" height="50px" alt="Generic placeholder image">
                  <div class="media-body">
                    <h5 class="mt-0">'.$islem2["adi"].'</h5>
                  '.$islem2["yorum"].'
                  </div>
                </div>


              ';

              }
                 ?>

      </div>
			<?php
		}else {
			echo "veri tabanı hatası nedeniyle kaydedilmedi <br>";
		}



} else {  echo' <div class="alert alert-danger" role="alert">
                giriş yapmamışsınız. Lütfen Giriş yapınız!
                </div><br>';
 
}






 ?>
