<?php /* Smarty version 2.6.14, created on 2012-03-03 01:37:14
         compiled from admin_levels.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'admin_levels.tpl', 31, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_levels1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_levels2']; ?>


<br><br>

<?php if ($this->_tpl_vars['is_error'] != 0): ?>
  <div class='error'><img src='../images/error.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['admin_levels15']; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['result'] == 2): ?>
  <div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['admin_levels16']; ?>
</div>
<?php endif; ?>

<form action='admin_levels_add.php' method='GET'>
<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_levels3']; ?>
'>
</form>

<br>

<table cellpadding='0' cellspacing='0' class='list'>
<tr>
<td class='header' width='10'><a class='header' href='admin_levels.php?s=<?php echo $this->_tpl_vars['i']; ?>
'><?php echo $this->_tpl_vars['admin_levels4']; ?>
</a></td>
<td class='header'><a class='header' href='admin_levels.php?s=<?php echo $this->_tpl_vars['n']; ?>
'><?php echo $this->_tpl_vars['admin_levels5']; ?>
</a></td>
<td class='header' align='center'><a class='header' href='admin_levels.php?s=<?php echo $this->_tpl_vars['u']; ?>
'><?php echo $this->_tpl_vars['admin_levels6']; ?>
</td>
<td class='header' align='center'><?php echo $this->_tpl_vars['admin_levels14']; ?>
</td>
<td class='header' width='100'><?php echo $this->_tpl_vars['admin_levels7']; ?>
</td>
</tr>
<?php unset($this->_sections['level_loop']);
$this->_sections['level_loop']['name'] = 'level_loop';
$this->_sections['level_loop']['loop'] = is_array($_loop=$this->_tpl_vars['levels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['level_loop']['show'] = true;
$this->_sections['level_loop']['max'] = $this->_sections['level_loop']['loop'];
$this->_sections['level_loop']['step'] = 1;
$this->_sections['level_loop']['start'] = $this->_sections['level_loop']['step'] > 0 ? 0 : $this->_sections['level_loop']['loop']-1;
if ($this->_sections['level_loop']['show']) {
    $this->_sections['level_loop']['total'] = $this->_sections['level_loop']['loop'];
    if ($this->_sections['level_loop']['total'] == 0)
        $this->_sections['level_loop']['show'] = false;
} else
    $this->_sections['level_loop']['total'] = 0;
if ($this->_sections['level_loop']['show']):

            for ($this->_sections['level_loop']['index'] = $this->_sections['level_loop']['start'], $this->_sections['level_loop']['iteration'] = 1;
                 $this->_sections['level_loop']['iteration'] <= $this->_sections['level_loop']['total'];
                 $this->_sections['level_loop']['index'] += $this->_sections['level_loop']['step'], $this->_sections['level_loop']['iteration']++):
$this->_sections['level_loop']['rownum'] = $this->_sections['level_loop']['iteration'];
$this->_sections['level_loop']['index_prev'] = $this->_sections['level_loop']['index'] - $this->_sections['level_loop']['step'];
$this->_sections['level_loop']['index_next'] = $this->_sections['level_loop']['index'] + $this->_sections['level_loop']['step'];
$this->_sections['level_loop']['first']      = ($this->_sections['level_loop']['iteration'] == 1);
$this->_sections['level_loop']['last']       = ($this->_sections['level_loop']['iteration'] == $this->_sections['level_loop']['total']);
?>
  <tr class='<?php echo smarty_function_cycle(array('values' => "background2,background1"), $this);?>
'>
  <td class='item'><?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
</td>
  <td class='item'><?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_name']; ?>
</td>
  <td class='item' align='center'><a href='admin_viewusers.php?f_level=<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'><?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_users']; ?>
 <?php echo $this->_tpl_vars['admin_levels17']; ?>
</a></td>
  <td class='item' align='center'><a href='admin_levels.php?task=savechanges&default=<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'><img src='../images/icons/<?php if ($this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_default'] == 1): ?>admin_checkbox2.gif<?php else: ?>admin_checkbox1.gif<?php endif; ?>' border='0' class='icon'></a></td>
  <td class='item'>[ <a href='admin_levels_edit.php?level_id=<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'><?php echo $this->_tpl_vars['admin_levels8']; ?>
</a> ] [ <a href='admin_levels.php?task=confirm&level_id=<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'><?php echo $this->_tpl_vars['admin_levels9']; ?>
</a> ]</td>
  </tr>
<?php endfor; endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>