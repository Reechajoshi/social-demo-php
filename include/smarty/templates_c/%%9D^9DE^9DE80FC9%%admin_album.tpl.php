<?php /* Smarty version 2.6.14, created on 2012-03-03 02:14:09
         compiled from admin_album.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_album1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_album2']; ?>


<br><br>

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['admin_album3']; ?>
</div>
<?php endif; ?>

<form action='admin_album.php' method='POST'>


<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'><?php echo $this->_tpl_vars['admin_album10']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_album11']; ?>

</td>
</tr>
<tr>
<td class='setting2'>
  <table cellpadding='2' cellspacing='0'>
  <tr>
  <td><input type='radio' name='setting_permission_album' id='permission_album_1' value='1'<?php if ($this->_tpl_vars['permission_album'] == 1): ?> CHECKED<?php endif; ?>></td>
  <td><label for='permission_album_1'><?php echo $this->_tpl_vars['admin_album13']; ?>
</label></td>
  </tr>
  <tr>
  <td><input type='radio' name='setting_permission_album' id='permission_album_0' value='0'<?php if ($this->_tpl_vars['permission_album'] == 0): ?> CHECKED<?php endif; ?>></td>
  <td><label for='permission_album_0'><?php echo $this->_tpl_vars['admin_album14']; ?>
</label></td>
  </tr>
  </table>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_album6']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_album7']; ?>

</td>
</tr>
<tr>
<td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td width='80'><?php echo $this->_tpl_vars['admin_album4']; ?>
</td>
  <td><input type='text' class='text' size='30' name='setting_email_mediacomment_subject' value='<?php echo $this->_tpl_vars['setting_email_mediacomment_subject']; ?>
' maxlength='200'></td>
  </tr><tr>
  <td valign='top'><?php echo $this->_tpl_vars['admin_album5']; ?>
</td>
  <td><textarea rows='6' cols='80' class='text' name='setting_email_mediacomment_message'><?php echo $this->_tpl_vars['setting_email_mediacomment_message']; ?>
</textarea><br><?php echo $this->_tpl_vars['admin_album8']; ?>
</td>
  </tr>
  </table>
</td>
</tr>
</table>

<br>

<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_album9']; ?>
'>
<input type='hidden' name='task' value='dosave'>
</form>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>