<?php /* Smarty version 2.6.14, created on 2012-03-03 02:12:43
         compiled from user_album_update.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album.php'><?php echo $this->_tpl_vars['user_album_update2']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_settings.php'><?php echo $this->_tpl_vars['user_album_update3']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'><?php echo $this->_tpl_vars['user_album_update4']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/image48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_album_update5']; ?>
 <a href='<?php echo $this->_tpl_vars['url']->url_create('album',$this->_tpl_vars['user']->user_info['user_username'],$this->_tpl_vars['album_id']); ?>
'><?php echo $this->_tpl_vars['album_title']; ?>
</a></div>
<div>
  <?php echo $this->_tpl_vars['user_album_update6']; ?>
 <b><?php echo $this->_tpl_vars['files_total']; ?>
 <?php echo $this->_tpl_vars['user_album_update7']; ?>
</b> 
  <?php echo $this->_tpl_vars['user_album_update8']; ?>
 <b><?php echo $this->_tpl_vars['album_views']; ?>
 <?php echo $this->_tpl_vars['user_album_update9']; ?>
</b>
</div>

<br>

<table cellpadding='0' cellspacing='0'>
<tr>
<td>
  <table cellpadding='0' cellspacing='0' width='140'>
  <tr><td class='button'><img src='./images/icons/album_back16.gif' border='0' class='icon'><a href='user_album.php'><?php echo $this->_tpl_vars['user_album_update10']; ?>
</a></td></tr>
  </table>
</td>
<td style='padding-left: 10px;'>
  <table cellpadding='0' cellspacing='0' width='140'>
  <tr><td class='button'><img src='./images/icons/addimages16.gif' border='0' class='icon'><a href='user_album_upload.php?album_id=<?php echo $this->_tpl_vars['album_id']; ?>
'><?php echo $this->_tpl_vars['user_album_update11']; ?>
</a></td></tr>
  </table>
</td>
<td style='padding-left: 10px;'>
  <table cellpadding='0' cellspacing='0' width='140'>
  <tr><td class='button'><img src='./images/icons/album_edit16.gif' border='0' class='icon'><a href='user_album_edit.php?album_id=<?php echo $this->_tpl_vars['album_id']; ?>
'><?php echo $this->_tpl_vars['user_album_update12']; ?>
</a></td></tr>
  </table>
</td>
</tr>
</table>

<br>

<?php if ($this->_tpl_vars['files_total'] == 0): ?>
    <table cellpadding='0' cellspacing='0'>
    <tr><td class='result'>
      <img src='./images/icons/bulb16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_album_update13']; ?>
 <a href='user_album_upload.php?album_id=<?php echo $this->_tpl_vars['album_id']; ?>
'><?php echo $this->_tpl_vars['user_album_update14']; ?>
</a>
    </td></tr></table>
<?php endif; ?>

<?php if ($this->_tpl_vars['result'] != 0 && $this->_tpl_vars['files_total'] > 0): ?>
  <div class='success'><img src='./images/success.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['user_album_update1']; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['files_total'] > 0): ?>
  <form action='user_album_update.php' method='POST'>
  <?php unset($this->_sections['files_loop']);
$this->_sections['files_loop']['name'] = 'files_loop';
$this->_sections['files_loop']['loop'] = is_array($_loop=$this->_tpl_vars['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['files_loop']['show'] = true;
$this->_sections['files_loop']['max'] = $this->_sections['files_loop']['loop'];
$this->_sections['files_loop']['step'] = 1;
$this->_sections['files_loop']['start'] = $this->_sections['files_loop']['step'] > 0 ? 0 : $this->_sections['files_loop']['loop']-1;
if ($this->_sections['files_loop']['show']) {
    $this->_sections['files_loop']['total'] = $this->_sections['files_loop']['loop'];
    if ($this->_sections['files_loop']['total'] == 0)
        $this->_sections['files_loop']['show'] = false;
} else
    $this->_sections['files_loop']['total'] = 0;
if ($this->_sections['files_loop']['show']):

            for ($this->_sections['files_loop']['index'] = $this->_sections['files_loop']['start'], $this->_sections['files_loop']['iteration'] = 1;
                 $this->_sections['files_loop']['iteration'] <= $this->_sections['files_loop']['total'];
                 $this->_sections['files_loop']['index'] += $this->_sections['files_loop']['step'], $this->_sections['files_loop']['iteration']++):
$this->_sections['files_loop']['rownum'] = $this->_sections['files_loop']['iteration'];
$this->_sections['files_loop']['index_prev'] = $this->_sections['files_loop']['index'] - $this->_sections['files_loop']['step'];
$this->_sections['files_loop']['index_next'] = $this->_sections['files_loop']['index'] + $this->_sections['files_loop']['step'];
$this->_sections['files_loop']['first']      = ($this->_sections['files_loop']['iteration'] == 1);
$this->_sections['files_loop']['last']       = ($this->_sections['files_loop']['iteration'] == $this->_sections['files_loop']['total']);
?>

        <?php if ($this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'jpeg' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'jpg' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'gif' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'png' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'bmp'): ?>
      <?php $this->assign('file_dir', $this->_tpl_vars['url']->url_userdir($this->_tpl_vars['user']->user_info['user_id'])); ?>
      <?php $this->assign('file_src', ($this->_tpl_vars['file_dir']).($this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id'])."_thumb.jpg"); ?>
        <?php elseif ($this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'mp3' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'mp4' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'wav'): ?>
      <?php $this->assign('file_src', './images/icons/audio_big.gif'); ?>
        <?php elseif ($this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'mpeg' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'mpg' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'mpa' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'avi' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'swf' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'mov' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'ram' || $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_ext'] == 'rm'): ?>
      <?php $this->assign('file_src', './images/icons/video_big.gif'); ?>
        <?php else: ?>
      <?php $this->assign('file_src', './images/icons/file_big.gif'); ?>
    <?php endif; ?>

    <div class='album_row'>
    <a name='<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']; ?>
'></a>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td>
      <table cellpadding='0' cellspacing='0' width='220'>
      <tr>
      <td class='album_photo'><a href='<?php echo $this->_tpl_vars['url']->url_create('album_file',$this->_tpl_vars['user']->user_info['user_username'],$this->_tpl_vars['album_id'],$this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']); ?>
'><img src='<?php echo $this->_tpl_vars['file_src']; ?>
' border='0'></a></td>
      </tr>
      </table>
    </td>
    <td class='album_row1' width='100%'>
      <table cellpadding='0' cellspacing='0'>
      <tr>
      <td>
        <?php echo $this->_tpl_vars['user_album_update15']; ?>
<br><input type='text' name='media_title_<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']; ?>
' class='text' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_title']; ?>
'>
        <?php if ($this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_comments_total'] > 0): ?>&nbsp;&nbsp;&nbsp; <b>[ <a href='user_album_comments.php?album_id=<?php echo $this->_tpl_vars['album_id']; ?>
&media_id=<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']; ?>
'><?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_comments_total']; ?>
 <?php echo $this->_tpl_vars['user_album_update16']; ?>
</a> ]</b><?php endif; ?>
        </td>
      </tr>
      <tr><td><br><?php echo $this->_tpl_vars['user_album_update17']; ?>
<br><textarea name='media_desc_<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']; ?>
' rows='3' cols='52'><?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_desc']; ?>
</textarea></td></tr>
      </table>
      <table cellpadding='0' cellspacing='0' class='album_photooptions'>
      <tr>
      <td><input type='checkbox' name='delete_media_<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']; ?>
' id='delete_media_<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']; ?>
' value='1'></td><td><label for='delete_media_<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']; ?>
'><?php echo $this->_tpl_vars['user_album_update18']; ?>
</label> &nbsp;</td>
      <td><input type='radio' name='album_cover' id='album_cover_<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']; ?>
' value='<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']; ?>
'<?php if ($this->_tpl_vars['album_cover'] == $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']): ?> CHECKED<?php endif; ?>></td><td><label for='album_cover_<?php echo $this->_tpl_vars['files'][$this->_sections['files_loop']['index']]['media_id']; ?>
'><?php echo $this->_tpl_vars['user_album_update19']; ?>
</label> &nbsp;</td>
      </tr>
      </table>
    </td>
    </tr>
    </table>
    </div>
  <?php endfor; endif; ?>
  <br>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_album_update20']; ?>
'>&nbsp;
    <input type='hidden' name='task' value='doupdate'>
    <input type='hidden' name='album_id' value='<?php echo $this->_tpl_vars['album_id']; ?>
'>
    </form>
  </td>
  </tr>
  </table>
<?php endif; ?>

</td></tr></table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>