<?php
// $Id: server.php,v 1.2 2012/03/31 17:51:20 ohwada Exp $

//=========================================================
// Captcha Module
// 2012-03-31 K.OHWADA
//=========================================================

//---------------------------------------------------------
// 2012-03-31 K.OHWADA
// Assigning the return value of new by reference is now deprecated.
//---------------------------------------------------------

/**
 * CAPTCHA image server
 * 
 */  
require_once ( './class.captcha_x.php');

// Assigning the return value of new by reference is now deprecated.
// $server = &new captcha_x ();
$server = new captcha_x ();

$server->handle_request ();
?>
