
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PHP HELLOWORLD</title>
</head>
<body>


<?php 
	echo "Hello World</p>";
?>
<?php
	echo date('H:i, jS F').'</p>';
	
	$tireqty=$_POST['tireqty'];
	$oilqty=$_POST['oilqty'];
	$sparkqty=$_POST['sparkqty'];
	$fruit = "りんご";
	echo "\$fruitには{$fruit}が代入されています。<br/>";
	$a=1;
	$b=$a;
	//$b=$a->__clone();
	$c=&$a;
	$a=5;
	echo $b."<br/>";
	

?>


<?php
$a=1;
$b=2;
function test(){
	$GLOBALS[a]=$GLOBALS[a]+$GLOBALS[b];
}
test();
echo $a;		//輸出結果會是3

?>
?>

</body>
</html>