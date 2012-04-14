
<html>
<body>
<?php 
include('mysqlinit.php');

$name = $_POST['name'];
//$query = "INSERT INTO `iguana`.`purchases` (`ID`, `item`, `user`, `price`, `date`) VALUES (NULL, '".$name."', '".$item."', '".$price."', NOW())";
$query = "SELECT * FROM purchases WHERE user='".$name."'";
$result = mysql_query($query) or die("failed query");

$num=mysql_numrows($result);

$i=0;
$totalPrice = 0;
while ($i < $num) 
{
	$item=mysql_result($result,$i,"item");
	echo "Item: ".$item."\n";
	$price=mysql_result($result, $i, "price");
	echo "Price: ".$price."\n";
	$totalPrice += intvar($price)
	$i++;
}
echo "\n";
echo "Total: ".$totalPrice."\n";

?>
<?php
mysql_close();
?>
</body>
</html>

