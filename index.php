<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts1.css">
    <title>Trang chủ - Thu nghiem layouts</title>
    <link rel="icon" type="image/x-icon" href="anh/logodai_nen_tran.png">
</head>
<body>
    <div class="khung_background">
        
        <!-- 1. Gọi Header -->
        <?php include 'components/header.php'; ?>

        <!-- 2. Gọi Navbar -->
        <?php include 'components/navbar.php'; ?>

        <!-- 3. Khung thân (Sidebar + Nội dung động) -->
        <div class="khung_than">
            
            <!-- Gọi Sidebar -->
            <?php include 'components/sidebar.php'; ?>

            <!-- Khu vực chứa nội dung riêng của từng trang -->
            <main class="khung_noidung">
                <h2>NỘI DUNG TRANG CHỦ</h2>
                <!-- Sau này bạn có thể dùng include động ở đây (VD: include $page_content;) -->
            </main>

        </div>

        <!-- 4. Gọi Footer -->
        <?php include 'components/footer.php'; ?>

    </div>
</body>
</html>