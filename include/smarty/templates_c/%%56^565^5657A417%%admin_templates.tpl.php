<?php /* Smarty version 2.6.14, created on 2012-03-03 01:39:07
         compiled from admin_templates.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_templates1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_templates2']; ?>


<br><br>

<div class='floatleft' style='width: 200px;'>
<b><?php echo $this->_tpl_vars['admin_templates3']; ?>
</b><br>
<table cellpadding='0' cellspacing='0'>
<?php unset($this->_sections['file_loop']);
$this->_sections['file_loop']['name'] = 'file_loop';
$this->_sections['file_loop']['loop'] = is_array($_loop=$this->_tpl_vars['user_files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file_loop']['show'] = true;
$this->_sections['file_loop']['max'] = $this->_sections['file_loop']['loop'];
$this->_sections['file_loop']['step'] = 1;
$this->_sections['file_loop']['start'] = $this->_sections['file_loop']['step'] > 0 ? 0 : $this->_sections['file_loop']['loop']-1;
if ($this->_sections['file_loop']['show']) {
    $this->_sections['file_loop']['total'] = $this->_sections['file_loop']['loop'];
    if ($this->_sections['file_loop']['total'] == 0)
        $this->_sections['file_loop']['show'] = false;
} else
    $this->_sections['file_loop']['total'] = 0;
if ($this->_sections['file_loop']['show']):

            for ($this->_sections['file_loop']['index'] = $this->_sections['file_loop']['start'], $this->_sections['file_loop']['iteration'] = 1;
                 $this->_sections['file_loop']['iteration'] <= $this->_sections['file_loop']['total'];
                 $this->_sections['file_loop']['index'] += $this->_sections['file_loop']['step'], $this->_sections['file_loop']['iteration']++):
$this->_sections['file_loop']['rownum'] = $this->_sections['file_loop']['iteration'];
$this->_sections['file_loop']['index_prev'] = $this->_sections['file_loop']['index'] - $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['index_next'] = $this->_sections['file_loop']['index'] + $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['first']      = ($this->_sections['file_loop']['iteration'] == 1);
$this->_sections['file_loop']['last']       = ($this->_sections['file_loop']['iteration'] == $this->_sections['file_loop']['total']);
?>
<tr>
<td><img src='../images/icon_file.gif' border='0'>&nbsp;</td>
<td><a href='admin_templates_edit.php?t=<?php echo $this->_tpl_vars['user_files'][$this->_sections['file_loop']['index']]['filename']; ?>
'><?php echo $this->_tpl_vars['user_files'][$this->_sections['file_loop']['index']]['filename']; ?>
</a></td>
</tr>
<?php endfor; endif; ?>
</table>
</div>

<div class='floatleft' style='width: 200px;'>
<b><?php echo $this->_tpl_vars['admin_templates4']; ?>
</b><br>
<table cellpadding='0' cellspacing='0'>
<?php unset($this->_sections['file_loop']);
$this->_sections['file_loop']['name'] = 'file_loop';
$this->_sections['file_loop']['loop'] = is_array($_loop=$this->_tpl_vars['base_files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file_loop']['show'] = true;
$this->_sections['file_loop']['max'] = $this->_sections['file_loop']['loop'];
$this->_sections['file_loop']['step'] = 1;
$this->_sections['file_loop']['start'] = $this->_sections['file_loop']['step'] > 0 ? 0 : $this->_sections['file_loop']['loop']-1;
if ($this->_sections['file_loop']['show']) {
    $this->_sections['file_loop']['total'] = $this->_sections['file_loop']['loop'];
    if ($this->_sections['file_loop']['total'] == 0)
        $this->_sections['file_loop']['show'] = false;
} else
    $this->_sections['file_loop']['total'] = 0;
if ($this->_sections['file_loop']['show']):

            for ($this->_sections['file_loop']['index'] = $this->_sections['file_loop']['start'], $this->_sections['file_loop']['iteration'] = 1;
                 $this->_sections['file_loop']['iteration'] <= $this->_sections['file_loop']['total'];
                 $this->_sections['file_loop']['index'] += $this->_sections['file_loop']['step'], $this->_sections['file_loop']['iteration']++):
$this->_sections['file_loop']['rownum'] = $this->_sections['file_loop']['iteration'];
$this->_sections['file_loop']['index_prev'] = $this->_sections['file_loop']['index'] - $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['index_next'] = $this->_sections['file_loop']['index'] + $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['first']      = ($this->_sections['file_loop']['iteration'] == 1);
$this->_sections['file_loop']['last']       = ($this->_sections['file_loop']['iteration'] == $this->_sections['file_loop']['total']);
?>
<tr>
<td><img src='../images/icon_file.gif' border='0'>&nbsp;</td>
<td><a href='admin_templates_edit.php?t=<?php echo $this->_tpl_vars['base_files'][$this->_sections['file_loop']['index']]['filename']; ?>
'><?php echo $this->_tpl_vars['base_files'][$this->_sections['file_loop']['index']]['filename']; ?>
</a></td>
</tr>
<?php endfor; endif; ?>
</table>
</div>

<div>
<b><?php echo $this->_tpl_vars['admin_templates5']; ?>
</b><br>
<table cellpadding='0' cellspacing='0'>
<?php unset($this->_sections['file_loop']);
$this->_sections['file_loop']['name'] = 'file_loop';
$this->_sections['file_loop']['loop'] = is_array($_loop=$this->_tpl_vars['head_files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file_loop']['show'] = true;
$this->_sections['file_loop']['max'] = $this->_sections['file_loop']['loop'];
$this->_sections['file_loop']['step'] = 1;
$this->_sections['file_loop']['start'] = $this->_sections['file_loop']['step'] > 0 ? 0 : $this->_sections['file_loop']['loop']-1;
if ($this->_sections['file_loop']['show']) {
    $this->_sections['file_loop']['total'] = $this->_sections['file_loop']['loop'];
    if ($this->_sections['file_loop']['total'] == 0)
        $this->_sections['file_loop']['show'] = false;
} else
    $this->_sections['file_loop']['total'] = 0;
if ($this->_sections['file_loop']['show']):

            for ($this->_sections['file_loop']['index'] = $this->_sections['file_loop']['start'], $this->_sections['file_loop']['iteration'] = 1;
                 $this->_sections['file_loop']['iteration'] <= $this->_sections['file_loop']['total'];
                 $this->_sections['file_loop']['index'] += $this->_sections['file_loop']['step'], $this->_sections['file_loop']['iteration']++):
$this->_sections['file_loop']['rownum'] = $this->_sections['file_loop']['iteration'];
$this->_sections['file_loop']['index_prev'] = $this->_sections['file_loop']['index'] - $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['index_next'] = $this->_sections['file_loop']['index'] + $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['first']      = ($this->_sections['file_loop']['iteration'] == 1);
$this->_sections['file_loop']['last']       = ($this->_sections['file_loop']['iteration'] == $this->_sections['file_loop']['total']);
?>
<tr>
<td><img src='../images/icon_file.gif' border='0'>&nbsp;</td>
<td><a href='admin_templates_edit.php?t=<?php echo $this->_tpl_vars['head_files'][$this->_sections['file_loop']['index']]['filename']; ?>
'><?php echo $this->_tpl_vars['head_files'][$this->_sections['file_loop']['index']]['filename']; ?>
</a></td>
</tr>
<?php endfor; endif; ?>
</table>
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>