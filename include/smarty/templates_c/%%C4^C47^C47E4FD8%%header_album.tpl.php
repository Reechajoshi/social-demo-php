<?php /* Smarty version 2.6.14, created on 2012-03-03 02:12:11
         compiled from header_album.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'array', 'header_album.tpl', 5, false),)), $this); ?>
<link rel="stylesheet" href="./templates/styles_album.css" title="stylesheet" type="text/css">  

<?php if ($this->_tpl_vars['user']->level_info['level_album_allow'] != 0): ?>
  <?php echo smarty_function_array(array('var' => 'album_menu','value' => "user_album.php"), $this);?>

  <?php echo smarty_function_array(array('var' => 'album_menu','value' => "album16.gif"), $this);?>

  <?php echo smarty_function_array(array('var' => 'album_menu','value' => $this->_tpl_vars['header_album1']), $this);?>

  <?php echo smarty_function_array(array('var' => 'global_plugin_menu','value' => $this->_tpl_vars['album_menu']), $this);?>
 
<?php endif; ?>