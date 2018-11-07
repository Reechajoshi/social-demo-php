<?php /* Smarty version 2.6.14, created on 2012-03-03 01:39:48
         compiled from admin_invite.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_invite1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_invite2']; ?>


<br><br>

<?php if ($this->_tpl_vars['result'] != 0): ?>
<div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['admin_invite6']; ?>
</div>
<?php endif; ?>

<table cellpadding='0' cellspacing='0' width='600'>
<form action='admin_invite.php' method='POST'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_invite3']; ?>
</td>
</tr>
<td class='setting1'>
<?php echo $this->_tpl_vars['admin_invite4']; ?>

<br><br>
<textarea name='invite_emails' rows='3' cols='40' class='text' style='width: 100%;'></textarea>
</td>
</tr>
</table>

<br>

<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_invite5']; ?>
'>
<input type='hidden' name='task' value='doinvite'>

</form>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>