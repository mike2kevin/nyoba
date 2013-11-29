<html>
<head>
<link href="jquery-mobile/jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css" />
<link href="jquery-mobile/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css" />
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head>
<body>
<div data-role="page" id="page">
<div data-role="content">Menu non babi :</div>


<?php
$xml=simplexml_load_file("note.xml");
$x=0;
foreach($xml->children() as $child)
  {
  if ($child->t == 'satu' or 'dua' or 'tiga') {
	echo $child->nama . '<br><br>';
	$temp[$x] = $child->nama;
echo  "<script type='text/javascript'>
	
    function showDiv(id) {
        if (document.getElementById(id).style.display == 'block') {
            document.getElementById(id).style.display = 'none';
        } else {
            document.getElementById(id).style.display = 'block';
        }
    }
</script>";
echo "<div id='".$temp[$x]."'  style='display:none;' class='answer_list' >'".$child->ket."' </div>";
echo '<input type="button" name="'.$temp[$x].'" id="'.$temp[$x].'" value="Lihat keterangan menu" onclick="showDiv(this.id)" />';
  $x++;
  }
  }
?>
<div align="left"><a href="home.php" data-role="button" data-icon="arrow-r">Back</a></div>
</div>
</body>
</html>