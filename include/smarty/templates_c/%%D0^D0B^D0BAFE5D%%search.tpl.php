<?php /* Smarty version 2.6.14, created on 2012-03-03 02:18:53
         compiled from search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'search.tpl', 67, false),array('function', 'cycle', 'search.tpl', 89, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<img src='./images/icons/search48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['search1']; ?>
</div>
<div><?php echo $this->_tpl_vars['search2']; ?>
</div>

<br><br>

<form action='search.php' name='search_form' method='post'>
<table cellpadding='0' cellspacing='0' align='center'>
<tr>
<td class='search'>
  <table cellpadding='0' cellspacing='0' align='center'>
  <tr>
  <td><?php echo $this->_tpl_vars['search3']; ?>
</td>
  <td>&nbsp;<input type='text' size='30' class='text' name='search_text' value='<?php echo $this->_tpl_vars['search_text']; ?>
' maxlength='100'></td>
  <td>
    &nbsp;<input type='submit' class='button' value='<?php echo $this->_tpl_vars['search4']; ?>
'>
    <input type='hidden' name='task' value='dosearch'>
    <input type='hidden' name='t' value='0'>
  </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td colspan='2'>&nbsp;<a href='search_advanced.php'><?php echo $this->_tpl_vars['search5']; ?>
</a></td>
  </tr>
  </table>
</div>
</form>
</td>
</tr>
</table>

<br>

<?php if ($this->_tpl_vars['search_text'] != ""): ?>

  <?php if ($this->_tpl_vars['is_results'] == 0): ?>

    <table cellpadding='0' cellspacing='0' align='center'>
    <tr>
    <td class='result'>
      <img src='./images/icons/bulb16.gif' class='icon'>
      <?php echo $this->_tpl_vars['search6']; ?>
 "<b><?php echo $this->_tpl_vars['search_text']; ?>
</b>" <?php echo $this->_tpl_vars['search7']; ?>

    </td>
    </tr>
    </table>

  <?php else: ?>


        <table class='tabs' cellpadding='0' cellspacing='0'>
    <tr>
    <td class='tab0'>&nbsp;</td>
      <?php unset($this->_sections['search_loop']);
$this->_sections['search_loop']['name'] = 'search_loop';
$this->_sections['search_loop']['loop'] = is_array($_loop=$this->_tpl_vars['search_objects']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['search_loop']['show'] = true;
$this->_sections['search_loop']['max'] = $this->_sections['search_loop']['loop'];
$this->_sections['search_loop']['step'] = 1;
$this->_sections['search_loop']['start'] = $this->_sections['search_loop']['step'] > 0 ? 0 : $this->_sections['search_loop']['loop']-1;
if ($this->_sections['search_loop']['show']) {
    $this->_sections['search_loop']['total'] = $this->_sections['search_loop']['loop'];
    if ($this->_sections['search_loop']['total'] == 0)
        $this->_sections['search_loop']['show'] = false;
} else
    $this->_sections['search_loop']['total'] = 0;
if ($this->_sections['search_loop']['show']):

            for ($this->_sections['search_loop']['index'] = $this->_sections['search_loop']['start'], $this->_sections['search_loop']['iteration'] = 1;
                 $this->_sections['search_loop']['iteration'] <= $this->_sections['search_loop']['total'];
                 $this->_sections['search_loop']['index'] += $this->_sections['search_loop']['step'], $this->_sections['search_loop']['iteration']++):
$this->_sections['search_loop']['rownum'] = $this->_sections['search_loop']['iteration'];
$this->_sections['search_loop']['index_prev'] = $this->_sections['search_loop']['index'] - $this->_sections['search_loop']['step'];
$this->_sections['search_loop']['index_next'] = $this->_sections['search_loop']['index'] + $this->_sections['search_loop']['step'];
$this->_sections['search_loop']['first']      = ($this->_sections['search_loop']['iteration'] == 1);
$this->_sections['search_loop']['last']       = ($this->_sections['search_loop']['iteration'] == $this->_sections['search_loop']['total']);
?>
        <td class='tab<?php if ($this->_tpl_vars['t'] == $this->_tpl_vars['search_objects'][$this->_sections['search_loop']['index']]['search_type']): ?>1<?php else: ?>2<?php endif; ?>' NOWRAP><?php if ($this->_tpl_vars['search_objects'][$this->_sections['search_loop']['index']]['search_total'] == 0):  echo $this->_tpl_vars['search_objects'][$this->_sections['search_loop']['index']]['search_total']; ?>
 <?php echo $this->_tpl_vars['search_objects'][$this->_sections['search_loop']['index']]['search_item'];  else: ?><a href='search.php?task=dosearch&search_text=<?php echo $this->_tpl_vars['url_search']; ?>
&t=<?php echo $this->_tpl_vars['search_objects'][$this->_sections['search_loop']['index']]['search_type']; ?>
'><?php echo $this->_tpl_vars['search_objects'][$this->_sections['search_loop']['index']]['search_total']; ?>
 <?php echo $this->_tpl_vars['search_objects'][$this->_sections['search_loop']['index']]['search_item']; ?>
</a><?php endif; ?></td>
        <td class='tab'>&nbsp;</td>
      <?php endfor; endif; ?>
      <td class='tab3'>&nbsp;</td>
    </tr>
    </table>

    <div class='search_results'>

            <?php if ($this->_tpl_vars['p'] != 1): ?><a href='search.php?task=dosearch&search_text=<?php echo $this->_tpl_vars['url_search']; ?>
&t=<?php echo $this->_tpl_vars['t']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['search14']; ?>
</a> &nbsp;|&nbsp;&nbsp;<?php endif; ?>
      <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
        <b><?php echo $this->_tpl_vars['search15']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['search16']; ?>
 <?php echo $this->_tpl_vars['total_results']; ?>
 <?php echo $this->_tpl_vars['search17']; ?>
</b> (<?php echo $this->_tpl_vars['search_time']; ?>
 <?php echo $this->_tpl_vars['search18']; ?>
) 
      <?php else: ?>
        <b><?php echo $this->_tpl_vars['search15']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 - <?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['search16']; ?>
 <?php echo $this->_tpl_vars['total_results']; ?>
 <?php echo $this->_tpl_vars['search17']; ?>
</b> (<?php echo $this->_tpl_vars['search_time']; ?>
 <?php echo $this->_tpl_vars['search18']; ?>
) 
      <?php endif; ?>
      <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?>&nbsp;&nbsp;|&nbsp; <a href='search.php?task=dosearch&search_text=<?php echo $this->_tpl_vars['url_search']; ?>
&t=<?php echo $this->_tpl_vars['t']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['search19']; ?>
 &#187;</a><?php endif; ?>

      <br><br>

            <?php unset($this->_sections['result_loop']);
$this->_sections['result_loop']['name'] = 'result_loop';
$this->_sections['result_loop']['loop'] = is_array($_loop=$this->_tpl_vars['results']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['result_loop']['show'] = true;
$this->_sections['result_loop']['max'] = $this->_sections['result_loop']['loop'];
$this->_sections['result_loop']['step'] = 1;
$this->_sections['result_loop']['start'] = $this->_sections['result_loop']['step'] > 0 ? 0 : $this->_sections['result_loop']['loop']-1;
if ($this->_sections['result_loop']['show']) {
    $this->_sections['result_loop']['total'] = $this->_sections['result_loop']['loop'];
    if ($this->_sections['result_loop']['total'] == 0)
        $this->_sections['result_loop']['show'] = false;
} else
    $this->_sections['result_loop']['total'] = 0;
if ($this->_sections['result_loop']['show']):

            for ($this->_sections['result_loop']['index'] = $this->_sections['result_loop']['start'], $this->_sections['result_loop']['iteration'] = 1;
                 $this->_sections['result_loop']['iteration'] <= $this->_sections['result_loop']['total'];
                 $this->_sections['result_loop']['index'] += $this->_sections['result_loop']['step'], $this->_sections['result_loop']['iteration']++):
$this->_sections['result_loop']['rownum'] = $this->_sections['result_loop']['iteration'];
$this->_sections['result_loop']['index_prev'] = $this->_sections['result_loop']['index'] - $this->_sections['result_loop']['step'];
$this->_sections['result_loop']['index_next'] = $this->_sections['result_loop']['index'] + $this->_sections['result_loop']['step'];
$this->_sections['result_loop']['first']      = ($this->_sections['result_loop']['iteration'] == 1);
$this->_sections['result_loop']['last']       = ($this->_sections['result_loop']['iteration'] == $this->_sections['result_loop']['total']);
?>
	
		<?php if ($this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_icon'] != ''): ?>
	  <?php $this->assign('result_icon', $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_icon']); ?>
	<?php elseif ($this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_user'] != ''): ?>
	  <?php $this->assign('result_icon', $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_user']->user_photo('./images/nophoto.gif')); ?>
	<?php else: ?>
	  <?php $this->assign('result_icon', './images/icons/search_profile22.gif'); ?>
	<?php endif; ?>

	<div class='search_result<?php echo smarty_function_cycle(array('values' => "1,2"), $this);?>
'>
	<table cellpadding='0' cellspacing='0'>
        <tr>
        <td valign='top' style='padding-right: 3px;'>
	  <div style='width: 90px; text-align: center;'><a href="<?php echo $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_url']; ?>
" class="title"><img src='<?php echo $this->_tpl_vars['result_icon']; ?>
' class='photo' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['result_icon'],'80','80','w'); ?>
' border='0'></a></div>
	</td>
	<td valign='top'>
          <div class='search_result_text'>
            <a href="<?php echo $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_url']; ?>
" class="title"><?php echo $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_name']; ?>
</a>
            <div class='search_result_text2'><?php echo $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_desc']; ?>
</div>
	    <?php if ($this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_online'] == 1): ?><div style='margin-top: 5px;'><img src='./images/icons/online16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['search11']; ?>
</div><?php endif; ?>
          </div>
	</td>
	</tr>
	</table>
	</div>

      <?php endfor; endif; ?>

            <br>
      <?php if ($this->_tpl_vars['p'] != 1): ?><a href='search.php?task=dosearch&search_text=<?php echo $this->_tpl_vars['url_search']; ?>
&t=<?php echo $this->_tpl_vars['t']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['search14']; ?>
</a> &nbsp;|&nbsp;&nbsp;<?php endif; ?>
      <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
        <b><?php echo $this->_tpl_vars['search15']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['search16']; ?>
 <?php echo $this->_tpl_vars['total_results']; ?>
 <?php echo $this->_tpl_vars['search17']; ?>
</b> (<?php echo $this->_tpl_vars['search_time']; ?>
 <?php echo $this->_tpl_vars['search18']; ?>
) 
      <?php else: ?>
        <b><?php echo $this->_tpl_vars['search15']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 - <?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['search16']; ?>
 <?php echo $this->_tpl_vars['total_results']; ?>
 <?php echo $this->_tpl_vars['search17']; ?>
</b> (<?php echo $this->_tpl_vars['search_time']; ?>
 <?php echo $this->_tpl_vars['search18']; ?>
) 
      <?php endif; ?>
      <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?>&nbsp;&nbsp;|&nbsp; <a href='search.php?task=dosearch&search_text=<?php echo $this->_tpl_vars['url_search']; ?>
&t=<?php echo $this->_tpl_vars['t']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['search19']; ?>
 &#187;</a><?php endif; ?>


    </div>
  <?php endif; ?>
<?php endif; ?>


<?php echo '
<script language="JavaScript">
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
function windowonload() { document.search_form.search_text.focus(); } 
// -->
'; ?>

</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>