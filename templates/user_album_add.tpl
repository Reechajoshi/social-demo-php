{include file='header.tpl'}

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album.php'>{$user_album_add2}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_settings.php'>{$user_album_add3}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'>{$user_album_add4}</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/image48.gif' border='0' class='icon_big'>
<div class='page_header'>{$user_album_add5}</div>
<div>{$user_album_add6}</div>

<br><br>

{* SHOW ERROR MESSAGE *}
{if $is_error != ""}
  <div class='error'><img src='./images/error.gif' class='icon' border='0'> {$user_album_add1}</div>
{/if}

{* SHOW ERROR IF MAX ALBUMS REACHED *}
{if $total_albums >= $user->level_info.level_album_maxnum}
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='result'>
    <img src='./images/error.gif' class='icon' border='0'> {$user_album_add7}
  </td></tr></table>
  <br>
  <form action='user_album.php' method='get'>
  <input type='submit' class='button' value='{$user_album_add8}'>
  </form>

{* DISPLAY ALBUM CREATION PAGE *}
{else}

  <form action='user_album_add.php' method='POST'>
  <b>{$user_album_add9}</b><br>
  <input name='album_title' type='text' class='text' maxlength='50' size='30'>

  <br><br>

  <b>{$user_album_add10}</b><br>
  <textarea name='album_desc' rows='6' cols='50'></textarea>

  <br>

  {* SHOW SEARCH PRIVACY OPTIONS IF ALLOWED BY ADMIN *}
  {if $user->level_info.level_album_search == 1}
    <br>
    <b>{$user_album_add11}</b><br>
    <table cellpadding='0' cellspacing='0'>
      <tr><td><input type='radio' name='album_search' id='album_search_1' value='1' CHECKED></td><td><label for='album_search_1'>{$user_album_add12}</label></td></tr>
      <tr><td><input type='radio' name='album_search' id='album_search_0' value='0'></td><td><label for='album_search_0'>{$user_album_add13}</label></td></tr>
    </table>
  {/if}

  {* SHOW PRIVACY OPTIONS IF ALLOWED BY ADMIN *}
  {if $privacy_options|@count > 1}
    <br>
    <b>{$user_album_add14}</b><br>
    <table cellpadding='0' cellspacing='0'>
    {section name=privacy_loop loop=$privacy_options}
      <tr><td><input type='radio' name='album_privacy' id='{$privacy_options[privacy_loop].privacy_id}' value='{$privacy_options[privacy_loop].privacy_value}'{if $smarty.section.privacy_loop.first} CHECKED{/if}></td><td><label for='{$privacy_options[privacy_loop].privacy_id}'>{$privacy_options[privacy_loop].privacy_option}</label></td></tr>
    {/section}
    </table>
  {/if}

  {* SHOW COMMENT OPTIONS IF ALLOWED BY ADMIN *}
  {if $comment_options|@count > 1}
    <br>
    <b>{$user_album_add15}</b><br>
    <table cellpadding='0' cellspacing='0'>
    {section name=comment_loop loop=$comment_options}
      <tr><td><input type='radio' name='album_comments' id='{$comment_options[comment_loop].comment_id}' value='{$comment_options[comment_loop].comment_value}'{if $smarty.section.comment_loop.first} CHECKED{/if}></td><td><label for='{$comment_options[comment_loop].comment_id}'>{$comment_options[comment_loop].comment_option}</label></td></tr>
    {/section}
    </table>
  {/if}

  <br>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td>
    <input type='submit' class='button' value='{$user_album_add16}'>&nbsp;
    <input type='hidden' name='task' value='doadd'>
    </form>
  </td>
  <td>
    <form action='user_album.php' method='POST'>
    <input type='submit' class='button' value='{$user_album_add17}'>
    </form>
  </td>
  </tr>
  </table>
{/if}

</td></tr></table>
  
{include file='footer.tpl'}