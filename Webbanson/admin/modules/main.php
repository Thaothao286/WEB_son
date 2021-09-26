<div class="clear"></div>
<div class="main_admin">
	<?php
	if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				} 
				else{
					$tam = ''; // trang chủ chứa ds mặt hàng và các chức năng chính của trang web
					$query='';
				}
				if($tam == 'quanlydanhmucsanpham' && $query == 'them'){
					include("modules/quanlydanhmucsp/them.php");
					include("modules/quanlydanhmucsp/lietke.php");
				}
				elseif($tam == 'quanlydanhmucsanpham' && $query == 'lietke'){
					include("modules/quanlydanhmucsp/lietke.php");
				}
				elseif($tam == 'quanlydanhmucsanpham' && $query == 'sua')
				{
					include("modules/quanlydanhmucsp/sua.php");
				}
				elseif($tam == 'quanlysp' && $query == 'them'){
					include("modules/quanlysp/them.php");
					include("modules/quanlysp/lietke.php");
				}
				elseif($tam == 'quanlysp' && $query == 'lietke'){
					include("modules/quanlysp/lietke.php");
				}
				elseif($tam == 'quanlysp' && $query == 'sua'){
					include("modules/quanlysp/sua.php");
				}
				else{
					include("modules/dashboard.php");
				}
	?>
</div>