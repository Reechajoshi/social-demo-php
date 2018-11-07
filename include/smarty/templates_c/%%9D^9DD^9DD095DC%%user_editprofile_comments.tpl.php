<?php /* Smarty version 2.6.14, created on 2012-03-13 06:10:41
         compiled from user_editprofile_comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'user_editprofile_comments.tpl', 66, false),)), $this); ?>
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
<?php if ($this->_tpl_vars['user']->level_info['level_profile_status'] != 0): ?><td class='tab2' NOWRAP><a href='user_editprofile_status.php'><?php echo $this->_tpl_vars['user_editprofile_comments1']; ?>
</a></td><td class='tab'>&nbsp;</td><?php endif; ?>
<?php if ($this->_tpl_vars['user']->level_info['level_photo_allow'] != 0): ?><td class='tab2' NOWRAP><a href='user_editprofile_photo.php'><?php echo $this->_tpl_vars['user_editprofile_comments2']; ?>
</a></td><td class='tab'>&nbsp;</td><?php endif; ?>
<td class='tab1' NOWRAP><a href='user_editprofile_comments.php'><?php echo $this->_tpl_vars['user_editprofile_comments4']; ?>
</td><td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_editprofile_settings.php'><?php echo $this->_tpl_vars['user_editprofile_comments5']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<img src='./images/icons/editprofile48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_editprofile_comments6']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_editprofile_comments7']; ?>
</div>

<br><br>

<?php echo '
  <script language=\'JavaScript\'> 
  <!---
  var checkboxcount = 1;
  function doCheckAll() {
    if(checkboxcount == 0) {
      with (document.comments) {
      for (var i=0; i < elements.length; i++) {
      if (elements[i].type == \'checkbox\') {
      elements[i].checked = false;
      }}
      checkboxcount = checkboxcount + 1;
      }
      select_all.checked=false;
    } else
      with (document.comments) {
      for (var i=0; i < elements.length; i++) {
      if (elements[i].type == \'checkbox\') {
      elements[i].checked = true;
      }}
      checkboxcount = checkboxcount - 1;
      select_all.checked=true;
      }
  }
  // -->
  </script>
'; ?>


<table cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='150'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><input type='checkbox' name='select_all' id='select_all' onClick='doCheckAll()'></td>
  <td>&nbsp;[ <a href='javascript:doCheckAll()'><?php echo $this->_tpl_vars['user_editprofile_comments8']; ?>
</a> ]</td>
  </tr>
  </table>
</td>

<?php if ($this->_tpl_vars['maxpage'] > 1): ?>
  <td align='right'>
    <?php if ($this->_tpl_vars['p'] != 1): ?><a href='user_editprofile_comments.php?p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['user_editprofile_comments9']; ?>
</a><?php else: ?><font class='disabled'>&#171; <?php echo $this->_tpl_vars['user_editprofile_comments9']; ?>
</font><?php endif; ?>
    <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
      &nbsp;|&nbsp; <?php echo $this->_tpl_vars['user_editprofile_comments10']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['user_editprofile_comments11']; ?>
 <?php echo $this->_tpl_vars['total_comments']; ?>
 &nbsp;|&nbsp; 
    <?php else: ?>
      &nbsp;|&nbsp; <?php echo $this->_tpl_vars['user_editprofile_comments12']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
-<?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['user_editprofile_comments11']; ?>
 <?php echo $this->_tpl_vars['total_comments']; ?>
 &nbsp;|&nbsp; 
    <?php endif; ?>
    <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><a href='user_editprofile_comments.php?p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['user_editprofile_comments13']; ?>
 &#187;</a><?php else: ?><font class='disabled'><?php echo $this->_tpl_vars['user_editprofile_comments13']; ?>
 &#187;</font><?php endif; ?>
  </td>
<?php endif; ?>

</tr>
</table>


<?php if ($this->_tpl_vars['total_comments'] == 0): ?>
    <table cellpadding='0' cellspacing='0'>
  <tr><td class='result'><img src='./images/icons/bulb22.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['user_editprofile_comments14']; ?>
</td></tr>
  </table>


<?php else: ?>
    <form action='user_editprofile_comments.php' method='post' name='comments'>
  <?php unset($this->_sections['comment_loop']);
$this->_sections['comment_loop']['name'] = 'comment_loop';
$this->_sections['comment_loop']['loop'] = is_array($_loop=$this->_tpl_vars['comments']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['comment_loop']['show'] = true;
$this->_sections['comment_loop']['max'] = $this->_sections['comment_loop']['loop'];
$this->_sections['comment_loop']['step'] = 1;
$this->_sections['comment_loop']['start'] = $this->_sections['comment_loop']['step'] > 0 ? 0 : $this->_sections['comment_loop']['loop']-1;
if ($this->_sections['comment_loop']['show']) {
    $this->_sections['comment_loop']['total'] = $this->_sections['comment_loop']['loop'];
    if ($this->_sections['comment_loop']['total'] == 0)
        $this->_sections['comment_loop']['show'] = false;
} else
    $this->_sections['comment_loop']['total'] = 0;
if ($this->_sections['comment_loop']['show']):

            for ($this->_sections['comment_loop']['index'] = $this->_sections['comment_loop']['start'], $this->_sections['comment_loop']['iteration'] = 1;
                 $this->_sections['comment_loop']['iteration'] <= $this->_sections['comment_loop']['total'];
                 $this->_sections['comment_loop']['index'] += $this->_sections['comment_loop']['step'], $this->_sections['comment_loop']['iteration']++):
$this->_sections['comment_loop']['rownum'] = $this->_sections['comment_loop']['iteration'];
$this->_sections['comment_loop']['index_prev'] = $this->_sections['comment_loop']['index'] - $this->_sections['comment_loop']['step'];
$this->_sections['comment_loop']['index_next'] = $this->_sections['comment_loop']['index'] + $this->_sections['comment_loop']['step'];
$this->_sections['comment_loop']['first']      = ($this->_sections['comment_loop']['iteration'] == 1);
$this->_sections['comment_loop']['last']       = ($this->_sections['comment_loop']['iteration'] == $this->_sections['comment_loop']['total']);
?>
    <div class='editprofile_bar'></div>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td valign='top'><input type='checkbox' name='comment_<?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_id']; ?>
' value='1' style='margin-top: 2px;'></td>
    <td class='editprofile_item1'>
      <?php if ($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_id'] != 0): ?>
        <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_photo('./images/nophoto.gif'); ?>
' class='photo' border='0' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_photo('./images/nophoto.gif'),'75','75','w'); ?>
'></a>
      <?php else: ?>
        <img src='./images/nophoto.gif' class='photo' border='0' width='75'>
      <?php endif; ?>
    </td>
    <td class='editprofile_item2'>
    <div><b><?php if ($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_id'] != 0): ?><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']; ?>
</a><?php else:  echo $this->_tpl_vars['user_editprofile_comments15'];  endif; ?></b>
     - <?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['user_editprofile_comments3'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_date'],$this->_tpl_vars['global_timezone'])); ?>

    </div>
    <?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_body']; ?>

    </td>
    </tr>
    </table>
  <?php endfor; endif; ?>

  <br>

  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_editprofile_comments16']; ?>
'>
  <input type='hidden' name='task' value='delete'>
  <input type='hidden' name='p' value='<?php echo $this->_tpl_vars['p']; ?>
'>
  </form>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>