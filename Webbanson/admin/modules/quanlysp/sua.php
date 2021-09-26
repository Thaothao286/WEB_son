<?php
      $sql_sua_sp = "SELECT * FROM products WHERE prd_id = '$_GET[idsp]' LIMIT 1";
      $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
      
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Sửa sản phẩm</h2>
    </div>
    <div class="card-body">
      <?php
        while($row_up = mysqli_fetch_array($query_sua_sp)){
      ?>
      <form method="POST" enctype="multipart/form-data" action= "modules/quanlysp/xuly.php?idsp=<?php echo $_GET['idsp'] ?>";>
        <div class="form-group">
          <label for="">Tên sản phẩm</label>
          <input type="text" name="prd_name" class="form-control" required value="<?php echo $row_up['prd_name'] ?>">
        </div>
        <div class="form-group">
          <label for="">Ảnh sản phẩm</label>
          <input type="file" name="image" class="form-control" >
        </div>
        <div class="form-group">
          <label for="">Giá sản phẩm</label>
          <input type="number" name="giasp" class="form-control" required value="<?php echo $row_up['giasp'] ?>">
        </div>
        <div class="form-group">
          <label for="">Số lượng</label>
          <input type="number" name="soluong" class="form-control" required value="<?php echo $row_up['soluong'] ?>">
        </div>
        <div class="form-group">
          <label for="">Nơi sản xuất</label>
          <input type="text" name="noisx" class="form-control" required value="<?php echo $row_up['noisx'] ?>">
        </div>
        <div class="form-group">
          <label for="">Mô tả</label>
          <input type="text" name="mota" class="form-control" required value="<?php echo $row_up['mota'] ?>">
        </div>
        <div class="form-group">
          <label for="">Nhãn hàng</label>
          <select class="form-control" name="brand_id">
            <?php
             $sql_brand = "SELECT * FROM brands order by brand_id DESC";
             $query_brand = mysqli_query($mysqli,$sql_brand);
             while($row_brand = mysqli_fetch_array($query_brand)){
            ?><option value="<?php echo $row_brand['brand_id'] ?>">
               <?php echo $row_brand['brand_name'] ?>
              </option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="">Tình trạng</label>
            <select name="tinhtrang" class="form-control">
              <?php
              if($dong['tinhtrang']!=1) {
              ?>
              <option value="0" selected>Hết hàng</option>
              <option value="1">Còn hàng</option>
              <?php
              }else{
              ?>
               <option value="0">Hết hàng</option>
               <option value="1" selected>Còn hàng</option> 
              <?php
              }
              ?>
            </select>
        </div>
        <button type="submit" name="suasanpham" class="btn btn-success">Sửa</button>
      </form>
    <?php } ?>
    </div>
  </div>
</div>
