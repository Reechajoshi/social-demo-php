<?php /* Smarty version 2.6.14, created on 2012-03-03 01:38:25
         compiled from admin_subnetworks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'admin_subnetworks.tpl', 96, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_subnetworks1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_subnetworks2']; ?>


<br><br>

<?php echo '
<script language=\'JavaScript\'>
<!--
function showdiv(id1, id2) {
  document.getElementById(id1).style.display=\'block\';
  document.getElementById(id2).style.display=\'none\';
}
//-->
</script>
'; ?>


<div id='button1' style='display: block;'>
  [ <a href="javascript:showdiv('help', 'button1')"><?php echo $this->_tpl_vars['admin_subnetworks24']; ?>
</a> ]
  <br><br>
</div>

<div id='help' style='display: none;'>
  <?php echo $this->_tpl_vars['admin_subnetworks22']; ?>

  <br><br>
</div>


<?php if ($this->_tpl_vars['result'] != ""): ?>
<div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['result']; ?>
</div>
<?php endif; ?>

<div class='center'>
<div class='box' style='width: 500px;'>

<table cellpadding='0' cellspacing='0'>
<tr><form action='admin_subnetworks.php' method='POST'><td>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td align='right'><?php echo $this->_tpl_vars['admin_subnetworks3']; ?>
 &nbsp;</td>
  <td>
  <select class='text' name='field1_id'>
  <option></option>
  <option value='0'<?php if ($this->_tpl_vars['primary_field_id'] == '0'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['admin_subnetworks16']; ?>
</option>
  <?php unset($this->_sections['field_loop']);
$this->_sections['field_loop']['name'] = 'field_loop';
$this->_sections['field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_loop']['show'] = true;
$this->_sections['field_loop']['max'] = $this->_sections['field_loop']['loop'];
$this->_sections['field_loop']['step'] = 1;
$this->_sections['field_loop']['start'] = $this->_sections['field_loop']['step'] > 0 ? 0 : $this->_sections['field_loop']['loop']-1;
if ($this->_sections['field_loop']['show']) {
    $this->_sections['field_loop']['total'] = $this->_sections['field_loop']['loop'];
    if ($this->_sections['field_loop']['total'] == 0)
        $this->_sections['field_loop']['show'] = false;
} else
    $this->_sections['field_loop']['total'] = 0;
if ($this->_sections['field_loop']['show']):

            for ($this->_sections['field_loop']['index'] = $this->_sections['field_loop']['start'], $this->_sections['field_loop']['iteration'] = 1;
                 $this->_sections['field_loop']['iteration'] <= $this->_sections['field_loop']['total'];
                 $this->_sections['field_loop']['index'] += $this->_sections['field_loop']['step'], $this->_sections['field_loop']['iteration']++):
$this->_sections['field_loop']['rownum'] = $this->_sections['field_loop']['iteration'];
$this->_sections['field_loop']['index_prev'] = $this->_sections['field_loop']['index'] - $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['index_next'] = $this->_sections['field_loop']['index'] + $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['first']      = ($this->_sections['field_loop']['iteration'] == 1);
$this->_sections['field_loop']['last']       = ($this->_sections['field_loop']['iteration'] == $this->_sections['field_loop']['total']);
?>
    <option value='<?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'<?php if ($this->_tpl_vars['primary_field_id'] == $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_id']): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
</option>
  <?php endfor; endif; ?>
  </select>
  </td>
  </tr>
  <tr>
  <td align='right'><?php echo $this->_tpl_vars['admin_subnetworks4']; ?>
 &nbsp;</td>
  <td>
  <select class='text' name='field2_id'>
  <option></option>
  <option value='0'<?php if ($this->_tpl_vars['secondary_field_id'] == '0'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['admin_subnetworks16']; ?>
</option>
  <?php unset($this->_sections['field_loop']);
$this->_sections['field_loop']['name'] = 'field_loop';
$this->_sections['field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_loop']['show'] = true;
$this->_sections['field_loop']['max'] = $this->_sections['field_loop']['loop'];
$this->_sections['field_loop']['step'] = 1;
$this->_sections['field_loop']['start'] = $this->_sections['field_loop']['step'] > 0 ? 0 : $this->_sections['field_loop']['loop']-1;
if ($this->_sections['field_loop']['show']) {
    $this->_sections['field_loop']['total'] = $this->_sections['field_loop']['loop'];
    if ($this->_sections['field_loop']['total'] == 0)
        $this->_sections['field_loop']['show'] = false;
} else
    $this->_sections['field_loop']['total'] = 0;
if ($this->_sections['field_loop']['show']):

            for ($this->_sections['field_loop']['index'] = $this->_sections['field_loop']['start'], $this->_sections['field_loop']['iteration'] = 1;
                 $this->_sections['field_loop']['iteration'] <= $this->_sections['field_loop']['total'];
                 $this->_sections['field_loop']['index'] += $this->_sections['field_loop']['step'], $this->_sections['field_loop']['iteration']++):
$this->_sections['field_loop']['rownum'] = $this->_sections['field_loop']['iteration'];
$this->_sections['field_loop']['index_prev'] = $this->_sections['field_loop']['index'] - $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['index_next'] = $this->_sections['field_loop']['index'] + $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['first']      = ($this->_sections['field_loop']['iteration'] == 1);
$this->_sections['field_loop']['last']       = ($this->_sections['field_loop']['iteration'] == $this->_sections['field_loop']['total']);
?>
    <option value='<?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'<?php if ($this->_tpl_vars['secondary_field_id'] == $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_id']): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
</option>
  <?php endfor; endif; ?>
  </select>
  </td>
  </tr>
  </table>
</td><td>
&nbsp; <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_subnetworks5']; ?>
'>
</td><input type='hidden' name='task' value='doupdate'><input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'></form></tr></table>
</div>
</div>

<br>

<form action='admin_subnetworks_add.php' method='GET'>
<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_subnetworks6']; ?>
'>
<input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'>
</form>

<br>

<table cellpadding='0' cellspacing='0' class='list'>
<tr>
<td class='header' width='10'><a class='header' href='admin_subnetworks.php?s=<?php echo $this->_tpl_vars['i']; ?>
'><?php echo $this->_tpl_vars['admin_subnetworks7']; ?>
</a></td>
<td class='header' width='200'><a class='header' href='admin_subnetworks.php?s=<?php echo $this->_tpl_vars['n']; ?>
'><?php echo $this->_tpl_vars['admin_subnetworks8']; ?>
</a></td>
<td class='header' align='center'><a class='header' href='admin_subnetworks.php?s=<?php echo $this->_tpl_vars['u']; ?>
'><?php echo $this->_tpl_vars['admin_subnetworks9']; ?>
</a></td>
<td class='header'><?php echo $this->_tpl_vars['admin_subnetworks10']; ?>
</td>
<td class='header' width='100'><?php echo $this->_tpl_vars['admin_subnetworks11']; ?>
</td>
</tr>
<tr class='background1'>
<td class='item'>0</td>
<td class='item'><?php echo $this->_tpl_vars['admin_subnetworks14']; ?>
</td>
<td class='item' align='center'><a href='admin_viewusers.php?f_subnet=0'><?php echo $this->_tpl_vars['default_users']; ?>
</a></td>
<td class='item'><?php echo $this->_tpl_vars['admin_subnetworks15']; ?>
</td>
<td class='item'>&nbsp;</td>
</tr>
<?php unset($this->_sections['subnet_loop']);
$this->_sections['subnet_loop']['name'] = 'subnet_loop';
$this->_sections['subnet_loop']['loop'] = is_array($_loop=$this->_tpl_vars['subnets']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['subnet_loop']['show'] = true;
$this->_sections['subnet_loop']['max'] = $this->_sections['subnet_loop']['loop'];
$this->_sections['subnet_loop']['step'] = 1;
$this->_sections['subnet_loop']['start'] = $this->_sections['subnet_loop']['step'] > 0 ? 0 : $this->_sections['subnet_loop']['loop']-1;
if ($this->_sections['subnet_loop']['show']) {
    $this->_sections['subnet_loop']['total'] = $this->_sections['subnet_loop']['loop'];
    if ($this->_sections['subnet_loop']['total'] == 0)
        $this->_sections['subnet_loop']['show'] = false;
} else
    $this->_sections['subnet_loop']['total'] = 0;
if ($this->_sections['subnet_loop']['show']):

            for ($this->_sections['subnet_loop']['index'] = $this->_sections['subnet_loop']['start'], $this->_sections['subnet_loop']['iteration'] = 1;
                 $this->_sections['subnet_loop']['iteration'] <= $this->_sections['subnet_loop']['total'];
                 $this->_sections['subnet_loop']['index'] += $this->_sections['subnet_loop']['step'], $this->_sections['subnet_loop']['iteration']++):
$this->_sections['subnet_loop']['rownum'] = $this->_sections['subnet_loop']['iteration'];
$this->_sections['subnet_loop']['index_prev'] = $this->_sections['subnet_loop']['index'] - $this->_sections['subnet_loop']['step'];
$this->_sections['subnet_loop']['index_next'] = $this->_sections['subnet_loop']['index'] + $this->_sections['subnet_loop']['step'];
$this->_sections['subnet_loop']['first']      = ($this->_sections['subnet_loop']['iteration'] == 1);
$this->_sections['subnet_loop']['last']       = ($this->_sections['subnet_loop']['iteration'] == $this->_sections['subnet_loop']['total']);
?>
  <tr class='<?php echo smarty_function_cycle(array('values' => "background2,background1"), $this);?>
'>
  <td class='item'><?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
</td>
  <td class='item'><?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_name']; ?>
</td>
  <td class='item' align='center'><a href='admin_viewusers.php?f_subnet=<?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
'><?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_users']; ?>
</a></td>
  <td class='item'><?php echo $this->_tpl_vars['primary_field_title']; ?>
 <?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_field1_qual']; ?>
 <?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_field1_value']; ?>
<br><?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_field2_title']; ?>
 <?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_field2_qual']; ?>
 <?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_field2_value']; ?>
</td>
  <td class='item'>[ <a href='admin_subnetworks_edit.php?s=<?php echo $this->_tpl_vars['s']; ?>
&subnet_id=<?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
'><?php echo $this->_tpl_vars['admin_subnetworks12']; ?>
</a> ] [ <a href='admin_subnetworks.php?s=<?php echo $this->_tpl_vars['s']; ?>
&task=confirm&subnet_id=<?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
'><?php echo $this->_tpl_vars['admin_subnetworks13']; ?>
</a> ]</td>
  </tr>
<?php endfor; endif; ?>
</table>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>