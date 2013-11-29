<html>
<head>
<link href="jquery-mobile/jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css" />
<link href="jquery-mobile/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css" />
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head>
<body>
<div data-role="page" id="page">
<div data-role="content">Pesanan Anda :</div>

<?php
	$daftarmakanan = simplexml_load_file("note.xml");
    $totalharga=0;
	echo '<table border="1">';
	//memeriksa apakah checkbox dipilih atau tidak
	if(!empty($_POST['check_list'])) {
    	foreach($_POST['check_list'] as $check) {
			//menampilkan nama makanan yang dipilih oleh user melalui checkbox
            foreach ($daftarmakanan as $menu){
				//membandingkan string nama makanan yang dipilih oleh user melalui checkbox dengan data di XML
            	if (strcasecmp($check, $menu->nama)==0){
					//menampilkan harga makanan yang dipilih
	      			         echo'   
<tr>
<td>'.$menu->nama.'</td>
<td>'.$menu->harga.'</td>
</tr>';
					//menghitung total harga
	      			$totalharga+=$menu->harga;
	      		}
			}
			
			echo "<BR>";
	    }}
		echo '</table>';echo "<BR>";
	//menampilkan total harga yang harus dibayar
    echo "Total Harga = ".$totalharga;
?>
`