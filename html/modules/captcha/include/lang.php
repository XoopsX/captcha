<?php
// $Id: lang.php,v 1.1 2012/03/31 16:04:15 ohwada Exp $

//=========================================================
// Captcha Module
// 2007-02-18 K.OHWADA
//=========================================================

global $xoopsConfig;
$XOOPS_LANGUAGE = $xoopsConfig['language'];

// main.php
if ( file_exists(XOOPS_ROOT_PATH.'/modules/captcha/language/'.$XOOPS_LANGUAGE.'/main.php') ) 
{
	include_once XOOPS_ROOT_PATH.'/modules/captcha/language/'.$XOOPS_LANGUAGE.'/main.php';
}
else
{
	include_once XOOPS_ROOT_PATH.'/modules/captcha/language/english/main.php';
}

?>