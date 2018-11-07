<?
$page = "admin_levels_blogsettings";
include "admin_header.php";

if(isset($_POST['task'])) { $task = $_POST['task']; } else { $task = "main"; }
if(isset($_POST['level_id'])) { $level_id = $_POST['level_id']; } elseif(isset($_GET['level_id'])) { $level_id = $_GET['level_id']; } else { $level_id = 0; }

// VALIDATE LEVEL ID
$level = $database->database_query("SELECT * FROM se_levels WHERE level_id='$level_id'");
if($database->database_num_rows($level) != 1) { 
  header("Location: admin_levels.php");
  exit();
}
$level_info = $database->database_fetch_assoc($level);


// SET RESULT AND ERROR VARS
$result = 0;
$is_error = 0;



// SAVE CHANGES
if($task == "dosave") {
  $level_blog_allow = $_POST['level_blog_allow'];
  $level_blog_entries = $_POST['level_blog_entries'];
  $level_blog_style = $_POST['level_blog_style'];
  $level_blog_search = $_POST['level_blog_search'];

  // GET BLOG PRIVACY SETTING
  $blog_privacy_0 = $_POST['blog_privacy_0'];
  $blog_privacy_1 = $_POST['blog_privacy_1'];
  $blog_privacy_2 = $_POST['blog_privacy_2'];
  $blog_privacy_3 = $_POST['blog_privacy_3'];
  $blog_privacy_4 = $_POST['blog_privacy_4'];
  $blog_privacy_5 = $_POST['blog_privacy_5'];
  $level_blog_privacy = $blog_privacy_0.$blog_privacy_1.$blog_privacy_2.$blog_privacy_3.$blog_privacy_4.$blog_privacy_5;

  // GET BLOG COMMENT SETTING
  $blog_comments_0 = $_POST['blog_comments_0'];
  $blog_comments_1 = $_POST['blog_comments_1'];
  $blog_comments_2 = $_POST['blog_comments_2'];
  $blog_comments_3 = $_POST['blog_comments_3'];
  $blog_comments_4 = $_POST['blog_comments_4'];
  $blog_comments_5 = $_POST['blog_comments_5'];
  $blog_comments_6 = $_POST['blog_comments_6'];
  $level_blog_comments = $blog_comments_0.$blog_comments_1.$blog_comments_2.$blog_comments_3.$blog_comments_4.$blog_comments_5.$blog_comments_6;

  // CHECK THAT A NUMBER BETWEEN 1 AND 999 WAS ENTERED FOR BLOG ENTRIES
  if(!is_numeric($level_blog_entries) OR $level_blog_entries < 1 OR $level_blog_entries > 999) {
    $is_error = 1;

  } else {

    // SAVE SETTINGS
    $database->database_query("UPDATE se_levels SET 
			level_blog_search='$level_blog_search',
			level_blog_privacy='$level_blog_privacy',
			level_blog_comments='$level_blog_comments',
			level_blog_allow='$level_blog_allow',
			level_blog_entries='$level_blog_entries',
			level_blog_style='$level_blog_style' WHERE level_id='$level_id'");
    if($level_blog_search == 0) { $database->database_query("UPDATE se_blogentries, se_users SET se_blogentries.blogentry_search='1' WHERE se_users.user_level_id='$level_id' AND se_blogentries.blogentry_user_id=se_users.user_id"); }
    $level_info = $database->database_fetch_assoc($database->database_query("SELECT * FROM se_levels WHERE level_id='$level_id'"));
    $result = 1;

  }

}


// GET PREVIOUS BLOG PRIVACY SETTING
$count = 0;
while($count < 6) {
  if(user_privacy_levels($count) != "") {
    if(strpos($level_info[level_blog_privacy], "$count") !== FALSE) { $privacy_selected = 1; } else { $privacy_selected = 0; }
    $privacy_options[$count] = Array('privacy_name' => "blog_privacy_".$count,
				'privacy_value' => $count,
				'privacy_option' => user_privacy_levels($count),
				'privacy_selected' => $privacy_selected);
  }
  $count++;
}
$count = 0;
while($count < 10) {
  if(user_privacy_levels($count) != "") {
    if(strpos($level_info[level_blog_comments], "$count") !== FALSE) { $comment_selected = 1; } else { $comment_selected = 0; }
    $comment_options[$count] = Array('comment_name' => "blog_comments_".$count,
				'comment_value' => $count,
				'comment_option' => user_privacy_levels($count),
				'comment_selected' => $comment_selected);
  }
  $count++;
}




// ASSIGN VARIABLES AND SHOW BLOG SETTINGS PAGE
$smarty->assign('result', $result);
$smarty->assign('is_error', $is_error);
$smarty->assign('level_id', $level_info[level_id]);
$smarty->assign('level_name', $level_info[level_name]);
$smarty->assign('blog_allow', $level_info[level_blog_allow]);
$smarty->assign('blog_style', $level_info[level_blog_style]);
$smarty->assign('entries_value', $level_info[level_blog_entries]);
$smarty->assign('blog_search', $level_info[level_blog_search]);
$smarty->assign('blog_privacy', $privacy_options);
$smarty->assign('blog_comments', $comment_options);
$smarty->display("$page.tpl");
exit();
?>