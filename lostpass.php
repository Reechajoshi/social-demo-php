<?
$page = "lostpass";
include "header.php";

if(isset($_POST['task'])) { $task = $_POST['task']; } elseif(isset($_GET['task'])) { $task = $_GET['task']; } else { $task = "main"; }

// SET ERROR VARS
$is_error = 0;
$submitted = 0;


if($task == "send_email") {

  $new_user = new se_user(Array(0, "", $_POST['user_email']), Array('user_id, user_email, user_username'));
  $submitted = 1;

  if($new_user->user_exists == 0) {
    $is_error = 1;
  } else {
    $lostpassword_code = randomcode(15);
    $lostpassword_time = time();
    if(send_lostpassword($new_user->user_info, $lostpassword_code)) {
      $database->database_query("UPDATE se_usersettings SET usersetting_lostpassword_code='$lostpassword_code', usersetting_lostpassword_time='$lostpassword_time' WHERE usersetting_user_id='".$new_user->user_info[user_id]."'");
    } else {
      $is_error = 1;
    }
  }
}



// ASSIGN VARIABLES AND INCLUDE FOOTER
$smarty->assign('is_error', $is_error);
$smarty->assign('submitted', $submitted);
include "footer.php";
?>