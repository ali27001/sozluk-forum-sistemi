

<?php include "baglan.php" ?>



<script>
$(document).ready(function(){

    $("#baslik_div").click(function(){


    });

});
</script>


 
<?php


$icerik = $db->query("SELECT uyeler.adi, yazilar.baslik, yazilar.detay, yazilar.tarih, yazilar.id FROM yazilar,uyeler WHERE uyeler.id=yazilar.yazar_id ORDER BY yazilar.id Desc");
$icerik ->execute();



while ($islem = $icerik->fetch(PDO::FETCH_ASSOC))


 {
    
    $yazi_id_cekilen=$islem['id'];
  # code...
//  yorum saydırma conunt start
    
    $sorgu = $db->prepare("SELECT COUNT(*) FROM yorumlar WHERE yazi_id='$yazi_id_cekilen' ");
    $sorgu->execute();
    $yorumsayisi = $sorgu->fetchColumn();
   

    
    //////---------------- devamını oku kısmı baslangıc---------------
    $detay=$islem["detay"];
    $sayisi =strlen($detay);
    

    ///////------------------devamını oku bitiş -------------
    
    ///// count bitirs


////------ sayfalama baslangıc ---------------//
    /*
    $sayfa = @intval($_GET["sayfa"]); if(!$sayfa) {$sayfa =1;}
    $say = $db->query("SELECT * from yazilar");
    $toplamVeri = $say->rowCount(); //verileri saydırdık.
    $limit = 10;
    $sayfa_sayisi = ceil($toplamVeri/$limit);
    if($sayfa>$sayfa_sayisi){
        $sayfa = 1;
    }
    
    $goster = $sayfa * $limit; 
    $gorunen_sayfa = 6;
    $makale = $db->query("selec * from yorumlar by id desc limit $goster,$limit");
    $makale_al = $makale-> fetchAll(PDO::FETCH_ASSOC);
    ////------ sayfalama bitis ---------------//

*/

   ?>



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
              
             <h5 class="card-title" id="baslik_div" ><?php  echo "<a href='yazi.php?yazi_id=" . $islem['id'] . " '  > $islem[baslik] </a> " ; ?> </h5>
          </div>
      </div>



      <p class="card-text"> <?php  
   if($sayisi>500){
        $detay=substr($detay,0,500);

        echo $detay."..."."<a href='yazi.php?yazi_id=" . $islem['id'] . " '  > devamını oku </a> " ; 
        
    }
    else {
        echo $detay;
    } ?></p>
      <hr>
      <div class="row">
        <div class="col-md-6">
            <a href="yazi.php?yazi_id=<?php echo $yazi_id_cekilen;?>"><i class="material-icons">comment</i><span class="mr-3"> <?php echo $yorumsayisi;?> </span> </a>
           
         </div>
         <div class= "col-md-6 text-right">
           <i  class="material-icons mr-3">share</i>
           <i  class="material-icons mr-3">flag</i>
            <span><?php echo $islem["tarih"]; ?> </span>
          </div>
      </div>
    </div>




</div>

<?php } ?>

