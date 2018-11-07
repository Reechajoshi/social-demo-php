<?php /* Smarty version 2.6.14, created on 2012-03-03 01:39:06
         compiled from admin_activity.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_activity1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_activity2']; ?>


<br><br>

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['admin_activity3']; ?>
</div>
  <br>
<?php endif; ?>

<form action='admin_activity.php' method='post'>
<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_activity4']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_activity5']; ?>

</td></tr><tr><td class='setting2'>

  <table cellpadding='3' cellspacing='0' width='100%'>
  <?php unset($this->_sections['actiontype_loop']);
$this->_sections['actiontype_loop']['name'] = 'actiontype_loop';
$this->_sections['actiontype_loop']['loop'] = is_array($_loop=$this->_tpl_vars['actiontypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['actiontype_loop']['show'] = true;
$this->_sections['actiontype_loop']['max'] = $this->_sections['actiontype_loop']['loop'];
$this->_sections['actiontype_loop']['step'] = 1;
$this->_sections['actiontype_loop']['start'] = $this->_sections['actiontype_loop']['step'] > 0 ? 0 : $this->_sections['actiontype_loop']['loop']-1;
if ($this->_sections['actiontype_loop']['show']) {
    $this->_sections['actiontype_loop']['total'] = $this->_sections['actiontype_loop']['loop'];
    if ($this->_sections['actiontype_loop']['total'] == 0)
        $this->_sections['actiontype_loop']['show'] = false;
} else
    $this->_sections['actiontype_loop']['total'] = 0;
if ($this->_sections['actiontype_loop']['show']):

            for ($this->_sections['actiontype_loop']['index'] = $this->_sections['actiontype_loop']['start'], $this->_sections['actiontype_loop']['iteration'] = 1;
                 $this->_sections['actiontype_loop']['iteration'] <= $this->_sections['actiontype_loop']['total'];
                 $this->_sections['actiontype_loop']['index'] += $this->_sections['actiontype_loop']['step'], $this->_sections['actiontype_loop']['iteration']++):
$this->_sections['actiontype_loop']['rownum'] = $this->_sections['actiontype_loop']['iteration'];
$this->_sections['actiontype_loop']['index_prev'] = $this->_sections['actiontype_loop']['index'] - $this->_sections['actiontype_loop']['step'];
$this->_sections['actiontype_loop']['index_next'] = $this->_sections['actiontype_loop']['index'] + $this->_sections['actiontype_loop']['step'];
$this->_sections['actiontype_loop']['first']      = ($this->_sections['actiontype_loop']['iteration'] == 1);
$this->_sections['actiontype_loop']['last']       = ($this->_sections['actiontype_loop']['iteration'] == $this->_sections['actiontype_loop']['total']);
?>
    <tr>
    <td valign='top' width='1' style='padding-top: 18px;'><input name='actiontype_enabled_<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_id']; ?>
' type='checkbox' value='1' <?php if ($this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_enabled'] == 1): ?> checked='checked'<?php endif; ?>></td>
    <td valign='top'><b><?php echo $this->_tpl_vars['admin_activity6']; ?>
</b><br><textarea name='actiontype_text_<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_id']; ?>
' rows='3' style='width: 100%;' class='text'><?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_text']; ?>
</textarea></td>
    <td valign='top' width='1'><b><?php echo $this->_tpl_vars['admin_activity7']; ?>
</b><br><?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_name']; ?>
</td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td colspan='2'<?php if ($this->_sections['actiontype_loop']['last'] != true): ?> style='padding-bottom: 40px;'<?php endif; ?>>
      <b><?php echo $this->_tpl_vars['admin_activity37']; ?>
</b><br><input name='actiontype_desc_<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_id']; ?>
' type='text' size=60' maxlength='200' class='text' value='<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_desc']; ?>
'>
    </td>
    </tr>
  <?php endfor; endif; ?>
  <input type='hidden' name='actiontypes_total' value='<?php echo $this->_tpl_vars['actiontypes_total']; ?>
'>
  </table>

</td></tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_activity8']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_activity9']; ?>

</td></tr><tr><td class='setting2'>
  <select class='text' name='actions_actionsonprofile'>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '0'): ?> selected='selected'<?php endif; ?>>0</option>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '1'): ?> selected='selected'<?php endif; ?>>1</option>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '2'): ?> selected='selected'<?php endif; ?>>2</option>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '3'): ?> selected='selected'<?php endif; ?>>3</option>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '4'): ?> selected='selected'<?php endif; ?>>4</option>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '5'): ?> selected='selected'<?php endif; ?>>5</option>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '6'): ?> selected='selected'<?php endif; ?>>6</option>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '7'): ?> selected='selected'<?php endif; ?>>7</option>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '8'): ?> selected='selected'<?php endif; ?>>8</option>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '9'): ?> selected='selected'<?php endif; ?>>9</option>
  <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
  </select> <b><?php echo $this->_tpl_vars['admin_activity10']; ?>
</b>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_activity11']; ?>
</td>
</tr>
<tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_activity12']; ?>

</td></tr><tr><td class='setting2'>
  <select class='text' name='actions_actionsinlist'>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '0'): ?> selected='selected'<?php endif; ?>>0</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '1'): ?> selected='selected'<?php endif; ?>>1</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '2'): ?> selected='selected'<?php endif; ?>>2</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '3'): ?> selected='selected'<?php endif; ?>>3</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '4'): ?> selected='selected'<?php endif; ?>>4</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '5'): ?> selected='selected'<?php endif; ?>>5</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '6'): ?> selected='selected'<?php endif; ?>>6</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '7'): ?> selected='selected'<?php endif; ?>>7</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '8'): ?> selected='selected'<?php endif; ?>>8</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '9'): ?> selected='selected'<?php endif; ?>>9</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '15'): ?> selected='selected'<?php endif; ?>>15</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '20'): ?> selected='selected'<?php endif; ?>>20</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '25'): ?> selected='selected'<?php endif; ?>>25</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '30'): ?> selected='selected'<?php endif; ?>>30</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '35'): ?> selected='selected'<?php endif; ?>>35</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '40'): ?> selected='selected'<?php endif; ?>>40</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '45'): ?> selected='selected'<?php endif; ?>>45</option>
  <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '50'): ?> selected='selected'<?php endif; ?>>50</option>
  </select> <b><?php echo $this->_tpl_vars['admin_activity13']; ?>
</b>
</td></tr>
<tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_activity14']; ?>

</td></tr><tr><td class='setting2'>
  <select class='text' name='actions_showlength'>
  <option value='60'<?php if ($this->_tpl_vars['actions_showlength'] == '60'): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['admin_activity15']; ?>
</option>
  <option value='300'<?php if ($this->_tpl_vars['actions_showlength'] == '300'): ?> selected='selected'<?php endif; ?>>5 <?php echo $this->_tpl_vars['admin_activity16']; ?>
</option>
  <option value='600'<?php if ($this->_tpl_vars['actions_showlength'] == '600'): ?> selected='selected'<?php endif; ?>>10 <?php echo $this->_tpl_vars['admin_activity16']; ?>
</option>
  <option value='1200'<?php if ($this->_tpl_vars['actions_showlength'] == '1200'): ?> selected='selected'<?php endif; ?>>20 <?php echo $this->_tpl_vars['admin_activity16']; ?>
</option>
  <option value='1800'<?php if ($this->_tpl_vars['actions_showlength'] == '1800'): ?> selected='selected'<?php endif; ?>>30 <?php echo $this->_tpl_vars['admin_activity16']; ?>
</option>
  <option value='3600'<?php if ($this->_tpl_vars['actions_showlength'] == '3600'): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['admin_activity17']; ?>
</option>
  <option value='10800'<?php if ($this->_tpl_vars['actions_showlength'] == '10800'): ?> selected='selected'<?php endif; ?>>3 <?php echo $this->_tpl_vars['admin_activity18']; ?>
</option>
  <option value='21600'<?php if ($this->_tpl_vars['actions_showlength'] == '21600'): ?> selected='selected'<?php endif; ?>>6 <?php echo $this->_tpl_vars['admin_activity18']; ?>
</option>
  <option value='43200'<?php if ($this->_tpl_vars['actions_showlength'] == '43200'): ?> selected='selected'<?php endif; ?>>12 <?php echo $this->_tpl_vars['admin_activity18']; ?>
</option>
  <option value='86400'<?php if ($this->_tpl_vars['actions_showlength'] == '86400'): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['admin_activity19']; ?>
</option>
  <option value='172800'<?php if ($this->_tpl_vars['actions_showlength'] == '172800'): ?> selected='selected'<?php endif; ?>>2 <?php echo $this->_tpl_vars['admin_activity20']; ?>
</option>
  <option value='259200'<?php if ($this->_tpl_vars['actions_showlength'] == '259200'): ?> selected='selected'<?php endif; ?>>3 <?php echo $this->_tpl_vars['admin_activity20']; ?>
</option>
  <option value='604800'<?php if ($this->_tpl_vars['actions_showlength'] == '604800'): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['admin_activity21']; ?>
</option>
  <option value='1209600'<?php if ($this->_tpl_vars['actions_showlength'] == '1209600'): ?> selected='selected'<?php endif; ?>>2 <?php echo $this->_tpl_vars['admin_activity22']; ?>
</option>
  <option value='2629743'<?php if ($this->_tpl_vars['actions_showlength'] == '2629743'): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['admin_activity23']; ?>
</option>
  </select>
</td></tr>
<tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_activity24']; ?>

</td></tr><tr><td class='setting2'>
  <select class='text' name='actions_actionsperuser'>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '0'): ?> selected='selected'<?php endif; ?>>0</option>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '1'): ?> selected='selected'<?php endif; ?>>1</option>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '2'): ?> selected='selected'<?php endif; ?>>2</option>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '3'): ?> selected='selected'<?php endif; ?>>3</option>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '4'): ?> selected='selected'<?php endif; ?>>4</option>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '5'): ?> selected='selected'<?php endif; ?>>5</option>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '6'): ?> selected='selected'<?php endif; ?>>6</option>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '7'): ?> selected='selected'<?php endif; ?>>7</option>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '8'): ?> selected='selected'<?php endif; ?>>8</option>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '9'): ?> selected='selected'<?php endif; ?>>9</option>
  <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
  </select> <b><?php echo $this->_tpl_vars['admin_activity25']; ?>
</b>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_activity26']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_activity27']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='actions_selfdelete' id='actions_selfdelete_1' value='1'<?php if ($this->_tpl_vars['actions_selfdelete'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='actions_selfdelete_1'><?php echo $this->_tpl_vars['admin_activity28']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='actions_selfdelete' id='actions_selfdelete_0' value='0'<?php if ($this->_tpl_vars['actions_selfdelete'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='actions_selfdelete_0'><?php echo $this->_tpl_vars['admin_activity29']; ?>
</label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_activity30']; ?>
</td>
</tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_activity31']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <?php unset($this->_sections['visibility_loop']);
$this->_sections['visibility_loop']['name'] = 'visibility_loop';
$this->_sections['visibility_loop']['loop'] = is_array($_loop=$this->_tpl_vars['actions_visibility']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['visibility_loop']['show'] = true;
$this->_sections['visibility_loop']['max'] = $this->_sections['visibility_loop']['loop'];
$this->_sections['visibility_loop']['step'] = 1;
$this->_sections['visibility_loop']['start'] = $this->_sections['visibility_loop']['step'] > 0 ? 0 : $this->_sections['visibility_loop']['loop']-1;
if ($this->_sections['visibility_loop']['show']) {
    $this->_sections['visibility_loop']['total'] = $this->_sections['visibility_loop']['loop'];
    if ($this->_sections['visibility_loop']['total'] == 0)
        $this->_sections['visibility_loop']['show'] = false;
} else
    $this->_sections['visibility_loop']['total'] = 0;
if ($this->_sections['visibility_loop']['show']):

            for ($this->_sections['visibility_loop']['index'] = $this->_sections['visibility_loop']['start'], $this->_sections['visibility_loop']['iteration'] = 1;
                 $this->_sections['visibility_loop']['iteration'] <= $this->_sections['visibility_loop']['total'];
                 $this->_sections['visibility_loop']['index'] += $this->_sections['visibility_loop']['step'], $this->_sections['visibility_loop']['iteration']++):
$this->_sections['visibility_loop']['rownum'] = $this->_sections['visibility_loop']['iteration'];
$this->_sections['visibility_loop']['index_prev'] = $this->_sections['visibility_loop']['index'] - $this->_sections['visibility_loop']['step'];
$this->_sections['visibility_loop']['index_next'] = $this->_sections['visibility_loop']['index'] + $this->_sections['visibility_loop']['step'];
$this->_sections['visibility_loop']['first']      = ($this->_sections['visibility_loop']['iteration'] == 1);
$this->_sections['visibility_loop']['last']       = ($this->_sections['visibility_loop']['iteration'] == $this->_sections['visibility_loop']['total']);
?>
    <?php if ($this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value'] != 0 && $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value'] != 3 && $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value'] != 5): ?>
      <tr><td style='padding-bottom: 3px;'><input type='radio' name='actions_visibility' id='actions_visibility<?php echo $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value']; ?>
' value='<?php echo $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value']; ?>
'<?php if ($this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_selected'] == 1): ?> checked='checked'<?php endif; ?>></td><td><label for='actions_visibility<?php echo $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value']; ?>
'><?php echo $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_option']; ?>
</label>&nbsp;&nbsp;</td></tr>
    <?php endif; ?>
  <?php endfor; endif; ?>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_activity32']; ?>
</td></tr>
<td class='setting1'>
  <?php echo $this->_tpl_vars['admin_activity33']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='actions_privacy' id='actions_privacy_1' value='1'<?php if ($this->_tpl_vars['actions_privacy'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='actions_privacy_1'><?php echo $this->_tpl_vars['admin_activity35']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='actions_privacy' id='actions_privacy_0' value='0'<?php if ($this->_tpl_vars['actions_privacy'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='actions_privacy_0'><?php echo $this->_tpl_vars['admin_activity36']; ?>
</label></td></tr>
  </table>
</td></tr>
</table>

<br>

<input type='hidden' name='task' value='dosave'>
<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_activity34']; ?>
'>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>