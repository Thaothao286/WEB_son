<?php
	include('../../config/config.php');
     mysqli_set_charset($mysqli,"UTF8");
    
	if(isset($_POST['themsanpham']))
	{
		$prd_name = $_POST['prd_name'];
		$image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		$giasp = $_POST['giasp'];	
		$soluong = $_POST['soluong'];	
		$noisx = $_POST['noisx'];	
		$mota = $_POST['mota'];	
		$nhanhang = $_POST['brand_id'];
		$tinhtrang = $_POST['tinhtrang'];
      
		$sql_them = "INSERT INTO products(prd_name,image,giasp,soluong,noisx,mota,brand_id,tinhtrang) values('$prd_name','$image','$giasp','$soluong','$noisx','$mota','$nhanhang','$tinhtrang')";
		if(mysqli_query($mysqli,$sql_them))
		{
			echo"Thêm thành công";
		}else
		{
			echo"Thêm thất bại";
		}
		    move_uploaded_file($image_tmp,'uploads/'.$image);
			header('Location:../../index.php?action=quanlysp&query=lietke');
	}
	if(isset($_POST['suasanpham']))
		{
		    $prd_name = $_POST['prd_name'];
			$image = $_FILES['image']['name'];
			$image_tmp = $_FILES['image']['tmp_name'];
			$image = time().' '.$image;
			$giasp = $_POST['giasp'];	
			$soluong = $_POST['soluong'];	
			$noisx = $_POST['noisx'];	
			$mota = $_POST['mota'];	
			$nhanhang = $_POST['brand_id'];
			$tinhtrang = $_POST['tinhtrang'];
			if($image != "")
			{
				move_uploaded_file($image_tmp,'uploads/'.$image);
				$sql = "SELECT * FROM products WHERE prd_id = '$_GET[idsp]' LIMIT 1";
				$query = mysqli_query($mysqli,$sql);
				while($row= mysqli_fetch_array($query))
				{
					unlink('uploads/'.$row['image']);
				}
				$sql_update = "UPDATE products SET prd_name = '$prd_name', image = '$image', giasp = '$giasp', soluong = '$soluong', noisx ='$noisx', mota = '$mota',brand_id = '$nhanhang', tinhtrang = '$tinhtrang' WHERE prd_id = '$_GET[idsp]'";
			}else{
		    $sql_update = "UPDATE products SET prd_name = '$prd_name', giasp = '$giasp', soluong = '$soluong', noisx ='$noisx', mota = '$mota',brand_id = '$nhanhang', tinhtrang = '$tinhtrang' WHERE prd_id = '$_GET[idsp]'";
			}

		    mysqli_query($mysqli,$sql_update);
		    header('location: ../../index.php?action=quanlysp&query=lietke');	  
		}
	 else{
		$id = $_GET['idsp'];
		$sql = "SELECT * from products where prd_id = '".$id."'";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query))
		{
			unlink('uploads/'.$row['image']);
		}
		$sql_xoa = "DELETE  FROM products where prd_id = '".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=quanlysp&query=lietke');
	}
?>