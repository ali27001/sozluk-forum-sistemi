
<center> yorumlar </center>

<div id="yorumlar_div">
<?php

    $icerik = "";
    $yaziId = $_GET['yazi_id'];
    $yorumlarSql = "SELECT uyeler.adi, yorumlar.yorum, yorumlar.tarih ,yorumlar.id  FROM yorumlar, uyeler WHERE uyeler.id=yorumlar.yazar_id AND yorumlar.yazi_id=$yaziId ORDER BY id ASC";
$icerik = $db->query($yorumlarSql);
    

$icerik ->execute();
while ($islem = $icerik->fetch(PDO::FETCH_ASSOC)){
  # code...
echo '

  <div class="media mb-3 ust-yorum-ilk" style="background-color:#fff; padding: 10px; border-radius: 5px;";>
    <img class="mr-3" src="https://pbs.twimg.com/profile_images/420664858137202688/-rVVPBPf_400x400.png" widht="50px" height="50px" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0">'.$islem["adi"].'</h5>
    '.$islem["yorum"].'
    </div>
  </div>


';

}
   ?>

</div>
<div class="mb-10 "style="margin-buttom:100px";>
  <form  id="yorum_formu" action="" method="post" onsubmit="return false">
<input type="hidden" value="'<?php echo $_GET['yazi_id']; ?>'" id="yazi_id">
  <div class="form-group">
    <label for="exampleFormControlTextarea1" hidden="hidden">Example textarea</label>
    <textarea class="form-control"  id="yorum" placeholder="yorumunuz..." rows="3"></textarea>
  </div>
  <button type="submit" value="yorum_ekle" onclick="yorumekle()" class="btn btn-primary">yorum yap</button>
</form>
</div>

