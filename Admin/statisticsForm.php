<?php
session_start();
// Validate session on each page
if (!isset($_SESSION['username'])) {
    // Redirect to login page or other appropriate action
    header("Location: login.php");
    exit();
}
include_once('layout/head.php');
include_once('../connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./Ảnh logo/372986215_692178822950132_2957802616111635882_n (1).jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        ADMIN - QUẢN LÝ NGƯỜI DÙNG
    </title>
    <link rel="stylesheet" href="./Fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="resetcss.php">
    <link rel="stylesheet" href="maincss.php">
    <link rel="stylesheet" href="main_detailed_pagecss.php">
    <link rel="stylesheet" href="basecss.php">
    <link rel="stylesheet" href="fontscss.php">
    <link rel="stylesheet" href="admincss.php">
    <link rel="stylesheet" href="cartcss.php">
    <link rel="stylesheet" href="adminUserManagementcss.php">
    <link rel="stylesheet" href="adminOrderManagementcss.php">
    <style>
        .order__info-user {
            margin: 30px 0 0 35px;
        }

        .order__table-info {
            padding: 0;
            border: 0;
            margin: 0;
        }

        statistics__td {
            border: 0px solid;
        }
    </style>
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
                    <div class="progress-bar">
                        <div class="progress-bar__main-content">
                            <a class="main-content__item" href="./admin.php"><b>Sản phẩm hot</b></a>
                            <a class="main-content__item" href="./adminStatistics.php">
                                <i class="fa-solid fa-arrow-right"></i>
                                <b>Thống kê</b>
                            </a>
                            <a class="main-content__item" href="./adminDetailedOrder.php">
                                <i class="fa-solid fa-arrow-right"></i>
                                <b>Xem chi tiết đơn hàng</b>
                            </a>
                        </div>
                    </div>
                    <div class="cart-title">
                        <h2>Đơn hàng</h2>
                    </div>
                    <div class="order__info-user">
                        <table class="order__table-info">
                            <tr>
                                <td class="title-info" style="border: 0;">
                                    Tên sản phẩm
                                </td>
                                <td class="detailed-info" style="border: 0;">Up your mass</td>
                            </tr>
                            <tr>
                                <td class="title-info" style="border: 0;">
                                    Loại sản phẩm
                                </td>
                                <td class="detailed-info" style="border: 0;">Sữa tăng cân</td>
                            </tr>
                            <tr>
                                <td class="title-info" style="border: 0;">
                                    Khoảng thời gian
                                </td>
                                <td class="detailed-info" style="border: 0;">01-01-2023 dến 01-01-2024</td>
                            </tr>
                            <tr>
                                <td class="title-info" style="border: 0;">
                                    Tổng số lượng bán ra
                                </td>
                                <td class="detailed-info" style="border: 0;">50</td>
                            </tr>
                        </table>
                    </div>

                    <div class="grid__column-12">
                        <div class="user-management">
                            <table>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt</th>
                                    <th>Trạng thái</th>
                                    <th>Thông tin</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>04/03/2023</td>
                                    <td><select id="status">
                                            <option value="volvo">Đã xử lý</option>
                                            <option value="saab">Chưa xử lý</option>
                                        </select></td>
                                    <td>
                                        <a href="./adminDetailedOrder.php">Xem chi tiết</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>04/03/2023</td>
                                    <td><select id="status">
                                            <option value="volvo">Đã xử lý</option>
                                            <option value="saab">Chưa xử lý</option>
                                        </select></td>
                                    <td>
                                        <a href="adminDetailedOrder.php">Xem chi tiết</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="main.js"></script> -->
</body>

</html>