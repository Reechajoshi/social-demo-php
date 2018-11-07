<?php /* Smarty version 2.6.14, created on 2012-03-03 01:39:30
         compiled from admin_banning.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_banning1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_banning2']; ?>


<br><br>

<?php if ($this->_tpl_vars['result'] != 0): ?>
<div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['admin_banning16']; ?>
</div>
<?php endif; ?>

<table cellpadding='0' cellspacing='0' width='600'>
<form action='admin_banning.php' method='POST'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_banning3']; ?>
</td>
</tr>
<td class='setting1'>
<?php echo $this->_tpl_vars['admin_banning4']; ?>

<br><br>
<textarea name='banned_ips' rows='3' cols='40' class='text' style='width: 100%;'><?php echo $this->_tpl_vars['setting_banned_ips']; ?>
</textarea>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_banning5']; ?>
</td>
</tr>
<td class='setting1'>
<?php echo $this->_tpl_vars['admin_banning6']; ?>

<br><br>
<textarea name='banned_emails' rows='3' cols='40' class='text' style='width: 100%;'><?php echo $this->_tpl_vars['setting_banned_emails']; ?>
</textarea>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_banning7']; ?>
</td>
</tr>
<td class='setting1'>
<?php echo $this->_tpl_vars['admin_banning8']; ?>

<br><br>
<textarea name='banned_usernames' rows='3' cols='40' class='text' style='width: 100%;'><?php echo $this->_tpl_vars['setting_banned_usernames']; ?>
</textarea>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_banning9']; ?>
</td>
</tr>
<td class='setting1'>
<?php echo $this->_tpl_vars['admin_banning10']; ?>

<br><br>
<textarea name='banned_words' rows='3' cols='40' class='text' style='width: 100%;'><?php echo $this->_tpl_vars['setting_banned_words']; ?>
</textarea>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_banning11']; ?>
</td>
</tr>
<td class='setting1'>
<?php echo $this->_tpl_vars['admin_banning12']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='comment_code' id='comment_code_1' value='1'<?php if ($this->_tpl_vars['setting_comment_code'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='comment_code_1'><?php echo $this->_tpl_vars['admin_banning13']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='comment_code' id='comment_code_0' value='0'<?php if ($this->_tpl_vars['setting_comment_code'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='comment_code_0'><?php echo $this->_tpl_vars['admin_banning14']; ?>
</label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_banning17']; ?>
</td>
</tr>
<td class='setting1'>
<?php echo $this->_tpl_vars['admin_banning18']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='invite_code' id='invite_code_1' value='1'<?php if ($this->_tpl_vars['setting_invite_code'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_code_1'><?php echo $this->_tpl_vars['admin_banning19']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='invite_code' id='invite_code_0' value='0'<?php if ($this->_tpl_vars['setting_invite_code'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_code_0'><?php echo $this->_tpl_vars['admin_banning20']; ?>
</label></td></tr>
  </table>
</td></tr></table>

<br>

<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_banning15']; ?>
'>
<input type='hidden' name='task' value='dosave'>

</form>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>