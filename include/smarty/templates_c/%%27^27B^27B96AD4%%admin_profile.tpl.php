<?php /* Smarty version 2.6.14, created on 2012-03-03 01:44:31
         compiled from admin_profile.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_profile1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_profile2']; ?>
 

<br><br>

<table cellpadding='0' cellspacing='0'>
<tr>
<form action='admin_profile_addtab.php' method='POST'>
<td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_profile3']; ?>
'>&nbsp;</td>
<input type='hidden' name='o' value='<?php echo $this->_tpl_vars['o_url']; ?>
'>
</form>
<form action='admin_profile_addfield.php' method='POST'>
<td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_profile4']; ?>
'></td>
<input type='hidden' name='o' value='<?php echo $this->_tpl_vars['o_url']; ?>
'>
</form>
</tr>
</table>

<br>

<?php if ($this->_tpl_vars['num_tabs'] != '0'): ?>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><img src='../images/tab_top.gif' border='0'></td>
  <td style='padding-left: 3px;'>&nbsp;<a href='admin_profile_taborder.php?o=<?php echo $this->_tpl_vars['o_url']; ?>
'><?php echo $this->_tpl_vars['admin_profile5']; ?>
</a>
    - <a href='admin_profile.php?o=<?php echo $this->_tpl_vars['all']; ?>
'>[<?php echo $this->_tpl_vars['admin_profile8']; ?>
]</a> - <a href='admin_profile.php'>[<?php echo $this->_tpl_vars['admin_profile7']; ?>
]</a>
  </td></tr>
  </table>
<?php else: ?>
  <?php echo $this->_tpl_vars['admin_profile6']; ?>

<?php endif; ?>

<?php unset($this->_sections['tab_loop']);
$this->_sections['tab_loop']['name'] = 'tab_loop';
$this->_sections['tab_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tab_loop']['show'] = true;
$this->_sections['tab_loop']['max'] = $this->_sections['tab_loop']['loop'];
$this->_sections['tab_loop']['step'] = 1;
$this->_sections['tab_loop']['start'] = $this->_sections['tab_loop']['step'] > 0 ? 0 : $this->_sections['tab_loop']['loop']-1;
if ($this->_sections['tab_loop']['show']) {
    $this->_sections['tab_loop']['total'] = $this->_sections['tab_loop']['loop'];
    if ($this->_sections['tab_loop']['total'] == 0)
        $this->_sections['tab_loop']['show'] = false;
} else
    $this->_sections['tab_loop']['total'] = 0;
if ($this->_sections['tab_loop']['show']):

            for ($this->_sections['tab_loop']['index'] = $this->_sections['tab_loop']['start'], $this->_sections['tab_loop']['iteration'] = 1;
                 $this->_sections['tab_loop']['iteration'] <= $this->_sections['tab_loop']['total'];
                 $this->_sections['tab_loop']['index'] += $this->_sections['tab_loop']['step'], $this->_sections['tab_loop']['iteration']++):
$this->_sections['tab_loop']['rownum'] = $this->_sections['tab_loop']['iteration'];
$this->_sections['tab_loop']['index_prev'] = $this->_sections['tab_loop']['index'] - $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['index_next'] = $this->_sections['tab_loop']['index'] + $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['first']      = ($this->_sections['tab_loop']['iteration'] == 1);
$this->_sections['tab_loop']['last']       = ($this->_sections['tab_loop']['iteration'] == $this->_sections['tab_loop']['total']);
?>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><a href='admin_profile.php?o=<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_o']; ?>
'><img src='../images/tab_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_status']; ?>
.gif' border='0'></a></td>
  <td style='padding-top: 4px; padding-left: 3px;'>&nbsp;<a href='admin_profile_edittab.php?tab_id=<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_id']; ?>
&o=<?php echo $this->_tpl_vars['o_url']; ?>
'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_name']; ?>
</a></td>
  </tr>
  </table>
    <?php unset($this->_sections['field_loop']);
$this->_sections['field_loop']['name'] = 'field_loop';
$this->_sections['field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_loop']['show'] = true;
$this->_sections['field_loop']['max'] = $this->_sections['field_loop']['loop'];
$this->_sections['field_loop']['step'] = 1;
$this->_sections['field_loop']['start'] = $this->_sections['field_loop']['step'] > 0 ? 0 : $this->_sections['field_loop']['loop']-1;
if ($this->_sections['field_loop']['show']) {
    $this->_sections['field_loop']['total'] = $this->_sections['field_loop']['loop'];
    if ($this->_sections['field_loop']['total'] == 0)
        $this->_sections['field_loop']['show'] = false;
} else
    $this->_sections['field_loop']['total'] = 0;
if ($this->_sections['field_loop']['show']):

            for ($this->_sections['field_loop']['index'] = $this->_sections['field_loop']['start'], $this->_sections['field_loop']['iteration'] = 1;
                 $this->_sections['field_loop']['iteration'] <= $this->_sections['field_loop']['total'];
                 $this->_sections['field_loop']['index'] += $this->_sections['field_loop']['step'], $this->_sections['field_loop']['iteration']++):
$this->_sections['field_loop']['rownum'] = $this->_sections['field_loop']['iteration'];
$this->_sections['field_loop']['index_prev'] = $this->_sections['field_loop']['index'] - $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['index_next'] = $this->_sections['field_loop']['index'] + $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['first']      = ($this->_sections['field_loop']['iteration'] == 1);
$this->_sections['field_loop']['last']       = ($this->_sections['field_loop']['iteration'] == $this->_sections['field_loop']['total']);
?>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td><img src='../images/space_left<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_order']; ?>
.gif' border='0'></td>
    <td><img src='../images/field<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_order']; ?>
.gif' border='0'></td>
    <td style='padding-top: 4px; padding-left: 3px;'>&nbsp;<a href='admin_profile_editfield.php?field_id=<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
&o=<?php echo $this->_tpl_vars['o_url']; ?>
'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
</a><?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_birthday'] == 1): ?> <?php echo $this->_tpl_vars['admin_profile10'];  endif; ?></td>
    </tr>
    </table>
      <?php unset($this->_sections['dep_field_loop']);
$this->_sections['dep_field_loop']['name'] = 'dep_field_loop';
$this->_sections['dep_field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['dep_field_loop']['show'] = true;
$this->_sections['dep_field_loop']['max'] = $this->_sections['dep_field_loop']['loop'];
$this->_sections['dep_field_loop']['step'] = 1;
$this->_sections['dep_field_loop']['start'] = $this->_sections['dep_field_loop']['step'] > 0 ? 0 : $this->_sections['dep_field_loop']['loop']-1;
if ($this->_sections['dep_field_loop']['show']) {
    $this->_sections['dep_field_loop']['total'] = $this->_sections['dep_field_loop']['loop'];
    if ($this->_sections['dep_field_loop']['total'] == 0)
        $this->_sections['dep_field_loop']['show'] = false;
} else
    $this->_sections['dep_field_loop']['total'] = 0;
if ($this->_sections['dep_field_loop']['show']):

            for ($this->_sections['dep_field_loop']['index'] = $this->_sections['dep_field_loop']['start'], $this->_sections['dep_field_loop']['iteration'] = 1;
                 $this->_sections['dep_field_loop']['iteration'] <= $this->_sections['dep_field_loop']['total'];
                 $this->_sections['dep_field_loop']['index'] += $this->_sections['dep_field_loop']['step'], $this->_sections['dep_field_loop']['iteration']++):
$this->_sections['dep_field_loop']['rownum'] = $this->_sections['dep_field_loop']['iteration'];
$this->_sections['dep_field_loop']['index_prev'] = $this->_sections['dep_field_loop']['index'] - $this->_sections['dep_field_loop']['step'];
$this->_sections['dep_field_loop']['index_next'] = $this->_sections['dep_field_loop']['index'] + $this->_sections['dep_field_loop']['step'];
$this->_sections['dep_field_loop']['first']      = ($this->_sections['dep_field_loop']['iteration'] == 1);
$this->_sections['dep_field_loop']['last']       = ($this->_sections['dep_field_loop']['iteration'] == $this->_sections['dep_field_loop']['total']);
?>
      <table cellpadding='0' cellspacing='0'>
      <tr>
      <td><img src='../images/space_left<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_order']; ?>
.gif' border='0'></td>
      <td><img src='../images/space_left<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_order']; ?>
.gif' border='0'></td>
      <td><img src='../images/field_dep<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields'][$this->_sections['dep_field_loop']['index']]['dep_field_order']; ?>
.gif' border='0'></td>
      <td style='padding-top: 4px; padding-left: 3px;'>&nbsp;<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields'][$this->_sections['dep_field_loop']['index']]['option_label']; ?>
 <a href='admin_profile_editdepfield.php?field_id=<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields'][$this->_sections['dep_field_loop']['index']]['dep_field_id']; ?>
&o=<?php echo $this->_tpl_vars['o_url']; ?>
'><?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields'][$this->_sections['dep_field_loop']['index']]['dep_field_title'] != ""):  echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields'][$this->_sections['dep_field_loop']['index']]['dep_field_title'];  else:  echo $this->_tpl_vars['admin_profile9'];  endif; ?></a></td>
      </tr>
      </table>
    <?php endfor; endif; ?>
  <?php endfor; endif; ?>
<?php endfor; endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>