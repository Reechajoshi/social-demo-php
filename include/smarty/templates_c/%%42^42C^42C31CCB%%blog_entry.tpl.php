<?php /* Smarty version 2.6.14, created on 2012-03-19 15:52:11
         compiled from blog_entry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'blog_entry.tpl', 8, false),array('modifier', 'choptext', 'blog_entry.tpl', 121, false),array('function', 'math', 'blog_entry.tpl', 185, false),)), $this); ?>
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
    commentBody.value = \'';  echo $this->_tpl_vars['blog_entry14'];  echo '\';
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
  commentSubmit.value = \'';  echo $this->_tpl_vars['blog_entry15'];  echo '\';
  commentSubmit.disabled = true;
  
}

function addComment(is_error, comment_body, comment_date) {
  if(is_error == 1) {
    var commentError = document.getElementById(\'comment_error\');
    commentError.style.display = \'block\';
    if(comment_body == \'\') {
      commentError.innerHTML = \'';  echo $this->_tpl_vars['blog_entry16'];  echo '\';
    } else {
      commentError.innerHTML = \'';  echo $this->_tpl_vars['blog_entry17'];  echo '\';
    }
    var commentSubmit = document.getElementById(\'comment_submit\');
    commentSubmit.value = \'';  echo $this->_tpl_vars['blog_entry18'];  echo '\';
    commentSubmit.disabled = false;
  } else {
    var commentError = document.getElementById(\'comment_error\');
    commentError.style.display = \'none\';
    commentError.innerHTML = \'\';

    var commentBody = document.getElementById(\'comment_body\');
    commentBody.value = \'\';
    addText(commentBody);

    var commentSubmit = document.getElementById(\'comment_submit\');
    commentSubmit.value = \'';  echo $this->_tpl_vars['blog_entry18'];  echo '\';
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
    var newTable = "<table cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'><tr><td class=\'blog_item1\' width=\'80\'>";
    '; ?>

      <?php if ($this->_tpl_vars['user']->user_info['user_id'] != 0): ?>
        newTable += "<a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['user']->user_photo('./images/nophoto.gif'); ?>
' class='photo' border='0' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['user']->user_photo('./images/nophoto.gif'),'75','75','w'); ?>
'></a></td><td class='blog_item2'><table cellpadding='0' cellspacing='0' width='100%'><tr><td class='blog_comment_author'><b><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
</a></b> - <?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['blog_entry21'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone(time(),$this->_tpl_vars['global_timezone'])); ?>
</td><td class='blog_comment_author' align='right' nowrap='nowrap'>&nbsp;[ <a href='user_messages_new.php?to=<?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['blog_entry20']; ?>
</a> ]</td>";
      <?php else: ?>
        newTable += "<img src='./images/nophoto.gif' class='photo' border='0' width='75'></td><td class='blog_item2'><table cellpadding='0' cellspacing='0' width='100%'><tr><td class='blog_comment_author'><b><?php echo $this->_tpl_vars['blog_entry11']; ?>
</b> - <?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['blog_entry21'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone(time(),$this->_tpl_vars['global_timezone'])); ?>
</td><td class='blog_comment_author' align='right' nowrap='nowrap'>&nbsp;</td>";
      <?php endif; ?>
      newTable += "</tr><tr><td colspan='2' class='blog_comment_body'>"+comment_body+"</td></tr></table></td></tr></table>";
    <?php echo '
    newComment.innerHTML = newTable;
    var blogComments = document.getElementById(\'blog_comments\');
    var prevComment = document.getElementById(\'comment_\'+last_comment);
    blogComments.insertBefore(newComment, prevComment);
    next_comment++;
    last_comment++;
  }
}

//-->
</script>
'; ?>



<div class='page_header'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
</a><?php echo $this->_tpl_vars['blog_entry3']; ?>
 <a href='<?php echo $this->_tpl_vars['url']->url_create('blog',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['blog_entry4']; ?>
</a></div>
<br>

<?php if (isset ( $this->_tpl_vars['page_is_preview'] )): ?>
<table cellspacing='0' cellpadding='0' id='blogpreview' style='width:100%'>
<tr><td>&nbsp;</td><td class='content' style='width:100%'>
<?php endif; ?>

<div class='blog_entry1'>
  <table cellpadding='0' cellspacing='0' width='100%'>
  <tr>
  <td valign='top' width='1' style='padding-top: 1px;'><img src='./images/icons/blogentry16.gif' border='0' class='icon'></td>
  <td valign='top'>
    <div class='blog_title'><?php echo $this->_tpl_vars['blogentry_info']['blogentry_title']; ?>
</div>
    <div class='blog_date'><?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['blog_entry21'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['blogentry_info']['blogentry_date'],$this->_tpl_vars['global_timezone'])); ?>
</div>
        <?php if ($this->_tpl_vars['blogentry_info']['blogentrycat_title'] != ""): ?>
      <div class='blog_category'><?php echo $this->_tpl_vars['blog_entry7']; ?>
 <a href='blog_category.php?blogentrycat_id=<?php echo $this->_tpl_vars['blogentry_info']['blogentry_blogentrycat_id']; ?>
'><?php echo $this->_tpl_vars['blogentry_info']['blogentrycat_title']; ?>
</a></div>
    <?php endif; ?>
    <div class='blog_body'><?php echo ((is_array($_tmp=$this->_tpl_vars['blogentry_info']['blogentry_body'])) ? $this->_run_mod_handler('choptext', true, $_tmp, 75, "<br>") : smarty_modifier_choptext($_tmp, 75, "<br>")); ?>
</div>
  </td>
  </tr>
  </table>
</div>

<?php if (isset ( $this->_tpl_vars['page_is_preview'] )): ?>
  </td></tr></table>
  <script type='text/javascript'>
  <!--
  parent.show_preview();
  //-->
  </script>
<?php endif; ?>

<br>

<div>
<a href='<?php echo $this->_tpl_vars['url']->url_create('blog',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><img src='./images/icons/back16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['blog_entry24'];  echo $this->_tpl_vars['owner']->user_info['user_username'];  echo $this->_tpl_vars['blog_entry25']; ?>
</a>
&nbsp;&nbsp;&nbsp;
<a href='user_report.php?return_url=<?php echo $this->_tpl_vars['url']->url_current(); ?>
'><img src='./images/icons/report16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['blog_entry26']; ?>
</a>
</div>

<br>

<table cellpadding='0' cellspacing='0' width='100%'>
<tr>  
<td class='header'>
  <?php echo $this->_tpl_vars['blog_entry8']; ?>
 (<span id='total_comments'><?php echo $this->_tpl_vars['total_comments']; ?>
</span>)
</td>
</tr>
<?php if ($this->_tpl_vars['allowed_to_comment'] != 0): ?>
  <tr id='blog_postcomment'>
  <td class='blog_postcomment'>
    <form action='blog_entry.php' method='post' target='AddCommentWindow' onSubmit='checkText()'>
    <textarea name='comment_body' id='comment_body' rows='2' cols='65' onfocus='removeText(this)' onblur='addText(this)' style='color: #888888; width: 100%;'><?php echo $this->_tpl_vars['blog_entry14']; ?>
</textarea>

    <table cellpadding='0' cellspacing='0' width='100%'>
    <tr>
    <?php if ($this->_tpl_vars['setting']['setting_comment_code'] == 1): ?>
      <td width='75' valign='top'><img src='./images/secure.php' id='secure_image' border='0' height='20' width='67' class='signup_code'></td>
      <td width='68' style='padding-top: 4px;'><input type='text' name='comment_secure' id='comment_secure' class='text' size='6' maxlength='10'></td>
      <td width='10'><img src='./images/icons/tip.gif' border='0' class='icon' onMouseover="tip('<?php echo $this->_tpl_vars['blog_entry19']; ?>
')"; onMouseout="hidetip()"></td>
    <?php endif; ?>
    <td align='right' style='padding-top: 5px;'>
    <input type='submit' id='comment_submit' class='button' value='<?php echo $this->_tpl_vars['blog_entry18']; ?>
'>
    <input type='hidden' name='user' value='<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'>
    <input type='hidden' name='blogentry_id' value='<?php echo $this->_tpl_vars['blogentry_info']['blogentry_id']; ?>
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
<td class='blog' id='blog_comments'>

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
    <td class='blog_item1' width='80'>
      <?php if ($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_id'] != 0): ?>
        <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_photo('./images/nophoto.gif'); ?>
' class='photo' border='0' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_photo('./images/nophoto.gif'),'75','75','w'); ?>
'></a>
      <?php else: ?>
        <img src='./images/nophoto.gif' class='photo' border='0' width='75'>
      <?php endif; ?>
    </td>
    <td class='blog_item2'>
      <table cellpadding='0' cellspacing='0' width='100%'>
      <tr>
      <td class='blog_comment_author'><b><?php if ($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_id'] != 0): ?><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']; ?>
</a><?php else:  echo $this->_tpl_vars['blog_entry11'];  endif; ?></b> - <?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_timeformat'])." ".($this->_tpl_vars['blog_entry21'])." ".($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_date'],$this->_tpl_vars['global_timezone'])); ?>
</td>
      <td class='blog_comment_author' align='right' nowrap='nowrap'>&nbsp;[ <a href='user_messages_new.php?to=<?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_author']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['blog_entry20']; ?>
</a> ]</td>
      </tr>
      <tr>
      <td colspan='2' class='blog_comment_body'><?php echo $this->_tpl_vars['comments'][$this->_sections['comment_loop']['index']]['comment_body']; ?>
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