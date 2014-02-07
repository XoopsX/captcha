<?php

/*
 * Smarty plugin
 * -------------------------------------------------------------
 * Type:     function
 * Name:     captcha_make_img_input
 * Version:  1.0
 * Date:     
 * Author:   nao-pon
 * Purpose:  
 * Input:    
 * 
 * Examples: {captcha_make_img_input note=(Note) alt=(<img> alt) style=(<img> style)}
 * -------------------------------------------------------------
 */
function smarty_function_captcha_make_img_input($params, &$smarty)
{
	if (include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php') {
		$captcha_api = captcha_api::getInstance();
		
		isset($params['note']) && ($captcha_api->_lang_note = $params['note']);
		isset($params['alt']) && ($captcha_api->_lang_alt = $params['alt']);
		isset($params['style']) && ($captcha_api->_style = $params['style']);
		
		return $captcha_api->make_img_input();
	}
}