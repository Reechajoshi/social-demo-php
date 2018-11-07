<?php /* Smarty version 2.6.14, created on 2012-03-03 03:47:15
         compiled from user_album_settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album.php'><?php echo $this->_tpl_vars['user_album_settings2']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album_settings.php'><?php echo $this->_tpl_vars['user_album_settings3']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'><?php echo $this->_tpl_vars['user_album_settings4']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/image48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_album_settings8']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_album_settings9']; ?>
</div>

<br>

<?php if ($this->_tpl_vars['result'] != ""): ?>
  <br>
  <table cellpadding='0' cellspacing='0'><tr><td class='result'>
    <div class='success'><img src='./images/success.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['user_album_settings1']; ?>
</div>
  </td></tr></table>
<?php endif; ?>

<br>

<form action='user_album_settings.php' method='post'>

<?php if ($this->_tpl_vars['user']->level_info['level_album_style'] == 1): ?>
  <div><b><?php echo $this->_tpl_vars['user_album_settings5']; ?>
</b></div>
  <div class='form_desc'><?php echo $this->_tpl_vars['user_album_settings6']; ?>
</div>
  <textarea name='style_album' rows='17' cols='50' style='width: 100%; font-family: courier, serif;'><?php echo $this->_tpl_vars['style_album']; ?>
</textarea>
  <br><br>
<?php endif; ?>


<?php if ($this->_tpl_vars['user']->level_info['level_media_comments'] !== '6'): ?>
  <div><b><?php echo $this->_tpl_vars['user_album_settings10']; ?>
</b></div>
  <div class='form_desc'><?php echo $this->_tpl_vars['user_album_settings11']; ?>
</div>
  <table cellpadding='0' cellspacing='0' class='editprofile_options'>
  <tr><td><input type='checkbox' value='1' id='mediacomment' name='usersetting_notify_mediacomment'<?php if ($this->_tpl_vars['user']->usersetting_info['usersetting_notify_mediacomment'] == 1): ?> CHECKED<?php endif; ?>></td><td><label for='mediacomment'><?php echo $this->_tpl_vars['user_album_settings12']; ?>
</label></td></tr>
  </table>
  <br>
<?php endif; ?>


<input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_album_settings7']; ?>
'>
<input type='hidden' name='task' value='dosave'>
</form>

</td></tr></table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>