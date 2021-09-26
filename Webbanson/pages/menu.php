<?php
              $sqlbrand = "SELECT * from brands order by brand_id ASC";
              $query_brand = mysqli_query($mysqli,$sqlbrand);
             ?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">Trang chủ</a></li>
				<?php 
				while($row_brand = mysqli_fetch_array($query_brand)){
             	?>
				<li><a href="index.php?quanly=danhmucsanpham&iddm=<?php echo $row_brand['brand_id'] ?>"><?php echo $row_brand['brand_name'] ?></a></li>
			<?php } ?>
				
			</ul>
			<p style="float: left; margin-top: 10px; margin-right: 100px;">
			<form method="POST" action="index.php?quanly=timkiem">
				<input type="text" placeholder="Tìm kiếm sản phẩm.." name="tukhoa">
				<input type="submit" name="timkiem" value="Tìm kiếm">
			</form>
			</p>
		</div>
		<!-- placeholder cung cấp thêm thông tin để biết nhập dl gì, nằm trong thẻ input-->