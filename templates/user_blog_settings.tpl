{include file='header.tpl'}

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_blog.php'>{$user_blog_settings2}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_blog_settings.php'>{$user_blog_settings3}</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/blog48.gif' border='0' class='icon_big'>
<div class='page_header'>{$user_blog_settings7}</div>
<div>{$user_blog_settings8}</div>

<br>


{* SHOW SUCCESS MESSAGE *}
{if $result != 0}
  <table cellpadding='0' cellspacing='0'><tr><td class='result'>
  <div class='success'><img src='./images/success.gif' border='0' class='icon'> {$user_blog_settings1}</div>
  </td></tr></table>
{/if}

<br>

<form action='user_blog_settings.php' method='POST'>

{if $user->level_info.level_blog_style == 1}
  <div><b>{$user_blog_settings4}</b></div>
  <div class='form_desc'>{$user_blog_settings5}</div>
  <textarea name='style_blog' rows='17' cols='50' style='width: 100%; font-family: courier, serif;'>{$style_blog}</textarea>
  <br><br>
{/if}


{if $user->level_info.level_blog_comments !== "6"}
  <div><b>{$user_blog_settings9}</b></div>
  <div class='form_desc'>{$user_blog_settings10}</div>
  <table cellpadding='0' cellspacing='0' class='editprofile_options'>
  <tr><td><input type='checkbox' value='1' id='blogcomment' name='usersetting_notify_blogcomment'{if $user->usersetting_info.usersetting_notify_blogcomment == 1} CHECKED{/if}></td><td><label for='blogcomment'>{$user_blog_settings11}</label></td></tr>
  </table>
  <br>
{/if}

<input type='submit' class='button' value='{$user_blog_settings6}'>
<input type='hidden' name='task' value='dosave'>
</form>

</td></tr></table>

{include file='footer.tpl'}