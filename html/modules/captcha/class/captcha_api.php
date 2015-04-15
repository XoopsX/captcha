<?php
// $Id: captcha_api.php,v 1.1 2012/03/31 16:04:15 ohwada Exp $

// 2008-01-20 K.OHWADA
// Assigning the return value of new by reference is deprecated

// 2007-05-20 K.OHWADA
// make_caption() 

//=========================================================
// Captcha Module
// 2007-02-18 K.OHWADA
//=========================================================

// === class begin ===
if( !class_exists('captcha_api') ) 
{

// --- class begin ---
class captcha_api
{
	var $_post_name = 'captcha';
	var $_alt   = "CAPTCHA image";
	var $_style = "padding: 3px";
	var $_server;
	var $_lang_title = _CAPTCHA_TITLE;
	var $_lang_desc  = _CAPTCHA_DESC;
	var $_lang_note  = _CAPTCHA_NOTE;

//---------------------------------------------------------
// constructor
//---------------------------------------------------------
function captcha_api()
{
	$this->_server = XOOPS_URL . '/images/captcha.php';
}

public static function &getInstance()
{
	static $instance;
	if (!isset($instance)) 
	{
		$instance = new captcha_api();
	}
	return $instance;
}

//---------------------------------------------------------
// function
//---------------------------------------------------------
function &make_xoops_form_label()
{
	$obj = new XoopsFormLabel( $this->make_caption(), $this->make_img_input() );
	return $obj;
}

function make_caption()
{
	$cap =  $this->_lang_title . "<br />\n" . $this->_lang_desc;
	return $cap;
}

function make_img_input()
{
	$form = '';
	if ( $this->_lang_note ) {
		$form .= $this->_lang_note ."<br />\n";
	}
	$form .= $this->make_img() . "<br />\n";
	$form .= '<input name="' . $this->_post_name . '" type="text" />';
	return $form;
}

function make_img()
{
	$onclick = "javasript:this.src='". $this->_server ."?'+Math.random();";
	$img     = '<img src="' . $this->_server . '?' . time() . '" onclick="' . $onclick . '" alt="'. $this->_alt . '" style="' . $this->_style . '" />';
	return $img;
}

function validate_post_if_guest() 
{
	global $xoopsUser;
	if ( !is_object($xoopsUser) ) {
		return $this->validate_post();
	}
	return true;
}

function validate_post( $flag_debug=false ) 
{
	$captcha = new captcha_x();
	if ( isset( $_POST[$this->_post_name] ) && 
	     $captcha->validate( $_POST[$this->_post_name], $flag_debug ) ) {
		return true;
	}
	return false;
}

// --- class end ---
}

// === class end ===
}

?>