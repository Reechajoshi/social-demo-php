<?
$page = "chat";
include "header.php";



// DISPLAY ERROR PAGE IF USER IS NOT LOGGED IN
if($user->user_exists == 0) {
  $page = "error";
  $smarty->assign('error_header', $chat[1]);
  $smarty->assign('error_message', $chat[2]);
  $smarty->assign('error_submit', $chat[3]);
  include "footer.php";
}

include "footer.php";

?>