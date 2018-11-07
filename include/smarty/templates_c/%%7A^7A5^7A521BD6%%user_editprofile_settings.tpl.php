<?php /* Smarty version 2.6.14, created on 2012-03-13 06:10:42
         compiled from user_editprofile_settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'user_editprofile_settings.tpl', 42, false),)), $this); ?>
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
<?php if ($this->_tpl_vars['user']->level_info['level_profile_status'] != 0): ?><td class='tab2' NOWRAP><a href='user_editprofile_status.php'><?php echo $this->_tpl_vars['user_editprofile_settings2']; ?>
</a></td><td class='tab'>&nbsp;</td><?php endif; ?>
<?php if ($this->_tpl_vars['user']->level_info['level_photo_allow'] != 0): ?><td class='tab2' NOWRAP><a href='user_editprofile_photo.php'><?php echo $this->_tpl_vars['user_editprofile_settings3']; ?>
</a></td><td class='tab'>&nbsp;</td><?php endif; ?>
<td class='tab2' NOWRAP><a href='user_editprofile_comments.php'><?php echo $this->_tpl_vars['user_editprofile_settings5']; ?>
</td><td class='tab'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_editprofile_settings.php'><?php echo $this->_tpl_vars['user_editprofile_settings6']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<img src='./images/icons/editprofile48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_editprofile_settings7']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_editprofile_settings8']; ?>
</div>

<br>

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <table cellpadding='0' cellspacing='0'><tr><td class='result'>
  <div class='success'><img src='./images/success.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['user_editprofile_settings1']; ?>
</div>
  </td></tr></table>
<?php endif; ?>

<br>

<form action='user_editprofile_settings.php' method='POST'>

<?php if ($this->_tpl_vars['user']->level_info['level_profile_style'] == 1): ?>
  <div><b><?php echo $this->_tpl_vars['user_editprofile_settings10']; ?>
</b></div>
  <div class='form_desc'><?php echo $this->_tpl_vars['user_editprofile_settings11']; ?>
</div>
  <textarea name='style_profile' rows='17' cols='50' style='width: 100%; font-family: courier, serif;'><?php echo $this->_tpl_vars['style_profile']; ?>
</textarea>
  <br><br>
<?php endif; ?>


<?php if (count($this->_tpl_vars['privacy_profile_options']) > 1): ?>
  <div><b><?php echo $this->_tpl_vars['user_editprofile_settings12']; ?>
</b></div>
  <div class='form_desc'><?php echo $this->_tpl_vars['user_editprofile_settings13']; ?>
</div>
  <table cellpadding='0' cellspacing='0' class='editprofile_options'>
    <?php unset($this->_sections['privacy_profile_loop']);
$this->_sections['privacy_profile_loop']['name'] = 'privacy_profile_loop';
$this->_sections['privacy_profile_loop']['loop'] = is_array($_loop=$this->_tpl_vars['privacy_profile_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['privacy_profile_loop']['show'] = true;
$this->_sections['privacy_profile_loop']['max'] = $this->_sections['privacy_profile_loop']['loop'];
$this->_sections['privacy_profile_loop']['step'] = 1;
$this->_sections['privacy_profile_loop']['start'] = $this->_sections['privacy_profile_loop']['step'] > 0 ? 0 : $this->_sections['privacy_profile_loop']['loop']-1;
if ($this->_sections['privacy_profile_loop']['show']) {
    $this->_sections['privacy_profile_loop']['total'] = $this->_sections['privacy_profile_loop']['loop'];
    if ($this->_sections['privacy_profile_loop']['total'] == 0)
        $this->_sections['privacy_profile_loop']['show'] = false;
} else
    $this->_sections['privacy_profile_loop']['total'] = 0;
if ($this->_sections['privacy_profile_loop']['show']):

            for ($this->_sections['privacy_profile_loop']['index'] = $this->_sections['privacy_profile_loop']['start'], $this->_sections['privacy_profile_loop']['iteration'] = 1;
                 $this->_sections['privacy_profile_loop']['iteration'] <= $this->_sections['privacy_profile_loop']['total'];
                 $this->_sections['privacy_profile_loop']['index'] += $this->_sections['privacy_profile_loop']['step'], $this->_sections['privacy_profile_loop']['iteration']++):
$this->_sections['privacy_profile_loop']['rownum'] = $this->_sections['privacy_profile_loop']['iteration'];
$this->_sections['privacy_profile_loop']['index_prev'] = $this->_sections['privacy_profile_loop']['index'] - $this->_sections['privacy_profile_loop']['step'];
$this->_sections['privacy_profile_loop']['index_next'] = $this->_sections['privacy_profile_loop']['index'] + $this->_sections['privacy_profile_loop']['step'];
$this->_sections['privacy_profile_loop']['first']      = ($this->_sections['privacy_profile_loop']['iteration'] == 1);
$this->_sections['privacy_profile_loop']['last']       = ($this->_sections['privacy_profile_loop']['iteration'] == $this->_sections['privacy_profile_loop']['total']);
?>
    <tr><td><input type='radio' name='privacy_profile' id='<?php echo $this->_tpl_vars['privacy_profile_options'][$this->_sections['privacy_profile_loop']['index']]['privacy_id']; ?>
' value='<?php echo $this->_tpl_vars['privacy_profile_options'][$this->_sections['privacy_profile_loop']['index']]['privacy_value']; ?>
'<?php if ($this->_tpl_vars['privacy_profile'] == $this->_tpl_vars['privacy_profile_options'][$this->_sections['privacy_profile_loop']['index']]['privacy_value']): ?> CHECKED<?php endif; ?>></td><td><label for='<?php echo $this->_tpl_vars['privacy_profile_options'][$this->_sections['privacy_profile_loop']['index']]['privacy_id']; ?>
'><?php echo $this->_tpl_vars['privacy_profile_options'][$this->_sections['privacy_profile_loop']['index']]['privacy_option']; ?>
</label></td></tr>
  <?php endfor; endif; ?>
  </table>
  <br>
<?php endif; ?>

<?php if (count($this->_tpl_vars['comments_profile_options']) > 1): ?>
  <div><b><?php echo $this->_tpl_vars['user_editprofile_settings14']; ?>
</b></div>
  <div class='form_desc'><?php echo $this->_tpl_vars['user_editprofile_settings15']; ?>
</div>
  <table cellpadding='0' cellspacing='0' class='editprofile_options'>
    <?php unset($this->_sections['comments_profile_loop']);
$this->_sections['comments_profile_loop']['name'] = 'comments_profile_loop';
$this->_sections['comments_profile_loop']['loop'] = is_array($_loop=$this->_tpl_vars['comments_profile_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['comments_profile_loop']['show'] = true;
$this->_sections['comments_profile_loop']['max'] = $this->_sections['comments_profile_loop']['loop'];
$this->_sections['comments_profile_loop']['step'] = 1;
$this->_sections['comments_profile_loop']['start'] = $this->_sections['comments_profile_loop']['step'] > 0 ? 0 : $this->_sections['comments_profile_loop']['loop']-1;
if ($this->_sections['comments_profile_loop']['show']) {
    $this->_sections['comments_profile_loop']['total'] = $this->_sections['comments_profile_loop']['loop'];
    if ($this->_sections['comments_profile_loop']['total'] == 0)
        $this->_sections['comments_profile_loop']['show'] = false;
} else
    $this->_sections['comments_profile_loop']['total'] = 0;
if ($this->_sections['comments_profile_loop']['show']):

            for ($this->_sections['comments_profile_loop']['index'] = $this->_sections['comments_profile_loop']['start'], $this->_sections['comments_profile_loop']['iteration'] = 1;
                 $this->_sections['comments_profile_loop']['iteration'] <= $this->_sections['comments_profile_loop']['total'];
                 $this->_sections['comments_profile_loop']['index'] += $this->_sections['comments_profile_loop']['step'], $this->_sections['comments_profile_loop']['iteration']++):
$this->_sections['comments_profile_loop']['rownum'] = $this->_sections['comments_profile_loop']['iteration'];
$this->_sections['comments_profile_loop']['index_prev'] = $this->_sections['comments_profile_loop']['index'] - $this->_sections['comments_profile_loop']['step'];
$this->_sections['comments_profile_loop']['index_next'] = $this->_sections['comments_profile_loop']['index'] + $this->_sections['comments_profile_loop']['step'];
$this->_sections['comments_profile_loop']['first']      = ($this->_sections['comments_profile_loop']['iteration'] == 1);
$this->_sections['comments_profile_loop']['last']       = ($this->_sections['comments_profile_loop']['iteration'] == $this->_sections['comments_profile_loop']['total']);
?>
    <tr><td><input type='radio' name='comments_profile' id='<?php echo $this->_tpl_vars['comments_profile_options'][$this->_sections['comments_profile_loop']['index']]['privacy_id']; ?>
' value='<?php echo $this->_tpl_vars['comments_profile_options'][$this->_sections['comments_profile_loop']['index']]['privacy_value']; ?>
'<?php if ($this->_tpl_vars['comments_profile'] == $this->_tpl_vars['comments_profile_options'][$this->_sections['comments_profile_loop']['index']]['privacy_value']): ?> CHECKED<?php endif; ?>></td><td><label for='<?php echo $this->_tpl_vars['comments_profile_options'][$this->_sections['comments_profile_loop']['index']]['privacy_id']; ?>
'><?php echo $this->_tpl_vars['comments_profile_options'][$this->_sections['comments_profile_loop']['index']]['privacy_option']; ?>
</label></td></tr>
  <?php endfor; endif; ?>
  </table>
  <br>
<?php endif; ?>

<?php if ($this->_tpl_vars['user']->level_info['level_profile_search'] == 1): ?>
  <div><b><?php echo $this->_tpl_vars['user_editprofile_settings16']; ?>
</b></div>
  <div class='form_desc'><?php echo $this->_tpl_vars['user_editprofile_settings17']; ?>
</div>
  <table cellpadding='0' cellspacing='0' class='editprofile_options'>
  <tr><td><input type='radio' name='search_profile' id='search_profile1' value='1'<?php if ($this->_tpl_vars['user']->user_info['user_privacy_search'] == 1): ?> CHECKED<?php endif; ?>></td><td><label for='search_profile1'><?php echo $this->_tpl_vars['user_editprofile_settings18']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='search_profile' id='search_profile0' value='0'<?php if ($this->_tpl_vars['user']->user_info['user_privacy_search'] == 0): ?> CHECKED<?php endif; ?>></td><td><label for='search_profile0'><?php echo $this->_tpl_vars['user_editprofile_settings19']; ?>
</label></td></tr>
  </table>
  <br>
<?php endif; ?>

<?php if ($this->_tpl_vars['user']->level_info['level_profile_comments'] !== '6'): ?>
  <div><b><?php echo $this->_tpl_vars['user_editprofile_settings20']; ?>
</b></div>
  <div class='form_desc'><?php echo $this->_tpl_vars['user_editprofile_settings21']; ?>
</div>
  <table cellpadding='0' cellspacing='0' class='editprofile_options'>
  <tr><td><input type='checkbox' value='1' id='profilecomment' name='usersetting_notify_profilecomment'<?php if ($this->_tpl_vars['user']->usersetting_info['usersetting_notify_profilecomment'] == 1): ?> CHECKED<?php endif; ?>></td><td><label for='profilecomment'><?php echo $this->_tpl_vars['user_editprofile_settings22']; ?>
</label></td></tr>
  </table>
  <br>
<?php endif; ?>


<input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_editprofile_settings9']; ?>
'>
<input type='hidden' name='task' value='dosave'>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>