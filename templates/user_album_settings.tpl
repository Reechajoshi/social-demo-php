{include file='header.tpl'}

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album.php'>{$user_album_settings2}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album_settings.php'>{$user_album_settings3}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'>{$user_album_settings4}</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/image48.gif' border='0' class='icon_big'>
<div class='page_header'>{$user_album_settings8}</div>
<div>{$user_album_settings9}</div>

<br>

{* SHOW SUCCESS MESSAGE *}
{if $result != ""}
  <br>
  <table cellpadding='0' cellspacing='0'><tr><td class='result'>
    <div class='success'><img src='./images/success.gif' border='0' class='icon'> {$user_album_settings1}</div>
  </td></tr></table>
{/if}

<br>

<form action='user_album_settings.php' method='post'>

{if $user->level_info.level_album_style == 1}
  <div><b>{$user_album_settings5}</b></div>
  <div class='form_desc'>{$user_album_settings6}</div>
  <textarea name='style_album' rows='17' cols='50' style='width: 100%; font-family: courier, serif;'>{$style_album}</textarea>
  <br><br>
{/if}


{if $user->level_info.level_media_comments !== "6"}
  <div><b>{$user_album_settings10}</b></div>
  <div class='form_desc'>{$user_album_settings11}</div>
  <table cellpadding='0' cellspacing='0' class='editprofile_options'>
  <tr><td><input type='checkbox' value='1' id='mediacomment' name='usersetting_notify_mediacomment'{if $user->usersetting_info.usersetting_notify_mediacomment == 1} CHECKED{/if}></td><td><label for='mediacomment'>{$user_album_settings12}</label></td></tr>
  </table>
  <br>
{/if}


<input type='submit' class='button' value='{$user_album_settings7}'>
<input type='hidden' name='task' value='dosave'>
</form>

</td></tr></table>

{include file='footer.tpl'}