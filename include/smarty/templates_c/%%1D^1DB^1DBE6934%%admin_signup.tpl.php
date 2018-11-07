<?php /* Smarty version 2.6.14, created on 2012-03-03 01:38:32
         compiled from admin_signup.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_signup1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_signup2']; ?>


<br>

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <br>
  <div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['admin_signup35']; ?>
</div>
<?php endif; ?>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_signup3']; ?>
</td></tr>
<tr><form action='admin_signup.php' method='POST'><td class='setting1'>
<?php echo $this->_tpl_vars['admin_signup4']; ?>

</td></tr>

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
  <tr>
  <td class='setting2'>
  <b><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_name']; ?>
</b>
  <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_num_fields'] == 0): ?><br><br><?php echo $this->_tpl_vars['admin_signup5'];  endif; ?>
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
    <table cellpadding='3' cellspacing='0'>
    <tr>
    <td><input type='checkbox' name='field_signup_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' id='field_signup_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' value='1'<?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_signup'] == 1): ?> CHECKED<?php endif; ?>></td>
    <td><label for='field_signup_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
</label></td>
    </tr>
    </table>
  <?php endfor; endif; ?>
  </td>
  </tr>
<?php endfor; endif; ?>

</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_signup8']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_signup36']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='photo' id='photo_1' value='1'<?php if ($this->_tpl_vars['photo'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='photo_1'><?php echo $this->_tpl_vars['admin_signup37']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='photo' id='photo_0' value='0'<?php if ($this->_tpl_vars['photo'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='photo_0'><?php echo $this->_tpl_vars['admin_signup38']; ?>
</label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_signup43']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_signup44']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='enable' id='enable_1' value='1'<?php if ($this->_tpl_vars['enable'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='enable_1'><?php echo $this->_tpl_vars['admin_signup45']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='enable' id='enable_0' value='0'<?php if ($this->_tpl_vars['enable'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='enable_0'><?php echo $this->_tpl_vars['admin_signup46']; ?>
</label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_signup39']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_signup40']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='welcome' id='welcome_1' value='1'<?php if ($this->_tpl_vars['welcome'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='welcome_1'><?php echo $this->_tpl_vars['admin_signup41']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='welcome' id='welcome_0' value='0'<?php if ($this->_tpl_vars['welcome'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='welcome_0'><?php echo $this->_tpl_vars['admin_signup42']; ?>
</label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_signup9']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_signup10']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='invite' id='invite_2' value='2'<?php if ($this->_tpl_vars['invite'] == 2): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_2'><?php echo $this->_tpl_vars['admin_signup11']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='invite' id='invite_1' value='1'<?php if ($this->_tpl_vars['invite'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_1'><?php echo $this->_tpl_vars['admin_signup12']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='invite' id='invite_0' value='0'<?php if ($this->_tpl_vars['invite'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_0'><?php echo $this->_tpl_vars['admin_signup13']; ?>
</label></td></tr>
  </table>
</td></tr>
<tr><td class='setting1'><?php echo $this->_tpl_vars['admin_signup47']; ?>
</td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='invite_checkemail' id='invite_checkemail_1' value='1'<?php if ($this->_tpl_vars['invite_checkemail'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_checkemail_1'><?php echo $this->_tpl_vars['admin_signup48']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='invite_checkemail' id='invite_checkemail_0' value='0'<?php if ($this->_tpl_vars['invite_checkemail'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_checkemail_0'><?php echo $this->_tpl_vars['admin_signup49']; ?>
</label></td></tr>
  </table>
</td></tr>
<tr><td class='setting1'><?php echo $this->_tpl_vars['admin_signup6']; ?>
</td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='text' name='invite_numgiven' size='2' maxlength='3' class='text' value='<?php echo $this->_tpl_vars['invite_numgiven']; ?>
'>&nbsp;</td><td><?php echo $this->_tpl_vars['admin_signup7']; ?>
</td></tr>
  </table>
</td></tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_signup14']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_signup15']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='invitepage' id='invitepage_1' value='1'<?php if ($this->_tpl_vars['invitepage'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invitepage_1'><?php echo $this->_tpl_vars['admin_signup16']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='invitepage' id='invitepage_0' value='0'<?php if ($this->_tpl_vars['invitepage'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invitepage_0'><?php echo $this->_tpl_vars['admin_signup17']; ?>
</label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_signup18']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_signup19']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='verify' id='verify_1' value='1'<?php if ($this->_tpl_vars['verify'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='verify_1'><?php echo $this->_tpl_vars['admin_signup20']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='verify' id='verify_0' value='0'<?php if ($this->_tpl_vars['verify'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='verify_0'><?php echo $this->_tpl_vars['admin_signup21']; ?>
</label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_signup22']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_signup23']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='code' id='code_1' value='1'<?php if ($this->_tpl_vars['code'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='code_1'><?php echo $this->_tpl_vars['admin_signup24']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='code' id='code_0' value='0'<?php if ($this->_tpl_vars['code'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='code_0'><?php echo $this->_tpl_vars['admin_signup25']; ?>
</label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_signup26']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_signup27']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='randpass' id='randpass_1' value='1'<?php if ($this->_tpl_vars['randpass'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='randpass_1'><?php echo $this->_tpl_vars['admin_signup28']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='randpass' id='randpass_0' value='0'<?php if ($this->_tpl_vars['randpass'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='randpass_0'><?php echo $this->_tpl_vars['admin_signup29']; ?>
</label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_signup30']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_signup31']; ?>

</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='tos' id='tos_1' value='1'<?php if ($this->_tpl_vars['tos'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='tos_1'><?php echo $this->_tpl_vars['admin_signup32']; ?>
</label></td></tr>
  <tr><td><input type='radio' name='tos' id='tos_0' value='0'<?php if ($this->_tpl_vars['tos'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='tos_0'><?php echo $this->_tpl_vars['admin_signup33']; ?>
</label></td></tr>
  </table>
<br>
<textarea class='text' name='tostext' rows='5' cols='50' style='width: 100%;'><?php echo $this->_tpl_vars['tostext']; ?>
</textarea>
</td></tr></table>

<br>

<input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_signup34']; ?>
'>
<input type='hidden' name='task' value='dosave'>
</form>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>