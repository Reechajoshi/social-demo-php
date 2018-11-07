<?php /* Smarty version 2.6.14, created on 2012-03-03 01:39:18
         compiled from admin_templates_edit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_templates_edit1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_templates_edit2']; ?>


<br><br>

<?php if ($this->_tpl_vars['error_message'] == ""): ?>
<!-- SHOW EDIT TEMPLATE FORM -->
  <form action='admin_templates_edit.php' method='POST'>
  <textarea name='template_code' rows='40' class='template'><?php echo $this->_tpl_vars['template_code']; ?>
</textarea>
  <br>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_templates_edit3']; ?>
'>&nbsp;</td>
  <input type='hidden' name='task' value='save'>
  <input type='hidden' name='t' value='<?php echo $this->_tpl_vars['filename']; ?>
'>
  </form>
  <form action='admin_templates.php' method='POST'>
  <td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_templates_edit4']; ?>
'></td>
  </tr>
  </table>
<?php else: ?>
<!-- SHOW ERROR -->
  <div class='error'><?php echo $this->_tpl_vars['error_message']; ?>
</div>
  <table cellpadding='0' cellspacing='0'>
  <form action='admin_templates.php' method='POST'>
  <tr>
  <td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_templates_edit10']; ?>
'></td>
  </tr>
  </form>
  </table>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>