<?php header("Content-type: text/css"); ?>
.admin-header {
height: 56px;
background-image: linear-gradient(0, #2f2d2d, #313538);
}

.admin-header__navbar {
display: flex;
justify-content: space-between;
align-content: center;
height: 56px;
}

.admin-header__navbar-list-left {
width: 400px;
height: 56px;
list-style: none;
margin: 0;
padding: 0;
display: flex;
flex-wrap: wrap;
align-content: center;
}

.admin-header__navbar-item {
margin: 0 8px;
position: relative;
}

.admin-header__navbar-item,
.admin-header__navbar-item-link
{

font-size: 1.5rem;
color: var(--white-color);
text-decoration: none;
/* bỏ dấu ngoặc của thẻ a */
}

.admin-header__logo-img {
width: 150px;
height: 50px;
}

.admin-header__search {
background-color: #0e0101;
flex: 1;
width: 240px;
height: 40px;
border-radius: 2px;
}

.admin-header__navbar-list-right {
display: flex;
flex-wrap: wrap;
}

.admin-header__icon {
font-size: 3rem;
}

.admin-header__img {
width: 33px;
border-radius: 50%;
}

/* Danh mục -> Sản phẩm hot */

.profile-title {
text-transform: uppercase;
font-size: 1.5rem;
color: var(--text-color);
padding: 12px 16px 13px 16px;
margin-top: 0;
border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

/* Ảnh đại diện */
.admin__profile-img {
display: flex;
flex-direction: column;
flex-wrap: wrap;
align-content: center;
}

.profile-img__miniface {
width: 150px;
border-radius: 50%;
padding-bottom: 10px;
}

.admin__upload-img-btn {
background-color: #fff;
color: var(--text-color);
display: flex;
flex-wrap: wrap;
justify-content: center;
min-width: 70px;
border: 1px solid rgba(0,0,0,.09);
box-shadow: 0 1px 1px 0 rgba(0,0,0,.03);
padding: 0%;
position: relative;
overflow: visible;
}

/* Thông tin admin */

.admin-grid__column-7 {
border-right: 1px solid rgba(0, 0, 0, 0.05);
}

.admin__profile-info {
margin-top: 20px;
display: flex;
flex-wrap: wrap;
}

.table-info {}

.title-info {
text-align: right;
font-size: 1.5rem;
color: rgba(85,85,85,.8);
padding-bottom: 30px;
}

.detailed-info {
font-size: 1.5rem;
color: var(--text-color);
padding-left: 20px;
padding-bottom: 30px;
}