<?php /* Smarty version 2.6.14, created on 2012-03-03 02:14:30
         compiled from chat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'rand', 'chat.tpl', 7, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table cellpadding='0' cellspacing='0' align='center'>
<tr>
<td align='center'>

<iframe src='chat_frame.php?nocache=<?php echo ((is_array($_tmp=0)) ? $this->_run_mod_handler('rand', true, $_tmp, 100000) : rand($_tmp, 100000)); ?>
' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' style='border: 1px solid #AAAAAA; width: 600px; height: 500px;'></iframe>

</td>
</tr>
</table>

<br><br>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>