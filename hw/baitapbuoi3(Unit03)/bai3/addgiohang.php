<?php
	session_start();
	if (isset($_SESSION['cart'])) {
		$giohang = $_SESSION['cart']; 
	}
	// echo "<pre>";
	// 	print_r($_SESSION);
	// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table width="600px" height="200px" border="2px" align="center">
		<tr>
			<td colspan="6"></td>
			<td align="center"><a href="listgiohang.php">Tiếp tục mua hàng</a></td>
		</tr>
		<tr>
			<td colspan="7" align="center" style="font-size: 20px;font-weight: bold;">Thông tin giỏ hàng (Hiện có <?= count($giohang) ?> sản phẩm trong giỏ hàng)</td>
		</tr>
		<tr>
			<td align="center">ID</td>
			<td align="center">Tên sản phẩm</td>
			<td align="center">Số lượng</td>
			<td align="center">Đơn giá</td>
			<td align="center">Thành tiền</td>
			<td align="center">Thời gian cập nhật</td>
			<td></td>
		</tr>
		<tbody>
		<?php
		$i = 0;
		$sum = 0;
		foreach ($giohang as $value) {
			$i++;
			$sum += $value['soluong']*$value['dongia'];
			?>
			<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['tensp']; ?></td>
				<td><?php echo $value['soluong']; ?></td>
				<td><?php echo number_format($value['dongia']); ?></td>
				<td><?php echo number_format($value['soluong']*$value['dongia']); ?></td>
				<td><?= $value['thoigian']; ?></td>
				<td>
					<a href="deletegiohang.php?id=<?= $value['id'] ?>">
						Xoá sản phẩm
					</a>
				</td>
			</tr>
		<?php } ?>
			<tr>
				<td colspan="4" style="font-weight: bold;">Tổng tiền</td>
				<td style="font-weight: bold;"><?= number_format($sum); ?></td>
			</tr>
	</tbody>  
	</table>
</body>
</html>