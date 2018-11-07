<?php /* Smarty version 2.6.14, created on 2012-03-13 05:38:20
         compiled from admin_viewadmins_add.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_viewadmins_add1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_viewadmins_add2']; ?>


<br><br>

<div class='error'><?php echo $this->_tpl_vars['error_message']; ?>
</div>

<table cellpadding='0' cellspacing='0'>
<form action='admin_viewadmins_add.php' method='POST'>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['admin_viewadmins_add3']; ?>
</td>
<td class='form2'><input type='text' class='text' name='admin_username' value='<?php echo $this->_tpl_vars['admin_username']; ?>
' maxlength='50'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['admin_viewadmins_add4']; ?>
</td>
<td class='form2'><input type='password' class='text' name='admin_password' maxlength='50'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['admin_viewadmins_add5']; ?>
</td>
<td class='form2'><input type='password' class='text' name='admin_password_confirm' maxlength='50'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['admin_viewadmins_add6']; ?>
</td>
<td class='form2'><input type='text' class='text' name='admin_name' value='<?php echo $this->_tpl_vars['admin_name']; ?>
' maxlength='50'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['admin_viewadmins_add7']; ?>
</td>
<td class='form2'><input type='text' class='text' name='admin_email' value='<?php echo $this->_tpl_vars['admin_email']; ?>
' maxlength='70'></td>
</tr>
<tr>
<td>&nbsp;</td>
<td class='form2'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_viewadmins_add8']; ?>
'>&nbsp;</td>
  <input type='hidden' name='task' value='addadmin'>
  </form>
  <form action='admin_viewadmins_add.php' method='POST'>
  <td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_viewadmins_add9']; ?>
'></td>
  <input type='hidden' name='task' value='cancel'>
  </form>
</td>
</tr>
</table>

<br>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>