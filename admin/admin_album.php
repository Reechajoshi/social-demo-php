<?
$page = "admin_album";
include "admin_header.php";

if(isset($_POST['task'])) { $task = $_POST['task']; } else { $task = "main"; }


// SET RESULT VARIABLE
$result = 0;


// SAVE CHANGES
if($task == "dosave") {
  $setting_permission_album = $_POST['setting_permission_album'];
  $setting_email_mediacomment_subject = $_POST['setting_email_mediacomment_subject'];
  $setting_email_mediacomment_message = $_POST['setting_email_mediacomment_message'];

  $database->database_query("UPDATE se_settings SET 
			setting_permission_album='$setting_permission_album',
			setting_email_mediacomment_subject='$setting_email_mediacomment_subject',
			setting_email_mediacomment_message='$setting_email_mediacomment_message'");

  $setting = $database->database_fetch_assoc($database->database_query("SELECT * FROM se_settings LIMIT 1"));
  $result = 1;
}


// ASSIGN VARIABLES AND SHOW GENERAL SETTINGS PAGE
$smarty->assign('result', $result);
$smarty->assign('permission_album', $setting[setting_permission_album]);
$smarty->assign('setting_email_mediacomment_subject', $setting[setting_email_mediacomment_subject]);
$smarty->assign('setting_email_mediacomment_message', $setting[setting_email_mediacomment_message]);
$smarty->display("$page.tpl");
exit();
?>