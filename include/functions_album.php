<?

//  THIS FILE CONTAINS ALBUM-RELATED FUNCTIONS
//  FUNCTIONS IN THIS CLASS:
//    search_album()
//    deleteuser_album()













// THIS FUNCTION IS RUN DURING THE SEARCH PROCESS TO SEARCH THROUGH ALBUMS AND MEDIA
// INPUT: $search_text REPRESENTING THE STRING TO SEARCH FOR
//	  $total_only REPRESENTING 1/0 DEPENDING ON WHETHER OR NOT TO RETURN JUST THE TOTAL RESULTS
//	  $search_objects REPRESENTING AN ARRAY CONTAINING INFORMATION ABOUT THE POSSIBLE OBJECTS TO SEARCH
//	  $results REPRESENTING THE ARRAY OF SEARCH RESULTS
//	  $total_results REPRESENTING THE TOTAL SEARCH RESULTS
// OUTPUT: 
function search_album($search_text, $total_only, &$search_objects, &$results, &$total_results) {
	global $database, $url, $functions_album, $results_per_page, $p;

	// CONSTRUCT QUERY
	$album_query = "
	(
	SELECT
          '1' AS sub_type,
	  se_media.media_album_id AS album_id,
	  se_media.media_title AS title,
	  se_media.media_id AS media_id,
	  se_users.user_id,
	  se_users.user_username,
	  se_users.user_photo
	FROM
	  se_media,
	  se_albums,
	  se_users,
	  se_levels
	WHERE
	  se_media.media_album_id=se_albums.album_id AND
	  se_albums.album_user_id=se_users.user_id AND
	  se_users.user_level_id=se_levels.level_id AND
	  (
	    se_albums.album_search='1' OR
	    se_levels.level_album_search='0'
	  )
	  AND
	  (
	    se_media.media_title LIKE '%$search_text%' OR
	    se_media.media_desc LIKE '%$search_text%'
	  )
	)
	UNION ALL
	(
	SELECT
	  '2' AS sub_type,
	  se_albums.album_id AS album_id,
	  se_albums.album_title AS title,
	  se_albums.album_cover AS media_id,
	  se_users.user_id,
	  se_users.user_username,
	  se_users.user_photo
	FROM
	  se_albums,
	  se_users,
	  se_levels
	WHERE
	  se_albums.album_user_id=se_users.user_id AND
	  se_users.user_level_id=se_levels.level_id AND
	  (
	    se_albums.album_search='1' OR
	    se_levels.level_album_search='0'
	  )
	  AND
	  (
	    se_albums.album_title LIKE '%$search_text%' OR
	    se_albums.album_desc LIKE '%$search_text%'
	  )
	)"; 

	// GET TOTAL RESULTS
	$total_albums = $database->database_num_rows($database->database_query($album_query." LIMIT 201"));

	// IF NOT TOTAL ONLY
	if($total_only == 0) {

	  // MAKE ALBUM PAGES
	  $start = ($p - 1) * $results_per_page;
	  $limit = $results_per_page+1;

	  // SEARCH ALBUMS
	  $albums = $database->database_query($album_query." ORDER BY album_id DESC LIMIT $start, $limit");
	  while($album_info = $database->database_fetch_assoc($albums)) {

	    // CREATE AN OBJECT FOR AUTHOR
	    $profile = new se_user();
	    $profile->user_info[user_id] = $album_info[user_id];
	    $profile->user_info[user_username] = $album_info[user_username];
	    $profile->user_info[user_photo] = $album_info[user_photo];

	    // RESULT IS A MEDIA
	    if($album_info[sub_type] == 1) {
	      $result_url = $url->url_create('album_file', $album_info[user_username], $album_info[album_id], $album_info[media_id]);
	      $desc_prefix = $functions_album[4];

	    // RESULT IS AN ALBUM
	    } else {
	      $result_url = $url->url_create('album', $album_info[user_username], $album_info[album_id]);
	      $desc_prefix = $functions_album[1];
	    }

	    // SET THUMBNAIL, IF AVAILABLE
	    $thumb_path = $url->url_userdir($album_info[user_id]).$album_info[media_id]."_thumb.jpg";
	    if(file_exists($thumb_path)) { $result_icon = $thumb_path; } else { $result_icon = ""; }

	    // IF NO TITLE
	    if($album_info[title] == "") { $title = $functions_album[3]; } else { $title = $album_info[title]; }

	    $results[] = Array('result_url' => $result_url,
				'result_icon' => $result_icon,
				'result_name' => $title,
				'result_desc' => $desc_prefix.$album_info[user_username],
				'result_user' => '');
	  }

	  // SET TOTAL RESULTS
	  $total_results = $total_albums;

	}

	// SET ARRAY VALUES
	if($total_albums > 200) { $total_albums = "200+"; }
	$search_objects[] = Array('search_type' => 'album',
				'search_item' => $functions_album[2],
				'search_total' => $total_albums);
} // END search_album() FUNCTION









// THIS FUNCTION IS RUN WHEN A USER IS DELETED
// INPUT: $user_id REPRESENTING THE USER ID OF THE USER BEING DELETED
// OUTPUT: 
function deleteuser_album($user_id) {
	global $database;

	// DELETE ALBUMS, MEDIA, AND COMMENTS
	$database->database_query("DELETE FROM se_albums, se_media, se_mediacomments USING se_albums LEFT JOIN se_media ON se_albums.album_id=se_media.media_album_id LEFT JOIN se_mediacomments ON se_media.media_id=se_mediacomments.mediacomment_media_id WHERE se_albums.album_user_id='$user_id'");

	// DELETE COMMENTS POSTED BY USER
	$database->database_query("DELETE FROM se_mediacomments WHERE mediacomment_authoruser_id='$user_id'");

	// DELETE STYLE
	$database->database_query("DELETE FROM se_albumstyles WHERE albumstyle_user_id='$user_id'");

} // END deleteuser_album() FUNCTION

?>