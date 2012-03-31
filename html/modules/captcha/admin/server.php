<?php
// $Id: server.php,v 1.1 2012/03/31 16:04:15 ohwada Exp $

// 2008-01-20 K.OHWADA
// Assigning the return value of new by reference is deprecated

//=========================================================
// Captcha Module
// 2007-02-18 K.OHWADA
//=========================================================

include '../../../include/cp_header.php';
include_once XOOPS_ROOT_PATH.'/modules/captcha/class/captcha_x/class.captcha_x.php';

error_reporting(E_ALL);

header("Content-type: text/html");
echo "<html><body>\n";
echo "<h3>Image debug info</h3>\n";

// Assigning the return value of new by reference is deprecated
$captcha_x = new captcha_x();

$captcha_x->handle_request( false );

echo "\n</body></html>\n";

?>