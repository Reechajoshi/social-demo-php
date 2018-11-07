<?php /* Smarty version 2.6.14, created on 2012-03-03 02:41:36
         compiled from user_blog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'user_blog.tpl', 62, false),array('modifier', 'truncate', 'user_blog.tpl', 151, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<img src='./images/blog.jpg' border='0' class='icon_big'>
<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_blog.php'><?php echo $this->_tpl_vars['user_blog1']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_blog_settings.php'><?php echo $this->_tpl_vars['user_blog2']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/blog48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_blog3']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_blog4']; ?>
</div>

<br>

<table cellpadding='0' cellspacing='0'>
<tr>
<td style='padding-right: 10px;'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td class='button' nowrap='nowrap'><a href='user_blog_newentry.php'><img src='./images/icons/newentry16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_blog5']; ?>
</a></td>
  </tr></table>
</td>
<td style='padding-right: 10px;'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td class='button' nowrap='nowrap'><a href="javascript:showhide('blog_search');"><img src='./images/icons/search16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_blog6']; ?>
</a></td>
  </tr></table>
</td>
<td>
  <b><?php echo $this->_tpl_vars['user_blog7']; ?>
 <a href='<?php echo $this->_tpl_vars['url']->url_create('blog',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['url']->url_create('blog',$this->_tpl_vars['user']->user_info['user_username']); ?>
</a></b>
</td>
</tr>
</table>

<br>

<?php if (( $this->_tpl_vars['search'] != "" && $this->_tpl_vars['total_blogentries'] == 0 ) || ( $this->_tpl_vars['search'] == "" && $this->_tpl_vars['total_blogentries'] > 0 ) || ( $this->_tpl_vars['search'] != "" && $this->_tpl_vars['total_blogentries'] > 0 )): ?>
  <form action='user_blog.php' name='searchform' method='POST'>
  <div class='blog_search' id='blog_search' <?php if ($this->_tpl_vars['search'] == ""): ?>style='display: none;'<?php endif; ?>>
    <table cellpadding='0' cellspacing='0' align='center'>
    <tr>
    <td><b><?php echo $this->_tpl_vars['user_blog8']; ?>
</b>&nbsp;&nbsp;</td>
    <td><input type='text' name='search' maxlength='100' size='30' value='<?php echo $this->_tpl_vars['search']; ?>
'>&nbsp;</td>
    <td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_blog26']; ?>
'></td>
    </tr>
    </table>
    <input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'>
    <input type='hidden' name='p' value='<?php echo $this->_tpl_vars['p']; ?>
'>
  </div>
  </form>
<?php endif; ?>

<?php if ($this->_tpl_vars['maxpage'] > 1): ?>
  <div class='center'>
  <?php if ($this->_tpl_vars['p'] != 1): ?><a href='user_blog.php?s=<?php echo $this->_tpl_vars['s']; ?>
&search=<?php echo $this->_tpl_vars['search']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['user_blog9']; ?>
</a><?php else: ?><font class='disabled'>&#171; <?php echo $this->_tpl_vars['user_blog9']; ?>
</font><?php endif; ?>
  <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
    &nbsp;|&nbsp; <?php echo $this->_tpl_vars['user_blog10']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['user_blog11']; ?>
 <?php echo $this->_tpl_vars['total_blogentries']; ?>
 &nbsp;|&nbsp; 
  <?php else: ?>
    &nbsp;|&nbsp; <?php echo $this->_tpl_vars['user_blog12']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
-<?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['user_blog11']; ?>
 <?php echo $this->_tpl_vars['total_blogentries']; ?>
 &nbsp;|&nbsp; 
  <?php endif; ?>
  <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><a href='user_blog.php?s=<?php echo $this->_tpl_vars['s']; ?>
&search=<?php echo $this->_tpl_vars['search']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['user_blog13']; ?>
 &#187;</a><?php else: ?><font class='disabled'><?php echo $this->_tpl_vars['user_blog13']; ?>
 &#187;</font><?php endif; ?>
  </div>
<br>
<?php endif; ?>


<?php echo '
<script language=\'JavaScript\'> 
<!---
var checkboxcount = 1;
function doCheckAll() {
  if(checkboxcount == 0) {
    with (document.entryform) {
    for (var i=0; i < elements.length; i++) {
    if (elements[i].type == \'checkbox\') {
    elements[i].checked = false;
    }}
    checkboxcount = checkboxcount + 1;
    }
  } else
    with (document.entryform) {
    for (var i=0; i < elements.length; i++) {
    if (elements[i].type == \'checkbox\') {
    elements[i].checked = true;
    }}
    checkboxcount = checkboxcount - 1;
  }
}
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
  document.searchform.search.focus(); 
  document.searchform.search.value+=\'\'; 
} 
// -->
</script>
'; ?>


<?php if ($this->_tpl_vars['total_blogentries'] == 0): ?>
  <table cellpadding='0' cellspacing='0' align='center'><tr>
  <td class='result'>
     
        <?php if ($this->_tpl_vars['search'] != ""): ?>
      <img src='./images/icons/bulb16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_blog14']; ?>

    <?php else: ?>
      <img src='./images/icons/bulb16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_blog15']; ?>
 <a href='user_blog_newentry.php'><?php echo $this->_tpl_vars['user_blog16']; ?>
</a> <?php echo $this->_tpl_vars['user_blog17']; ?>

    <?php endif; ?>

  </td></tr></table>

<?php else: ?>

  <form action='user_blog.php' name='entryform' method='post'>
  <table cellpadding='0' cellspacing='0' class='blog_table'>
  <tr>
  <td class='blog_header' width='10'><input type='checkbox' name='select_all' onClick='javascript:doCheckAll()'></td>
  <td class='blog_header'><a href='user_blog.php?search=<?php echo $this->_tpl_vars['search']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&s=<?php echo $this->_tpl_vars['d']; ?>
'><?php echo $this->_tpl_vars['user_blog18']; ?>
</a></td>
  <td class='blog_header'><a href='user_blog.php?search=<?php echo $this->_tpl_vars['search']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&s=<?php echo $this->_tpl_vars['t']; ?>
'><?php echo $this->_tpl_vars['user_blog19']; ?>
</a></td>
  <td class='blog_header'><a href='user_blog.php?search=<?php echo $this->_tpl_vars['search']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&s=<?php echo $this->_tpl_vars['c']; ?>
'><?php echo $this->_tpl_vars['user_blog20']; ?>
</a></td>
  <td class='blog_header'><?php echo $this->_tpl_vars['user_blog27']; ?>
</td>
  </tr>

    <?php unset($this->_sections['blogentry_loop']);
$this->_sections['blogentry_loop']['name'] = 'blogentry_loop';
$this->_sections['blogentry_loop']['loop'] = is_array($_loop=$this->_tpl_vars['blogentries']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['blogentry_loop']['show'] = true;
$this->_sections['blogentry_loop']['max'] = $this->_sections['blogentry_loop']['loop'];
$this->_sections['blogentry_loop']['step'] = 1;
$this->_sections['blogentry_loop']['start'] = $this->_sections['blogentry_loop']['step'] > 0 ? 0 : $this->_sections['blogentry_loop']['loop']-1;
if ($this->_sections['blogentry_loop']['show']) {
    $this->_sections['blogentry_loop']['total'] = $this->_sections['blogentry_loop']['loop'];
    if ($this->_sections['blogentry_loop']['total'] == 0)
        $this->_sections['blogentry_loop']['show'] = false;
} else
    $this->_sections['blogentry_loop']['total'] = 0;
if ($this->_sections['blogentry_loop']['show']):

            for ($this->_sections['blogentry_loop']['index'] = $this->_sections['blogentry_loop']['start'], $this->_sections['blogentry_loop']['iteration'] = 1;
                 $this->_sections['blogentry_loop']['iteration'] <= $this->_sections['blogentry_loop']['total'];
                 $this->_sections['blogentry_loop']['index'] += $this->_sections['blogentry_loop']['step'], $this->_sections['blogentry_loop']['iteration']++):
$this->_sections['blogentry_loop']['rownum'] = $this->_sections['blogentry_loop']['iteration'];
$this->_sections['blogentry_loop']['index_prev'] = $this->_sections['blogentry_loop']['index'] - $this->_sections['blogentry_loop']['step'];
$this->_sections['blogentry_loop']['index_next'] = $this->_sections['blogentry_loop']['index'] + $this->_sections['blogentry_loop']['step'];
$this->_sections['blogentry_loop']['first']      = ($this->_sections['blogentry_loop']['iteration'] == 1);
$this->_sections['blogentry_loop']['last']       = ($this->_sections['blogentry_loop']['iteration'] == $this->_sections['blogentry_loop']['total']);
?>
        <?php if ($this->_tpl_vars['blogentries'][$this->_sections['blogentry_loop']['index']]['blogentry_title'] != ""): ?>
      <?php $this->assign('blogentry_title', ((is_array($_tmp=$this->_tpl_vars['blogentries'][$this->_sections['blogentry_loop']['index']]['blogentry_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, "...", false) : smarty_modifier_truncate($_tmp, 50, "...", false))); ?>
    <?php else: ?>
      <?php $this->assign('blogentry_title', $this->_tpl_vars['user_blog21']); ?>
    <?php endif; ?>
    <tr>
    <td class='blog_entry'><input type='checkbox' name='delete_blogentry_<?php echo $this->_tpl_vars['blogentries'][$this->_sections['blogentry_loop']['index']]['blogentry_id']; ?>
' value='1'></td>
    <td class='blog_entry' nowrap='nowrap'><?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['blogentries'][$this->_sections['blogentry_loop']['index']]['blogentry_date'],$this->_tpl_vars['global_timezone'])); ?>
</td>
    <td class='blog_entry' width='100%'><a href='<?php echo $this->_tpl_vars['url']->url_create('blog_entry',$this->_tpl_vars['user']->user_info['user_username'],$this->_tpl_vars['blogentries'][$this->_sections['blogentry_loop']['index']]['blogentry_id']); ?>
'><img src='./images/icons/blogentry16.gif' class='icon' border='0'></a><a href='<?php echo $this->_tpl_vars['url']->url_create('blog_entry',$this->_tpl_vars['user']->user_info['user_username'],$this->_tpl_vars['blogentries'][$this->_sections['blogentry_loop']['index']]['blogentry_id']); ?>
'><?php echo $this->_tpl_vars['blogentry_title']; ?>
</a> &nbsp;</td>
    <td class='blog_entry' nowrap='nowrap'><a href='user_blog_comments.php?blogentry_id=<?php echo $this->_tpl_vars['blogentries'][$this->_sections['blogentry_loop']['index']]['blogentry_id']; ?>
'><?php echo $this->_tpl_vars['blogentries'][$this->_sections['blogentry_loop']['index']]['total_comments']; ?>
 <?php echo $this->_tpl_vars['user_blog22']; ?>
</a>&nbsp;&nbsp;</td>
    <td class='blog_entry' nowrap='nowrap'><a href='user_blog_editentry.php?blogentry_id=<?php echo $this->_tpl_vars['blogentries'][$this->_sections['blogentry_loop']['index']]['blogentry_id']; ?>
'><?php echo $this->_tpl_vars['user_blog23']; ?>
</a> &nbsp;|&nbsp; <a href='user_blog_deleteentry.php?blogentry_id=<?php echo $this->_tpl_vars['blogentries'][$this->_sections['blogentry_loop']['index']]['blogentry_id']; ?>
'><?php echo $this->_tpl_vars['user_blog24']; ?>
</a> &nbsp;</td>
    </tr>
  <?php endfor; endif; ?>
  </table>

  <br>

  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_blog25']; ?>
'>
  <input type='hidden' name='task' value='delete'>
  <input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'>
  <input type='hidden' name='p' value='<?php echo $this->_tpl_vars['p']; ?>
'>
  </form>
<?php endif; ?>

</td></tr></table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>