<?php header("Content-type: text/css"); ?>
.progress-bar {
background-color: #eee;
display: flex;
align-items: center;
padding: 17px 17px;
border-radius: 2px;
width: 100%;
}

.progress-bar__main-content {
font-size: 1.4rem;
color: white;
margin-left: 16px;
margin-right: 12px;
}

.main-content__item{
min-width: 90px;
margin-right: 12px;
text-decoration-line: none;
text-decoration-color: white;
}

.main-content__item:hover{
color: red;
}

/* Nội dung chính */

/* Ảnh sản phẩm */
.item-image{
width: 100%;
}

/* Thông tin đặt hàng */
.order {
display: flex;
flex-direction: column;
}
.order__item-name {
font-size: 2.0rem;
color: var(--text-color);
padding: 12px 16px;
}
.order__item-price {
padding: 12px 16px;
font-size: 2.0rem;
color: red;
}

/* Phương thức vận chuyển */
.order__transfer {
padding: 12px 16px;
display: flex;
}

.order__transfer-block {
width: 100px;
height: 100px;
margin-right: 14.953px;
font-size: 1.4rem;
font-weight: 400;
color: var(--text-color);
line-height: 1.8rem;
box-sizing: border-box;
}
.order__transfer-detail-info {
display: flex;
flex-direction: column;
width: 100%;
}

/* Mã freeship */
.detail-info__freeship {
display: flex;
flex-direction: row;
}
.freeship-icon {
width: 24px;
height: 20px;
margin: 0 0 12px;
}
.freeship-icon__css {
width: 100%;
height: 20px;
}
.freeship-info {
font-size: 1.4rem;
font-weight: 400;
color: var(--text-color);
line-height: 1.8rem;
margin: 0 0 12px 17px;
}

/* thoognt in vận chuyển */

.detail-info__transfer-method {
display: flex;
flex-direction: row;
}

.transfer-icon {
width: 24px;
height: 20px;
}

.transfer-icon__css {
font-size: 1.8rem;
}

.transfer-info {
display: flex;
flex-direction: column;
margin: 0 0 12px 17px;
}

.transfer-info__where {
margin-bottom: 10px;
display: flex;
}

.transfer-info__where-button {

}
.transfer-info__where-text {
font-size: 1.4rem;
font-weight: 400;
color: var(--text-color);
line-height: 1.8rem;
}
.transfer-info__transfer-fee {
display: flex;
}
.transfer-info__transfer-fee-text {
font-size: 1.4rem;
font-weight: 400;
color: var(--text-color);
line-height: 1.8rem;
}
.transfer-info__transfer-fee-button {}

/* Css btn chung */
.btn__choose {
min-width: auto;
height: 34px;
text-decoration: none;
border-width: 1px;
border-radius: 2px;
border-color: red;
font-size: 1.5rem;
outline: none;
cursor: pointer;
background-color: white;
display: inline-flex;
align-items: center;
justify-content: center;
line-height: 1.6rem;
}

/* Chọn hương vị */
.order__product-classification {
padding: 12px 16px;
display: flex;
}

.product-classification__text {
padding-top: 8px;
width: 100px;
height: 100px;
font-size: 1.4rem;
font-weight: 400;
color: var(--text-color);
line-height: 1.8rem;
box-sizing: border-box;
}

.product-classification__aroma {}

.product-classification__aroma-kind {
font-size: 1.4rem;
font-weight: 400;
color: var(--text-color);
line-height: 1.8rem;
}

/* Số lượng mua hàng */
.order__number-products {
padding: 12px 16px;
display: flex;
}

.number-products__text {
padding-top: 8px;
width: 100px;
height: 100px;
font-size: 1.4rem;
font-weight: 400;
color: var(--text-color);
line-height: 1.8rem;
box-sizing: border-box;
}

.number-products__btn-subtract {}

.number-products__btn-number {}

.number-products__btn-plus {}

/* Thêm vào giỏ hàng hoặc mua hàng */
.order__order-buy {
padding: 12px 16px;
display: flex;
}

.order-buy__btn-addToCast {
margin-right: 15px;
height: 46px;
font-size: 1.4rem;
font-weight: 400;
color: var(--text-color);
line-height: 1.8rem;
background-color: rgba(255,87,34,0.1);
}

.cart-shopping__css {
color: red;
margin-right: 5px;
}

.order-buy__btn-buy {
width: 150px;
height: 46px;
font-size: 1.4rem;
font-weight: 400;
color: white;
line-height: 1.8rem;
background-color: red;
}

/* Thông tin sản phẩm */
.app__container-info-describtion {
background-color: white;
font-size: 1.4rem;
font-weight: 400;
color: var(--text-color);
line-height: 1.8rem;
}

.info-product {

}

.info-product__main-content {
margin-top: 15px;
}

.main-content__product {
display: flex;
}

.main-content__title {
margin-right: 15px;
}

.main-content__detail {}

.title__add-css-1 {
margin-right: 87px;
}

.title__add-css-2 {
margin-right: 118px;
}

.app__container-info-describtion {
margin: 0 5px;
}

p {
font-size: 1.4rem;
color: var(--text-color);
}