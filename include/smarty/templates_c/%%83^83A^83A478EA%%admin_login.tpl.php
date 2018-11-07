<?php /* Smarty version 2.6.14, created on 2012-03-19 15:50:09
         compiled from admin_login.tpl */ ?>
<html>
<head>
<title>ADMIN LOGIN PAGG</title>

</head>
<body>

<table height='100%' width='100%' cellpadding='0' cellspacing='0'>
<tr>
<td>

	<table cellpadding='0' cellspacing='0' align='center'>
	<tr>
	<td class='box'>
		<table cellpadding='0' cellspacing='0'>
		<form action='admin_login.php' name='login' method='POST'>
		<tr>
		  <td colspan="5" class='login'><div align="center">ADMINISTRATOR LOGIN PAGE</div></td>
		  </tr>
		<tr>
		<td class='login'><?php echo $this->_tpl_vars['admin_login4']; ?>
 &nbsp;</td>
		<td class='login'><input type='text' class='text' name='username' maxlength='50'> &nbsp;</td>
		<td class='login'><?php echo $this->_tpl_vars['admin_login5']; ?>
 &nbsp;</td>
		<td class='login'><input type='password' class='text' name='password' maxlength='50'> &nbsp;</td>
		<td class='login'><input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_login6']; ?>
'></td>
		</tr>
		<input type='hidden' name='task' value='dologin'>
		<NOSCRIPT><input type='hidden' name='javascript' value='no'></NOSCRIPT>
		</form>
		</table>
	<div class='error'><?php echo $this->_tpl_vars['error_message']; ?>
</div>
	</td>
	</tr>
	</table>
</td>
</tr>
</table>


<?php echo '


<script language="JavaScript">
<!--

function SymError() { return true; }
window.onerror = SymError;
var SymRealWinOpen = window.open;
function SymWinOpen(url, name, attributes) { return (new Object()); }
window.open = SymWinOpen;
appendEvent = function(el, evname, func) {
 if (el.attachEvent) { // IE
   el.attachEvent(\'on\' + evname, func);
 } else if (el.addEventListener) { // Gecko / W3C
   el.addEventListener(evname, func, true);
 } else {
   el[\'on\' + evname] = func;
 }
};
appendEvent(window, \'load\', windowonload);
function windowonload() { document.login.username.focus(); } 
// -->
</script>

</body>
</html>

'; ?>