<?php
$sql = "SELECT * FROM sanpham";
$query = mysqli_query($connect, $sql);
?>
<div class="card">
    <div id="demo" class="banner carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href=""><img src="pic/banner1.jpg" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href=""><img src="pic/banner2.jpg" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href=""><img src="pic/banner3.jpg" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href=""><img src="pic/banner4.jpg" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href=""><img src="pic/banner5.jpg" alt=""></a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="card-header">
        <h3 class="title">DANH MỤC SẢN PHẨM</h3>
    </div>
    <div class="card-body">
        <section class="products">
            <?php
            while ($row = mysqli_fetch_assoc($query)) { ?>
                <section class="product">
                    <section class="img"><a href=""><img src="pic/<?php echo $row['hinhanh']; ?>" alt=""></a></section>
                    <section class="product-info">
                        <a href="" class="product-info">
                            <section class="name"><?php echo $row['tensp']; ?></section>
                            <section class="price"><?php echo number_format($row['gia'], 0) . " ₫"; ?></section>
                        </a>
                    </section>
                </section>
            <?php } ?>
        </section>
    </div>
</div>