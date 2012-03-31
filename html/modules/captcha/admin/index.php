<?php
// $Id: index.php,v 1.1 2012/03/31 16:04:15 ohwada Exp $

// 2008-01-20 K.OHWADA
// show safe_mode
// check imagefttext

// 2007-05-20 K.OHWADA
// Notice [PHP]: Undefined index: submit

//=========================================================
// Captcha Module
// 2007-02-18 K.OHWADA
//=========================================================

include '../../../include/cp_header.php';
include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";

$XOOPS_LANGUAGE = $xoopsConfig['language'];

// modinfo.php
if ( file_exists(XOOPS_ROOT_PATH.'/modules/captcha/language/'.$XOOPS_LANGUAGE.'/modinfo.php') ) 
{
	include_once XOOPS_ROOT_PATH.'/modules/captcha/language/'.$XOOPS_LANGUAGE.'/modinfo.php';
}
else
{
	include_once XOOPS_ROOT_PATH.'/modules/captcha/language/english/modinfo.php';
}

xoops_cp_header();

echo "<h1>" . _MI_CAPTCHA_NAME . "</h1>\n";
echo _MI_CAPTCHA_DESC . "<br />\n";

echo "<h3>PHP info</h3>\n";
echo "safe_mode: ". intval( ini_get('safe_mode') ) ."<br />\n";

echo "<h3>GD info</h3>\n";
echo "captcha requires GD 2.0.1 or later<br/><br/>\n";
if ( function_exists('gd_info') )
{
	foreach ( gd_info() as $k => $v )
	{
		echo $k .': '. $v ."<br />\n";
	}
	if ( function_exists('imagefttext') )
	{
		echo "imagefttext: loaded<br />\n";
	}
	else
	{
		echo '<span style="color:#ff0000">imagefttext: not loaded</span><br />'."\n";
	}
}
else
{
	echo '<span style="color:#ff0000">GD: not loaded</span><br />'."\n";
}

if ( !file_exists(XOOPS_ROOT_PATH.'/captcha.php') )
{
	echo "<br />\n";
	xoops_error( "Please copy captcha.php to ".XOOPS_ROOT_PATH );
	echo "<br />\n";
}

echo "<h3>Captcha Test Form</h3>\n";
include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php';
$captcha_api =& captcha_api::getInstance();

// Notice [PHP]: Undefined index: submit
if ( isset($_POST['submit']) )
{
	$flag_debug = (bool)error_reporting();
	if ( $captcha_api->validate_post( $flag_debug ) )
	{
		echo "<h4 style='color:#0000ff;'>Test OK</h4>\n";
	}
	else
	{
		xoops_error("Test NG");
		echo "<br />\n";
	}
}

$form = new XoopsThemeForm( "Test of Captcha", "captcha_form", 'index.php');
$form->addElement( $captcha_api->make_xoops_form_label() );
$form->addElement(new XoopsFormButton('', 'submit', _SUBMIT, 'submit'));
$form->display();

echo "<h3>Image debug info</h3>\n";
echo "Check this when Captcha Image is not show <br />\n";
echo '<a href="server.php" target="_blank">show image debug info</a>';

xoops_cp_footer();

?>