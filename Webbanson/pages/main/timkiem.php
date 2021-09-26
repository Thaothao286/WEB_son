<?php
	if(isset($_POST['timkiem']))
	{
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM products WHERE products.prd_name LIKE '%".$tukhoa."%' or products.prd_id LIKE '%".$tukhoa."%' or products.noisx LIKE '%".$tukhoa."%' or products.giasp LIKE '%".$tukhoa."%' ";
	$query_pro = mysqli_query($mysqli,$sql_pro);
?>
<h2 style="text-align: center; color: darkred;">Tìm kiếm cho sản phẩm: <?php $_POST['tukhoa'] ?></h2>
				<ul class="product_list">
					<?php while($row_pro = mysqli_fetch_array($query_pro)){ ?>
					<li>
						<a href="">
							<img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['image'] ?>">
							<p class="title_product"><?php echo $row_pro['prd_name'] ?></p>
							<p class="price_product">Giá: <?php echo $row_pro['giasp'] ?>đ</p>
						</a>
					</li>
					<?php } ?>
				</ul>