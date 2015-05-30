<?php
/*
Plugin Name: TheShop Biz
Description: Give Your Users the ability to create online stores.
Author: Nandini Goel
Author URI:  http://www.facebook.com/nandinigoel.india
Version: 2.0
License: GPLv2 or later
*/
?><br><br>
<?php add_action('admin_menu', 'theshop_biz_setup_menu'); 
function theshop_biz_setup_menu(){
        add_menu_page( 'The Shop Biz Page', 'The Shop Biz', 'manage_options', 'theshop-biz', 'test_init' );
}
function test_init(){
        echo "<h1>Create Your Own Online Store</h1><br />
<a href='http://theshop.biz/login/register.php' style='background-color:#132030; color:white;'>Create Now!</a>&nbsp;<a href='http://theshop.biz/login' style='background-color:#132030; color:white;'>Login</a>
<br>
<h2>How to Use ShortCodes to showcase your store on WordPress?</h2>
You can showcase your theShop.biz Store on Wordpress using the following shortcode:
<br>
<b>[shop_biz username='your username']Your Shop Name[/shop_biz]</b>
</center>

";
}

function shop_biz($atts, $content = null) {
    extract(shortcode_atts(array(
        "username" => ''
    ), $atts));
    return '<iframe src="http://theshop.biz/shop.php?username='.$username.'" width="100%" height="100%"></iframe>'.$content.'</b>';
}
add_shortcode("shop_biz", "shop_biz");
?>
