<?php /* Smarty version 2.6.14, created on 2012-03-03 03:46:27
         compiled from user_friends_settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_friends.php'><?php echo $this->_tpl_vars['user_friends_settings1']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_friends_requests.php'><?php echo $this->_tpl_vars['user_friends_settings2']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_friends_requests_outgoing.php'><?php echo $this->_tpl_vars['user_friends_settings11']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_friends_settings.php'><?php echo $this->_tpl_vars['user_friends_settings3']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<img src='./images/icons/friends48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_friends_settings4']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_friends_settings5']; ?>
</div>

<br>

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <table cellpadding='0' cellspacing='0'><tr><td class='result'>
  <div class='success'><img src='./images/success.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['user_friends_settings6']; ?>
</div>
  </td></tr></table>
<?php endif; ?>

<br>

<form action='user_friends_settings.php' method='POST'>

<div><b><?php echo $this->_tpl_vars['user_friends_settings7']; ?>
</b></div>
<div class='form_desc'><?php echo $this->_tpl_vars['user_friends_settings8']; ?>
</div>
<table cellpadding='0' cellspacing='0'>
<tr><td><input type='checkbox' value='1' id='friendrequest' name='usersetting_notify_friendrequest'<?php if ($this->_tpl_vars['user']->usersetting_info['usersetting_notify_friendrequest'] == 1): ?> CHECKED<?php endif; ?>></td><td><label for='friendrequest'><?php echo $this->_tpl_vars['user_friends_settings9']; ?>
</label></td></tr>
</table>
<br>

<input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_friends_settings10']; ?>
'>
<input type='hidden' name='task' value='dosave'>
</form>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>