<?php
class RNadminform{
	function admin_form(){
		$db_rn_bgcolor = stripslashes(get_option('rn_bgcolor'));
		$db_rn_useImage = stripslashes(get_option('rn_useImage'));
		$db_rn_txtStyle = stripslashes(get_option('rn_txtStyle'));
		$db_rn_txtAlign = stripslashes(get_option('rn_txtAlign'));
		$db_rn_txtColor = stripslashes(get_option('rn_txtColor'));
		$db_rn_txtSize = stripslashes(get_option('rn_txtSize'));
		$db_rn_paddingTop = stripslashes(get_option('rn_paddingTop'));
		$db_rn_paddingRight = stripslashes(get_option('rn_paddingRight'));
		$db_rn_paddingBottom = stripslashes(get_option('rn_paddingBottom'));
		$db_rn_paddingLeft = stripslashes(get_option('rn_paddingLeft'));
		$db_rn_useBorderTop = stripslashes(get_option('rn_useBorderTop'));
		$db_rn_useBorderRight = stripslashes(get_option('rn_useBorderRight'));
		$db_rn_useBorderBottom = stripslashes(get_option('rn_useBorderBottom'));
		$db_rn_useBorderLeft = stripslashes(get_option('rn_useBorderLeft'));
		$db_rn_borderSize = stripslashes(get_option('rn_borderSize'));
		$db_rn_borderColor = stripslashes(get_option('rn_borderColor'));
		$db_rn_borderStyle = stripslashes(get_option('rn_borderStyle'));
		$db_rn_button = stripslashes(get_option('rn_button'));
		$db_rn_new = stripslashes(get_option('rn_new'));
		$db_rn_new_msg = stripslashes(get_option('rn_new_msg'));
		$db_rn_new_icon = stripslashes(get_option('rn_new_icon'));
		$db_rn_digg = stripslashes(get_option('rn_digg'));
		$db_rn_digg_msg = stripslashes(get_option('rn_digg_msg'));
		$db_rn_digg_button = stripslashes(get_option('rn_digg_button'));
		$db_rn_reddit = stripslashes(get_option('rn_reddit'));
		$db_rn_reddit_msg = stripslashes(get_option('rn_reddit_msg'));
		$db_rn_reddit_button = stripslashes(get_option('rn_reddit_button'));
		$db_rn_delicious = stripslashes(get_option('rn_delicious'));
		$db_rn_delicious_msg = stripslashes(get_option('rn_delicious_msg'));
		$db_rn_facebook = stripslashes(get_option('rn_facebook'));
		$db_rn_facebook_msg = stripslashes(get_option('rn_facebook_msg'));
		$db_rn_slashdot = stripslashes(get_option('rn_slashdot'));
		$db_rn_slashdot_msg = stripslashes(get_option('rn_slashdot_msg'));
		$db_rn_technorati = stripslashes(get_option('rn_technorati'));
		$db_rn_technorati_msg = stripslashes(get_option('rn_technorati_msg'));
		$db_rn_stumbleupon = stripslashes(get_option('rn_stumbleupon'));
		$db_rn_stumbleupon_msg = stripslashes(get_option('rn_stumbleupon_msg'));
		$db_rn_fark = stripslashes(get_option('rn_fark'));
		$db_rn_fark_msg = stripslashes(get_option('rn_fark_msg'));
		$db_rn_newsvine = stripslashes(get_option('rn_newsvine'));
		$db_rn_newsvine_msg = stripslashes(get_option('rn_newsvine_msg'));
		$db_rn_blinklist = stripslashes(get_option('rn_blinklist'));
		$db_rn_blinklist_msg = stripslashes(get_option('rn_blinklist_msg'));
		$db_rn_propeller = stripslashes(get_option('rn_propeller'));
		$db_rn_propeller_msg = stripslashes(get_option('rn_propeller_msg'));
		$db_rn_mybloglog = stripslashes(get_option('rn_mybloglog'));
		$db_rn_mybloglog_msg = stripslashes(get_option('rn_mybloglog_msg'));
		$db_rn_magnolia = stripslashes(get_option('rn_magnolia'));
		$db_rn_magnolia_msg = stripslashes(get_option('rn_magnolia_msg'));
		$db_rn_squidoo = stripslashes(get_option('rn_squidoo'));
		$db_rn_squidoo_msg = stripslashes(get_option('rn_squidoo_msg'));
		$db_rn_blogmarks = stripslashes(get_option('rn_blogmarks'));
		$db_rn_blogmarks_msg = stripslashes(get_option('rn_blogmarks_msg'));
		$db_rn_simpy = stripslashes(get_option('rn_simpy'));
		$db_rn_simpy_msg = stripslashes(get_option('rn_simpy_msg'));
		$db_rn_shoutwire = stripslashes(get_option('rn_shoutwire'));
		$db_rn_shoutwire_msg = stripslashes(get_option('rn_shoutwire_msg'));
		$db_rn_tailrank = stripslashes(get_option('rn_tailrank'));
		$db_rn_tailrank_msg = stripslashes(get_option('rn_tailrank_msg'));
		$db_rn_dzone = stripslashes(get_option('rn_dzone'));
		$db_rn_dzone_msg = stripslashes(get_option('rn_dzone_msg'));
		$db_rn_furl = stripslashes(get_option('rn_furl'));
		$db_rn_furl_msg = stripslashes(get_option('rn_furl_msg'));
		$db_rn_sphinn = stripslashes(get_option('rn_sphinn'));
		$db_rn_sphinn_msg = stripslashes(get_option('rn_sphinn_msg'));
		$db_rn_sphinn_button = stripslashes(get_option('rn_sphinn_button'));
		$db_rn_designfloat = stripslashes(get_option('rn_designfloat'));
		$db_rn_designfloat_msg = stripslashes(get_option('rn_designfloat_msg'));
		$db_rn_designfloat_button = stripslashes(get_option('rn_designfloat_button'));
		$db_rn_blogrush = stripslashes(get_option('rn_blogrush'));
		$db_rn_blogrush_msg = stripslashes(get_option('rn_blogrush_msg'));
		$db_rn_google = stripslashes(get_option('rn_google'));
		$db_rn_google_msg = stripslashes(get_option('rn_google_msg'));
		$db_rn_live = stripslashes(get_option('rn_live'));
		$db_rn_live_msg = stripslashes(get_option('rn_live_msg'));
		$db_rn_yahoo = stripslashes(get_option('rn_yahoo'));
		$db_rn_yahoo_msg = stripslashes(get_option('rn_yahoo_msg'));
		$db_rn_custom1 = stripslashes(get_option('rn_custom1'));
		$db_rn_custom1_url = stripslashes(get_option('rn_custom1_url'));
		$db_rn_custom1_msg = stripslashes(get_option('rn_custom1_msg'));
		$db_rn_custom1_icon = stripslashes(get_option('rn_custom1_icon'));
		$db_rn_custom2 = stripslashes(get_option('rn_custom2'));
		$db_rn_custom2_url = stripslashes(get_option('rn_custom2_url'));
		$db_rn_custom2_msg = stripslashes(get_option('rn_custom2_msg'));
		$db_rn_custom2_icon = stripslashes(get_option('rn_custom2_icon'));
		$db_rn_custom3 = stripslashes(get_option('rn_custom3'));
		$db_rn_custom3_url = stripslashes(get_option('rn_custom3_url'));
		$db_rn_custom3_msg = stripslashes(get_option('rn_custom3_msg'));
		$db_rn_custom3_icon = stripslashes(get_option('rn_custom3_icon'));
		$db_rn_custom4 = stripslashes(get_option('rn_custom4'));
		$db_rn_custom4_url = stripslashes(get_option('rn_custom4_url'));
		$db_rn_custom4_msg = stripslashes(get_option('rn_custom4_msg'));
		$db_rn_custom4_icon = stripslashes(get_option('rn_custom4_icon'));
		$db_rn_custom5 = stripslashes(get_option('rn_custom5'));
		$db_rn_custom5_url = stripslashes(get_option('rn_custom5_url'));
		$db_rn_custom5_msg = stripslashes(get_option('rn_custom5_msg'));
		$db_rn_custom5_icon = stripslashes(get_option('rn_custom5_icon'));
		$db_rn_testmode = stripslashes(get_option('rn_testmode'));
		?>
	<form method="post" action="">
	<?php wp_nonce_field('update-options'); ?>
		<div id="rnpage">
			<div class="rncols">
						<p class="rn_header">Display Box Styling</p>
				
						<p class="this"><strong>Background</strong><br /><br />
							<label for="rn_bgcolor">Color #
								<input type="text" name="rn_bgcolor" size="6" maxlength="6" value="<?php echo $db_rn_bgcolor ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Use Favicon Type Icon Beside Your Message?</strong>
							<label for="rn_useImage">
								<input type="radio" name="rn_useImage" value="true" <?php if($db_rn_useImage=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_useImage" value="false" <?php if($db_rn_useImage=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
						</p>
						<p class="this"><strong>Text Attributions</strong><br /><br />
							<label for="rn_txtStyle">Style:<br />
								<input type="radio" name="rn_txtStyle" value="1" <?php if($db_rn_txtStyle=='1'){echo "checked=\"checked\"";} ?>  /> Bold&nbsp;<br />
								<input type="radio" name="rn_txtStyle" value="2" <?php if($db_rn_txtStyle=='2'){echo "checked=\"checked\"";} ?>  /> Italic&nbsp;<br />
								<input type="radio" name="rn_txtStyle" value="3" <?php if($db_rn_txtStyle=='3'){echo "checked=\"checked\"";} ?>  /> Underlined&nbsp;<br />
								<input type="radio" name="rn_txtStyle" value="4" <?php if($db_rn_txtStyle=='4'){echo "checked=\"checked\"";} ?>  /> Bold &amp; Italic&nbsp;<br />
								<input type="radio" name="rn_txtStyle" value="5" <?php if($db_rn_txtStyle=='5'){echo "checked=\"checked\"";} ?>  /> Bold &amp; Underlined&nbsp;<br />
								<input type="radio" name="rn_txtStyle" value="6" <?php if($db_rn_txtStyle=='6'){echo "checked=\"checked\"";} ?>  /> Italic &amp; Underlined&nbsp;<br />
								<input type="radio" name="rn_txtStyle" value="7" <?php if($db_rn_txtStyle=='7'){echo "checked=\"checked\"";} ?>  /> Bold, Italic &amp; Underlined&nbsp;
							</label><br /><br />
							<label for="rn_txtAlign">Alignment:<br />
								<input type="radio" name="rn_txtAlign" value="left" <?php if($db_rn_txtAlign=='left'){echo "checked=\"checked\"";} ?>  /> Left&nbsp;<br />
								<input type="radio" name="rn_txtAlign" value="center" <?php if($db_rn_txtAlign=='center'){echo "checked=\"checked\"";} ?>  /> Center&nbsp;<br />
								<input type="radio" name="rn_txtAlign" value="right" <?php if($db_rn_txtAlign=='right'){echo "checked=\"checked\"";} ?>  /> Right&nbsp;<br />
							</label><br /><br />
							<label for="rn_txtColor">Color #
								<input type="text" name="rn_txtColor" size="6" maxlength="6" value="<?php echo $db_rn_txtColor ?>" />
							</label><br /><br />
							<label for="rn_txtSize">Size:<br />
								<input type="radio" name="rn_txtSize" value="10" <?php if($db_rn_txtSize=='10'){echo "checked=\"checked\"";} ?>  /> Small&nbsp;<br />
								<input type="radio" name="rn_txtSize" value="12" <?php if($db_rn_txtSize=='12'){echo "checked=\"checked\"";} ?>  /> Normal&nbsp;<br />
								<input type="radio" name="rn_txtSize" value="14" <?php if($db_rn_txtSize=='14'){echo "checked=\"checked\"";} ?>  /> Large&nbsp;<br />
							</label><br /><br />
						</p>
						<p class="this"><strong>Message Padding</strong><br /><br />
							<label for="rn_paddingTop">Top:
								<input type="text" name="rn_paddingTop" size="2" maxlength="2" value="<?php echo $db_rn_paddingTop ?>" /> px
							</label><br /><br />
							<label for="rn_paddingRight">Right:
								<input type="text" name="rn_paddingRight" size="2" maxlength="2" value="<?php echo $db_rn_paddingRight ?>" /> px
							</label><br /><br />
							<label for="rn_paddingBottom">Bottom:
								<input type="text" name="rn_paddingBottom" size="2" maxlength="2" value="<?php echo $db_rn_paddingBottom ?>" /> px
							</label><br /><br />
							<label for="rn_paddingLeft">Left:
								<input type="text" name="rn_paddingLeft" size="2" maxlength="2" value="<?php echo $db_rn_paddingLeft ?>" /> px
							</label><br /><br />
						</p>
						<p class="this"><strong>Use Borders?</strong><br /><br />
							<label for="rn_useBorderTop">Top: 
								<input type="radio" name="rn_useBorderTop" value="true" <?php if($db_rn_useBorderTop=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_useBorderTop" value="false" <?php if($db_rn_useBorderTop=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_useBorderRight">Right: 
								<input type="radio" name="rn_useBorderRight" value="true" <?php if($db_rn_useBorderRight=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_useBorderRight" value="false" <?php if($db_rn_useBorderRight=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_useBorderBottom">Bottom: 
								<input type="radio" name="rn_useBorderBottom" value="true" <?php if($db_rn_useBorderBottom=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_useBorderBottom" value="false" <?php if($db_rn_useBorderBottom=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_useBorderLeft">Left: 
								<input type="radio" name="rn_useBorderLeft" value="true" <?php if($db_rn_useBorderLeft=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_useBorderLeft" value="false" <?php if($db_rn_useBorderLeft=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_borderSize">Size:
								<input type="text" name="rn_borderSize" size="2" maxlength="2" value="<?php echo $db_rn_borderSize ?>" />
							</label><br /><br />
							<label for="rn_borderColor">Color #
								<input type="text" name="rn_borderColor" size="6" maxlength="6" value="<?php echo $db_rn_borderColor ?>" />
							</label><br /><br />
							<label for="rn_borderStyle">Style:<br />
								<input type="radio" name="rn_borderStyle" value="none" <?php if($db_rn_borderStyle=='none'){echo "checked=\"checked\"";} ?>  /> None&nbsp;<br />
								<input type="radio" name="rn_borderStyle" value="dotted" <?php if($db_rn_borderStyle=='dotted'){echo "checked=\"checked\"";} ?>  /> Dotted&nbsp;<br />
								<input type="radio" name="rn_borderStyle" value="dashed" <?php if($db_rn_borderStyle=='dashed'){echo "checked=\"checked\"";} ?>  /> Dashed&nbsp;<br />
								<input type="radio" name="rn_borderStyle" value="solid" <?php if($db_rn_borderStyle=='solid'){echo "checked=\"checked\"";} ?>  /> Solid&nbsp;<br />
								<input type="radio" name="rn_borderStyle" value="double" <?php if($db_rn_borderStyle=='double'){echo "checked=\"checked\"";} ?>  /> Double&nbsp;<br />
								<input type="radio" name="rn_borderStyle" value="groove" <?php if($db_rn_borderStyle=='groove'){echo "checked=\"checked\"";} ?>  /> Groove&nbsp;<br />
								<input type="radio" name="rn_borderStyle" value="ridge" <?php if($db_rn_borderStyle=='ridge'){echo "checked=\"checked\"";} ?>  /> Ridge&nbsp;<br />
								<input type="radio" name="rn_borderStyle" value="inset" <?php if($db_rn_borderStyle=='inset'){echo "checked=\"checked\"";} ?>  /> Inset&nbsp;<br />
								<input type="radio" name="rn_borderStyle" value="outset" <?php if($db_rn_borderStyle=='outset'){echo "checked=\"checked\"";} ?>  /> Outset&nbsp;<br />
							</label>
						</p>	
						<p class="this"><strong>What Size Social Buttons to Use?</strong>
							<label for="rn_button"><br /><br />
								<input type="radio" name="rn_button" value="small" <?php if($db_rn_button=='small'){echo "checked=\"checked\"";} ?>  /> Small&nbsp;
								<input type="radio" name="rn_button" value="large" <?php if($db_rn_button=='large'){echo "checked=\"checked\"";} ?>  /> Large
							</label><br /><br />
						</p>
			</div>
			<div class="rncols">

						<p class="rn_header">Choose Refer Sites</p>

						<p class="this"><strong>Display for Other Site Referrals?</strong><br /><br />
							<label for="rn_new">
								<input type="radio" name="rn_new" value="true" <?php if($db_rn_new=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_new" value="false" <?php if($db_rn_new=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_new_msg">Message for Other Site Referrals:<br />
								<input type="text" name="rn_new_msg" size="30" value="<?php echo $db_rn_new_msg ?>" />
							</label><br /><br />
							<label for="rn_new_icon">Icon for Other Site Referrals:<br />
								<input type="text" name="rn_new_icon" size="30" value="<?php echo $db_rn_new_icon ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Digg?</strong><br /><br />
							<label for="rn_digg">
								<input type="radio" name="rn_digg" value="true" <?php if($db_rn_digg=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_digg" value="false" <?php if($db_rn_digg=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_digg_msg">Digg Message:<br />
								<input type="text" name="rn_digg_msg" size="30" value="<?php echo $db_rn_digg_msg ?>" />
							</label><br /><br />
							<label for="rn_digg_button">Use Digg Button?<br />
								<input type="radio" name="rn_digg_button" value="true" <?php if($db_rn_digg_button=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_digg_button" value="false" <?php if($db_rn_digg_button=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
						</p>
						<p class="this"><strong>Reddit?</strong><br /><br />
							<label for="rn_reddit">
								<input type="radio" name="rn_reddit" value="true" <?php if($db_rn_reddit=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_reddit" value="false" <?php if($db_rn_reddit=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_reddit_msg">Reddit Message:<br />
								<input type="text" name="rn_reddit_msg" size="30" value="<?php echo $db_rn_reddit_msg ?>" />
							</label><br /><br />
							<label for="rn_reddit_button">Use Reddit Button?<br />
								<input type="radio" name="rn_reddit_button" value="true" <?php if($db_rn_reddit_button=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_reddit_button" value="false" <?php if($db_rn_reddit_button=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
						</p>
						<p class="this"><strong>Delicious?</strong><br /><br />
							<label for="rn_delicious">
								<input type="radio" name="rn_delicious" value="true" <?php if($db_rn_delicious=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_delicious" value="false" <?php if($db_rn_delicious=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_delicious_msg">Delicious Message:<br />
								<input type="text" name="rn_delicious_msg" size="30" value="<?php echo $db_rn_delicious_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Facebook?</strong><br /><br />
							<label for="rn_facebook">
								<input type="radio" name="rn_facebook" value="true" <?php if($db_rn_facebook=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_facebook" value="false" <?php if($db_rn_facebook=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_facebook_msg">Facebook Message:<br />
								<input type="text" name="rn_facebook_msg" size="30" value="<?php echo $db_rn_facebook_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Slashdot?</strong><br /><br />
							<label for="rn_slashdot">
								<input type="radio" name="rn_slashdot" value="true" <?php if($db_rn_slashdot=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_slashdot" value="false" <?php if($db_rn_slashdot=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_slashdot_msg">Slashdot Message:<br />
								<input type="text" name="rn_slashdot_msg" size="30" value="<?php echo $db_rn_slashdot_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Technorati?</strong><br /><br />
							<label for="rn_technorati">
								<input type="radio" name="rn_technorati" value="true" <?php if($db_rn_technorati=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_technorati" value="false" <?php if($db_rn_technorati=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_technorati_msg">Technorati Message:<br />
								<input type="text" name="rn_technorati_msg" size="30" value="<?php echo $db_rn_technorati_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Stumbleupon?</strong><br /><br />
							<label for="rn_stumbleupon">
								<input type="radio" name="rn_stumbleupon" value="true" <?php if($db_rn_stumbleupon=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_stumbleupon" value="false" <?php if($db_rn_stumbleupon=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_stumbleupon_msg">Stumbleupon Message:<br />
								<input type="text" name="rn_stumbleupon_msg" size="30" value="<?php echo $db_rn_stumbleupon_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Fark?</strong><br /><br />
							<label for="rn_fark">
								<input type="radio" name="rn_fark" value="true" <?php if($db_rn_fark=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_fark" value="false" <?php if($db_rn_fark=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_fark_msg">Fark Message:<br />
								<input type="text" name="rn_fark_msg" size="30" value="<?php echo $db_rn_fark_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Newsvine?</strong><br /><br />
							<label for="rn_newsvine">
								<input type="radio" name="rn_newsvine" value="true" <?php if($db_rn_newsvine=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_newsvine" value="false" <?php if($db_rn_newsvine=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_newsvine_msg">Newsvine Message:<br />
								<input type="text" name="rn_newsvine_msg" size="30" value="<?php echo $db_rn_newsvine_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Blinklist?</strong><br /><br />
							<label for="rn_blinklist">
								<input type="radio" name="rn_blinklist" value="true" <?php if($db_rn_blinklist=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_blinklist" value="false" <?php if($db_rn_blinklist=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_blinklist_msg">Blinklist Message:<br />
								<input type="text" name="rn_blinklist_msg" size="30" value="<?php echo $db_rn_blinklist_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Propeller?</strong><br /><br />
							<label for="rn_propeller">
								<input type="radio" name="rn_propeller" value="true" <?php if($db_rn_propeller=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_propeller" value="false" <?php if($db_rn_propeller=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_propeller_msg">Propeller Message:<br />
								<input type="text" name="rn_propeller_msg" size="30" value="<?php echo $db_rn_propeller_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Mybloglog?</strong><br /><br />
							<label for="rn_mybloglog">
								<input type="radio" name="rn_mybloglog" value="true" <?php if($db_rn_mybloglog=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_mybloglog" value="false" <?php if($db_rn_mybloglog=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_mybloglog_msg">Mybloglog Message:<br />
								<input type="text" name="rn_mybloglog_msg" size="30" value="<?php echo $db_rn_mybloglog_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Magnolia?</strong><br /><br />
							<label for="rn_magnolia">
								<input type="radio" name="rn_magnolia" value="true" <?php if($db_rn_magnolia=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_magnolia" value="false" <?php if($db_rn_magnolia=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_magnolia_msg">Magnolia Message:<br />
								<input type="text" name="rn_magnolia_msg" size="30" value="<?php echo $db_rn_magnolia_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Squidoo?</strong><br /><br />
							<label for="rn_squidoo">
								<input type="radio" name="rn_squidoo" value="true" <?php if($db_rn_squidoo=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_squidoo" value="false" <?php if($db_rn_squidoo=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_squidoo_msg">Squidoo Message:<br />
								<input type="text" name="rn_squidoo_msg" size="30" value="<?php echo $db_rn_squidoo_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Blogmarks?</strong><br /><br />
							<label for="rn_blogmarks">
								<input type="radio" name="rn_blogmarks" value="true" <?php if($db_rn_blogmarks=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_blogmarks" value="false" <?php if($db_rn_blogmarks=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_blogmarks_msg">Blogmarks Message:<br />
								<input type="text" name="rn_blogmarks_msg" size="30" value="<?php echo $db_rn_blogmarks_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Simpy?</strong><br /><br />
							<label for="rn_simpy">
								<input type="radio" name="rn_simpy" value="true" <?php if($db_rn_simpy=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_simpy" value="false" <?php if($db_rn_simpy=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_simpy_msg">Simpy Message:<br />
								<input type="text" name="rn_simpy_msg" size="30" value="<?php echo $db_rn_simpy_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Shoutwire?</strong><br /><br />
							<label for="rn_shoutwire">
								<input type="radio" name="rn_shoutwire" value="true" <?php if($db_rn_shoutwire=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_shoutwire" value="false" <?php if($db_rn_shoutwire=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_shoutwire_msg">Shoutwire Message:<br />
								<input type="text" name="rn_shoutwire_msg" size="30" value="<?php echo $db_rn_shoutwire_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Tailrank?</strong><br /><br />
							<label for="rn_tailrank">
								<input type="radio" name="rn_tailrank" value="true" <?php if($db_rn_tailrank=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_tailrank" value="false" <?php if($db_rn_tailrank=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_tailrank_msg">Tailrank Message:<br />
								<input type="text" name="rn_tailrank_msg" size="30" value="<?php echo $db_rn_tailrank_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Dzone?</strong><br /><br />
							<label for="rn_dzone">
								<input type="radio" name="rn_dzone" value="true" <?php if($db_rn_dzone=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_dzone" value="false" <?php if($db_rn_dzone=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_dzone_msg">Dzone Message:<br />
								<input type="text" name="rn_dzone_msg" size="30" value="<?php echo $db_rn_dzone_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Furl?</strong><br /><br />
							<label for="rn_furl">
								<input type="radio" name="rn_furl" value="true" <?php if($db_rn_furl=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_furl" value="false" <?php if($db_rn_furl=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_furl_msg">Furl Message:<br />
								<input type="text" name="rn_furl_msg" size="30" value="<?php echo $db_rn_furl_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Sphinn?</strong><br /><br />
							<label for="rn_sphinn">
								<input type="radio" name="rn_sphinn" value="true" <?php if($db_rn_sphinn=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_sphinn" value="false" <?php if($db_rn_sphinn=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_sphinn_msg">Sphinn Message:<br />
								<input type="text" name="rn_sphinn_msg" size="30" value="<?php echo $db_rn_sphinn_msg ?>" />
							</label><br /><br />
							<label for="rn_sphinn_button">Use Sphinn Button?<br />
								<input type="radio" name="rn_sphinn_button" value="true" <?php if($db_rn_sphinn_button=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_sphinn_button" value="false" <?php if($db_rn_sphinn_button=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
						</p>
						<p class="this"><strong>Designfloat?</strong><br /><br />
						<label for="rn_designfloat">
							<input type="radio" name="rn_designfloat" value="true" <?php if($db_rn_designfloat=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
							<input type="radio" name="rn_designfloat" value="false" <?php if($db_rn_designfloat=='false'){echo "checked=\"checked\"";} ?>  /> No
						</label><br /><br />
						<label for="rn_designfloat_msg">Designfloat Message:<br />
							<input type="text" name="rn_designfloat_msg" size="30" value="<?php echo $db_rn_designfloat_msg ?>" />
						</label><br /><br />
						<label for="rn_designfloat_button">Use Designfloat Button?<br />
							<input type="radio" name="rn_designfloat_button" value="true" <?php if($db_rn_designfloat_button=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
							<input type="radio" name="rn_designfloat_button" value="false" <?php if($db_rn_designfloat_button=='false'){echo "checked=\"checked\"";} ?>  /> No
						</label><br /><br />
					</p>
					<p class="this"><strong>Blogrush?</strong><br /><br />
						<label for="rn_blogrush">
							<input type="radio" name="rn_blogrush" value="true" <?php if($db_rn_blogrush=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
							<input type="radio" name="rn_blogrush" value="false" <?php if($db_rn_blogrush=='false'){echo "checked=\"checked\"";} ?>  /> No
						</label><br /><br />
						<label for="rn_blogrush_msg">Blogrush Message:<br />
							<input type="text" name="rn_blogrush_msg" size="30" value="<?php echo $db_rn_blogrush_msg ?>" />
						</label><br /><br />
					</p>							
					
			</div>
			<div class="rncols">

						<p class="rn_header">Choose Search Networks and Custom URLs</p>

						<p class="this"><strong>Google Search?</strong><br /><br />
							<label for="rn_google">
								<input type="radio" name="rn_google" value="true" <?php if($db_rn_google=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_google" value="false" <?php if($db_rn_google=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_google_msg">Google Message:<br />
								<input type="text" name="rn_google_msg" size="30" value="<?php echo $db_rn_google_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Live Search?</strong><br /><br />
							<label for="rn_live">
								<input type="radio" name="rn_live" value="true" <?php if($db_rn_live=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_live" value="false" <?php if($db_rn_live=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_live_msg">Live Message:<br />
								<input type="text" name="rn_live_msg" size="30" value="<?php echo $db_rn_live_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Yahoo Search?</strong><br /><br />
							<label for="rn_yahoo">
								<input type="radio" name="rn_yahoo" value="true" <?php if($db_rn_yahoo=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_yahoo" value="false" <?php if($db_rn_yahoo=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_yahoo_msg">Yahoo Message:<br />
								<input type="text" name="rn_yahoo_msg" size="30" value="<?php echo $db_rn_yahoo_msg ?>" />
							</label><br /><br />
						</p>
						<p class="this"><strong>Use Custom URL 1?</strong><br /><br />
							<label for="rn_custom1">
								<input type="radio" name="rn_custom1" value="true" <?php if($db_rn_custom1=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_custom1" value="false" <?php if($db_rn_custom1=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_custom1_url">Custom 1 URL:<br />
								<input type="text" name="rn_custom1_url" size="30" value="<?php echo $db_rn_custom1_url ?>" />
							</label><br /><br />
							<label for="rn_custom1_msg">Custom 1 Message:<br />
								<input type="text" name="rn_custom1_msg" size="30" value="<?php echo $db_rn_custom1_msg ?>" />
							</label><br /><br />
							<label for="rn_custom1_icon">Icon for Custom 1:<br />
								<input type="text" name="rn_custom1_icon" size="30" value="<?php echo $db_rn_custom1_icon ?>" />
							</label><br /><br />
						</p>							
						<p class="this"><strong>Use Custom URL 2?</strong><br /><br />
							<label for="rn_custom2">
								<input type="radio" name="rn_custom2" value="true" <?php if($db_rn_custom2=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_custom2" value="false" <?php if($db_rn_custom2=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_custom2_url">Custom 2 URL:<br />
								<input type="text" name="rn_custom2_url" size="30" value="<?php echo $db_rn_custom2_url ?>" />
							</label><br /><br />
							<label for="rn_custom2_msg">Custom 2 Message:<br />
								<input type="text" name="rn_custom2_msg" size="30" value="<?php echo $db_rn_custom2_msg ?>" />
							</label><br /><br />
							<label for="rn_custom2_icon">Icon for Custom 2:<br />
								<input type="text" name="rn_custom2_icon" size="30" value="<?php echo $db_rn_custom2_icon ?>" />
							</label><br /><br />
						</p>							
						<p class="this"><strong>Use Custom URL 3?</strong><br /><br />
							<label for="rn_custom3">
								<input type="radio" name="rn_custom3" value="true" <?php if($db_rn_custom3=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_custom3" value="false" <?php if($db_rn_custom3=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_custom3_url">Custom 3 URL:<br />
								<input type="text" name="rn_custom3_url" size="30" value="<?php echo $db_rn_custom3_url ?>" />
							</label><br /><br />
							<label for="rn_custom3_msg">Custom 3 Message:<br />
								<input type="text" name="rn_custom3_msg" size="30" value="<?php echo $db_rn_custom3_msg ?>" />
							</label><br /><br />
							<label for="rn_custom3_icon">Icon for Custom 3:<br />
								<input type="text" name="rn_custom3_icon" size="30" value="<?php echo $db_rn_custom3_icon ?>" />
							</label><br /><br />
						</p>							
						<p class="this"><strong>Use Custom URL 4?</strong><br /><br />
							<label for="rn_custom4">
								<input type="radio" name="rn_custom4" value="true" <?php if($db_rn_custom4=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_custom4" value="false" <?php if($db_rn_custom4=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_custom4_url">Custom 4 URL:<br />
								<input type="text" name="rn_custom4_url" size="30" value="<?php echo $db_rn_custom4_url ?>" />
							</label><br /><br />
							<label for="rn_custom4_msg">Custom 4 Message:<br />
								<input type="text" name="rn_custom4_msg" size="30" value="<?php echo $db_rn_custom4_msg ?>" />
							</label><br /><br />
							<label for="rn_custom4_icon">Icon for Custom 4:<br />
								<input type="text" name="rn_custom4_icon" size="30" value="<?php echo $db_rn_custom4_icon ?>" />
							</label><br /><br />
						</p>							
						<p class="this"><strong>Use Custom URL 5?</strong><br /><br />
							<label for="rn_custom5">
								<input type="radio" name="rn_custom5" value="true" <?php if($db_rn_custom5=='true'){echo "checked=\"checked\"";} ?>  /> Yes&nbsp;
								<input type="radio" name="rn_custom5" value="false" <?php if($db_rn_custom5=='false'){echo "checked=\"checked\"";} ?>  /> No
							</label><br /><br />
							<label for="rn_custom5_url">Custom 5 URL:<br />
								<input type="text" name="rn_custom5_url" size="30" value="<?php echo $db_rn_custom5_url ?>" />
							</label><br /><br />
							<label for="rn_custom5_msg">Custom 5 Message:<br />
								<input type="text" name="rn_custom5_msg" size="30" value="<?php echo $db_rn_custom5_msg ?>" />
							</label><br /><br />
							<label for="rn_custom5_icon">Icon for Custom 5:<br />
								<input type="text" name="rn_custom5_icon" size="30" value="<?php echo $db_rn_custom5_icon ?>" />
							</label><br /><br />
						</p>							
						
			</div>
				
		
</div>
<div class="rntestmode <?php if($db_rn_testmode!='no'){echo "rnalert";}?>"><strong>Activate Test Mode?</strong><br /><br />
	<label for="rn_testmode">
		<select name="rn_testmode">
			<option value="no" <?php if($db_rn_testmode=='no'){echo "selected=\"selected\"";}?>>Off</option>
			<option value="new" <?php if($db_rn_testmode=='new'){echo "selected=\"selected\"";} ?>>Test New</option>
			<option value="digg" <?php if($db_rn_testmode=='digg'){echo "selected=\"selected\"";} ?>>Test Digg</option>
			<option value="reddit" <?php if($db_rn_testmode=='reddit'){echo "selected=\"selected\"";} ?>>Test Reddit</option>
			<option value="delicious" <?php if($db_rn_testmode=='delicious'){echo "selected=\"selected\"";} ?>>Test Delicious</option>
			<option value="facebook" <?php if($db_rn_testmode=='facebook'){echo "selected=\"selected\"";} ?>>Test Facebook</option>
			<option value="slashdot" <?php if($db_rn_testmode=='slashdot'){echo "selected=\"selected\"";} ?>>Test Slashdot</option>
			<option value="technorati" <?php if($db_rn_testmode=='technorati'){echo "selected=\"selected\"";} ?>>Test Technorati</option>
			<option value="stumbleupon" <?php if($db_rn_testmode=='stumbleupon'){echo "selected=\"selected\"";} ?>>Test Stumbleupon</option>
			<option value="fark" <?php if($db_rn_testmode=='fark'){echo "selected=\"selected\"";} ?>>Test Fark</option>
			<option value="newsvine" <?php if($db_rn_testmode=='newvine'){echo "selected=\"selected\"";} ?>>Test Newsvine</option>
			<option value="blinklist" <?php if($db_rn_testmode=='blinklist'){echo "selected=\"selected\"";} ?>>Test Blinklist</option>
			<option value="propeller" <?php if($db_rn_testmode=='propeller'){echo "selected=\"selected\"";} ?>>Test Propeller</option>
			<option value="mybloglog" <?php if($db_rn_testmode=='mybloglog'){echo "selected=\"selected\"";} ?>>Test Mybloglog</option>
			<option value="magnolia" <?php if($db_rn_testmode=='magnolia'){echo "selected=\"selected\"";} ?>>Test Magnolia</option>
			<option value="squidoo" <?php if($db_rn_testmode=='squidoo'){echo "selected=\"selected\"";} ?>>Test Squidoo</option>
			<option value="blogmarks" <?php if($db_rn_testmode=='blogmarks'){echo "selected=\"selected\"";} ?>>Test Blogmarks</option>
			<option value="simpy" <?php if($db_rn_testmode=='simpy'){echo "selected=\"selected\"";} ?>>Test Simpy</option>
			<option value="shoutwire" <?php if($db_rn_testmode=='shoutwire'){echo "selected=\"selected\"";} ?>>Test Shoutwire</option>
			<option value="tailrank" <?php if($db_rn_testmode=='tailrank'){echo "selected=\"selected\"";} ?>>Test Tailrank</option>
			<option value="dzone" <?php if($db_rn_testmode=='dzone'){echo "selected=\"selected\"";} ?>>Test Dzone</option>
			<option value="furl" <?php if($db_rn_testmode=='furl'){echo "selected=\"selected\"";} ?>>Test Furl</option>
			<option value="sphinn" <?php if($db_rn_testmode=='sphinn'){echo "selected=\"selected\"";} ?>>Test Sphinn</option>
			<option value="designfloat" <?php if($db_rn_testmode=='designfloat'){echo "selected=\"selected\"";} ?>>Test Designfloat</option>
			<option value="blogrush" <?php if($db_rn_testmode=='blogrush'){echo "selected=\"selected\"";} ?>>Test Blogrush</option>
			<option value="google" <?php if($db_rn_testmode=='google'){echo "selected=\"selected\"";} ?>>Test Google</option>
			<option value="live" <?php if($db_rn_testmode=='live'){echo "selected=\"selected\"";} ?>>Test Live</option>
			<option value="yahoo" <?php if($db_rn_testmode=='yahoo'){echo "selected=\"selected\"";} ?>>Test Yahoo</option>
			<option value="custom1" <?php if($db_rn_testmode=='custom1'){echo "selected=\"selected\"";} ?>>Test Custom 1</option>
			<option value="custom2" <?php if($db_rn_testmode=='custom2'){echo "selected=\"selected\"";} ?>>Test Custom 2</option>
			<option value="custom3" <?php if($db_rn_testmode=='custom3'){echo "selected=\"selected\"";} ?>>Test Custom 3</option>
			<option value="custom4" <?php if($db_rn_testmode=='custom4'){echo "selected=\"selected\"";} ?>>Test Custom 4</option>
			<option value="custom5" <?php if($db_rn_testmode=='custom5'){echo "selected=\"selected\"";} ?>>Test Custom 5</option>
		</select>
	</label>
</div>

<div><p class="rnsubmit"><input type="submit" name="submit" size="30" value="Submit" /></p>
</div>
</form>		
<?php ;
		
	}

}

?>
