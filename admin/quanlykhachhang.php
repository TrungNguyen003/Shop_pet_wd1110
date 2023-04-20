<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/qlhh.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
          Manager Pet.
          </div>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="bangdieukhien.php">
                Bảng điền khiển
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
               Tạo đơn mới
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              Quản lý dịch vụ
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              Quản lý khách hàng
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="quanlyhanghoa.php">
                Quản lý hàng hóa
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
                Doanh thu
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
                Đăng xuất
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>Quản lý khách hàng</h2>
        </div>
        <div class="main-cards">
         <a class="card" href="hehe.html">
            <div class="card-inner">
               <h2>Quản lý khách hàng</h2>
             
            </div>
            <h1>bla bla</h1>
         </a>

        <a class="card" href="">
            <div class="card-inner">
              <h2>Đăng kí thành viên</h2>
            </div>
            <h1>bla bla</h1>      
        </a>
        </div>
      </main>
    </div>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>