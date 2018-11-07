{include file='admin_header.tpl'}

<h2>{$admin_chat1}</h2>
{$admin_chat2}

<br><br>

{if $result == 1}
  <div class='success'><img src='../images/success.gif' class='icon' border='0'> {$admin_chat3}</div>
{elseif $result == 2}
  <div class='success'><img src='../images/success.gif' class='icon' border='0'> {$chatuser_kicked} {$admin_chat4}</div>
{/if}

<form action='admin_chat.php' method='post'>

<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'>{$admin_chat5}</td>
</tr>
<td class='setting1'>
  {$admin_chat6}
</td>
</tr>
<tr>
<td class='setting2'>
  {section name=chatusers_loop loop=$chatusers}
    <a href='admin_chat.php?task=kick&chatuser_id={$chatusers[chatusers_loop].chatuser_id}'>{$chatusers[chatusers_loop].chatuser_user_username}</a>
    {if $smarty.section.chatusers_loop.last != true}, {/if} 
  {sectionelse}
    {$admin_chat7}
  {/section}
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'>{$admin_chat8}</td>
</tr>
<td class='setting1'>
  {$admin_chat9}
</td>
</tr>
<tr>
<td class='setting2'>
  <table cellpadding='2' cellspacing='0'>
  <tr>
  <td><input type='radio' name='setting_chat_enabled' id='setting_chat_enabled_1' value='1'{if $setting_chat_enabled == 1} CHECKED{/if}></td>
  <td><label for='setting_chat_enabled_1'>{$admin_chat10}</label></td>
  </tr>
  <tr>
  <td><input type='radio' name='setting_chat_enabled' id='setting_chat_enabled_0' value='0'{if $setting_chat_enabled == 0} CHECKED{/if}></td>
  <td><label for='setting_chat_enabled_0'>{$admin_chat11}</label></td>
  </tr>
  </table>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'>{$admin_chat12}</td>
</tr>
<td class='setting1'>
  {$admin_chat13}
</td>
</tr>
<tr>
<td class='setting2'>
  <select class='text' name='setting_chat_update'>
  <option value='2'{if $setting_chat_update == "2"} selected='selected'{/if}>2 {$admin_chat14}</option>
  <option value='3'{if $setting_chat_update == "3"} selected='selected'{/if}>3 {$admin_chat14}</option>
  <option value='4'{if $setting_chat_update == "4"} selected='selected'{/if}>4 {$admin_chat14}</option>
  <option value='5'{if $setting_chat_update == "5"} selected='selected'{/if}>5 {$admin_chat14}</option>
  <option value='6'{if $setting_chat_update == "6"} selected='selected'{/if}>6 {$admin_chat14}</option>
  <option value='7'{if $setting_chat_update == "7"} selected='selected'{/if}>7 {$admin_chat14}</option>
  <option value='8'{if $setting_chat_update == "8"} selected='selected'{/if}>8 {$admin_chat14}</option>
  <option value='9'{if $setting_chat_update == "9"} selected='selected'{/if}>9 {$admin_chat14}</option>
  <option value='10'{if $setting_chat_update == "10"} selected='selected'{/if}>10 {$admin_chat14}</option>
  </select>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'>{$admin_chat15}</td>
</tr>
<td class='setting1'>
  {$admin_chat16}
</td>
</tr>
<tr>
<td class='setting2'>
  <table cellpadding='2' cellspacing='0'>
  <tr>
  <td><input type='radio' name='setting_chat_showphotos' id='setting_chat_showphotos_1' value='1'{if $setting_chat_showphotos == 1} CHECKED{/if}></td>
  <td><label for='setting_chat_showphotos_1'>{$admin_chat17}</label></td>
  </tr>
  <tr>
  <td><input type='radio' name='setting_chat_showphotos' id='setting_chat_showphotos_0' value='0'{if $setting_chat_showphotos == 0} CHECKED{/if}></td>
  <td><label for='setting_chat_showphotos_0'>{$admin_chat18}</label></td>
  </tr>
  </table>
</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<td class='header'>{$admin_chat19}</td>
</tr>
<td class='setting1'>
  {$admin_chat20}
</td>
</tr>
<tr>
<td class='setting2'>
  <textarea name='chatbanned' cols='40' rows='3' style='width: 100%;'>{section name=chatbanned_loop loop=$chatbanned}{$chatbanned[chatbanned_loop].chatbanned_user_username}{if $smarty.section.chatbanned_loop.last != true}, {/if}{/section}</textarea>
</td>
</tr>
</table>

<br>

<input type='submit' class='button' value='{$admin_chat21}'>
<input type='hidden' name='task' value='dosave'>
</form>


{include file='admin_footer.tpl'}