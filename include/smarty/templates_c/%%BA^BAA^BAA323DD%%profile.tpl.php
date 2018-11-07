<?php /* Smarty version 2.6.14, created on 2012-03-06 05:46:12
         compiled from profile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'profile.tpl', 10, false),array('modifier', 'truncate', 'profile.tpl', 140, false),array('modifier', 'choptext', 'profile.tpl', 219, false),array('function', 'cycle', 'profile.tpl', 353, false),array('function', 'math', 'profile.tpl', 410, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php echo '
<script type=\'text/javascript\'>
<!--
var comment_changed = 0;
var first_comment = 1;
var last_comment = ';  echo count($this->_tpl_vars['comments']);  echo ';
var next_comment = last_comment+1;
var total_comments = ';  echo $this->_tpl_vars['total_comments'];  echo ';

function removeText(commentBody) {
  if(comment_changed == 0) {
    commentBody.value=\'\';
    commentBody.style.color=\'#000000\';
    comment_changed = 1;
  }
}

function addText(commentBody) {
  if(commentBody.value == \'\') {
    commentBody.value = \'';  echo $this->_tpl_vars['profile44'];  echo '\';
    commentBody.style.color = \'#888888\';
    comment_changed = 0;
  }
}

function checkText() {
  if(comment_changed == 0) { 
    var commentBody = document.getElementById(\'comment_body\');
    commentBody.value=\'\'; 
  }
  var commentSubmit = document.getElementById(\'comment_submit\');
  commentSubmit.value = \'';  echo $this->_tpl_vars['profile45'];  echo '\';
  commentSubmit.disabled = true;
  
}

function addComment(is_error, comment_body, comment_date) {
  if(is_error == 1) {
    var commentError = document.getElementById(\'comment_error\');
    commentError.style.display = \'block\';
    if(comment_body == \'\') {
      commentError.innerHTML = \'';  echo $this->_tpl_vars['profile46'];  echo '\';
    } else {
      commentError.innerHTML = \'';  echo $this->_tpl_vars['profile47'];  echo '\';
    }
    var commentSubmit = document.getElementById(\'comment_submit\');
    commentSubmit.value = \'';  echo $this->_tpl_vars['profile48'];  echo '\';
    commentSubmit.disabled = false;
  } else {
    var commentError = document.getElementById(\'comment_error\');
    commentError.style.display = \'none\';
    commentError.innerHTML = \'\';

    var commentBody = document.getElementById(\'comment_body\');
    commentBody.value = \'\';
    addText(commentBody);

    var commentSubmit = document.getElementById(\'comment_submit\');
    commentSubmit.value = \'';  echo $this->_tpl_vars['profile48'];  echo '\';
    commentSubmit.disabled = false;

    if(document.getElementById(\'comment_secure\')) {
      var commentSecure = document.getElementById(\'comment_secure\');
      commentSecure.value=\'\'
      var secureImage = document.getElementById(\'secure_image\');
      secureImage.src = secureImage.src + \'?\' + (new Date()).getTime();
    }

    total_comments++;
    var totalComments = document.getElementById(\'total_comments\');
    totalComments.innerHTML = total_comments;

    if(total_comments > 10) {
      var oldComment = document.getElementById(\'comment_\'+first_comment);
      if(oldComment) { oldComment.style.display = \'none\'; first_comment++; }
    }

    var newComment = document.createElement(\'div\');
    var divIdName = \'comment_\'+next_comment;
    newComment.setAttribute(\'id\',divIdName);
    var newTable = "<table cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'><tr><td class=\'profile_item1\' width=\'80\'>";
    '; ?>

      <?php if ($this->_tpl_vars['user']->user_info['user_id'] != 0): ?>
        newTable += "<a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['user']->user_photo('./images/nophoto.gif'); ?>
' class='photo' border='0' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['user']->user_photo('./images/nophoto.gif'),'75','75','w'); ?>
'></a></td><td class='profile_item2'><table cellpadding='0' cellspacing='0' width='100%'><tr><td class='profile_comment_author'><b><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
</a></b> - <?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['profile20'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone(time(),$this->_tpl_vars['global_timezone'])); ?>
</td><td class='profile_comment_author' align='right' nowrap='nowrap'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
#comments'><?php echo $this->_tpl_vars['profile26']; ?>
</a>&nbsp;|&nbsp;<a href='user_messages_new.php?to=<?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['profile34']; ?>
</a></td>";
      <?php else: ?>
        newTable += "<img src='./images/nophoto.gif' class='photo' border='0' width='75'></td><td class='profile_item2'><table cellpadding='0' cellspacing='0' width='100%'><tr><td class='profile_comment_author'><b><?php echo $this->_tpl_vars['profile33']; ?>
</b> - <?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['profile20'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone(time(),$this->_tpl_vars['global_timezone'])); ?>
</td><td class='profile_comment_author' align='right' nowrap='nowrap'>&nbsp;</td>";
      <?php endif; ?>
      newTable += "</tr><tr><td colspan='2' class='profile_comment_body'>"+comment_body+"</td></tr></table></td></tr></table>";
    <?php echo '
    newComment.innerHTML = newTable;
    var profileComments = document.getElementById(\'profile_comments\');
    var prevComment = document.getElementById(\'comment_\'+last_comment);
    profileComments.insertBefore(newComment, prevComment);
    next_comment++;
    last_comment++;
  }
}

function action_delete(action_id) {
  var divname = \'action_\' + action_id;
  var newsrc = \'action_delete.php?action_id=\' + action_id;
  hidediv(divname);
  document.getElementById(\'actionimage\').src = newsrc;
  document.getElementById(\'actions_total\').value--;
  if(document.getElementById(\'actions_total\').value == 0) {
    document.getElementById(\'actions\').style.display = "none";
  }
}

//-->
</script>
'; ?>



<div class='page_header'><?php echo $this->_tpl_vars['owner']->user_info['user_username'];  echo $this->_tpl_vars['profile6']; ?>
</div>

<table cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td class='profile_leftside' width='200'>

    <table cellpadding='0' cellspacing='0' width='100%' style='margin-bottom: 10px;'>
  <tr>
  <td class='profile_photo'><img class='photo' src='<?php echo $this->_tpl_vars['owner']->user_photo("./images/nophoto.gif"); ?>
'  border='0' width='200' height='250'></td>
  </tr>
  </table>

    <?php if ($this->_tpl_vars['owner']->user_info['user_username'] != $this->_tpl_vars['user']->user_info['user_username']): ?>
    <table class='profile_menu' cellpadding='0' cellspacing='0' width='100%'>
 
        <?php if ($this->_tpl_vars['total_friends'] != 0): ?>
      <tr>
      <td class='profile_menu1'><a href='profile_friends.php?user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><img src='./images/icons/browsefriends16.gif' class='icon' border='0' width='200' height='250'><?php echo $this->_tpl_vars['profile7']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['owner']->user_info['user_username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, "...", true) : smarty_modifier_truncate($_tmp, 10, "...", true));  echo $this->_tpl_vars['profile8']; ?>
</a></td>
      </tr>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['friendship_allowed'] != 0 && $this->_tpl_vars['user']->user_exists != 0): ?>
      <?php if ($this->_tpl_vars['is_friend'] == TRUE): ?>
        <tr>
        <td class='profile_menu1'><a href='user_friends_confirm.php?task=remove&user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
&return_url=<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><img src='./images/icons/remove_friend16.gif' class='icon' border='0'><?php echo $this->_tpl_vars['profile41']; ?>
</a></td>
        </tr>
      <?php else: ?>
        <tr>
        <td class='profile_menu1'><a href='user_friends_add.php?user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><img src='./images/icons/addfriend16.gif' class='icon' border='0' width='200' height='250'><?php echo $this->_tpl_vars['profile9']; ?>
</a></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

        <?php if (( $this->_tpl_vars['user']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['user']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) ) && ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) )): ?>
      <tr>
      <td class='profile_menu1'><a href='user_messages_new.php?to=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><img src='./images/icons/sendmessage16.gif' class='icon' border='0'><?php echo $this->_tpl_vars['profile10']; ?>
</a></td>
      </tr>
    <?php endif; ?>
 
        <tr>
    <td class='profile_menu1'><a href='user_report.php?return_url=<?php echo $this->_tpl_vars['url']->url_current(); ?>
'><img src='./images/icons/report16.gif' class='icon' border='0'><?php echo $this->_tpl_vars['profile11']; ?>
</a></td>
    </tr>

        <?php if ($this->_tpl_vars['user']->level_info['level_profile_block'] != 0): ?>
      <?php if ($this->_tpl_vars['user']->user_blocked($this->_tpl_vars['owner']->user_info['user_id']) == TRUE): ?>
        <tr>
        <td class='profile_menu1'><a href='user_friends_block.php?task=unblock&user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><img src='./images/icons/unblock16.gif' class='icon' border='0'><?php echo $this->_tpl_vars['profile42']; ?>
</a></td>
        </tr>
      <?php else: ?>
        <tr>
        <td class='profile_menu1'><a href='user_friends_block.php?task=block&user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><img src='./images/icons/block16.gif' class='icon' border='0'><?php echo $this->_tpl_vars['profile12']; ?>
</a></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    </table>
  <?php endif; ?>

    <?php if ($this->_tpl_vars['is_profile_private'] != 0): ?>

        </td>
    <td class='profile_rightside'>
    
      <img src='./images/icons/error48.gif' border='0' class='icon_big'>
      <div class='page_header'><?php echo $this->_tpl_vars['profile3']; ?>
</div>
      <?php echo $this->_tpl_vars['profile4']; ?>


    <?php else: ?>

        <?php if (( $this->_tpl_vars['owner']->level_info['level_profile_status'] != 0 && $this->_tpl_vars['owner']->user_info['user_status'] != "" ) || $this->_tpl_vars['is_online'] == 1): ?>
      <table cellpadding='0' cellspacing='0' width='100%' style='margin-bottom: 10px;'>
      <tr>
      <td class='header'><?php echo $this->_tpl_vars['profile36']; ?>
</td>
      <tr>
      <td class='profile'>
	<?php if ($this->_tpl_vars['is_online'] == 1): ?>
          <table cellpadding='0' cellspacing='0'>
          <tr>
          <td valign='top'><img src='./images/icons/online16.gif' border='0' class='icon'></td>
          <td><?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
 <?php echo $this->_tpl_vars['profile21']; ?>
</td>
          </tr>
          </table>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['owner']->level_info['level_profile_status'] != 0 && $this->_tpl_vars['owner']->user_info['user_status'] != ""): ?>
          <table cellpadding='0' cellspacing='0'<?php if ($this->_tpl_vars['is_online'] == 1): ?> style='margin-top: 5px;'<?php endif; ?>>
          <tr>
          <td valign='top'><img src='./images/icons/status16.gif' border='0' class='icon'></td>
          <td><?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
 <?php echo $this->_tpl_vars['profile14']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['owner']->user_info['user_status'])) ? $this->_run_mod_handler('choptext', true, $_tmp, 12, "<br>") : smarty_modifier_choptext($_tmp, 12, "<br>")); ?>
</td>
          </tr>
          </table>
	<?php endif; ?>
      </td>
      </tr>
      </table>
    <?php endif; ?>
    
        <table cellpadding='0' cellspacing='0' width='100%' style='margin-bottom: 10px;'>
    <tr><td class='header'><?php echo $this->_tpl_vars['profile15']; ?>
</td></tr>
    <tr>
    <td class='profile'>
      <table cellpadding='0' cellspacing='0'>
      <tr><td width='80'><?php echo $this->_tpl_vars['profile16']; ?>
</td><td><?php echo $this->_tpl_vars['total_views']; ?>
 <?php echo $this->_tpl_vars['profile17']; ?>
</td></tr>
      <?php if ($this->_tpl_vars['setting']['setting_connection_allow'] != 0): ?><tr><td><?php echo $this->_tpl_vars['profile18']; ?>
</td><td><?php echo $this->_tpl_vars['total_friends']; ?>
 <?php echo $this->_tpl_vars['profile19']; ?>
</td></tr><?php endif; ?>
      <?php if ($this->_tpl_vars['owner']->user_info['user_dateupdated'] != ""): ?><tr><td><?php echo $this->_tpl_vars['profile22']; ?>
</td><td><?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['owner']->user_info['user_dateupdated']); ?>
</td></tr><?php endif; ?>
      <?php if ($this->_tpl_vars['owner']->user_info['user_signupdate'] != ""): ?><tr><td><?php echo $this->_tpl_vars['profile23']; ?>
</td><td><?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone(($this->_tpl_vars['owner']->user_info['user_signupdate']),$this->_tpl_vars['global_timezone'])); ?>
</td></tr><?php endif; ?>
      </table>
    </td>
    </tr>
    </table>
    
        <?php unset($this->_sections['profile_loop']);
$this->_sections['profile_loop']['name'] = 'profile_loop';
$this->_sections['profile_loop']['loop'] = is_array($_loop=$this->_tpl_vars['global_plugins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['profile_loop']['show'] = true;
$this->_sections['profile_loop']['max'] = $this->_sections['profile_loop']['loop'];
$this->_sections['profile_loop']['step'] = 1;
$this->_sections['profile_loop']['start'] = $this->_sections['profile_loop']['step'] > 0 ? 0 : $this->_sections['profile_loop']['loop']-1;
if ($this->_sections['profile_loop']['show']) {
    $this->_sections['profile_loop']['total'] = $this->_sections['profile_loop']['loop'];
    if ($this->_sections['profile_loop']['total'] == 0)
        $this->_sections['profile_loop']['show'] = false;
} else
    $this->_sections['profile_loop']['total'] = 0;
if ($this->_sections['profile_loop']['show']):

            for ($this->_sections['profile_loop']['index'] = $this->_sections['profile_loop']['start'], $this->_sections['profile_loop']['iteration'] = 1;
                 $this->_sections['profile_loop']['iteration'] <= $this->_sections['profile_loop']['total'];
                 $this->_sections['profile_loop']['index'] += $this->_sections['profile_loop']['step'], $this->_sections['profile_loop']['iteration']++):
$this->_sections['profile_loop']['rownum'] = $this->_sections['profile_loop']['iteration'];
$this->_sections['profile_loop']['index_prev'] = $this->_sections['profile_loop']['index'] - $this->_sections['profile_loop']['step'];
$this->_sections['profile_loop']['index_next'] = $this->_sections['profile_loop']['index'] + $this->_sections['profile_loop']['step'];
$this->_sections['profile_loop']['first']      = ($this->_sections['profile_loop']['iteration'] == 1);
$this->_sections['profile_loop']['last']       = ($this->_sections['profile_loop']['iteration'] == $this->_sections['profile_loop']['total']);
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "profile_".($this->_tpl_vars['global_plugins'][$this->_sections['profile_loop']['index']]).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endfor; endif; ?>

    </td>
  <td class='profile_rightside'>
  
        <?php if ($this->_tpl_vars['actions_total'] > 0): ?>
      <?php echo '
      <script language="JavaScript">
      <!-- 
        Rollimage0 = new Array()
        Rollimage1 = new Array()
        Rollimage0[\'join\']= new Image(10,12);
        Rollimage0[\'join\'].src = "./images/icons/action_delete1.gif";
        Rollimage1[\'join\'] = new Image(10,12);
        Rollimage1[\'join\'].src = "./images/icons/action_delete2.gif";

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


      <table cellpadding='0' cellspacing='0' width='100%' style='margin-bottom: 10px;' id='actions'>
      <tr><td class='header'><?php echo $this->_tpl_vars['profile24']; ?>
</td></tr>
      <tr>
      <td class='profile'>
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
' class='profile_action<?php if ($this->_sections['actions_loop']['last'] == true): ?>_bottom<?php endif; ?>'>
	    <table cellpadding='0' cellspacing='0' width='100%'>
	    <tr>
	    <td valign='top'>
	      <table cellpadding='0' cellspacing='0'>
	      <tr>
	      <td valign='top'><img src='./images/icons/<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_icon']; ?>
' border='0' class='icon'></td>
	      <td valign='top' width='100%'>
	        <div class='profile_action_date'>
		  <?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_date']); ?>

	          	          <?php if ($this->_tpl_vars['setting']['setting_actions_selfdelete'] == 1 && $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_user_id'] == $this->_tpl_vars['user']->user_info['user_id']): ?>
	            <a href="javascript:action_delete('<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_id']; ?>
')"><img src='./images/icons/action_delete1.gif' style='vertical-align: middle; margin-left: 3px;' border='0' onmouseover="SwapOut(this, 'join')" onmouseout="SwapBack(this, 'join')" name='join<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_id']; ?>
' id='join<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_id']; ?>
'></a>
	          <?php endif; ?>
	        </div>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_text'])) ? $this->_run_mod_handler('choptext', true, $_tmp, 50, "<br>") : smarty_modifier_choptext($_tmp, 50, "<br>")); ?>

              </td>
	      </tr>
	      </table>
	    </td>
	    </tr>
	    </table>
          </div>
        <?php endfor; endif; ?>
        <input type='hidden' name='actions_total' id='actions_total' value='<?php echo $this->_tpl_vars['actions_total']; ?>
'>
        <img id='actionimage' src='./images/trans.gif' border='0' style='display: none;'>
      </td>
      </tr>
      </table>
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
      <table cellpadding='0' cellspacing='0' width='100%' style='margin-bottom: 10px;'>
      <tr><td class='header'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_name']; ?>
</td></tr>
      <tr>
      <td class='profile'>
        <table cellpadding='0' cellspacing='0'>
                <?php unset($this->_sections['field_loop']);
$this->_sections['field_loop']['name'] = 'field_loop';
$this->_sections['field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <tr>
          <td width='130' valign='top'>
            <?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
:
          </td>
          <td>
            <?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value_profile']; ?>

            <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_birthday'] == 1): ?> (<?php echo $this->_tpl_vars['datetime']->age($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']); ?>
 <?php echo $this->_tpl_vars['profile37']; ?>
)<?php endif; ?>
          </td>
          </tr>
        <?php endfor; endif; ?>
        </table>
      </td>
      </tr>
      </table>
    <?php endfor; endif; ?>
    
        <?php if ($this->_tpl_vars['total_friends'] != 0): ?>
      <table cellpadding='0' cellspacing='0' width='100%' style='margin-bottom: 10px;'>
      <tr><td class='header'>
        <?php echo $this->_tpl_vars['profile35']; ?>
 (<?php echo $this->_tpl_vars['total_friends']; ?>
)
        &nbsp;[ <a href='profile_friends.php?user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['profile25']; ?>
 <?php echo $this->_tpl_vars['profile19']; ?>
</a> ]
      </td></tr>
      <tr>
      <td class='profile' align='center'>
                <?php unset($this->_sections['friend_loop']);
$this->_sections['friend_loop']['name'] = 'friend_loop';
$this->_sections['friend_loop']['loop'] = is_array($_loop=$this->_tpl_vars['friends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friend_loop']['show'] = true;
$this->_sections['friend_loop']['max'] = $this->_sections['friend_loop']['loop'];
$this->_sections['friend_loop']['step'] = 1;
$this->_sections['friend_loop']['start'] = $this->_sections['friend_loop']['step'] > 0 ? 0 : $this->_sections['friend_loop']['loop']-1;
if ($this->_sections['friend_loop']['show']) {
    $this->_sections['friend_loop']['total'] = $this->_sections['friend_loop']['loop'];
    if ($this->_sections['friend_loop']['total'] == 0)
        $this->_sections['friend_loop']['show'] = false;
} else
    $this->_sections['friend_loop']['total'] = 0;
if ($this->_sections['friend_loop']['show']):

            for ($this->_sections['friend_loop']['index'] = $this->_sections['friend_loop']['start'], $this->_sections['friend_loop']['iteration'] = 1;
                 $this->_sections['friend_loop']['iteration'] <= $this->_sections['friend_loop']['total'];
                 $this->_sections['friend_loop']['index'] += $this->_sections['friend_loop']['step'], $this->_sections['friend_loop']['iteration']++):
$this->_sections['friend_loop']['rownum'] = $this->_sections['friend_loop']['iteration'];
$this->_sections['friend_loop']['index_prev'] = $this->_sections['friend_loop']['index'] - $this->_sections['friend_loop']['step'];
$this->_sections['friend_loop']['index_next'] = $this->_sections['friend_loop']['index'] + $this->_sections['friend_loop']['step'];
$this->_sections['friend_loop']['first']      = ($this->_sections['friend_loop']['iteration'] == 1);
$this->_sections['friend_loop']['last']       = ($this->_sections['friend_loop']['iteration'] == $this->_sections['friend_loop']['total']);
?>
                    <?php echo smarty_function_cycle(array('name' => 'startrow2','values' => "<table cellpadding='0' cellspacing='0'><tr>,,,,"), $this);?>

          <td class='profile_friend'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'); ?>
' class='photo' border='0' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'),'75','75','w'); ?>
'><br><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
</a></td>
                    <?php if ($this->_sections['friend_loop']['last'] == true): ?>
            </tr></table>
          <?php else: ?>
            <?php echo smarty_function_cycle(array('name' => 'endrow2','values' => ",,,,</tr></table>"), $this);?>

          <?php endif; ?>
        <?php endfor; endif; ?>
      </td>
      </tr>
      </table>
    <?php endif; ?>
    
        <a name='comments'></a>
    <table cellpadding='0' cellspacing='0' width='100%'>
    <tr>  
    <td class='header'>
      <?php echo $this->_tpl_vars['profile38']; ?>
 (<span id='total_comments'><?php echo $this->_tpl_vars['total_comments']; ?>
</span>)
      <?php if ($this->_tpl_vars['total_comments'] != 0): ?>&nbsp;[ <a href='profile_comments.php?user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['profile25']; ?>
 <?php echo $this->_tpl_vars['profile32']; ?>
</a> ]<?php endif; ?>
    </td>
    </tr>
      <?php if ($this->_tpl_vars['allowed_to_comment'] != 0): ?>
        <tr>
        <td class='profile_postcomment'>
        <form action='profile_comments.php' method='post' target='AddCommentWindow' onSubmit='checkText()'>
        <textarea name='comment_body' id='comment_body' rows='2' cols='65' onfocus='removeText(this)' onblur='addText(this)' class='comment_area'><?php echo $this->_tpl_vars['profile44']; ?>
</textarea>

          <table cellpadding='0' cellspacing='0' width='100%'>
          <tr>
          <?php if ($this->_tpl_vars['setting']['setting_comment_code'] == 1): ?>
            <td width='75' valign='top'><img src='./images/secure.php' id='secure_image' border='0' height='20' width='67' class='signup_code'></td>
            <td width='68' style='padding-top: 4px;'><input type='text' name='comment_secure' id='comment_secure' class='text' size='6' maxlength='10'></td>
            <td width='10'><img src='./images/icons/tip.gif' border='0' class='icon' onMouseover="tip('<?php echo $this->_tpl_vars['profile49']; ?>
')"; onMouseout="hidetip()"></td>
          <?php endif; ?>
          <td align='right' style='padding-top: 5px;'>
          <input type='submit' id='comment_submit' class='button' value='<?php echo $this->_tpl_vars['profile48']; ?>
'>
          <input type='hidden' name='user' value='<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'>
          <input type='hidden' name='task' value='dopost'>
          </form>
          </td>
          </tr>
          </table>
        <div id='comment_error' style='color: #FF0000; display: none;'></div>
        <iframe name='AddCommentWindow' style='display: none' src=''></iframe>
	</div>
	</div>
	</td>
	</tr>
      <?php endif; ?>
	<tr>
	<td class='profile' id='profile_comments'>

            <?php unset($this->_sections['comment_loop']);
$this->_sections['comment_loop']['name'] = 'comment_loop';
$this->_sections['comment_loop']['loop'] = is_array($_loop=$this->_tpl_vars['comments']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['comment_loop']['show'] = true;
$this->_sections['comment_loop']['max'] = $this->_sections['comment_loop']['loop'];
$this->_sections['comment_loop']['step'] = 1;
$this->_sections['comment_loop']['start'] = $this->_sections['comment_loop']['step'] > 0 ? 0 : $this->_sections['comment_loop']['loop']-1;
if ($this->_sections['comment_loop']['show']) {
    $this->_sections['comment_loop']['total'] = $this->_sections['comment_loop']['loop'];
    if ($this->_sections['comment_loop']['total'] == 0)
        $this->_sections['comment_loop']['show'] = false;
} else
    $this->_sections['comment_loop']['total'] = 0;
if ($this->_sections['comment_loop']['show']):

            for ($this->_sections['comment_loop']['index'] = $this->_sections['comment_loop']['start'], $this->_sections['comment_loop']['iteration'] = 1;
                 $this->_sections['comment_loop']['iteration'] <= $this->_sections['comment_loop']['total'];
                 $this->_sections['comment_loop']['index'] += $this->_sections['comment_loop']['step'], $this->_sections['comment_loop']['iteration']++):
$this->_sections['comment_loop']['rownum'] = $this->_sections['comment_loop']['iteration'];
$this->_sections['comment_loop']['index_prev'] = $this->_sections['comment_loop']['index'] - $this->_sections['comment_loop']['step'];
$this->_sections['comment_loop']['index_next'] = $this->_sections['comment_loop']['index'] + $this->_sections['comment_loop']['step'];
$this->_sections['comment_loop']['first']      = ($this->_sections['comment_loop']['iteration'] == 1);
$this->_sections['comment_loop']['last']       = ($this->_sections['comment_loop']['iteration'] == $this->_sections['comment_loop']['total']);
?>
        <div id='comment_<?php echo smarty_function_math(array('equation' => 't-c','t' => count($this->_tpl_vars['comments']),'c' => $this->_sections['comment_loop']['index']), $this);?>
'>
        <table cellpadding='0' cellspacing='0' width='100%'>
        <tr>
        <td class='profile_item1' width='80'>
          <?php if ($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_id'] != 0): ?>
            <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_photo('./images/nophoto.gif'); ?>
' class='photo' border='0' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_photo('./images/nophoto.gif'),'75','75','w'); ?>
'></a>
          <?php else: ?>
            <img src='./images/nophoto.gif' class='photo' border='0' width='75'>
          <?php endif; ?>
        </td>
        <td class='profile_item2'>
          <table cellpadding='0' cellspacing='0' width='100%'>
          <tr>
          <td class='profile_comment_author'><b><?php if ($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_id'] != 0): ?><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']; ?>
</a><?php else:  echo $this->_tpl_vars['profile33'];  endif; ?></b> - <?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['profile20'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_date'],$this->_tpl_vars['global_timezone'])); ?>
</td>
          <td class='profile_comment_author' align='right' nowrap='nowrap'>&nbsp;<?php if ($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_id'] != 0): ?><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']); ?>
#comments'><?php echo $this->_tpl_vars['profile26']; ?>
</a>&nbsp;|&nbsp;<a href='user_messages_new.php?to=<?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['profile34']; ?>
</a><?php endif; ?></td>
          </tr>
          <tr>
          <td colspan='2' class='profile_comment_body'><?php echo ((is_array($_tmp=$this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_body'])) ? $this->_run_mod_handler('choptext', true, $_tmp, 50, "<br>") : smarty_modifier_choptext($_tmp, 50, "<br>")); ?>
</td>
          </tr>
          </table>
        </td>
        </tr>
        </table>
        </div>
      <?php endfor; endif; ?>


    </td>
    </tr>
    </table>
    
  <?php endif; ?>
  
</td>
</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>