<?
$page = "admin_viewblogs";
include "admin_header.php";

if(isset($_POST['s'])) { $s = $_POST['s']; } elseif(isset($_GET['s'])) { $s = $_GET['s']; } else { $s = "id"; }
if(isset($_POST['p'])) { $p = $_POST['p']; } elseif(isset($_GET['p'])) { $p = $_GET['p']; } else { $p = 1; }
if(isset($_POST['f_title'])) { $f_title = $_POST['f_title']; } elseif(isset($_GET['f_title'])) { $f_title = $_GET['f_title']; } else { $f_title = ""; }
if(isset($_POST['f_owner'])) { $f_owner = $_POST['f_owner']; } elseif(isset($_GET['f_owner'])) { $f_owner = $_GET['f_owner']; } else { $f_owner = ""; }
if(isset($_POST['task'])) { $task = $_POST['task']; } elseif(isset($_GET['task'])) { $task = $_GET['task']; } else { $task = "main"; }
if(isset($_POST['blogentry_id'])) { $blogentry_id = $_POST['blogentry_id']; } elseif(isset($_GET['blogentry_id'])) { $blogentry_id = $_GET['blogentry_id']; } else { $blogentry_id = 0; }

// VALIDATE BLOG ENTRY ID OR SET TASK TO MAIN
if($task == "confirm" OR $task == "deleteentry") {
  if($database->database_num_rows($database->database_query("SELECT blogentry_id FROM se_blogentries WHERE blogentry_id='$blogentry_id'")) != 1) { $task = "main"; }
}


// CREATE BLOG OBJECT
$entries_per_page = 100;
$blog = new se_blog();


// CONFIRM SINGLE ENTRY DELETION
if($task == "confirm") {

  // SET HIDDEN INPUT ARRAYS FOR TWO TASKS
  $confirm_hidden = Array(Array('name' => 'task', 'value' => 'deleteentry'),
			  Array('name' => 'blogentry_id', 'value' => $blogentry_id),
			  Array('name' => 's', 'value' => $s),
			  Array('name' => 'p', 'value' => $p),
			  Array('name' => 'f_title', 'value' => $f_title),
			  Array('name' => 'f_owner', 'value' => $f_owner));
  $cancel_hidden = Array(Array('name' => 'task', 'value' => 'main'),
			 Array('name' => 's', 'value' => $s),
			 Array('name' => 'p', 'value' => $p),
			 Array('name' => 'f_title', 'value' => $f_title),
			 Array('name' => 'f_owner', 'value' => $f_owner));

  // LOAD CONFIRM PAGE WITH APPROPRIATE VARIABLES
  $smarty->assign('confirm_form_action', 'admin_viewblogs.php');
  $smarty->assign('cancel_form_action', 'admin_viewblogs.php');
  $smarty->assign('confirm_hidden', $confirm_hidden);
  $smarty->assign('cancel_hidden', $cancel_hidden);
  $smarty->assign('headline', $admin_viewblogs[14]);
  $smarty->assign('instructions', $admin_viewblogs[15]);
  $smarty->assign('confirm_submit', $admin_viewblogs[14]);
  $smarty->assign('cancel_submit', $admin_viewblogs[16]);
  $smarty->display("admin_confirm.tpl");
  exit();




// DELETE SINGLE ENTRY
} elseif($task == "deleteentry") {
  $blog->blog_entry_delete($blogentry_id);
}







// SET BLOG ENTRY SORT-BY VARIABLES FOR HEADING LINKS
$i = "id";   // BLOGENTRY_ID
$t = "t";    // BLOGENTRY_TITLE
$o = "o";    // OWNER OF ENTRY
$v = "v";    // VIEWS OF ENTRY
$d = "d";    // DATE OF ENTRY

// SET SORT VARIABLE FOR DATABASE QUERY
if($s == "i") {
  $sort = "se_blogentries.blogentry_id";
  $i = "id";
} elseif($s == "id") {
  $sort = "se_blogentries.blogentry_id DESC";
  $i = "i";
} elseif($s == "t") {
  $sort = "se_blogentries.blogentry_title";
  $t = "td";
} elseif($s == "td") {
  $sort = "se_blogentries.blogentry_title DESC";
  $t = "t";
} elseif($s == "o") {
  $sort = "se_users.user_username";
  $o = "od";
} elseif($s == "od") {
  $sort = "se_users.user_username DESC";
  $o = "o";
} elseif($s == "v") {
  $sort = "se_blogentries.blogentry_views";
  $v = "vd";
} elseif($s == "vd") {
  $sort = "se_blogentries.blogentry_views DESC";
  $v = "v";
} elseif($s == "d") {
  $sort = "se_blogentries.blogentry_date";
  $d = "dd";
} elseif($s == "dd") {
  $sort = "se_blogentries.blogentry_date DESC";
  $d = "d";
} else {
  $sort = "se_blogentries.blogentry_id DESC";
  $i = "i";
}




// ADD CRITERIA FOR FILTER
$where = "";
if($f_owner != "") { $where .= "se_users.user_username LIKE '%$f_owner%'"; }
if($f_owner != "" & $f_title != "") { $where .= " AND"; }
if($f_title != "") { $where .= " se_blogentries.blogentry_title LIKE '%$f_title%'"; }
if($where != "") { $where = "(".$where.")"; }

// DELETE NECESSARY ENTRIES
$start = ($p - 1) * $entries_per_page;
if($task == "delete") { $blog->blog_entries_delete($start, $entries_per_page, $sort, $where); }

// GET TOTAL ENTRIES
$total_blogentries = $blog->blog_entries_total($where);

// MAKE ENTRY PAGES
$page_vars = make_page($total_blogentries, $entries_per_page, $p);
$page_array = Array();
for($x=0;$x<=$page_vars[2]-1;$x++) {
  if($x+1 == $page_vars[1]) { $link = "1"; } else { $link = "0"; }
  $page_array[$x] = Array('page' => $x+1,
			  'link' => $link);
}

// GET ENTRY ARRAY
$blogentries = $blog->blog_entries_list($page_vars[0], $entries_per_page, $sort, $where);


// ASSIGN VARIABLES AND SHOW VIEW ENTRIES PAGE
$smarty->assign('total_blogentries', $total_blogentries);
$smarty->assign('pages', $page_array);
$smarty->assign('entries', $blogentries);
$smarty->assign('f_title', $f_title);
$smarty->assign('f_owner', $f_owner);
$smarty->assign('i', $i);
$smarty->assign('t', $t);
$smarty->assign('o', $o);
$smarty->assign('v', $v);
$smarty->assign('d', $d);
$smarty->assign('p', $page_vars[1]);
$smarty->assign('s', $s);
$smarty->display("$page.tpl");
exit();
?>