<?php /* Smarty version 2.6.14, created on 2012-03-03 01:39:50
         compiled from admin_announcements.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'admin_announcements.tpl', 27, false),array('modifier', 'truncate', 'admin_announcements.tpl', 30, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<?php if ($this->_tpl_vars['task'] == 'main'): ?>
  <h2><?php echo $this->_tpl_vars['admin_announcements1']; ?>
</h2>
  <?php echo $this->_tpl_vars['admin_announcements2']; ?>

  <br><br>
  <b><a href='admin_announcements.php?task=post&type=email'><?php echo $this->_tpl_vars['admin_announcements3']; ?>
</a></b>
  <br><?php echo $this->_tpl_vars['admin_announcements4']; ?>

  <br><br>
  <b><a href='admin_announcements.php?task=post&type=news'><?php echo $this->_tpl_vars['admin_announcements5']; ?>
</a></b>
  <br><?php echo $this->_tpl_vars['admin_announcements6']; ?>


  <br><br>

    <?php if ($this->_tpl_vars['news_total'] > 0): ?>
    <table cellpadding='0' cellspacing='0' class='list'>
    <tr>
    <td class='header' width='10'><?php echo $this->_tpl_vars['admin_announcements7']; ?>
</td>
    <td class='header' width='80%'><?php echo $this->_tpl_vars['admin_announcements8']; ?>
</td>
    <td class='header' width='50'><?php echo $this->_tpl_vars['admin_announcements9']; ?>
</td>
    </tr>
    <?php unset($this->_sections['news_loop']);
$this->_sections['news_loop']['name'] = 'news_loop';
$this->_sections['news_loop']['loop'] = is_array($_loop=$this->_tpl_vars['news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news_loop']['show'] = true;
$this->_sections['news_loop']['max'] = $this->_sections['news_loop']['loop'];
$this->_sections['news_loop']['step'] = 1;
$this->_sections['news_loop']['start'] = $this->_sections['news_loop']['step'] > 0 ? 0 : $this->_sections['news_loop']['loop']-1;
if ($this->_sections['news_loop']['show']) {
    $this->_sections['news_loop']['total'] = $this->_sections['news_loop']['loop'];
    if ($this->_sections['news_loop']['total'] == 0)
        $this->_sections['news_loop']['show'] = false;
} else
    $this->_sections['news_loop']['total'] = 0;
if ($this->_sections['news_loop']['show']):

            for ($this->_sections['news_loop']['index'] = $this->_sections['news_loop']['start'], $this->_sections['news_loop']['iteration'] = 1;
                 $this->_sections['news_loop']['iteration'] <= $this->_sections['news_loop']['total'];
                 $this->_sections['news_loop']['index'] += $this->_sections['news_loop']['step'], $this->_sections['news_loop']['iteration']++):
$this->_sections['news_loop']['rownum'] = $this->_sections['news_loop']['iteration'];
$this->_sections['news_loop']['index_prev'] = $this->_sections['news_loop']['index'] - $this->_sections['news_loop']['step'];
$this->_sections['news_loop']['index_next'] = $this->_sections['news_loop']['index'] + $this->_sections['news_loop']['step'];
$this->_sections['news_loop']['first']      = ($this->_sections['news_loop']['iteration'] == 1);
$this->_sections['news_loop']['last']       = ($this->_sections['news_loop']['iteration'] == $this->_sections['news_loop']['total']);
?>
      <tr class='<?php echo smarty_function_cycle(array('values' => "background1,background2"), $this);?>
'>
      <td class='item' valign='top'><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_id']; ?>
</td>
      <td class='item'>
        <div><b><?php if ($this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_subject'] != ""):  echo ((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_subject'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, "...", true) : smarty_modifier_truncate($_tmp, 50, "...", true));  else: ?><i><?php echo $this->_tpl_vars['admin_announcements10']; ?>
</i><?php endif; ?></b></div>
        <div><?php if ($this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_date'] != ""):  echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_date'];  else: ?><i><?php echo $this->_tpl_vars['admin_announcements11']; ?>
</i><?php endif; ?></div>
        <br><div><?php echo ((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_body'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 300, "...", true) : smarty_modifier_truncate($_tmp, 300, "...", true)); ?>
</div>
      </td>
      <td class='item' valign='top' nowrap='nowrap' align='right'>
        [ <a href='admin_announcements.php?task=post&type=news&announcement_id=<?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_id']; ?>
'><?php echo $this->_tpl_vars['admin_announcements12']; ?>
</a> ]
        <?php if ($this->_sections['news_loop']['last'] != true): ?><br>[ <a href='admin_announcements.php?task=moveup&type=news&announcement_id=<?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_id']; ?>
'><?php echo $this->_tpl_vars['admin_announcements13']; ?>
</a> ]<?php endif; ?>
        <br>[ <a href='admin_announcements.php?task=dodelete&type=news&announcement_id=<?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_id']; ?>
'><?php echo $this->_tpl_vars['admin_announcements14']; ?>
</a> ]
      </td>
      </tr>
    <?php endfor; endif; ?>
    </table>
  <?php endif; ?>
<?php endif; ?>




<?php if ($this->_tpl_vars['task'] == 'post' && $this->_tpl_vars['type'] == 'news'): ?>
  <h2><?php echo $this->_tpl_vars['admin_announcements15']; ?>
</h2>
  <?php echo $this->_tpl_vars['admin_announcements16']; ?>

  <br><br>
  <form action='admin_announcements.php' method='post'>
  <b><?php echo $this->_tpl_vars['admin_announcements17']; ?>
</b>
  <br><input type='text' name='date' size='50' class='text' maxlength='200' value='<?php echo $this->_tpl_vars['item_date']; ?>
'>
  <br><?php echo $this->_tpl_vars['admin_announcements18']; ?>

  <br><br>
  <b><?php echo $this->_tpl_vars['admin_announcements19']; ?>
</b>
  <br><input type='text' name='subject' size='50' class='text' maxlength='200' value='<?php echo $this->_tpl_vars['item_subject']; ?>
'>
  <br><br>
  <b><?php echo $this->_tpl_vars['admin_announcements8']; ?>
</b> <?php echo $this->_tpl_vars['admin_announcements20']; ?>

  <br><textarea name='body' class='text' rows='7' cols='80'><?php echo $this->_tpl_vars['item_body']; ?>
</textarea>
  <br><br>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_announcements21']; ?>
'>&nbsp;
    <input type='hidden' name='task' value='dopost'>
    <input type='hidden' name='type' value='news'>
    <input type='hidden' name='announcement_id' value='<?php echo $this->_tpl_vars['announcement_id']; ?>
'>
    </form>
  </td>
  <td>
    <form action='admin_announcements.php' method='post'>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_announcements22']; ?>
'>
    </form>
  </td>
  </tr>
  </table>
<?php endif; ?>




<?php if ($this->_tpl_vars['task'] == 'post' && $this->_tpl_vars['type'] == 'email'): ?>
  <h2><?php echo $this->_tpl_vars['admin_announcements3']; ?>
</h2>
  <?php echo $this->_tpl_vars['admin_announcements23']; ?>

  <br><br>

  <?php if ($this->_tpl_vars['is_error'] == 1): ?>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td class='error'><img src='../images/error.gif' border='0' class='icon2'><?php echo $this->_tpl_vars['error_msg']; ?>
</td>
    </tr>
    </table>
    <br>
  <?php endif; ?>

  <table cellpadding='5' cellspacing='0'>
  <form action='admin_announcements.php' method='POST'>
  <tr>
  <td align='right'><b><?php echo $this->_tpl_vars['admin_announcements24']; ?>
</b></td>
  <td><input type='text' class='text' name='from' size='40' value='<?php echo $this->_tpl_vars['em_from']; ?>
'></td>
  </tr>
  <tr>
  <td align='right'><b><?php echo $this->_tpl_vars['admin_announcements19']; ?>
</b></td>
  <td><input type='text' class='text' name='subject' size='40' value='<?php echo $this->_tpl_vars['em_sub']; ?>
'></td>
  </tr>
  <tr>
  <td align='right' valign='top'><b><?php echo $this->_tpl_vars['admin_announcements8']; ?>
</b></td>
  <td><textarea name='message' class='text' rows='8' cols='80'><?php echo $this->_tpl_vars['em_mess']; ?>
</textarea></td>
  </tr>
  <tr>
  <td align='right' nowrap='nowrap'><b><?php echo $this->_tpl_vars['admin_announcements25']; ?>
</b></td>
  <td nowrap='nowrap'>
  <select class='text' name='emails_at_a_time'>
  <option value='1'<?php if ($this->_tpl_vars['emails_at_a_time'] == 1): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['admin_announcements35']; ?>
</option>
  <option value='2'<?php if ($this->_tpl_vars['emails_at_a_time'] == 2): ?> selected='selected'<?php endif; ?>>2 <?php echo $this->_tpl_vars['admin_announcements26']; ?>
</option>
  <option value='3'<?php if ($this->_tpl_vars['emails_at_a_time'] == 3): ?> selected='selected'<?php endif; ?>>3 <?php echo $this->_tpl_vars['admin_announcements26']; ?>
</option>
  <option value='4'<?php if ($this->_tpl_vars['emails_at_a_time'] == 4): ?> selected='selected'<?php endif; ?>>4 <?php echo $this->_tpl_vars['admin_announcements26']; ?>
</option>
  <option value='5'<?php if ($this->_tpl_vars['emails_at_a_time'] == 5): ?> selected='selected'<?php endif; ?>>5 <?php echo $this->_tpl_vars['admin_announcements26']; ?>
</option>
  </select>
  <div>
  </td>
  </tr>

    <?php $this->assign('subnets_total', $this->_tpl_vars['subnets_total']+1); ?>
  <?php if ($this->_tpl_vars['levels_total'] > 10 || $this->_tpl_vars['subnets_total'] > 10): ?>
    <?php $this->assign('options_to_show', '10'); ?>
  <?php elseif ($this->_tpl_vars['levels_total'] > $this->_tpl_vars['subnets_total']): ?>
    <?php $this->assign('options_to_show', $this->_tpl_vars['levels_total']); ?>
  <?php elseif ($this->_tpl_vars['levels_total'] < $this->_tpl_vars['subnets_total']): ?>
    <?php $this->assign('options_to_show', $this->_tpl_vars['subnets_total']); ?>
  <?php elseif ($this->_tpl_vars['levels_total'] == $this->_tpl_vars['subnets_total']): ?>
    <?php $this->assign('options_to_show', $this->_tpl_vars['levels_total']); ?>
  <?php endif; ?>

  <tr>
  <td align='right' valign='top'><b><?php echo $this->_tpl_vars['admin_announcements38']; ?>
</b></td>
  <td valign='top'>
    <?php echo $this->_tpl_vars['admin_announcements39']; ?>

    <br><br>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td><?php echo $this->_tpl_vars['admin_announcements40']; ?>
</td>
    <td style='padding-left: 10px;'><?php echo $this->_tpl_vars['admin_announcements41']; ?>
</td>
    </tr>
    <tr>
    <td>
      <select size='<?php echo $this->_tpl_vars['options_to_show']; ?>
' class='text' name='levels[]' multiple='multiple' style='width: 300px;'>
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
        <option value='<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'<?php if ($this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_selected'] == 1): ?> selected='selected'<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 75, "...", true) : smarty_modifier_truncate($_tmp, 75, "...", true));  if ($this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_default'] == 1): ?> <?php echo $this->_tpl_vars['admin_announcements42'];  endif; ?></option>
      <?php endfor; endif; ?>
      </select>
    </td>
    <td style='padding-left: 10px;'>
      <select size='<?php echo $this->_tpl_vars['options_to_show']; ?>
' class='text' name='subnets[]' multiple='multiple' style='width: 300px;'>
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
        <option value='<?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
'<?php if ($this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_selected'] == 1): ?> selected='selected'<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 75, "...", true) : smarty_modifier_truncate($_tmp, 75, "...", true)); ?>
</option>
      <?php endfor; endif; ?>
      </select>
    </td>
    </tr>
    </table>
  </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td>
      <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_announcements27']; ?>
'>&nbsp;
      <input type='hidden' name='task' value='dosend'>
      <input type='hidden' name='type' value='email'>
      </form>
    </td>
    <td>
      <form action='admin_announcements.php' method='post'>
      <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_announcements22']; ?>
'>
      </form>
    </td>
    </tr>
    </table>
  </td>
  </tr>
  </table>
<?php endif; ?>




<?php if ($this->_tpl_vars['task'] == 'dosend' && $this->_tpl_vars['type'] == 'email'): ?>
  <?php if ($this->_tpl_vars['totalinset'] < $this->_tpl_vars['emails_at_a_time']): ?>

    <h2><?php echo $this->_tpl_vars['admin_announcements28']; ?>
</h2>
    <?php echo $this->_tpl_vars['admin_announcements29']; ?>

    <br><br>
    <form action='admin_announcements.php' method='post'>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_announcements30']; ?>
'>
    </form>

  <?php else: ?>

    <?php $this->assign('startnum', $this->_tpl_vars['start1']-1); ?>
    <?php $this->assign('finishnum', $this->_tpl_vars['finish1']-1); ?>

    <h2><?php echo $this->_tpl_vars['admin_announcements31']; ?>
</h2>
    <?php echo $this->_tpl_vars['admin_announcements32']; ?>
 <b>#<?php echo $this->_tpl_vars['startnum']; ?>
 - #<?php echo $this->_tpl_vars['finishnum']; ?>
 <?php echo $this->_tpl_vars['admin_announcements43']; ?>
 <?php echo $this->_tpl_vars['total']; ?>
</b><br>
    <?php echo $this->_tpl_vars['admin_announcements33']; ?>

    <br><br>
    <form action='admin_announcements.php' name='nextset' method='POST'>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_announcements34']; ?>
'>
    <input type='hidden' name='start' value='<?php echo $this->_tpl_vars['finish']; ?>
'>
    <input type='hidden' name='from' value='<?php echo $this->_tpl_vars['em_from']; ?>
'>
    <input type='hidden' name='subject' value='<?php echo $this->_tpl_vars['em_sub']; ?>
'>
    <input type='hidden' name='message' value='<?php echo $this->_tpl_vars['em_mess']; ?>
'>
    <input type='hidden' name='levels' value='<?php echo $this->_tpl_vars['levels']; ?>
'>
    <input type='hidden' name='subnets' value='<?php echo $this->_tpl_vars['subnets']; ?>
'>
    <input type='hidden' name='emails_at_a_time' value='<?php echo $this->_tpl_vars['emails_at_a_time']; ?>
'>
    <input type='hidden' name='task' value='dosend'>
    <input type='hidden' name='type' value='email'>
    <input type='hidden' name='total' value='<?php echo $this->_tpl_vars['total']; ?>
'>
    </form>

    <script language="JavaScript">
    <?php echo '
    <!--
    function SymError() { return true; }
    window.onerror = SymError;
    var SymRealWinOpen = window.open;
    function SymWinOpen(url, name, attributes) { return (new Object()); }
    window.open = SymWinOpen;
    appendEvent = function(el, evname, func) {
     if (el.attachEvent) { // IE
       el.attachEvent(\'on\' + evname, func);
     } else if (el.addEventListener) { // Gecko / W3C
       el.addEventListener(evname, func, true);
     } else {
       el[\'on\' + evname] = func;
     }
    };
    appendEvent(window, \'load\', windowonload);
    function windowonload() { 
      setTimeout("document.nextset.submit()", 3000);
    } 
    '; ?>

    // -->
    </script>

  <?php endif; ?>

<?php endif; ?>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>