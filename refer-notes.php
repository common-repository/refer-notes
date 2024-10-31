<?php
/*
Plugin Name: Refer Notes
Plugin URI: http://www.truemediaconcepts.com/
Description: Refer Notes is a plugin to display a custom message at the top of your site to welcome users who are referred from other specific sites such as Digg, Reddit and Stumbleupon. Changes can be made from the options page located in the WordPress Settings submenu. Requires your current theme to use both wp_head and wp_footer tags. 
Version: 1.1
Author: Brad Bodine
Author URI: http://www.truemediaconcepts.com/
*/

function rn_mainprint(){
	$rnprint= new RNprintRN;
	$rnprint->print_refer_notes();
} 

define('REFERNOTESPATH', ABSPATH.'wp-content/plugins/refer-notes');
define('REFERNOTESCLASSPATH', REFERNOTESPATH);
define('REFERNOTESURL', get_option('siteurl').'/wp-content/plugins/refer-notes');
define('REFERNOTESJSURL', REFERNOTESURL.'/js');
define('REFERNOTESCSSURL', REFERNOTESURL.'/css');
define('REFERNOTESICONSURL', REFERNOTESURL . '/icons');

require_once(REFERNOTESPATH . '/rn-setoptions.php');
require_once(REFERNOTESPATH . '/rn-unsetoptions.php');
require_once(REFERNOTESCLASSPATH . '/rn-updateoptions.class.php');
require_once(REFERNOTESCLASSPATH . '/rn-admin.class.php');
require_once(REFERNOTESCLASSPATH . '/rn-print.class.php');

register_activation_hook(__FILE__,'set_rn_options');
register_deactivation_hook(__FILE__,'unset_rn_options');

$now = time();
$then = get_option('rn_testmode_timer');
if($now - $then > (30*60))
  update_option('rn_testmode', 'no');

function admin_rn_options(){
	?>
	<div class="wrap"><h2>Refer Notes Options</h2>
	<?php
	if ($_REQUEST['submit']){
		update_rn_options();
	}
	print_rn_form();
	?>
	</div>
	<?php
} 
function update_rn_options(){
	$ok = false;
	$rn= new RNformcheck;
	$rn->rn_formcheck();
}

function print_rn_form(){
	$pf= new RNadminform;
	$pf->admin_form();
} 
			
function modify_menu(){
	add_options_page(
						'Refer Notes Options', //page title
						'Refer Notes',  //sub-menu title
						'manage_options', //access capability
						__FILE__, //file
						'admin_rn_options' //function
					);
}

function rn_addheader(){
		$url = get_settings('siteurl');
	    $url = $url . '/wp-content/plugins/refer-notes/rn-main.css';
?>
<!-- wp_head stuff goes here-->
<link rel="stylesheet" type="text/css" href="<?php echo $url ?>" />

<style type="text/css">
#refer-notes {position: absolute; left: 0px; top: 0px;}
body > div#refer-notes {position: fixed; left: 0px; top: 0px;}
</style>

<!--[if gte IE 5.5]>
<![if lt IE 7]>
<style type="text/css">
div#refer-notes {
  left: expression( ( 00 + ( ignoreMe2 = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft ) ) + 'px' );
  top: expression( ( 00 + ( ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop ) ) + 'px' );
}
</style>
<![endif]>
<![endif]-->
<?php
}

function rn_adminheader(){
		$url = get_settings('siteurl');
	    $url = $url . '/wp-content/plugins/refer-notes/rn-admin.css';
	    echo '<link rel="stylesheet" type="text/css" href="' . $url . '" />';
}

//actions and hooks below
wp_enqueue_script('jquery');
add_action('admin_menu','modify_menu'); 
add_action('wp_footer','rn_mainprint');
add_action('wp_head','rn_addheader');
add_action('admin_head', 'rn_adminheader');
?>
