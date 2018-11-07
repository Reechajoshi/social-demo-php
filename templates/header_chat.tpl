
{* ASSIGN MENU VARIABLES *}
{if $setting.setting_chat_enabled != 0}
  {array var="chat_menu" value="chat.php"}
  {array var="chat_menu" value="chat16.gif"}
  {array var="chat_menu" value=$header_chat1}
  {array var="global_plugin_menu" value=$chat_menu} 
{/if}

