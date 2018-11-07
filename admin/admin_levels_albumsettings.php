<?
$page = "admin_levels_albumsettings";
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

// SET RESULT VARIABLE
$result = 0;
$is_error = 0;
$error_message = "";


// SAVE CHANGES
if($task == "dosave") {
  $level_album_allow = $_POST['level_album_allow'];
  $level_album_exts = str_replace(", ", ",", $_POST['level_album_exts']);
  $level_album_mimes = str_replace(", ", ",", $_POST['level_album_mimes']);
  $level_album_storage = $_POST['level_album_storage'];
  $level_album_maxsize = $_POST['level_album_maxsize'];
  $level_album_width = $_POST['level_album_width'];
  $level_album_height = $_POST['level_album_height'];
  $level_album_style = $_POST['level_album_style'];
  $level_album_maxnum = $_POST['level_album_maxnum'];
  $level_album_search = $_POST['level_album_search'];

  // GET ALBUM PRIVACY SETTING
  $album_privacy_0 = $_POST['album_privacy_0'];
  $album_privacy_1 = $_POST['album_privacy_1'];
  $album_privacy_2 = $_POST['album_privacy_2'];
  $album_privacy_3 = $_POST['album_privacy_3'];
  $album_privacy_4 = $_POST['album_privacy_4'];
  $album_privacy_5 = $_POST['album_privacy_5'];
  $level_album_privacy = $album_privacy_0.$album_privacy_1.$album_privacy_2.$album_privacy_3.$album_privacy_4.$album_privacy_5;

  // GET ALBUM COMMENTS SETTING
  $album_comments_0 = $_POST['album_comments_0'];
  $album_comments_1 = $_POST['album_comments_1'];
  $album_comments_2 = $_POST['album_comments_2'];
  $album_comments_3 = $_POST['album_comments_3'];
  $album_comments_4 = $_POST['album_comments_4'];
  $album_comments_5 = $_POST['album_comments_5'];
  $album_comments_6 = $_POST['album_comments_6'];
  $level_album_comments = $album_comments_0.$album_comments_1.$album_comments_2.$album_comments_3.$album_comments_4.$album_comments_5.$album_comments_6;

  // CHECK THAT A NUMBER BETWEEN 1 AND 204800 (200MB) WAS ENTERED FOR MAXSIZE
  if(!is_numeric($level_album_maxsize) OR $level_album_maxsize < 1 OR $level_album_maxsize > 204800) {
    $is_error = 1;
    $error_message = $admin_levels_albumsettings[18];

  // CHECK THAT WIDTH AND HEIGHT ARE NUMBERS
  } elseif(!is_numeric($level_album_width) OR !is_numeric($level_album_height)) {
    $is_error = 1;
    $error_message = $admin_levels_albumsettings[19];

  // CHECK THAT MAX ALBUMS IS A NUMBER
  } elseif(!is_numeric($level_album_maxnum) OR $level_album_maxnum < 1 OR $level_album_maxnum > 999) {
    $is_error = 1;
    $error_message = $admin_levels_albumsettings[30];

  } else {
    $level_album_maxsize = $level_album_maxsize*1024;
    $database->database_query("UPDATE se_levels SET 
			level_album_search='$level_album_search',
			level_album_privacy='$level_album_privacy',
			level_album_comments='$level_album_comments',
			level_album_allow='$level_album_allow',
			level_album_maxnum='$level_album_maxnum',
			level_album_exts='$level_album_exts',
			level_album_mimes='$level_album_mimes',
			level_album_storage='$level_album_storage',
			level_album_maxsize='$level_album_maxsize',
			level_album_width='$level_album_width',
			level_album_height='$level_album_height',
			level_album_style='$level_album_style' WHERE level_id='$level_id'");
    if($level_album_search == 0) { $database->database_query("UPDATE se_albums, se_users SET se_albums.album_search='1' WHERE se_users.user_level_id='$level_id' AND se_albums.album_user_id=se_users.user_id"); }
    $level_info = $database->database_fetch_assoc($database->database_query("SELECT * FROM se_levels WHERE level_id='$level_id'"));
    $result = 1;
  }
} // END DOSAVE TASK



// ADD SPACES AFTER COMMAS
$level_album_exts = str_replace(",", ", ", $level_info[level_album_exts]);
$level_album_mimes = str_replace(",", ", ", $level_info[level_album_mimes]);
$level_album_maxsize = $level_info[level_album_maxsize]/1024;

// GET CURRENT ALBUM PRIVACY SETTING
$count = 0;
while($count < 6) {
  if(user_privacy_levels($count) != "") {
    if(strpos($level_info[level_album_privacy], "$count") !== FALSE) { $privacy_selected = 1; } else { $privacy_selected = 0; }
    $privacy_options[$count] = Array('privacy_name' => "album_privacy_".$count,
				'privacy_value' => $count,
				'privacy_option' => user_privacy_levels($count),
				'privacy_selected' => $privacy_selected);
  }
  $count++;
}
$count = 0;
while($count < 10) {
  if(user_privacy_levels($count) != "") {
    if(strpos($level_info[level_album_comments], "$count") !== FALSE) { $comment_selected = 1; } else { $comment_selected = 0; }
    $comment_options[$count] = Array('comment_name' => "album_comments_".$count,
				'comment_value' => $count,
				'comment_option' => user_privacy_levels($count),
				'comment_selected' => $comment_selected);
  }
  $count++;
}




// ASSIGN VARIABLES AND SHOW ALBUM SETTINGS PAGE
$smarty->assign('result', $result);
$smarty->assign('is_error', $is_error);
$smarty->assign('error_message', $error_message);
$smarty->assign('level_id', $level_info[level_id]);
$smarty->assign('level_name', $level_info[level_name]);
$smarty->assign('album_allow', $level_info[level_album_allow]);
$smarty->assign('album_exts_value', $level_album_exts);
$smarty->assign('album_mimes_value', $level_album_mimes);
$smarty->assign('album_storage', $level_info[level_album_storage]);
$smarty->assign('album_maxsize', $level_album_maxsize);
$smarty->assign('album_width', $level_info[level_album_width]);
$smarty->assign('album_height', $level_info[level_album_height]);
$smarty->assign('album_style', $level_info[level_album_style]);
$smarty->assign('album_maxnum', $level_info[level_album_maxnum]);
$smarty->assign('album_search', $level_info[level_album_search]);
$smarty->assign('album_privacy', $privacy_options);
$smarty->assign('album_comments', $comment_options);
$smarty->display("$page.tpl");
exit();
?>