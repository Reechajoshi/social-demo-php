<?
$page = "admin_blog";
include "admin_header.php";

if(isset($_POST['task'])) { $task = $_POST['task']; } else { $task = "main"; }


// SET RESULT VARIABLE
$result = 0;


// SAVE CHANGES
if($task == "dosave") {
  $setting_permission_blog = $_POST['setting_permission_blog'];
  $setting_email_blogcomment_subject = $_POST['setting_email_blogcomment_subject'];
  $setting_email_blogcomment_message = $_POST['setting_email_blogcomment_message'];

  $database->database_query("UPDATE se_settings SET 
			setting_permission_blog='$setting_permission_blog',
			setting_email_blogcomment_subject='$setting_email_blogcomment_subject',
			setting_email_blogcomment_message='$setting_email_blogcomment_message'");


  // SAVE BLOG CATEGORIES
  $max_blogcat_id = 0;
  $old_blogcats = $database->database_query("SELECT blogentrycat_id FROM se_blogentrycats ORDER BY blogentrycat_id");
  while($old_blogcat_info = $database->database_fetch_assoc($old_blogcats)) {
    $var = "blogentrycat_title".$old_blogcat_info[blogentrycat_id];
    $blogentrycat_title = $_POST[$var];
    if(str_replace(" ", "", $blogentrycat_title) == "") {
      $database->database_query("DELETE FROM se_blogentrycats WHERE blogentrycat_id='$old_blogcat_info[blogentrycat_id]'");
    } else {
      $database->database_query("UPDATE se_blogentrycats SET blogentrycat_title='$blogentrycat_title' WHERE blogentrycat_id='$old_blogcat_info[blogentrycat_id]'");
    }  
    $max_blogcat_id = $old_blogcat_info[blogentrycat_id];
  }

  $num_blogcats = $_POST['num_blogcategories'];
  $blogcat_count = 0;
  for($t=$max_blogcat_id+1;$t<=$num_blogcats;$t++) {
    $var = "blogentrycat_title$t";
    $blogentrycat_title = $_POST[$var];
    if(str_replace(" ", "", $blogentrycat_title) != "") {
      $database->database_query("INSERT INTO se_blogentrycats (blogentrycat_title) VALUES ('$blogentrycat_title')");
    }
  }


  $setting = $database->database_fetch_assoc($database->database_query("SELECT * FROM se_settings LIMIT 1"));
  $result = 1;
}


// GET BLOG ENTRY CATEGORIES
$num_cats = 0;
$blogentrycat_id_last = 0;
$categories_array = Array();
$categories_query = $database->database_query("SELECT * FROM se_blogentrycats ORDER BY blogentrycat_id");
while($category = $database->database_fetch_assoc($categories_query)) {
  $categories_array[$num_cats] = Array('blogentrycat_id' => $category[blogentrycat_id],
				       'blogentrycat_title' => $category[blogentrycat_title]);
  $num_cats++;
  $blogentrycat_id_last = $category[blogentrycat_id];
}
$num_cats = $blogentrycat_id_last;


// ASSIGN VARIABLES AND SHOW GENERAL SETTINGS PAGE
$smarty->assign('result', $result);
$smarty->assign('blogentrycats', $categories_array);
$smarty->assign('num_cats', $num_cats);
$smarty->assign('permission_blog', $setting[setting_permission_blog]);
$smarty->assign('setting_email_blogcomment_subject', $setting[setting_email_blogcomment_subject]);
$smarty->assign('setting_email_blogcomment_message', $setting[setting_email_blogcomment_message]);
$smarty->display("$page.tpl");
exit();
?>