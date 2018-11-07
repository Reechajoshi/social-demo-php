<?php /* Smarty version 2.6.14, created on 2012-03-03 02:12:54
         compiled from album_file.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'album_file.tpl', 9, false),array('function', 'math', 'album_file.tpl', 265, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php echo '
<script type=\'text/javascript\'>
<!--
var comment_changed = 0;
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
    commentBody.value = \'';  echo $this->_tpl_vars['album_file20'];  echo '\';
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
  commentSubmit.value = \'';  echo $this->_tpl_vars['album_file14'];  echo '\';
  commentSubmit.disabled = true;
  
}

function addComment(is_error, comment_body, comment_date) {
  if(is_error == 1) {
    var commentError = document.getElementById(\'comment_error\');
    commentError.style.display = \'block\';
    if(comment_body == \'\') {
      commentError.innerHTML = \'';  echo $this->_tpl_vars['album_file15'];  echo '\';
    } else {
      commentError.innerHTML = \'';  echo $this->_tpl_vars['album_file16'];  echo '\';
    }
    var commentSubmit = document.getElementById(\'comment_submit\');
    commentSubmit.value = \'';  echo $this->_tpl_vars['album_file11'];  echo '\';
    commentSubmit.disabled = false;
  } else {
    var commentError = document.getElementById(\'comment_error\');
    commentError.style.display = \'none\';
    commentError.innerHTML = \'\';

    var commentBody = document.getElementById(\'comment_body\');
    commentBody.value = \'\';
    addText(commentBody);

    var commentSubmit = document.getElementById(\'comment_submit\');
    commentSubmit.value = \'';  echo $this->_tpl_vars['album_file11'];  echo '\';
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

    var newComment = document.createElement(\'div\');
    var divIdName = \'comment_\'+next_comment;
    newComment.setAttribute(\'id\',divIdName);
    var newTable = "<table cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'><tr><td class=\'album_item1\' width=\'80\'>";
    '; ?>

      <?php if ($this->_tpl_vars['user']->user_info['user_id'] != 0): ?>
        newTable += "<a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['user']->user_photo('./images/nophoto.gif'); ?>
' class='photo' border='0' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['user']->user_photo('./images/nophoto.gif'),'75','75','w'); ?>
'></a></td><td class='album_item2'><table cellpadding='0' cellspacing='0' width='100%'><tr><td class='album_comment_author'><b><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
</a></b> - <?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['album_file22'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone(time(),$this->_tpl_vars['global_timezone'])); ?>
</td><td class='album_comment_author' align='right' nowrap='nowrap'>&nbsp;[ <a href='user_messages_new.php?to=<?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['album_file23']; ?>
</a> ]</td>";
      <?php else: ?>
        newTable += "<img src='./images/nophoto.gif' class='photo' border='0' width='75'></td><td class='album_item2'><table cellpadding='0' cellspacing='0' width='100%'><tr><td class='album_comment_author'><b><?php echo $this->_tpl_vars['album_file19']; ?>
</b> - <?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['album_file22'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone(time(),$this->_tpl_vars['global_timezone'])); ?>
</td><td class='album_comment_author' align='right' nowrap='nowrap'>&nbsp;</td>";
      <?php endif; ?>
      newTable += "</tr><tr><td colspan='2' class='album_comment_body'>"+comment_body+"</td></tr></table></td></tr></table>";
    <?php echo '
    newComment.innerHTML = newTable;
    var mediaComments = document.getElementById(\'media_comments\');
    var prevComment = document.getElementById(\'comment_\'+last_comment);
    mediaComments.insertBefore(newComment, prevComment);
    next_comment++;
    last_comment++;
  }
}
//-->
</script>
'; ?>


<?php if ($this->_tpl_vars['album_info']['album_title'] == ""):  $this->assign('album_title', $this->_tpl_vars['album_file3']);  else:  $this->assign('album_title', $this->_tpl_vars['album_info']['album_title']);  endif; ?>

<div class='page_header'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
</a><?php echo $this->_tpl_vars['album_file4']; ?>
 <a href='<?php echo $this->_tpl_vars['url']->url_create('albums',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['album_file5']; ?>
</a> &#187; <a href='<?php echo $this->_tpl_vars['url']->url_create('album',$this->_tpl_vars['owner']->user_info['user_username'],$this->_tpl_vars['album_info']['album_id']); ?>
'><?php echo $this->_tpl_vars['album_title']; ?>
</a></div>


<?php $this->assign('media_dir', $this->_tpl_vars['url']->url_userdir($this->_tpl_vars['owner']->user_info['user_id'])); ?>
<?php $this->assign('media_path', ($this->_tpl_vars['media_dir']).($this->_tpl_vars['media_info']['media_id']).".".($this->_tpl_vars['media_info']['media_ext'])); ?>


<?php if ($this->_tpl_vars['media_info']['media_ext'] == 'jpg' || $this->_tpl_vars['media_info']['media_ext'] == 'jpeg' || $this->_tpl_vars['media_info']['media_ext'] == 'gif' || $this->_tpl_vars['media_info']['media_ext'] == 'png' || $this->_tpl_vars['media_info']['media_ext'] == 'bmp'): ?>
  <?php $this->assign('file_src', "<img src='".($this->_tpl_vars['media_path'])."' border='0'>"); ?>

<?php elseif ($this->_tpl_vars['media_info']['media_ext'] == 'mp3' || $this->_tpl_vars['media_info']['media_ext'] == 'mp4' || $this->_tpl_vars['media_info']['media_ext'] == 'wav'): ?>
  <?php $this->assign('media_download', "[ <a href='".($this->_tpl_vars['media_path'])."'>".($this->_tpl_vars['album_file6'])."</a> ]"); ?>
  <?php $this->assign('file_src', "<a href='".($this->_tpl_vars['media_path'])."'><img src='./images/icons/audio_big.gif' border='0'></a>"); ?>

<?php elseif ($this->_tpl_vars['media_info']['media_ext'] == 'mpeg' || $this->_tpl_vars['media_info']['media_ext'] == 'mpg' || $this->_tpl_vars['media_info']['media_ext'] == 'mpa' || $this->_tpl_vars['media_info']['media_ext'] == 'avi' || $this->_tpl_vars['media_info']['media_ext'] == 'ram' || $this->_tpl_vars['media_info']['media_ext'] == 'rm'): ?>
  <?php $this->assign('media_download', "[ <a href='".($this->_tpl_vars['media_path'])."'>".($this->_tpl_vars['album_file7'])."</a> ]"); ?>
  <?php $this->assign('file_src', "
    <object id='video'
      classid='CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6'
      type='application/x-oleobject'>
      <param name='url' value='".($this->_tpl_vars['media_path'])."'>
      <param name='sendplaystatechangeevents' value='True'>
      <param name='autostart' value='true'>
      <param name='autosize' value='true'>
      <param name='uimode' value='mini'>
      <param name='playcount' value='9999'>
    </OBJECT>
  "); ?>

<?php elseif ($this->_tpl_vars['media_info']['media_ext'] == 'mov' || $this->_tpl_vars['media_info']['media_ext'] == 'moov' || $this->_tpl_vars['media_info']['media_ext'] == 'movie' || $this->_tpl_vars['media_info']['media_ext'] == 'qtm' || $this->_tpl_vars['media_info']['media_ext'] == 'qt'): ?>
  <?php $this->assign('media_download', "[ <a href='".($this->_tpl_vars['media_path'])."'>".($this->_tpl_vars['album_file7'])."</a> ]"); ?>
  <?php $this->assign('file_src', "
    <embed src='".($this->_tpl_vars['media_path'])."' controller='true' autosize='1' scale='1' width='550' height='350'>
  "); ?>

<?php elseif ($this->_tpl_vars['media_info']['media_ext'] == 'swf'): ?>
  <?php $this->assign('file_src', "
    <object width='350' height='250' classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' id='mymoviename'> 
      <param name='movie' value='".($this->_tpl_vars['media_path'])."'>  
      <param name='quality' value='high'> 
      <param name='bgcolor' value='#ffffff'> 
      <embed src='".($this->_tpl_vars['media_path'])."' quality='high' bgcolor='#ffffff' name='Flash Movie' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer'> 
      </embed> 
    </object> 
  "); ?>

<?php else: ?>
  <?php $this->assign('media_download', "[ <a href='".($this->_tpl_vars['media_path'])."'>".($this->_tpl_vars['album_file8'])."</a> ]"); ?>
  <?php $this->assign('file_src', "<a href='".($this->_tpl_vars['media_path'])."'><img src='./images/icons/file_big.gif' border='0'></a>"); ?>
<?php endif; ?>





<br>

<table cellpadding='0' cellspacing='0' align='center'>
<tr>
<td width='30'><?php if ($this->_tpl_vars['link_first'] != "#"): ?><a href='<?php echo $this->_tpl_vars['link_first']; ?>
'><img src='./images/icons/arrow_start.gif' class='icon' border='0'></a><?php endif; ?></td>
<td width='30'><?php if ($this->_tpl_vars['link_back'] != "#"): ?><a href='<?php echo $this->_tpl_vars['link_back']; ?>
'><img src='./images/icons/arrow_back.gif' class='icon' border='0'></a><?php endif; ?>
</td>
<td align='center' nowrap='nowrap' style='padding-right: 8px;'><b>[ <a href='<?php echo $this->_tpl_vars['url']->url_create('album',$this->_tpl_vars['owner']->user_info['user_username'],$this->_tpl_vars['album_info']['album_id']); ?>
'><?php echo $this->_tpl_vars['album_file9'];  echo $this->_tpl_vars['owner']->user_info['user_username'];  echo $this->_tpl_vars['album_file10']; ?>
</a> ]</b></td>
<td width='30'><?php if ($this->_tpl_vars['link_next'] != "#"): ?><a href='<?php echo $this->_tpl_vars['link_next']; ?>
'><img src='./images/icons/arrow_next.gif' class='icon' border='0'></a><?php endif; ?></td>
<td width='30'><?php if ($this->_tpl_vars['link_end'] != "#"): ?><a href='<?php echo $this->_tpl_vars['link_end']; ?>
'><img src='./images/icons/arrow_end.gif' class='icon' border='0'></a><?php endif; ?></td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' align='center' width='100%'>
<tr>
<td align='center'>
  <div class='album_title'><?php echo $this->_tpl_vars['media_info']['media_title']; ?>
</div>
  <?php if ($this->_tpl_vars['media_info']['media_desc'] != ""):  echo $this->_tpl_vars['media_info']['media_desc']; ?>
<br><br><?php endif; ?>
  <?php if ($this->_tpl_vars['link_next'] != "#"): ?><a href='<?php echo $this->_tpl_vars['link_next']; ?>
'><?php echo $this->_tpl_vars['file_src']; ?>
</a><?php else:  echo $this->_tpl_vars['file_src'];  endif; ?>
  <?php if ($this->_tpl_vars['media_download'] != ""): ?><br><br><?php echo $this->_tpl_vars['media_download'];  endif; ?>

  <br><br>

    <table cellpadding='0' cellspacing='0' align='center'>
  <tr>
  <td>
    <table cellpadding='0' cellspacing='0'>
    <tr><td class='button'>
      <a href='user_report.php?return_url=<?php echo $this->_tpl_vars['url']->url_current(); ?>
'><img src='./images/icons/report16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['album_file12']; ?>
</a>
    </td></tr>
    </table>
  </td>
  </tr>
  </table>
</td>
</tr>
</table>


<br>

<table cellpadding='0' cellspacing='0' width='100%'>
<tr>  
<td class='header'>
  <?php echo $this->_tpl_vars['album_file13']; ?>
 (<span id='total_comments'><?php echo $this->_tpl_vars['total_comments']; ?>
</span>)
</td>
</tr>
<?php if ($this->_tpl_vars['allowed_to_comment'] != 0): ?>
  <tr>
  <td class='album_postcomment'>
    <form action='album_file.php' method='post' target='AddCommentWindow' onSubmit='checkText()'>
    <textarea name='comment_body' id='comment_body' rows='2' cols='65' onfocus='removeText(this)' onblur='addText(this)' style='color: #888888; width: 100%;'><?php echo $this->_tpl_vars['album_file20']; ?>
</textarea>

    <table cellpadding='0' cellspacing='0' width='100%'>
    <tr>
    <?php if ($this->_tpl_vars['setting']['setting_comment_code'] == 1): ?>
      <td width='75' valign='top'><img src='./images/secure.php' id='secure_image' border='0' height='20' width='67' class='signup_code'></td>
      <td width='68' style='padding-top: 4px;'><input type='text' name='comment_secure' id='comment_secure' class='text' size='6' maxlength='10'></td>
      <td width='10'><img src='./images/icons/tip.gif' border='0' class='icon' onMouseover="tip('<?php echo $this->_tpl_vars['album_file21']; ?>
')"; onMouseout="hidetip()"></td>
    <?php endif; ?>
    <td align='right' style='padding-top: 5px;'>
    <input type='submit' id='comment_submit' class='button' value='<?php echo $this->_tpl_vars['album_file11']; ?>
'>
    <input type='hidden' name='user' value='<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'>
    <input type='hidden' name='media_id' value='<?php echo $this->_tpl_vars['media_info']['media_id']; ?>
'>
    <input type='hidden' name='album_id' value='<?php echo $this->_tpl_vars['album_info']['album_id']; ?>
'>
    <input type='hidden' name='task' value='dopost'>
    </form>
    </td>
    </tr>
    </table>
    <div id='comment_error' style='color: #FF0000; display: none;'></div>
    <iframe name='AddCommentWindow' style='display: none' src=''></iframe>
  </td>
  </tr>
<?php endif; ?>
<tr>
<td class='album' id='media_comments'>

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
    <td class='album_item1' width='80'>
      <?php if ($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_id'] != 0): ?>
        <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_photo('./images/nophoto.gif'); ?>
' class='photo' border='0' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_photo('./images/nophoto.gif'),'75','75','w'); ?>
'></a>
      <?php else: ?>
        <img src='./images/nophoto.gif' class='photo' border='0' width='75'>
      <?php endif; ?>
    </td>
    <td class='album_item2'>
      <table cellpadding='0' cellspacing='0' width='100%'>
      <tr>
      <td class='album_comment_author'><b><?php if ($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_id'] != 0): ?><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']; ?>
</a><?php else:  echo $this->_tpl_vars['album_file19'];  endif; ?></b> - <?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['album_file22'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_date'],$this->_tpl_vars['global_timezone'])); ?>
</td>
      <td class='album_comment_author' align='right' nowrap='nowrap'>&nbsp;[ <a href='user_messages_new.php?to=<?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['album_file23']; ?>
</a> ]</td>
      </tr>
      <tr>
      <td colspan='2' class='album_comment_body'><?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_body']; ?>
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





<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>