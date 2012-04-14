
<html>
<body>
<form action="checkoutprocess.php" method="post">
<p>

<?php
include('mysqlinit.php');
$query = "SELECT * FROM guests";
$result = mysql_query($query) or die("failed query");
$num=mysql_numrows($result);

echo "<select name=\"name\">\n";
$i=0;
while ($i < $num) 
{
	$name=mysql_result($result,$i,"name");
	echo "<option value=\"".$name."\">".$name."</option>\n";
	$i++;
}
echo "<select><br>";
?>
</p>


<p><input type="submit" value="Checkout"></p>
</form>
</body>
</html>


