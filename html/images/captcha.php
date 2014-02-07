<?php
// $Id: captcha.php,v 1.1 2012/03/31 16:04:15 ohwada Exp $

// 2008-01-20 K.OHWADA
// Assigning the return value of new by reference is deprecated

//=========================================================
// Captcha Module
// 2007-02-18 K.OHWADA
//=========================================================

if ( file_exists('../mainfile.php') ) 
{
	include '../mainfile.php';
}
else
{
	exit;
}
include_once XOOPS_ROOT_PATH.'/modules/captcha/class/captcha_x/class.captcha_x.php';

// Assigning the return value of new by reference is deprecated
$captcha_x = new captcha_x();

$captcha_x->handle_request();

?>