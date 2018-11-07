<?php /* Smarty version 2.6.14, created on 2012-03-03 02:41:46
         compiled from user_account_delete.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_account.php'><?php echo $this->_tpl_vars['user_account_delete1']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_account_pass.php'><?php echo $this->_tpl_vars['user_account_delete2']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_account_delete.php'><?php echo $this->_tpl_vars['user_account_delete3']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<img src='./images/icons/delete48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_account_delete4']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_account_delete5']; ?>
</div>

<br>

<table cellpadding='0' cellspacing='0'>
<tr>
<td>
  <form action='user_account_delete.php' method='POST'>
  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_account_delete6']; ?>
'>&nbsp;
  <input type='hidden' name='task' value='dodelete'>
  </form>
</td>
<td>
  <form action='user_account.php' method='POST'>
  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_account_delete7']; ?>
'>
  </form>
</td>
</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>