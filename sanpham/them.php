<?php
if (isset($_POST['sbm'])) {
    $tensp = $_POST['tensp'];

    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

    $loaisp = $_POST['loaisp'];
    $mauchudao = $_POST['mauchudao'];
    $chatlieu = $_POST['chatlieu'];
    $kichthuoc = $_POST['kichthuoc'];
    $congsuat = $_POST['congsuat'];
    $khonggian = $_POST['khonggian'];
    $gia = $_POST['gia'];

    $sql = "INSERT INTO sanpham (tensp, hinhanh, loaisp, mauchudao, chatlieu, kichthuoc, congsuat, khonggian, gia) VALUES ('$tensp', '$hinhanh', '$loaisp', '$mauchudao', '$chatlieu', '$kichthuoc', '$congsuat', '$khonggian', $gia)";
    $query = mysqli_query($connect, $sql);
    move_uploaded_file($hinhanh_tmp, 'pic/' . $hinhanh);
    header('location: index.php?page=danhsach');
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm mới</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="tensp" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="hinhanh" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <input type="text" name="loaisp" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Màu chủ đạo</label>
                    <input type="text" name="mauchudao" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Chất liệu</label>
                    <input type="text" name="chatlieu" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Kích thước</label>
                    <input type="text" name="kichthuoc" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Công suất</label>
                    <input type="text" name="congsuat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Không gian</label>
                    <input type="text" name="khonggian" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Giá tiền</label>
                    <input type="number" name="gia" class="form-control" required>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">THÊM</button>
            </form>
        </div>
    </div>
</div>