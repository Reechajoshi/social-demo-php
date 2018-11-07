<?php /* Smarty version 2.6.14, created on 2012-03-03 02:08:09
         compiled from user_editprofile_status.tpl */ ?>
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
</a></td><td class='tab'>&nbsp;</td>
<?php endfor; endif; ?>
<?php if ($this->_tpl_vars['user']->level_info['level_profile_status'] != 0): ?><td class='tab1' NOWRAP><a href='user_editprofile_status.php'><?php echo $this->_tpl_vars['user_editprofile_status2']; ?>
</a></td><td class='tab'>&nbsp;</td><?php endif; ?>
<?php if ($this->_tpl_vars['user']->level_info['level_photo_allow'] != 0): ?><td class='tab2' NOWRAP><a href='user_editprofile_photo.php'><?php echo $this->_tpl_vars['user_editprofile_status3']; ?>
</a></td><td class='tab'>&nbsp;</td><?php endif; ?>
<td class='tab2' NOWRAP><a href='user_editprofile_comments.php'><?php echo $this->_tpl_vars['user_editprofile_status5']; ?>
</td><td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_editprofile_settings.php'><?php echo $this->_tpl_vars['user_editprofile_status6']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<img src='./images/icons/editprofile48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_editprofile_status7']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_editprofile_status8']; ?>
</div>

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <br>
  <table cellpadding='0' cellspacing='0'><tr><td class='result'>
  <div class='success'><img src='./images/success.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['user_editprofile_status1']; ?>
</div>
  </td></tr></table>
<?php endif; ?>

<br><br>



<div class='center'>

<center>
<div style='width: 500px; padding: 10px; background: #FFFFFF; border: 1px solid #CCCCCC;'>
  <form action='user_editprofile_status.php' method='POST'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><img src='./images/icons/status16.gif' border='0' class='icon'>&nbsp;</td>
  <td><b><?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
 <?php echo $this->_tpl_vars['user_editprofile_status10']; ?>
</b></td>
  <td>&nbsp;<input type='text' class='text' name='status_new' size='50' maxlength='100' value='<?php echo $this->_tpl_vars['user']->user_info['user_status']; ?>
'></td>
  <td>&nbsp;<input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_editprofile_status9']; ?>
'></td>
  </tr>
  </table>
  <input type='hidden' name='task' value='dosave'>
  <input type='hidden' name='return_url' value='<?php echo $this->_tpl_vars['return_url']; ?>
'>
  </form>
</div>
</center>

<br>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>