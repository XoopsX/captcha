<?php

/*
 * Smarty plugin
 * -------------------------------------------------------------
 * Type:     function
 * Name:     captcha_make_caption
 * Version:  1.0
 * Date:     
 * Author:   nao-pon
 * Purpose:  
 * Input:    
 * 
 * Examples: {captcha_make_caption title=(Title) desc=(Description)}
 * -------------------------------------------------------------
 */
function smarty_function_captcha_make_caption($params, &$smarty)
{
	if (include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php') {
		$captcha_api = captcha_api::getInstance();
		
		isset($params['title']) && ($captcha_api->_lang_title = $params['title']);
		isset($params['desc']) && ($captcha_api->_lang_desc = $params['desc']);
		
		return $captcha_api->make_caption();
	}
}