#<?php echo $id?>{
 padding: 70px 0;
}

.sec-title {
    margin-bottom: 50px;
}

.sec-title.white {
    color: #fff;
}

.sec-title h2 {
    font-size: 36px;
    margin: 0 0 30px;
    padding-bottom: 30px;
    position: relative;
    text-transform: uppercase;
}

.sec-title.white h2 {
    color: #fff;
}

.sec-title h2:after {
    border-bottom: 1px solid #009ee3;
    content: "";
    display: block;
    left: 45%;
    bottom: 0;
    position: absolute;
    width: 115px;
}

.sec-title.white h2:after {
    border-bottom: 1px solid #fff;
}

.price-table {
border: 1px solid #e3e3e3;
}

.price-table.featured {
-webkit-box-shadow: 0 4px 5px rgba(0,0,0,0.19);
-moz-box-shadow: 0 4px 5px rgba(0,0,0,0.19);
box-shadow: 0 4px 5px rgba(0,0,0,0.19);
}

.price-table > span {
color: #252525;
display: block;
font-size: 24px;
padding: 30px 0;
text-transform: uppercase;
}

.price-table .value {
background-color: #f8f8f8;
color: #727272;
padding: 20px 0;

-webkit-transition: all 0.7s ease 0s;
-moz-transition: all 0.7s ease 0s;
-ms-transition: all 0.7s ease 0s;
-o-transition: all 0.7s ease 0s;
transition: all 0.7s ease 0s;
}

.price-table.featured .value {
background-color: #009EE3;
color: #fff;
}

.price-table .value span {
display: inline-block;
}

.price-table .value span:first-child {
font-size: 32px;
line-height: 32px;
}

.price-table .value span:nth-child(2) {
font-size: 65px;
line-height: 65px;
margin-bottom: 25px;
}

.price-table .value span:last-child {
font-size: 16px;
}

.price-table ul {
margin: 0;
padding: 0;
list-style: none;
text-align: center;
}

.price-table ul li {
border-top: 1px solid #e3e3e3;
display: block;
padding: 25px 0;

-webkit-transition: all 0.7s ease 0s;
-moz-transition: all 0.7s ease 0s;
-ms-transition: all 0.7s ease 0s;
-o-transition: all 0.7s ease 0s;
transition: all 0.7s ease 0s;
}

.price-table ul li a {
display: block;
text-transform: uppercase;
}

.price-table.featured ul li:last-child,
.price-table ul li:last-child:hover {
background-color: #009EE3;
}

.price-table.featured ul li:last-child a,
.price-table ul li:last-child:hover a {
color: #fff;
}
