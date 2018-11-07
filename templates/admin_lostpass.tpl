<html>
<head>
<title>{$admin_lostpass1}</title>

{literal}
<style type='text/css'>
body {
	color: #666666;
	text-align: center;
	background-color: #EEEEEE;
}
td { 
	font-family: "Trebuchet MS", tahoma, verdana, serif;
	font-size: 9pt;
}
td.box {
	border: 1px dashed #AAAAAA;
	padding: 15px;
	background: #FFFFFF;
	font-family: "Trebuchet MS", tahoma, verdana, serif;
	font-size: 9pt;
}
td.login {
	font-family: "Trebuchet MS", tahoma, verdana, serif;
	font-size: 9pt;
}
input.text {
	font-family: arial, tahoma, verdana, serif;
	font-size: 9pt; 
}
div.error {
	text-align: center;
	padding-top: 3px;
	font-weight: bold;
}
input.button {
	font-family: arial, tahoma, verdana, serif;
	font-size: 9pt;
	background: #DDDDDD;
	padding: 2px;
	font-weight: bold;
}
div.page_header {
	font-size: 14pt;
}
td.success {
	font-weight: bold;
	padding: 7px 8px 7px 7px;
	background: #f3fff3; 
}
td.error {
	font-weight: bold;
	color: #FF0000;
	padding: 7px 8px 7px 7px;
	background: #FFF3F3;
}
img.icon {
	vertical-align: middle;
	margin-right: 4px;
}
a:link { color: #336699; }
a:visited { color: #336699; }
a:hover { color: #336699; }
</style>
{/literal}

</head>
<body>

<table height='100%' width='100%' cellpadding='0' cellspacing='0'>
<tr>
<td>

  <table cellpadding='0' cellspacing='0' align='center' width='600'>
  <tr>
  <td class='box'>

    <div class='page_header'>{$admin_lostpass1}</div>
    {$admin_lostpass2}
    <br><br>

      {* SHOW SUCCESS MESSAGE IF NO ERROR *}
      {if $submitted == 1 AND $is_error == 0}

      <table cellpadding='0' cellspacing='0'>
      <tr><td class='success'>
        {$admin_lostpass3}
      </td></tr></table>
      <br>

    {else}

      {if $is_error == 1}
        <table cellpadding='0' cellspacing='0'>
        <tr><td class='error'>
          <img src='../images/error.gif' border='0' class='icon'>{$admin_lostpass4}
        </td></tr></table>
      <br>
      {/if}
 
      <form action='admin_lostpass.php' method='post'>
      <table cellpadding='0' cellspacing='0' align='center'>
      <tr>
      <td>{$admin_lostpass5}&nbsp;</td>
      <td><input type='text' class='text' name='admin_email' maxlength='70' size='40'></td>
      </tr>
      <tr>
      <td>&nbsp;</td>
      <td>
        <table cellpadding='0' cellspacing='0' style='margin-top: 5px;'>
        <td valign='top'>
          <input type='submit' class='button' value='{$admin_lostpass6}'>&nbsp;
          <input type='hidden' name='task' value='send_email'>
          </form>
        </td>
        <td valign='top'>
          <form action='admin_login.php' method='post'>
          <input type='submit' class='button' value='{$admin_lostpass7}'>
          </form>
        </td>
        </tr>
        </table>
      </td>
      </tr>
      </table>

    {/if}

  </td>
  </tr>
  </table>
</td>
</tr>
</table>

</body>
</html>
