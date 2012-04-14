
<html>
<body>
<?php 
include('mysqlinit.php');

$name = $_POST['name'];
$passport = $_POST['passport'];

$query = "INSERT INTO `iguana`.`guests` (`ID`, `name`, `passport`, `checkin`, `checkout`) VALUES (NULL, '".$name."', '".$passport."', NOW(), '')";
mysql_query($query) or die("failed query");

?>
name: <?php echo $name; ?><br />
price: <?php echo $price; ?><br/>
item: <?php echo $item; ?><br/> 
<?php
mysql_close();
?>
<script>
location.href="adduser.php";
</script>

</body>
</html>

