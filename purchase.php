
<html>
<body>
<?php 
include('mysqlinit.php');

$name = $_POST['name'];
$item = $_POST['item'];
$price = $_POST['price'];
$query = "INSERT INTO `iguana`.`purchases` (`ID`, `item`, `user`, `price`, `date`) VALUES (NULL, '".$name."', '".$item."', '".$price."', NOW())";
mysql_query($query) or die("failed query");

?>
name: <?php echo $name; ?><br />
price: <?php echo $price; ?><br/>
item: <?php echo $item; ?><br/> 
<?php
mysql_close();
?>
<script>
location.href="index.php";
</script>

</body>
</html>
