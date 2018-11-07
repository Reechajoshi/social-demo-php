<?php /* Smarty version 2.6.14, created on 2012-03-13 05:37:55
         compiled from admin_viewadmins.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'admin_viewadmins.tpl', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_viewadmins1']; ?>

<br><br>
</h2>
<table cellpadding='0' cellspacing='0' class='list'>
  <tr>
<td class='header' width='10'><?php echo $this->_tpl_vars['admin_viewadmins3']; ?>
</td>
<td class='header'><?php echo $this->_tpl_vars['admin_viewadmins4']; ?>
</td>
<td class='header'><?php echo $this->_tpl_vars['admin_viewadmins5']; ?>
</td>
<td class='header'><?php echo $this->_tpl_vars['admin_viewadmins6']; ?>
</td>
<td class='header'><?php echo $this->_tpl_vars['admin_viewadmins7']; ?>
</td>
<td class='header'><?php echo $this->_tpl_vars['admin_viewadmins8']; ?>
</td>
</tr>
<!-- LOOP THROUGH ADMINS -->
<?php unset($this->_sections['admin_loop']);
$this->_sections['admin_loop']['name'] = 'admin_loop';
$this->_sections['admin_loop']['loop'] = is_array($_loop=$this->_tpl_vars['admins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['admin_loop']['show'] = true;
$this->_sections['admin_loop']['max'] = $this->_sections['admin_loop']['loop'];
$this->_sections['admin_loop']['step'] = 1;
$this->_sections['admin_loop']['start'] = $this->_sections['admin_loop']['step'] > 0 ? 0 : $this->_sections['admin_loop']['loop']-1;
if ($this->_sections['admin_loop']['show']) {
    $this->_sections['admin_loop']['total'] = $this->_sections['admin_loop']['loop'];
    if ($this->_sections['admin_loop']['total'] == 0)
        $this->_sections['admin_loop']['show'] = false;
} else
    $this->_sections['admin_loop']['total'] = 0;
if ($this->_sections['admin_loop']['show']):

            for ($this->_sections['admin_loop']['index'] = $this->_sections['admin_loop']['start'], $this->_sections['admin_loop']['iteration'] = 1;
                 $this->_sections['admin_loop']['iteration'] <= $this->_sections['admin_loop']['total'];
                 $this->_sections['admin_loop']['index'] += $this->_sections['admin_loop']['step'], $this->_sections['admin_loop']['iteration']++):
$this->_sections['admin_loop']['rownum'] = $this->_sections['admin_loop']['iteration'];
$this->_sections['admin_loop']['index_prev'] = $this->_sections['admin_loop']['index'] - $this->_sections['admin_loop']['step'];
$this->_sections['admin_loop']['index_next'] = $this->_sections['admin_loop']['index'] + $this->_sections['admin_loop']['step'];
$this->_sections['admin_loop']['first']      = ($this->_sections['admin_loop']['iteration'] == 1);
$this->_sections['admin_loop']['last']       = ($this->_sections['admin_loop']['iteration'] == $this->_sections['admin_loop']['total']);
?>
  <tr class='<?php echo smarty_function_cycle(array('values' => "background1,background2"), $this);?>
'>
  <td class='item'><?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_id']; ?>
</td>
  <td class='item'><?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_username']; ?>
</td>
  <td class='item'><?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_name']; ?>
</td>
  <td class='item'><a href='mailto:<?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_email']; ?>
'><?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_email']; ?>
</a></td>
  <td class='item'><?php if ($this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_status'] == '0'):  echo $this->_tpl_vars['admin_viewadmins9'];  else:  echo $this->_tpl_vars['admin_viewadmins10'];  endif; ?></td>
  <td class='item'><a href='admin_viewadmins_edit.php?admin_id=<?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_id']; ?>
'><?php echo $this->_tpl_vars['admin_viewadmins11']; ?>
</a><?php if ($this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_status'] != '0'): ?> | <a href='admin_viewadmins.php?task=confirmdeleteadmin&admin_id=<?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_id']; ?>
'><?php echo $this->_tpl_vars['admin_viewadmins12']; ?>
</a><?php endif; ?></td>
  </tr>
<?php endfor; endif; ?>
</table>

<br>

<form action='admin_viewadmins_add.php' method='POST'>
<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_viewadmins13']; ?>
'>
<input type='hidden' name='task' value='main'>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>