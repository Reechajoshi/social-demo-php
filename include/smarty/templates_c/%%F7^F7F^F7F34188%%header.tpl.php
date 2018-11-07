<?php /* Smarty version 2.6.14, created on 2012-03-13 06:51:10
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'array', 'header.tpl', 23, false),)), $this); ?>
<html>
<head>
<title>Philomena Social Networking</title>
<link rel="stylesheet" href="./templates/styles.css" title="stylesheet" type="text/css">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!--[if gte IE 5.5]>
<![if lte IE 6]>
<iframe id="shim" src="" style="position:absolute;display:none;filter:progid:DXImageTransform.Microsoft.Chroma(Color='#ffffff');" scrolling="no" frameborder="0"></iframe>
<iframe id="shim2" src="" style="position:absolute;display:none;filter:progid:DXImageTransform.Microsoft.Chroma(Color='#ffffff');" scrolling="no" frameborder="0"></iframe>
<![endif]>
<![endif]-->

<script type="text/javascript" src="./include/js/tips.js"></script>
<script type="text/javascript" src="./include/js/showhide.js"></script>
<script type="text/javascript" src="./include/js/suggest.js"></script>
<script type="text/javascript" src="./include/js/status.js"></script>

<?php unset($this->_sections['header_loop']);
$this->_sections['header_loop']['name'] = 'header_loop';
$this->_sections['header_loop']['loop'] = is_array($_loop=$this->_tpl_vars['global_plugins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['header_loop']['show'] = true;
$this->_sections['header_loop']['max'] = $this->_sections['header_loop']['loop'];
$this->_sections['header_loop']['step'] = 1;
$this->_sections['header_loop']['start'] = $this->_sections['header_loop']['step'] > 0 ? 0 : $this->_sections['header_loop']['loop']-1;
if ($this->_sections['header_loop']['show']) {
    $this->_sections['header_loop']['total'] = $this->_sections['header_loop']['loop'];
    if ($this->_sections['header_loop']['total'] == 0)
        $this->_sections['header_loop']['show'] = false;
} else
    $this->_sections['header_loop']['total'] = 0;
if ($this->_sections['header_loop']['show']):

            for ($this->_sections['header_loop']['index'] = $this->_sections['header_loop']['start'], $this->_sections['header_loop']['iteration'] = 1;
                 $this->_sections['header_loop']['iteration'] <= $this->_sections['header_loop']['total'];
                 $this->_sections['header_loop']['index'] += $this->_sections['header_loop']['step'], $this->_sections['header_loop']['iteration']++):
$this->_sections['header_loop']['rownum'] = $this->_sections['header_loop']['iteration'];
$this->_sections['header_loop']['index_prev'] = $this->_sections['header_loop']['index'] - $this->_sections['header_loop']['step'];
$this->_sections['header_loop']['index_next'] = $this->_sections['header_loop']['index'] + $this->_sections['header_loop']['step'];
$this->_sections['header_loop']['first']      = ($this->_sections['header_loop']['iteration'] == 1);
$this->_sections['header_loop']['last']       = ($this->_sections['header_loop']['iteration'] == $this->_sections['header_loop']['total']);
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_".($this->_tpl_vars['global_plugins'][$this->_sections['header_loop']['index']]).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endfor; endif; ?> 
<?php echo smarty_function_array(array('var' => 'global_plugin_menu','value' => ''), $this);?>


<style type='text/css'><?php echo $this->_tpl_vars['global_css']; ?>
</style>

</head>
<body>

<table cellpadding='0' cellspacing='0' width='800' align='center'>
<tr>
<td align='center'>

<table cellpadding='0' cellspacing='0' align='left' width='100%'>
<tr>
<td class='topbar1'><img src='/images/philo_logo.gif' border='0' align="left"><br><br></td>
<td class='topbar1'><img src='images/logo.gif' width="245" height="46"></td>
<td class='topbar1' align='right'>
  <form action='search.php' method='POST'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td>Search Friends, Blogs, etc&nbsp;</td>
  <td><input type='text' name='search_text' class='text' size='30'>&nbsp;</td>
  <td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['header2']; ?>
'></td>
  </tr>
  </table>
  <input type='hidden' name='task' value='dosearch'>
  <input type='hidden' name='t' value='0'>
  </form>
</td>
</tr>
<tr>
<td colspan="2" class='topbar2'>
  <a href='home.php' class='top_menu_item'><?php echo $this->_tpl_vars['header3']; ?>
</a>&nbsp;&nbsp;&nbsp;
  <a href='search.php' class='top_menu_item'><?php echo $this->_tpl_vars['header4']; ?>
</a>&nbsp;&nbsp;&nbsp;
<?php if ($this->_tpl_vars['setting']['setting_signup_invite'] != 1): ?>  <a href='invite.php' class='top_menu_item'><?php echo $this->_tpl_vars['header5']; ?>
</a>&nbsp;&nbsp;&nbsp;<?php endif; ?>
  <a href='help.php' class='top_menu_item'><?php echo $this->_tpl_vars['header6']; ?>
</a>
</td>
<td class='topbar2_right'>
  
    <?php if ($this->_tpl_vars['user']->user_exists != 0): ?>
  <?php echo $this->_tpl_vars['header7']; ?>
 <a href='user_home.php' class='top_menu_item'><?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
</a>&nbsp;&nbsp;&nbsp;
  <b><a href='user_logout.php' class='top_menu_item'><?php echo $this->_tpl_vars['header8']; ?>
</a></b>
    <?php else: ?>
  <b><a href='signup.php' class='top_menu_item'><?php echo $this->_tpl_vars['header9']; ?>
</a>&nbsp;&nbsp;&nbsp;
    <a href='login.php' class='top_menu_item'><?php echo $this->_tpl_vars['header10']; ?>
</a></b>
  <?php endif; ?>
</td>
</tr>

<?php if ($this->_tpl_vars['user']->user_exists != 0): ?>
  <tr>
  <td class='menu' colspan='3'>

    <table cellpadding='0' cellspacing='0'>
    <tr>

        <td class='menu_item'>
      <a href='user_home.php' class='menu_item'><img src='./images/icons/menu_home.gif' border='0' class='icon'  ><?php echo $this->_tpl_vars['header11']; ?>
</a> 
    </td>

        <td class='menu_item'>
      <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
' class='menu_item'><img src='./images/icons/menu_profile.gif' border='0' class='icon'><?php echo $this->_tpl_vars['header12']; ?>
</a> [<a href='user_editprofile.php'><?php echo $this->_tpl_vars['header13']; ?>
</a>]
    </td>

        <?php if ($this->_tpl_vars['setting']['setting_connection_allow'] != 0): ?>
      <td class='menu_item'>
        <a href='user_friends.php' class='menu_item'><img src='./images/icons/menu_friends.gif' border='0' class='icon' ><?php echo $this->_tpl_vars['header16']; ?>
</a>
      </td>
    <?php endif; ?>

        <?php unset($this->_sections['menu_loop']);
$this->_sections['menu_loop']['name'] = 'menu_loop';
$this->_sections['menu_loop']['loop'] = is_array($_loop=$this->_tpl_vars['global_plugin_menu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menu_loop']['show'] = true;
$this->_sections['menu_loop']['max'] = $this->_sections['menu_loop']['loop'];
$this->_sections['menu_loop']['step'] = 1;
$this->_sections['menu_loop']['start'] = $this->_sections['menu_loop']['step'] > 0 ? 0 : $this->_sections['menu_loop']['loop']-1;
if ($this->_sections['menu_loop']['show']) {
    $this->_sections['menu_loop']['total'] = $this->_sections['menu_loop']['loop'];
    if ($this->_sections['menu_loop']['total'] == 0)
        $this->_sections['menu_loop']['show'] = false;
} else
    $this->_sections['menu_loop']['total'] = 0;
if ($this->_sections['menu_loop']['show']):

            for ($this->_sections['menu_loop']['index'] = $this->_sections['menu_loop']['start'], $this->_sections['menu_loop']['iteration'] = 1;
                 $this->_sections['menu_loop']['iteration'] <= $this->_sections['menu_loop']['total'];
                 $this->_sections['menu_loop']['index'] += $this->_sections['menu_loop']['step'], $this->_sections['menu_loop']['iteration']++):
$this->_sections['menu_loop']['rownum'] = $this->_sections['menu_loop']['iteration'];
$this->_sections['menu_loop']['index_prev'] = $this->_sections['menu_loop']['index'] - $this->_sections['menu_loop']['step'];
$this->_sections['menu_loop']['index_next'] = $this->_sections['menu_loop']['index'] + $this->_sections['menu_loop']['step'];
$this->_sections['menu_loop']['first']      = ($this->_sections['menu_loop']['iteration'] == 1);
$this->_sections['menu_loop']['last']       = ($this->_sections['menu_loop']['iteration'] == $this->_sections['menu_loop']['total']);
?> 
      <?php if ($this->_tpl_vars['global_plugin_menu'][$this->_sections['menu_loop']['index']] != ''): ?> 
        <td class='menu_item'> 
          <a href='<?php echo $this->_tpl_vars['global_plugin_menu'][$this->_sections['menu_loop']['index']]['0']; ?>
' class='menu_item'><img src='./images/icons/<?php echo $this->_tpl_vars['global_plugin_menu'][$this->_sections['menu_loop']['index']]['1']; ?>
' border='0' class='icon'  ><?php echo $this->_tpl_vars['global_plugin_menu'][$this->_sections['menu_loop']['index']]['2']; ?>
</a> 
        </td> 
      <?php endif; ?> 
    <?php endfor; endif; ?> 

        <?php if ($this->_tpl_vars['user']->level_info['level_message_allow'] != 0): ?>
      <td class='menu_item'>
        <a href='user_messages.php' class='menu_item'><img src='./images/icons/menu_messages.gif' border='0' class='icon'><?php echo $this->_tpl_vars['header18'];  if ($this->_tpl_vars['user_unread_pms'] != 0): ?> (<?php echo $this->_tpl_vars['user_unread_pms']; ?>
)<?php endif; ?></a>
      </td>
    <?php endif; ?>

        <td class='menu_item'>
      <a href='user_account.php' class='menu_item'><img src='./images/icons/menu_account.gif' border='0' class='icon'><?php echo $this->_tpl_vars['header19']; ?>
</a>
    </td>

    </tr>
    </table>

  </td>
  </tr>
<?php endif; ?>

<tr><td class='shadow' colspan='3'><img src='./images/shadow.gif' border='0'></td></tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%' align='center'>
<tr>
<?php if ($this->_tpl_vars['ads']->ad_left != ""): ?><td class='ad_left' width='1' style='display: table-cell; visibility: visible;'><?php echo $this->_tpl_vars['ads']->ad_left; ?>
</td><?php endif; ?>
<td class='content'>

<?php echo $this->_tpl_vars['ads']->ad_belowmenu; ?>