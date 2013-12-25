Wordpress-Customizer-Framework
==============================

Easily customize your sites theme using the WordPress Customize API. This can be done by point and clicking on what you wish to make adjustments to.


<h2>Framework</h2>
==============================

Author : Alispx

Contributors: @indaam

Author URI: http://www.alispx.me

Plugin URI: -

Donate link: <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=alispx%40gmail%2ecom&lc=ID&item_name=alispx&item_number=customizer&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted"> Donate Now</a>

Tags: theme customizer, wordpress customizer, wordpress theme customizer, wordpress customization API

Requires at least: 3.4

Tested up to: 3.8

Stable tag: 1.0

License: GPLv2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html


<b><h2>How to use</h2></b>

Just copy the folder <b>"customizer"</b> to the your wordpress theme, and then add this to your functions.php
<pre>
define( 'CF_DIR', get_template_directory() . '/inc/customizer' );
require_once( CF_DIR . '/customizer-framework.php' );
</pre>

Change the path according to where do you place these folder.

