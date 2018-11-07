<?php /* Smarty version 2.6.14, created on 2012-03-03 02:12:22
         compiled from user_album_upload.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album.php'><?php echo $this->_tpl_vars['user_album_upload3']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_settings.php'><?php echo $this->_tpl_vars['user_album_upload4']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'><?php echo $this->_tpl_vars['user_album_upload5']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<table cellpadding='0' cellspacing='0'>
<tr>
<td width='100%'>

  <img src='./images/icons/image48.gif' border='0' class='icon_big'>
  <div class='page_header'><?php echo $this->_tpl_vars['user_album_upload6']; ?>
 <a href='<?php echo $this->_tpl_vars['url']->url_create('album',$this->_tpl_vars['user']->user_info['user_username'],$this->_tpl_vars['album_id']); ?>
'><?php echo $this->_tpl_vars['album_title']; ?>
</a></div>
  <div><?php echo $this->_tpl_vars['user_album_upload7']; ?>
</div>

</td>
<td align='right' valign='top'>

  <table cellpadding='0' cellspacing='0' width='120'>
  <tr><td class='button' nowrap='nowrap'><a href='user_album_update.php?album_id=<?php echo $this->_tpl_vars['album_id']; ?>
'><img src='./images/icons/album_back16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_album_upload8']; ?>
</a></td></tr>
  </table>

</td>
</tr>
</table>

<br>

<div><?php echo $this->_tpl_vars['user_album_upload9']; ?>
 <?php echo $this->_tpl_vars['space_left']; ?>
 <?php echo $this->_tpl_vars['user_album_upload17']; ?>
 <?php echo $this->_tpl_vars['allowed_exts']; ?>
 <?php echo $this->_tpl_vars['user_album_upload18']; ?>
 <?php echo $this->_tpl_vars['max_filesize']; ?>
 <?php echo $this->_tpl_vars['user_album_upload19']; ?>
</div>

<?php if ($this->_tpl_vars['new_album'] == 1): ?>
  <br>
  <table cellpadding='0' cellspacing='0'>
  <tr><td class='result'>
    <div class='success'><img src='./images/success.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['user_album_upload2']; ?>
</div>
  </td>
  </tr>
  </table>
<?php endif; ?>

<?php if ($this->_tpl_vars['file1_result'] != "" || $this->_tpl_vars['file2_result'] != "" || $this->_tpl_vars['file3_result'] != "" || $this->_tpl_vars['file4_result'] != "" || $this->_tpl_vars['file5_result'] != ""): ?>
  <br>
  <table cellpadding='0' cellspacing='0'>
  <tr><td class='result'>
    <div class='success' style='text-align: left;'> 
      <div><?php echo $this->_tpl_vars['file1_result']; ?>
</div>
      <div><?php echo $this->_tpl_vars['file2_result']; ?>
</div>
      <div><?php echo $this->_tpl_vars['file3_result']; ?>
</div>
      <div><?php echo $this->_tpl_vars['file4_result']; ?>
</div>
      <div><?php echo $this->_tpl_vars['file5_result']; ?>
</div>
    </div>
  </td>
  </tr>
  </table>
<?php endif; ?>


<br>

<form action='user_album_upload.php' name='uploadform' method='post' onsubmit='doupload()' enctype='multipart/form-data'>

<div id='div1'>
  <table cellpadding='0' cellspacing='0' class='form'>
  <tr>
  <td class='form1' width='65'><img src='./images/icons/album16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_album_upload10']; ?>
</td>
  <td class='form2'><input type='file' name='file1' size='60' class='text' onchange="showdiv('div2');showdiv('div_submit');"></td>
  </tr>
  </table>
</div>

<div id='div2' style='display: none;'>
  <table cellpadding='0' cellspacing='0' class='form'>
  <tr>
  <td class='form1' width='65'><img src='./images/icons/album16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_album_upload11']; ?>
</td>
  <td class='form2'><input type='file' name='file2' size='60' class='text' onchange="showdiv('div3');"></td>
  </tr>
  </table>
</div>

<div id='div3' style='display: none;'>
  <table cellpadding='0' cellspacing='0' class='form'>
  <tr>
  <td class='form1' width='65'><img src='./images/icons/album16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_album_upload12']; ?>
</td>
  <td class='form2'><input type='file' name='file3' size='60' class='text' onchange="showdiv('div4');"></td>
  </tr>
  </table>
</div>

<div id='div4' style='display: none;'>
  <table cellpadding='0' cellspacing='0' class='form'>
  <tr>
  <td class='form1' width='65'><img src='./images/icons/album16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_album_upload13']; ?>
</td>
  <td class='form2'><input type='file' name='file4' size='60' class='text' onchange="showdiv('div5');"></td>
  </tr>
  </table>
</div>

<div id='div5' style='display: none;'>
  <table cellpadding='0' cellspacing='0' class='form'>
  <tr>
  <td class='form1' width='65'><img src='./images/icons/album16.gif' border='0' class='icon'><?php echo $this->_tpl_vars['user_album_upload14']; ?>
</td>
  <td class='form2'><input type='file' name='file5' size='60' class='text'></td>
  </tr>
  </table>
</div>

<div id='div_submit' style='display: none;'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='form1' width='65'>&nbsp;</td>
  <td class='form1'>
    <input type='submit' class='button' name='submit' value='<?php echo $this->_tpl_vars['user_album_upload15']; ?>
'>&nbsp;
    <input type='hidden' name='task' value='doupload'>
    <input type='hidden' name='MAX_FILE_SIZE' value='50000000'>
    <input type='hidden' name='album_id' value='<?php echo $this->_tpl_vars['album_id']; ?>
'>
  </td>
  <td class='form2'>
    &nbsp;<input type='text' class='album_uploadstatus' name='status' id='status' readonly='readonly'>
    </form>
  </td>
  </tr>
  </table>
</div>

<?php echo '
<script lang=\'javascript\'>
<!--
function doupload() {
document.uploadform.submit.disabled = true;
document.uploadform.status.value = "';  echo $this->_tpl_vars['user_album_upload16'];  echo '";
window.setTimeout("doMsg1()", 400);
}
function doMsg1() {
document.uploadform.status.value  = document.uploadform.status.value + \'.\';
if(document.uploadform.status.value == \'';  echo $this->_tpl_vars['user_album_upload16'];  echo '\'+\'....\') { document.uploadform.status.value = \'';  echo $this->_tpl_vars['user_album_upload16'];  echo '\'; }
window.setTimeout("doMsg1()", 400);
}
// -->
</script>
'; ?>


</td></tr></table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>