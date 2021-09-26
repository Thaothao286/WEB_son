<?php
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Thêm sản phẩm</h2>
    </div>
    <div class="card-body">
      <form method="POST" enctype="multipart/form-data" action="modules/quanlysp/xuly.php">
        <div class="form-group">
          <label for="">Tên sản phẩm</label>
          <input type="text" name="prd_name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Ảnh sản phẩm: </label>
          <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Giá sản phẩm: </label>
          <input type="number" name="giasp" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Số lượng: </label>
          <input type="number" name="soluong" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Nơi sản xuất: </label>
          <input type="text" name="noisx" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Mô tả: </label>
          <input type="text" name="mota" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Nhãn hàng: </label>
          <select class="form-control" name="brand_id">
            <?php
              $sqlbrand = "SELECT * from brands order by brand_id DESC";
              $query_brand = mysqli_query($mysqli,$sqlbrand);
             while($row_brand = mysqli_fetch_assoc($query_brand)){
            ?><option value="<?php echo $row_brand['brand_id'] ?>">
               <?php echo $row_brand['brand_name'] ?>
              </option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="">Tình trạng</label>
          <select class="form-control" name="tinhtrang">
            <option value="0">Ẩn sản phẩm</option>
            <option value="1">Kích hoạt sản phẩm</option>
          </select>
        </div>
        <button type="submit" name="themsanpham" class="btn btn-success">Thêm</button>
      </form>
    </div>
  </div>
</div>
