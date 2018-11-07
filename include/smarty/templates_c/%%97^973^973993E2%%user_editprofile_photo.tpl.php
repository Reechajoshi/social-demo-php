<?php /* Smarty version 2.6.14, created on 2012-03-03 01:49:10
         compiled from user_editprofile_photo.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<?php unset($this->_sections['tab_loop']);
$this->_sections['tab_loop']['name'] = 'tab_loop';
$this->_sections['tab_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tab_loop']['show'] = true;
$this->_sections['tab_loop']['max'] = $this->_sections['tab_loop']['loop'];
$this->_sections['tab_loop']['step'] = 1;
$this->_sections['tab_loop']['start'] = $this->_sections['tab_loop']['step'] > 0 ? 0 : $this->_sections['tab_loop']['loop']-1;
if ($this->_sections['tab_loop']['show']) {
    $this->_sections['tab_loop']['total'] = $this->_sections['tab_loop']['loop'];
    if ($this->_sections['tab_loop']['total'] == 0)
        $this->_sections['tab_loop']['show'] = false;
} else
    $this->_sections['tab_loop']['total'] = 0;
if ($this->_sections['tab_loop']['show']):

            for ($this->_sections['tab_loop']['index'] = $this->_sections['tab_loop']['start'], $this->_sections['tab_loop']['iteration'] = 1;
                 $this->_sections['tab_loop']['iteration'] <= $this->_sections['tab_loop']['total'];
                 $this->_sections['tab_loop']['index'] += $this->_sections['tab_loop']['step'], $this->_sections['tab_loop']['iteration']++):
$this->_sections['tab_loop']['rownum'] = $this->_sections['tab_loop']['iteration'];
$this->_sections['tab_loop']['index_prev'] = $this->_sections['tab_loop']['index'] - $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['index_next'] = $this->_sections['tab_loop']['index'] + $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['first']      = ($this->_sections['tab_loop']['iteration'] == 1);
$this->_sections['tab_loop']['last']       = ($this->_sections['tab_loop']['iteration'] == $this->_sections['tab_loop']['total']);
?>
  <td class='tab2' NOWRAP><a href='user_editprofile.php?tab_id=<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_id']; ?>
'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_name']; ?>
</a><td class='tab'>&nbsp;</td></td>
<?php endfor; endif; ?>
<?php if ($this->_tpl_vars['user']->level_info['level_profile_status'] != 0): ?><td class='tab2' NOWRAP><a href='user_editprofile_status.php'><?php echo $this->_tpl_vars['user_editprofile_photo6']; ?>
</a></td><td class='tab'>&nbsp;</td><?php endif; ?>
<?php if ($this->_tpl_vars['user']->level_info['level_photo_allow'] != 0): ?><td class='tab1' NOWRAP><a href='user_editprofile_photo.php'><?php echo $this->_tpl_vars['user_editprofile_photo7']; ?>
</a></td><td class='tab'>&nbsp;</td><?php endif; ?>
<td class='tab2' NOWRAP><a href='user_editprofile_comments.php'><?php echo $this->_tpl_vars['user_editprofile_photo9']; ?>
</td><td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_editprofile_settings.php'><?php echo $this->_tpl_vars['user_editprofile_photo10']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<img src='./images/icons/editprofile48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_editprofile_photo11']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_editprofile_photo12']; ?>
</div>

<br>

<?php if ($this->_tpl_vars['is_error'] != 0): ?>
  <br>
  <div class='center'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='result'><div class='error'><img src='./images/error.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['error_message']; ?>
</div></td>
  </tr>
  </table>
  </div>
<?php endif; ?>

<br>

<table cellpadding='0' cellspacing='0'>
<tr>
<td class='editprofile_photoleft'>
  <?php echo $this->_tpl_vars['user_editprofile_photo16']; ?>
<br>
  <table cellpadding='0' cellspacing='0' width='202'>
  <tr><td class='editprofile_photo'><img src='<?php echo $this->_tpl_vars['user']->user_photo("./images/nophoto.gif"); ?>
' border='0'></td></tr>
  </table>
    <?php if ($this->_tpl_vars['user']->user_photo() != ""): ?>[ <a href='user_editprofile_photo.php?task=remove'><?php echo $this->_tpl_vars['user_editprofile_photo13']; ?>
</a> ]<?php endif; ?>
</td>
<td class='editprofile_photoright'>
  <form action='user_editprofile_photo.php' method='POST' enctype='multipart/form-data'>
  <?php echo $this->_tpl_vars['user_editprofile_photo17']; ?>
<br><input type='file' class='text' name='photo' size='30'>
  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_editprofile_photo14']; ?>
'>
  <input type='hidden' name='task' value='upload'>
  <input type='hidden' name='MAX_FILE_SIZE' value='5000000'>
  </form>
  <div><?php echo $this->_tpl_vars['user_editprofile_photo15']; ?>
 <?php echo $this->_tpl_vars['user']->level_info['level_photo_exts']; ?>
</div>
</td>
</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>