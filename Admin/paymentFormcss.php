<?php header("Content-type: text/css"); ?>
.row {
display: -ms-flexbox; /* IE10 */
display: inline;
-ms-flex-wrap: wrap; /* IE10 */
flex-wrap: wrap;
margin: 0 -16px;
}

.col-25 {
-ms-flex: 25%; /* IE10 */
flex: 25%;
}

.col-50 {
-ms-flex: 50%; /* IE10 */
flex: 50%;
}

.col-75 {
-ms-flex: 75%; /* IE10 */
flex: 75%;
}

.col-25,
.col-50,
.col-75 {
padding: 0 16px;
}

.container {
background-color: #f2f2f2;
padding: 5px 20px 15px 20px;
border: 1px solid lightgrey;
border-radius: 3px;
}

input[type=text], input[type=password] {
width: 98%;
/* margin-bottom: 20px; */
padding: 12px;
border: 1px solid #ccc;
border-radius: 3px;
}

label {
margin: 12px 0 10px 0;
display: block;
}

.icon-container {
margin-bottom: 20px;
padding: 7px 0;
font-size: 24px;
}

.btn {
background-color: #ee4d2d;
color: white;
padding: 12px;
margin: 10px 0;
border: none;
width: 100%;
border-radius: 3px;
cursor: pointer;
font-size: 17px;
}

.btn:hover {
background-color: #45a049;
}

span.price {
float: right;
color: grey;
}

/* Responsive layout - when the screen is less than 800px wide,
make the two columns stack on top of each other instead of
next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
.row {
flex-direction: column-reverse;
}
.col-25 {
margin-bottom: 20px;
}
}

/* Nội dung đơn thanh toán */

/* icon */

.icon-payment {
font-size: 1.5rem;
}

/* Sản phẩm được thanh toán */
.cart-content {
display: flex;
flex-direction: column;
margin-top: 12px;
}

.payment__list-product {
display: flex;
flex-wrap: wrap;
align-items: center;
padding-bottom: 15px;
border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.payment-subtotal {
font-size: 1.5rem;
margin-top: 12px;
}