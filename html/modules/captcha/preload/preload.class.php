<?php

if (!defined('XOOPS_ROOT_PATH')) exit();

class captcha_preload extends XCube_ActionFilter
{
	function postFilter() {
		$this->mRoot->mDelegateManager->add('Legacy.Event.RegistUser.Validate', array($this, 'registUserValidate'));
		$this->mRoot->mDelegateManager->add('Legacy.Event.RegistUser.SetValidators', array($this, 'registUserSetValidator'));
	}
	
	function registUserValidate($actionForm) {
		$handler =& xoops_gethandler('config');
        $mConfigs = $handler->getConfigsByDirname('captcha');
        if ($mConfigs['registUser']) {
			include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php';
			$captcha_api = captcha_api::getInstance();
			if ( !$captcha_api->validate_post() ) {
				$actionForm->addErrorMessage(_CAPTCHA_ERROR);
			}
        }
	}
	
	function registUserSetValidator(&$validators) {
		$handler =& xoops_gethandler('config');
		$mConfigs = $handler->getConfigsByDirname('captcha');
		if ($mConfigs['registUser']) {
			include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php';
			$captcha_api = captcha_api::getInstance();
			$validators[] = array(
				'caption' => $captcha_api->make_caption(),
				'element' => $captcha_api->make_img_input()
			);
		}
	}
}
