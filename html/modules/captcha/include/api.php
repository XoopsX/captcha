<?php
// $Id: api.php,v 1.1 2012/03/31 16:04:15 ohwada Exp $

//=========================================================
// Captcha Module
// 2007-02-18 K.OHWADA
//=========================================================

include_once XOOPS_ROOT_PATH.'/modules/captcha/class/captcha_x/class.captcha_x.php';
include_once XOOPS_ROOT_PATH.'/modules/captcha/class/captcha_api.php';
include_once XOOPS_ROOT_PATH.'/modules/captcha/include/lang.php';

$captcha_api =& captcha_api::getInstance();

?>