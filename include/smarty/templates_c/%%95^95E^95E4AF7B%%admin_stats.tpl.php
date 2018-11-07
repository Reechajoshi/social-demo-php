<?php /* Smarty version 2.6.14, created on 2012-03-03 01:39:51
         compiled from admin_stats.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'admin_stats.tpl', 36, false),array('modifier', 'truncate', 'admin_stats.tpl', 74, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_stats1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_stats2']; ?>


<br><br>


<table cellpadding='0' cellspacing='0'>
<tr>
<td width='120' style='text-align: right; padding: 5px; vertical-align: top; line-height: 14pt;' nowrap='nowrap'>

<b><?php echo $this->_tpl_vars['admin_stats10']; ?>
</b><br>
<?php if ($this->_tpl_vars['graph'] == 'summary'): ?><b><?php endif; ?><a href='admin_stats.php?graph=summary'><?php echo $this->_tpl_vars['admin_stats11']; ?>
</a></b><br>
<?php if ($this->_tpl_vars['graph'] == 'visits'): ?><b><?php endif; ?><a href='admin_stats.php?graph=visits'><?php echo $this->_tpl_vars['admin_stats12']; ?>
</a></b><br>
<?php if ($this->_tpl_vars['graph'] == 'logins'): ?><b><?php endif; ?><a href='admin_stats.php?graph=logins'><?php echo $this->_tpl_vars['admin_stats13']; ?>
</a></b><br>
<?php if ($this->_tpl_vars['graph'] == 'signups'): ?><b><?php endif; ?><a href='admin_stats.php?graph=signups'><?php echo $this->_tpl_vars['admin_stats14']; ?>
</a></b><br>
<?php if ($this->_tpl_vars['graph'] == 'friends'): ?><b><?php endif; ?><a href='admin_stats.php?graph=friends'><?php echo $this->_tpl_vars['admin_stats15']; ?>
</a></b><br>

<br>
<b><?php echo $this->_tpl_vars['admin_stats16']; ?>
</b><br>
<?php if ($this->_tpl_vars['graph'] == 'referrers'): ?><b><?php endif; ?><a href='admin_stats.php?graph=referrers'><?php echo $this->_tpl_vars['admin_stats17']; ?>
</a></b><br>
<?php if ($this->_tpl_vars['graph'] == 'space'): ?><b><?php endif; ?><a href='admin_stats.php?graph=space'><?php echo $this->_tpl_vars['admin_stats18']; ?>
</a></b><br>


</td>
<td style='padding: 5px; border: 1px dashed #CCCCCC; text-align: center;' width='550' height='420'>

    <?php if ($this->_tpl_vars['chart'] != ""): ?>

    <br>
    <form action='admin_stats.php' method='get'>
    <table cellpadding='0' cellspacing='0' align='center'>
    <tr>
    <td style='padding-right: 20px;'><a href='admin_stats.php?period=<?php echo $this->_tpl_vars['period']; ?>
&graph=<?php echo $this->_tpl_vars['graph']; ?>
&start=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['start']), $this);?>
'><img src='../images/admin_arrowleft.gif' border='0' class='icon2'><?php echo $this->_tpl_vars['admin_stats41']; ?>
</a></td>
    <td><?php echo $this->_tpl_vars['admin_stats19']; ?>
&nbsp;</td>
    <td>
      <select name='period' class='text'>
      <option value='week'<?php if ($this->_tpl_vars['period'] == 'week'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['admin_stats20']; ?>
</option>
      <option value='month'<?php if ($this->_tpl_vars['period'] == 'month'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['admin_stats21']; ?>
</option>
      <option value='year'<?php if ($this->_tpl_vars['period'] == 'year'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['admin_stats22']; ?>
</option>
      </select>&nbsp;
    </td>
    <td>
      <input type='submit' class='button_small' value='<?php echo $this->_tpl_vars['admin_stats23']; ?>
'>
    </td>
    <td style='padding-left: 20px;'><a href='admin_stats.php?period=<?php echo $this->_tpl_vars['period']; ?>
&graph=<?php echo $this->_tpl_vars['graph']; ?>
&start=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['start']), $this);?>
'><?php echo $this->_tpl_vars['admin_stats42']; ?>
<img src='../images/admin_arrowright.gif' border='0' class='icon' style='margin-left: 5px;'></a></td>
    </tr>
    </table>
    <input type='hidden' name='graph' value='<?php echo $this->_tpl_vars['graph']; ?>
'>
    </form>
    <br>
    <?php echo $this->_tpl_vars['chart']; ?>


    <?php elseif ($this->_tpl_vars['referrers'] != ""): ?>

    <b><?php echo $this->_tpl_vars['admin_stats24']; ?>
</b><br>
    <?php echo $this->_tpl_vars['admin_stats25']; ?>


        <?php if ($this->_tpl_vars['referrers_total'] > 0): ?>
      [ <a href='admin_stats.php?graph=referrers&task=clearrefs'><?php echo $this->_tpl_vars['admin_stats26']; ?>
</a> ]
      <br><br>
      <table cellpadding='0' cellspacing='0' class='stats' style='border-top: none; margin: 10px;'>
      <tr>
      <td class='stat1'><b><?php echo $this->_tpl_vars['admin_stats27']; ?>
</b></td>
      <td class='stat2'><b><?php echo $this->_tpl_vars['admin_stats28']; ?>
</b></td>
      </tr>
      <?php unset($this->_sections['referrers_loop']);
$this->_sections['referrers_loop']['name'] = 'referrers_loop';
$this->_sections['referrers_loop']['loop'] = is_array($_loop=$this->_tpl_vars['referrers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['referrers_loop']['show'] = true;
$this->_sections['referrers_loop']['max'] = $this->_sections['referrers_loop']['loop'];
$this->_sections['referrers_loop']['step'] = 1;
$this->_sections['referrers_loop']['start'] = $this->_sections['referrers_loop']['step'] > 0 ? 0 : $this->_sections['referrers_loop']['loop']-1;
if ($this->_sections['referrers_loop']['show']) {
    $this->_sections['referrers_loop']['total'] = $this->_sections['referrers_loop']['loop'];
    if ($this->_sections['referrers_loop']['total'] == 0)
        $this->_sections['referrers_loop']['show'] = false;
} else
    $this->_sections['referrers_loop']['total'] = 0;
if ($this->_sections['referrers_loop']['show']):

            for ($this->_sections['referrers_loop']['index'] = $this->_sections['referrers_loop']['start'], $this->_sections['referrers_loop']['iteration'] = 1;
                 $this->_sections['referrers_loop']['iteration'] <= $this->_sections['referrers_loop']['total'];
                 $this->_sections['referrers_loop']['index'] += $this->_sections['referrers_loop']['step'], $this->_sections['referrers_loop']['iteration']++):
$this->_sections['referrers_loop']['rownum'] = $this->_sections['referrers_loop']['iteration'];
$this->_sections['referrers_loop']['index_prev'] = $this->_sections['referrers_loop']['index'] - $this->_sections['referrers_loop']['step'];
$this->_sections['referrers_loop']['index_next'] = $this->_sections['referrers_loop']['index'] + $this->_sections['referrers_loop']['step'];
$this->_sections['referrers_loop']['first']      = ($this->_sections['referrers_loop']['iteration'] == 1);
$this->_sections['referrers_loop']['last']       = ($this->_sections['referrers_loop']['iteration'] == $this->_sections['referrers_loop']['total']);
?>
        <tr>
        <td class='stat1' align='center'><?php echo $this->_tpl_vars['referrers'][$this->_sections['referrers_loop']['index']]['referrer_hits']; ?>
</td>
        <td class='stat2'><a href='<?php echo $this->_tpl_vars['referrers'][$this->_sections['referrers_loop']['index']]['referrer_url']; ?>
' target='_blank'><?php echo ((is_array($_tmp=$this->_tpl_vars['referrers'][$this->_sections['referrers_loop']['index']]['referrer_url'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...", true) : smarty_modifier_truncate($_tmp, 60, "...", true)); ?>
</a></td>
        </tr>
      <?php endfor; endif; ?>
      </table>
    <?php else: ?>
          <br><br><i><?php echo $this->_tpl_vars['admin_stats29']; ?>
</i>
    <?php endif; ?>

    <?php elseif ($this->_tpl_vars['totalspace'] != ""): ?>
    <?php echo $this->_tpl_vars['admin_stats30']; ?>

    <br><font class='large_gray'><?php echo $this->_tpl_vars['media']; ?>
 MB</font>
    <br><br><font class='large_gray'>+</font>
    <br><br>
    <?php echo $this->_tpl_vars['admin_stats31']; ?>

    <br><font class='large_gray'><?php echo $this->_tpl_vars['database']; ?>
 MB</font>
    <br><br><font class='large_gray'>=</font>
    <br><br>
    <?php echo $this->_tpl_vars['admin_stats32']; ?>

    <br><font class='large'><?php echo $this->_tpl_vars['totalspace']; ?>
 MB</font>

    <?php else: ?>

    <b><?php echo $this->_tpl_vars['admin_stats33']; ?>
</b><br>
    <?php echo $this->_tpl_vars['admin_stats34']; ?>

    <br><br>

    <table cellpadding='0' cellspacing='0' align='center'>
    <tr>
    <td align='right'><?php echo $this->_tpl_vars['admin_stats35']; ?>
 &nbsp;</td>
    <td><?php echo $this->_tpl_vars['total_users_num']; ?>
 <?php echo $this->_tpl_vars['admin_stats38']; ?>
</td>
    </tr>
    <tr>
    <td align='right'><?php echo $this->_tpl_vars['admin_stats36']; ?>
 &nbsp;</td>
    <td><?php echo $this->_tpl_vars['total_messages_num']; ?>
 <?php echo $this->_tpl_vars['admin_stats39']; ?>
</td>
    </tr>
    <tr>
    <td align='right'><?php echo $this->_tpl_vars['admin_stats37']; ?>
 &nbsp;</td>
    <td><?php echo $this->_tpl_vars['total_comments_num']; ?>
 <?php echo $this->_tpl_vars['admin_stats40']; ?>
</td>
    </tr>
    </table>

  <?php endif; ?>

</td>
</tr>
</table>

<script type="text/javascript" src="../include/js/activate_flash.js"></script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>