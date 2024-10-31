<?php
class RNformcheck{
	function rn_formcheck(){
		if ($_REQUEST['rn_bgcolor']){
			update_option('rn_bgcolor',$_REQUEST['rn_bgcolor']);
			$ok = true;
		}
		if ($_REQUEST['rn_useImage']){
			update_option('rn_useImage',$_REQUEST['rn_useImage']);
			$ok = true;
		}
		if ($_REQUEST['rn_txtStyle']){
			update_option('rn_txtStyle',$_REQUEST['rn_txtStyle']);
			$ok = true;
		}
		if ($_REQUEST['rn_txtAlign']){
			update_option('rn_txtAlign',$_REQUEST['rn_txtAlign']);
			$ok = true;
		}
		if ($_REQUEST['rn_txtColor']){
			update_option('rn_txtColor',$_REQUEST['rn_txtColor']);
			$ok = true;
		}
		if ($_REQUEST['rn_txtSize']){
			update_option('rn_txtSize',$_REQUEST['rn_txtSize']);
			$ok = true;
		}
		if ($_REQUEST['rn_paddingTop']){
			update_option('rn_paddingTop',$_REQUEST['rn_paddingTop']);
			$ok = true;
		}
		if ($_REQUEST['rn_paddingRight']){
			update_option('rn_paddingRight',$_REQUEST['rn_paddingRight']);
			$ok = true;
		}
		if ($_REQUEST['rn_paddingBottom']){
			update_option('rn_paddingBottom',$_REQUEST['rn_paddingBottom']);
			$ok = true;
		}
		if ($_REQUEST['rn_paddingLeft']){
			update_option('rn_paddingLeft',$_REQUEST['rn_paddingLeft']);
			$ok = true;
		}
		if ($_REQUEST['rn_useBorderTop']){
			update_option('rn_useBorderTop',$_REQUEST['rn_useBorderTop']);
			$ok = true;
		}
		if ($_REQUEST['rn_useBorderRight']){
			update_option('rn_useBorderRight',$_REQUEST['rn_useBorderRight']);
			$ok = true;
		}
		if ($_REQUEST['rn_useBorderBottom']){
			update_option('rn_useBorderBottom',$_REQUEST['rn_useBorderBottom']);
			$ok = true;
		}
		if ($_REQUEST['rn_useBorderLeft']){
			update_option('rn_useBorderLeft',$_REQUEST['rn_useBorderLeft']);
			$ok = true;
		}
		if ($_REQUEST['rn_borderSize']){
			update_option('rn_borderSize',$_REQUEST['rn_borderSize']);
			$ok = true;
		}
		if ($_REQUEST['rn_borderColor']){
			update_option('rn_borderColor',$_REQUEST['rn_borderColor']);
			$ok = true;
		}
		if ($_REQUEST['rn_borderStyle']){
			update_option('rn_borderStyle',$_REQUEST['rn_borderStyle']);
			$ok = true;
		}
		if ($_REQUEST['rn_button']){
			update_option('rn_button',$_REQUEST['rn_button']);
			$ok = true;
		}
		if ($_REQUEST['rn_new']){
			update_option('rn_new',$_REQUEST['rn_new']);
			$ok = true;
		}
		if ($_REQUEST['rn_new_msg']){
			update_option('rn_new_msg',$_REQUEST['rn_new_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_new_icon']){
			update_option('rn_new_icon',$_REQUEST['rn_new_icon']);
			$ok = true;
		}
		if ($_REQUEST['rn_digg']){
			update_option('rn_digg',$_REQUEST['rn_digg']);
			$ok = true;
		}
		if ($_REQUEST['rn_digg_msg']){
			update_option('rn_digg_msg',$_REQUEST['rn_digg_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_digg_button']){
			update_option('rn_digg_button',$_REQUEST['rn_digg_button']);
			$ok = true;
		}
		if ($_REQUEST['rn_reddit']){
			update_option('rn_reddit',$_REQUEST['rn_reddit']);
			$ok = true;
		}
		if ($_REQUEST['rn_reddit_msg']){
			update_option('rn_reddit_msg',$_REQUEST['rn_reddit_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_reddit_button']){
			update_option('rn_reddit_button',$_REQUEST['rn_reddit_button']);
			$ok = true;
		}
		if ($_REQUEST['rn_delicious']){
			update_option('rn_delicious',$_REQUEST['rn_delicious']);
			$ok = true;
		}
		if ($_REQUEST['rn_delicious_msg']){
			update_option('rn_delicious_msg',$_REQUEST['rn_delicious_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_facebook']){
			update_option('rn_facebook',$_REQUEST['rn_facebook']);
			$ok = true;
		}
		if ($_REQUEST['rn_facebook_msg']){
			update_option('rn_facebook_msg',$_REQUEST['rn_facebook_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_slashdot']){
			update_option('rn_slashdot',$_REQUEST['rn_slashdot']);
			$ok = true;
		}
		if ($_REQUEST['rn_slashdot_msg']){
			update_option('rn_slashdot_msg',$_REQUEST['rn_slashdot_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_technorati']){
			update_option('rn_technorati',$_REQUEST['rn_technorati']);
			$ok = true;
		}
		if ($_REQUEST['rn_technorati_msg']){
			update_option('rn_technorati_msg',$_REQUEST['rn_technorati_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_stumbleupon']){
			update_option('rn_stumbleupon',$_REQUEST['rn_stumbleupon']);
			$ok = true;
		}
		if ($_REQUEST['rn_stumbleupon_msg']){
			update_option('rn_stumbleupon_msg',$_REQUEST['rn_stumbleupon_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_fark']){
			update_option('rn_fark',$_REQUEST['rn_fark']);
			$ok = true;
		}
		if ($_REQUEST['rn_fark_msg']){
			update_option('rn_fark_msg',$_REQUEST['rn_fark_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_newsvine']){
			update_option('rn_newsvine',$_REQUEST['rn_newsvine']);
			$ok = true;
		}
		if ($_REQUEST['rn_newsvine_msg']){
			update_option('rn_newsvine_msg',$_REQUEST['rn_newsvine_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_blinklist']){
			update_option('rn_blinklist',$_REQUEST['rn_blinklist']);
			$ok = true;
		}
		if ($_REQUEST['rn_blinklist_msg']){
			update_option('rn_blinklist_msg',$_REQUEST['rn_blinklist_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_propeller']){
			update_option('rn_propeller',$_REQUEST['rn_propeller']);
			$ok = true;
		}
		if ($_REQUEST['rn_propeller_msg']){
			update_option('rn_propeller_msg',$_REQUEST['rn_propeller_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_mybloglog']){
			update_option('rn_mybloglog',$_REQUEST['rn_mybloglog']);
			$ok = true;
		}
		if ($_REQUEST['rn_mybloglog_msg']){
			update_option('rn_mybloglog_msg',$_REQUEST['rn_mybloglog_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_magnolia']){
			update_option('rn_magnolia',$_REQUEST['rn_magnolia']);
			$ok = true;
		}
		if ($_REQUEST['rn_magnolia_msg']){
			update_option('rn_magnolia_msg',$_REQUEST['rn_magnolia_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_squidoo']){
			update_option('rn_squidoo',$_REQUEST['rn_squidoo']);
			$ok = true;
		}
		if ($_REQUEST['rn_squidoo_msg']){
			update_option('rn_squidoo_msg',$_REQUEST['rn_squidoo_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_blogmarks']){
			update_option('rn_blogmarks',$_REQUEST['rn_blogmarks']);
			$ok = true;
		}
		if ($_REQUEST['rn_blogmarks_msg']){
			update_option('rn_blogmarks_msg',$_REQUEST['rn_blogmarks_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_simpy']){
			update_option('rn_simpy',$_REQUEST['rn_simpy']);
			$ok = true;
		}
		if ($_REQUEST['rn_simpy_msg']){
			update_option('rn_simpy_msg',$_REQUEST['rn_simpy_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_shoutwire']){
			update_option('rn_shoutwire',$_REQUEST['rn_shoutwire']);
			$ok = true;
		}
		if ($_REQUEST['rn_shoutwire_msg']){
			update_option('rn_shoutwire_msg',$_REQUEST['rn_shoutwire_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_tailrank']){
			update_option('rn_tailrank',$_REQUEST['rn_tailrank']);
			$ok = true;
		}
		if ($_REQUEST['rn_tailrank_msg']){
			update_option('rn_tailrank_msg',$_REQUEST['rn_tailrank_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_dzone']){
			update_option('rn_dzone',$_REQUEST['rn_dzone']);
			$ok = true;
		}
		if ($_REQUEST['rn_dzone_msg']){
			update_option('rn_dzone_msg',$_REQUEST['rn_dzone_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_furl']){
			update_option('rn_furl',$_REQUEST['rn_furl']);
			$ok = true;
		}
		if ($_REQUEST['rn_furl_msg']){
			update_option('rn_furl_msg',$_REQUEST['rn_furl_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_sphinn']){
			update_option('rn_sphinn',$_REQUEST['rn_sphinn']);
			$ok = true;
		}
		if ($_REQUEST['rn_sphinn_msg']){
			update_option('rn_sphinn_msg',$_REQUEST['rn_sphinn_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_sphinn_button']){
			update_option('rn_sphinn_button',$_REQUEST['rn_sphinn_button']);
			$ok = true;
		}
		if ($_REQUEST['rn_designfloat']){
			update_option('rn_designfloat',$_REQUEST['rn_designfloat']);
			$ok = true;
		}
		if ($_REQUEST['rn_designfloat_msg']){
			update_option('rn_designfloat_msg',$_REQUEST['rn_designfloat_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_designfloat_button']){
			update_option('rn_designfloat_button',$_REQUEST['rn_designfloat_button']);
			$ok = true;
		}
		if ($_REQUEST['rn_google']){
			update_option('rn_google',$_REQUEST['rn_google']);
			$ok = true;
		}
		if ($_REQUEST['rn_google_msg']){
			update_option('rn_google_msg',$_REQUEST['rn_google_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_live']){
			update_option('rn_live',$_REQUEST['rn_live']);
			$ok = true;
		}
		if ($_REQUEST['rn_live_msg']){
			update_option('rn_live_msg',$_REQUEST['rn_live_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_yahoo']){
			update_option('rn_yahoo',$_REQUEST['rn_yahoo']);
			$ok = true;
		}
		if ($_REQUEST['rn_yahoo_msg']){
			update_option('rn_yahoo_msg',$_REQUEST['rn_yahoo_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom1']){
			update_option('rn_custom1',$_REQUEST['rn_custom1']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom1_url']){
			update_option('rn_custom1_url',$_REQUEST['rn_custom1_url']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom1_msg']){
			update_option('rn_custom1_msg',$_REQUEST['rn_custom1_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom1_icon']){
			update_option('rn_custom1_icon',$_REQUEST['rn_custom1_icon']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom2']){
			update_option('rn_custom2',$_REQUEST['rn_custom2']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom2_url']){
			update_option('rn_custom2_url',$_REQUEST['rn_custom2_url']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom2_msg']){
			update_option('rn_custom2_msg',$_REQUEST['rn_custom2_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom2_icon']){
			update_option('rn_custom2_icon',$_REQUEST['rn_custom2_icon']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom3']){
			update_option('rn_custom3',$_REQUEST['rn_custom3']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom3_url']){
			update_option('rn_custom3_url',$_REQUEST['rn_custom3_url']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom3_msg']){
			update_option('rn_custom3_msg',$_REQUEST['rn_custom3_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom3_icon']){
			update_option('rn_custom3_icon',$_REQUEST['rn_custom3_icon']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom4']){
			update_option('rn_custom4',$_REQUEST['rn_custom4']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom4_url']){
			update_option('rn_custom4_url',$_REQUEST['rn_custom4_url']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom4_msg']){
			update_option('rn_custom4_msg',$_REQUEST['rn_custom4_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom4_icon']){
			update_option('rn_custom4_icon',$_REQUEST['rn_custom4_icon']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom5']){
			update_option('rn_custom5',$_REQUEST['rn_custom5']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom5_url']){
			update_option('rn_custom5_url',$_REQUEST['rn_custom5_url']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom5_msg']){
			update_option('rn_custom5_msg',$_REQUEST['rn_custom5_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_custom5_icon']){
			update_option('rn_custom5_icon',$_REQUEST['rn_custom5_icon']);
			$ok = true;
		}
		if ($_REQUEST['rn_blogrush']){
			update_option('rn_blogrush',$_REQUEST['rn_blogrush']);
			$ok = true;
		}
		if ($_REQUEST['rn_blogrush_msg']){
			update_option('rn_blogrush_msg',$_REQUEST['rn_blogrush_msg']);
			$ok = true;
		}
		if ($_REQUEST['rn_testmode']){
			update_option('rn_testmode',$_REQUEST['rn_testmode']);
			update_option('rn_testmode_timer', time());
			$ok = true;
		}
		if ($ok){
			?>
			<div id="message" class="updated fade">
			<p>All your stuff got saved.</p>
			</div>
			<?php
		}
		else{
			?>
			<div id="message" class="error fade">
				<p>Ouch. Something blew up. Nothing saved.</p>
			</div>
			<?php
		}
	}
}
?>
