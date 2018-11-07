<?php /* Smarty version 2.6.14, created on 2012-03-03 02:12:15
         compiled from user_album_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'user_album_add.tpl', 65, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album.php'><?php echo $this->_tpl_vars['user_album_add2']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_settings.php'><?php echo $this->_tpl_vars['user_album_add3']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'><?php echo $this->_tpl_vars['user_album_add4']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/image48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_album_add5']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_album_add6']; ?>
</div>

<br><br>

<?php if ($this->_tpl_vars['is_error'] != ""): ?>
  <div class='error'><img src='./images/error.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['user_album_add1']; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['total_albums'] >= $this->_tpl_vars['user']->level_info['level_album_maxnum']): ?>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='result'>
    <img src='./images/error.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['user_album_add7']; ?>

  </td></tr></table>
  <br>
  <form action='user_album.php' method='get'>
  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_album_add8']; ?>
'>
  </form>

<?php else: ?>

  <form action='user_album_add.php' method='POST'>
  <b><?php echo $this->_tpl_vars['user_album_add9']; ?>
</b><br>
  <input name='album_title' type='text' class='text' maxlength='50' size='30'>

  <br><br>

  <b><?php echo $this->_tpl_vars['user_album_add10']; ?>
</b><br>
  <textarea name='album_desc' rows='6' cols='50'></textarea>

  <br>

    <?php if ($this->_tpl_vars['user']->level_info['level_album_search'] == 1): ?>
    <br>
    <b><?php echo $this->_tpl_vars['user_album_add11']; ?>
</b><br>
    <table cellpadding='0' cellspacing='0'>
      <tr><td><input type='radio' name='album_search' id='album_search_1' value='1' CHECKED></td><td><label for='album_search_1'><?php echo $this->_tpl_vars['user_album_add12']; ?>
</label></td></tr>
      <tr><td><input type='radio' name='album_search' id='album_search_0' value='0'></td><td><label for='album_search_0'><?php echo $this->_tpl_vars['user_album_add13']; ?>
</label></td></tr>
    </table>
  <?php endif; ?>

    <?php if (count($this->_tpl_vars['privacy_options']) > 1): ?>
    <br>
    <b><?php echo $this->_tpl_vars['user_album_add14']; ?>
</b><br>
    <table cellpadding='0' cellspacing='0'>
    <?php unset($this->_sections['privacy_loop']);
$this->_sections['privacy_loop']['name'] = 'privacy_loop';
$this->_sections['privacy_loop']['loop'] = is_array($_loop=$this->_tpl_vars['privacy_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['privacy_loop']['show'] = true;
$this->_sections['privacy_loop']['max'] = $this->_sections['privacy_loop']['loop'];
$this->_sections['privacy_loop']['step'] = 1;
$this->_sections['privacy_loop']['start'] = $this->_sections['privacy_loop']['step'] > 0 ? 0 : $this->_sections['privacy_loop']['loop']-1;
if ($this->_sections['privacy_loop']['show']) {
    $this->_sections['privacy_loop']['total'] = $this->_sections['privacy_loop']['loop'];
    if ($this->_sections['privacy_loop']['total'] == 0)
        $this->_sections['privacy_loop']['show'] = false;
} else
    $this->_sections['privacy_loop']['total'] = 0;
if ($this->_sections['privacy_loop']['show']):

            for ($this->_sections['privacy_loop']['index'] = $this->_sections['privacy_loop']['start'], $this->_sections['privacy_loop']['iteration'] = 1;
                 $this->_sections['privacy_loop']['iteration'] <= $this->_sections['privacy_loop']['total'];
                 $this->_sections['privacy_loop']['index'] += $this->_sections['privacy_loop']['step'], $this->_sections['privacy_loop']['iteration']++):
$this->_sections['privacy_loop']['rownum'] = $this->_sections['privacy_loop']['iteration'];
$this->_sections['privacy_loop']['index_prev'] = $this->_sections['privacy_loop']['index'] - $this->_sections['privacy_loop']['step'];
$this->_sections['privacy_loop']['index_next'] = $this->_sections['privacy_loop']['index'] + $this->_sections['privacy_loop']['step'];
$this->_sections['privacy_loop']['first']      = ($this->_sections['privacy_loop']['iteration'] == 1);
$this->_sections['privacy_loop']['last']       = ($this->_sections['privacy_loop']['iteration'] == $this->_sections['privacy_loop']['total']);
?>
      <tr><td><input type='radio' name='album_privacy' id='<?php echo $this->_tpl_vars['privacy_options'][$this->_sections['privacy_loop']['index']]['privacy_id']; ?>
' value='<?php echo $this->_tpl_vars['privacy_options'][$this->_sections['privacy_loop']['index']]['privacy_value']; ?>
'<?php if ($this->_sections['privacy_loop']['first']): ?> CHECKED<?php endif; ?>></td><td><label for='<?php echo $this->_tpl_vars['privacy_options'][$this->_sections['privacy_loop']['index']]['privacy_id']; ?>
'><?php echo $this->_tpl_vars['privacy_options'][$this->_sections['privacy_loop']['index']]['privacy_option']; ?>
</label></td></tr>
    <?php endfor; endif; ?>
    </table>
  <?php endif; ?>

    <?php if (count($this->_tpl_vars['comment_options']) > 1): ?>
    <br>
    <b><?php echo $this->_tpl_vars['user_album_add15']; ?>
</b><br>
    <table cellpadding='0' cellspacing='0'>
    <?php unset($this->_sections['comment_loop']);
$this->_sections['comment_loop']['name'] = 'comment_loop';
$this->_sections['comment_loop']['loop'] = is_array($_loop=$this->_tpl_vars['comment_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['comment_loop']['show'] = true;
$this->_sections['comment_loop']['max'] = $this->_sections['comment_loop']['loop'];
$this->_sections['comment_loop']['step'] = 1;
$this->_sections['comment_loop']['start'] = $this->_sections['comment_loop']['step'] > 0 ? 0 : $this->_sections['comment_loop']['loop']-1;
if ($this->_sections['comment_loop']['show']) {
    $this->_sections['comment_loop']['total'] = $this->_sections['comment_loop']['loop'];
    if ($this->_sections['comment_loop']['total'] == 0)
        $this->_sections['comment_loop']['show'] = false;
} else
    $this->_sections['comment_loop']['total'] = 0;
if ($this->_sections['comment_loop']['show']):

            for ($this->_sections['comment_loop']['index'] = $this->_sections['comment_loop']['start'], $this->_sections['comment_loop']['iteration'] = 1;
                 $this->_sections['comment_loop']['iteration'] <= $this->_sections['comment_loop']['total'];
                 $this->_sections['comment_loop']['index'] += $this->_sections['comment_loop']['step'], $this->_sections['comment_loop']['iteration']++):
$this->_sections['comment_loop']['rownum'] = $this->_sections['comment_loop']['iteration'];
$this->_sections['comment_loop']['index_prev'] = $this->_sections['comment_loop']['index'] - $this->_sections['comment_loop']['step'];
$this->_sections['comment_loop']['index_next'] = $this->_sections['comment_loop']['index'] + $this->_sections['comment_loop']['step'];
$this->_sections['comment_loop']['first']      = ($this->_sections['comment_loop']['iteration'] == 1);
$this->_sections['comment_loop']['last']       = ($this->_sections['comment_loop']['iteration'] == $this->_sections['comment_loop']['total']);
?>
      <tr><td><input type='radio' name='album_comments' id='<?php echo $this->_tpl_vars['comment_options'][$this->_sections['comment_loop']['index']]['comment_id']; ?>
' value='<?php echo $this->_tpl_vars['comment_options'][$this->_sections['comment_loop']['index']]['comment_value']; ?>
'<?php if ($this->_sections['comment_loop']['first']): ?> CHECKED<?php endif; ?>></td><td><label for='<?php echo $this->_tpl_vars['comment_options'][$this->_sections['comment_loop']['index']]['comment_id']; ?>
'><?php echo $this->_tpl_vars['comment_options'][$this->_sections['comment_loop']['index']]['comment_option']; ?>
</label></td></tr>
    <?php endfor; endif; ?>
    </table>
  <?php endif; ?>

  <br>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_album_add16']; ?>
'>&nbsp;
    <input type='hidden' name='task' value='doadd'>
    </form>
  </td>
  <td>
    <form action='user_album.php' method='POST'>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_album_add17']; ?>
'>
    </form>
  </td>
  </tr>
  </table>
<?php endif; ?>

</td></tr></table>
  
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>