<?php include "baglan.php" ?>
<?php 

    
    
$icerik3 = $db->query("SELECT FROM yazilar,uyeler WHERE uyeler.id=yazilar.yazar_id ORDER BY yazilar.id Desc");
$3icerik ->execute();



while ($islem = $icerik->fetch(PDO::FETCH_ASSOC)) {
    
    
    
    
    
}
    
    
    
    
    
    
    
    
    

?>

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-secondary active">
    Son Yorumlar
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>
