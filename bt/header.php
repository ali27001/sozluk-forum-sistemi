
<?php
	include ("baglan.php");



//  var_dump($_SESSION);


	 if($_SESSION) { //sesion varsa demek kullanıcı varsa yanı gösterilecek yer
		echo '
		<nav class="navbar navbar-light"  style="background-color:#dad6cd;">
			<div class="container-fluid">
			 <div class="navbar-bland">
				 <a href="index.php">
				<img class="w-50" href="#" src="https://i.hizliresim.com/D7BDd1.png"> </a> 
			
			 </div>
			 <form class="form-inline">
				 <input class="form-control mr-sm-2" type="search" placeholder="@yazar,#içerik" aria-label="Search">
				 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ara</button>
			 </form>
			 <div>
       <a class="btn btn-danger" href="yaz.php" role="button">yaz</a>
			 <span> Merhaba '.$_SESSION["adi"].'</span>
			 <a class="btn btn-warning" href="cikis.php" role="button">çıkış</a>
		 </div>
		 </div>

		</nav>
		';


}else {
	echo '<nav class="navbar navbar-light"  style="background-color:#dad6cd;">
		<div class="container-fluid">
		 <div class="navbar-bland">
			 <a href="index.php">
			<img class="w-50" href="#" src="http://gezginsozluk.org/images/static/logo.png"> </a>
		 </div>
		 <form class="form-inline">
			 <input class="form-control mr-sm-2" type="search" placeholder="@yazar,#içerik" aria-label="Search">
			 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ara</button>
		 </form>
		 <div>
		 <a class="btn btn-info" href="giris.php" role="button">giriş yap</a>
		 <a class="btn btn-warning" href="kayit.php" role="button">kayıt ol</a>
	 </div>
	 </div>

	</nav>';

}


?>
