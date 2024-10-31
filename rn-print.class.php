<?php
class RNprintRN{
	function print_refer_notes(){
		$rnplugindir = (get_bloginfo('wpurl'). '/wp-content/plugins/refer-notes');
		$pg0 = stripslashes(get_option('rn_bgcolor'));
		$pg1 = stripslashes(get_option('rn_useImage'));
		$pg2 = stripslashes(get_option('rn_txtStyle'));
		$pg3 = stripslashes(get_option('rn_txtAlign'));
		$pg4 = stripslashes(get_option('rn_txtColor'));
		$pg5 = stripslashes(get_option('rn_txtSize'));
		$pg6 = stripslashes(get_option('rn_paddingTop'));
		$pg7 = stripslashes(get_option('rn_paddingRight'));
		$pg8 = stripslashes(get_option('rn_paddingBottom'));
		$pg9 = stripslashes(get_option('rn_paddingLeft'));
		$pg10 = stripslashes(get_option('rn_useBorderTop'));
		$pg11 = stripslashes(get_option('rn_useBorderRight'));
		$pg12 = stripslashes(get_option('rn_useBorderBottom'));
		$pg13 = stripslashes(get_option('rn_useBorderLeft'));
		$pg14 = stripslashes(get_option('rn_borderSize'));
		$pg15 = stripslashes(get_option('rn_borderColor'));
		$pg16 = stripslashes(get_option('rn_borderStyle'));
		$pg17 = stripslashes(get_option('rn_button'));
		$pg18 = stripslashes(get_option('rn_new'));
		$pg19 = stripslashes(get_option('rn_new_msg'));
		$pg20 = stripslashes(get_option('rn_new_icon'));
		$pg21 = stripslashes(get_option('rn_digg'));
		$pg22 = stripslashes(get_option('rn_digg_msg'));
		$pg23 = stripslashes(get_option('rn_digg_button'));
		$pg24 = stripslashes(get_option('rn_reddit'));
		$pg25 = stripslashes(get_option('rn_reddit_msg'));
		$pg26 = stripslashes(get_option('rn_reddit_button'));
		$pg27 = stripslashes(get_option('rn_delicious'));
		$pg28 = stripslashes(get_option('rn_delicious_msg'));
		$pg29 = stripslashes(get_option('rn_facebook'));
		$pg30 = stripslashes(get_option('rn_facebook_msg'));
		$pg31 = stripslashes(get_option('rn_slashdot'));
		$pg32 = stripslashes(get_option('rn_slashdot_msg'));
		$pg33 = stripslashes(get_option('rn_technorati'));
		$pg34 = stripslashes(get_option('rn_technorati_msg'));
		$pg35 = stripslashes(get_option('rn_stumbleupon'));
		$pg36 = stripslashes(get_option('rn_stumbleupon_msg'));
		$pg37 = stripslashes(get_option('rn_fark'));
		$pg38 = stripslashes(get_option('rn_fark_msg'));
		$pg39 = stripslashes(get_option('rn_newsvine'));
		$pg40 = stripslashes(get_option('rn_newsvine_msg'));
		$pg41 = stripslashes(get_option('rn_blinklist'));
		$pg42 = stripslashes(get_option('rn_blinklist_msg'));
		$pg43 = stripslashes(get_option('rn_propeller'));
		$pg44 = stripslashes(get_option('rn_propeller_msg'));
		$pg45 = stripslashes(get_option('rn_mybloglog'));
		$pg46 = stripslashes(get_option('rn_mybloglog_msg'));
		$pg47 = stripslashes(get_option('rn_magnolia'));
		$pg48 = stripslashes(get_option('rn_magnolia_msg'));
		$pg49 = stripslashes(get_option('rn_squidoo'));
		$pg50 = stripslashes(get_option('rn_squidoo_msg'));
		$pg51 = stripslashes(get_option('rn_blogmarks'));
		$pg52 = stripslashes(get_option('rn_blogmarks_msg'));
		$pg53 = stripslashes(get_option('rn_simpy'));
		$pg54 = stripslashes(get_option('rn_simpy_msg'));
		$pg55 = stripslashes(get_option('rn_shoutwire'));
		$pg56 = stripslashes(get_option('rn_shoutwire_msg'));
		$pg57 = stripslashes(get_option('rn_tailrank'));
		$pg58 = stripslashes(get_option('rn_tailrank_msg'));
		$pg59 = stripslashes(get_option('rn_dzone'));
		$pg60 = stripslashes(get_option('rn_dzone_msg'));
		$pg61 = stripslashes(get_option('rn_furl'));
		$pg62 = stripslashes(get_option('rn_furl_msg'));
		$pg63 = stripslashes(get_option('rn_sphinn'));
		$pg64 = stripslashes(get_option('rn_sphinn_msg'));
		$pg65 = stripslashes(get_option('rn_sphinn_button'));
		$pg66 = stripslashes(get_option('rn_designfloat'));
		$pg67 = stripslashes(get_option('rn_designfloat_msg'));
		$pg68 = stripslashes(get_option('rn_designfloat_button'));
		$pg69 = stripslashes(get_option('rn_blogrush'));
		$pg70 = stripslashes(get_option('rn_blogrush_msg'));
		$pg71 = stripslashes(get_option('rn_google'));
		$pg72 = stripslashes(get_option('rn_google_msg'));
		$pg73 = stripslashes(get_option('rn_live'));
		$pg74 = stripslashes(get_option('rn_live_msg'));
		$pg75 = stripslashes(get_option('rn_yahoo'));
		$pg76 = stripslashes(get_option('rn_yahoo_msg'));
		$pg77 = stripslashes(get_option('rn_custom1'));
		$pg78 = stripslashes(get_option('rn_custom1_url'));
		$pg79 = stripslashes(get_option('rn_custom1_msg'));
		$pg80 = stripslashes(get_option('rn_custom1_icon'));
		$pg81 = stripslashes(get_option('rn_custom2'));
		$pg82 = stripslashes(get_option('rn_custom2_url'));
		$pg83 = stripslashes(get_option('rn_custom2_msg'));
		$pg84 = stripslashes(get_option('rn_custom2_icon'));
		$pg85 = stripslashes(get_option('rn_custom3'));
		$pg86 = stripslashes(get_option('rn_custom3_url'));
		$pg87 = stripslashes(get_option('rn_custom3_msg'));
		$pg88 = stripslashes(get_option('rn_custom3_icon'));
		$pg89 = stripslashes(get_option('rn_custom4'));
		$pg90 = stripslashes(get_option('rn_custom4_url'));
		$pg91 = stripslashes(get_option('rn_custom4_msg'));
		$pg92 = stripslashes(get_option('rn_custom4_icon'));
		$pg93 = stripslashes(get_option('rn_custom5'));
		$pg94 = stripslashes(get_option('rn_custom5_url'));
		$pg95 = stripslashes(get_option('rn_custom5_msg'));
		$pg96 = stripslashes(get_option('rn_custom5_icon'));
		$pg97 = stripslashes(get_option('rn_testmode'));
////////////////////

		// Fixing some variables for CSS
		$pg5 = $pg5 . "px";
		$pg14 = $pg14 . "px";
		$box_padding = $pg6 . "px " . $pg7 . "px " . $pg8 . "px " . $pg9 . "px";
		
		//Check to see if test mode is active
		if ($pg97=='no'){
		$pg97=$_SERVER['HTTP_REFERER'];
		}
		else{
		$pg97="http://www.$pg97.com";
		//$pg197=$pg97;
		}
		
//------------------------------------------------------------------------------------------------------------------------------------------------	

	// Get the server HTTP Referer
	$referral = $pg97 ; //'http://www.testwiththis.com'    $_SERVER['HTTP_REFERER']
	
	// All to lowercase
	$referral = strtolower($referral);

	// Only get the referral website
	$referral = explode ("/", $referral);
	$referral = $referral[2];

	// Remove www. from the Referer
	if (substr ($referral, 0, 4) == "www.")
	{
		$referral = substr ("$referral", 4);
	}

	// Remove subdomain from the Referer
	// Fix for fake subdomain of del.icio.us & ma.gnolia.com
	if ($referral != "del.icio.us" && $referral != "ma.gnolia.com")
	{
		$referral = explode (".", $referral);
		$i = count($referral);
		$referral = $referral[$i-2] . "." . $referral[$i-1];
	}

	// Fix to cover all Google domains, such as Google.com, Google.co.uk, Google.nl etc.
	if (substr ($referral, 0, 6) == "google")
	{
		$referral = "google";
	}
	
//------------------------------------------------------------------------------------------------------------------------------------------------
	/* Start Referral checking*/
	$message = "";
	
	if ($referral == "digg.com" && $pg21 == "true")
	{
		$message = $pg22;
		$icon = "digg.png";
		if ($pg23 == "true")
		{
			if ($pg17 == "small")
			{
				$button = "<script type=\"text/javascript\">digg_skin = 'compact'; digg_window = 'new';</script><script src=\"http://digg.com/tools/diggthis.js\" type=\"text/javascript\"></script>";
			}
			else
			{
				$button = "<script src=\"http://digg.com/tools/diggthis.js\" type=\"text/javascript\"></script>";
			}
		}
	}
	else if ($referral == "reddit.com" && $pg24 == "true")
	{
		$message = $pg25;
		$icon = "reddit.png";
		if ($pg26 == "true")
		{
			if ($pg17 == "small")
			{
				$button = "<script type=\"text/javascript\" src=\"http://reddit.com/button.js?t=1\"></script>";
			}
			else
			{
				$button = "<script type=\"text/javascript\" src=\"http://reddit.com/button.js?t=3\"></script>";
			}
		}
	}
	else if ($referral == "del.icio.us" && $pg27 == "true")
	{
		$message = $pg28;
		$icon = "delicious.png";
	}
	else if ($referral == "facebook.com" && $pg29 == "true")
	{
		$message = $pg30;
		$icon = "facebook.png";
	}
	else if ($referral == "slashdot.org" && $pg31 == "true")
	{
		$message = $pg32;
		$icon = "slashdot.png";
	}
	else if ($referral == "technorati.com" && $pg33 == "true")
	{
		$message = $pg34;
		$icon = "technorati.png";
	}
	else if ($referral == "stumbleupon.com" && $pg35 == "true")
	{
		$message = $pg36;
		$icon = "stumbleupon.png";
	}
	else if ($referral == "fark.com" && $pg37 == "true")
	{
		$message = $pg38;
		$icon = "fark.png";
	}
	else if ($referral == "newsvine.com" && $pg39 == "true")
	{
		$message = $pg40;
		$icon = "newsvine.png";
	}
	else if ($referral == "blinklist.com" && $pg41 == "true")
	{
		$message = $pg42;
		$icon = "blinklist.png";
	}
	else if ($referral == "propeller.com" && $pg43 == "true")
	{
		$message = $pg44;
		$icon = "propeller.png";
	}
	else if ($referral == "mybloglog.com" && $pg45 == "true")
	{
		$message = $pg46;
		$icon = "mybloglog.png";
	}
	else if ($referral == "ma.gnolia.com" && $pg47 == "true")
	{
		$message = $pg48;
		$icon = "magnolia.png";
	}
	else if ($referral == "squidoo.com" && $pg49 == "true")
	{
		$message = $pg50;
		$icon = "squidoo.png";
	}
	else if ($referral == "blogmarks.net" && $pg51 == "true")
	{
		$message = $pg52;
		$icon = "blogmarks.png";
	}
	else if ($referral == "simpy.com" && $pg53 == "true")
	{
		$message = $pg54;
		$icon = "simpy.png";
	}
	else if ($referral == "shoutwire.com" && $pg55 == "true")
	{
		$message = $pg56;
		$icon = "shoutwire.png";
	}
	else if ($referral == "tailrank.com" && $pg57 == "true")
	{
		$message = $pg58;
		$icon = "tailrank.png";
	}
	else if ($referral == "dzone.com" && $pg59 == "true")
	{
		$message = $pg60;
		$icon = "dzone.png";
	}
	else if ($referral == "furl.net" && $pg61 == "true")
	{
		$message = $pg62;
		$icon = "furl.png";
	}
	else if ($referral == "sphinn.com" && $pg63 == "true")
	{
		$message = $pg64;
		$icon = "sphinn.png";
		if ($pg65 == "true")
		{
			$button = "<script type=\"text/javascript\" src=\"http://sphinn.com/evb/button.php\"></script>";
		}
	}
	else if ($referral == "designfloat.com" && $pg66 == "true")
	{
		$message = $pg67;
		$icon = "designfloat.png";
		if ($pg68 == "true")
		{
			if ($pg17 == "small")
			{
				$button = "<script type=\"text/javascript\" src=\"http://www.designfloat.com/evb/button.php\"></script>";
			}
			else
			{
				$button = "<script type=\"text/javascript\" src=\"http://www.designfloat.com/evb2/button.php\"></script>";
			}
		}
	}
	else if ($referral == "google" && $pg71 == "true")
	{
		$message = $pg72;
		$icon = "google.png";
	}
	else if ($referral == "live.com" && $pg73 == "true")
	{
		$message = $pg74;
		$icon = "live.png";
	}
	else if ($referral == "yahoo.com" && $pg75 == "true")
	{
		$message = $pg76;
		$icon = "yahoo.png";
	}
	else if ($referral == $pg78 && $pg77 == "true")
	{
		$message = $pg79;
		$icon = $pg80;
	}
	else if ($referral == $pg82 && $pg81 == "true")
	{
		$message = $pg83;
		$icon = $pg84;
	}
	else if ($referral == "$pg86" && $pg85 == "true")
	{
		$message = $pg87;
		$icon = $pg88;
	}
	else if ($referral == "$pg90" && $pg89 == "true")
	{
		$message = $pg91;
		$icon = $pg92;
	}
	else if ($referral == "$pg94" && $pg93 == "true")
	{
		$message = $pg95;
		$icon = $pg96;
	}
	else if ($referral == "blogrush.com" && $pg69 == "true")
	{
		$message = $pg70;
		$icon = "blogrush.png";
	}
	else if ($pg18 == "true")
	{
		$message = $pg19;
		$icon = $pg20;
	}

	// Exclude your own domain or direct page loading
	$urlstring = $_SERVER['HTTP_HOST'];
	preg_match("/^(http:\/\/)?([^\/]+)/i", $urlstring, $result);
	$domain = $result[2];
	
	// Remove www. from the domain
	if (substr ($domain, 0, 4) == "www.")
	{
		$domain = substr ("$domain", 4);
	}

	// Remove any subdomain names domain
	$domain = explode (".", $domain);
	$i = count($domain);
	$domain = $domain[$i-2] . "." . $domain[$i-1];
	
	
//------------------------------------------------------------------------------------------------------------------------------------------------

	
	if ($referral != $domain && $message != "")
	{
		// Create the message box
		echo "<!-- Start refer-notes -->\n";
		
		echo "<div id=\"refer-notes\" style=\"background: #$pg0";
		if ($pg1 == "true")
		{
			echo " url($rnplugindir/icon/$icon) center no-repeat;";
			echo " background-position: 15px 50%;";
		}
		else
		{
			echo ";";
		}
		echo " text-align: $pg3;";
		echo "color: #$pg4;";
		if ($pg2 == "1" || $pg2 == "4" || $pg2 == "5" || $pg2 == "7")
		{
			echo "font-weight: bold;";
		}
		if ($pg2 == "2" || $pg2 == "4" || $pg2 == "6" || $pg2 == "7")
		{
			echo "font-style: italic;";
		}
		if ($pg2 == "3" || $pg2 == "5" || $pg2 == "6" || $pg2 == "7")
		{
			echo "text-decoration: underline;";
		}
		echo "font-size: $pg5;";
		echo "padding: $box_padding;";
		if ($pg10 == "true")
		{
			echo "border-top: $pg14 $pg16 #$pg15;";
		}
		if ($pg11 == "true")
		{
			echo "border-right: $pg14 $pg16 #$pg15;";
		}
		if ($pg12 == "true")
		{
			echo "border-bottom: $pg14 $pg16 #$pg15;";
		}
		if ($pg13 == "true")
		{
			echo "border-left: $pg14 $pg16 #$pg15;";
		}
		echo "z-index:10000;";
		echo "\">\n$button&nbsp;&nbsp;$message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<div id=\"refer-notes-button\" style=\"cursor:pointer;\">[Close]</div></div>";
		echo "\n";
?>
<script type="text/javascript">
jQuery("#refer-notes-button").click(function() {
jQuery("#refer-notes").slideToggle("slow");
});
</script>
<?php
	}
}
}
?>
