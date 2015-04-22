<?php
/*******************************************************************************
*  Title: Help Desk Software HESK
*  Version: 2.2 from 9th June 2010
*  Author: Klemen Stirn
*  Website: http://www.hesk.com
********************************************************************************
*  COPYRIGHT AND TRADEMARK NOTICE
*  Copyright 2005-2010 Klemen Stirn. All Rights Reserved.
*  HESK is a registered trademark of Klemen Stirn.

*  The HESK may be used and modified free of charge by anyone
*  AS LONG AS COPYRIGHT NOTICES AND ALL THE COMMENTS REMAIN INTACT.
*  By using this code you agree to indemnify Klemen Stirn from any
*  liability that might arise from it's use.

*  Selling the code for this program, in part or full, without prior
*  written consent is expressly forbidden.

*  Using this code, in part or full, to create derivate work,
*  new scripts or products is expressly forbidden. Obtain permission
*  before redistributing this software over the Internet or in
*  any other medium. In all cases copyright and header must remain intact.
*  This Copyright is in full effect in any country that has International
*  Trade Agreements with the United States of America or
*  with the European Union.

*  Removing any of the copyright notices without purchasing a license
*  is expressly forbidden. To remove HESK copyright notice you must purchase
*  a license for this script. For more information on how to obtain
*  a license please visit the page below:
*  https://www.hesk.com/buy.php
*******************************************************************************/

define('IN_SCRIPT',1);
define('INSTALL',1);
define('HESK_NEW_VERSION','2.2');
define('HESK_PATH','../');

/* Get all the required files and functions */
require(HESK_PATH . 'hesk_settings.inc.php');
$hesk_settings['language']='English';
$hesk_settings['languages']=array('English' => array('folder'=>'en'));
require(HESK_PATH . 'inc/common.inc.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Install Hesk <?php echo HESK_NEW_VERSION; ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
	<link href="../hesk_style.css" type="text/css" rel="stylesheet" />
	<script language="Javascript" type="text/javascript" src="../hesk_javascript.js"></script>
    </head>
<body>


<div align="center">
<table border="0" cellspacing="0" cellpadding="5" class="enclosing">
<tr>
<td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td width="3"><img src="../img/headerleftsm.jpg" width="3" height="25" alt="" /></td>
	<td class="headersm">HESK <?php echo HESK_NEW_VERSION; ?> installation script</td>
	<td width="3"><img src="../img/headerrightsm.jpg" width="3" height="25" alt="" /></td>
	</tr>
	</table>

	</td>
	</tr>
	<tr>
	<td>

	<br />

    <div align="center">
	<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="7" height="7"><img src="../img/roundcornerslt.jpg" width="7" height="7" alt="" /></td>
		<td class="roundcornerstop"></td>
		<td><img src="../img/roundcornersrt.jpg" width="7" height="7" alt="" /></td>
	</tr>
	<tr>
		<td class="roundcornersleft">&nbsp;</td>
		<td>


<h3 style="text-align:center">Welcome to Hesk!</h3>

<p>Thank you for downloading the Hesk help desk script! This tool will help you install and configure Hesk on your server.</p>

<p><font color="#FF0000">PLEASE MAKE SURE YOU READ INSTRUCTIONS IN THE README.HTM FILE
<b>BEFORE</b> RUNNING THIS INSTALLATION SCRIPT ANY FURTHER!</font></p>


<hr />

<form method="get" action="install.php">
<p align="center"><input type="submit" value="New install" class="orangebutton" onmouseover="hesk_btn(this,'orangebuttonover');" onmouseout="hesk_btn(this,'orangebutton');" /></p>
<p align="center">Installs a new copy of Hesk on your server</p>
</form>

<hr />

<form method="get" action="update.php">
<p align="center"><input type="submit" value="Update existing install" class="orangebutton" onmouseover="hesk_btn(this,'orangebuttonover');" onmouseout="hesk_btn(this,'orangebutton');" /></p>
<p align="center">Updates your existing Hesk to version <?php echo HESK_NEW_VERSION; ?></p>
</form>

		</td>
		<td class="roundcornersright">&nbsp;</td>
	</tr>
	<tr>
		<td><img src="../img/roundcornerslb.jpg" width="7" height="7" alt="" /></td>
		<td class="roundcornersbottom"></td>
		<td width="7" height="7"><img src="../img/roundcornersrb.jpg" width="7" height="7" alt="" /></td>
	</tr>
	</table>
    </div>

	<p style="text-align:center"><span class="smaller">Powered by <a href="http://www.hesk.com" class="smaller" target="_blank">Help Desk Software</a> HESK<sup>TM</sup></span></p></td></tr></table></div></body></html>

