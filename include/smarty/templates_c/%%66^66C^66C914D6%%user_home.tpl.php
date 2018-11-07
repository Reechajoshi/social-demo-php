<?php /* Smarty version 2.6.14, created on 2012-03-06 05:28:43
         compiled from user_home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'user_home.tpl', 18, false),array('modifier', 'choptext', 'user_home.tpl', 44, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td class='home_left' width='200'>

    <div class='home_photo'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['user']->user_photo("./images/nophoto.gif"); ?>
' class='photo' border='0'  width='190' height='210'></a></div>

    <table class='home_menu' cellpadding='0' cellspacing='0' width='100%'>
  <tr><td class='home_menu1'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><img src='./images/icons/menu_profile.gif' class='icon' border='0'><?php echo $this->_tpl_vars['user_home17']; ?>
</a></td></tr>
  <tr><td class='home_menu1'><a href='user_editprofile.php'><img src='./images/icons/menu_editprofile.gif' class='icon' border='0'><?php echo $this->_tpl_vars['user_home19']; ?>
</a></td></tr>
  <?php if ($this->_tpl_vars['setting']['setting_connection_allow'] != 0): ?><tr><td class='home_menu1'><a href='user_friends.php'><img src='./images/icons/menu_friends.gif' class='icon' border='0'><?php echo $this->_tpl_vars['user_home21']; ?>
</a></td></tr><?php endif; ?>
  <tr><td class='home_menu1'><a href='search_advanced.php'><img src='./images/icons/search16.gif' class='icon' border='0'><?php echo $this->_tpl_vars['user_home27']; ?>
</a></td></tr>
  </table>

    <?php if (count($this->_tpl_vars['online_users']) > 0): ?>
    <table cellpadding='0' cellspacing='0' class='portal_table' align='center' width='100%'>
    <tr><td class='header'><?php echo $this->_tpl_vars['user_home10']; ?>
 (<?php echo count($this->_tpl_vars['online_users']); ?>
)</td></tr>
    <tr>
    <td class='home_box'>
      <?php unset($this->_sections['online_users_loop']);
$this->_sections['online_users_loop']['name'] = 'online_users_loop';
$this->_sections['online_users_loop']['loop'] = is_array($_loop=$this->_tpl_vars['online_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['online_users_loop']['max'] = (int)20;
$this->_sections['online_users_loop']['show'] = true;
if ($this->_sections['online_users_loop']['max'] < 0)
    $this->_sections['online_users_loop']['max'] = $this->_sections['online_users_loop']['loop'];
$this->_sections['online_users_loop']['step'] = 1;
$this->_sections['online_users_loop']['start'] = $this->_sections['online_users_loop']['step'] > 0 ? 0 : $this->_sections['online_users_loop']['loop']-1;
if ($this->_sections['online_users_loop']['show']) {
    $this->_sections['online_users_loop']['total'] = min(ceil(($this->_sections['online_users_loop']['step'] > 0 ? $this->_sections['online_users_loop']['loop'] - $this->_sections['online_users_loop']['start'] : $this->_sections['online_users_loop']['start']+1)/abs($this->_sections['online_users_loop']['step'])), $this->_sections['online_users_loop']['max']);
    if ($this->_sections['online_users_loop']['total'] == 0)
        $this->_sections['online_users_loop']['show'] = false;
} else
    $this->_sections['online_users_loop']['total'] = 0;
if ($this->_sections['online_users_loop']['show']):

            for ($this->_sections['online_users_loop']['index'] = $this->_sections['online_users_loop']['start'], $this->_sections['online_users_loop']['iteration'] = 1;
                 $this->_sections['online_users_loop']['iteration'] <= $this->_sections['online_users_loop']['total'];
                 $this->_sections['online_users_loop']['index'] += $this->_sections['online_users_loop']['step'], $this->_sections['online_users_loop']['iteration']++):
$this->_sections['online_users_loop']['rownum'] = $this->_sections['online_users_loop']['iteration'];
$this->_sections['online_users_loop']['index_prev'] = $this->_sections['online_users_loop']['index'] - $this->_sections['online_users_loop']['step'];
$this->_sections['online_users_loop']['index_next'] = $this->_sections['online_users_loop']['index'] + $this->_sections['online_users_loop']['step'];
$this->_sections['online_users_loop']['first']      = ($this->_sections['online_users_loop']['iteration'] == 1);
$this->_sections['online_users_loop']['last']       = ($this->_sections['online_users_loop']['iteration'] == $this->_sections['online_users_loop']['total']);
 if ($this->_sections['online_users_loop']['rownum'] != 1): ?>, <?php endif; ?><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['online_users'][$this->_sections['online_users_loop']['index']]); ?>
'><?php echo $this->_tpl_vars['online_users'][$this->_sections['online_users_loop']['index']]; ?>
</a><?php endfor; endif; ?>
    </td>
    </tr>
    </table>
  <?php endif; ?>

</td>
<td class='home_middle'>
    <table cellpadding='0' cellspacing='0' width='100%'>
  <tr><td class='home_header'><?php echo $this->_tpl_vars['user_home1']; ?>
</td></tr>
  <td class='home_box'>
    <?php unset($this->_sections['actions_loop']);
$this->_sections['actions_loop']['name'] = 'actions_loop';
$this->_sections['actions_loop']['loop'] = is_array($_loop=$this->_tpl_vars['actions']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['actions_loop']['show'] = true;
$this->_sections['actions_loop']['max'] = $this->_sections['actions_loop']['loop'];
$this->_sections['actions_loop']['step'] = 1;
$this->_sections['actions_loop']['start'] = $this->_sections['actions_loop']['step'] > 0 ? 0 : $this->_sections['actions_loop']['loop']-1;
if ($this->_sections['actions_loop']['show']) {
    $this->_sections['actions_loop']['total'] = $this->_sections['actions_loop']['loop'];
    if ($this->_sections['actions_loop']['total'] == 0)
        $this->_sections['actions_loop']['show'] = false;
} else
    $this->_sections['actions_loop']['total'] = 0;
if ($this->_sections['actions_loop']['show']):

            for ($this->_sections['actions_loop']['index'] = $this->_sections['actions_loop']['start'], $this->_sections['actions_loop']['iteration'] = 1;
                 $this->_sections['actions_loop']['iteration'] <= $this->_sections['actions_loop']['total'];
                 $this->_sections['actions_loop']['index'] += $this->_sections['actions_loop']['step'], $this->_sections['actions_loop']['iteration']++):
$this->_sections['actions_loop']['rownum'] = $this->_sections['actions_loop']['iteration'];
$this->_sections['actions_loop']['index_prev'] = $this->_sections['actions_loop']['index'] - $this->_sections['actions_loop']['step'];
$this->_sections['actions_loop']['index_next'] = $this->_sections['actions_loop']['index'] + $this->_sections['actions_loop']['step'];
$this->_sections['actions_loop']['first']      = ($this->_sections['actions_loop']['iteration'] == 1);
$this->_sections['actions_loop']['last']       = ($this->_sections['actions_loop']['iteration'] == $this->_sections['actions_loop']['total']);
?>
            <div id='action_<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_id']; ?>
'  class='home_action<?php if ($this->_sections['actions_loop']['last'] == true): ?>_bottom<?php endif; ?>'>
	<table cellpadding='0' cellspacing='0'>
	<tr>
	<td valign='top'><img src='./images/icons/<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_icon']; ?>
' border='0' class='icon'></td>
	<td valign='top' width='100%'>
	  <div class='home_action_date'><?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_date']); ?>
</div>
	  <?php echo ((is_array($_tmp=$this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_text'])) ? $this->_run_mod_handler('choptext', true, $_tmp, 50, "<br>") : smarty_modifier_choptext($_tmp, 50, "<br>")); ?>

        </td>
	</tr>
	</table>
      </div>
    <?php endfor; else: ?>
      <?php echo $this->_tpl_vars['user_home9']; ?>

    <?php endif; ?>
  </td>
  </tr>
  </table>
</td>

<td class='home_right' width='190'>

    
  <table cellpadding='0' cellspacing='0' width='100%'>
  <tr><td class='home_header'><?php echo $this->_tpl_vars['user_home3']; ?>
</td></tr>
  <tr>
  <td class='home_box'>
        <?php if ($this->_tpl_vars['user_unread_pms'] > 0): ?>
      <div style='margin-bottom: 5px;'><a href='user_messages.php'><img src='./images/icons/newmessage16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_unread_pms']; ?>
 <?php echo $this->_tpl_vars['user_home14']; ?>
</a></div>
    <?php endif; ?>
        <?php if ($this->_tpl_vars['total_friend_requests'] > 0): ?>
      <div style='margin-bottom: 5px;'><a href='user_friends_requests.php'><img src='./images/icons/newfriends16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['total_friend_requests']; ?>
 <?php echo $this->_tpl_vars['user_home15']; ?>
</a></div>
    <?php endif; ?>
        <?php unset($this->_sections['notify_loop']);
$this->_sections['notify_loop']['name'] = 'notify_loop';
$this->_sections['notify_loop']['loop'] = is_array($_loop=$this->_tpl_vars['notifications']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['notify_loop']['show'] = true;
$this->_sections['notify_loop']['max'] = $this->_sections['notify_loop']['loop'];
$this->_sections['notify_loop']['step'] = 1;
$this->_sections['notify_loop']['start'] = $this->_sections['notify_loop']['step'] > 0 ? 0 : $this->_sections['notify_loop']['loop']-1;
if ($this->_sections['notify_loop']['show']) {
    $this->_sections['notify_loop']['total'] = $this->_sections['notify_loop']['loop'];
    if ($this->_sections['notify_loop']['total'] == 0)
        $this->_sections['notify_loop']['show'] = false;
} else
    $this->_sections['notify_loop']['total'] = 0;
if ($this->_sections['notify_loop']['show']):

            for ($this->_sections['notify_loop']['index'] = $this->_sections['notify_loop']['start'], $this->_sections['notify_loop']['iteration'] = 1;
                 $this->_sections['notify_loop']['iteration'] <= $this->_sections['notify_loop']['total'];
                 $this->_sections['notify_loop']['index'] += $this->_sections['notify_loop']['step'], $this->_sections['notify_loop']['iteration']++):
$this->_sections['notify_loop']['rownum'] = $this->_sections['notify_loop']['iteration'];
$this->_sections['notify_loop']['index_prev'] = $this->_sections['notify_loop']['index'] - $this->_sections['notify_loop']['step'];
$this->_sections['notify_loop']['index_next'] = $this->_sections['notify_loop']['index'] + $this->_sections['notify_loop']['step'];
$this->_sections['notify_loop']['first']      = ($this->_sections['notify_loop']['iteration'] == 1);
$this->_sections['notify_loop']['last']       = ($this->_sections['notify_loop']['iteration'] == $this->_sections['notify_loop']['total']);
?>
      <div style='margin-bottom: 5px;'><a href='<?php echo $this->_tpl_vars['notifications'][$this->_sections['notify_loop']['index']]['notify_url']; ?>
'><img src='./images/icons/<?php echo $this->_tpl_vars['notifications'][$this->_sections['notify_loop']['index']]['notify_icon']; ?>
' border='0' class='icon'><?php echo $this->_tpl_vars['notifications'][$this->_sections['notify_loop']['index']]['notify_text']; ?>
</a></div>
    <?php endfor; endif; ?>
        <div><img src='./images/icons/newviews16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user']->user_info['user_views_profile']; ?>
 <?php echo $this->_tpl_vars['user_home5']; ?>
 <?php if ($this->_tpl_vars['user']->user_info['user_views_profile'] != 0): ?>[ <a href='user_home.php?task=resetviews'><?php echo $this->_tpl_vars['user_home6']; ?>
</a> ]<?php endif; ?></div>
  </td>
  </tr>
  </table>

    <table cellpadding='0' cellspacing='0' width='100%' style='margin-top: 10px;'>
  <tr><td class='home_header'><?php echo $this->_tpl_vars['user_home11']; ?>
</td></tr>
  <tr>
  <td class='home_box'>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td valign='top'><img src='./images/icons/status16.gif' border='0' class='icon2'>&nbsp;&nbsp;</td>
    <td>
      <div id='ajax_currentstatus_none'<?php if ($this->_tpl_vars['user']->user_info['user_status'] != ""): ?> style='display: none;'<?php endif; ?>>
        <a href="javascript:void(0);" onClick="changeStatus()"><?php echo $this->_tpl_vars['user_home4']; ?>
</a>
      </div>
      <div id='ajax_currentstatus'<?php if ($this->_tpl_vars['user']->user_info['user_status'] == ""): ?> style='display: none;'<?php endif; ?>>
        <?php echo $this->_tpl_vars['user_home13']; ?>
 <span id='ajax_currentstatus_value'><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->user_info['user_status'])) ? $this->_run_mod_handler('choptext', true, $_tmp, 12, "<br>") : smarty_modifier_choptext($_tmp, 12, "<br>")); ?>
</span>
        <br>[ <a href="javascript:void(0);" onClick="changeStatus()"><?php echo $this->_tpl_vars['user_home12']; ?>
</a> ]
      </div>
      <div id='ajax_changestatus' style='display: none;'>
	<form action='user_editprofile_status.php' method='post' id='ajax_statusform' target='ajax_statusframe' onSubmit="changeStatus_do()">
	<?php echo $this->_tpl_vars['user_home13']; ?>
:<br>
	<input type='text' class='text_small' name='status_new' id='status_new' maxlength='100' value='<?php echo $this->_tpl_vars['user']->user_info['user_status']; ?>
' size='10' style='width: 140px; margin: 2px 0px 2px 0px;'>
	<br>
        <a href="javascript:void(0);" onClick="changeStatus_submit();"><?php echo $this->_tpl_vars['user_home7']; ?>
</a> | 
        <a href="javascript:void(0);" onClick="changeStatus_return();"><?php echo $this->_tpl_vars['user_home8']; ?>
</a>
	<input type='hidden' name='task' value='dosave'>
	<input type='hidden' name='is_ajax' value='1'>
	</form>
      </div>
      <iframe id='uploadframe' name='ajax_statusframe' style='display: none;' src="user_editprofile_status.php?task=blank"></iframe> 
    </td>
    </tr>
    </table>
  </td>
  </tr>
  </table>

    <table cellpadding='0' cellspacing='0' width='100%' style='margin-top: 10px;'>
  <tr><td class='home_header'><?php echo $this->_tpl_vars['user_home29']; ?>
</td></tr>
  <tr>
  <td class='home_box'>
    <?php if ($this->_tpl_vars['news_total'] > 0): ?>
      <?php unset($this->_sections['news_loop']);
$this->_sections['news_loop']['name'] = 'news_loop';
$this->_sections['news_loop']['loop'] = is_array($_loop=$this->_tpl_vars['news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news_loop']['show'] = true;
$this->_sections['news_loop']['max'] = $this->_sections['news_loop']['loop'];
$this->_sections['news_loop']['step'] = 1;
$this->_sections['news_loop']['start'] = $this->_sections['news_loop']['step'] > 0 ? 0 : $this->_sections['news_loop']['loop']-1;
if ($this->_sections['news_loop']['show']) {
    $this->_sections['news_loop']['total'] = $this->_sections['news_loop']['loop'];
    if ($this->_sections['news_loop']['total'] == 0)
        $this->_sections['news_loop']['show'] = false;
} else
    $this->_sections['news_loop']['total'] = 0;
if ($this->_sections['news_loop']['show']):

            for ($this->_sections['news_loop']['index'] = $this->_sections['news_loop']['start'], $this->_sections['news_loop']['iteration'] = 1;
                 $this->_sections['news_loop']['iteration'] <= $this->_sections['news_loop']['total'];
                 $this->_sections['news_loop']['index'] += $this->_sections['news_loop']['step'], $this->_sections['news_loop']['iteration']++):
$this->_sections['news_loop']['rownum'] = $this->_sections['news_loop']['iteration'];
$this->_sections['news_loop']['index_prev'] = $this->_sections['news_loop']['index'] - $this->_sections['news_loop']['step'];
$this->_sections['news_loop']['index_next'] = $this->_sections['news_loop']['index'] + $this->_sections['news_loop']['step'];
$this->_sections['news_loop']['first']      = ($this->_sections['news_loop']['iteration'] == 1);
$this->_sections['news_loop']['last']       = ($this->_sections['news_loop']['iteration'] == $this->_sections['news_loop']['total']);
?>
        <table cellpadding='0' cellspacing='0' width='100%'>
        <tr><td valign='top'><b><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_subject']; ?>
</b><br><i><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_date']; ?>
</i><br><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_body']; ?>
</td></tr>
        </table>
        <?php if ($this->_sections['news_loop']['last'] == false): ?><br><?php endif; ?>
      <?php endfor; endif; ?>
    <?php else: ?>
      <?php echo $this->_tpl_vars['user_home30']; ?>

    <?php endif; ?>
  </td>
  </tr>
  </table>

</td>
</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>