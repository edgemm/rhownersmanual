<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;


// custom login logo link
function loginpage_custom_link() {
	return '/';
}
add_filter('login_headerurl','loginpage_custom_link');


// login page head css
add_action("login_head", "my_login_head");
function my_login_head() {
	echo "
	<style>
	body.login #login h1 a {
		background: url('/wp-content/uploads/2013/02/logo1.png') no-repeat scroll center top transparent;
		height: 88px;
		width: 295px;
		background-size: 295px 88px;
	}
	
	body.login {background-color: #3f2c0f;}
	
	.wp-core-ui .button-primary {

-moz-border-radius: 2px;
-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;
-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;
-webkit-border-radius: 2px;
background-color: #f9f9f9;
background-image: -webkit-gradient(linear, left top, left bottom, from(#f9f9f9), to(#f1f1f1));
background-image: -webkit-linear-gradient(top, #f9f9f9, #f1f1f1);
background-image: -moz-linear-gradient(top, #f9f9f9, #f1f1f1);
background-image: -ms-linear-gradient(top, #f9f9f9, #f1f1f1);
background-image: -o-linear-gradient(top, #f9f9f9, #f1f1f1);
background-image: linear-gradient(top, #f9f9f9, #f1f1f1);
box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;
border: 1px solid #ddd;
border-radius: 2px;
color: #333;
cursor: pointer;
display: inline-block;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#f9f9f9, endColorstr=#f1f1f1);
font-size: 14px;
font-weight: 700;
line-height: 20px;
margin: 0;
padding: 4px 10px;
text-decoration: none;
text-shadow: 0 1px 0 #fff;
vertical-align: middle;
white-space: nowrap;
}
.wp-core-ui .button-primary:hover {

-moz-border-radius: 2px;
-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;
-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;
-webkit-border-radius: 2px;
background-color: #f9f9f9;
background-image: -webkit-gradient(linear, left top, left bottom, from(#f9f9f9), to(#f1f1f1));
background-image: -webkit-linear-gradient(top, #f9f9f9, #f1f1f1);
background-image: -moz-linear-gradient(top, #f9f9f9, #f1f1f1);
background-image: -ms-linear-gradient(top, #f9f9f9, #f1f1f1);
background-image: -o-linear-gradient(top, #f9f9f9, #f1f1f1);
background-image: linear-gradient(top, #f9f9f9, #f1f1f1);
box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;
border: 1px solid #ddd;
border-radius: 2px;
color: #e57730;
cursor: pointer;
display: inline-block;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#f9f9f9, endColorstr=#f1f1f1);
text-shadow: 0 0 0;
}

.login #nav a, .login #backtoblog a {
color: #fff!important;
text-shadow: none;
}

.login #nav a:hover, .login #backtoblog a:hover {
color: #dedede!important;
}

#login {
width: 295px;
padding: 114px 0 0;
margin: auto;
}

.login #pass-strength-result {
width: 95%;
font-weight: bold;
border-style: solid;
border-width: 1px;
margin: 12px 0 6px;
padding: 6px 5px;
text-align: center;
}

.login form {
margin-left: 8px;
padding: 26px 24px 46px;
font-weight: normal;
background: #fff;
border: 1px solid #e5e5e5;
-webkit-box-shadow: none;
box-shadow: none;
}
	
	</style>
	";
}
