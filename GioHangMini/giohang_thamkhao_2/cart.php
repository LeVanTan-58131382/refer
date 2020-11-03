<?php

session_start();
$status = "";

// Xóa một sản phẩm khỏi giỏ hàng
if (isset($_POST['action']) && $_POST['action'] == "remove") {
	if (!empty($_SESSION["gio_hang"])) {
		foreach ($_SESSION["gio_hang"] as $key => $value) {
			if ($_POST["code"] == $key) {
				unset($_SESSION["gio_hang"][$key]);
				$status = "<div class='box' style='color:red;'>
							Sản phẩm đã được xóa khỏi giỏ hàng của bạn!</div>";
			}
			if (empty($_SESSION["gio_hang"]))
				unset($_SESSION["gio_hang"]);
		}
	}
}

// Cập nhật số lượng sản phẩm
if (isset($_POST['action']) && $_POST['action'] == "change") {
	foreach ($_SESSION["gio_hang"] as &$value) {
		if ($value['code'] === $_POST["code"]) {
			$value['quantity'] = $_POST["quantity"];
			break; // Dừng vòng lập sau khi đã tìm được sản phẩm mà người dùng thay đổi số lượng
		}
	}
}
?>
<html>

<head>
	<title>Demo Giỏ hàng</title>
	<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>

<body>
	<div style="width:700px; margin:50 auto;">

		<h2>Demo Giỏ hàng</h2>

		<?php
		if (!empty($_SESSION["gio_hang"])) {
			// Hiển thị số lượng sản phẩm qua số lượng mã sản phẩm trong giỏ hàng
			$cart_count = count(array_keys($_SESSION["gio_hang"]));
		?>
			<div class="cart_div">
				<a href="cart.php">
					<img src="cart-icon.png" /> Giỏ hàng
					<span><?php echo $cart_count; ?></span></a>
			</div>
		<?php
		}
		?>

		<div class="cart">
			<?php
			if (isset($_SESSION["gio_hang"])) {
				$total_price = 0;
			?>
				<table class="table">
					<tbody>
						<tr>
							<td></td>
							<td>Tên mặt hàng</td>
							<td>Số lượng</td>
							<td>Giá mỗi chiếc</td>
							<td>Tổng tiền</td>
						</tr>
						<?php
						foreach ($_SESSION["gio_hang"] as $product) {
						?>
							<tr>
								<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
								<td><?php echo $product["name"]; ?><br />
									<form method='post' action=''>
										<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
										<input type='hidden' name='action' value="remove" />
										<button type='submit' class='remove'>Xóa sản phẩm</button>
									</form>
								</td>
								<td>
									<form method='post' action=''>
										<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
										<input type='hidden' name='action' value="change" />
										<select name='quantity' class='quantity' onChange="this.form.submit()">
											<option <?php if ($product["quantity"] == 1) echo "selected"; ?> value="1">1</option>
											<option <?php if ($product["quantity"] == 2) echo "selected"; ?> value="2">2</option>
											<option <?php if ($product["quantity"] == 3) echo "selected"; ?> value="3">3</option>
											<option <?php if ($product["quantity"] == 4) echo "selected"; ?> value="4">4</option>
											<option <?php if ($product["quantity"] == 5) echo "selected"; ?> value="5">5</option>
										</select>
									</form>
								</td>
								<td><?php echo "$" . $product["price"]; ?></td>
								<td><?php echo "$" . $product["price"] * $product["quantity"]; ?></td>
							</tr>
						<?php
							$total_price += ($product["price"] * $product["quantity"]);
						}
						?>
						<tr>
							<td colspan="5" align="right">
								<strong>TOTAL: <?php echo "$" . $total_price; ?></strong>
							</td>
						</tr>
					</tbody>
				</table>
			<?php
			} else {
				echo "<h3>Giỏ hàng của bạn đang rỗng!</h3>";
			}
			?>
		</div>

		<div style="clear:both;"></div>

		<div class="message_box" style="margin:10px 0px;">
			<?php echo $status; ?>
		</div>


		<br /><br />

	</div>
</body>

</html>