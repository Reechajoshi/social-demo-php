<?php /* Smarty version 2.6.14, created on 2012-03-03 01:39:33
         compiled from admin_connections.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_connections1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_connections2']; ?>


<br><br>

<?php if ($this->_tpl_vars['result'] != 0): ?>
<div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['admin_connections24']; ?>
</div>
<?php endif; ?>

<?php echo '
<script type="text/javascript">
'; ?>

<!-- Begin
var friendtype_id = <?php echo $this->_tpl_vars['num_friendtypes']; ?>
;
<?php echo '
function addInput(fieldname) {
  var ni = document.getElementById(fieldname);
  var newdiv = document.createElement(\'div\');
  var divIdName = \'my\'+friendtype_id+\'Div\';
  newdiv.setAttribute(\'id\',divIdName);
  newdiv.innerHTML = "<input type=\'text\' name=\'friendtype_label" + friendtype_id +"\' class=\'text\' size=\'30\' maxlength=\'50\'>&nbsp;<br>";
  ni.appendChild(newdiv);
  friendtype_id++;
  window.document.info.num_friendtypes.value=friendtype_id;
}
// End -->
</script>
'; ?>



<form action='admin_connections.php' method='POST' name='info'>
<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_connections3']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_connections4']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_allow' id='invitation_0' value='0'<?php if ($this->_tpl_vars['invitation'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='invitation_0'><b><?php echo $this->_tpl_vars['admin_connections9']; ?>
</b><br><?php echo $this->_tpl_vars['admin_connections5']; ?>
</label>
  </td></tr></table>
</td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_allow' id='invitation_3' value='3'<?php if ($this->_tpl_vars['invitation'] == 3): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='invitation_3'><b><?php echo $this->_tpl_vars['admin_connections10']; ?>
</b><br><?php echo $this->_tpl_vars['admin_connections6']; ?>
</label>
  </td></tr></table>
</td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_allow' id='invitation_2' value='2'<?php if ($this->_tpl_vars['invitation'] == 2): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='invitation_2'><b><?php echo $this->_tpl_vars['admin_connections11']; ?>
</b><br><?php echo $this->_tpl_vars['admin_connections7']; ?>
</label>
  </td></tr></table>
</td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_allow' id='invitation_1' value='1'<?php if ($this->_tpl_vars['invitation'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='invitation_1'><b><?php echo $this->_tpl_vars['admin_connections12']; ?>
</b><br><?php echo $this->_tpl_vars['admin_connections8']; ?>
</label>
  </td></tr></table>
</td></tr>
</table>
<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_connections13']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_connections14']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_framework' id='framework_0' value='0'<?php if ($this->_tpl_vars['framework'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='framework_0'><b><?php echo $this->_tpl_vars['admin_connections15']; ?>
</b><br><?php echo $this->_tpl_vars['admin_connections19']; ?>
</label>
  </td></tr></table>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_framework' id='framework_1' value='1'<?php if ($this->_tpl_vars['framework'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='framework_1'><b><?php echo $this->_tpl_vars['admin_connections16']; ?>
</b><br><?php echo $this->_tpl_vars['admin_connections20']; ?>
</label>
  </td></tr></table>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_framework' id='framework_2' value='2'<?php if ($this->_tpl_vars['framework'] == 2): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='framework_2'><b><?php echo $this->_tpl_vars['admin_connections17']; ?>
</b><br><?php echo $this->_tpl_vars['admin_connections21']; ?>
</label>
  </td></tr></table>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_framework' id='framework_3' value='3'<?php if ($this->_tpl_vars['framework'] == 3): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='framework_3'><b><?php echo $this->_tpl_vars['admin_connections18']; ?>
</b><br><?php echo $this->_tpl_vars['admin_connections22']; ?>
</label>
  </td></tr></table>
</td></tr></table>
<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_connections25']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_connections26']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><?php echo $this->_tpl_vars['admin_connections27']; ?>
</td></tr>

<?php unset($this->_sections['type_loop']);
$this->_sections['type_loop']['name'] = 'type_loop';
$this->_sections['type_loop']['loop'] = is_array($_loop=$this->_tpl_vars['types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['type_loop']['show'] = true;
$this->_sections['type_loop']['max'] = $this->_sections['type_loop']['loop'];
$this->_sections['type_loop']['step'] = 1;
$this->_sections['type_loop']['start'] = $this->_sections['type_loop']['step'] > 0 ? 0 : $this->_sections['type_loop']['loop']-1;
if ($this->_sections['type_loop']['show']) {
    $this->_sections['type_loop']['total'] = $this->_sections['type_loop']['loop'];
    if ($this->_sections['type_loop']['total'] == 0)
        $this->_sections['type_loop']['show'] = false;
} else
    $this->_sections['type_loop']['total'] = 0;
if ($this->_sections['type_loop']['show']):

            for ($this->_sections['type_loop']['index'] = $this->_sections['type_loop']['start'], $this->_sections['type_loop']['iteration'] = 1;
                 $this->_sections['type_loop']['iteration'] <= $this->_sections['type_loop']['total'];
                 $this->_sections['type_loop']['index'] += $this->_sections['type_loop']['step'], $this->_sections['type_loop']['iteration']++):
$this->_sections['type_loop']['rownum'] = $this->_sections['type_loop']['iteration'];
$this->_sections['type_loop']['index_prev'] = $this->_sections['type_loop']['index'] - $this->_sections['type_loop']['step'];
$this->_sections['type_loop']['index_next'] = $this->_sections['type_loop']['index'] + $this->_sections['type_loop']['step'];
$this->_sections['type_loop']['first']      = ($this->_sections['type_loop']['iteration'] == 1);
$this->_sections['type_loop']['last']       = ($this->_sections['type_loop']['iteration'] == $this->_sections['type_loop']['total']);
?>
  <tr><td><input type='text' class='text' name='friendtype_label<?php echo $this->_tpl_vars['types'][$this->_sections['type_loop']['index']]['friendtype_id']; ?>
' value='<?php echo $this->_tpl_vars['types'][$this->_sections['type_loop']['index']]['friendtype_label']; ?>
' size='30' maxlength='50'>&nbsp;</td></tr>
<?php endfor; endif; ?>

  <tr><td><p id='newtype'></p></td></tr>
  <tr><td><a href="javascript:addInput('newtype')"><?php echo $this->_tpl_vars['admin_connections28']; ?>
</a></td><input type='hidden' name='num_friendtypes' value='<?php echo $this->_tpl_vars['num_friendtypes']; ?>
'></tr>
  </table>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td>&nbsp;</td><td><b><?php echo $this->_tpl_vars['admin_connections29']; ?>
</b></td></tr>
  <tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_other' id='other_1' value='1'<?php if ($this->_tpl_vars['other'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='other_1'><?php echo $this->_tpl_vars['admin_connections30']; ?>
</label></td>
  </tr><tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_other' id='other_0' value='0'<?php if ($this->_tpl_vars['other'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='other_0'><?php echo $this->_tpl_vars['admin_connections31']; ?>
</label></td>
  </tr></table>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td>&nbsp;</td><td><b><?php echo $this->_tpl_vars['admin_connections32']; ?>
</b></td></tr>
  <tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_explain' id='explain_1' value='1'<?php if ($this->_tpl_vars['explain'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='explain_1'><?php echo $this->_tpl_vars['admin_connections33']; ?>
</label></td>
  </tr><tr>
  <td style='vertical-align: top;'><input type='radio' name='setting_connection_explain' id='explain_0' value='0'<?php if ($this->_tpl_vars['explain'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td>
  <td><label for='explain_0'><?php echo $this->_tpl_vars['admin_connections34']; ?>
</label></td>
  </tr></table>
</td></tr></table>
<br>


<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_connections23']; ?>
'>
<input type='hidden' name='task' value='dosave'>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>