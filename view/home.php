<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
   
</head>
<body>

<?php
include 'partials/nav.php';
?>

<?php foreach($products as $product){ ?> 
    <form method="post" action="home.php?action=add&id=<?php echo $product['product_id']; ?>">
     <?php   echo $product['product_id'];?>
     <h3>Name:<?php echo $product['product_name']; ?></h3>
     <h3>Price:<?php echo $product['product_price']; ?></h3>
     <h3>From:<?php echo $product['vendor_name']; ?></h3>
     <input type="number" name="quantity" value="1" />
	<input type="hidden" name="hidden_name" value="<?php echo $product['product_name']; ?>" />
 
		<input type="hidden" name="hidden_price" value="<?php echo $product['product_price']; ?>" />
        <input type="submit" name="add_to_cart"  value="Add to Cart" />
        </form>
<?php } ?>


</body>
</html>