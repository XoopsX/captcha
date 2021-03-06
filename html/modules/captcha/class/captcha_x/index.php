<?php
// $Id: index.php,v 1.2 2012/03/31 17:51:20 ohwada Exp $

//=========================================================
// Captcha Module
// 2012-03-31 K.OHWADA
//=========================================================

//---------------------------------------------------------
// 2012-03-31 K.OHWADA
// Assigning the return value of new by reference is now deprecated.
//---------------------------------------------------------

session_start ();

?>
<form id="form_bbs" method="POST" action="./">
    <h3>Validate:</h3>
    <table id="tbl_form_bbs">
        <tr>
            <td>
<!--  
The use of the Math.random() method is necessary if you wish the onclick requst 
to be working under mozilla. 
-->
                <img src="server.php" 
                    onclick="javasript:this.src='server.php?'+Math.random();" 
                    alt="CAPTCHA image">
            </td>
            <td><input maxlength="4" size="4" name="captcha" type="text" /></td>
        </tr>
    </table>
    <input type="reset" />&nbsp;<input type="submit" />
    <input type="hidden" name="validate" value="1" />
</form> 

<?php

if ( ! $_POST['validate']) {
    die;
}

require_once ( './class.captcha_x.php');

// Assigning the return value of new by reference is now deprecated.
// $captcha = &new captcha_x ();
$captcha = new captcha_x ();

if ( ! $captcha->validate ( $_POST['captcha'])) {
    echo '<p>You\'re bot.</p>';
} else {
    echo '<p>You\'re human.</p>';
}

?>
