<?php /* Smarty version 2.6.14, created on 2012-03-03 03:46:24
         compiled from user_friends_requests_outgoing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'user_friends_requests_outgoing.tpl', 38, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_friends.php'><?php echo $this->_tpl_vars['user_friends_requests_outgoing1']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_friends_requests.php'><?php echo $this->_tpl_vars['user_friends_requests_outgoing2']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_friends_requests_outgoing.php'><?php echo $this->_tpl_vars['user_friends_requests_outgoing19']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_friends_settings.php'><?php echo $this->_tpl_vars['user_friends_requests_outgoing18']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>


<img src='./images/icons/friends48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_friends_requests_outgoing3']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_friends_requests_outgoing4']; ?>
</div>

<br><br>

<?php if ($this->_tpl_vars['total_friends'] == 0): ?>

  <table cellpadding='0' cellspacing='0' align='center'>
  <tr><td class='result'><img src='./images/icons/bulb16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_friends_requests_outgoing5']; ?>
</td></tr>
  </table>

<?php else: ?>

    <?php if ($this->_tpl_vars['maxpage'] > 1): ?>
    <br>
    <div class='center'>
    <?php if ($this->_tpl_vars['p'] != 1): ?><a href='user_friends_requests_outgoing.php?p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['user_friends_requests_outgoing13']; ?>
</a><?php else: ?><font class='disabled'>&#171; <?php echo $this->_tpl_vars['user_friends_requests_outgoing13']; ?>
</font><?php endif; ?>
    <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
      &nbsp;|&nbsp; <?php echo $this->_tpl_vars['user_friends_requests_outgoing14']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['user_friends_requests_outgoing16']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 &nbsp;|&nbsp; 
    <?php else: ?>
      &nbsp;|&nbsp; <?php echo $this->_tpl_vars['user_friends_requests_outgoing15']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
-<?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['user_friends_requests_outgoing16']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 &nbsp;|&nbsp; 
    <?php endif; ?>
    <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><a href='user_friends_requests_outgoing.php?p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['user_friends_requests_outgoing17']; ?>
 &#187;</a><?php else: ?><font class='disabled'><?php echo $this->_tpl_vars['user_friends_requests_outgoing17']; ?>
 &#187;</font><?php endif; ?>
    </div>
  <?php endif; ?>

  <?php unset($this->_sections['friend_loop']);
$this->_sections['friend_loop']['name'] = 'friend_loop';
$this->_sections['friend_loop']['loop'] = is_array($_loop=$this->_tpl_vars['friends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friend_loop']['show'] = true;
$this->_sections['friend_loop']['max'] = $this->_sections['friend_loop']['loop'];
$this->_sections['friend_loop']['step'] = 1;
$this->_sections['friend_loop']['start'] = $this->_sections['friend_loop']['step'] > 0 ? 0 : $this->_sections['friend_loop']['loop']-1;
if ($this->_sections['friend_loop']['show']) {
    $this->_sections['friend_loop']['total'] = $this->_sections['friend_loop']['loop'];
    if ($this->_sections['friend_loop']['total'] == 0)
        $this->_sections['friend_loop']['show'] = false;
} else
    $this->_sections['friend_loop']['total'] = 0;
if ($this->_sections['friend_loop']['show']):

            for ($this->_sections['friend_loop']['index'] = $this->_sections['friend_loop']['start'], $this->_sections['friend_loop']['iteration'] = 1;
                 $this->_sections['friend_loop']['iteration'] <= $this->_sections['friend_loop']['total'];
                 $this->_sections['friend_loop']['index'] += $this->_sections['friend_loop']['step'], $this->_sections['friend_loop']['iteration']++):
$this->_sections['friend_loop']['rownum'] = $this->_sections['friend_loop']['iteration'];
$this->_sections['friend_loop']['index_prev'] = $this->_sections['friend_loop']['index'] - $this->_sections['friend_loop']['step'];
$this->_sections['friend_loop']['index_next'] = $this->_sections['friend_loop']['index'] + $this->_sections['friend_loop']['step'];
$this->_sections['friend_loop']['first']      = ($this->_sections['friend_loop']['iteration'] == 1);
$this->_sections['friend_loop']['last']       = ($this->_sections['friend_loop']['iteration'] == $this->_sections['friend_loop']['total']);
?>
      <div class='friends_result'>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td class='friends_result0'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'); ?>
' class='photo' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'),'90','90','w'); ?>
' border='0' alt="<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username'];  echo $this->_tpl_vars['user_friends_requests_outgoing6']; ?>
"></a></td>
    <td class='friends_result1' width='100%'>
      <div><font class='big'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
'><img src='./images/icons/user16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
</a></div></font><br>
      <table cellpadding='0' cellspacing='0'>
      <tr><td><?php echo $this->_tpl_vars['user_friends_requests_outgoing6']; ?>
</td><td><?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_dateupdated']); ?>
</td></tr>
      <tr><td width='80'><?php echo $this->_tpl_vars['user_friends_requests_outgoing7']; ?>
</td><td><?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_lastlogindate']); ?>
</td></tr>
      <?php if ($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_type != ""): ?><tr><td><?php echo $this->_tpl_vars['user_friends_requests_outgoing8']; ?>
</td><td><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_type; ?>
</td></tr><?php endif; ?>
      <?php if ($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_explain != ""): ?><tr><td><?php echo $this->_tpl_vars['user_friends_requests_outgoing9']; ?>
</td><td><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_explain; ?>
</td></tr><?php endif; ?>
      </table>
    </td>
    <td class='friends_result2' NOWRAP>
      <a href='user_friends_confirm.php?user=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
&task=cancelrequest'><?php echo $this->_tpl_vars['user_friends_requests_outgoing11']; ?>
</a><br>
      <?php if ($this->_tpl_vars['user']->level_info['level_message_allow'] == 2): ?><a href='user_messages_new.php?to=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['user_friends_requests_outgoing12']; ?>
</a><br><?php endif; ?>
    </td>
    </tr>
    </table>
    </div>
  <?php endfor; endif; ?>

    <?php if ($this->_tpl_vars['maxpage'] > 1): ?>
    <br>
    <div class='center'>
    <?php if ($this->_tpl_vars['p'] != 1): ?><a href='user_friends_requests_outgoing.php?p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['user_friends_requests_outgoing13']; ?>
</a><?php else: ?><font class='disabled'>&#171; <?php echo $this->_tpl_vars['user_friends_requests_outgoing13']; ?>
</font><?php endif; ?>
    <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
      &nbsp;|&nbsp; <?php echo $this->_tpl_vars['user_friends_requests_outgoing14']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['user_friends_requests_outgoing16']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 &nbsp;|&nbsp; 
    <?php else: ?>
      &nbsp;|&nbsp; <?php echo $this->_tpl_vars['user_friends_requests_outgoing15']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
-<?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['user_friends_requests_outgoing16']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 &nbsp;|&nbsp; 
    <?php endif; ?>
    <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><a href='user_friends_requests_outgoing.php?p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['user_friends_requests_outgoing17']; ?>
 &#187;</a><?php else: ?><font class='disabled'><?php echo $this->_tpl_vars['user_friends_requests_outgoing17']; ?>
 &#187;</font><?php endif; ?>
    </div>
  <?php endif; ?>
  
<?php endif; ?>  

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>