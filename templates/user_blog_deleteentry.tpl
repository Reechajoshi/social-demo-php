{include file='header.tpl'}

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_blog.php'>{$user_blog_deleteentry1}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_blog_style.php'>{$user_blog_deleteentry2}</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/blog48.gif' border='0' class='icon_big'>
<div class='page_header'>{$user_blog_deleteentry3}</div>
<div>{$user_blog_deleteentry4}</div>

<br>

<table cellpadding='0' cellspacing='0'>
<tr>
<td>
  <form action='user_blog_deleteentry.php' method='post'>
  <input type='submit' class='button' value='{$user_blog_deleteentry5}'>&nbsp;
  <input type='hidden' name='task' value='dodelete'>
  <input type='hidden' name='blogentry_id' value='{$blogentry_id}'>
  </form>
</td>
<form action='user_blog.php' method='POST'>
<td><input type='submit' class='button' value='{$user_blog_deleteentry6}'></td>
</tr>
</table>
</form>

</td></tr></table>

{include file='footer.tpl'}