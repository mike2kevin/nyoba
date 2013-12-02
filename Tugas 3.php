<html>
<head>
<link href="jquery-mobile/jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css" />
<link href="jquery-mobile/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css" />
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head>
<body>
<div data-role="page" id="page">
	<div data-role="fieldcontain">
		<?php 
		function test_xml(){
				$f1 = "http://localhost/habib-andy/index.php/ws/menu/semua";
				$f2 = "http://localhost/II3160-Tugas-18211011-18211053/index.php/search/korans";
				$f3 = "http://localhost/BernadetteVina/csv.php";
				$f4 = "http://localhost/ningenis/II3160-Progin-18211002-18211033/getSelf.php?input=semua";
				$f5 = "http://localhost/pemrograman-integratif/artis.php";
				$f6 = "http://localhost/pemrograman_integratif/informasi_xml.php?nim=all";
				$f7 = "http://localhost/18211037/RestWebService/index.php/api/Liverpool/players/format/xml";
				$f8 = "http://localhost/II3160-18211017-18211043/index.php/Api/xml_from_sql";
				$f9 = "http://localhost/II3160-18211013-18211047/xmlconvert.php/pegawai";
				$f10 = "http://localhost/Progint-yogidanang/?kolom=all";
				$f11 = "http://localhost/18211010-18211035/searchmhs.php?tag=all";
				$f12 = "http://localhost/pradita72/II3160--Pemrograman-Integratif-/ShowIdol.php?show=Info+Idol";
				$f13 = "http://localhost/II3160-Pemograman-Integratif/show.php?data=makanan.xml";
				$f14 = "http://localhost/18211014-dan-18211029/index2.php?state=state1&submit2=Submit";
				$f15 = "http://localhost/II3160-18211003-18211050/punya_sendiri/?search=menu";
				$f16 = "http://localhost/Progint/xml.php";
			echo "<h1> Mengambil XML... </h1>";
			for ($i=1; $i<17; $i++){
				$nf="f".$i;
				echo "Tugas Teman $i"; 
				$temp = simplexml_load_file($$nf);
				if ($temp){
					if (count($temp) != 0){					
						echo "<table border=\"1\">";
						foreach($temp->children()->children() as $child1){
							echo "<th>".$child1->getName()."</th>";
						}
						foreach($temp->children() as $child){
							echo "<tr>";
							foreach($child->children() as $child1){
								echo "<td>$child1</td>";
							}
							echo "</tr>";
						}				
						echo "</table>";
					}
					else {
						echo "Data Kosong";
					}
					echo "<br>";
				}
			};	
		}	
		echo test_xml();
		?>
	</div>
  
</div>

</body>
</html>