<?php /* Smarty version 2.6.14, created on 2012-03-03 01:48:53
         compiled from user_account_pass.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_account.php'><?php echo $this->_tpl_vars['user_account_pass7']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_account_pass.php'><?php echo $this->_tpl_vars['user_account_pass8']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_account_delete.php'><?php echo $this->_tpl_vars['user_account_pass9']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<img src='./images/icons/privacy48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_account_pass10']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_account_pass11']; ?>
</div>

<br>

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <div class='success'><img src='./images/success.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['user_account_pass6']; ?>
</div><br>
<?php elseif ($this->_tpl_vars['is_error'] != 0): ?>
  <div class='error'><img src='./images/error.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['error_message']; ?>
</div><br>
<?php endif; ?>

<form action='user_account_pass.php' method='POST'>
<table cellpadding='0' cellspacing='0'>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['user_account_pass12']; ?>
</td>
<td class='form2'><input type='password' name='password_old' class='text' size='30' maxlength='50'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['user_account_pass13']; ?>
</td>
<td class='form2'><input type='password' name='password_new' class='text' size='30' maxlength='50'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['user_account_pass14']; ?>
</td>
<td class='form2'><input type='password' name='password_new2' class='text' size='30' maxlength='50'></td>
</tr>
<tr>
<td class='form1'>&nbsp;</td>
<td class='form2'><input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_account_pass15']; ?>
'></td>
</tr>
</table>
<input type='hidden' name='task' value='dosave'>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>