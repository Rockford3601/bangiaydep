<?php
// Define SECURE_CHECK constant to prevent direct access to component files
define('SECURE_CHECK', true);

// Load Cấu hình hệ thống
require_once __DIR__ . 'config/app.php';

// Xử lý tham số 'page' từ URL
$page_key = isset($_GET['page']) ? trim($_GET['page']) : 'home';

// Kiểm tra trang có thuộc Whitelist không
if (array_key_exists($page_key, $pages)) {
    $current_page = $pages[$page_key];
} else {
    http_response_code(404);
    $current_page = [
        'title' => '404 Not Found | Tuyển Chọn',
        'css'   => 'home.css',
        'file'  => 'pages/404.php'
    ];
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($current_page['title']); ?></title>
  <meta name="description" content="Trang web giày Nike theo phong cách Việt Nam." />
  
  <!-- CSS Dùng chung -->
  <link rel="stylesheet" href="assets/css/global.css" />
  
  <!-- CSS Riêng cho trang đang xem -->
  <link rel="stylesheet" href="assets/css/<?php echo $current_page['css']; ?>" />
</head>
<body>
  <div class="page-shell">
    
    <!-- 1. Gọi Topbar -->
         <?php include __DIR__ . '/components/topbar.php'; ?>


    <!-- 2. Gọi Main Header -->
    <?php include __DIR__ . '/components/header.php'; ?>

    <!-- 3. Tải nội dung động của Trang -->
    <?php include __DIR__ . '/' . $current_page['file']; ?>

    <!-- 4. Gọi Footer -->
    <?php include __DIR__ . '/components/footer.php'; ?>

  </div>
</body>
</html>
