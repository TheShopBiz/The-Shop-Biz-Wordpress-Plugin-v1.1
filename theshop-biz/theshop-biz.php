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
        echo "<h1>Create Your Own Online Store using TheShopBiz Wordpress Plugin</h1><hr><br><img src='http://theshop.biz/fav.png'><br>
<a href='http://theshop.biz/login/register.php'><button>Create One Yourself!</button></a>
<a href='http://theshop.biz/login/index.php'><button>Already Have One?</button></a><br>
<h1>OR Request One to Be Created.</h1> <div class='section page'>

        <div class='wrapper'>

            

            
  
                <p>We&rsquo;d love to hear from you! Complete the form to request a new shop. Request to be answered in less than 12 Hours.</p>

                <form method='post' action='http://theshop.biz/contact.php'>

                    <table>
                        <tr>
                            <th>
                                <label for='name'>Name</label>
                            </th>
                            <td>
                                <input type='text' name='name' id='name'>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for='email'>Email</label>
                            </th>
                            <td>
                                <input type='text' name='email' id='email'>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for='message'>Shop Details</label>
                            </th>
                            <td>
                                <textarea name='message' id='message'></textarea>
                            </td>
                        </tr> 
                        <tr style='display: none;'>
                            <th>
                                <label for='address'>Address</label>
                            </th>
                            <td>
                                <input type='text' name='address' id='address'>
                                <p>Humans (and frogs): please leave this field blank.</p>
                            </td>
                        </tr>                   
                    </table>
                    <input type='submit' value='Send' target='_blank'>

                </form>

            
        </div>

    </div>";
}

?>
