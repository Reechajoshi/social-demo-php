{include file='admin_header.tpl'}

<table width='100%' cellpadding='0' cellspacing='0' class='stats'>
  <tr>
<td class='stat0'>Philomena social networking Administrator Account</td>
</tr>
</table>

{* SHOW QUICK STATS *}
<table width='100%' cellpadding='0' cellspacing='0' class='stats' style='margin-top: 10px;'>
<tr>
<td class='stat0'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><b>{$admin_home5}</b> {$total_users_num}</td>
  <td style='padding-left: 60px;' align='right'><b>{$admin_home6}</b> {$total_comments_num}</td>
  <td style='padding-left: 60px;' align='right'><b>{$admin_home7}</b> {$total_messages_num}</td>
  <td style='padding-left: 60px;' align='right'><b>{$admin_home11}</b> {$total_user_levels}</td>
  </tr>
  <tr>
  <td><b>Subnetworks:</b> {$total_subnetworks}</td>
  <td style='padding-left: 60px;' align='right'><b>{$admin_home12}</b> {$total_reports}</td>
  <td style='padding-left: 60px;' align='right'><b>{$admin_home13}</b> {$total_friendships}</td>
  <td style='padding-left: 60px;' align='right'><b>{$admin_home14}</b> {$total_announcements}</td>
  </tr>
  <tr>
  <td><b>Views Today:</b> {$views_today}</td>
  <td style='padding-left: 60px;' align='right'><b>{$admin_home15}</b> {$signups_today}</td>
  <td style='padding-left: 60px;' align='right'><b>{$admin_home16}</b> {$logins_today}</td>
  <td style='padding-left: 60px;' align='right'><b>{$admin_home17}</b> {$total_admins}</td>
  </tr>
  </table>

  {* SHOW ONLINE USERS IF MORE THAN ZERO *}
  {if $online_users|@count > 0}
    <br><b>{$online_users|@count} {$admin_home8}</b> 
    {section name=online_users_loop loop=$online_users}{if $smarty.section.online_users_loop.rownum != 1}, {/if}<a href='{$url->url_create("profile", $online_users[online_users_loop])}' target='_blank'>{$online_users[online_users_loop]}</a>{/section}
  {/if}

</td>
</tr>
</table>
<br>

 {include file='admin_footer.tpl'}