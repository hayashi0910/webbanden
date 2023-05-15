<?php
$sql = "SELECT * FROM sanpham";
$query = mysqli_query($connect, $sql);
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản lý sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Loại sản phẩm</th>
                        <th>Màu chủ đạo</th>
                        <th>Chất liệu</th>
                        <th>Kích thước</th>
                        <th>Công suất</th>
                        <th>Không gian</th>
                        <th style="width:10%">Giá tiền</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['tensp']; ?></td>
                            <td>
                                <img src="pic/<?php echo $row['hinhanh']; ?>" style="width:100%">
                            </td>
                            <td><?php echo $row['loaisp']; ?></td>
                            <td><?php echo $row['mauchudao']; ?></td>
                            <td><?php echo $row['chatlieu']; ?></td>
                            <td><?php echo $row['kichthuoc']; ?></td>
                            <td><?php echo $row['congsuat']; ?></td>
                            <td><?php echo $row['khonggian']; ?></td>
                            <td><?php echo number_format($row['gia'], 0) . " ₫"; ?></td>
                            <td>
                                <a href="index.php?page=sua&id=<?php echo $row['masp']; ?>">Sửa</a>
                            </td>
                            <td>
                                <a onclick="return Del('<?php echo $row['tensp']; ?>')" href="index.php?page=xoa&id=<?php echo $row['masp']; ?>">Xoá</a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
            <a class='btn btn-primary' href="index.php?page=them">THÊM MỚI</a>
        </div>
    </div>
</div>

<script>
    function Del(name) {
        return confirm("Bạn có chắc chắn muốn xoá sản phẩm: " + name + " ?");
    }
</script>