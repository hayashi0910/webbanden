<?php
$masp = $_GET['id'];

$sql_update = "SELECT * FROM sanpham WHERE masp = $masp";
$query_update = mysqli_query($connect, $sql_update);
$sanpham = mysqli_fetch_assoc($query_update);

if (isset($_POST['sbm'])) {
    $tensp = $_POST['tensp'];

    if ($_FILES['hinhanh']['name'] == '') {
        $hinhanh = $sanpham['hinhanh'];
    } else {
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        move_uploaded_file($hinhanh_tmp, 'pic/' . $hinhanh);
    }

    $loaisp = $_POST['loaisp'];
    $mauchudao = $_POST['mauchudao'];
    $chatlieu = $_POST['chatlieu'];
    $kichthuoc = $_POST['kichthuoc'];
    $congsuat = $_POST['congsuat'];
    $khonggian = $_POST['khonggian'];
    $gia = $_POST['gia'];

    $sql = "UPDATE sanpham SET tensp = '$tensp', hinhanh = '$hinhanh', loaisp = '$loaisp', mauchudao = '$mauchudao', chatlieu = '$chatlieu', kichthuoc = '$kichthuoc', congsuat = '$congsuat', khonggian = '$khonggian', gia = $gia WHERE masp = $masp";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page=danhsach');
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa thông tin sản phẩm</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="tensp" class="form-control" required value="<?php echo $sanpham['tensp']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="hinhanh" class="form-control" value="<?php echo $sanpham['hinhanh']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <input type="text" name="loaisp" class="form-control" required value="<?php echo $sanpham['loaisp']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Màu chủ đạo</label>
                    <input type="text" name="mauchudao" class="form-control" required value="<?php echo $sanpham['mauchudao']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Chất liệu</label>
                    <input type="text" name="chatlieu" class="form-control" required value="<?php echo $sanpham['chatlieu']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Kích thước</label>
                    <input type="text" name="kichthuoc" class="form-control" required value="<?php echo $sanpham['kichthuoc']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Công suất</label>
                    <input type="text" name="congsuat" class="form-control" required value="<?php echo $sanpham['congsuat']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Không gian</label>
                    <input type="text" name="khonggian" class="form-control" value="<?php echo $sanpham['khonggian']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Giá tiền</label>
                    <input type="number" name="gia" class="form-control" required value="<?php echo $sanpham['gia']; ?>">
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">LƯU</button>
            </form>
        </div>
    </div>
</div>