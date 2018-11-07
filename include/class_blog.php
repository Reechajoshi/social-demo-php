<?

//  THIS CLASS CONTAINS BLOG ENTRY-RELATED METHODS 
//  METHODS IN THIS CLASS:
//    se_blog()
//    blog_entries_total()
//    blog_entries_list()
//    blog_entries_delete()
//    blog_entry_post()
//    blog_entry_delete()





class se_blog {

	// INITIALIZE VARIABLES
	var $is_error;			// DETERMINES WHETHER THERE IS AN ERROR OR NOT
	var $error_message;		// CONTAINS RELEVANT ERROR MESSAGE

	var $user_id;			// CONTAINS THE USER ID OF THE USER WHOSE BLOG WE ARE EDITING








	// THIS METHOD SETS INITIAL VARS
	// INPUT: $user_id (OPTIONAL) REPRESENTING THE USER ID OF THE USER WHOSE BLOG WE ARE CONCERNED WITH
	// OUTPUT: 
	function se_blog($user_id = 0) {

	  $this->user_id = $user_id;

	} // END se_blog() METHOD








	// THIS METHOD RETURNS THE TOTAL NUMBER OF ENTRIES
	// INPUT: $where (OPTIONAL) REPRESENTING ADDITIONAL THINGS TO INCLUDE IN THE WHERE CLAUSE
	// OUTPUT: AN INTEGER REPRESENTING THE NUMBER OF ENTRIES
	function blog_entries_total($where = "") {
	  global $database;

	  // BEGIN ENTRY QUERY
	  $blogentry_query = "SELECT blogentry_id FROM se_blogentries";

	  // IF NO USER ID SPECIFIED, JOIN TO USER TABLE
	  if($this->user_id == 0) { $blogentry_query .= " LEFT JOIN se_users ON se_blogentries.blogentry_user_id=se_users.user_id"; }

	  // ADD WHERE IF NECESSARY
	  if($where != "" | $this->user_id != 0) { $blogentry_query .= " WHERE"; }

	  // ENSURE USER ID IS NOT EMPTY
	  if($this->user_id != 0) { $blogentry_query .= " blogentry_user_id='".$this->user_id."'"; }

	  // INSERT AND IF NECESSARY
	  if($this->user_id != 0 & $where != "") { $blogentry_query .= " AND"; }

	  // ADD WHERE CLAUSE, IF NECESSARY
	  if($where != "") { $blogentry_query .= " $where"; }

	  // GET AND RETURN TOTAL BLOG ENTRIES
	  $blogentry_total = $database->database_num_rows($database->database_query($blogentry_query));
	  return $blogentry_total;

	} // END blog_entries_total() METHOD








	// THIS METHOD RETURNS AN ARRAY OF BLOG ENTRIES
	// INPUT: $start REPRESENTING THE ENTRY TO START WITH
	//	  $limit REPRESENTING THE NUMBER OF ENTRIES TO RETURN
	//	  $sort_by (OPTIONAL) REPRESENTING THE ORDER BY CLAUSE
	//	  $where (OPTIONAL) REPRESENTING ADDITIONAL THINGS TO INCLUDE IN THE WHERE CLAUSE
	// OUTPUT: AN ARRAY OF BLOG ENTRIES
	function blog_entries_list($start, $limit, $sort_by = "blogentry_date DESC", $where = "") {
	  global $database, $user, $owner;

	  // BEGIN QUERY
	  $blogentry_query = "SELECT se_blogentries.*, se_blogentrycats.blogentrycat_title, count(blogcomment_id) AS total_comments";
	
	  // IF NO USER ID SPECIFIED, RETRIEVE USER INFORMATION
	  if($this->user_id == 0) { $blogentry_query .= ", se_users.user_id, se_users.user_username, se_users.user_photo"; }

	  // CONTINUE QUERY
	  $blogentry_query .= " FROM se_blogentries LEFT JOIN se_blogentrycats ON se_blogentries.blogentry_blogentrycat_id=se_blogentrycats.blogentrycat_id LEFT JOIN se_blogcomments ON se_blogentries.blogentry_id=se_blogcomments.blogcomment_blogentry_id";

	  // IF NO USER ID SPECIFIED, JOIN TO USER TABLE
	  if($this->user_id == 0) { $blogentry_query .= " LEFT JOIN se_users ON se_blogentries.blogentry_user_id=se_users.user_id"; }

	  // ADD WHERE IF NECESSARY
	  if($where != "" | $this->user_id != 0) { $blogentry_query .= " WHERE"; }

	  // ENSURE USER ID IS NOT EMPTY
	  if($this->user_id != 0) { $blogentry_query .= " blogentry_user_id='".$this->user_id."'"; }

	  // INSERT AND IF NECESSARY
	  if($this->user_id != 0 & $where != "") { $blogentry_query .= " AND"; }

	  // ADD WHERE CLAUSE, IF NECESSARY
	  if($where != "") { $blogentry_query .= " $where"; }

	  // ADD GROUP BY, ORDER, AND LIMIT CLAUSE
	  $blogentry_query .= " GROUP BY blogentry_id ORDER BY $sort_by LIMIT $start, $limit";

	  // RUN QUERY
	  $blogentries = $database->database_query($blogentry_query);

	  // GET BLOG ENTRIES INTO AN ARRAY
	  $blogentry_array = Array();
	  while($blogentry_info = $database->database_fetch_assoc($blogentries)) {

	    // CONVERT HTML CHARACTERS BACK
	    $blogentry_body = str_replace("\r\n", "", html_entity_decode($blogentry_info[blogentry_body]));

	    // IF NO USER ID SPECIFIED, CREATE OBJECT FOR AUTHOR
	    if($this->user_id == 0) {
	      $author = new se_user();
	      $author->user_exists = 1;
	      $author->user_info[user_id] = $blogentry_info[user_id];
	      $author->user_info[user_username] = $blogentry_info[user_username];
	      $author->user_info[user_photo] = $blogentry_info[user_photo];

	    // OTHERWISE, SET AUTHOR TO OWNER/LOGGED-IN USER
	    } elseif($owner->user_exists != 0 & $owner->user_info[user_id] == $blogentry_info[blogentry_user_id]) {
	      $author = $owner;
	    } elseif($user->user_exists != 0 & $user->user_info[user_id] == $blogentry_info[blogentry_user_id]) {
	      $author = $user;
	    }

	    // GET ENTRY COMMENT PRIVACY
// FIND A WAY TO MAKE THIS WORK WITH THE AUTHOR
	    $allowed_to_comment = 1;
	    if($owner->user_exists != 0) {
	      $comment_level = $owner->user_privacy_max($user, $owner->level_info[level_blog_comments]);
	      if($comment_level < true_privacy($blogentry_info[blogentry_comments], $owner->level_info[level_blog_comments])) { $allowed_to_comment = 0; }
	    }

	    // SET BLOGENTRY ARRAY
	    $blogentry_array[] = Array('blogentry_id' => $blogentry_info[blogentry_id],
					'blogentry_user_id' => $blogentry_info[blogentry_user_id],
					'blogentry_blogentrycat_id' => $blogentry_info[blogentry_blogentrycat_id],
					'blogentry_blogentrycat_title' => $blogentry_info[blogentrycat_title],
					'blogentry_date' => $blogentry_info[blogentry_date],
					'blogentry_views' => $blogentry_info[blogentry_views],
					'blogentry_title' => $blogentry_info[blogentry_title],
					'blogentry_body' => $blogentry_body,
					'blogentry_privacy' => $blogentry_info[blogentry_privacy],
					'blogentry_author' => $author,
					'total_comments' => $blogentry_info[total_comments],
					'allowed_to_comment' => $allowed_to_comment);
	  }

	  // RETURN ARRAY
	  return $blogentry_array;

	} // END blog_entries_list() METHOD









	// THIS METHOD DELETES SELECTED BLOG ENTRIES
	// INPUT: $start REPRESENTING THE ENTRY TO START WITH
	//	  $limit REPRESENTING THE NUMBER OF ENTRIES TO RETURN
	//	  $sort_by (OPTIONAL) REPRESENTING THE ORDER BY CLAUSE
	//	  $where (OPTIONAL) REPRESENTING ADDITIONAL THINGS TO INCLUDE IN THE WHERE CLAUSE
	// OUTPUT:
	function blog_entries_delete($start, $limit, $sort_by = "blogentry_date DESC", $where = "") {
	  global $database;

	  // BEGIN QUERY
	  $blogentry_query = "SELECT blogentry_id FROM se_blogentries";

	  // ADD WHERE IF NECESSARY
	  if($where != "" | $this->user_id != 0) { $blogentry_query .= " WHERE"; }

	  // ENSURE USER ID IS NOT EMPTY
	  if($this->user_id != 0) { $blogentry_query .= " blogentry_user_id='".$this->user_id."'"; }

	  // INSERT AND IF NECESSARY
	  if($this->user_id != 0 & $where != "") { $blogentry_query .= " AND"; }

	  // ADD WHERE CLAUSE, IF NECESSARY
	  if($where != "") { $blogentry_query .= " $where"; }

	  // ADD ORDER, AND LIMIT CLAUSE
	  $blogentry_query .= " ORDER BY $sort_by LIMIT $start, $limit";

	  // RUN QUERY
	  $blogentries = $database->database_query($blogentry_query);

	  // GET BLOG ENTRIES INTO AN ARRAY
	  $blogentry_delete = "";
	  while($blogentry_info = $database->database_fetch_assoc($blogentries)) {
	    $var = "delete_blogentry_".$blogentry_info[blogentry_id];
	    if($_POST[$var] == 1) { 
	      if($blogentry_delete != "") { $blogentry_delete .= " OR "; }
	      $blogentry_delete .= "blogentry_id='$blogentry_info[blogentry_id]'";
	    }
	  }

	  // IF DELETE CLAUSE IS NOT EMPTY, DELETE ENTRIES
	  if($blogentry_delete != "") { $database->database_query("DELETE FROM se_blogentries, se_blogcomments USING se_blogentries LEFT JOIN se_blogcomments ON se_blogentries.blogentry_id=se_blogcomments.blogcomment_blogentry_id WHERE se_blogentries.blogentry_user_id='".$this->user_id."' AND ($blogentry_delete)"); }

	} // END blog_entries_delete() METHOD









	// THIS METHOD POSTS/EDITS AN ENTRY
	// INPUT: $blogentry_id REPRESENTING THE ID OF THE BLOG ENTRY TO EDIT. IF NO ENTRY WITH THIS ID IS FOUND, A NEW ENTRY WILL BE ADDED
	//	  $blogentry_title REPRESENTING THE TITLE OF THE BLOG ENTRY
	//	  $blogentry_body REPRESENTING THE BODY OF THE BLOG ENTRY
	//	  $blogentry_blogentrycat_id REPRESENTING THE ID OF THE SELECTED BLOG ENTRY CATEGORY
	//	  $blogentry_search REPRESENTING WHETHER THE BLOG ENTRY SHOULD BE INCLUDED IN SEARCH RESULTS
	//	  $blogentry_privacy REPRESENTING THE PRIVACY LEVEL OF THE ENTRY
	//	  $blogentry_comments REPRESENTING WHO CAN COMMENT ON THE ENTRY
	// OUTPUT:
	function blog_entry_post($blogentry_id, $blogentry_title, $blogentry_body, $blogentry_blogentrycat_id, $blogentry_search, $blogentry_privacy, $blogentry_comments) {
	  global $database;

	  // INCLUDE FILTER CLASS
	  include "./include/class_inputfilter.php";
	  $xssFilter = new InputFilter("", "", 1, 1, 1);

	  // SET BLOGENTRY VARS
	  $blogentry_user_id = $this->user_id;
	  $blogentry_date = time();
	  $blogentry_title = censor($blogentry_title);
	  $blogentry_body = security($xssFilter->process(censor($blogentry_body)));

	  // IF BLOG ENTRY CATEGORY IS NOT SET, MAKE IT UNCATEGORIZED
	  if($blogentry_blogentrycat_id == "") { $blogentry_blogentrycat_id = 0; }

	  // CHECK THAT PRIVACY IS NOT BLANK
	  if($blogentry_privacy == "") { $blogentry_privacy = true_privacy(0, $user->level_info[type_blog_privacy]); }
	  if($blogentry_comments == "") { $blogentry_comments = true_privacy(0, $user->level_info[type_blog_comments]); }

	  // ATTEMPT TO GET RELEVANT BLOG ENTRY
	  if($database->database_num_rows($database->database_query("SELECT blogentry_id FROM se_blogentries WHERE blogentry_id='$blogentry_id' AND blogentry_user_id='".$this->user_id."'")) == 1) {
	    $database->database_query("UPDATE se_blogentries SET blogentry_title='$blogentry_title',
								blogentry_body='$blogentry_body',
								blogentry_blogentrycat_id='$blogentry_blogentrycat_id',
								blogentry_search='$blogentry_search',
								blogentry_privacy='$blogentry_privacy',
								blogentry_comments='$blogentry_comments'
								WHERE blogentry_id='$blogentry_id'");

	  // ADD ENTRY IF NO ENTRY EXISTS
	  } else {
	    $database->database_query("INSERT INTO se_blogentries (blogentry_user_id,
								blogentry_blogentrycat_id,
								blogentry_date,
								blogentry_title,
								blogentry_body,
								blogentry_search,
								blogentry_privacy,
								blogentry_comments
								) VALUES (
								'$blogentry_user_id',
								'$blogentry_blogentrycat_id',
								'$blogentry_date',
								'$blogentry_title',
								'$blogentry_body',
								'$blogentry_search',
								'$blogentry_privacy',
								'$blogentry_comments')");
	  }

	} // END blog_entry_post() METHOD









	// THIS METHOD DELETES AN ENTRY
	// INPUT: $blogentry_id REPRESENTING THE ID OF THE BLOG ENTRY TO DELETE
	// OUTPUT:
	function blog_entry_delete($blogentry_id) {
	  global $database;

	  // CREATE DELETE QUERY
	  $blogentry_query = "DELETE FROM se_blogentries, se_blogcomments USING se_blogentries LEFT JOIN se_blogcomments ON se_blogentries.blogentry_id=se_blogcomments.blogcomment_blogentry_id WHERE se_blogentries.blogentry_id='$blogentry_id'";

	  // IF USER ID IS NOT EMPTY, ADD USER ID CLAUSE
	  if($this->user_id != 0) {  $blogentry_query .= " AND se_blogentries.blogentry_user_id='".$this->user_id."'"; }

	  // RUN QUERY
	  $database->database_query($blogentry_query);

	} // END blog_entry_delete() METHOD

}
?>