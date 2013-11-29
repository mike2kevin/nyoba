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
				$f1 = "http://localhost/a/habib-andy/index.php/ws/menu/semua";
				$f2 = "http://localhost/a/II3160-18211017-18211043/database_collection/xmldb.xml";
				$f3 = "http://localhost/a/BernadetteVina/csv.php";
				$f4 = "http://localhost/a/II3160-18211003-18211050/menu.xml";
				$f5 = "http://localhost/a/II3160--Pemrograman-Integratif-/DaftarIdol.xml";
				$f6 = "http://localhost/a/II3160-Tugas1-Tugas2/tab2.xml";
				$f7 = "http://localhost/a/IPT-Assignments/data2.xml";
				$f8 = "http://localhost/a/pemrograman_integratif/output.xml";
				$f9 = "http://localhost/a/Workspace/Menu.xml";
				$f10 = "http://localhost/a/progin/contoh.xml";
				$f11 = "http://localhost/a/Progint/data/xml/1.xml";
				$f12 = "http://localhost/a/BernadetteVina/DataXML.xml";
				$f13 = "http://localhost/a/testPHP2/test.xml";
				$f14 = "http://localhost/a/tugas-2-pemrograman-integratif/data3.xml";
				$f15 = "http://localhost/a/web-service/datasiswa.xml";
			echo "<h1> Mengambil XML... </h1>";
			for ($i=1; $i<16; $i++){
				$nf="f".$i;
				echo "x.$i".$$nf; 
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