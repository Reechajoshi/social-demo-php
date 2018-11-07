<?php /* Smarty version 2.6.14, created on 2012-03-03 01:43:45
         compiled from admin_lostpass.tpl */ ?>
<html>
<head>
<title><?php echo $this->_tpl_vars['admin_lostpass1']; ?>
</title>

<?php echo '
<style type=\'text/css\'>
body {
	color: #666666;
	text-align: center;
	background-color: #EEEEEE;
}
td { 
	font-family: "Trebuchet MS", tahoma, verdana, serif;
	font-size: 9pt;
}
td.box {
	border: 1px dashed #AAAAAA;
	padding: 15px;
	background: #FFFFFF;
	font-family: "Trebuchet MS", tahoma, verdana, serif;
	font-size: 9pt;
}
td.login {
	font-family: "Trebuchet MS", tahoma, verdana, serif;
	font-size: 9pt;
}
input.text {
	font-family: arial, tahoma, verdana, serif;
	font-size: 9pt; 
}
div.error {
	text-align: center;
	padding-top: 3px;
	font-weight: bold;
}
input.button {
	font-family: arial, tahoma, verdana, serif;
	font-size: 9pt;
	background: #DDDDDD;
	padding: 2px;
	font-weight: bold;
}
div.page_header {
	font-size: 14pt;
}
td.success {
	font-weight: bold;
	padding: 7px 8px 7px 7px;
	background: #f3fff3; 
}
td.error {
	font-weight: bold;
	color: #FF0000;
	padding: 7px 8px 7px 7px;
	background: #FFF3F3;
}
img.icon {
	vertical-align: middle;
	margin-right: 4px;
}
a:link { color: #336699; }
a:visited { color: #336699; }
a:hover { color: #336699; }
</style>
'; ?>


</head>
<body>

<table height='100%' width='100%' cellpadding='0' cellspacing='0'>
<tr>
<td>

  <table cellpadding='0' cellspacing='0' align='center' width='600'>
  <tr>
  <td class='box'>

    <div class='page_header'><?php echo $this->_tpl_vars['admin_lostpass1']; ?>
</div>
    <?php echo $this->_tpl_vars['admin_lostpass2']; ?>

    <br><br>

            <?php if ($this->_tpl_vars['submitted'] == 1 && $this->_tpl_vars['is_error'] == 0): ?>

      <table cellpadding='0' cellspacing='0'>
      <tr><td class='success'>
        <?php echo $this->_tpl_vars['admin_lostpass3']; ?>

      </td></tr></table>
      <br>

    <?php else: ?>

      <?php if ($this->_tpl_vars['is_error'] == 1): ?>
        <table cellpadding='0' cellspacing='0'>
        <tr><td class='error'>
          <img src='../images/error.gif' border='0' class='icon'><?php echo $this->_tpl_vars['admin_lostpass4']; ?>

        </td></tr></table>
      <br>
      <?php endif; ?>
 
      <form action='admin_lostpass.php' method='post'>
      <table cellpadding='0' cellspacing='0' align='center'>
      <tr>
      <td><?php echo $this->_tpl_vars['admin_lostpass5']; ?>
&nbsp;</td>
      <td><input type='text' class='text' name='admin_email' maxlength='70' size='40'></td>
      </tr>
      <tr>
      <td>&nbsp;</td>
      <td>
        <table cellpadding='0' cellspacing='0' style='margin-top: 5px;'>
        <td valign='top'>
          <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_lostpass6']; ?>
'>&nbsp;
          <input type='hidden' name='task' value='send_email'>
          </form>
        </td>
        <td valign='top'>
          <form action='admin_login.php' method='post'>
          <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_lostpass7']; ?>
'>
          </form>
        </td>
        </tr>
        </table>
      </td>
      </tr>
      </table>

    <?php endif; ?>

  </td>
  </tr>
  </table>
</td>
</tr>
</table>

</body>
</html>