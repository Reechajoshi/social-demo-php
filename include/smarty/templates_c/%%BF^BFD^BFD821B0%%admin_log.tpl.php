<?php /* Smarty version 2.6.14, created on 2012-03-03 01:44:25
         compiled from admin_log.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'admin_log.tpl', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_log1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_log2']; ?>


<br><br>

<table cellpadding='0' cellspacing='0' class='list'>
<tr>
<td class='header'><?php echo $this->_tpl_vars['admin_log3']; ?>
</td>
<td class='header'><?php echo $this->_tpl_vars['admin_log5']; ?>
</td>
<td class='header'><?php echo $this->_tpl_vars['admin_log4']; ?>
</td>
<td class='header'><?php echo $this->_tpl_vars['admin_log6']; ?>
</td>
<td class='header'><?php echo $this->_tpl_vars['admin_log7']; ?>
 (<?php echo $this->_tpl_vars['admin_log8']; ?>
)</td>
</tr>
<?php unset($this->_sections['login_loop']);
$this->_sections['login_loop']['name'] = 'login_loop';
$this->_sections['login_loop']['loop'] = is_array($_loop=$this->_tpl_vars['logins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['login_loop']['show'] = true;
$this->_sections['login_loop']['max'] = $this->_sections['login_loop']['loop'];
$this->_sections['login_loop']['step'] = 1;
$this->_sections['login_loop']['start'] = $this->_sections['login_loop']['step'] > 0 ? 0 : $this->_sections['login_loop']['loop']-1;
if ($this->_sections['login_loop']['show']) {
    $this->_sections['login_loop']['total'] = $this->_sections['login_loop']['loop'];
    if ($this->_sections['login_loop']['total'] == 0)
        $this->_sections['login_loop']['show'] = false;
} else
    $this->_sections['login_loop']['total'] = 0;
if ($this->_sections['login_loop']['show']):

            for ($this->_sections['login_loop']['index'] = $this->_sections['login_loop']['start'], $this->_sections['login_loop']['iteration'] = 1;
                 $this->_sections['login_loop']['iteration'] <= $this->_sections['login_loop']['total'];
                 $this->_sections['login_loop']['index'] += $this->_sections['login_loop']['step'], $this->_sections['login_loop']['iteration']++):
$this->_sections['login_loop']['rownum'] = $this->_sections['login_loop']['iteration'];
$this->_sections['login_loop']['index_prev'] = $this->_sections['login_loop']['index'] - $this->_sections['login_loop']['step'];
$this->_sections['login_loop']['index_next'] = $this->_sections['login_loop']['index'] + $this->_sections['login_loop']['step'];
$this->_sections['login_loop']['first']      = ($this->_sections['login_loop']['iteration'] == 1);
$this->_sections['login_loop']['last']       = ($this->_sections['login_loop']['iteration'] == $this->_sections['login_loop']['total']);
?>
<tr class='<?php echo smarty_function_cycle(array('values' => "background1,background2"), $this);?>
'>
<td class='item'><?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_id']; ?>
</td>
<td class='item'><?php echo $this->_tpl_vars['datetime']->cdate("g:i:s a, M. j",$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_date'],$this->_tpl_vars['setting']['setting_timezone'])); ?>
</td>
<td class='item'><a href='mailto:<?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_email']; ?>
'><?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_email']; ?>
</a>&nbsp;</td>
<td class='item'>
<?php if ($this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_result'] == 0): ?>
  <font color='#FF0000'><?php echo $this->_tpl_vars['admin_log10']; ?>
</font>
<?php else: ?>
  <?php echo $this->_tpl_vars['admin_log9']; ?>

<?php endif; ?>
</td>
<td class='item'><?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_ip']; ?>
 <?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_hostname']; ?>
&nbsp;</td>
</tr>
<?php endfor; endif; ?>
</table> 


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>