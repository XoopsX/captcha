$Id: readme_en.txt,v 1.2 2012/03/31 17:51:20 ohwada Exp $

=================================================
Title:   captcha_x for XOOPS
=================================================

=================================================
Version: 0.20
Date:    2012-03-31
Author:  Kenichi OHWADA
URL:     http://linux.ohwada.jp/
Email:   webmaster@ohwada.jp
=================================================

1. Migrating to PHP 5.3
(1) Assigning the return value of new by reference is now deprecated.


=================================================
Version: 0.14
Date:    2008-01-26
=================================================

1. bugfix
(1) not work in safe mode
http://linux.ohwada.jp/modules/newbb/viewtopic.php?topic_id=765&forum=11

(2) Assigning the return value of new by reference is deprecated


=================================================
Version: 0.13
Date:    2007-09-07
=================================================

1. bugfix
(1) Invalid font filename in PHP 5.2.3
http://dev.xoops.org/modules/xfmod/tracker/?func=detail&aid=4694&group_id=1392&atid=1726
http://linux.ohwada.jp/modules/newbb/viewtopic.php?viewmode=flat&topic_id=675&forum=11


=================================================
Version: 0.12
Date:    2007-06-09
=================================================

1. multi language
(1) add Japanese UTF-8 files


=================================================
Version: 0.11
Date:    2007-05-24
=================================================

The purpose of this project is the counter measure of the comment spam,
using CAPTCHA technique

* changes *
(1) check to exist captcha.php in admin page
(2) add german files

* suported module *
- hack of bluesbb 1.04


=================================================
Version: 0.10
Date:    2007-02-20
=================================================

The purpose of this project is the counter measure of the comment spam,
using CAPTCHA technique

This module is library for CAPTCHA.
CAPTCHA, Completely Automated Public Turing test to tell Computers and Humans Apart,
is one of technique for anti-spam.


* suported module *
- hack of xoops_comment of XOOPS Cube 2.0.16a JP
- hack of liaise 1.26
- hack of newbb  2.02
- wbelinks 1.40


* description *
adopted captcha_x for class lib
  http://www.phpclasses.org/browse/package/3023.html
adopted Standard 35 TrueType Fonts for fonts lib
  http://www.rops.org/download/std35ttf.zip


The view method of the Captcha form
-----
include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php';
$captcha_api =& captcha_api::getInstance();
$img_input = $captcha_api->make_img_input();
Show $img_input
------

The check method of the Captcha
-----
include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php';
$captcha_api =& captcha_api::getInstance();
if ( !$captcha_api->validate_post() ) {
  Error Process
}
-----


* install *
This module is adopting the style of the module,
but the actual state is program library.
It works even if you install this module, or not.
When installing this module, you can confirm to work a program normally in admin page.

(1) Like usual module, install this module under "modules" directory.
(2) Cpoy captcha.php under XOOPS_ROOT_PATH  directory.
cp XOOPS_ROOT_PATH/moduels/captcha.php XOOPS_ROOT_PATH

