<?php
require_once 'db/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spectral'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Shop đèn trang trí</title>
</head>

<body>
    <section class="wrapper">
        <header>
            <?php require_once 'components/Header.php'; ?>
        </header>
        <section class="body">
            <aside></aside>
            <article>
                <?php
                if (isset($_GET['page'])) {
                    switch ($_GET['page']) {
                        case 'danhsach':
                            require_once 'sanpham/danhsach.php';
                            break;
                        case 'them':
                            require_once 'sanpham/them.php';
                            break;
                        case 'sua':
                            require_once 'sanpham/sua.php';
                            break;
                        case 'xoa':
                            require_once 'sanpham/xoa.php';
                            break;
                        default:
                            require_once 'components/Home.php';
                            break;
                    }
                } else
                    require_once 'components/Home.php';
                ?>
            </article>
            <aside></aside>
        </section>
        <footer>
            <div class="card-footer text-muted">
                <?php require_once 'components/Footer.php'; ?>
            </div>
        </footer>
    </section>

</body>

</html>