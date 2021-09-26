<?php
	$sql_pro = "SELECT * FROM products WHERE products.brand_id = '$_GET[iddm]' Order by prd_id desc ";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	$sql_cate = "SELECT * FROM brands WHERE brands.brand_id = '$_GET[iddm]' LIMIT 1 ";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	if($row_title = mysqli_fetch_array($query_cate))
?>
<h2 style="text-align: center;">Nhãn hàng: <?php echo $row_title['brand_name'] ?> </h2>
				<ul class="product_list">
					<?php while($row_pro = mysqli_fetch_array($query_pro)){ ?>
					<li>
						<a href="">
							<img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['image']?>">
							<p class="title_product"><?php echo $row_pro['prd_name']?> </p>
							<p class="price_product">Giá: <?php echo $row_pro['giasp']?>đ</p>
						</a>
					</li>
					<?php } ?>
				</ul>