<?php /* Smarty version 2.6.14, created on 2012-03-03 01:39:35
         compiled from admin_url.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_url1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_url2']; ?>

<br><br>

<?php if ($this->_tpl_vars['result'] != 0): ?>
<div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['admin_url8']; ?>
</div>
<?php endif; ?>

<table cellpadding='0' cellspacing='0' width='600'>
<form action='admin_url.php' method='POST'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_url9']; ?>
</td></tr>
<tr>
<td class='setting1'>
<?php echo $this->_tpl_vars['admin_url3']; ?>

<br><br>
<?php echo $this->_tpl_vars['admin_url10']; ?>

<br>
<?php unset($this->_sections['url_loop']);
$this->_sections['url_loop']['name'] = 'url_loop';
$this->_sections['url_loop']['loop'] = is_array($_loop=$this->_tpl_vars['urls']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['url_loop']['show'] = true;
$this->_sections['url_loop']['max'] = $this->_sections['url_loop']['loop'];
$this->_sections['url_loop']['step'] = 1;
$this->_sections['url_loop']['start'] = $this->_sections['url_loop']['step'] > 0 ? 0 : $this->_sections['url_loop']['loop']-1;
if ($this->_sections['url_loop']['show']) {
    $this->_sections['url_loop']['total'] = $this->_sections['url_loop']['loop'];
    if ($this->_sections['url_loop']['total'] == 0)
        $this->_sections['url_loop']['show'] = false;
} else
    $this->_sections['url_loop']['total'] = 0;
if ($this->_sections['url_loop']['show']):

            for ($this->_sections['url_loop']['index'] = $this->_sections['url_loop']['start'], $this->_sections['url_loop']['iteration'] = 1;
                 $this->_sections['url_loop']['iteration'] <= $this->_sections['url_loop']['total'];
                 $this->_sections['url_loop']['index'] += $this->_sections['url_loop']['step'], $this->_sections['url_loop']['iteration']++):
$this->_sections['url_loop']['rownum'] = $this->_sections['url_loop']['iteration'];
$this->_sections['url_loop']['index_prev'] = $this->_sections['url_loop']['index'] - $this->_sections['url_loop']['step'];
$this->_sections['url_loop']['index_next'] = $this->_sections['url_loop']['index'] + $this->_sections['url_loop']['step'];
$this->_sections['url_loop']['first']      = ($this->_sections['url_loop']['iteration'] == 1);
$this->_sections['url_loop']['last']       = ($this->_sections['url_loop']['iteration'] == $this->_sections['url_loop']['total']);
?>
<?php echo $this->_tpl_vars['urls'][$this->_sections['url_loop']['index']]['url_title']; ?>
: <?php echo $this->_tpl_vars['urls'][$this->_sections['url_loop']['index']]['url_regular']; ?>
<br>
<?php endfor; endif; ?>
<br>
<?php echo $this->_tpl_vars['admin_url11']; ?>

<br>
<?php unset($this->_sections['url_loop']);
$this->_sections['url_loop']['name'] = 'url_loop';
$this->_sections['url_loop']['loop'] = is_array($_loop=$this->_tpl_vars['urls']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['url_loop']['show'] = true;
$this->_sections['url_loop']['max'] = $this->_sections['url_loop']['loop'];
$this->_sections['url_loop']['step'] = 1;
$this->_sections['url_loop']['start'] = $this->_sections['url_loop']['step'] > 0 ? 0 : $this->_sections['url_loop']['loop']-1;
if ($this->_sections['url_loop']['show']) {
    $this->_sections['url_loop']['total'] = $this->_sections['url_loop']['loop'];
    if ($this->_sections['url_loop']['total'] == 0)
        $this->_sections['url_loop']['show'] = false;
} else
    $this->_sections['url_loop']['total'] = 0;
if ($this->_sections['url_loop']['show']):

            for ($this->_sections['url_loop']['index'] = $this->_sections['url_loop']['start'], $this->_sections['url_loop']['iteration'] = 1;
                 $this->_sections['url_loop']['iteration'] <= $this->_sections['url_loop']['total'];
                 $this->_sections['url_loop']['index'] += $this->_sections['url_loop']['step'], $this->_sections['url_loop']['iteration']++):
$this->_sections['url_loop']['rownum'] = $this->_sections['url_loop']['iteration'];
$this->_sections['url_loop']['index_prev'] = $this->_sections['url_loop']['index'] - $this->_sections['url_loop']['step'];
$this->_sections['url_loop']['index_next'] = $this->_sections['url_loop']['index'] + $this->_sections['url_loop']['step'];
$this->_sections['url_loop']['first']      = ($this->_sections['url_loop']['iteration'] == 1);
$this->_sections['url_loop']['last']       = ($this->_sections['url_loop']['iteration'] == $this->_sections['url_loop']['total']);
?>
<?php echo $this->_tpl_vars['urls'][$this->_sections['url_loop']['index']]['url_title']; ?>
: <?php echo $this->_tpl_vars['urls'][$this->_sections['url_loop']['index']]['url_subdirectory']; ?>
<br>
<?php endfor; endif; ?>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_url' id='setting_url_0' value='0'<?php if ($this->_tpl_vars['setting_url'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='setting_url_0'><?php echo $this->_tpl_vars['admin_url4']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='setting_url' id='setting_url_1' value='1'<?php if ($this->_tpl_vars['setting_url'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='setting_url_1'><?php echo $this->_tpl_vars['admin_url5']; ?>
</label><?php if ($this->_tpl_vars['setting_url'] == 1):  echo $this->_tpl_vars['admin_url7'];  endif; ?></td></tr>
  </table>
</td></tr></table>
<br>

<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_url6']; ?>
'>
<input type='hidden' name='task' value='dosave'>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>