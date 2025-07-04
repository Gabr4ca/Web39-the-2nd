<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./Ảnh logo/logo 1_1615870157.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Roid Supplement - Cung cấp dược phẩm kích thích tăng cơ kém chất lượng
    </title>
    <link rel="stylesheet" href="./Fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="resetcss.php">
    <link rel="stylesheet" href="maincss.php">
    <link rel="stylesheet" href="basecss.php">
    <link rel="stylesheet" href="fontscss.php">
    <link rel="stylesheet" href="admincss.php">

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
                                <li class="category-item category-item__active">
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
                                <li class="category-item">
                                    <a href="adminStatistics.php" class="category-item__link">THỐNG KÊ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="grid__column-10">
                        <div class="home-product">
                            <div class="admin-grid__row">
                                <div class="profile-title">
                                    <b>Hồ sơ của admin</b>
                                </div>
                                <div class="admin__profile-info">
                                    <div class="admin-grid__column-7">
                                        <table class="table-info">
                                            <tr>
                                                <td class="title-info">
                                                    Admin Name:
                                                </td>
                                                <td class="detailed-info">Gabr4ca</td>
                                            </tr>
                                            <tr>
                                                <td class="title-info">
                                                    Name:
                                                </td>
                                                <td class="detailed-info">Hồ Nguyên Minh</td>
                                            </tr>
                                            <tr>
                                                <td class="title-info">
                                                    Email:
                                                </td>
                                                <td class="detailed-info">3122411123@sv.sgu.edu.vn</td>
                                            </tr>
                                            <tr>
                                                <td class="title-info">
                                                    Số điện thoại
                                                </td>
                                                <td class="detailed-info">99999999999</td>
                                            </tr>
                                            <tr>
                                                <td class="title-info">
                                                    Ngày sinh:
                                                </td>
                                                <td class="detailed-info">01-01-2000</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="admin-grid__column-3">
                                        <div class="admin__profile-img">
                                            <img src="./Ảnh web admin/326761819_835523774178349_2860054589749148865_n.jpg"
                                                alt="" class="profile-img__miniface">
                                            <form action="">
                                                <input type="file" name="uploadfile" id="img" style="display: none;">
                                                <label class="img" for="img">
                                                    <i style="font-size: 1.5rem;" class="fa-solid fa-image"></i>
                                                    <span style="font-size: 1.5rem;">Thêm hình ảnh</span>
                                                </label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>