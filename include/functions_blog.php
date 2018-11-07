<?

//  THIS FILE CONTAINS BLOG-RELATED FUNCTIONS
//  FUNCTIONS IN THIS CLASS:
//    search_blog()
//    deleteuser_blog()













// THIS FUNCTION IS RUN DURING THE SEARCH PROCESS TO SEARCH THROUGH BLOG ENTRIES
// INPUT: $search_text REPRESENTING THE STRING TO SEARCH FOR
//	  $total_only REPRESENTING 1/0 DEPENDING ON WHETHER OR NOT TO RETURN JUST THE TOTAL RESULTS
//	  $search_objects REPRESENTING AN ARRAY CONTAINING INFORMATION ABOUT THE POSSIBLE OBJECTS TO SEARCH
//	  $results REPRESENTING THE ARRAY OF SEARCH RESULTS
//	  $total_results REPRESENTING THE TOTAL SEARCH RESULTS
// OUTPUT: 
function search_blog($search_text, $total_only, &$search_objects, &$results, &$total_results) {
	global $database, $url, $functions_blog, $results_per_page, $p;

	// CONSTRUCT QUERY
	$blogentry_query = "SELECT se_blogentries.blogentry_id, se_blogentries.blogentry_title, se_users.user_id, se_users.user_username, se_users.user_photo FROM se_blogentries, se_users, se_levels WHERE se_blogentries.blogentry_user_id=se_users.user_id AND se_users.user_level_id=se_levels.level_id AND (se_blogentries.blogentry_search='1' OR se_levels.level_blog_search='0') AND (blogentry_title LIKE '%$search_text%' OR blogentry_body LIKE '%$search_text%')";

	// GET TOTAL ENTRIES
	$total_entries = $database->database_num_rows($database->database_query($blogentry_query." LIMIT 201"));

	// IF NOT TOTAL ONLY
	if($total_only == 0) {

	  // MAKE BLOG PAGES
	  $start = ($p - 1) * $results_per_page;
	  $limit = $results_per_page+1;

	  // SEARCH BLOGS
	  $blogentries = $database->database_query($blogentry_query." ORDER BY blogentry_id DESC LIMIT $start, $limit");
	  while($blogentry_info = $database->database_fetch_assoc($blogentries)) {

	    // CREATE AN OBJECT FOR AUTHOR
	    $profile = new se_user();
	    $profile->user_info[user_id] = $blogentry_info[user_id];
	    $profile->user_info[user_username] = $blogentry_info[user_username];
	    $profile->user_info[user_photo] = $blogentry_info[user_photo];

	    // IF EMPTY TITLE
	    if($blogentry_info[blogentry_title] == "") { $title = $functions_blog[3]; } else { $title = $blogentry_info[blogentry_title]; }

	    $results[] = Array('result_url' => $url->url_create('blog_entry', $blogentry_info[user_username], $blogentry_info[blogentry_id]),
				'result_icon' => '',
				'result_name' => $title,
				'result_desc' => $functions_blog[1].$blogentry_info[user_username],
				'result_user' => $profile);
	  }

	  // SET TOTAL RESULTS
	  $total_results = $total_entries;

	}

	// SET ARRAY VALUES
	if($total_entries > 200) { $total_entries = "200+"; }
	$search_objects[] = Array('search_type' => 'blog',
				'search_item' => $functions_blog[2],
				'search_total' => $total_entries);
} // END search_blog() FUNCTION









// THIS FUNCTION IS RUN WHEN A USER IS DELETED
// INPUT: $user_id REPRESENTING THE USER ID OF THE USER BEING DELETED
// OUTPUT: 
function deleteuser_blog($user_id) {
	global $database;

	// DELETE BLOG ENTRIES AND COMMENTS
	$database->database_query("DELETE FROM se_blogentries, se_blogcomments USING se_blogentries LEFT JOIN se_blogcomments ON se_blogentries.blogentry_id=se_blogcomments.blogcomment_blogentry_id WHERE se_blogentries.blogentry_user_id='$user_id'");

	// DELETE COMMENTS POSTED BY USER
	$database->database_query("DELETE FROM se_blogcomments WHERE blogcomment_authoruser_id='$user_id'");

	// DELETE STYLE
	$database->database_query("DELETE FROM se_blogstyles WHERE blogstyle_user_id='$user_id'");

} // END deleteuser_blog() FUNCTION

?>