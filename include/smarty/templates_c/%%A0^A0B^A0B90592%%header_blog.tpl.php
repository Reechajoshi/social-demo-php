<?php /* Smarty version 2.6.14, created on 2012-03-03 02:16:51
         compiled from header_blog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'array', 'header_blog.tpl', 6, false),)), $this); ?>
<link rel="stylesheet" href="./templates/styles_blog.css" title="stylesheet" type="text/css">  
<script type="text/javascript" src="./include/fckeditor/fckeditor.js"></script>

<?php if ($this->_tpl_vars['user']->level_info['level_blog_allow'] != 0): ?>
  <?php echo smarty_function_array(array('var' => 'blog_menu','value' => "user_blog.php"), $this);?>

  <?php echo smarty_function_array(array('var' => 'blog_menu','value' => "blog16.gif"), $this);?>

  <?php echo smarty_function_array(array('var' => 'blog_menu','value' => $this->_tpl_vars['header_blog1']), $this);?>

  <?php echo smarty_function_array(array('var' => 'global_plugin_menu','value' => $this->_tpl_vars['blog_menu']), $this);?>
 
<?php endif; ?>