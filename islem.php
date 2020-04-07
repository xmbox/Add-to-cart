<?php  

if (isset($_GET['sepetEkle'])) {


	setcookie('sepet['.$_GET['id'].']',$_GET['adet'],strtotime('+1 day
		'));
	header("Location:sepet.php");
	exit;
	
}

if (isset($_GET['sepetSil'])) {


	setcookie('sepet['.$_GET['id'].']',$_GET['adet'],strtotime('-1 day
		'));
	header("Location:sepet.php");
	exit;
	
}


if (isset($_GET['sepetGuncelle'])) {


	foreach ($_GET['urun'] as $key => $value) {
		
		//echo $key."-".$value[0];
		setcookie('sepet['.$key.']',$value[0],strtotime('+1 day
		'));
		header("Location:sepet.php");
		exit;
	}
	
}
?>