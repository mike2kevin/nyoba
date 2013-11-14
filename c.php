<html>
<head>
<link href="jquery-mobile/jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css" />
<link href="jquery-mobile/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css" />
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head>
<body>
<div data-role="page" id="page">
<div data-role="content">Nama - Nama dalam organisasi :</div>

<?php
$xml=simplexml_load_file("note.xml");
foreach($xml->children() as $child)
  {
  echo $child->nama . ", bekerja sebagai " . $child->jabatan . ". <br>" . $child->gender . " yang merupakan
lulusan dari ". $child->lulusan . " ini sudah bekerja pada organisasi selama " . $child->lamaKerja . " tahun." . "<br><br><br>"; 
  }
?>
<div align="left"><a href="home.php" data-role="button" data-icon="arrow-r">Back</a></div>
</div>
</body>
</html>