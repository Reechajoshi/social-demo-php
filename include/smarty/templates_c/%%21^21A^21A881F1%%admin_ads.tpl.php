<?php /* Smarty version 2.6.14, created on 2012-03-13 05:38:45
         compiled from admin_ads.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'admin_ads.tpl', 50, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_ads1']; ?>
<br>
</h2>
<table cellpadding='0' cellspacing='0' width='100%'>
  <tr>
<td>
  <form action='admin_ads_add.php' method='post'>
  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_ads3']; ?>
'>&nbsp;
  </form>
</td>
<?php if ($this->_tpl_vars['ads_total'] > 0): ?>
  <td align='right'>
    <form action='admin_ads.php' method='post'>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_ads4']; ?>
'>
    </form>
  </td>
<?php endif; ?>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' class='list' width='100%'>
<tr>
<td class='header' width='10'><a class='header' href='admin_ads.php?s=<?php echo $this->_tpl_vars['i']; ?>
'><?php echo $this->_tpl_vars['admin_ads5']; ?>
</a>&nbsp;</td>
<td class='header' width='100%'><a class='header' href='admin_ads.php?s=<?php echo $this->_tpl_vars['n']; ?>
'><?php echo $this->_tpl_vars['admin_ads6']; ?>
</a>&nbsp;</td>
<td class='header' align='center'><?php echo $this->_tpl_vars['admin_ads7']; ?>
&nbsp;</td>
<td class='header' align='center' align='center'><a class='header' href='admin_ads.php?s=<?php echo $this->_tpl_vars['v']; ?>
'><?php echo $this->_tpl_vars['admin_ads8']; ?>
</a>&nbsp;</td>
<td class='header' align='center' align='center'><a class='header' href='admin_ads.php?s=<?php echo $this->_tpl_vars['c']; ?>
'><?php echo $this->_tpl_vars['admin_ads9']; ?>
</a>&nbsp;</td>
<td class='header' align='center' align='center'><?php echo $this->_tpl_vars['admin_ads10']; ?>
&nbsp;</td>
<td class='header' nowrap='nowrap' width='10'><?php echo $this->_tpl_vars['admin_ads11']; ?>
</td>
</tr>
  <?php unset($this->_sections['ad_loop']);
$this->_sections['ad_loop']['name'] = 'ad_loop';
$this->_sections['ad_loop']['loop'] = is_array($_loop=$this->_tpl_vars['ads']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ad_loop']['show'] = true;
$this->_sections['ad_loop']['max'] = $this->_sections['ad_loop']['loop'];
$this->_sections['ad_loop']['step'] = 1;
$this->_sections['ad_loop']['start'] = $this->_sections['ad_loop']['step'] > 0 ? 0 : $this->_sections['ad_loop']['loop']-1;
if ($this->_sections['ad_loop']['show']) {
    $this->_sections['ad_loop']['total'] = $this->_sections['ad_loop']['loop'];
    if ($this->_sections['ad_loop']['total'] == 0)
        $this->_sections['ad_loop']['show'] = false;
} else
    $this->_sections['ad_loop']['total'] = 0;
if ($this->_sections['ad_loop']['show']):

            for ($this->_sections['ad_loop']['index'] = $this->_sections['ad_loop']['start'], $this->_sections['ad_loop']['iteration'] = 1;
                 $this->_sections['ad_loop']['iteration'] <= $this->_sections['ad_loop']['total'];
                 $this->_sections['ad_loop']['index'] += $this->_sections['ad_loop']['step'], $this->_sections['ad_loop']['iteration']++):
$this->_sections['ad_loop']['rownum'] = $this->_sections['ad_loop']['iteration'];
$this->_sections['ad_loop']['index_prev'] = $this->_sections['ad_loop']['index'] - $this->_sections['ad_loop']['step'];
$this->_sections['ad_loop']['index_next'] = $this->_sections['ad_loop']['index'] + $this->_sections['ad_loop']['step'];
$this->_sections['ad_loop']['first']      = ($this->_sections['ad_loop']['iteration'] == 1);
$this->_sections['ad_loop']['last']       = ($this->_sections['ad_loop']['iteration'] == $this->_sections['ad_loop']['total']);
?>
    <?php if ($this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_views'] == "" || $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_views'] == 0): ?>
      <?php $this->assign('ad_views', "<font style='color: #AAAAAA;'>---</font>"); ?>
    <?php else: ?>
      <?php $this->assign('ad_views', $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_views']); ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_clicks'] == "" || $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_clicks'] == 0): ?>
      <?php $this->assign('ad_clicks', "<font style='color: #AAAAAA;'>---</font>"); ?>
    <?php else: ?>
      <?php $this->assign('ad_clicks', $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_clicks']); ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_name'] == ""): ?>
      <?php $this->assign('ad_name', "<i>".($this->_tpl_vars['admin_ads12'])."</i>"); ?>
    <?php else: ?>
      <?php $this->assign('ad_name', $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_name']); ?>
    <?php endif; ?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "background1,background2"), $this);?>
'>
    <td class='item'><?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_id']; ?>
&nbsp;</td>
    <td class='item'><?php echo $this->_tpl_vars['ad_name']; ?>
&nbsp;</td>
    <td class='item' nowrap='nowrap' align='center'><?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_status']; ?>
&nbsp;</td>
    <td class='item' align='center'><?php echo $this->_tpl_vars['ad_views']; ?>
&nbsp;</td>
    <td class='item' align='center'><?php echo $this->_tpl_vars['ad_clicks']; ?>
&nbsp;</td>
    <td class='item' align='center'><?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_ctr']; ?>
&nbsp;</td>
    <td class='item' nowrap='nowrap'>
      [ <a href='admin_ads_edit.php?ad_id=<?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_id']; ?>
'><?php echo $this->_tpl_vars['admin_ads13']; ?>
</a> ] 
      <?php if ($this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_paused'] == 0): ?>
        [ <a href='admin_ads.php?task=pause&ad_id=<?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_id']; ?>
'><?php echo $this->_tpl_vars['admin_ads14']; ?>
</a> ] 
      <?php elseif ($this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_paused'] == 1): ?>
        [ <a href='admin_ads.php?task=unpause&ad_id=<?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_id']; ?>
'><?php echo $this->_tpl_vars['admin_ads15']; ?>
</a> ] 
      <?php endif; ?>
      [ <a href='admin_ads.php?task=confirm&ad_id=<?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_id']; ?>
'><?php echo $this->_tpl_vars['admin_ads16']; ?>
</a> ]
    </td>
  <?php endfor; endif; ?>
  <?php if ($this->_tpl_vars['ads_total'] == 0): ?>
    <tr>
    <td colspan='6' class='stat2' align='center'>
      <?php echo $this->_tpl_vars['admin_ads17']; ?>

    </td>
    </tr>
  <?php endif; ?>
</table>

</td>
</tr>
</table>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>