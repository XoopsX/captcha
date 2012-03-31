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

1. PHP 5.3 対応
(1) new の返り値を参照で代入することは、推奨されない


=================================================
Version: 0.14
Date:    2008-01-26
=================================================

1. バグ修正
(1) セーフモードにて、文字画像が表示されない
http://linux.ohwada.jp/modules/newbb/viewtopic.php?topic_id=765&forum=11

(2) Assigning the return value of new by reference is deprecated


=================================================
Version: 0.13
Date:    2007-09-07
=================================================

1. バグ修正
(1) PHP 5.2.3 にて文字の画像が表示されない
http://dev.xoops.org/modules/xfmod/tracker/?func=detail&aid=4694&group_id=1392&atid=1726
http://linux.ohwada.jp/modules/newbb/viewtopic.php?viewmode=flat&topic_id=675&forum=11


=================================================
Version: 0.12
Date:    2007-06-09
=================================================

1. 多言語
(1) 日本語 UTF-8 ファイルを追加した


=================================================
Version: 0.11
Date:    2007-05-24
=================================================

このモジュールは CAPTCHA のライブラリです。
CAPTCHA (Completely Automated Public Turing test to tell Computers and Humans Apart)
はコメント・スパム対策手法の１つです。

● 変更点
(1) 管理者画面にて、captcha.php の存在を確認した
(2) ドイツ語ファイルを追加した

● 対応しているモジュール
- bluesbb 1.04 ハック版


=================================================
Version: 0.10
Date:    2007-02-20
=================================================

このモジュールは CAPTCHA のライブラリです。
CAPTCHA (Completely Automated Public Turing test to tell Computers and Humans Apart)
はコメント・スパム対策手法の１つです。


● 対応しているモジュール
- xoops_comment  ハック版 of XOOPS Cube 2.0.16a JP
- liaise 1.26 ハック版
- newbb  2.02 ハック版
- wbelinks 1.40


● 説明
CAPTCHAのクラスには captcha_x を採用した
  http://www.phpclasses.org/browse/package/3023.html
フォントには Standard 35 TrueType Fonts を採用した
  http://www.rops.org/download/std35ttf.zip


画像フォームの表示方法
-----
include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php';
$captcha_api =& captcha_api::getInstance();
$img_input = $captcha_api->make_img_input();
$img_input を表示
------

画像認証のチェック方法
-----
include_once XOOPS_ROOT_PATH.'/modules/captcha/include/api.php';
$captcha_api =& captcha_api::getInstance();
if ( !$captcha_api->validate_post() ) {
  エラー処理
}
-----


● インストール
モジュールの形態をとっていますが、実態はプログラム・ライブラリです。
モジュール・インストールをしても、しなくとも動作します。
インストールした場合は、管理者画面にて、プログラムが正常に動作するか確認できます。

(1) 通常のモジュールと同様に、modules ディレクトリの下に設置する。
(2) captcha.php を XOOPS_ROOT_PATH の下にコピーする。
cp XOOPS_ROOT_PATH/moduels/captcha.php XOOPS_ROOT_PATH

