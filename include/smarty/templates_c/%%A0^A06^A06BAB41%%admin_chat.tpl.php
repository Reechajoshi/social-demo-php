<?php /* Smarty version 2.6.14, created on 2012-03-03 02:14:19
         compiled from admin_chat.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_chat1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_chat2']; ?>


<br><br>

<?php if ($this->_tpl_vars['result'] == 1): ?>
  <div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['admin_chat3']; ?>
</div>
<?php elseif ($this->_tpl_vars['result'] == 2): ?>
  <div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['chatuser_kicked']; ?>
 <?php echo $this->_tpl_vars['admin_chat4']; ?>
</div>
<?php endif; ?>

<form action='admin_chat.php' method='post'>

<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'><?php echo $this->_tpl_vars['admin_chat5']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_chat6']; ?>

</td>
</tr>
<tr>
<td class='setting2'>
  <?php unset($this->_sections['chatusers_loop']);
$this->_sections['chatusers_loop']['name'] = 'chatusers_loop';
$this->_sections['chatusers_loop']['loop'] = is_array($_loop=$this->_tpl_vars['chatusers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['chatusers_loop']['show'] = true;
$this->_sections['chatusers_loop']['max'] = $this->_sections['chatusers_loop']['loop'];
$this->_sections['chatusers_loop']['step'] = 1;
$this->_sections['chatusers_loop']['start'] = $this->_sections['chatusers_loop']['step'] > 0 ? 0 : $this->_sections['chatusers_loop']['loop']-1;
if ($this->_sections['chatusers_loop']['show']) {
    $this->_sections['chatusers_loop']['total'] = $this->_sections['chatusers_loop']['loop'];
    if ($this->_sections['chatusers_loop']['total'] == 0)
        $this->_sections['chatusers_loop']['show'] = false;
} else
    $this->_sections['chatusers_loop']['total'] = 0;
if ($this->_sections['chatusers_loop']['show']):

            for ($this->_sections['chatusers_loop']['index'] = $this->_sections['chatusers_loop']['start'], $this->_sections['chatusers_loop']['iteration'] = 1;
                 $this->_sections['chatusers_loop']['iteration'] <= $this->_sections['chatusers_loop']['total'];
                 $this->_sections['chatusers_loop']['index'] += $this->_sections['chatusers_loop']['step'], $this->_sections['chatusers_loop']['iteration']++):
$this->_sections['chatusers_loop']['rownum'] = $this->_sections['chatusers_loop']['iteration'];
$this->_sections['chatusers_loop']['index_prev'] = $this->_sections['chatusers_loop']['index'] - $this->_sections['chatusers_loop']['step'];
$this->_sections['chatusers_loop']['index_next'] = $this->_sections['chatusers_loop']['index'] + $this->_sections['chatusers_loop']['step'];
$this->_sections['chatusers_loop']['first']      = ($this->_sections['chatusers_loop']['iteration'] == 1);
$this->_sections['chatusers_loop']['last']       = ($this->_sections['chatusers_loop']['iteration'] == $this->_sections['chatusers_loop']['total']);
?>
    <a href='admin_chat.php?task=kick&chatuser_id=<?php echo $this->_tpl_vars['chatusers'][$this->_sections['chatusers_loop']['index']]['chatuser_id']; ?>
'><?php echo $this->_tpl_vars['chatusers'][$this->_sections['chatusers_loop']['index']]['chatuser_user_username']; ?>
</a>
    <?php if ($this->_sections['chatusers_loop']['last'] != true): ?>, <?php endif; ?> 
  <?php endfor; else: ?>
    <?php echo $this->_tpl_vars['admin_chat7']; ?>

  <?php endif; ?>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'><?php echo $this->_tpl_vars['admin_chat8']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_chat9']; ?>

</td>
</tr>
<tr>
<td class='setting2'>
  <table cellpadding='2' cellspacing='0'>
  <tr>
  <td><input type='radio' name='setting_chat_enabled' id='setting_chat_enabled_1' value='1'<?php if ($this->_tpl_vars['setting_chat_enabled'] == 1): ?> CHECKED<?php endif; ?>></td>
  <td><label for='setting_chat_enabled_1'><?php echo $this->_tpl_vars['admin_chat10']; ?>
</label></td>
  </tr>
  <tr>
  <td><input type='radio' name='setting_chat_enabled' id='setting_chat_enabled_0' value='0'<?php if ($this->_tpl_vars['setting_chat_enabled'] == 0): ?> CHECKED<?php endif; ?>></td>
  <td><label for='setting_chat_enabled_0'><?php echo $this->_tpl_vars['admin_chat11']; ?>
</label></td>
  </tr>
  </table>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'><?php echo $this->_tpl_vars['admin_chat12']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_chat13']; ?>

</td>
</tr>
<tr>
<td class='setting2'>
  <select class='text' name='setting_chat_update'>
  <option value='2'<?php if ($this->_tpl_vars['setting_chat_update'] == '2'): ?> selected='selected'<?php endif; ?>>2 <?php echo $this->_tpl_vars['admin_chat14']; ?>
</option>
  <option value='3'<?php if ($this->_tpl_vars['setting_chat_update'] == '3'): ?> selected='selected'<?php endif; ?>>3 <?php echo $this->_tpl_vars['admin_chat14']; ?>
</option>
  <option value='4'<?php if ($this->_tpl_vars['setting_chat_update'] == '4'): ?> selected='selected'<?php endif; ?>>4 <?php echo $this->_tpl_vars['admin_chat14']; ?>
</option>
  <option value='5'<?php if ($this->_tpl_vars['setting_chat_update'] == '5'): ?> selected='selected'<?php endif; ?>>5 <?php echo $this->_tpl_vars['admin_chat14']; ?>
</option>
  <option value='6'<?php if ($this->_tpl_vars['setting_chat_update'] == '6'): ?> selected='selected'<?php endif; ?>>6 <?php echo $this->_tpl_vars['admin_chat14']; ?>
</option>
  <option value='7'<?php if ($this->_tpl_vars['setting_chat_update'] == '7'): ?> selected='selected'<?php endif; ?>>7 <?php echo $this->_tpl_vars['admin_chat14']; ?>
</option>
  <option value='8'<?php if ($this->_tpl_vars['setting_chat_update'] == '8'): ?> selected='selected'<?php endif; ?>>8 <?php echo $this->_tpl_vars['admin_chat14']; ?>
</option>
  <option value='9'<?php if ($this->_tpl_vars['setting_chat_update'] == '9'): ?> selected='selected'<?php endif; ?>>9 <?php echo $this->_tpl_vars['admin_chat14']; ?>
</option>
  <option value='10'<?php if ($this->_tpl_vars['setting_chat_update'] == '10'): ?> selected='selected'<?php endif; ?>>10 <?php echo $this->_tpl_vars['admin_chat14']; ?>
</option>
  </select>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'><?php echo $this->_tpl_vars['admin_chat15']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_chat16']; ?>

</td>
</tr>
<tr>
<td class='setting2'>
  <table cellpadding='2' cellspacing='0'>
  <tr>
  <td><input type='radio' name='setting_chat_showphotos' id='setting_chat_showphotos_1' value='1'<?php if ($this->_tpl_vars['setting_chat_showphotos'] == 1): ?> CHECKED<?php endif; ?>></td>
  <td><label for='setting_chat_showphotos_1'><?php echo $this->_tpl_vars['admin_chat17']; ?>
</label></td>
  </tr>
  <tr>
  <td><input type='radio' name='setting_chat_showphotos' id='setting_chat_showphotos_0' value='0'<?php if ($this->_tpl_vars['setting_chat_showphotos'] == 0): ?> CHECKED<?php endif; ?>></td>
  <td><label for='setting_chat_showphotos_0'><?php echo $this->_tpl_vars['admin_chat18']; ?>
</label></td>
  </tr>
  </table>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'><?php echo $this->_tpl_vars['admin_chat19']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_chat20']; ?>

</td>
</tr>
<tr>
<td class='setting2'>
  <textarea name='chatbanned' cols='40' rows='3' style='width: 100%;'><?php unset($this->_sections['chatbanned_loop']);
$this->_sections['chatbanned_loop']['name'] = 'chatbanned_loop';
$this->_sections['chatbanned_loop']['loop'] = is_array($_loop=$this->_tpl_vars['chatbanned']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['chatbanned_loop']['show'] = true;
$this->_sections['chatbanned_loop']['max'] = $this->_sections['chatbanned_loop']['loop'];
$this->_sections['chatbanned_loop']['step'] = 1;
$this->_sections['chatbanned_loop']['start'] = $this->_sections['chatbanned_loop']['step'] > 0 ? 0 : $this->_sections['chatbanned_loop']['loop']-1;
if ($this->_sections['chatbanned_loop']['show']) {
    $this->_sections['chatbanned_loop']['total'] = $this->_sections['chatbanned_loop']['loop'];
    if ($this->_sections['chatbanned_loop']['total'] == 0)
        $this->_sections['chatbanned_loop']['show'] = false;
} else
    $this->_sections['chatbanned_loop']['total'] = 0;
if ($this->_sections['chatbanned_loop']['show']):

            for ($this->_sections['chatbanned_loop']['index'] = $this->_sections['chatbanned_loop']['start'], $this->_sections['chatbanned_loop']['iteration'] = 1;
                 $this->_sections['chatbanned_loop']['iteration'] <= $this->_sections['chatbanned_loop']['total'];
                 $this->_sections['chatbanned_loop']['index'] += $this->_sections['chatbanned_loop']['step'], $this->_sections['chatbanned_loop']['iteration']++):
$this->_sections['chatbanned_loop']['rownum'] = $this->_sections['chatbanned_loop']['iteration'];
$this->_sections['chatbanned_loop']['index_prev'] = $this->_sections['chatbanned_loop']['index'] - $this->_sections['chatbanned_loop']['step'];
$this->_sections['chatbanned_loop']['index_next'] = $this->_sections['chatbanned_loop']['index'] + $this->_sections['chatbanned_loop']['step'];
$this->_sections['chatbanned_loop']['first']      = ($this->_sections['chatbanned_loop']['iteration'] == 1);
$this->_sections['chatbanned_loop']['last']       = ($this->_sections['chatbanned_loop']['iteration'] == $this->_sections['chatbanned_loop']['total']);
 echo $this->_tpl_vars['chatbanned'][$this->_sections['chatbanned_loop']['index']]['chatbanned_user_username'];  if ($this->_sections['chatbanned_loop']['last'] != true): ?>, <?php endif;  endfor; endif; ?></textarea>
</td>
</tr>
</table>

<br>

<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_chat21']; ?>
'>
<input type='hidden' name='task' value='dosave'>
</form>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>