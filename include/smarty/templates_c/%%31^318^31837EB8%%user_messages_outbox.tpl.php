<?php /* Smarty version 2.6.14, created on 2012-03-03 03:47:37
         compiled from user_messages_outbox.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'user_messages_outbox.tpl', 64, false),array('modifier', 'truncate', 'user_messages_outbox.tpl', 105, false),array('modifier', 'choptext', 'user_messages_outbox.tpl', 105, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_messages.php'><?php echo $this->_tpl_vars['user_messages_outbox1']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_messages_outbox.php'><?php echo $this->_tpl_vars['user_messages_outbox2']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_messages_settings.php'><?php echo $this->_tpl_vars['user_messages_outbox19']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0'>
<tr>
<td class='messages_left'>
  <img src='./images/icons/messages48.gif' border='0' class='icon_big'>
  <div class='page_header'><?php echo $this->_tpl_vars['user_messages_outbox3']; ?>
</div>
  <div><?php echo $this->_tpl_vars['user_messages_outbox4']; ?>
 <?php echo $this->_tpl_vars['total_pms']; ?>
 <?php echo $this->_tpl_vars['user_messages_outbox5']; ?>
</div>
</td>
<td class='messages_right'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td class='button' nowrap='nowrap'>
    <a href='user_messages_new.php'><img src='./images/icons/sendmessage16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_messages_outbox6']; ?>
</a>
  </td></tr></table>
</td>
</tr>
</table

<br>

<?php echo '
  <script language=\'JavaScript\'> 
  <!---
  var checkboxcount = 1;
  function doCheckAll() {
    if(checkboxcount == 0) {
      with (document.messageform) {
      for (var i=0; i < elements.length; i++) {
      if (elements[i].type == \'checkbox\') {
      elements[i].checked = false;
      }}
      checkboxcount = checkboxcount + 1;
      }
    } else
      with (document.messageform) {
      for (var i=0; i < elements.length; i++) {
      if (elements[i].type == \'checkbox\') {
      elements[i].checked = true;
      }}
      checkboxcount = checkboxcount - 1;
      }
  }
  // -->
  </script>
'; ?>



<?php if ($this->_tpl_vars['maxpage'] > 1): ?>
  <div class='center'>
  <?php if ($this->_tpl_vars['p'] != 1): ?><a href='user_messages_outbox.php?p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['user_messages_outbox7']; ?>
</a><?php else: ?><font class='disabled'>&#171; <?php echo $this->_tpl_vars['user_messages_outbox7']; ?>
</font><?php endif; ?>
  <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
    &nbsp;|&nbsp; <?php echo $this->_tpl_vars['user_messages_outbox8']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['user_messages_outbox10']; ?>
 <?php echo $this->_tpl_vars['total_pms']; ?>
 &nbsp;|&nbsp; 
  <?php else: ?>
    &nbsp;|&nbsp; <?php echo $this->_tpl_vars['user_messages_outbox9']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
-<?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['user_messages_outbox10']; ?>
 <?php echo $this->_tpl_vars['total_pms']; ?>
 &nbsp;|&nbsp; 
  <?php endif; ?>
  <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><a href='user_messages_outbox.php?p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['user_messages_outbox11']; ?>
 &#187;</a><?php else: ?><font class='disabled'><?php echo $this->_tpl_vars['user_messages_outbox11']; ?>
 &#187;</font><?php endif; ?>
  </div>
<br>
<?php endif; ?>


<?php if ($this->_tpl_vars['total_pms'] == 0): ?>

  <div class='center'>
    <table cellpadding='0' cellspacing='0'><tr>
    <td class='result'><img src='./images/icons/bulb16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_messages_outbox12']; ?>
</td>
    </tr></table>
  </div>

<?php else: ?>

  <form action='user_messages_outbox.php' method='post' name='messageform'>
  <table class='messages_table' cellpadding='0' cellspacing='0'>
  <tr>
  <td class='messages_header'><input type='checkbox' name='select_all' onClick='javascript:doCheckAll()'></td>
  <td class='messages_header'>&nbsp;</td>
  <td class='messages_header'><?php echo $this->_tpl_vars['user_messages_outbox13']; ?>
</td>
  <td class='messages_header'><?php echo $this->_tpl_vars['user_messages_outbox14']; ?>
</td>
  <td class='messages_header' width='80' align='right'><?php echo $this->_tpl_vars['user_messages_outbox15']; ?>
</td>
  </tr>
    <?php unset($this->_sections['pm_loop']);
$this->_sections['pm_loop']['name'] = 'pm_loop';
$this->_sections['pm_loop']['loop'] = is_array($_loop=$this->_tpl_vars['pms']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pm_loop']['show'] = true;
$this->_sections['pm_loop']['max'] = $this->_sections['pm_loop']['loop'];
$this->_sections['pm_loop']['step'] = 1;
$this->_sections['pm_loop']['start'] = $this->_sections['pm_loop']['step'] > 0 ? 0 : $this->_sections['pm_loop']['loop']-1;
if ($this->_sections['pm_loop']['show']) {
    $this->_sections['pm_loop']['total'] = $this->_sections['pm_loop']['loop'];
    if ($this->_sections['pm_loop']['total'] == 0)
        $this->_sections['pm_loop']['show'] = false;
} else
    $this->_sections['pm_loop']['total'] = 0;
if ($this->_sections['pm_loop']['show']):

            for ($this->_sections['pm_loop']['index'] = $this->_sections['pm_loop']['start'], $this->_sections['pm_loop']['iteration'] = 1;
                 $this->_sections['pm_loop']['iteration'] <= $this->_sections['pm_loop']['total'];
                 $this->_sections['pm_loop']['index'] += $this->_sections['pm_loop']['step'], $this->_sections['pm_loop']['iteration']++):
$this->_sections['pm_loop']['rownum'] = $this->_sections['pm_loop']['iteration'];
$this->_sections['pm_loop']['index_prev'] = $this->_sections['pm_loop']['index'] - $this->_sections['pm_loop']['step'];
$this->_sections['pm_loop']['index_next'] = $this->_sections['pm_loop']['index'] + $this->_sections['pm_loop']['step'];
$this->_sections['pm_loop']['first']      = ($this->_sections['pm_loop']['iteration'] == 1);
$this->_sections['pm_loop']['last']       = ($this->_sections['pm_loop']['iteration'] == $this->_sections['pm_loop']['total']);
?>
    <tr class='messages_read'>
    <td class='messages_message' width='1'><input type='checkbox' name='message_<?php echo $this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_id']; ?>
' value='1'></td>
    <td class='messages_message' width='1'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_user']->user_info['user_username']); ?>
'><img class='photo' src='<?php echo $this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_user']->user_photo('./images/nophoto.gif'); ?>
' border='0' class='photo' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_user']->user_photo('./images/nophoto.gif'),'90','90','w'); ?>
' alt="<?php echo $this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_user']->user_info['user_username'];  echo $this->_tpl_vars['user_messages_outbox16']; ?>
"></a></td>
    <td class='messages_message' width='130' nowrap='nowrap'>
      <b><a href='user_messages_view.php?pm_id=<?php echo $this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_id']; ?>
'><?php echo $this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_user']->user_info['user_username']; ?>
</a></b>
      <div class='messages_date'><?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_date'],$this->_tpl_vars['global_timezone'])); ?>
</div>
    </td>
    <td class='messages_message' width='100%'><b><a href='user_messages_view.php?pm_id=<?php echo $this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_id']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_subject'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>
</b><br><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_body'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150) : smarty_modifier_truncate($_tmp, 150)))) ? $this->_run_mod_handler('choptext', true, $_tmp, 75, "<br>") : smarty_modifier_choptext($_tmp, 75, "<br>")); ?>
</a></td>
    <td class='messages_message' align='right'><a href='user_messages_view.php?pm_id=<?php echo $this->_tpl_vars['pms'][$this->_sections['pm_loop']['index']]['pm_id']; ?>
&task=delete'><?php echo $this->_tpl_vars['user_messages_outbox17']; ?>
</a></td>
    </tr>
  <?php endfor; endif; ?>
  </table>
  
  <br>

  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_messages_outbox18']; ?>
'>
  <input type='hidden' name='task' value='deleteselected'>
  <input type='hidden' name='p' value='<?php echo $this->_tpl_vars['p']; ?>
'>
  </form>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>