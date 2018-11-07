-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2012 at 06:56 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `socialnetworking`
--

-- --------------------------------------------------------

--
-- Table structure for table `se_actions`
--

CREATE TABLE IF NOT EXISTS `se_actions` (
  `action_id` int(9) NOT NULL AUTO_INCREMENT,
  `action_actiontype_id` int(9) NOT NULL DEFAULT '0',
  `action_date` int(14) NOT NULL DEFAULT '0',
  `action_user_id` int(9) NOT NULL DEFAULT '0',
  `action_subnet_id` int(9) NOT NULL DEFAULT '0',
  `action_icon` varchar(50) NOT NULL DEFAULT '',
  `action_text` text NOT NULL,
  PRIMARY KEY (`action_id`),
  KEY `action_user_id` (`action_user_id`),
  KEY `action_subnet_id` (`action_subnet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `se_actions`
--

INSERT INTO `se_actions` (`action_id`, `action_actiontype_id`, `action_date`, `action_user_id`, `action_subnet_id`, `action_icon`, `action_text`) VALUES
(5, 8, 1330737142, 1, 0, 'action_newalbum.gif', '&lt;a href=&#039;profile.php?user=aravinda&#039;&gt;aravinda&lt;/a&gt; created a new album: &lt;a href=&#039;album.php?user=aravinda&amp;album_id=1&#039;&gt;abcd&lt;/a&gt;'),
(6, 9, 1330737158, 1, 0, 'action_newmedia.gif', '&lt;a href=&#039;profile.php?user=aravinda&#039;&gt;aravinda&lt;/a&gt; uploaded new photos to their album: &lt;a href=&#039;album.php?user=aravinda&amp;album_id=1&#039;&gt;abcd&lt;/a&gt;'),
(7, 11, 1330737487, 1, 0, 'action_postblog.gif', '&lt;a href=&#039;profile.php?user=aravinda&#039;&gt;aravinda&lt;/a&gt; wrote a blog entry: &lt;a href=&#039;blog_entry.php?user=aravinda&amp;blogentry_id=1&#039;&gt;hi&lt;/a&gt;'),
(8, 1, 1330738656, 1, 0, 'action_login.gif', '&lt;a href=&#039;profile.php?user=aravinda&#039;&gt;aravinda&lt;/a&gt; logged in.'),
(9, 1, 1331007580, 1, 0, 'action_login.gif', '&lt;a href=&#039;profile.php?user=aravinda&#039;&gt;aravinda&lt;/a&gt; logged in.'),
(10, 6, 1331007789, 2, 0, 'action_signup.gif', '&lt;a href=&#039;profile.php?user=technopulse&#039;&gt;technopulse&lt;/a&gt; signed up.'),
(11, 1, 1331007820, 2, 0, 'action_login.gif', '&lt;a href=&#039;profile.php?user=technopulse&#039;&gt;technopulse&lt;/a&gt; logged in.'),
(12, 11, 1331008692, 2, 0, 'action_postblog.gif', '&lt;a href=&#039;profile.php?user=technopulse&#039;&gt;technopulse&lt;/a&gt; wrote a blog entry: &lt;a href=&#039;blog_entry.php?user=technopulse&amp;blogentry_id=2&#039;&gt;hello&lt;/a&gt;'),
(13, 4, 1331009185, 2, 0, 'action_postcomment.gif', '&lt;a href=&#039;profile.php?user=technopulse&#039;&gt;technopulse&lt;/a&gt; posted a comment on &lt;a href=&#039;profile.php?user=technopulse&#039;&gt;technopulse&lt;/a&gt;&#039;s profile:&lt;div style=&#039;padding: 10px 20px 10px 20px;&#039;&gt;dsfgfsdg&lt;/div&gt;'),
(14, 1, 1331615418, 1, 0, 'action_login.gif', '&lt;a href=&#039;profile.php?user=aravinda&#039;&gt;aravinda&lt;/a&gt; logged in.'),
(15, 3, 1331615878, 1, 0, 'action_editprofile.gif', '&lt;a href=&#039;profile.php?user=aravinda&#039;&gt;aravinda&lt;/a&gt; updated their profile.'),
(16, 6, 1331617183, 3, 0, 'action_signup.gif', '&lt;a href=&#039;profile.php?user=raj&#039;&gt;raj&lt;/a&gt; signed up.'),
(17, 1, 1331617246, 3, 0, 'action_login.gif', '&lt;a href=&#039;profile.php?user=raj&#039;&gt;raj&lt;/a&gt; logged in.');

-- --------------------------------------------------------

--
-- Table structure for table `se_actiontypes`
--

CREATE TABLE IF NOT EXISTS `se_actiontypes` (
  `actiontype_id` int(9) NOT NULL AUTO_INCREMENT,
  `actiontype_name` varchar(50) NOT NULL DEFAULT '',
  `actiontype_icon` varchar(50) NOT NULL DEFAULT '',
  `actiontype_desc` varchar(250) NOT NULL DEFAULT '',
  `actiontype_enabled` int(1) NOT NULL DEFAULT '0',
  `actiontype_text` text NOT NULL,
  PRIMARY KEY (`actiontype_id`),
  UNIQUE KEY `actiontype_name` (`actiontype_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `se_actiontypes`
--

INSERT INTO `se_actiontypes` (`actiontype_id`, `actiontype_name`, `actiontype_icon`, `actiontype_desc`, `actiontype_enabled`, `actiontype_text`) VALUES
(1, 'login', 'action_login.gif', 'When I log in.', 1, '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; logged in.'),
(2, 'editphoto', 'action_editphoto.gif', 'When I update my profile photo.', 1, '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; updated their profile photo.&lt;div style=&#039;padding: 10px 10px 10px 20px;&#039;&gt;&lt;a href=&#039;profile.php?user=[username]&#039;&gt;&lt;img src=&#039;[photo]&#039; border=&#039;0&#039;&gt;&lt;/a&gt;&lt;/div&gt;'),
(3, 'editprofile', 'action_editprofile.gif', 'When I update my profile.', 1, '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; updated their profile.'),
(4, 'postcomment', 'action_postcomment.gif', 'When I post a comment on someone&#039;s profile.', 1, '&lt;a href=&#039;profile.php?user=[username1]&#039;&gt;[username1]&lt;/a&gt; posted a comment on &lt;a href=&#039;profile.php?user=[username2]&#039;&gt;[username2]&lt;/a&gt;&#039;s profile:&lt;div style=&#039;padding: 10px 20px 10px 20px;&#039;&gt;[comment]&lt;/div&gt;'),
(5, 'addfriend', 'action_addfriend.gif', 'When I add a friend.', 1, '&lt;a href=&#039;profile.php?user=[username1]&#039;&gt;[username1]&lt;/a&gt; and &lt;a href=&#039;profile.php?user=[username2]&#039;&gt;[username2]&lt;/a&gt; are now friends.'),
(6, 'signup', 'action_signup.gif', '', 1, '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; signed up.'),
(7, 'editstatus', 'action_editstatus.gif', 'When I update my status.', 1, '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; is [status]'),
(8, 'newalbum', 'action_newalbum.gif', 'When I create a new album.', 1, '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; created a new album: &lt;a href=&#039;album.php?user=[username]&amp;album_id=[id]&#039;&gt;[title]&lt;/a&gt;'),
(9, 'newmedia', 'action_newmedia.gif', 'When I upload new photos.', 1, '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; uploaded new photos to their album: &lt;a href=&#039;album.php?user=[username]&amp;album_id=[id]&#039;&gt;[title]&lt;/a&gt;'),
(10, 'mediacomment', 'action_postcomment.gif', 'When I post a comment about a photo.', 1, '&lt;a href=&#039;profile.php?user=[username1]&#039;&gt;[username1]&lt;/a&gt; posted a comment on &lt;a href=&#039;profile.php?user=[username2]&#039;&gt;[username2]&lt;/a&gt;&#039;s &lt;a href=&#039;album_file.php?user=[username2]&amp;album_id=[albumid]&amp;media_id=[mediaid]&#039;&gt;photo&lt;/a&gt;:&lt;div style=&#039;padding: 10px 20px 10px 20px;&#039;&gt;[comment]&lt;/div&gt;'),
(11, 'postblog', 'action_postblog.gif', 'When I write a blog entry.', 1, '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; wrote a blog entry: &lt;a href=&#039;blog_entry.php?user=[username]&amp;blogentry_id=[id]&#039;&gt;[title]&lt;/a&gt;'),
(12, 'blogcomment', 'action_postcomment.gif', 'When I post a comment about a blog entry.', 1, '&lt;a href=&#039;profile.php?user=[username1]&#039;&gt;[username1]&lt;/a&gt; posted a comment on &lt;a href=&#039;profile.php?user=[username2]&#039;&gt;[username2]&lt;/a&gt;&#039;s &lt;a href=&#039;blog_entry.php?user=[username2]&amp;blogentry_id=[id]&#039;&gt;blog entry&lt;/a&gt;:&lt;div style=&#039;padding: 10px 20px 10px 20px;&#039;&gt;[comment]&lt;/div&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `se_admins`
--

CREATE TABLE IF NOT EXISTS `se_admins` (
  `admin_id` int(9) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(50) NOT NULL DEFAULT '',
  `admin_password` varchar(50) NOT NULL DEFAULT '',
  `admin_name` varchar(50) NOT NULL DEFAULT '',
  `admin_email` varchar(70) NOT NULL DEFAULT '',
  `admin_lostpassword_code` varchar(15) NOT NULL DEFAULT '',
  `admin_lostpassword_time` int(14) NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `UNIQUE` (`admin_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `se_admins`
--

INSERT INTO `se_admins` (`admin_id`, `admin_username`, `admin_password`, `admin_name`, `admin_email`, `admin_lostpassword_code`, `admin_lostpassword_time`) VALUES
(1, 'admin', '$1$admin123$5smLcebkIzfuZPa4QBZkY1', 'Administrator', 'email@wabsite.com', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `se_ads`
--

CREATE TABLE IF NOT EXISTS `se_ads` (
  `ad_id` int(9) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(250) NOT NULL DEFAULT '',
  `ad_date_start` varchar(15) NOT NULL DEFAULT '',
  `ad_date_end` varchar(15) NOT NULL DEFAULT '',
  `ad_paused` int(1) NOT NULL DEFAULT '0',
  `ad_limit_views` int(10) NOT NULL DEFAULT '0',
  `ad_limit_clicks` int(10) NOT NULL DEFAULT '0',
  `ad_limit_ctr` varchar(8) NOT NULL DEFAULT '0',
  `ad_public` int(1) NOT NULL DEFAULT '0',
  `ad_position` varchar(15) NOT NULL DEFAULT '',
  `ad_levels` text NOT NULL,
  `ad_subnets` text NOT NULL,
  `ad_html` text NOT NULL,
  `ad_total_views` int(10) NOT NULL DEFAULT '0',
  `ad_total_clicks` int(10) NOT NULL DEFAULT '0',
  `ad_filename` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_albums`
--

CREATE TABLE IF NOT EXISTS `se_albums` (
  `album_id` int(9) NOT NULL AUTO_INCREMENT,
  `album_user_id` int(9) NOT NULL DEFAULT '0',
  `album_datecreated` int(14) NOT NULL DEFAULT '0',
  `album_dateupdated` int(14) NOT NULL DEFAULT '0',
  `album_title` varchar(50) NOT NULL DEFAULT '',
  `album_desc` text,
  `album_search` int(1) NOT NULL DEFAULT '0',
  `album_privacy` int(1) NOT NULL DEFAULT '0',
  `album_comments` int(1) NOT NULL DEFAULT '0',
  `album_cover` int(9) NOT NULL DEFAULT '0',
  `album_views` int(9) NOT NULL DEFAULT '0',
  PRIMARY KEY (`album_id`),
  KEY `INDEX` (`album_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `se_albums`
--

INSERT INTO `se_albums` (`album_id`, `album_user_id`, `album_datecreated`, `album_dateupdated`, `album_title`, `album_desc`, `album_search`, `album_privacy`, `album_comments`, `album_cover`, `album_views`) VALUES
(1, 1, 1330737142, 1330737158, 'abcd', 'hello', 1, 0, 0, 3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `se_albumstyles`
--

CREATE TABLE IF NOT EXISTS `se_albumstyles` (
  `albumstyle_id` int(9) NOT NULL AUTO_INCREMENT,
  `albumstyle_user_id` int(9) NOT NULL DEFAULT '0',
  `albumstyle_css` text,
  PRIMARY KEY (`albumstyle_id`),
  KEY `INDEX` (`albumstyle_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_announcements`
--

CREATE TABLE IF NOT EXISTS `se_announcements` (
  `announcement_id` int(9) NOT NULL AUTO_INCREMENT,
  `announcement_order` int(9) NOT NULL DEFAULT '0',
  `announcement_date` varchar(255) NOT NULL DEFAULT '0',
  `announcement_subject` varchar(255) NOT NULL DEFAULT '',
  `announcement_body` text,
  PRIMARY KEY (`announcement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_blogcomments`
--

CREATE TABLE IF NOT EXISTS `se_blogcomments` (
  `blogcomment_id` int(9) NOT NULL AUTO_INCREMENT,
  `blogcomment_blogentry_id` int(9) NOT NULL DEFAULT '0',
  `blogcomment_authoruser_id` int(9) NOT NULL DEFAULT '0',
  `blogcomment_date` int(14) NOT NULL DEFAULT '0',
  `blogcomment_body` text,
  PRIMARY KEY (`blogcomment_id`),
  KEY `INDEX` (`blogcomment_blogentry_id`,`blogcomment_authoruser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_blogentries`
--

CREATE TABLE IF NOT EXISTS `se_blogentries` (
  `blogentry_id` int(9) NOT NULL AUTO_INCREMENT,
  `blogentry_user_id` int(9) NOT NULL DEFAULT '0',
  `blogentry_blogentrycat_id` int(9) NOT NULL DEFAULT '0',
  `blogentry_date` int(14) NOT NULL DEFAULT '0',
  `blogentry_views` int(9) NOT NULL DEFAULT '0',
  `blogentry_title` varchar(100) NOT NULL DEFAULT '',
  `blogentry_body` text,
  `blogentry_search` int(1) NOT NULL DEFAULT '0',
  `blogentry_privacy` int(1) NOT NULL DEFAULT '0',
  `blogentry_comments` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`blogentry_id`),
  KEY `INDEX` (`blogentry_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `se_blogentries`
--

INSERT INTO `se_blogentries` (`blogentry_id`, `blogentry_user_id`, `blogentry_blogentrycat_id`, `blogentry_date`, `blogentry_views`, `blogentry_title`, `blogentry_body`, `blogentry_search`, `blogentry_privacy`, `blogentry_comments`) VALUES
(1, 1, 0, 1330737487, 0, 'hi', 'this is test page', 1, 0, 0),
(2, 2, 0, 1331008692, 0, 'hello', 'this is test page', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `se_blogentrycats`
--

CREATE TABLE IF NOT EXISTS `se_blogentrycats` (
  `blogentrycat_id` int(9) NOT NULL AUTO_INCREMENT,
  `blogentrycat_title` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`blogentrycat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_blogstyles`
--

CREATE TABLE IF NOT EXISTS `se_blogstyles` (
  `blogstyle_id` int(9) NOT NULL AUTO_INCREMENT,
  `blogstyle_user_id` int(9) NOT NULL DEFAULT '0',
  `blogstyle_css` text,
  PRIMARY KEY (`blogstyle_id`),
  KEY `INDEX` (`blogstyle_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `se_blogstyles`
--

INSERT INTO `se_blogstyles` (`blogstyle_id`, `blogstyle_user_id`, `blogstyle_css`) VALUES
(1, 1, 'hello how are you'),
(2, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `se_chatbans`
--

CREATE TABLE IF NOT EXISTS `se_chatbans` (
  `chatban_id` int(9) NOT NULL AUTO_INCREMENT,
  `chatban_user_id` int(9) NOT NULL DEFAULT '0',
  `chatban_bandate` int(14) NOT NULL DEFAULT '0',
  PRIMARY KEY (`chatban_id`),
  KEY `INDEX` (`chatban_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_chatmessages`
--

CREATE TABLE IF NOT EXISTS `se_chatmessages` (
  `chatmessage_id` int(12) NOT NULL AUTO_INCREMENT,
  `chatmessage_time` int(14) NOT NULL DEFAULT '0',
  `chatmessage_user_username` varchar(50) NOT NULL DEFAULT '',
  `chatmessage_content` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`chatmessage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `se_chatmessages`
--

INSERT INTO `se_chatmessages` (`chatmessage_id`, `chatmessage_time`, `chatmessage_user_username`, `chatmessage_content`) VALUES
(1, 1330737273, '', 'aravinda has just joined the chat.'),
(2, 1330737283, 'aravinda', 'f'),
(3, 1331008599, '', 'technopulse has just joined the chat.'),
(4, 1331008603, 'technopulse', 'dsfg'),
(5, 1331008606, 'technopulse', 'sdfg'),
(6, 1331615900, '', 'aravinda has just joined the chat.'),
(7, 1331615942, 'aravinda', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `se_chatusers`
--

CREATE TABLE IF NOT EXISTS `se_chatusers` (
  `chatuser_id` int(9) NOT NULL AUTO_INCREMENT,
  `chatuser_user_id` int(9) NOT NULL DEFAULT '0',
  `chatuser_user_username` varchar(50) NOT NULL DEFAULT '',
  `chatuser_lastupdate` int(14) NOT NULL DEFAULT '0',
  `chatuser_user_photo` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`chatuser_id`),
  KEY `INDEX` (`chatuser_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `se_chatusers`
--

INSERT INTO `se_chatusers` (`chatuser_id`, `chatuser_user_id`, `chatuser_user_username`, `chatuser_lastupdate`, `chatuser_user_photo`) VALUES
(3, 1, 'aravinda', 1331616245, '0_5248.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `se_fields`
--

CREATE TABLE IF NOT EXISTS `se_fields` (
  `field_id` int(9) NOT NULL AUTO_INCREMENT,
  `field_tab_id` int(9) NOT NULL DEFAULT '0',
  `field_order` int(3) NOT NULL DEFAULT '0',
  `field_dependency` int(9) NOT NULL DEFAULT '0',
  `field_title` varchar(100) NOT NULL DEFAULT '',
  `field_desc` text,
  `field_error` varchar(250) NOT NULL DEFAULT '',
  `field_type` int(1) NOT NULL DEFAULT '0',
  `field_signup` int(1) NOT NULL DEFAULT '0',
  `field_style` varchar(200) NOT NULL DEFAULT '',
  `field_maxlength` int(3) NOT NULL DEFAULT '0',
  `field_link` varchar(250) NOT NULL DEFAULT '',
  `field_options` text,
  `field_browsable` int(1) NOT NULL DEFAULT '0',
  `field_required` int(1) NOT NULL DEFAULT '0',
  `field_regex` varchar(250) NOT NULL DEFAULT '',
  `field_birthday` int(1) NOT NULL DEFAULT '0',
  `field_html` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`field_id`),
  KEY `INDEX` (`field_tab_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `se_fields`
--

INSERT INTO `se_fields` (`field_id`, `field_tab_id`, `field_order`, `field_dependency`, `field_title`, `field_desc`, `field_error`, `field_type`, `field_signup`, `field_style`, `field_maxlength`, `field_link`, `field_options`, `field_browsable`, `field_required`, `field_regex`, `field_birthday`, `field_html`) VALUES
(1, 2, 7, 0, 'Country', '', '', 1, 1, '', 50, '', '', 2, 0, '', 0, ''),
(2, 2, 8, 0, 'Phone Number', 'Ex: (888) 555-1234', '', 1, 1, '', 50, '', '', 2, 0, '', 0, ''),
(3, 2, 9, 0, 'Website URL', 'Ex: http://www.yoursite.com', '', 1, 1, '', 50, '[field_value]', '', 2, 0, '', 0, ''),
(4, 2, 6, 0, 'State/Province', '', '', 1, 0, '', 50, '', '', 2, 0, '', 0, ''),
(5, 2, 5, 0, 'City', '', '', 1, 1, '', 50, '', '', 2, 0, '', 0, ''),
(6, 1, 3, 0, 'Gender', '', '', 3, 1, '', 50, '', '0<!>Male<!>0<!><~!~>1<!>Female<!>0<!><~!~>', 2, 0, '', 0, ''),
(7, 2, 4, 0, 'Street Address', '', '', 1, 1, '', 50, '', '', 2, 0, '', 0, ''),
(8, 1, 1, 0, 'Name', '', '', 1, 1, '', 50, '', '', 2, 0, '', 0, ''),
(9, 1, 2, 0, 'Birthday', '', '', 5, 1, '', 50, '', '', 2, 0, '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `se_friendexplains`
--

CREATE TABLE IF NOT EXISTS `se_friendexplains` (
  `friendexplain_id` int(9) NOT NULL AUTO_INCREMENT,
  `friendexplain_friend_id` int(9) NOT NULL DEFAULT '0',
  `friendexplain_body` text,
  PRIMARY KEY (`friendexplain_id`),
  KEY `friend_id` (`friendexplain_friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_friends`
--

CREATE TABLE IF NOT EXISTS `se_friends` (
  `friend_id` int(9) NOT NULL AUTO_INCREMENT,
  `friend_user_id1` int(9) NOT NULL DEFAULT '0',
  `friend_user_id2` int(9) NOT NULL DEFAULT '0',
  `friend_status` int(1) NOT NULL DEFAULT '0',
  `friend_type` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`friend_id`),
  KEY `INDEX` (`friend_user_id1`,`friend_user_id2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_invites`
--

CREATE TABLE IF NOT EXISTS `se_invites` (
  `invite_id` int(9) NOT NULL AUTO_INCREMENT,
  `invite_user_id` int(9) NOT NULL DEFAULT '0',
  `invite_date` int(14) NOT NULL DEFAULT '0',
  `invite_email` varchar(70) NOT NULL DEFAULT '',
  `invite_code` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`invite_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_levels`
--

CREATE TABLE IF NOT EXISTS `se_levels` (
  `level_id` int(9) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(50) NOT NULL DEFAULT '',
  `level_desc` text NOT NULL,
  `level_default` int(1) NOT NULL DEFAULT '0',
  `level_signup` int(1) NOT NULL DEFAULT '0',
  `level_message_allow` int(1) NOT NULL DEFAULT '0',
  `level_message_inbox` int(3) NOT NULL DEFAULT '0',
  `level_message_outbox` int(3) NOT NULL DEFAULT '0',
  `level_profile_style` int(1) NOT NULL DEFAULT '0',
  `level_profile_block` int(1) NOT NULL DEFAULT '0',
  `level_profile_search` int(1) NOT NULL DEFAULT '0',
  `level_profile_privacy` varchar(10) NOT NULL DEFAULT '',
  `level_profile_comments` varchar(10) NOT NULL DEFAULT '',
  `level_profile_status` int(1) NOT NULL DEFAULT '0',
  `level_photo_allow` int(1) NOT NULL DEFAULT '0',
  `level_photo_width` varchar(3) NOT NULL DEFAULT '',
  `level_photo_height` varchar(3) NOT NULL DEFAULT '',
  `level_photo_exts` varchar(50) NOT NULL DEFAULT '',
  `level_album_allow` int(1) NOT NULL DEFAULT '0',
  `level_album_maxnum` int(3) NOT NULL DEFAULT '0',
  `level_album_exts` text NOT NULL,
  `level_album_mimes` text,
  `level_album_storage` bigint(11) NOT NULL DEFAULT '0',
  `level_album_maxsize` bigint(11) NOT NULL DEFAULT '0',
  `level_album_width` varchar(4) NOT NULL DEFAULT '',
  `level_album_height` varchar(4) NOT NULL DEFAULT '',
  `level_album_style` int(1) NOT NULL DEFAULT '0',
  `level_album_search` int(1) NOT NULL DEFAULT '0',
  `level_album_privacy` varchar(10) NOT NULL DEFAULT '',
  `level_album_comments` varchar(10) NOT NULL DEFAULT '',
  `level_blog_allow` int(1) NOT NULL DEFAULT '0',
  `level_blog_entries` int(3) NOT NULL DEFAULT '0',
  `level_blog_style` int(1) NOT NULL DEFAULT '0',
  `level_blog_search` int(1) NOT NULL DEFAULT '0',
  `level_blog_privacy` varchar(10) NOT NULL DEFAULT '',
  `level_blog_comments` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `se_levels`
--

INSERT INTO `se_levels` (`level_id`, `level_name`, `level_desc`, `level_default`, `level_signup`, `level_message_allow`, `level_message_inbox`, `level_message_outbox`, `level_profile_style`, `level_profile_block`, `level_profile_search`, `level_profile_privacy`, `level_profile_comments`, `level_profile_status`, `level_photo_allow`, `level_photo_width`, `level_photo_height`, `level_photo_exts`, `level_album_allow`, `level_album_maxnum`, `level_album_exts`, `level_album_mimes`, `level_album_storage`, `level_album_maxsize`, `level_album_width`, `level_album_height`, `level_album_style`, `level_album_search`, `level_album_privacy`, `level_album_comments`, `level_blog_allow`, `level_blog_entries`, `level_blog_style`, `level_blog_search`, `level_blog_privacy`, `level_blog_comments`) VALUES
(1, 'Default Level', '', 1, 0, 1, 100, 50, 1, 1, 1, '012345', '0123456', 1, 1, '200', '200', 'jpg,jpeg,gif,png', 1, 10, 'jpg,gif,jpeg,png,bmp,mp3,mpeg,avi,mpa,mov,qt,swf', 'image/jpeg,image/pjpeg,image/jpg,image/jpe,image/pjpg,image/x-jpeg,image/x-jpg,image/gif,image/x-gif,image/png,image/x-png,image/bmp,audio/mpeg,video/mpeg,video/x-msvideo,video/avi,video/quicktime,application/x-shockwave-flash', 5242880, 2048000, '500', '500', 1, 1, '012345', '0123456', 1, 50, 1, 1, '012345', '0123456');

-- --------------------------------------------------------

--
-- Table structure for table `se_logins`
--

CREATE TABLE IF NOT EXISTS `se_logins` (
  `login_id` int(9) NOT NULL AUTO_INCREMENT,
  `login_email` varchar(70) NOT NULL DEFAULT '',
  `login_password` varchar(50) NOT NULL DEFAULT '',
  `login_date` int(14) NOT NULL DEFAULT '0',
  `login_ip` varchar(15) NOT NULL DEFAULT '',
  `login_result` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `se_logins`
--

INSERT INTO `se_logins` (`login_id`, `login_email`, `login_password`, `login_date`, `login_ip`, `login_result`) VALUES
(1, 'mvaravinda@gmail.com', '', 1330735658, '::1', 1),
(2, 'mvaravinda@gmail.com', '', 1330736857, '::1', 1),
(3, 'mvaravinda@gmail.com', '', 1330738648, '::1', 0),
(4, 'mvaravinda@gmail.com', '', 1330738656, '::1', 1),
(5, 'mvaravinda@gmail.com', '', 1331007580, '::1', 1),
(6, 'technopulse@technopulse.in', '', 1331007820, '::1', 1),
(7, '', '', 1331009461, '::1', 0),
(8, 'mvaravinda@gmail.com', '', 1331615418, '::1', 1),
(9, 'abcd@technopulse.in', '', 1331617246, '192.168.1.17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `se_media`
--

CREATE TABLE IF NOT EXISTS `se_media` (
  `media_id` int(9) NOT NULL AUTO_INCREMENT,
  `media_album_id` int(9) NOT NULL DEFAULT '0',
  `media_date` int(14) NOT NULL DEFAULT '0',
  `media_title` varchar(50) NOT NULL DEFAULT '',
  `media_desc` text,
  `media_ext` varchar(8) NOT NULL DEFAULT '',
  `media_filesize` int(9) NOT NULL DEFAULT '0',
  PRIMARY KEY (`media_id`),
  KEY `INDEX` (`media_album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `se_media`
--

INSERT INTO `se_media` (`media_id`, `media_album_id`, `media_date`, `media_title`, `media_desc`, `media_ext`, `media_filesize`) VALUES
(1, 1, 1330737158, '', NULL, 'jpg', 879394),
(2, 1, 1330737158, '', NULL, 'jpg', 845941),
(3, 1, 1330737158, '', NULL, 'jpg', 595284);

-- --------------------------------------------------------

--
-- Table structure for table `se_mediacomments`
--

CREATE TABLE IF NOT EXISTS `se_mediacomments` (
  `mediacomment_id` int(9) NOT NULL AUTO_INCREMENT,
  `mediacomment_media_id` int(9) NOT NULL DEFAULT '0',
  `mediacomment_authoruser_id` int(9) NOT NULL DEFAULT '0',
  `mediacomment_date` int(14) NOT NULL DEFAULT '0',
  `mediacomment_body` text,
  PRIMARY KEY (`mediacomment_id`),
  KEY `INDEX` (`mediacomment_media_id`,`mediacomment_authoruser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_plugins`
--

CREATE TABLE IF NOT EXISTS `se_plugins` (
  `plugin_id` int(9) NOT NULL AUTO_INCREMENT,
  `plugin_name` varchar(100) NOT NULL DEFAULT '',
  `plugin_version` varchar(4) NOT NULL DEFAULT '',
  `plugin_type` varchar(30) NOT NULL DEFAULT '',
  `plugin_desc` text NOT NULL,
  `plugin_icon` varchar(50) NOT NULL DEFAULT '',
  `plugin_pages_main` text NOT NULL,
  `plugin_pages_level` text NOT NULL,
  `plugin_url_htaccess` text NOT NULL,
  PRIMARY KEY (`plugin_id`),
  UNIQUE KEY `plugin_type` (`plugin_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `se_plugins`
--

INSERT INTO `se_plugins` (`plugin_id`, `plugin_name`, `plugin_version`, `plugin_type`, `plugin_desc`, `plugin_icon`, `plugin_pages_main`, `plugin_pages_level`, `plugin_url_htaccess`) VALUES
(1, 'Photo Album Plugin', '2.5', 'album', 'This plugin gives your users their own personal photo albums. These albums can be configured to store photos, videos, or any other file types you choose to allow. Users can interact by commenting on each others photos and viewing their friends'' recent updates.', 'album16.gif', 'View Photo Albums<!>admin_viewalbums.php<~!~>Global Album Settings<!>admin_album.php<~!~>', 'Album Settings<!>admin_levels_albumsettings.php<~!~>', 'RewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteRule ^([^/]+)/albums/([0-9]+)/([0-9]+)/?$ $server_info/album_file.php?user=$1&album_id=$2&media_id=$3 [L]\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteRule ^([^/]+)/albums/([0-9]+)/?$ $server_info/album.php?user=$1&album_id=$2 [L]\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteRule ^([^/]+)/albums/([0-9]+)/([^/]+)?$ $server_info/album.php?user=$1&album_id=$2$3 [L]\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteRule ^([^/]+)/albums/?$ $server_info/albums.php?user=$1 [L]'),
(2, 'Chat Plugin', '2.2', 'chat', 'This plugin installs a live chatroom on your social network and adds a link to it on your users'' menu bar. Adding a chatroom is a great way to encourage members to interact more closely and form new connections.', 'chat16.gif', 'Global Chat Settings<!>admin_chat.php<~!~>', '', ''),
(3, 'Blog Plugin', '2.5', 'blog', 'This plugin gives each of your users their own personal blog. This is a great way to encourage content generation and personal expression. Blogs are also an excellent way to improve the search engine visibility of your social network.', 'blog16.gif', 'View Blog Entries<!>admin_viewblogs.php<~!~>Global Blog Settings<!>admin_blog.php<~!~>', 'Blog Settings<!>admin_levels_blogsettings.php<~!~>', 'RewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteRule ^([^/]+)/blog/([0-9]+)/?$ $server_info/blog_entry.php?user=$1&blogentry_id=$2 [L]\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteRule ^([^/]+)/blog/([^/]+)?$ $server_info/blog.php?user=$1$2 [L]\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteRule ^([^/]+)/blog/?$ $server_info/blog.php?user=$1 [L]');

-- --------------------------------------------------------

--
-- Table structure for table `se_pms`
--

CREATE TABLE IF NOT EXISTS `se_pms` (
  `pm_id` int(9) NOT NULL AUTO_INCREMENT,
  `pm_user_id` int(9) NOT NULL DEFAULT '0',
  `pm_authoruser_id` int(9) NOT NULL DEFAULT '0',
  `pm_convo_id` int(9) NOT NULL DEFAULT '0',
  `pm_date` int(14) NOT NULL DEFAULT '0',
  `pm_subject` varchar(50) NOT NULL DEFAULT '',
  `pm_body` text,
  `pm_status` int(1) NOT NULL DEFAULT '0',
  `pm_outbox` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pm_id`),
  KEY `INDEX` (`pm_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_profilecomments`
--

CREATE TABLE IF NOT EXISTS `se_profilecomments` (
  `profilecomment_id` int(9) NOT NULL AUTO_INCREMENT,
  `profilecomment_user_id` int(9) NOT NULL DEFAULT '0',
  `profilecomment_authoruser_id` int(9) NOT NULL DEFAULT '0',
  `profilecomment_date` int(14) NOT NULL DEFAULT '0',
  `profilecomment_body` text,
  PRIMARY KEY (`profilecomment_id`),
  KEY `profilecomment_user_id` (`profilecomment_user_id`,`profilecomment_authoruser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `se_profilecomments`
--

INSERT INTO `se_profilecomments` (`profilecomment_id`, `profilecomment_user_id`, `profilecomment_authoruser_id`, `profilecomment_date`, `profilecomment_body`) VALUES
(1, 2, 2, 1331009185, 'dsfgfsdg');

-- --------------------------------------------------------

--
-- Table structure for table `se_profiles`
--

CREATE TABLE IF NOT EXISTS `se_profiles` (
  `profile_id` int(9) NOT NULL AUTO_INCREMENT,
  `profile_user_id` int(9) NOT NULL DEFAULT '0',
  `profile_1` varchar(250) NOT NULL DEFAULT '',
  `profile_2` varchar(250) NOT NULL DEFAULT '',
  `profile_3` varchar(250) NOT NULL DEFAULT '',
  `profile_4` varchar(250) NOT NULL DEFAULT '',
  `profile_5` varchar(250) NOT NULL DEFAULT '',
  `profile_6` int(2) NOT NULL DEFAULT '0',
  `profile_7` varchar(250) NOT NULL DEFAULT '',
  `profile_8` varchar(250) NOT NULL DEFAULT '',
  `profile_9` int(14) NOT NULL DEFAULT '0',
  PRIMARY KEY (`profile_id`),
  KEY `INDEX` (`profile_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `se_profiles`
--

INSERT INTO `se_profiles` (`profile_id`, `profile_user_id`, `profile_1`, `profile_2`, `profile_3`, `profile_4`, `profile_5`, `profile_6`, `profile_7`, `profile_8`, `profile_9`) VALUES
(1, 1, 'india', '987654321', 'www.technopulse.in', '', 'puttur', 0, 'v nagar', 'aravinda', 0),
(2, 2, 'india', '987544123', 'http://www.technopulse.in', '', 'mangalore', 0, 'city light', 'technopulse', 796946400),
(3, 3, 'india', '9874563211', '', '', 'bangalore', 0, 'balmatta', 'raj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `se_profilestyles`
--

CREATE TABLE IF NOT EXISTS `se_profilestyles` (
  `profilestyle_id` int(9) NOT NULL AUTO_INCREMENT,
  `profilestyle_user_id` int(9) NOT NULL DEFAULT '0',
  `profilestyle_css` text,
  PRIMARY KEY (`profilestyle_id`),
  KEY `profilestyle_user_id` (`profilestyle_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `se_profilestyles`
--

INSERT INTO `se_profilestyles` (`profilestyle_id`, `profilestyle_user_id`, `profilestyle_css`) VALUES
(1, 1, ''),
(2, 2, ''),
(3, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `se_reports`
--

CREATE TABLE IF NOT EXISTS `se_reports` (
  `report_id` int(9) NOT NULL AUTO_INCREMENT,
  `report_user_id` int(9) NOT NULL DEFAULT '0',
  `report_url` varchar(250) NOT NULL DEFAULT '',
  `report_reason` int(1) NOT NULL DEFAULT '0',
  `report_details` text,
  PRIMARY KEY (`report_id`),
  KEY `INDEX` (`report_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_settings`
--

CREATE TABLE IF NOT EXISTS `se_settings` (
  `setting_id` int(9) NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(20) NOT NULL DEFAULT '',
  `setting_url` int(1) NOT NULL DEFAULT '0',
  `setting_lang_default` varchar(50) NOT NULL DEFAULT '',
  `setting_lang_allow` int(1) NOT NULL DEFAULT '0',
  `setting_timezone` varchar(5) NOT NULL DEFAULT '',
  `setting_dateformat` varchar(20) NOT NULL DEFAULT '',
  `setting_timeformat` varchar(20) NOT NULL DEFAULT '',
  `setting_permission_profile` int(1) NOT NULL DEFAULT '0',
  `setting_permission_invite` int(1) NOT NULL DEFAULT '0',
  `setting_permission_search` int(1) NOT NULL DEFAULT '0',
  `setting_permission_portal` int(1) NOT NULL DEFAULT '0',
  `setting_banned_ips` text,
  `setting_banned_emails` text,
  `setting_banned_usernames` text,
  `setting_banned_words` text,
  `setting_comment_code` int(1) NOT NULL DEFAULT '0',
  `setting_connection_allow` int(1) NOT NULL DEFAULT '0',
  `setting_connection_framework` int(1) NOT NULL DEFAULT '0',
  `setting_connection_types` text,
  `setting_connection_other` int(1) NOT NULL DEFAULT '0',
  `setting_connection_explain` int(1) NOT NULL DEFAULT '0',
  `setting_signup_photo` int(1) NOT NULL DEFAULT '0',
  `setting_signup_enable` int(1) NOT NULL DEFAULT '0',
  `setting_signup_welcome` int(1) NOT NULL DEFAULT '0',
  `setting_signup_invite` int(1) NOT NULL DEFAULT '0',
  `setting_signup_invite_checkemail` int(1) NOT NULL DEFAULT '0',
  `setting_signup_invite_numgiven` int(3) NOT NULL DEFAULT '0',
  `setting_signup_invitepage` int(1) NOT NULL DEFAULT '0',
  `setting_signup_verify` int(1) NOT NULL DEFAULT '0',
  `setting_signup_code` int(1) NOT NULL DEFAULT '0',
  `setting_signup_randpass` int(1) NOT NULL DEFAULT '0',
  `setting_signup_tos` int(1) NOT NULL DEFAULT '0',
  `setting_signup_tostext` text,
  `setting_invite_code` int(1) NOT NULL DEFAULT '0',
  `setting_actions_showlength` int(14) NOT NULL DEFAULT '0',
  `setting_actions_actionsperuser` int(2) NOT NULL DEFAULT '0',
  `setting_actions_selfdelete` int(2) NOT NULL DEFAULT '0',
  `setting_actions_privacy` int(1) NOT NULL DEFAULT '0',
  `setting_actions_actionsonprofile` int(2) NOT NULL DEFAULT '0',
  `setting_actions_actionsinlist` int(2) NOT NULL DEFAULT '0',
  `setting_actions_visibility` int(1) NOT NULL DEFAULT '0',
  `setting_subnet_field1_id` int(9) NOT NULL DEFAULT '0',
  `setting_subnet_field2_id` int(9) NOT NULL DEFAULT '0',
  `setting_email_fromname` varchar(70) NOT NULL DEFAULT '',
  `setting_email_fromemail` varchar(70) NOT NULL DEFAULT '',
  `setting_email_invitecode_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_invitecode_message` text,
  `setting_email_invite_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_invite_message` text,
  `setting_email_verify_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_verify_message` text,
  `setting_email_newpass_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_newpass_message` text,
  `setting_email_welcome_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_welcome_message` text,
  `setting_email_lostpassword_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_lostpassword_message` text,
  `setting_email_friendrequest_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_friendrequest_message` text,
  `setting_email_message_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_message_message` text,
  `setting_email_profilecomment_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_profilecomment_message` text,
  `setting_permission_album` int(1) NOT NULL DEFAULT '0',
  `setting_email_mediacomment_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_mediacomment_message` text,
  `setting_chat_enabled` int(1) NOT NULL DEFAULT '0',
  `setting_chat_update` int(2) NOT NULL DEFAULT '0',
  `setting_chat_showphotos` int(1) NOT NULL DEFAULT '0',
  `setting_permission_blog` int(1) NOT NULL DEFAULT '0',
  `setting_email_blogcomment_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_blogcomment_message` text,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `se_settings`
--

INSERT INTO `se_settings` (`setting_id`, `setting_key`, `setting_url`, `setting_lang_default`, `setting_lang_allow`, `setting_timezone`, `setting_dateformat`, `setting_timeformat`, `setting_permission_profile`, `setting_permission_invite`, `setting_permission_search`, `setting_permission_portal`, `setting_banned_ips`, `setting_banned_emails`, `setting_banned_usernames`, `setting_banned_words`, `setting_comment_code`, `setting_connection_allow`, `setting_connection_framework`, `setting_connection_types`, `setting_connection_other`, `setting_connection_explain`, `setting_signup_photo`, `setting_signup_enable`, `setting_signup_welcome`, `setting_signup_invite`, `setting_signup_invite_checkemail`, `setting_signup_invite_numgiven`, `setting_signup_invitepage`, `setting_signup_verify`, `setting_signup_code`, `setting_signup_randpass`, `setting_signup_tos`, `setting_signup_tostext`, `setting_invite_code`, `setting_actions_showlength`, `setting_actions_actionsperuser`, `setting_actions_selfdelete`, `setting_actions_privacy`, `setting_actions_actionsonprofile`, `setting_actions_actionsinlist`, `setting_actions_visibility`, `setting_subnet_field1_id`, `setting_subnet_field2_id`, `setting_email_fromname`, `setting_email_fromemail`, `setting_email_invitecode_subject`, `setting_email_invitecode_message`, `setting_email_invite_subject`, `setting_email_invite_message`, `setting_email_verify_subject`, `setting_email_verify_message`, `setting_email_newpass_subject`, `setting_email_newpass_message`, `setting_email_welcome_subject`, `setting_email_welcome_message`, `setting_email_lostpassword_subject`, `setting_email_lostpassword_message`, `setting_email_friendrequest_subject`, `setting_email_friendrequest_message`, `setting_email_message_subject`, `setting_email_message_message`, `setting_email_profilecomment_subject`, `setting_email_profilecomment_message`, `setting_permission_album`, `setting_email_mediacomment_subject`, `setting_email_mediacomment_message`, `setting_chat_enabled`, `setting_chat_update`, `setting_chat_showphotos`, `setting_permission_blog`, `setting_email_blogcomment_subject`, `setting_email_blogcomment_message`) VALUES
(1, '0', 0, 'english', 0, '5.5', 'M. j, Y', 'g:i A', 1, 0, 1, 1, '', '', '', '', 1, 3, 0, 'Friend<!>Co-Worker<!>Family', 1, 1, 1, 1, 1, 0, 0, 5, 1, 0, 1, 0, 1, 'This is the terms of service agreement.', 1, 3600, 3, 1, 1, 7, 15, 1, -1, -1, 'SocialEngine Admin', 'email@domain.com', 'You have received an invitation to join our social network!', 'Hello,\r\n\r\nYou have been invited by [username] to join our social network. To join, please follow the link below and enter your invite code.\r\n\r\n[link]\r\nInvite Code: [code]\r\n\r\nBest Regards,\r\nSocial Network Administration\r\n\r\n----------------------------------------\r\n\r\n[message]', 'You have received an invitation to join our social network.', 'Hello,\r\n\r\nYou have been invited by [username] to join our social network. To join, please follow the link below:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration\r\n\r\n----------------------------------------\r\n\r\n[message]', 'Social Network - Email Verification', 'Hello [username],\r\n\r\nThank you for joining our social network. To verify your email address and continue, please click the following link:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration', 'Social Network - Login Details', 'Hello [username],\r\n\r\nThank you for joining our social network. Click the following link and enter your information below to login:\r\n\r\n[link]\r\n\r\nEmail: [email]\r\nPassword: [password]\r\n\r\nBest Regards,\r\nSocial Network Administration', 'Welcome to the social network!', 'Hello [username],\r\n\r\nThank you for joining our social network. Click the following link and enter your information below to login:\r\n\r\n[link]\r\n\r\nEmail: [email]\r\nPassword: [password]\r\n\r\nBest Regards,\r\nSocial Network Administration\r\n', 'Social Network - Lost Password', 'Hello [username],\r\n\r\nYou have requested to reset your password because you have forgotten your password. If you did not request this, please ignore it. It will expire in 24 hours.\r\n\r\nTo reset your password, please click the following link:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration', '[friendname] has added you as a friend.', 'Hello [username],\r\n\r\n[friendname] has added you as a friend. Please click the following link to login and confirm this friendship request:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration', 'You have received a new message.', 'Hello [username],\r\n\r\nYou have just received a new message from [sender]. Please click the following link to login and view it:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration', 'New Profile Comment', 'Hello [username],\r\n\r\nA new comment has been posted on your profile by [commenter]. Please click the following link to view it:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration', 1, 'New Media Comment', 'Hello [username],\nA new comment has been posted on one of your photos by [commenter]. Please click the following link to view it:\n\n[link]\n\nBest Regards,\nSocial Network Administration', 1, 2, 1, 1, 'New Blog Entry Comment', 'Hello [username],\n\nA new comment has been posted on one of your blog entries by [commenter]. Please click the following link to view it:\n\n[link]\n\nBest Regards,\nSocial Network Administration');

-- --------------------------------------------------------

--
-- Table structure for table `se_statrefs`
--

CREATE TABLE IF NOT EXISTS `se_statrefs` (
  `statref_id` int(9) NOT NULL AUTO_INCREMENT,
  `statref_hits` int(9) NOT NULL DEFAULT '0',
  `statref_url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`statref_id`),
  UNIQUE KEY `statref_url` (`statref_url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_stats`
--

CREATE TABLE IF NOT EXISTS `se_stats` (
  `stat_id` int(9) NOT NULL AUTO_INCREMENT,
  `stat_date` int(9) NOT NULL DEFAULT '0',
  `stat_views` int(9) NOT NULL DEFAULT '0',
  `stat_visits` int(9) NOT NULL DEFAULT '0',
  `stat_logins` int(9) NOT NULL DEFAULT '0',
  `stat_signups` int(9) NOT NULL DEFAULT '0',
  `stat_friends` int(9) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=874 ;

--
-- Dumping data for table `se_stats`
--

INSERT INTO `se_stats` (`stat_id`, `stat_date`, `stat_views`, `stat_visits`, `stat_logins`, `stat_signups`, `stat_friends`) VALUES
(1, 1330713000, 1, 0, 0, 0, 0),
(2, 1330713000, 1, 0, 0, 0, 0),
(3, 1330713000, 1, 0, 0, 0, 0),
(4, 1330713000, 1, 0, 0, 0, 0),
(5, 1330713000, 1, 0, 0, 0, 0),
(6, 1330713000, 1, 0, 0, 0, 0),
(7, 1330713000, 1, 0, 0, 0, 0),
(8, 1330713000, 1, 0, 0, 0, 0),
(9, 1330713000, 1, 0, 0, 0, 0),
(10, 1330713000, 0, 0, 0, 1, 0),
(11, 1330713000, 1, 0, 0, 0, 0),
(12, 1330713000, 1, 0, 0, 0, 0),
(13, 1330713000, 0, 0, 1, 0, 0),
(14, 1330713000, 1, 0, 0, 0, 0),
(15, 1330713000, 1, 0, 0, 0, 0),
(16, 1330713000, 1, 0, 0, 0, 0),
(17, 1330713000, 1, 0, 0, 0, 0),
(18, 1330713000, 1, 0, 0, 0, 0),
(19, 1330713000, 1, 0, 0, 0, 0),
(20, 1330713000, 1, 0, 0, 0, 0),
(21, 1330713000, 1, 0, 0, 0, 0),
(22, 1330713000, 1, 0, 0, 0, 0),
(23, 1330713000, 1, 0, 0, 0, 0),
(24, 1330713000, 1, 0, 0, 0, 0),
(25, 1330713000, 1, 0, 0, 0, 0),
(26, 1330713000, 1, 0, 0, 0, 0),
(27, 1330713000, 1, 0, 0, 0, 0),
(28, 1330713000, 1, 0, 0, 0, 0),
(29, 1330713000, 1, 0, 0, 0, 0),
(30, 1330713000, 1, 0, 0, 0, 0),
(31, 1330713000, 1, 0, 0, 0, 0),
(32, 1330713000, 1, 0, 0, 0, 0),
(33, 1330713000, 1, 0, 0, 0, 0),
(34, 1330713000, 1, 0, 0, 0, 0),
(35, 1330713000, 1, 0, 0, 0, 0),
(36, 1330713000, 1, 0, 0, 0, 0),
(37, 1330713000, 1, 0, 0, 0, 0),
(38, 1330713000, 1, 0, 0, 0, 0),
(39, 1330713000, 1, 0, 0, 0, 0),
(40, 1330713000, 1, 0, 0, 0, 0),
(41, 1330713000, 1, 0, 0, 0, 0),
(42, 1330713000, 1, 0, 0, 0, 0),
(43, 1330713000, 1, 0, 0, 0, 0),
(44, 1330713000, 1, 0, 0, 0, 0),
(45, 1330713000, 1, 0, 0, 0, 0),
(46, 1330713000, 1, 0, 0, 0, 0),
(47, 1330713000, 1, 0, 0, 0, 0),
(48, 1330713000, 1, 0, 0, 0, 0),
(49, 1330713000, 1, 0, 0, 0, 0),
(50, 1330713000, 1, 0, 0, 0, 0),
(51, 1330713000, 1, 0, 0, 0, 0),
(52, 1330713000, 1, 0, 0, 0, 0),
(53, 1330713000, 1, 0, 0, 0, 0),
(54, 1330713000, 1, 0, 0, 0, 0),
(55, 1330713000, 1, 0, 0, 0, 0),
(56, 1330713000, 1, 0, 0, 0, 0),
(57, 1330713000, 1, 0, 0, 0, 0),
(58, 1330713000, 1, 0, 0, 0, 0),
(59, 1330713000, 0, 0, 1, 0, 0),
(60, 1330713000, 1, 0, 0, 0, 0),
(61, 1330713000, 1, 0, 0, 0, 0),
(62, 1330713000, 1, 0, 0, 0, 0),
(63, 1330713000, 1, 0, 0, 0, 0),
(64, 1330713000, 1, 0, 0, 0, 0),
(65, 1330713000, 1, 0, 0, 0, 0),
(66, 1330713000, 1, 0, 0, 0, 0),
(67, 1330713000, 1, 0, 0, 0, 0),
(68, 1330713000, 1, 0, 0, 0, 0),
(69, 1330713000, 1, 0, 0, 0, 0),
(70, 1330713000, 1, 0, 0, 0, 0),
(71, 1330713000, 1, 0, 0, 0, 0),
(72, 1330713000, 1, 0, 0, 0, 0),
(73, 1330713000, 1, 0, 0, 0, 0),
(74, 1330713000, 1, 0, 0, 0, 0),
(75, 1330713000, 1, 0, 0, 0, 0),
(76, 1330713000, 1, 0, 0, 0, 0),
(77, 1330713000, 1, 0, 0, 0, 0),
(78, 1330713000, 1, 0, 0, 0, 0),
(79, 1330713000, 1, 0, 0, 0, 0),
(80, 1330713000, 1, 0, 0, 0, 0),
(81, 1330713000, 1, 0, 0, 0, 0),
(82, 1330713000, 1, 0, 0, 0, 0),
(83, 1330713000, 1, 0, 0, 0, 0),
(84, 1330713000, 1, 0, 0, 0, 0),
(85, 1330713000, 1, 0, 0, 0, 0),
(86, 1330713000, 1, 0, 0, 0, 0),
(87, 1330713000, 1, 0, 0, 0, 0),
(88, 1330713000, 1, 0, 0, 0, 0),
(89, 1330713000, 1, 0, 0, 0, 0),
(90, 1330713000, 1, 0, 0, 0, 0),
(91, 1330713000, 1, 0, 0, 0, 0),
(92, 1330713000, 1, 0, 0, 0, 0),
(93, 1330713000, 1, 0, 0, 0, 0),
(94, 1330713000, 1, 0, 0, 0, 0),
(95, 1330713000, 1, 0, 0, 0, 0),
(96, 1330713000, 1, 0, 0, 0, 0),
(97, 1330713000, 1, 0, 0, 0, 0),
(98, 1330713000, 1, 0, 0, 0, 0),
(99, 1330713000, 1, 0, 0, 0, 0),
(100, 1330713000, 1, 0, 0, 0, 0),
(101, 1330713000, 1, 0, 0, 0, 0),
(102, 1330713000, 1, 0, 0, 0, 0),
(103, 1330713000, 1, 0, 0, 0, 0),
(104, 1330713000, 1, 0, 0, 0, 0),
(105, 1330713000, 1, 0, 0, 0, 0),
(106, 1330713000, 1, 0, 0, 0, 0),
(107, 1330713000, 1, 0, 0, 0, 0),
(108, 1330713000, 1, 0, 0, 0, 0),
(109, 1330713000, 1, 0, 0, 0, 0),
(110, 1330713000, 1, 0, 0, 0, 0),
(111, 1330713000, 1, 0, 0, 0, 0),
(112, 1330713000, 1, 0, 0, 0, 0),
(113, 1330713000, 1, 0, 0, 0, 0),
(114, 1330713000, 1, 0, 0, 0, 0),
(115, 1330713000, 1, 0, 0, 0, 0),
(116, 1330713000, 1, 0, 0, 0, 0),
(117, 1330713000, 1, 0, 0, 0, 0),
(118, 1330713000, 1, 0, 0, 0, 0),
(119, 1330713000, 1, 0, 0, 0, 0),
(120, 1330713000, 1, 0, 0, 0, 0),
(121, 1330713000, 1, 0, 0, 0, 0),
(122, 1330713000, 1, 0, 0, 0, 0),
(123, 1330713000, 1, 0, 0, 0, 0),
(124, 1330713000, 1, 0, 0, 0, 0),
(125, 1330713000, 1, 0, 0, 0, 0),
(126, 1330713000, 1, 0, 0, 0, 0),
(127, 1330713000, 1, 0, 0, 0, 0),
(128, 1330713000, 1, 0, 0, 0, 0),
(129, 1330713000, 1, 0, 0, 0, 0),
(130, 1330713000, 1, 0, 0, 0, 0),
(131, 1330713000, 1, 0, 0, 0, 0),
(132, 1330713000, 1, 0, 0, 0, 0),
(133, 1330713000, 1, 0, 0, 0, 0),
(134, 1330713000, 1, 0, 0, 0, 0),
(135, 1330713000, 1, 0, 0, 0, 0),
(136, 1330713000, 1, 0, 0, 0, 0),
(137, 1330713000, 1, 0, 0, 0, 0),
(138, 1330713000, 1, 0, 0, 0, 0),
(139, 1330713000, 1, 0, 0, 0, 0),
(140, 1330713000, 1, 0, 0, 0, 0),
(141, 1330713000, 1, 0, 0, 0, 0),
(142, 1330713000, 1, 0, 0, 0, 0),
(143, 1330713000, 1, 0, 0, 0, 0),
(144, 1330713000, 1, 0, 0, 0, 0),
(145, 1330713000, 1, 0, 0, 0, 0),
(146, 1330713000, 1, 0, 0, 0, 0),
(147, 1330713000, 1, 0, 0, 0, 0),
(148, 1330713000, 1, 0, 0, 0, 0),
(149, 1330713000, 1, 0, 0, 0, 0),
(150, 1330713000, 1, 0, 0, 0, 0),
(151, 1330713000, 1, 0, 0, 0, 0),
(152, 1330713000, 1, 0, 0, 0, 0),
(153, 1330713000, 1, 0, 0, 0, 0),
(154, 1330713000, 1, 0, 0, 0, 0),
(155, 1330713000, 1, 0, 0, 0, 0),
(156, 1330713000, 1, 0, 0, 0, 0),
(157, 1330713000, 1, 0, 0, 0, 0),
(158, 1330713000, 1, 0, 0, 0, 0),
(159, 1330713000, 1, 0, 0, 0, 0),
(160, 1330713000, 1, 0, 0, 0, 0),
(161, 1330713000, 1, 0, 0, 0, 0),
(162, 1330713000, 1, 0, 0, 0, 0),
(163, 1330713000, 1, 0, 0, 0, 0),
(164, 1330713000, 1, 0, 0, 0, 0),
(165, 1330713000, 1, 0, 0, 0, 0),
(166, 1330713000, 1, 0, 0, 0, 0),
(167, 1330713000, 1, 0, 0, 0, 0),
(168, 1330713000, 1, 0, 0, 0, 0),
(169, 1330713000, 1, 0, 0, 0, 0),
(170, 1330713000, 1, 0, 0, 0, 0),
(171, 1330713000, 1, 0, 0, 0, 0),
(172, 1330713000, 1, 0, 0, 0, 0),
(173, 1330713000, 1, 0, 0, 0, 0),
(174, 1330713000, 1, 0, 0, 0, 0),
(175, 1330713000, 1, 0, 0, 0, 0),
(176, 1330713000, 1, 0, 0, 0, 0),
(177, 1330713000, 1, 0, 0, 0, 0),
(178, 1330713000, 1, 0, 0, 0, 0),
(179, 1330713000, 1, 0, 0, 0, 0),
(180, 1330713000, 1, 0, 0, 0, 0),
(181, 1330713000, 1, 0, 0, 0, 0),
(182, 1330713000, 1, 0, 0, 0, 0),
(183, 1330713000, 1, 0, 0, 0, 0),
(184, 1330713000, 1, 0, 0, 0, 0),
(185, 1330713000, 1, 0, 0, 0, 0),
(186, 1330713000, 1, 0, 0, 0, 0),
(187, 1330713000, 1, 0, 0, 0, 0),
(188, 1330713000, 1, 0, 0, 0, 0),
(189, 1330713000, 1, 0, 0, 0, 0),
(190, 1330713000, 1, 0, 0, 0, 0),
(191, 1330713000, 1, 0, 0, 0, 0),
(192, 1330713000, 1, 0, 0, 0, 0),
(193, 1330713000, 1, 0, 0, 0, 0),
(194, 1330713000, 1, 0, 0, 0, 0),
(195, 1330713000, 1, 0, 0, 0, 0),
(196, 1330713000, 1, 0, 0, 0, 0),
(197, 1330713000, 1, 0, 0, 0, 0),
(198, 1330713000, 1, 0, 0, 0, 0),
(199, 1330713000, 1, 0, 0, 0, 0),
(200, 1330713000, 1, 0, 0, 0, 0),
(201, 1330713000, 1, 0, 0, 0, 0),
(202, 1330713000, 1, 0, 0, 0, 0),
(203, 1330713000, 1, 0, 0, 0, 0),
(204, 1330713000, 1, 0, 0, 0, 0),
(205, 1330713000, 1, 0, 0, 0, 0),
(206, 1330713000, 1, 0, 0, 0, 0),
(207, 1330713000, 1, 0, 0, 0, 0),
(208, 1330713000, 1, 0, 0, 0, 0),
(209, 1330713000, 1, 0, 0, 0, 0),
(210, 1330713000, 1, 0, 0, 0, 0),
(211, 1330713000, 1, 0, 0, 0, 0),
(212, 1330713000, 1, 0, 0, 0, 0),
(213, 1330713000, 1, 0, 0, 0, 0),
(214, 1330713000, 1, 0, 0, 0, 0),
(215, 1330713000, 1, 0, 0, 0, 0),
(216, 1330713000, 1, 0, 0, 0, 0),
(217, 1330713000, 1, 0, 0, 0, 0),
(218, 1330713000, 1, 0, 0, 0, 0),
(219, 1330713000, 1, 0, 0, 0, 0),
(220, 1330713000, 1, 0, 0, 0, 0),
(221, 1330713000, 1, 0, 0, 0, 0),
(222, 1330713000, 1, 0, 0, 0, 0),
(223, 1330713000, 1, 0, 0, 0, 0),
(224, 1330713000, 1, 0, 0, 0, 0),
(225, 1330713000, 1, 0, 0, 0, 0),
(226, 1330713000, 1, 0, 0, 0, 0),
(227, 1330713000, 1, 0, 0, 0, 0),
(228, 1330713000, 1, 0, 0, 0, 0),
(229, 1330713000, 1, 0, 0, 0, 0),
(230, 1330713000, 1, 0, 0, 0, 0),
(231, 1330713000, 1, 0, 0, 0, 0),
(232, 1330713000, 1, 0, 0, 0, 0),
(233, 1330713000, 1, 0, 0, 0, 0),
(234, 1330713000, 1, 0, 0, 0, 0),
(235, 1330713000, 1, 0, 0, 0, 0),
(236, 1330713000, 1, 0, 0, 0, 0),
(237, 1330713000, 1, 0, 0, 0, 0),
(238, 1330713000, 1, 0, 0, 0, 0),
(239, 1330713000, 1, 0, 0, 0, 0),
(240, 1330713000, 1, 0, 0, 0, 0),
(241, 1330713000, 1, 0, 0, 0, 0),
(242, 1330713000, 1, 0, 0, 0, 0),
(243, 1330713000, 0, 0, 1, 0, 0),
(244, 1330713000, 1, 0, 0, 0, 0),
(245, 1330713000, 1, 0, 0, 0, 0),
(246, 1330713000, 1, 0, 0, 0, 0),
(247, 1330713000, 1, 0, 0, 0, 0),
(248, 1330713000, 1, 0, 0, 0, 0),
(249, 1330713000, 1, 0, 0, 0, 0),
(250, 1330713000, 1, 0, 0, 0, 0),
(251, 1330713000, 1, 0, 0, 0, 0),
(252, 1330713000, 1, 0, 0, 0, 0),
(253, 1330713000, 1, 0, 0, 0, 0),
(254, 1330713000, 1, 0, 0, 0, 0),
(255, 1330713000, 1, 0, 0, 0, 0),
(256, 1330713000, 1, 0, 0, 0, 0),
(257, 1330713000, 1, 0, 0, 0, 0),
(258, 1330713000, 1, 0, 0, 0, 0),
(259, 1330713000, 1, 0, 0, 0, 0),
(260, 1330713000, 1, 0, 0, 0, 0),
(261, 1330713000, 1, 0, 0, 0, 0),
(262, 1330713000, 1, 0, 0, 0, 0),
(263, 1330972200, 1, 0, 0, 0, 0),
(264, 1330972200, 1, 0, 0, 0, 0),
(265, 1330972200, 1, 0, 0, 0, 0),
(266, 1330972200, 1, 0, 0, 0, 0),
(267, 1330972200, 1, 0, 0, 0, 0),
(268, 1330972200, 1, 0, 0, 0, 0),
(269, 1330972200, 1, 0, 0, 0, 0),
(270, 1330972200, 0, 0, 1, 0, 0),
(271, 1330972200, 1, 0, 0, 0, 0),
(272, 1330972200, 1, 0, 0, 0, 0),
(273, 1330972200, 1, 0, 0, 0, 0),
(274, 1330972200, 1, 0, 0, 0, 0),
(275, 1330972200, 1, 0, 0, 0, 0),
(276, 1330972200, 1, 0, 0, 0, 0),
(277, 1330972200, 1, 0, 0, 0, 0),
(278, 1330972200, 1, 0, 0, 0, 0),
(279, 1330972200, 1, 0, 0, 0, 0),
(280, 1330972200, 1, 0, 0, 0, 0),
(281, 1330972200, 1, 0, 0, 0, 0),
(282, 1330972200, 1, 0, 0, 0, 0),
(283, 1330972200, 1, 0, 0, 0, 0),
(284, 1330972200, 0, 0, 0, 1, 0),
(285, 1330972200, 1, 0, 0, 0, 0),
(286, 1330972200, 1, 0, 0, 0, 0),
(287, 1330972200, 0, 0, 1, 0, 0),
(288, 1330972200, 1, 0, 0, 0, 0),
(289, 1330972200, 1, 0, 0, 0, 0),
(290, 1330972200, 1, 0, 0, 0, 0),
(291, 1330972200, 1, 0, 0, 0, 0),
(292, 1330972200, 1, 0, 0, 0, 0),
(293, 1330972200, 1, 0, 0, 0, 0),
(294, 1330972200, 1, 0, 0, 0, 0),
(295, 1330972200, 1, 0, 0, 0, 0),
(296, 1330972200, 1, 0, 0, 0, 0),
(297, 1330972200, 1, 0, 0, 0, 0),
(298, 1330972200, 1, 0, 0, 0, 0),
(299, 1330972200, 1, 0, 0, 0, 0),
(300, 1330972200, 1, 0, 0, 0, 0),
(301, 1330972200, 1, 0, 0, 0, 0),
(302, 1330972200, 1, 0, 0, 0, 0),
(303, 1330972200, 1, 0, 0, 0, 0),
(304, 1330972200, 1, 0, 0, 0, 0),
(305, 1330972200, 1, 0, 0, 0, 0),
(306, 1330972200, 1, 0, 0, 0, 0),
(307, 1330972200, 1, 0, 0, 0, 0),
(308, 1330972200, 1, 0, 0, 0, 0),
(309, 1330972200, 1, 0, 0, 0, 0),
(310, 1330972200, 1, 0, 0, 0, 0),
(311, 1330972200, 1, 0, 0, 0, 0),
(312, 1330972200, 1, 0, 0, 0, 0),
(313, 1330972200, 1, 0, 0, 0, 0),
(314, 1330972200, 1, 0, 0, 0, 0),
(315, 1330972200, 1, 0, 0, 0, 0),
(316, 1330972200, 1, 0, 0, 0, 0),
(317, 1330972200, 1, 0, 0, 0, 0),
(318, 1330972200, 1, 0, 0, 0, 0),
(319, 1330972200, 1, 0, 0, 0, 0),
(320, 1330972200, 1, 0, 0, 0, 0),
(321, 1330972200, 1, 0, 0, 0, 0),
(322, 1330972200, 1, 0, 0, 0, 0),
(323, 1330972200, 1, 0, 0, 0, 0),
(324, 1330972200, 1, 0, 0, 0, 0),
(325, 1330972200, 1, 0, 0, 0, 0),
(326, 1330972200, 1, 0, 0, 0, 0),
(327, 1330972200, 1, 0, 0, 0, 0),
(328, 1330972200, 1, 0, 0, 0, 0),
(329, 1330972200, 1, 0, 0, 0, 0),
(330, 1330972200, 1, 0, 0, 0, 0),
(331, 1330972200, 1, 0, 0, 0, 0),
(332, 1330972200, 1, 0, 0, 0, 0),
(333, 1330972200, 1, 0, 0, 0, 0),
(334, 1330972200, 1, 0, 0, 0, 0),
(335, 1330972200, 1, 0, 0, 0, 0),
(336, 1330972200, 1, 0, 0, 0, 0),
(337, 1330972200, 1, 0, 0, 0, 0),
(338, 1330972200, 1, 0, 0, 0, 0),
(339, 1330972200, 1, 0, 0, 0, 0),
(340, 1330972200, 1, 0, 0, 0, 0),
(341, 1330972200, 1, 0, 0, 0, 0),
(342, 1330972200, 1, 0, 0, 0, 0),
(343, 1330972200, 1, 0, 0, 0, 0),
(344, 1330972200, 1, 0, 0, 0, 0),
(345, 1330972200, 1, 0, 0, 0, 0),
(346, 1330972200, 1, 0, 0, 0, 0),
(347, 1330972200, 1, 0, 0, 0, 0),
(348, 1330972200, 1, 0, 0, 0, 0),
(349, 1330972200, 1, 0, 0, 0, 0),
(350, 1330972200, 1, 0, 0, 0, 0),
(351, 1330972200, 1, 0, 0, 0, 0),
(352, 1330972200, 1, 0, 0, 0, 0),
(353, 1330972200, 1, 0, 0, 0, 0),
(354, 1330972200, 1, 0, 0, 0, 0),
(355, 1330972200, 1, 0, 0, 0, 0),
(356, 1330972200, 1, 0, 0, 0, 0),
(357, 1330972200, 1, 0, 0, 0, 0),
(358, 1330972200, 1, 0, 0, 0, 0),
(359, 1330972200, 1, 0, 0, 0, 0),
(360, 1330972200, 1, 0, 0, 0, 0),
(361, 1330972200, 1, 0, 0, 0, 0),
(362, 1330972200, 1, 0, 0, 0, 0),
(363, 1330972200, 1, 0, 0, 0, 0),
(364, 1330972200, 1, 0, 0, 0, 0),
(365, 1330972200, 1, 0, 0, 0, 0),
(366, 1330972200, 1, 0, 0, 0, 0),
(367, 1330972200, 1, 0, 0, 0, 0),
(368, 1330972200, 1, 0, 0, 0, 0),
(369, 1330972200, 1, 0, 0, 0, 0),
(370, 1330972200, 1, 0, 0, 0, 0),
(371, 1330972200, 1, 0, 0, 0, 0),
(372, 1330972200, 1, 0, 0, 0, 0),
(373, 1330972200, 1, 0, 0, 0, 0),
(374, 1330972200, 1, 0, 0, 0, 0),
(375, 1330972200, 1, 0, 0, 0, 0),
(376, 1330972200, 1, 0, 0, 0, 0),
(377, 1330972200, 1, 0, 0, 0, 0),
(378, 1330972200, 1, 0, 0, 0, 0),
(379, 1330972200, 1, 0, 0, 0, 0),
(380, 1330972200, 1, 0, 0, 0, 0),
(381, 1330972200, 1, 0, 0, 0, 0),
(382, 1330972200, 1, 0, 0, 0, 0),
(383, 1330972200, 1, 0, 0, 0, 0),
(384, 1330972200, 1, 0, 0, 0, 0),
(385, 1330972200, 1, 0, 0, 0, 0),
(386, 1330972200, 1, 0, 0, 0, 0),
(387, 1330972200, 1, 0, 0, 0, 0),
(388, 1330972200, 1, 0, 0, 0, 0),
(389, 1330972200, 1, 0, 0, 0, 0),
(390, 1330972200, 1, 0, 0, 0, 0),
(391, 1330972200, 1, 0, 0, 0, 0),
(392, 1330972200, 1, 0, 0, 0, 0),
(393, 1330972200, 1, 0, 0, 0, 0),
(394, 1330972200, 1, 0, 0, 0, 0),
(395, 1330972200, 1, 0, 0, 0, 0),
(396, 1330972200, 1, 0, 0, 0, 0),
(397, 1330972200, 1, 0, 0, 0, 0),
(398, 1330972200, 1, 0, 0, 0, 0),
(399, 1330972200, 1, 0, 0, 0, 0),
(400, 1330972200, 1, 0, 0, 0, 0),
(401, 1330972200, 1, 0, 0, 0, 0),
(402, 1330972200, 1, 0, 0, 0, 0),
(403, 1330972200, 1, 0, 0, 0, 0),
(404, 1330972200, 1, 0, 0, 0, 0),
(405, 1330972200, 1, 0, 0, 0, 0),
(406, 1330972200, 1, 0, 0, 0, 0),
(407, 1330972200, 1, 0, 0, 0, 0),
(408, 1330972200, 1, 0, 0, 0, 0),
(409, 1330972200, 1, 0, 0, 0, 0),
(410, 1330972200, 1, 0, 0, 0, 0),
(411, 1330972200, 1, 0, 0, 0, 0),
(412, 1330972200, 1, 0, 0, 0, 0),
(413, 1330972200, 1, 0, 0, 0, 0),
(414, 1330972200, 1, 0, 0, 0, 0),
(415, 1330972200, 1, 0, 0, 0, 0),
(416, 1330972200, 1, 0, 0, 0, 0),
(417, 1330972200, 1, 0, 0, 0, 0),
(418, 1330972200, 1, 0, 0, 0, 0),
(419, 1330972200, 1, 0, 0, 0, 0),
(420, 1330972200, 1, 0, 0, 0, 0),
(421, 1330972200, 1, 0, 0, 0, 0),
(422, 1330972200, 1, 0, 0, 0, 0),
(423, 1330972200, 1, 0, 0, 0, 0),
(424, 1330972200, 1, 0, 0, 0, 0),
(425, 1330972200, 1, 0, 0, 0, 0),
(426, 1330972200, 1, 0, 0, 0, 0),
(427, 1330972200, 1, 0, 0, 0, 0),
(428, 1330972200, 1, 0, 0, 0, 0),
(429, 1330972200, 1, 0, 0, 0, 0),
(430, 1330972200, 1, 0, 0, 0, 0),
(431, 1330972200, 1, 0, 0, 0, 0),
(432, 1330972200, 1, 0, 0, 0, 0),
(433, 1330972200, 1, 0, 0, 0, 0),
(434, 1330972200, 1, 0, 0, 0, 0),
(435, 1330972200, 1, 0, 0, 0, 0),
(436, 1330972200, 1, 0, 0, 0, 0),
(437, 1330972200, 1, 0, 0, 0, 0),
(438, 1330972200, 1, 0, 0, 0, 0),
(439, 1330972200, 1, 0, 0, 0, 0),
(440, 1330972200, 1, 0, 0, 0, 0),
(441, 1330972200, 1, 0, 0, 0, 0),
(442, 1330972200, 1, 0, 0, 0, 0),
(443, 1330972200, 1, 0, 0, 0, 0),
(444, 1330972200, 1, 0, 0, 0, 0),
(445, 1330972200, 1, 0, 0, 0, 0),
(446, 1330972200, 1, 0, 0, 0, 0),
(447, 1330972200, 1, 0, 0, 0, 0),
(448, 1330972200, 1, 0, 0, 0, 0),
(449, 1330972200, 1, 0, 0, 0, 0),
(450, 1330972200, 1, 0, 0, 0, 0),
(451, 1330972200, 1, 0, 0, 0, 0),
(452, 1330972200, 1, 0, 0, 0, 0),
(453, 1330972200, 1, 0, 0, 0, 0),
(454, 1330972200, 1, 0, 0, 0, 0),
(455, 1330972200, 1, 0, 0, 0, 0),
(456, 1330972200, 1, 0, 0, 0, 0),
(457, 1330972200, 1, 0, 0, 0, 0),
(458, 1330972200, 1, 0, 0, 0, 0),
(459, 1330972200, 1, 0, 0, 0, 0),
(460, 1330972200, 1, 0, 0, 0, 0),
(461, 1330972200, 1, 0, 0, 0, 0),
(462, 1330972200, 1, 0, 0, 0, 0),
(463, 1330972200, 1, 0, 0, 0, 0),
(464, 1330972200, 1, 0, 0, 0, 0),
(465, 1330972200, 1, 0, 0, 0, 0),
(466, 1330972200, 1, 0, 0, 0, 0),
(467, 1330972200, 1, 0, 0, 0, 0),
(468, 1330972200, 1, 0, 0, 0, 0),
(469, 1330972200, 1, 0, 0, 0, 0),
(470, 1330972200, 1, 0, 0, 0, 0),
(471, 1331058600, 1, 0, 0, 0, 0),
(472, 1331058600, 1, 0, 0, 0, 0),
(473, 1331058600, 1, 0, 0, 0, 0),
(474, 1331058600, 1, 0, 0, 0, 0),
(475, 1331577000, 1, 0, 0, 0, 0),
(476, 1331577000, 1, 0, 0, 0, 0),
(477, 1331577000, 1, 0, 0, 0, 0),
(478, 1331577000, 1, 0, 0, 0, 0),
(479, 1331577000, 1, 0, 0, 0, 0),
(480, 1331577000, 1, 0, 0, 0, 0),
(481, 1331577000, 1, 0, 0, 0, 0),
(482, 1331577000, 1, 0, 0, 0, 0),
(483, 1331577000, 1, 0, 0, 0, 0),
(484, 1331577000, 1, 0, 0, 0, 0),
(485, 1331577000, 1, 0, 0, 0, 0),
(486, 1331577000, 1, 0, 0, 0, 0),
(487, 1331577000, 1, 0, 0, 0, 0),
(488, 1331577000, 1, 0, 0, 0, 0),
(489, 1331577000, 1, 0, 0, 0, 0),
(490, 1331577000, 1, 0, 0, 0, 0),
(491, 1331577000, 1, 0, 0, 0, 0),
(492, 1331577000, 1, 0, 0, 0, 0),
(493, 1331577000, 1, 0, 0, 0, 0),
(494, 1331577000, 1, 0, 0, 0, 0),
(495, 1331577000, 1, 0, 0, 0, 0),
(496, 1331577000, 1, 0, 0, 0, 0),
(497, 1331577000, 1, 0, 0, 0, 0),
(498, 1331577000, 1, 0, 0, 0, 0),
(499, 1331577000, 1, 0, 0, 0, 0),
(500, 1331577000, 1, 0, 0, 0, 0),
(501, 1331577000, 1, 0, 0, 0, 0),
(502, 1331577000, 1, 0, 0, 0, 0),
(503, 1331577000, 1, 0, 0, 0, 0),
(504, 1331577000, 1, 0, 0, 0, 0),
(505, 1331577000, 1, 0, 0, 0, 0),
(506, 1331577000, 1, 0, 0, 0, 0),
(507, 1331577000, 1, 0, 0, 0, 0),
(508, 1331577000, 1, 0, 0, 0, 0),
(509, 1331577000, 1, 0, 0, 0, 0),
(510, 1331577000, 1, 0, 0, 0, 0),
(511, 1331577000, 1, 0, 0, 0, 0),
(512, 1331577000, 1, 0, 0, 0, 0),
(513, 1331577000, 1, 0, 0, 0, 0),
(514, 1331577000, 1, 0, 0, 0, 0),
(515, 1331577000, 1, 0, 0, 0, 0),
(516, 1331577000, 1, 0, 0, 0, 0),
(517, 1331577000, 1, 0, 0, 0, 0),
(518, 1331577000, 1, 0, 0, 0, 0),
(519, 1331577000, 1, 0, 0, 0, 0),
(520, 1331577000, 1, 0, 0, 0, 0),
(521, 1331577000, 1, 0, 0, 0, 0),
(522, 1331577000, 1, 0, 0, 0, 0),
(523, 1331577000, 1, 0, 0, 0, 0),
(524, 1331577000, 1, 0, 0, 0, 0),
(525, 1331577000, 1, 0, 0, 0, 0),
(526, 1331577000, 1, 0, 0, 0, 0),
(527, 1331577000, 1, 0, 0, 0, 0),
(528, 1331577000, 1, 0, 0, 0, 0),
(529, 1331577000, 1, 0, 0, 0, 0),
(530, 1331577000, 1, 0, 0, 0, 0),
(531, 1331577000, 1, 0, 0, 0, 0),
(532, 1331577000, 1, 0, 0, 0, 0),
(533, 1331577000, 1, 0, 0, 0, 0),
(534, 1331577000, 1, 0, 0, 0, 0),
(535, 1331577000, 1, 0, 0, 0, 0),
(536, 1331577000, 1, 0, 0, 0, 0),
(537, 1331577000, 1, 0, 0, 0, 0),
(538, 1331577000, 1, 0, 0, 0, 0),
(539, 1331577000, 1, 0, 0, 0, 0),
(540, 1331577000, 1, 0, 0, 0, 0),
(541, 1331577000, 1, 0, 0, 0, 0),
(542, 1331577000, 1, 0, 0, 0, 0),
(543, 1331577000, 1, 0, 0, 0, 0),
(544, 1331577000, 1, 0, 0, 0, 0),
(545, 1331577000, 1, 0, 0, 0, 0),
(546, 1331577000, 1, 0, 0, 0, 0),
(547, 1331577000, 1, 0, 0, 0, 0),
(548, 1331577000, 1, 0, 0, 0, 0),
(549, 1331577000, 1, 0, 0, 0, 0),
(550, 1331577000, 1, 0, 0, 0, 0),
(551, 1331577000, 1, 0, 0, 0, 0),
(552, 1331577000, 1, 0, 0, 0, 0),
(553, 1331577000, 1, 0, 0, 0, 0),
(554, 1331577000, 1, 0, 0, 0, 0),
(555, 1331577000, 1, 0, 0, 0, 0),
(556, 1331577000, 1, 0, 0, 0, 0),
(557, 1331577000, 1, 0, 0, 0, 0),
(558, 1331577000, 1, 0, 0, 0, 0),
(559, 1331577000, 1, 0, 0, 0, 0),
(560, 1331577000, 1, 0, 0, 0, 0),
(561, 1331577000, 1, 0, 0, 0, 0),
(562, 1331577000, 1, 0, 0, 0, 0),
(563, 1331577000, 1, 0, 0, 0, 0),
(564, 1331577000, 1, 0, 0, 0, 0),
(565, 1331577000, 1, 0, 0, 0, 0),
(566, 1331577000, 1, 0, 0, 0, 0),
(567, 1331577000, 1, 0, 0, 0, 0),
(568, 1331577000, 1, 0, 0, 0, 0),
(569, 1331577000, 1, 0, 0, 0, 0),
(570, 1331577000, 0, 0, 1, 0, 0),
(571, 1331577000, 1, 0, 0, 0, 0),
(572, 1331577000, 1, 0, 0, 0, 0),
(573, 1331577000, 1, 0, 0, 0, 0),
(574, 1331577000, 1, 0, 0, 0, 0),
(575, 1331577000, 1, 0, 0, 0, 0),
(576, 1331577000, 1, 0, 0, 0, 0),
(577, 1331577000, 1, 0, 0, 0, 0),
(578, 1331577000, 1, 0, 0, 0, 0),
(579, 1331577000, 1, 0, 0, 0, 0),
(580, 1331577000, 1, 0, 0, 0, 0),
(581, 1331577000, 1, 0, 0, 0, 0),
(582, 1331577000, 1, 0, 0, 0, 0),
(583, 1331577000, 1, 0, 0, 0, 0),
(584, 1331577000, 1, 0, 0, 0, 0),
(585, 1331577000, 1, 0, 0, 0, 0),
(586, 1331577000, 1, 0, 0, 0, 0),
(587, 1331577000, 1, 0, 0, 0, 0),
(588, 1331577000, 1, 0, 0, 0, 0),
(589, 1331577000, 1, 0, 0, 0, 0),
(590, 1331577000, 1, 0, 0, 0, 0),
(591, 1331577000, 1, 0, 0, 0, 0),
(592, 1331577000, 1, 0, 0, 0, 0),
(593, 1331577000, 1, 0, 0, 0, 0),
(594, 1331577000, 1, 0, 0, 0, 0),
(595, 1331577000, 1, 0, 0, 0, 0),
(596, 1331577000, 1, 0, 0, 0, 0),
(597, 1331577000, 1, 0, 0, 0, 0),
(598, 1331577000, 1, 0, 0, 0, 0),
(599, 1331577000, 1, 0, 0, 0, 0),
(600, 1331577000, 1, 0, 0, 0, 0),
(601, 1331577000, 1, 0, 0, 0, 0),
(602, 1331577000, 1, 0, 0, 0, 0),
(603, 1331577000, 1, 0, 0, 0, 0),
(604, 1331577000, 1, 0, 0, 0, 0),
(605, 1331577000, 1, 0, 0, 0, 0),
(606, 1331577000, 1, 0, 0, 0, 0),
(607, 1331577000, 1, 0, 0, 0, 0),
(608, 1331577000, 1, 0, 0, 0, 0),
(609, 1331577000, 1, 0, 0, 0, 0),
(610, 1331577000, 1, 0, 0, 0, 0),
(611, 1331577000, 1, 0, 0, 0, 0),
(612, 1331577000, 1, 0, 0, 0, 0),
(613, 1331577000, 1, 0, 0, 0, 0),
(614, 1331577000, 1, 0, 0, 0, 0),
(615, 1331577000, 1, 0, 0, 0, 0),
(616, 1331577000, 1, 0, 0, 0, 0),
(617, 1331577000, 1, 0, 0, 0, 0),
(618, 1331577000, 1, 0, 0, 0, 0),
(619, 1331577000, 1, 0, 0, 0, 0),
(620, 1331577000, 1, 0, 0, 0, 0),
(621, 1331577000, 1, 0, 0, 0, 0),
(622, 1331577000, 1, 0, 0, 0, 0),
(623, 1331577000, 1, 0, 0, 0, 0),
(624, 1331577000, 1, 0, 0, 0, 0),
(625, 1331577000, 1, 0, 0, 0, 0),
(626, 1331577000, 1, 0, 0, 0, 0),
(627, 1331577000, 1, 0, 0, 0, 0),
(628, 1331577000, 1, 0, 0, 0, 0),
(629, 1331577000, 1, 0, 0, 0, 0),
(630, 1331577000, 1, 0, 0, 0, 0),
(631, 1331577000, 1, 0, 0, 0, 0),
(632, 1331577000, 1, 0, 0, 0, 0),
(633, 1331577000, 1, 0, 0, 0, 0),
(634, 1331577000, 1, 0, 0, 0, 0),
(635, 1331577000, 1, 0, 0, 0, 0),
(636, 1331577000, 1, 0, 0, 0, 0),
(637, 1331577000, 1, 0, 0, 0, 0),
(638, 1331577000, 1, 0, 0, 0, 0),
(639, 1331577000, 1, 0, 0, 0, 0),
(640, 1331577000, 1, 0, 0, 0, 0),
(641, 1331577000, 1, 0, 0, 0, 0),
(642, 1331577000, 1, 0, 0, 0, 0),
(643, 1331577000, 1, 0, 0, 0, 0),
(644, 1331577000, 1, 0, 0, 0, 0),
(645, 1331577000, 1, 0, 0, 0, 0),
(646, 1331577000, 1, 0, 0, 0, 0),
(647, 1331577000, 1, 0, 0, 0, 0),
(648, 1331577000, 1, 0, 0, 0, 0),
(649, 1331577000, 1, 0, 0, 0, 0),
(650, 1331577000, 1, 0, 0, 0, 0),
(651, 1331577000, 1, 0, 0, 0, 0),
(652, 1331577000, 1, 0, 0, 0, 0),
(653, 1331577000, 1, 0, 0, 0, 0),
(654, 1331577000, 1, 0, 0, 0, 0),
(655, 1331577000, 1, 0, 0, 0, 0),
(656, 1331577000, 1, 0, 0, 0, 0),
(657, 1331577000, 1, 0, 0, 0, 0),
(658, 1331577000, 1, 0, 0, 0, 0),
(659, 1331577000, 1, 0, 0, 0, 0),
(660, 1331577000, 1, 0, 0, 0, 0),
(661, 1331577000, 1, 0, 0, 0, 0),
(662, 1331577000, 1, 0, 0, 0, 0),
(663, 1331577000, 1, 0, 0, 0, 0),
(664, 1331577000, 1, 0, 0, 0, 0),
(665, 1331577000, 1, 0, 0, 0, 0),
(666, 1331577000, 1, 0, 0, 0, 0),
(667, 1331577000, 1, 0, 0, 0, 0),
(668, 1331577000, 1, 0, 0, 0, 0),
(669, 1331577000, 1, 0, 0, 0, 0),
(670, 1331577000, 1, 0, 0, 0, 0),
(671, 1331577000, 1, 0, 0, 0, 0),
(672, 1331577000, 1, 0, 0, 0, 0),
(673, 1331577000, 1, 0, 0, 0, 0),
(674, 1331577000, 1, 0, 0, 0, 0),
(675, 1331577000, 1, 0, 0, 0, 0),
(676, 1331577000, 1, 0, 0, 0, 0),
(677, 1331577000, 1, 0, 0, 0, 0),
(678, 1331577000, 1, 0, 0, 0, 0),
(679, 1331577000, 1, 0, 0, 0, 0),
(680, 1331577000, 1, 0, 0, 0, 0),
(681, 1331577000, 1, 0, 0, 0, 0),
(682, 1331577000, 1, 0, 0, 0, 0),
(683, 1331577000, 1, 0, 0, 0, 0),
(684, 1331577000, 1, 0, 0, 0, 0),
(685, 1331577000, 1, 0, 0, 0, 0),
(686, 1331577000, 1, 0, 0, 0, 0),
(687, 1331577000, 1, 0, 0, 0, 0),
(688, 1331577000, 1, 0, 0, 0, 0),
(689, 1331577000, 1, 0, 0, 0, 0),
(690, 1331577000, 1, 0, 0, 0, 0),
(691, 1331577000, 1, 0, 0, 0, 0),
(692, 1331577000, 1, 0, 0, 0, 0),
(693, 1331577000, 1, 0, 0, 0, 0),
(694, 1331577000, 1, 0, 0, 0, 0),
(695, 1331577000, 1, 0, 0, 0, 0),
(696, 1331577000, 1, 0, 0, 0, 0),
(697, 1331577000, 1, 0, 0, 0, 0),
(698, 1331577000, 1, 0, 0, 0, 0),
(699, 1331577000, 1, 0, 0, 0, 0),
(700, 1331577000, 1, 0, 0, 0, 0),
(701, 1331577000, 1, 0, 0, 0, 0),
(702, 1331577000, 1, 0, 0, 0, 0),
(703, 1331577000, 1, 0, 0, 0, 0),
(704, 1331577000, 1, 0, 0, 0, 0),
(705, 1331577000, 1, 0, 0, 0, 0),
(706, 1331577000, 1, 0, 0, 0, 0),
(707, 1331577000, 1, 0, 0, 0, 0),
(708, 1331577000, 1, 0, 0, 0, 0),
(709, 1331577000, 1, 0, 0, 0, 0),
(710, 1331577000, 1, 0, 0, 0, 0),
(711, 1331577000, 1, 0, 0, 0, 0),
(712, 1331577000, 1, 0, 0, 0, 0),
(713, 1331577000, 1, 0, 0, 0, 0),
(714, 1331577000, 1, 0, 0, 0, 0),
(715, 1331577000, 1, 0, 0, 0, 0),
(716, 1331577000, 1, 0, 0, 0, 0),
(717, 1331577000, 1, 0, 0, 0, 0),
(718, 1331577000, 1, 0, 0, 0, 0),
(719, 1331577000, 1, 0, 0, 0, 0),
(720, 1331577000, 1, 0, 0, 0, 0),
(721, 1331577000, 1, 0, 0, 0, 0),
(722, 1331577000, 1, 0, 0, 0, 0),
(723, 1331577000, 1, 0, 0, 0, 0),
(724, 1331577000, 1, 0, 0, 0, 0),
(725, 1331577000, 1, 0, 0, 0, 0),
(726, 1331577000, 1, 0, 0, 0, 0),
(727, 1331577000, 1, 0, 0, 0, 0),
(728, 1331577000, 1, 0, 0, 0, 0),
(729, 1331577000, 1, 0, 0, 0, 0),
(730, 1331577000, 1, 0, 0, 0, 0),
(731, 1331577000, 1, 0, 0, 0, 0),
(732, 1331577000, 1, 0, 0, 0, 0),
(733, 1331577000, 1, 0, 0, 0, 0),
(734, 1331577000, 1, 0, 0, 0, 0),
(735, 1331577000, 1, 0, 0, 0, 0),
(736, 1331577000, 1, 0, 0, 0, 0),
(737, 1331577000, 1, 0, 0, 0, 0),
(738, 1331577000, 1, 0, 0, 0, 0),
(739, 1331577000, 1, 0, 0, 0, 0),
(740, 1331577000, 1, 0, 0, 0, 0),
(741, 1331577000, 1, 0, 0, 0, 0),
(742, 1331577000, 1, 0, 0, 0, 0),
(743, 1331577000, 1, 0, 0, 0, 0),
(744, 1331577000, 1, 0, 0, 0, 0),
(745, 1331577000, 1, 0, 0, 0, 0),
(746, 1331577000, 1, 0, 0, 0, 0),
(747, 1331577000, 1, 0, 0, 0, 0),
(748, 1331577000, 1, 0, 0, 0, 0),
(749, 1331577000, 1, 0, 0, 0, 0),
(750, 1331577000, 1, 0, 0, 0, 0),
(751, 1331577000, 1, 0, 0, 0, 0),
(752, 1331577000, 1, 0, 0, 0, 0),
(753, 1331577000, 1, 0, 0, 0, 0),
(754, 1331577000, 1, 0, 0, 0, 0),
(755, 1331577000, 1, 0, 0, 0, 0),
(756, 1331577000, 1, 0, 0, 0, 0),
(757, 1331577000, 1, 0, 0, 0, 0),
(758, 1331577000, 1, 0, 0, 0, 0),
(759, 1331577000, 1, 0, 0, 0, 0),
(760, 1331577000, 1, 0, 0, 0, 0),
(761, 1331577000, 1, 0, 0, 0, 0),
(762, 1331577000, 1, 0, 0, 0, 0),
(763, 1331577000, 1, 0, 0, 0, 0),
(764, 1331577000, 1, 0, 0, 0, 0),
(765, 1331577000, 1, 0, 0, 0, 0),
(766, 1331577000, 1, 0, 0, 0, 0),
(767, 1331577000, 1, 0, 0, 0, 0),
(768, 1331577000, 1, 0, 0, 0, 0),
(769, 1331577000, 1, 0, 0, 0, 0),
(770, 1331577000, 1, 0, 0, 0, 0),
(771, 1331577000, 1, 0, 0, 0, 0),
(772, 1331577000, 1, 0, 0, 0, 0),
(773, 1331577000, 1, 0, 0, 0, 0),
(774, 1331577000, 1, 0, 0, 0, 0),
(775, 1331577000, 1, 0, 0, 0, 0),
(776, 1331577000, 1, 0, 0, 0, 0),
(777, 1331577000, 1, 0, 0, 0, 0),
(778, 1331577000, 1, 0, 0, 0, 0),
(779, 1331577000, 1, 0, 0, 0, 0),
(780, 1331577000, 1, 0, 0, 0, 0),
(781, 1331577000, 1, 0, 0, 0, 0),
(782, 1331577000, 1, 0, 0, 0, 0),
(783, 1331577000, 1, 0, 0, 0, 0),
(784, 1331577000, 1, 0, 0, 0, 0),
(785, 1331577000, 1, 0, 0, 0, 0),
(786, 1331577000, 1, 0, 0, 0, 0),
(787, 1331577000, 1, 0, 0, 0, 0),
(788, 1331577000, 1, 0, 0, 0, 0),
(789, 1331577000, 1, 0, 0, 0, 0),
(790, 1331577000, 1, 0, 0, 0, 0),
(791, 1331577000, 1, 0, 0, 0, 0),
(792, 1331577000, 1, 0, 0, 0, 0),
(793, 1331577000, 1, 0, 0, 0, 0),
(794, 1331577000, 1, 0, 0, 0, 0),
(795, 1331577000, 1, 0, 0, 0, 0),
(796, 1331577000, 1, 0, 0, 0, 0),
(797, 1331577000, 1, 0, 0, 0, 0),
(798, 1331577000, 1, 0, 0, 0, 0),
(799, 1331577000, 1, 0, 0, 0, 0),
(800, 1331577000, 1, 0, 0, 0, 0),
(801, 1331577000, 1, 0, 0, 0, 0),
(802, 1331577000, 1, 0, 0, 0, 0),
(803, 1331577000, 1, 0, 0, 0, 0),
(804, 1331577000, 1, 0, 0, 0, 0),
(805, 1331577000, 1, 0, 0, 0, 0),
(806, 1331577000, 1, 0, 0, 0, 0),
(807, 1331577000, 1, 0, 0, 0, 0),
(808, 1331577000, 1, 0, 0, 0, 0),
(809, 1331577000, 1, 0, 0, 0, 0),
(810, 1331577000, 1, 0, 0, 0, 0),
(811, 1331577000, 1, 0, 0, 0, 0),
(812, 1331577000, 1, 0, 0, 0, 0),
(813, 1331577000, 1, 0, 0, 0, 0),
(814, 1331577000, 1, 0, 0, 0, 0),
(815, 1331577000, 1, 0, 0, 0, 0),
(816, 1331577000, 1, 0, 0, 0, 0),
(817, 1331577000, 1, 0, 0, 0, 0),
(818, 1331577000, 1, 0, 0, 0, 0),
(819, 1331577000, 0, 0, 1, 0, 0),
(820, 1331577000, 1, 0, 0, 0, 0),
(821, 1331577000, 1, 0, 0, 0, 0),
(822, 1331577000, 1, 0, 0, 0, 0),
(823, 1331577000, 1, 0, 0, 0, 0),
(824, 1331577000, 1, 0, 0, 0, 0),
(825, 1331577000, 1, 0, 0, 0, 0),
(826, 1331577000, 1, 0, 0, 0, 0),
(827, 1331577000, 1, 0, 0, 0, 0),
(828, 1331577000, 1, 0, 0, 0, 0),
(829, 1331577000, 1, 0, 0, 0, 0),
(830, 1331577000, 1, 0, 0, 0, 0),
(831, 1331577000, 1, 0, 0, 0, 0),
(832, 1331577000, 1, 0, 0, 0, 0),
(833, 1331577000, 1, 0, 0, 0, 0),
(834, 1331577000, 1, 0, 0, 0, 0),
(835, 1331577000, 1, 0, 0, 0, 0),
(836, 1331577000, 1, 0, 0, 0, 0),
(837, 1331577000, 1, 0, 0, 0, 0),
(838, 1331577000, 1, 0, 0, 0, 0),
(839, 1331577000, 1, 0, 0, 0, 0),
(840, 1331577000, 1, 0, 0, 0, 0),
(841, 1331577000, 1, 0, 0, 0, 0),
(842, 1331577000, 1, 0, 0, 0, 0),
(843, 1331577000, 1, 0, 0, 0, 0),
(844, 1331577000, 1, 0, 0, 0, 0),
(845, 1331577000, 1, 0, 0, 0, 0),
(846, 1331577000, 1, 0, 0, 0, 0),
(847, 1331577000, 1, 0, 0, 0, 0),
(848, 1331577000, 1, 0, 0, 0, 0),
(849, 1331577000, 1, 0, 0, 0, 0),
(850, 1331577000, 1, 0, 0, 0, 0),
(851, 1331577000, 1, 0, 0, 0, 0),
(852, 1331577000, 1, 0, 0, 0, 0),
(853, 1331577000, 1, 0, 0, 0, 0),
(854, 1331577000, 1, 0, 0, 0, 0),
(855, 1331577000, 1, 0, 0, 0, 0),
(856, 1331577000, 1, 0, 0, 0, 0),
(857, 1331577000, 1, 0, 0, 0, 0),
(858, 1331577000, 1, 0, 0, 0, 0),
(859, 1331577000, 1, 0, 0, 0, 0),
(860, 1331577000, 1, 0, 0, 0, 0),
(861, 1331577000, 1, 0, 0, 0, 0),
(862, 1331577000, 1, 0, 0, 0, 0),
(863, 1331577000, 1, 0, 0, 0, 0),
(864, 1331577000, 1, 0, 0, 0, 0),
(865, 1331577000, 1, 0, 0, 0, 0),
(866, 1331577000, 1, 0, 0, 0, 0),
(867, 1331577000, 1, 0, 0, 0, 0),
(868, 1331577000, 1, 0, 0, 0, 0),
(869, 1331577000, 1, 0, 0, 0, 0),
(870, 1331577000, 1, 0, 0, 0, 0),
(871, 1331577000, 1, 0, 0, 0, 0),
(872, 1331577000, 1, 0, 0, 0, 0),
(873, 1331577000, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `se_subnets`
--

CREATE TABLE IF NOT EXISTS `se_subnets` (
  `subnet_id` int(9) NOT NULL AUTO_INCREMENT,
  `subnet_name` varchar(50) NOT NULL DEFAULT '',
  `subnet_field1_qual` varchar(2) NOT NULL DEFAULT '',
  `subnet_field1_value` varchar(250) NOT NULL DEFAULT '',
  `subnet_field2_qual` varchar(2) NOT NULL DEFAULT '',
  `subnet_field2_value` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`subnet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_tabs`
--

CREATE TABLE IF NOT EXISTS `se_tabs` (
  `tab_id` int(9) NOT NULL AUTO_INCREMENT,
  `tab_name` varchar(50) NOT NULL DEFAULT '',
  `tab_order` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tab_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `se_tabs`
--

INSERT INTO `se_tabs` (`tab_id`, `tab_name`, `tab_order`) VALUES
(1, 'Personal Information', 1),
(2, 'Contact Information', 2);

-- --------------------------------------------------------

--
-- Table structure for table `se_urls`
--

CREATE TABLE IF NOT EXISTS `se_urls` (
  `url_id` int(9) NOT NULL AUTO_INCREMENT,
  `url_title` varchar(100) NOT NULL DEFAULT '',
  `url_file` varchar(50) NOT NULL DEFAULT '',
  `url_regular` varchar(200) NOT NULL DEFAULT '',
  `url_subdirectory` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`url_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `se_urls`
--

INSERT INTO `se_urls` (`url_id`, `url_title`, `url_file`, `url_regular`, `url_subdirectory`) VALUES
(1, 'Album List URL', 'albums', 'albums.php?user=$user', '$user/albums/'),
(2, 'Album URL', 'album', 'album.php?user=$user&album_id=$id1', '$user/albums/$id1'),
(3, 'Photo URL', 'album_file', 'album_file.php?user=$user&album_id=$id1&media_id=$id2', '$user/albums/$id1/$id2'),
(4, 'Blog URL', 'blog', 'blog.php?user=$user', '$user/blog/'),
(5, 'Blog Entry URL', 'blog_entry', 'blog_entry.php?user=$user&blogentry_id=$id1', '$user/blog/$id1/');

-- --------------------------------------------------------

--
-- Table structure for table `se_users`
--

CREATE TABLE IF NOT EXISTS `se_users` (
  `user_id` int(9) NOT NULL AUTO_INCREMENT,
  `user_level_id` int(9) NOT NULL DEFAULT '0',
  `user_subnet_id` int(9) NOT NULL DEFAULT '0',
  `user_email` varchar(70) NOT NULL DEFAULT '',
  `user_newemail` varchar(70) NOT NULL DEFAULT '',
  `user_username` varchar(50) NOT NULL DEFAULT '',
  `user_password` varchar(50) NOT NULL DEFAULT '',
  `user_code` varchar(8) NOT NULL DEFAULT '',
  `user_enabled` int(1) NOT NULL DEFAULT '0',
  `user_verified` int(1) NOT NULL DEFAULT '0',
  `user_lang` varchar(20) NOT NULL DEFAULT '',
  `user_signupdate` int(14) NOT NULL DEFAULT '0',
  `user_lastlogindate` int(14) NOT NULL DEFAULT '0',
  `user_lastactive` int(14) NOT NULL DEFAULT '0',
  `user_status` varchar(100) NOT NULL DEFAULT '',
  `user_logins` int(9) NOT NULL DEFAULT '0',
  `user_invitesleft` int(3) NOT NULL DEFAULT '0',
  `user_timezone` varchar(5) NOT NULL DEFAULT '',
  `user_views_profile` int(9) NOT NULL DEFAULT '0',
  `user_dateupdated` int(14) NOT NULL DEFAULT '0',
  `user_blocklist` text,
  `user_photo` varchar(10) NOT NULL DEFAULT '',
  `user_privacy_search` int(1) NOT NULL DEFAULT '0',
  `user_privacy_profile` int(1) NOT NULL DEFAULT '0',
  `user_privacy_comments` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `UNIQUE` (`user_email`,`user_username`),
  KEY `INDEX` (`user_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `se_users`
--

INSERT INTO `se_users` (`user_id`, `user_level_id`, `user_subnet_id`, `user_email`, `user_newemail`, `user_username`, `user_password`, `user_code`, `user_enabled`, `user_verified`, `user_lang`, `user_signupdate`, `user_lastlogindate`, `user_lastactive`, `user_status`, `user_logins`, `user_invitesleft`, `user_timezone`, `user_views_profile`, `user_dateupdated`, `user_blocklist`, `user_photo`, `user_privacy_search`, `user_privacy_profile`, `user_privacy_comments`) VALUES
(1, 1, 0, 'mvaravinda@gmail.com', 'mvaravinda@gmail.com', 'aravinda', '$1$388M8aIk$COngKILABeSreLTCf.i0Z0', '388M8aIk', 1, 1, 'english', 1330735612, 1331615418, 1331616245, '', 5, 5, '-8', 8, 1331615878, NULL, '0_5248.jpg', 1, 0, 0),
(2, 1, 0, 'technopulse@technopulse.in', 'technopulse@technopulse.in', 'technopulse', '$1$WpBluyPI$h/69qDg/n4ZrzCtDzoK/50', 'WpBluyPI', 1, 1, 'english', 1331007788, 1331007820, 0, '', 1, 5, '5.5', 24, 1331008692, NULL, '0_5972.jpg', 1, 0, 0),
(3, 1, 0, 'abcd@technopulse.in', 'abcd@technopulse.in', 'raj', '$1$CrXQ2TeF$yCxUvKevPMld2X6XNTKkL.', 'CrXQ2TeF', 1, 1, 'english', 1331617182, 1331617246, 1331617973, '', 1, 5, '5.5', 0, 1331617182, NULL, '', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `se_usersettings`
--

CREATE TABLE IF NOT EXISTS `se_usersettings` (
  `usersetting_id` int(9) NOT NULL AUTO_INCREMENT,
  `usersetting_user_id` int(9) NOT NULL DEFAULT '0',
  `usersetting_lostpassword_code` varchar(15) NOT NULL DEFAULT '',
  `usersetting_lostpassword_time` int(14) NOT NULL DEFAULT '0',
  `usersetting_notify_friendrequest` int(1) NOT NULL DEFAULT '0',
  `usersetting_notify_message` int(1) NOT NULL DEFAULT '0',
  `usersetting_notify_profilecomment` int(1) NOT NULL DEFAULT '0',
  `usersetting_actions_dontpublish` varchar(40) NOT NULL DEFAULT '',
  `usersetting_notify_mediacomment` int(1) NOT NULL DEFAULT '0',
  `usersetting_notify_blogcomment` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`usersetting_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `se_usersettings`
--

INSERT INTO `se_usersettings` (`usersetting_id`, `usersetting_user_id`, `usersetting_lostpassword_code`, `usersetting_lostpassword_time`, `usersetting_notify_friendrequest`, `usersetting_notify_message`, `usersetting_notify_profilecomment`, `usersetting_actions_dontpublish`, `usersetting_notify_mediacomment`, `usersetting_notify_blogcomment`) VALUES
(1, 1, '', 0, 1, 1, 1, '', 1, 1),
(2, 2, '', 0, 1, 1, 1, '', 0, 0),
(3, 3, '', 0, 1, 1, 1, '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
