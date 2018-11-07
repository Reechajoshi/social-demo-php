<?php /* Smarty version 2.6.14, created on 2012-03-13 06:02:18
         compiled from home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'home.tpl', 134, false),array('modifier', 'truncate', 'home.tpl', 154, false),array('function', 'cycle', 'home.tpl', 153, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script language="JavaScript">
<!-- 
  Rollimage0 = new Array()
  Rollimage1 = new Array()
  Rollimage0[\'join\']= new Image(204,36);
  Rollimage0[\'join\'].src = "./images/philomina.jpg";
  Rollimage1[\'join\'] = new Image(204,36);
  Rollimage1[\'join\'].src = "./images/home_join2.gif";

  function SwapOut(imgname, imgsrc) {
    imgname.src = Rollimage1[imgsrc].src;
    return true;
  }
  function SwapBack(imgname, imgsrc) {
    imgname.src = Rollimage0[imgsrc].src; 
    return true;
  }
//-->
</script>
'; ?>

<hr>
<table cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td valign='top'>
  <marquee ><img src='./images/philomina.jpg' border='3' width="434" height="285">
  <img src='./images/1.jpg' border='3'   width="434" height="285">
  <img src='./images/3.jpg' border='3'   width="434" height="285">
  <img src='./images/5.jpg' border='3'   width="434" height="285"></marquee>
  <br><br>
  <a href='signup.php'><center></center></a></td>
</tr>
<tr>
  <td align="center" valign='middle'><a href='signup.php'><img src='./images/register.jpg' name='join' width="24%" height="49" border='0' /></a></td>
</tr>
</table>
<hr>
<br>

<table cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td valign='top' width='190'>Please Enter user ID and password to Login: 

    <?php if ($this->_tpl_vars['user']->user_exists == 0): ?>
    <table cellpadding='0' cellspacing='0' class='portal_table' width='100%'>
    <tr><td class='header'><?php echo $this->_tpl_vars['home3']; ?>
</td></tr>
    <tr>
    <td class='portal_box'>
      <form action='login.php' method='post'>
      <table cellpadding='0' cellspacing='0' align='center'>
      <tr><td><?php echo $this->_tpl_vars['home4']; ?>
<br><input type='text' class='text' name='email' size='25' maxlength='100' value='<?php echo $this->_tpl_vars['prev_email']; ?>
'></td></tr>
      <tr><td style='padding-top: 6px;'><?php echo $this->_tpl_vars['home5']; ?>
<br><input type='password' class='text' name='password' size='25' maxlength='100'></td></tr>
      <tr><td style='padding-top: 6px;'><input type='checkbox' class='checkbox' name='persistent' value='1' id='rememberme'> <label for='rememberme'><?php echo $this->_tpl_vars['home14']; ?>
</label></td></tr>
      <tr>
        <td style='padding-top: 6px;'>
          <table cellpadding='0' cellspacing='0'>
          <tr>
          <td>
            <input type='submit' class='button' value='<?php echo $this->_tpl_vars['home6']; ?>
'>&nbsp;
            <NOSCRIPT><input type='hidden' name='javascript_disabled' value='1'></NOSCRIPT>
            <input type='hidden' name='task' value='dologin'>
            <input type='hidden' name='ip' value='<?php echo $this->_tpl_vars['ip']; ?>
'>
            </form>
          </td>
          <td>
            <form action='signup.php' method='post'>
            <input type='submit' class='button' value='<?php echo $this->_tpl_vars['home7']; ?>
'>
            </form>
          </td>
          </tr>
          </table>
        </td>
      </tr>
      </table>
    </td>
    </tr>
    </table>
<hr>
    <?php else: ?>
    <table cellpadding='0' cellspacing='0' class='portal_table' width='100%'>
    <tr>
    <td class='portal_login'>
      <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['user']->user_photo("./images/nophoto.gif"); ?>
' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['user']->user_photo("./images/nophoto.gif"),'90','90','w'); ?>
' border='0' class='photo' alt="<?php echo $this->_tpl_vars['user']->user_info['user_username'];  echo $this->_tpl_vars['home8']; ?>
"></a>
      <br><?php echo $this->_tpl_vars['home9']; ?>
 <?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
!
      <br>[ <a href='user_logout.php'><?php echo $this->_tpl_vars['home10']; ?>
</a> ]
    </td>
    </tr>
    </table>
  <?php endif; ?>
<hr>
    <table cellpadding='0' cellspacing='0' class='portal_table' width='100%'>
  <tr><td class='header'><?php echo $this->_tpl_vars['home11']; ?>
</td></tr>
  <tr>
  <td class='portal_box'>
    &#149; <?php echo $this->_tpl_vars['home12']; ?>
 <?php echo $this->_tpl_vars['total_members']; ?>
 <?php echo $this->_tpl_vars['home13']; ?>

    <?php if ($this->_tpl_vars['setting']['setting_connection_allow'] != 0): ?><br>&#149; <?php echo $this->_tpl_vars['home18']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 <?php echo $this->_tpl_vars['home19'];  endif; ?>
    <br>&#149; <?php echo $this->_tpl_vars['home24']; ?>
 <?php echo $this->_tpl_vars['total_comments']; ?>
 <?php echo $this->_tpl_vars['home25']; ?>

  </td>
  </tr>
  </table>
<hr>
</td>
<td valign='top' style='padding-left: 10px;'>

    
  <?php if ($this->_tpl_vars['news_total'] > 0): ?>
    <table cellpadding='0' cellspacing='0' class='portal_table' width='100%'>
    <tr><td class='header'><?php echo $this->_tpl_vars['home26']; ?>
</td></tr>
    <tr>
    <td class='portal_box'>
      <?php unset($this->_sections['news_loop']);
$this->_sections['news_loop']['name'] = 'news_loop';
$this->_sections['news_loop']['loop'] = is_array($_loop=$this->_tpl_vars['news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news_loop']['max'] = (int)5;
$this->_sections['news_loop']['show'] = true;
if ($this->_sections['news_loop']['max'] < 0)
    $this->_sections['news_loop']['max'] = $this->_sections['news_loop']['loop'];
$this->_sections['news_loop']['step'] = 1;
$this->_sections['news_loop']['start'] = $this->_sections['news_loop']['step'] > 0 ? 0 : $this->_sections['news_loop']['loop']-1;
if ($this->_sections['news_loop']['show']) {
    $this->_sections['news_loop']['total'] = min(ceil(($this->_sections['news_loop']['step'] > 0 ? $this->_sections['news_loop']['loop'] - $this->_sections['news_loop']['start'] : $this->_sections['news_loop']['start']+1)/abs($this->_sections['news_loop']['step'])), $this->_sections['news_loop']['max']);
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
        <table cellpadding='0' cellspacing='0'>
        <tr>
        <td valign='top'><img src='./images/icons/news16.gif' border='0' class='icon'></td>
        <td valign='top'><b><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_subject']; ?>
</b><br><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_date']; ?>
<br><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_body']; ?>
</td>
        </tr>
        </table>
        <?php if ($this->_sections['news_loop']['last'] == false): ?><br><?php endif; ?>
      <?php endfor; endif; ?>
    </td>
    </tr>
    </table>
  <?php endif; ?>
<hr>
    <?php if (count($this->_tpl_vars['online_users']) > 0): ?>
    <table cellpadding='0' cellspacing='0' class='portal_table' align='center' width='100%'>
    <tr><td class='header'><?php echo $this->_tpl_vars['home31']; ?>
 (<?php echo count($this->_tpl_vars['online_users']); ?>
)</td></tr>
    <tr>
    <td class='portal_box'>
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
<hr>
    <table cellpadding='0' cellspacing='0' class='portal_table' align='center' width='100%'>
  <tr><td class='header'><?php echo $this->_tpl_vars['home33']; ?>
</td></tr>
  <tr>
  <td class='portal_box'>
    <?php if (count($this->_tpl_vars['signups']) > 0): ?>
      <?php unset($this->_sections['signups_loop']);
$this->_sections['signups_loop']['name'] = 'signups_loop';
$this->_sections['signups_loop']['loop'] = is_array($_loop=$this->_tpl_vars['signups']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['signups_loop']['max'] = (int)5;
$this->_sections['signups_loop']['show'] = true;
if ($this->_sections['signups_loop']['max'] < 0)
    $this->_sections['signups_loop']['max'] = $this->_sections['signups_loop']['loop'];
$this->_sections['signups_loop']['step'] = 1;
$this->_sections['signups_loop']['start'] = $this->_sections['signups_loop']['step'] > 0 ? 0 : $this->_sections['signups_loop']['loop']-1;
if ($this->_sections['signups_loop']['show']) {
    $this->_sections['signups_loop']['total'] = min(ceil(($this->_sections['signups_loop']['step'] > 0 ? $this->_sections['signups_loop']['loop'] - $this->_sections['signups_loop']['start'] : $this->_sections['signups_loop']['start']+1)/abs($this->_sections['signups_loop']['step'])), $this->_sections['signups_loop']['max']);
    if ($this->_sections['signups_loop']['total'] == 0)
        $this->_sections['signups_loop']['show'] = false;
} else
    $this->_sections['signups_loop']['total'] = 0;
if ($this->_sections['signups_loop']['show']):

            for ($this->_sections['signups_loop']['index'] = $this->_sections['signups_loop']['start'], $this->_sections['signups_loop']['iteration'] = 1;
                 $this->_sections['signups_loop']['iteration'] <= $this->_sections['signups_loop']['total'];
                 $this->_sections['signups_loop']['index'] += $this->_sections['signups_loop']['step'], $this->_sections['signups_loop']['iteration']++):
$this->_sections['signups_loop']['rownum'] = $this->_sections['signups_loop']['iteration'];
$this->_sections['signups_loop']['index_prev'] = $this->_sections['signups_loop']['index'] - $this->_sections['signups_loop']['step'];
$this->_sections['signups_loop']['index_next'] = $this->_sections['signups_loop']['index'] + $this->_sections['signups_loop']['step'];
$this->_sections['signups_loop']['first']      = ($this->_sections['signups_loop']['iteration'] == 1);
$this->_sections['signups_loop']['last']       = ($this->_sections['signups_loop']['iteration'] == $this->_sections['signups_loop']['total']);
?>
                <?php echo smarty_function_cycle(array('name' => 'startrow','values' => "<table cellpadding='0' cellspacing='0' align='center'><tr>,,,,"), $this);?>

        <td class='portal_member'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['signups'][$this->_sections['signups_loop']['index']]->user_info['user_username']); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['signups'][$this->_sections['signups_loop']['index']]->user_info['user_username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
<br><img src='<?php echo $this->_tpl_vars['signups'][$this->_sections['signups_loop']['index']]->user_photo('./images/nophoto.gif'); ?>
' class='photo' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['signups'][$this->_sections['signups_loop']['index']]->user_photo('./images/nophoto.gif'),'90','90','w'); ?>
' border='0'></a></td>
                <?php if ($this->_sections['signups_loop']['last'] == true): ?>
          </tr></table>
        <?php else: ?>
          <?php echo smarty_function_cycle(array('name' => 'endrow','values' => ",,,,</tr></table>"), $this);?>

        <?php endif; ?>
      <?php endfor; endif; ?>
    <?php else: ?>
      <?php echo $this->_tpl_vars['home34']; ?>

    <?php endif; ?>
  </td>
  </tr>
  </table>

<hr>
<?php if ($this->_tpl_vars['setting']['setting_connection_allow'] != 0): ?>
  <table cellpadding='0' cellspacing='0' class='portal_table' align='center' width='100%'>
  <tr><td class='header'><?php echo $this->_tpl_vars['home35']; ?>
</td></tr>
  <tr>
  <td class='portal_box'>
  <?php if (count($this->_tpl_vars['friends']) > 0): ?>
    <?php unset($this->_sections['friends_loop']);
$this->_sections['friends_loop']['name'] = 'friends_loop';
$this->_sections['friends_loop']['loop'] = is_array($_loop=$this->_tpl_vars['friends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friends_loop']['max'] = (int)5;
$this->_sections['friends_loop']['show'] = true;
if ($this->_sections['friends_loop']['max'] < 0)
    $this->_sections['friends_loop']['max'] = $this->_sections['friends_loop']['loop'];
$this->_sections['friends_loop']['step'] = 1;
$this->_sections['friends_loop']['start'] = $this->_sections['friends_loop']['step'] > 0 ? 0 : $this->_sections['friends_loop']['loop']-1;
if ($this->_sections['friends_loop']['show']) {
    $this->_sections['friends_loop']['total'] = min(ceil(($this->_sections['friends_loop']['step'] > 0 ? $this->_sections['friends_loop']['loop'] - $this->_sections['friends_loop']['start'] : $this->_sections['friends_loop']['start']+1)/abs($this->_sections['friends_loop']['step'])), $this->_sections['friends_loop']['max']);
    if ($this->_sections['friends_loop']['total'] == 0)
        $this->_sections['friends_loop']['show'] = false;
} else
    $this->_sections['friends_loop']['total'] = 0;
if ($this->_sections['friends_loop']['show']):

            for ($this->_sections['friends_loop']['index'] = $this->_sections['friends_loop']['start'], $this->_sections['friends_loop']['iteration'] = 1;
                 $this->_sections['friends_loop']['iteration'] <= $this->_sections['friends_loop']['total'];
                 $this->_sections['friends_loop']['index'] += $this->_sections['friends_loop']['step'], $this->_sections['friends_loop']['iteration']++):
$this->_sections['friends_loop']['rownum'] = $this->_sections['friends_loop']['iteration'];
$this->_sections['friends_loop']['index_prev'] = $this->_sections['friends_loop']['index'] - $this->_sections['friends_loop']['step'];
$this->_sections['friends_loop']['index_next'] = $this->_sections['friends_loop']['index'] + $this->_sections['friends_loop']['step'];
$this->_sections['friends_loop']['first']      = ($this->_sections['friends_loop']['iteration'] == 1);
$this->_sections['friends_loop']['last']       = ($this->_sections['friends_loop']['iteration'] == $this->_sections['friends_loop']['total']);
?>
            <?php echo smarty_function_cycle(array('name' => 'startrow2','values' => "<table cellpadding='0' cellspacing='0' align='center'><tr>,,,,"), $this);?>

      <td class='portal_member'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]['friend']->user_info['user_username']); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]['friend']->user_info['user_username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15) : smarty_modifier_truncate($_tmp, 15)); ?>
<br><img src='<?php echo $this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]['friend']->user_photo('./images/nophoto.gif'); ?>
' class='photo' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]['friend']->user_photo('./images/nophoto.gif'),'90','90','w'); ?>
' border='0'></a><br><?php echo $this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]['total_friends']; ?>
 <?php echo $this->_tpl_vars['home36']; ?>
</td>
            <?php if ($this->_sections['friends_loop']['last'] == true): ?>
        </tr></table>
      <?php else: ?>
        <?php echo smarty_function_cycle(array('name' => 'endrow2','values' => ",,,,</tr></table>"), $this);?>

      <?php endif; ?>
    <?php endfor; endif; ?>
  <?php else: ?>
    <?php echo $this->_tpl_vars['home37']; ?>

  <?php endif; ?>
  </td>
  </tr>
  </table>
<?php endif; ?>

<table cellpadding='0' cellspacing='0' class='portal_table' align='center' width='100%'>
<tr><td class='header'><?php echo $this->_tpl_vars['home38']; ?>
</td></tr>
<tr>
<td class='portal_box'>
<?php if (count($this->_tpl_vars['logins']) > 0): ?>
  <?php unset($this->_sections['login_loop']);
$this->_sections['login_loop']['name'] = 'login_loop';
$this->_sections['login_loop']['loop'] = is_array($_loop=$this->_tpl_vars['logins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['login_loop']['max'] = (int)5;
$this->_sections['login_loop']['show'] = true;
if ($this->_sections['login_loop']['max'] < 0)
    $this->_sections['login_loop']['max'] = $this->_sections['login_loop']['loop'];
$this->_sections['login_loop']['step'] = 1;
$this->_sections['login_loop']['start'] = $this->_sections['login_loop']['step'] > 0 ? 0 : $this->_sections['login_loop']['loop']-1;
if ($this->_sections['login_loop']['show']) {
    $this->_sections['login_loop']['total'] = min(ceil(($this->_sections['login_loop']['step'] > 0 ? $this->_sections['login_loop']['loop'] - $this->_sections['login_loop']['start'] : $this->_sections['login_loop']['start']+1)/abs($this->_sections['login_loop']['step'])), $this->_sections['login_loop']['max']);
    if ($this->_sections['login_loop']['total'] == 0)
        $this->_sections['login_loop']['show'] = false;
} else
    $this->_sections['login_loop']['total'] = 0;
if ($this->_sections['login_loop']['show']):

            for ($this->_sections['login_loop']['index'] = $this->_sections['login_loop']['start'], $this->_sections['login_loop']['iteration'] = 1;
                 $this->_sections['login_loop']['iteration'] <= $this->_sections['login_loop']['total'];
                 $this->_sections['login_loop']['index'] += $this->_sections['login_loop']['step'], $this->_sections['login_loop']['iteration']++):
$this->_sections['login_loop']['rownum'] = $this->_sections['login_loop']['iteration'];
$this->_sections['login_loop']['index_prev'] = $this->_sections['login_loop']['index'] - $this->_sections['login_loop']['step'];
$this->_sections['login_loop']['index_next'] = $this->_sections['login_loop']['index'] + $this->_sections['login_loop']['step'];
$this->_sections['login_loop']['first']      = ($this->_sections['login_loop']['iteration'] == 1);
$this->_sections['login_loop']['last']       = ($this->_sections['login_loop']['iteration'] == $this->_sections['login_loop']['total']);
?>
        <?php echo smarty_function_cycle(array('name' => 'startrow3','values' => "<table cellpadding='0' cellspacing='0' align='center'><tr>,,,,"), $this);?>

    <td class='portal_member'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]->user_info['user_username']; ?>
<br><img src='<?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]->user_photo('./images/nophoto.gif'); ?>
' class='photo' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]->user_photo('./images/nophoto.gif'),'90','90','w'); ?>
' border='0'></a></td>
        <?php if ($this->_sections['login_loop']['last'] == true): ?>
      </tr></table>
    <?php else: ?>
      <?php echo smarty_function_cycle(array('name' => 'endrow3','values' => ",,,,</tr></table>"), $this);?>

    <?php endif; ?>
  <?php endfor; endif; ?>
<?php else: ?>
  <?php echo $this->_tpl_vars['home39']; ?>

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