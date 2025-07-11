<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./Ảnh logo/372986215_692178822950132_2957802616111635882_n (1).jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        ADMIN - THỐNG KÊ
    </title>
    <link rel="stylesheet" href="./Fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="resetcss.php">
    <link rel="stylesheet" href="maincss.php">
    <link rel="stylesheet" href="basecss.php">
    <link rel="stylesheet" href="fontscss.php">
    <link rel="stylesheet" href="admincss.php">
    <link rel="stylesheet" href="adminUserManagementcss.php">
    <link rel="stylesheet" href="adminOrderManagementcss.php">
</head>

<body>
    <div class="app">
        <header class="admin-header">
            <div class="grid">
                <nav class="admin-header__navbar">
                    <div class="admin-header__navbar-list-left">
                        <div class="admin-header__navbar-item">
                            <img src="./Ảnh logo/logo_image_1587131466.png" alt="" class="admin-header__logo-img">
                        </div>
                    </div>

                    <ul class="header__navbar-list admin-header__navbar-list-right">
                        <li class="header__navbar-item">
                            <i class="fa-solid fa-bell admin-header__icon"></i>
                        </li>
                        <li class="header__navbar-item">
                            <i class="fa-brands fa-facebook-messenger admin-header__icon"></i>
                        </li>
                        <li class="header__navbar-item ">
                            <img src="./Ảnh web admin/387123461_1563644207508135_2222331430281718689_n.jpg" alt=""
                                class="admin-header__img">
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="category__heading-icon fas fa-list"></i>
                                Danh mục
                            </h3>

                            <ul class="category-list">
                                <li class="category-item">
                                    <a href="./admin.php" class="category-item__link">THÔNG TIN ADMIN</a>
                                </li>
                                <li class="category-item">
                                    <a href="./adminUserManagement.php" class="category-item__link">QUẢN LÝ <br> NGƯỜI
                                        DÙNG</a>
                                </li>
                                <li class="category-item">
                                    <a href="./adminProductManagement.php" class="category-item__link">QUẢN LÝ <br> SẢN
                                        PHẨM</a>
                                </li>
                                <li class="category-item">
                                    <a href="./adminOrderManagement.php" class="category-item__link">QUẢN LÝ ĐƠN
                                        HÀNG</a>
                                </li>
                                <li class="category-item category-item__active">
                                    <a href="adminStatistics.php" class="category-item__link">THỐNG KÊ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="grid__column-10">
                        <div class="om-header__search">
                            <input type="text" id="inputField" class="om-header__search-input"
                                placeholder="Nhập để tìm kiếm">
                            <div class="om-header__search-btn">
                                <i class="om-header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>

                        <div class="om-header__search-date">
                            <form action="">
                                <label for="">Loại sản phẩm</label>
                                <select name="" id="">
                                    <option value="">Sữa tăng cân</option>
                                    <option value="">Tăng cơ bắp</option>
                                </select>
                                <br><br>
                                <label for="" class="search-date__from">Từ:</label>
                                <input type="date" id="" name="">
                                <span> - </span>
                                <label for="">Đến</label>
                                <input type="date" id="" name="">
                                <a href="./statisticsForm.php">
                                    <input type="button" onclick="" value="Xuất">
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="main.js"></script> -->
</body>

</html>