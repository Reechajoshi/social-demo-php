{include file='header.tpl'}

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album.php'>{$user_album_delete1}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_settings.php'>{$user_album_delete2}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'>{$user_album_delete3}</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/image48.gif' border='0' class='icon_big'>
<div class='page_header'>{$user_album_delete4} <a href='{$url->url_create('album', $user->user_info.user_username, $album_id)}'>{$album_title}</a></div>
<div>{$user_album_delete5}</div>

<br>

<table cellpadding='0' cellspacing='0'>
<form action='user_album_delete.php' method='post'>
<tr>
<td><input type='submit' class='button' value='{$user_album_delete6}'>&nbsp;</td>
<input type='hidden' name='task' value='dodelete'>
<input type='hidden' name='album_id' value='{$album_id}'>
</form>
<form action='user_album.php' method='POST'>
<td><input type='submit' class='button' value='{$user_album_delete7}'></td>
</tr>
</table>

</td></tr></table>

{include file='footer.tpl'}