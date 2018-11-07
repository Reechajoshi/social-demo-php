<?php /* Smarty version 2.6.14, created on 2012-03-13 05:35:58
         compiled from admin_viewusers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'admin_viewusers.tpl', 63, false),array('modifier', 'truncate', 'admin_viewusers.tpl', 66, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_viewusers1']; ?>
</h2>

<br>

<?php if ($this->_tpl_vars['total_users'] == 0): ?>

  <table cellpadding='0' cellspacing='0' width='400' align='center'>
  <tr>
  <td align='center'>
  <div class='box'><b><?php echo $this->_tpl_vars['admin_viewusers21']; ?>
</b></div>
  </td></tr></table>
  <br>

<?php else: ?>

    <?php echo '
  <script language=\'JavaScript\'> 
  <!---
  var checkboxcount = 1;
  function doCheckAll() {
    if(checkboxcount == 0) {
      with (document.items) {
      for (var i=0; i < elements.length; i++) {
      if (elements[i].type == \'checkbox\') {
      elements[i].checked = false;
      }}
      checkboxcount = checkboxcount + 1;
      }
    } else
      with (document.items) {
      for (var i=0; i < elements.length; i++) {
      if (elements[i].type == \'checkbox\') {
      elements[i].checked = true;
      }}
      checkboxcount = checkboxcount - 1;
      }
  }
  // -->
  </script>
  '; ?>

  
  <div class='pages'><?php echo $this->_tpl_vars['total_users']; ?>
 <?php echo $this->_tpl_vars['admin_viewusers16']; ?>
 &nbsp;|&nbsp; <?php echo $this->_tpl_vars['admin_viewusers17']; ?>
 <?php unset($this->_sections['page_loop']);
$this->_sections['page_loop']['name'] = 'page_loop';
$this->_sections['page_loop']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['page_loop']['show'] = true;
$this->_sections['page_loop']['max'] = $this->_sections['page_loop']['loop'];
$this->_sections['page_loop']['step'] = 1;
$this->_sections['page_loop']['start'] = $this->_sections['page_loop']['step'] > 0 ? 0 : $this->_sections['page_loop']['loop']-1;
if ($this->_sections['page_loop']['show']) {
    $this->_sections['page_loop']['total'] = $this->_sections['page_loop']['loop'];
    if ($this->_sections['page_loop']['total'] == 0)
        $this->_sections['page_loop']['show'] = false;
} else
    $this->_sections['page_loop']['total'] = 0;
if ($this->_sections['page_loop']['show']):

            for ($this->_sections['page_loop']['index'] = $this->_sections['page_loop']['start'], $this->_sections['page_loop']['iteration'] = 1;
                 $this->_sections['page_loop']['iteration'] <= $this->_sections['page_loop']['total'];
                 $this->_sections['page_loop']['index'] += $this->_sections['page_loop']['step'], $this->_sections['page_loop']['iteration']++):
$this->_sections['page_loop']['rownum'] = $this->_sections['page_loop']['iteration'];
$this->_sections['page_loop']['index_prev'] = $this->_sections['page_loop']['index'] - $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['index_next'] = $this->_sections['page_loop']['index'] + $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['first']      = ($this->_sections['page_loop']['iteration'] == 1);
$this->_sections['page_loop']['last']       = ($this->_sections['page_loop']['iteration'] == $this->_sections['page_loop']['total']);
 if ($this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['link'] == '1'):  echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page'];  else: ?><a href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</a><?php endif; ?> <?php endfor; endif; ?></div>
  
  <form action='admin_viewusers.php' method='post' name='items'>
  <table cellpadding='0' cellspacing='0' class='list' width='100%'>
  <tr>
  <td class='header' width='10'><input type='checkbox' name='select_all' onClick='javascript:doCheckAll()'></td>
  <td class='header' width='10' style='padding-left: 0px;'><a class='header' href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['i']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['admin_viewusers15']; ?>
</a></td>
  <td class='header'><a class='header' href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['u']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['admin_viewusers3']; ?>
</a></td>
  <td class='header'><a class='header' href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['em']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['admin_viewusers5']; ?>
</a><?php if ($this->_tpl_vars['user_verification'] != 0): ?> (<a class='header' href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['v']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['admin_viewusers22']; ?>
</a>)<?php endif; ?></td>
  <td class='header'><?php echo $this->_tpl_vars['admin_viewusers24']; ?>
</td>
  <td class='header'><?php echo $this->_tpl_vars['admin_viewusers25']; ?>
</td>
  <td class='header' align='center'><?php echo $this->_tpl_vars['admin_viewusers6']; ?>
</td>
  <td class='header'><a class='header' href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['sd']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['admin_viewusers7']; ?>
</a></td>
  <td class='header'><?php echo $this->_tpl_vars['admin_viewusers8']; ?>
</td>
  </tr>
  
  <!-- LOOP THROUGH USERS -->
  <?php unset($this->_sections['user_loop']);
$this->_sections['user_loop']['name'] = 'user_loop';
$this->_sections['user_loop']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['user_loop']['show'] = true;
$this->_sections['user_loop']['max'] = $this->_sections['user_loop']['loop'];
$this->_sections['user_loop']['step'] = 1;
$this->_sections['user_loop']['start'] = $this->_sections['user_loop']['step'] > 0 ? 0 : $this->_sections['user_loop']['loop']-1;
if ($this->_sections['user_loop']['show']) {
    $this->_sections['user_loop']['total'] = $this->_sections['user_loop']['loop'];
    if ($this->_sections['user_loop']['total'] == 0)
        $this->_sections['user_loop']['show'] = false;
} else
    $this->_sections['user_loop']['total'] = 0;
if ($this->_sections['user_loop']['show']):

            for ($this->_sections['user_loop']['index'] = $this->_sections['user_loop']['start'], $this->_sections['user_loop']['iteration'] = 1;
                 $this->_sections['user_loop']['iteration'] <= $this->_sections['user_loop']['total'];
                 $this->_sections['user_loop']['index'] += $this->_sections['user_loop']['step'], $this->_sections['user_loop']['iteration']++):
$this->_sections['user_loop']['rownum'] = $this->_sections['user_loop']['iteration'];
$this->_sections['user_loop']['index_prev'] = $this->_sections['user_loop']['index'] - $this->_sections['user_loop']['step'];
$this->_sections['user_loop']['index_next'] = $this->_sections['user_loop']['index'] + $this->_sections['user_loop']['step'];
$this->_sections['user_loop']['first']      = ($this->_sections['user_loop']['iteration'] == 1);
$this->_sections['user_loop']['last']       = ($this->_sections['user_loop']['iteration'] == $this->_sections['user_loop']['total']);
?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "background1,background2"), $this);?>
'>
    <td class='item' style='padding-right: 0px;'><input type='checkbox' name='item_<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
' value='1'></td>
    <td class='item' style='padding-left: 0px;'><?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
</td>
    <td class='item'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_username']); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a></td>
    <td class='item'><a href='mailto:<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_email']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_email'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a><?php if ($this->_tpl_vars['user_verification'] != 0 & $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_verified'] == 0): ?> (<?php echo $this->_tpl_vars['admin_viewusers4']; ?>
)<?php endif; ?></td>
    <td class='item'><a href='admin_levels_edit.php?level_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_level_id']; ?>
'><?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_level']; ?>
</a></td>
    <td class='item'><a href='admin_subnetworks_edit.php?subnet_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_subnet_id']; ?>
'><?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_subnet']; ?>
</a></td>
    <td class='item' align='center'><?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_enabled']; ?>
</td>
    <td class='item' nowrap='nowrap'><?php echo $this->_tpl_vars['datetime']->cdate($this->_tpl_vars['setting']['setting_dateformat'],$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_signupdate'],$this->_tpl_vars['setting']['setting_timezone'])); ?>
</td>
    <td class='item' nowrap='nowrap'><a href='admin_viewusers_edit.php?user_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
&s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['admin_viewusers11']; ?>
</a> | <a href='admin_viewusers.php?task=confirm&user_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
&s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['admin_viewusers12']; ?>
</a> | <a href='admin_loginasuser.php?user_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
' target='_blank'><?php echo $this->_tpl_vars['admin_viewusers13']; ?>
</a></td>
    </tr>
  <?php endfor; endif; ?>
  </table>

  <table cellpadding='0' cellspacing='0' width='100%'>
  <tr>
  <td>
    <br>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_viewusers23']; ?>
'>
    <input type='hidden' name='task' value='dodelete'>
</form>
  </td>
  <td align='right' valign='top'>
    <div class='pages2'><?php echo $this->_tpl_vars['total_users']; ?>
 <?php echo $this->_tpl_vars['admin_viewusers16']; ?>
 &nbsp;|&nbsp; <?php echo $this->_tpl_vars['admin_viewusers17']; ?>
 <?php unset($this->_sections['page_loop']);
$this->_sections['page_loop']['name'] = 'page_loop';
$this->_sections['page_loop']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['page_loop']['show'] = true;
$this->_sections['page_loop']['max'] = $this->_sections['page_loop']['loop'];
$this->_sections['page_loop']['step'] = 1;
$this->_sections['page_loop']['start'] = $this->_sections['page_loop']['step'] > 0 ? 0 : $this->_sections['page_loop']['loop']-1;
if ($this->_sections['page_loop']['show']) {
    $this->_sections['page_loop']['total'] = $this->_sections['page_loop']['loop'];
    if ($this->_sections['page_loop']['total'] == 0)
        $this->_sections['page_loop']['show'] = false;
} else
    $this->_sections['page_loop']['total'] = 0;
if ($this->_sections['page_loop']['show']):

            for ($this->_sections['page_loop']['index'] = $this->_sections['page_loop']['start'], $this->_sections['page_loop']['iteration'] = 1;
                 $this->_sections['page_loop']['iteration'] <= $this->_sections['page_loop']['total'];
                 $this->_sections['page_loop']['index'] += $this->_sections['page_loop']['step'], $this->_sections['page_loop']['iteration']++):
$this->_sections['page_loop']['rownum'] = $this->_sections['page_loop']['iteration'];
$this->_sections['page_loop']['index_prev'] = $this->_sections['page_loop']['index'] - $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['index_next'] = $this->_sections['page_loop']['index'] + $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['first']      = ($this->_sections['page_loop']['iteration'] == 1);
$this->_sections['page_loop']['last']       = ($this->_sections['page_loop']['iteration'] == $this->_sections['page_loop']['total']);
 if ($this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['link'] == '1'):  echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page'];  else: ?><a href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</a><?php endif; ?> <?php endfor; endif; ?></div>
  </td>
  </tr>
  </table>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>