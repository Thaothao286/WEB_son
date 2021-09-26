<?php
	$sql_lietke_danhmucsp = "SELECT * FROM brands order by brand_id DESC";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Danh sách nhãn hàng</h2>
		</div>
		<div class="card-body">
			<a class="btn btn-primary" href="?action=quanlydanhmucsanpham&query=them">Thêm nhãn hàng</a>
			<table class="table" border="1px">
				<thead class="thead-dark">
					<tr class="text-center">
						<th>STT</th>
						<th>Tên nhãn hàng</th>
						<th>Mã nhãn hàng</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
						while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
					?>	<tr class="text-center">
							<td><?php echo $i++ ?></td>
							<td><?php echo $row['brand_name'] ?></td>
							<td><?php echo $row['brand_id'] ?></td>
							<td>
								<a href="?action=quanlydanhmucsanpham&query=sua&iddm=<?php echo $row['brand_id'] ?>">Sửa</a>
							</td>
							<td>
								<a onclick="return Del('<?php echo $row['brand_name'] ?>')" href="modules/quanlydanhmucsp/xuly.php?iddm=<?php echo $row['brand_id'] ?>">Xóa</a>
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
		return confirm("Bạn có chắc chắn muốn xóa nhãn hàng "+ name + " không?");
	}
</script>