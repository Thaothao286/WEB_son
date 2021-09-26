<?php
	include('../../config/config.php');
     mysqli_set_charset($mysqli,"UTF8");
    
	if(isset($_POST['themdanhmuc']))
	{
		$tenloaisp = $_POST['brand_name'];
		$sql_them = "INSERT INTO brands(brand_name) values('".$tenloaisp."')";
		if(mysqli_query($mysqli,$sql_them))
		{
			echo"Thêm thành công";
		}else
		{
			echo"Thêm thất bại";
		}
			header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke'); // quay trở về màn hình chính
	}
	elseif(isset($_POST['suadanhmuc'])){
		$tenloaisp = $_POST['brand_name'];
		$sql_sua = "UPDATE brands SET brand_name='".$tenloaisp."' where brand_id = '$_GET[iddm]' ";  //iddm là id danh mục sp
		mysqli_query($mysqli,$sql_sua);
		header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
	}else{
		$id = $_GET['iddm'];
		$sql_xoa = "DELETE  FROM brands where brand_id = '".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
	}
?>