{include file='header.tpl'}

<div class='page_header'><a href='{$url->url_create('profile', $owner->user_info.user_username)}'>{$owner->user_info.user_username}</a>{$albums2}</div>

<br>

{* SHOW NO ALBUMS NOTICE *}
{if $total_albums == 0}
  <table cellpadding='0' cellspacing='0'>
  <tr><td class='result'>
    <img src='./images/icons/bulb22.gif' border='0' class='icon'>
    {$albums3}
  </td></tr>
  </table>
{/if}

{* LOOP THROUGH ALBUMS *}
{section name=album_loop loop=$albums}

  {* SET ALBUM COVER *}
  {if $albums[album_loop].album_cover_id == 0}
    {assign var='album_cover_src' value='./images/icons/folder_big.gif'}
  {else}
    {* IF IMAGE, GET THUMBNAIL *}
    {if $albums[album_loop].album_cover_ext == "jpeg" OR $albums[album_loop].album_cover_ext == "jpg" OR $albums[album_loop].album_cover_ext == "gif" OR $albums[album_loop].album_cover_ext == "png" OR $albums[album_loop].album_cover_ext == "bmp"}
      {assign var='album_cover_dir' value=$url->url_userdir($owner->user_info.user_id)}
      {assign var='album_cover_src' value="`$album_cover_dir``$albums[album_loop].album_cover_id`_thumb.jpg"}
    {* SET THUMB PATH FOR AUDIO *}
    {elseif $albums[album_loop].album_cover_ext == "mp3" OR $albums[album_loop].album_cover_ext == "mp4" OR $albums[album_loop].album_cover_ext == "wav"}
      {assign var='album_cover_src' value='./images/icons/audio_big.gif'}
    {* SET THUMB PATH FOR VIDEO *}
    {elseif $albums[album_loop].album_cover_ext == "mpeg" OR $albums[album_loop].album_cover_ext == "mpg" OR $albums[album_loop].album_cover_ext == "mpa" OR $albums[album_loop].album_cover_ext == "avi" OR $albums[album_loop].album_cover_ext == "swf" OR $albums[album_loop].album_cover_ext == "mov" OR $albums[album_loop].album_cover_ext == "ram" OR $albums[album_loop].album_cover_ext == "rm"}
      {assign var='album_cover_src' value='./images/icons/video_big.gif'}
    {* SET THUMB PATH FOR UNKNOWN *}
    {else}
      {assign var='album_cover_src' value='./images/icons/file_big.gif'}
    {/if}
  {/if}

  {* SET ALBUM TITLE *}
  {if $albums[album_loop].album_title != ""}
    {assign var="album_title" value=$albums[album_loop].album_title}
  {else}
    {assign var="album_title" value=$albums4}
  {/if}

  {if $smarty.section.album_loop.index != 0}<div class='album_bar'></div>{/if}
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='album_list1' width='110'><a href='{$url->url_create('album', $owner->user_info.user_username, $albums[album_loop].album_id)}'><img src='{$album_cover_src}' border='0'></a></div></td>
  <td class='album_list2'>
    <b><a href='{$url->url_create('album', $owner->user_info.user_username, $albums[album_loop].album_id)}'>{$album_title}</a></b>
    {if $albums[album_loop].album_dateupdated != 0}<br>{$albums5} {$datetime->time_since($albums[album_loop].album_dateupdated)}{/if}
    <br><br>{$albums[album_loop].album_desc}
  </td>
  </tr>
  </table>

{/section}

{include file='footer.tpl'}