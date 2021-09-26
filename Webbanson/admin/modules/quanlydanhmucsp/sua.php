<?php 
  $sql_sua_danhmucsp = "SELECT * FROM brands WHERE brand_id = '$_GET[iddm]' LIMIT 1";
  $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2 style="text-align: center;">Sửa nhãn hàng</h2>
    </div>
    <div class="card-body">
      <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddm=<?php echo $_GET['iddm']?>">
        <div class="form-group">
          <label for="">Tên nhãn hàng: </label>
          <input type="text" name="brand_name" class="form-control" <?php
          while($dong = mysqli_fetch_array($query_sua_danhmucsp)){ 
          ?> required value="<?php echo $dong['brand_name'] ?>">
        <?php } ?>
      </div>
      </br>
      </br>
        <button type="submit" name="suadanhmuc" class="btn btn-success">Sửa</button>
      </form>
    
    </div>
  </div>
</div>