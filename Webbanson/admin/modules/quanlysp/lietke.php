
<?php

	$sql_lietke_sp = "SELECT * FROM brands,products where brands.brand_id = products.brand_id order by products.prd_id DESC ";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Danh sách sản phẩm</h2>
		</div>
		<div class="card-body">
			<a class="btn btn-primary" href="?action=quanlysp&query=them">Thêm sản phẩm</a>
			<table class="table" border="1px">
				<thead class="thead-dark">
					<tr class="text-center" style="text-align:center;">
						<th>STT</th>
						<th>Tên sản phẩm</th>
						<th>Mã sản phẩm</th>
						<th>Hình ảnh</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Nơi sản xuất</th>
						<th>Mô tả</th>
						<th>Nhãn hàng</th>
						<th>Tình trạng</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
						while($row = mysqli_fetch_array($query_lietke_sp)){
					?>	<tr style="text-align:center">
							<td><?php echo $i++ ?></td>
							<td><?php echo $row['prd_name'] ?></td>
							<td><?php echo $row['prd_id'] ?></td>
							<td>
								<img src="modules/quanlysp/uploads/<?php echo $row['image'] ?>" width="150px">
							</td>
							<td><?php echo $row['giasp'] ?></td>
							<td><?php echo $row['soluong'] ?></td>
							<td><?php echo $row['noisx'] ?></td>
							<td><?php echo $row['mota'] ?></td>
							<td>
								<?php echo $row['brand_name'] ?>
							</td>
							<td><?php if ($row['tinhtrang'] == 1){
								echo"Còn hàng";
							}else echo "Hết hàng"; ?></td>
							<td>
								<a href="?action=quanlysp&query=sua&idsp=<?php echo $row['prd_id'] ?>">Sửa</a>
							</td> 
							<td>
								<a onclick="return Del('<?php echo $row['prd_name'] ?>')" href="modules/quanlysp/xuly.php?idsp=<?php echo $row['prd_id'] ?>">Xóa</a>
							</td>
						</tr>
					<?php }?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	function Del(name)
	{
		return confirm("Bạn có chắc chắn muốn xóa sản phẩm "+ name +" không?");
	}
</script>