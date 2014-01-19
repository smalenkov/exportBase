<html>

<head>
	<title>Phptest</title>
	<meta charset="utf-8">
	<meta html-equiv="Content-type" content="text/html" >
</head>

<body>
	
<?php

include "connect.php";

$query = "SELECT * FROM products, products_dosages WHERE products_dosages.product_id = products.id";
$result = mysql_query($query);

while ($res = mysql_fetch_array($result)) {
	print "Id: ".$res['id']."<br>\n";
	print "Id: ".$res['full_name']."<br>\n";
	print "Product_id: ".$res['product_id']."<br>\n";
	print "Name: ".$res['name']."<br>\n";
	print "Price: ".$res['price']."<br><br>\n";
}

mysql_free_result($result);
mysql_close($link);

?>

</body>
</html>
