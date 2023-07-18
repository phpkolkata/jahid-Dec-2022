<?php
session_start();
$cart = $_SESSION['cart'];

print_r($cart);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
</head>
<body>

<h1>Cart</h1>

<div class="card shadow w-75 mx-auto mt-5">

<table cellpadding="10" border="1" height="50" width="100%" class="table" style="border: 1px solid #ccc;
	font-family: 'verdana'">		<tbody><tr>
			<th>Sl No.</th>
			<th>Product</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total price</th>
			<th colspan="3">Options</th>

		</tr>
    <?php
$grand = 0;
$sl = 0;
foreach ($cart as $pid => $qnty) {
    $sl++;
    $price = rand(100, 400);
    $total = $price * $qnty;
    $grand += $total;
    ?>

	<tr>
			<td align="center"><?php echo $sl ?></td>
			<td align="center"><?php echo "product " . $pid ?></td>
			<td align="center">₹<?php echo $price ?></td>
			<td align="center"><?php echo $qnty ?></td>
			<td align="center"><?php echo $total ?></td>

			<td align="center">
                <a href="addToCart.php?pid=<?php echo $pid ?>&op=add" style="text-decoration:none;font-size:25px">
                + </a>
            </td>

			<td align="center">
                <a href="addToCart.php?pid=<?php echo $pid ?>&op=del" style="text-decoration:none;font-size:25px">
                - </a>
            </td>

			<td align="center">
                <a href="addToCart.php?pid=<?php echo $pid ?>&op=rem" style="text-decoration:none;font-size:25px">
                x </a>
            </td>


	</tr>
<?php
}
?>
    <tr>
			<td colspan="4"> </td>
			<td colspan="" align="center" style="font-weight: bold;font-size: 20px">Grand Total</td>
			<td colspan="1" align="center" style="font-weight: bold;font-size: 20px">₹<?php echo $grand ?></td>
			<td colspan="3"> </td>

</tr>
</tbody>
</table>


</div>



</body>
</html>