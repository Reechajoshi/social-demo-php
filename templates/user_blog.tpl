{include file='header.tpl'}
<img src='./images/blog.jpg' border='0' class='icon_big'>
<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_blog.php'>{$user_blog1}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_blog_settings.php'>{$user_blog2}</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/blog48.gif' border='0' class='icon_big'>
<div class='page_header'>{$user_blog3}</div>
<div>{$user_blog4}</div>

<br>

{* SHOW BUTTONS *}
<table cellpadding='0' cellspacing='0'>
<tr>
<td style='padding-right: 10px;'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td class='button' nowrap='nowrap'><a href='user_blog_newentry.php'><img src='./images/icons/newentry16.gif' border='0' class='icon'>{$user_blog5}</a></td>
  </tr></table>
</td>
<td style='padding-right: 10px;'>
  <table cellpadding='0' cellspacing='0'><tr>
  <td class='button' nowrap='nowrap'><a href="javascript:showhide('blog_search');"><img src='./images/icons/search16.gif' border='0' class='icon'>{$user_blog6}</a></td>
  </tr></table>
</td>
<td>
  <b>{$user_blog7} <a href='{$url->url_create('blog',$user->user_info.user_username)}'>{$url->url_create('blog',$user->user_info.user_username)}</a></b>
</td>
</tr>
</table>

<br>

{* SHOW SEARCH FIELD IF ANY ENTRIES EXIST *}
{if ($search != "" AND $total_blogentries == 0) OR ($search == "" AND $total_blogentries > 0) OR ($search != "" AND $total_blogentries > 0)}
  <form action='user_blog.php' name='searchform' method='POST'>
  <div class='blog_search' id='blog_search' {if $search == ""}style='display: none;'{/if}>
    <table cellpadding='0' cellspacing='0' align='center'>
    <tr>
    <td><b>{$user_blog8}</b>&nbsp;&nbsp;</td>
    <td><input type='text' name='search' maxlength='100' size='30' value='{$search}'>&nbsp;</td>
    <td><input type='submit' class='button' value='{$user_blog26}'></td>
    </tr>
    </table>
    <input type='hidden' name='s' value='{$s}'>
    <input type='hidden' name='p' value='{$p}'>
  </div>
  </form>
{/if}

{* DISPLAY PAGINATION MENU IF APPLICABLE *}
{if $maxpage > 1}
  <div class='center'>
  {if $p != 1}<a href='user_blog.php?s={$s}&search={$search}&p={math equation='p-1' p=$p}'>&#171; {$user_blog9}</a>{else}<font class='disabled'>&#171; {$user_blog9}</font>{/if}
  {if $p_start == $p_end}
    &nbsp;|&nbsp; {$user_blog10} {$p_start} {$user_blog11} {$total_blogentries} &nbsp;|&nbsp; 
  {else}
    &nbsp;|&nbsp; {$user_blog12} {$p_start}-{$p_end} {$user_blog11} {$total_blogentries} &nbsp;|&nbsp; 
  {/if}
  {if $p != $maxpage}<a href='user_blog.php?s={$s}&search={$search}&p={math equation='p+1' p=$p}'>{$user_blog13} &#187;</a>{else}<font class='disabled'>{$user_blog13} &#187;</font>{/if}
  </div>
<br>
{/if}


{* JAVASCRIPT FOR CHECK ALL BUTTON *}
{literal}
<script language='JavaScript'> 
<!---
var checkboxcount = 1;
function doCheckAll() {
  if(checkboxcount == 0) {
    with (document.entryform) {
    for (var i=0; i < elements.length; i++) {
    if (elements[i].type == 'checkbox') {
    elements[i].checked = false;
    }}
    checkboxcount = checkboxcount + 1;
    }
  } else
    with (document.entryform) {
    for (var i=0; i < elements.length; i++) {
    if (elements[i].type == 'checkbox') {
    elements[i].checked = true;
    }}
    checkboxcount = checkboxcount - 1;
  }
}
function SymError() { return true; }
window.onerror = SymError;
var SymRealWinOpen = window.open;
function SymWinOpen(url, name, attributes) { return (new Object()); }
window.open = SymWinOpen;
appendEvent = function(el, evname, func) {
 if (el.attachEvent) { // IE
   el.attachEvent('on' + evname, func);
 } else if (el.addEventListener) { // Gecko / W3C
   el.addEventListener(evname, func, true);
 } else {
   el['on' + evname] = func;
 }
};
appendEvent(window, 'load', windowonload);
function windowonload() { 
  document.searchform.search.focus(); 
  document.searchform.search.value+=''; 
} 
// -->
</script>
{/literal}

{* DISPLAY MESSAGE IF NO BLOG ENTRIES *}
{if $total_blogentries == 0}
  <table cellpadding='0' cellspacing='0' align='center'><tr>
  <td class='result'>
     
    {* SHOW NO BLOG ENTRIES MESSAGE *}
    {if $search != ""}
      <img src='./images/icons/bulb16.gif' border='0' class='icon'>{$user_blog14}
    {else}
      <img src='./images/icons/bulb16.gif' border='0' class='icon'>{$user_blog15} <a href='user_blog_newentry.php'>{$user_blog16}</a> {$user_blog17}
    {/if}

  </td></tr></table>

{* DISPLAY ENTRIES *}
{else}

  <form action='user_blog.php' name='entryform' method='post'>
  <table cellpadding='0' cellspacing='0' class='blog_table'>
  <tr>
  <td class='blog_header' width='10'><input type='checkbox' name='select_all' onClick='javascript:doCheckAll()'></td>
  <td class='blog_header'><a href='user_blog.php?search={$search}&p={$p}&s={$d}'>{$user_blog18}</a></td>
  <td class='blog_header'><a href='user_blog.php?search={$search}&p={$p}&s={$t}'>{$user_blog19}</a></td>
  <td class='blog_header'><a href='user_blog.php?search={$search}&p={$p}&s={$c}'>{$user_blog20}</a></td>
  <td class='blog_header'>{$user_blog27}</td>
  </tr>

  {* LIST BLOG ENTRIES *}
  {section name=blogentry_loop loop=$blogentries}
    {* CREATE BLOG ENTRY TITLE *}
    {if $blogentries[blogentry_loop].blogentry_title != ""}
      {assign var='blogentry_title' value=$blogentries[blogentry_loop].blogentry_title|truncate:50:"...":false}
    {else}
      {assign var='blogentry_title' value=$user_blog21}
    {/if}
    <tr>
    <td class='blog_entry'><input type='checkbox' name='delete_blogentry_{$blogentries[blogentry_loop].blogentry_id}' value='1'></td>
    <td class='blog_entry' nowrap='nowrap'>{$datetime->cdate("`$setting.setting_dateformat`", $datetime->timezone($blogentries[blogentry_loop].blogentry_date, $global_timezone))}</td>
    <td class='blog_entry' width='100%'><a href='{$url->url_create('blog_entry', $user->user_info.user_username, $blogentries[blogentry_loop].blogentry_id)}'><img src='./images/icons/blogentry16.gif' class='icon' border='0'></a><a href='{$url->url_create('blog_entry', $user->user_info.user_username, $blogentries[blogentry_loop].blogentry_id)}'>{$blogentry_title}</a> &nbsp;</td>
    <td class='blog_entry' nowrap='nowrap'><a href='user_blog_comments.php?blogentry_id={$blogentries[blogentry_loop].blogentry_id}'>{$blogentries[blogentry_loop].total_comments} {$user_blog22}</a>&nbsp;&nbsp;</td>
    <td class='blog_entry' nowrap='nowrap'><a href='user_blog_editentry.php?blogentry_id={$blogentries[blogentry_loop].blogentry_id}'>{$user_blog23}</a> &nbsp;|&nbsp; <a href='user_blog_deleteentry.php?blogentry_id={$blogentries[blogentry_loop].blogentry_id}'>{$user_blog24}</a> &nbsp;</td>
    </tr>
  {/section}
  </table>

  <br>

  <input type='submit' class='button' value='{$user_blog25}'>
  <input type='hidden' name='task' value='delete'>
  <input type='hidden' name='s' value='{$s}'>
  <input type='hidden' name='p' value='{$p}'>
  </form>
{/if}

</td></tr></table>

{include file='footer.tpl'}