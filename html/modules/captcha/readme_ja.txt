$Id: readme_ja.txt,v 1.2 2012/03/31 17:51:20 ohwada Exp $

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

1. PHP 5.3 �б�
(1) new ���֤��ͤ򻲾Ȥ��������뤳�Ȥϡ��侩����ʤ�


=================================================
Version: 0.14
Date:    2008-01-26
=================================================

1. �Х�����
(1) �����ե⡼�ɤˤơ�ʸ��������ɽ������ʤ�
http://linux.ohwada.jp/modules/newbb/viewtopic.php?topic_id=765&forum=11

(2) Assigning the return value of new by reference is deprecated


=================================================
Version: 0.13
Date:    2007-09-07
=================================================

1. �Х�����
(1) PHP 5.2.3 �ˤ�ʸ���β�����ɽ������ʤ�
http://dev.xoops.org/modules/xfmod/tracker/?func=detail&aid=4694&group_id=1392&atid=1726
http://linux.ohwada.jp/modules/newbb/viewtopic.php?viewmode=flat&topic_id=675&forum=11


=================================================
Version: 0.12
Date:    2007-06-09
=================================================

1. ¿����
(1) ���ܸ� UTF-8 �ե�������ɲä���


=================================================
Version: 0.11
Date:    2007-05-24
=================================================

���Υ⥸�塼��� CAPTCHA �Υ饤�֥��Ǥ���
CAPTCHA (Completely Automated Public Turing test to tell Computers and Humans Apart)
�ϥ����ȡ����ѥ��к���ˡ�Σ��ĤǤ���

�� �ѹ���
(1) �����Բ��̤ˤơ�captcha.php ��¸�ߤ��ǧ����
(2) �ɥ��ĸ�ե�������ɲä���

�� �б����Ƥ���⥸�塼��
- bluesbb 1.04 �ϥå���


=================================================
Version: 0.10
Date:    2007-02-20
=================================================

���Υ⥸�塼��� CAPTCHA �Υ饤�֥��Ǥ���
CAPTCHA (Completely Automated Public Turing test to tell Computers and Humans Apart)
�ϥ����ȡ����ѥ��к���ˡ�Σ��ĤǤ���


�� �б����Ƥ���⥸�塼��
- xoops_comment  �ϥå��� of XOOPS Cube 2.0.16a JP
- liaise 1.26 �ϥå���
- newbb  2.02 �ϥå���
- wbelinks 1.40


�� ����
CAPTCHA�Υ��饹�ˤ� captcha_x ����Ѥ���
  http://www.phpclasses.org/browse/package/3023.html
�ե���Ȥˤ� Standard 35 TrueType Fonts ����Ѥ���
  http://www.rops.org/download/std35ttf.zip


�����ե������ɽ����ˡ
-----
include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php';
$captcha_api =& captcha_api::getInstance();
$img_input = $captcha_api->make_img_input();
$img_input ��ɽ��
------

����ǧ�ڤΥ����å���ˡ
-----
include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php';
$captcha_api =& captcha_api::getInstance();
if ( !$captcha_api->validate_post() ) {
  ���顼����
}
-----


�� ���󥹥ȡ���
�⥸�塼��η��֤�ȤäƤ��ޤ��������֤ϥץ���ࡦ�饤�֥��Ǥ���
�⥸�塼�롦���󥹥ȡ���򤷤Ƥ⡢���ʤ��Ȥ�ư��ޤ���
���󥹥ȡ��뤷�����ϡ������Բ��̤ˤơ��ץ���ब�����ư��뤫��ǧ�Ǥ��ޤ���

(1) �̾�Υ⥸�塼���Ʊ�ͤˡ�modules �ǥ��쥯�ȥ�β������֤��롣
(2) captcha.php �� XOOPS_ROOT_PATH �β��˥��ԡ����롣
cp XOOPS_ROOT_PATH/moduels/captcha.php XOOPS_ROOT_PATH

