<?php
/**
 * PBBoard 3.3
 * Copyright 2019 PBBoard Group, All Rights Reserved
 *
 * Website: http://www.pbboard.info
 * License: http://www.pbboard.info/about/license
 *
 */

$tables[] = "CREATE TABLE pbb_addons (
  id int(9) NOT NULL AUTO_INCREMENT,
  name varchar(250) NOT NULL,
  title varchar(250) NOT NULL,
  version varchar(25) NOT NULL,
  description text NOT NULL,
  author varchar(250) NOT NULL,
  url varchar(350) NOT NULL,
  installcode text NOT NULL,
  uninstallcode text NOT NULL,
  module_index mediumtext NOT NULL,
  module_admin mediumtext NOT NULL,
  active smallint(5) UNSIGNED NOT NULL DEFAULT '1',
  languagevals longtext NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_ads (
  id int(9) NOT NULL AUTO_INCREMENT,
  sitename text NOT NULL,
  site text NOT NULL,
  picture text NOT NULL,
  width int(9) NOT NULL,
  height int(9) NOT NULL,
  clicks int(9) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_adsense (
  id int(9) NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  adsense text NOT NULL,
  home int(9) NOT NULL,
  forum int(9) NOT NULL,
  topic int(9) NOT NULL,
  downfoot int(9) NOT NULL,
  all_page int(9) NOT NULL,
  between_replys int(9) NOT NULL,
  down_topic int(9) NOT NULL,
  in_page varchar(255) NOT NULL,
  side int(9) NOT NULL,
  mid_topic int(9) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_announcement (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(200) NOT NULL,
  text text NOT NULL,
  writer varchar(200) NOT NULL,
  date varchar(100) NOT NULL,
  visitor int(10) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_attach (
  id int(9) NOT NULL AUTO_INCREMENT,
  filename varchar(350) NOT NULL,
  filepath varchar(350) NOT NULL,
  filesize varchar(20) NOT NULL DEFAULT '0',
  subject_id int(9) NOT NULL,
  visitor int(9) NOT NULL DEFAULT '0',
  reply int(1) NOT NULL,
  pm_id int(9) NOT NULL,
  u_id int(9) NOT NULL,
  time int(11) NOT NULL DEFAULT '0',
  last_down int(11) NOT NULL DEFAULT '0',
  extension varchar(20) NOT NULL,
  user_ip varchar(250) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_avatar (
  id int(9) NOT NULL AUTO_INCREMENT,
  avatar_path varchar(250) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_award (
  id int(10) NOT NULL AUTO_INCREMENT,
  award varchar(200) NOT NULL,
  award_path varchar(250) NOT NULL,
  username varchar(100) NOT NULL,
  user_id int(9) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_banned (
  id int(9) NOT NULL AUTO_INCREMENT,
  text text NOT NULL,
  text_type int(1) NOT NULL,
  ip varchar(100) NOT NULL,
  reason text NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_blocks (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(355) NOT NULL,
  text longtext NOT NULL,
  place_block varchar(300) NOT NULL,
  sort int(5) NOT NULL,
  active smallint(5) UNSIGNED NOT NULL DEFAULT '1',

) ";

$tables[] = "CREATE TABLE pbb_chat (
  id int(9) NOT NULL AUTO_INCREMENT,
  username varchar(250) NOT NULL,
  country varchar(100) NOT NULL,
  message text NOT NULL,
  user_id int(9) NOT NULL,
  date varchar(100) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_custom_bbcode (
  id int(9) NOT NULL AUTO_INCREMENT,
  bbcode_title varchar(355) NOT NULL DEFAULT '',
  bbcode_desc text NOT NULL,
  bbcode_tag varchar(255) NOT NULL DEFAULT '',
  bbcode_replace text NOT NULL,
  bbcode_useoption tinyint(1) NOT NULL DEFAULT '0',
  bbcode_example text NOT NULL,
  bbcode_switch varchar(355) NOT NULL DEFAULT '',
  bbcode_add_into_menu int(1) NOT NULL DEFAULT '0',
  bbcode_menu_option_text varchar(400) NOT NULL DEFAULT '',
  bbcode_menu_content_text varchar(400) NOT NULL DEFAULT '',

) ";

$tables[] = "CREATE TABLE pbb_emailed (
  id int(9) NOT NULL AUTO_INCREMENT,
  user_id int(9) NOT NULL,
  subject_title varchar(200) NOT NULL,
  section_title varchar(200) NOT NULL,
  subject_id int(9) NOT NULL,
  section_id int(9) NOT NULL,
  autosubscribe int(1) NOT NULL DEFAULT '0',

) ";

$tables[] = "CREATE TABLE pbb_emailmessages (
  id int(9) NOT NULL AUTO_INCREMENT,
  title text NOT NULL,
  number_messages int(9) NOT NULL,
  seconds int(9) NOT NULL,
  user_group varchar(200) NOT NULL,
  message longtext NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_email_msg (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(300) NOT NULL,
  text text NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_ex (
  id int(9) NOT NULL AUTO_INCREMENT,
  Ex varchar(100) NOT NULL,
  max_size varchar(100) NOT NULL,
  mime_type varchar(255) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_extrafield (
  id int(9) NOT NULL AUTO_INCREMENT,
  name varchar(200) NOT NULL,
  show_in_forum varchar(3) NOT NULL,
  required varchar(3) NOT NULL,
  type varchar(250) NOT NULL,
  options text NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_faq (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(200) NOT NULL,
  text longtext NOT NULL,
  description longtext NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_feeds (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(250) NOT NULL,
  title2 varchar(250) NOT NULL,
  rsslink text NOT NULL,
  userid int(10) UNSIGNED NOT NULL DEFAULT '0',
  forumid smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  text mediumtext NOT NULL,
  ttl smallint(5) UNSIGNED NOT NULL DEFAULT '1500',
  options int(10) UNSIGNED NOT NULL DEFAULT '1',
  feeds_time varchar(20) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_friends (
  id int(9) NOT NULL AUTO_INCREMENT,
  username varchar(100) NOT NULL,
  userid_friend int(9) NOT NULL,
  username_friend varchar(100) NOT NULL,
  approval int(1) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_group (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(200) NOT NULL,
  username_style varchar(100) NOT NULL,
  user_title varchar(100) NOT NULL,
  forum_team int(1) NOT NULL,
  banned int(1) NOT NULL,
  view_section int(1) NOT NULL,
  download_attach int(1) NOT NULL,
  download_attach_number smallint(4) NOT NULL,
  write_subject int(1) NOT NULL,
  write_reply int(1) NOT NULL,
  upload_attach int(1) NOT NULL,
  upload_attach_num int(5) NOT NULL,
  edit_own_subject int(1) NOT NULL,
  edit_own_reply int(1) NOT NULL,
  del_own_subject int(1) NOT NULL,
  del_own_reply int(1) NOT NULL,
  write_poll int(1) NOT NULL,
  vote_poll int(1) NOT NULL,
  no_posts int(1) NOT NULL,
  use_pm int(1) NOT NULL,
  send_pm int(1) NOT NULL,
  resive_pm int(1) NOT NULL,
  max_pm int(9) NOT NULL,
  min_send_pm int(9) NOT NULL,
  sig_allow int(1) NOT NULL,
  sig_len int(5) NOT NULL,
  group_mod int(1) NOT NULL,
  del_subject int(1) NOT NULL,
  del_reply int(1) NOT NULL,
  edit_subject int(1) NOT NULL,
  edit_reply int(1) NOT NULL,
  stick_subject int(1) NOT NULL,
  unstick_subject int(1) NOT NULL,
  move_subject int(1) NOT NULL,
  close_subject int(1) NOT NULL,
  usercp_allow int(1) NOT NULL,
  admincp_allow int(1) NOT NULL,
  search_allow int(1) NOT NULL,
  memberlist_allow int(1) NOT NULL,
  vice int(1) NOT NULL,
  show_hidden int(1) NOT NULL,
  view_usernamestyle int(1) NOT NULL,
  usertitle_change int(1) NOT NULL,
  onlinepage_allow int(1) NOT NULL,
  allow_see_offstyles int(1) NOT NULL,
  admincp_section int(1) NOT NULL,
  admincp_option int(1) NOT NULL,
  admincp_member int(1) NOT NULL,
  admincp_membergroup int(1) NOT NULL,
  admincp_membertitle int(1) NOT NULL,
  admincp_admin int(1) NOT NULL,
  admincp_adminstep int(1) NOT NULL,
  admincp_subject int(1) NOT NULL,
  admincp_database int(1) NOT NULL,
  admincp_fixup int(1) NOT NULL,
  admincp_ads int(1) NOT NULL,
  admincp_template int(1) NOT NULL,
  admincp_adminads int(1) NOT NULL,
  admincp_attach int(1) NOT NULL,
  admincp_page int(1) NOT NULL,
  admincp_block int(1) NOT NULL,
  admincp_style int(1) NOT NULL,
  admincp_toolbox int(1) NOT NULL,
  admincp_smile int(1) NOT NULL,
  admincp_icon int(1) NOT NULL,
  admincp_avater int(1) NOT NULL,
  group_order int(9) NOT NULL,
  admincp_contactus int(1) NOT NULL,
  send_warning int(1) NOT NULL,
  can_warned int(1) NOT NULL,
  hide_allow int(1) NOT NULL,
  visitormessage int(1) NOT NULL,
  see_who_on_topic int(1) NOT NULL,
  reputation_number int(1) NOT NULL,
  admincp_chat int(1) NOT NULL,
  admincp_extrafield int(1) NOT NULL,
  admincp_lang int(1) NOT NULL,
  admincp_emailed int(1) NOT NULL,
  admincp_warn int(1) NOT NULL,
  admincp_award int(1) NOT NULL,
  admincp_multi_moderation int(1) NOT NULL,
  view_subject int(1) NOT NULL,
  review_subject int(1) NOT NULL,
  review_reply int(1) NOT NULL,
  view_action_edit int(1) NOT NULL DEFAULT '1',
  topic_day_number int(1) NOT NULL DEFAULT '0',
  groups_security int(1) NOT NULL DEFAULT '1',
  profile_photo int(1) NOT NULL DEFAULT '1',

) ";

$tables[] = "CREATE TABLE pbb_hooks (
  id int(9) NOT NULL AUTO_INCREMENT,
  addon_id int(9) NOT NULL,
  main_place varchar(250) NOT NULL,
  place_of_hook varchar(250) NOT NULL,
  phpcode longtext NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_info (
  id int(9) NOT NULL AUTO_INCREMENT,
  var_name varchar(255) NOT NULL,
  value text NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_lang (
  id int(9) NOT NULL AUTO_INCREMENT,
  lang_title varchar(200) NOT NULL,
  lang_order int(9) NOT NULL,
  lang_on int(1) NOT NULL,
  lang_path varchar(200) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_member (
  id int(9) NOT NULL AUTO_INCREMENT,
  username varchar(250) NOT NULL,
  password varchar(250) NOT NULL,
  email varchar(250) NOT NULL,
  usergroup int(9) NOT NULL,
  membergroupids char(250) NOT NULL,
  user_notes mediumtext NOT NULL,
  user_sig mediumtext NOT NULL,
  user_country varchar(100) NOT NULL,
  user_gender char(1) NOT NULL,
  user_website varchar(100) NOT NULL,
  lastvisit varchar(10) NOT NULL,
  user_time varchar(6) NOT NULL,
  register_date varchar(100) NOT NULL,
  posts int(9) NOT NULL,
  user_title varchar(300) NOT NULL,
  visitor int(9) NOT NULL,
  user_info mediumtext NOT NULL,
  avater_path mediumtext NOT NULL,
  away int(1) NOT NULL,
  away_msg mediumtext NOT NULL,
  new_password varchar(200) NOT NULL,
  new_email varchar(250) NOT NULL,
  active_number varchar(90) NOT NULL,
  style int(9) NOT NULL,
  hide_online int(1) NOT NULL,
  send_allow int(1) NOT NULL DEFAULT '1',
  unread_pm int(9) NOT NULL,
  lastpost_time varchar(15) NOT NULL,
  keepmeon int(9) NOT NULL,
  logged varchar(30) NOT NULL,
  register_time varchar(50) NOT NULL,
  style_cache text NOT NULL,
  style_id_cache int(9) NOT NULL,
  should_update_style_cache int(1) NOT NULL,
  autoreply int(9) NOT NULL,
  autoreply_title varchar(255) NOT NULL,
  autoreply_msg text NOT NULL,
  pm_senders int(1) NOT NULL,
  pm_senders_msg varchar(255) NOT NULL,
  member_ip varchar(20) NOT NULL,
  subject_sig mediumtext NOT NULL,
  reply_sig mediumtext NOT NULL,
  username_style_cache varchar(255) NOT NULL,
  review_subject int(1) NOT NULL,
  inviter varchar(250) NOT NULL,
  invite_num int(9) NOT NULL,
  warnings int(10) UNSIGNED NOT NULL DEFAULT '0',
  lang int(9) NOT NULL DEFAULT '1',
  review_reply int(1) NOT NULL,
  reputation int(10) UNSIGNED NOT NULL DEFAULT '10',
  award varchar(350) NOT NULL,
  lastsearch_time varchar(15) NOT NULL,
  pm_emailed int(1) NOT NULL DEFAULT '0',
  pm_window int(1) NOT NULL DEFAULT '1',
  visitormessage int(1) NOT NULL DEFAULT '1',
  bday_day int(2) DEFAULT NULL,
  bday_month int(2) DEFAULT NULL,
  bday_year int(4) DEFAULT NULL,
  profile_viewers int(1) NOT NULL DEFAULT '1',
  style_sheet_profile longtext NOT NULL,
  send_security_code int(1) NOT NULL DEFAULT '0',
  send_security_error_login int(1) NOT NULL DEFAULT '0',
  profile_cover_photo varchar(355) NOT NULL,
  profile_cover_photo_position varchar(355) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_moderators (
  id int(9) NOT NULL AUTO_INCREMENT,
  section_id int(9) NOT NULL,
  member_id int(9) NOT NULL,
  username varchar(255) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_online (
  id int(9) NOT NULL AUTO_INCREMENT,
  username text NOT NULL,
  path text NOT NULL,
  logged varchar(30) NOT NULL,
  user_id int(9) NOT NULL,
  user_ip varchar(30) NOT NULL,
  hide_browse int(1) NOT NULL,
  username_style varchar(255) NOT NULL,
  user_location text NOT NULL,
  subject_show int(1) NOT NULL,
  subject_id int(9) NOT NULL,
  last_move varchar(30) NOT NULL,
  section_id int(9) NOT NULL,
  is_bot int(1) NOT NULL,
  bot_name text NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_pages (
  id int(9) NOT NULL AUTO_INCREMENT,
  title text NOT NULL,
  html_code longtext NOT NULL,
  sort int(9) NOT NULL,
  link text NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_phrase_language (
  phraseid int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  languageid smallint(6) NOT NULL DEFAULT '0',
  varname varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  fieldname varchar(20) NOT NULL DEFAULT '',
  text mediumtext,
  product varchar(25) NOT NULL DEFAULT '',
  dateline int(10) UNSIGNED NOT NULL DEFAULT '0',
  username varchar(100) NOT NULL DEFAULT '',
  version varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (phraseid)
) ";

$tables[] = "CREATE TABLE pbb_pm (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(200) NOT NULL,
  text text NOT NULL,
  user_from varchar(250) NOT NULL,
  user_to varchar(250) NOT NULL,
  user_read char(1) NOT NULL,
  alarm char(1) NOT NULL,
  date varchar(100) NOT NULL,
  icon varchar(50) NOT NULL,
  folder varchar(200) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_pm_folder (
  id int(9) NOT NULL AUTO_INCREMENT,
  folder_name varchar(200) NOT NULL,
  username varchar(200) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_pm_lists (
  id int(9) NOT NULL AUTO_INCREMENT,
  list_username varchar(250) NOT NULL,
  username varchar(250) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_poll (
  id int(9) NOT NULL AUTO_INCREMENT,
  qus varchar(350) NOT NULL,
  answers text NOT NULL,
  subject_id int(9) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_profile_view (
  profile_user_id mediumint(8) UNSIGNED NOT NULL,
  viewer_user_id mediumint(8) UNSIGNED NOT NULL,
  viewer_user_counter mediumint(8) UNSIGNED NOT NULL,
  viewer_visit_time int(11) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (profile_user_id)
) ";

$tables[] = "CREATE TABLE pbb_rating (
  id int(9) NOT NULL AUTO_INCREMENT,
  username varchar(250) NOT NULL,
  by_username varchar(250) NOT NULL,
  subject_title varchar(250) NOT NULL,
  ratingdate varchar(250) NOT NULL,
  subject_id int(9) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_reply (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(355) NOT NULL,
  text mediumtext NOT NULL,
  writer varchar(250) NOT NULL,
  subject_id int(9) NOT NULL,
  stick int(1) NOT NULL,
  close int(1) NOT NULL,
  delete_topic int(1) NOT NULL,
  section int(9) NOT NULL,
  write_time varchar(15) NOT NULL,
  icon varchar(50) NOT NULL,
  action_by varchar(200) NOT NULL,
  attach_reply int(1) NOT NULL,
  actiondate varchar(50) NOT NULL,
  keepmeon int(1) NOT NULL,
  review_reply int(1) NOT NULL,
  last_time varchar(60) NOT NULL,
  reason_edit varchar(200) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_reputation (
  id int(9) NOT NULL AUTO_INCREMENT,
  by_username varchar(250) NOT NULL,
  username varchar(250) NOT NULL,
  subject_title varchar(250) NOT NULL,
  reputationdate varchar(250) NOT NULL,
  reply_id int(9) NOT NULL,
  subject_id int(9) NOT NULL,
  comments text NOT NULL,
  peg_count int(9) NOT NULL,
  reputationread smallint(5) UNSIGNED NOT NULL DEFAULT '0',

) ";

$tables[] = "CREATE TABLE pbb_requests (
  id int(9) NOT NULL AUTO_INCREMENT,
  random_url varchar(350) NOT NULL,
  username varchar(250) NOT NULL,
  request_type int(1) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_section (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(455) NOT NULL,
  section_describe text NOT NULL,
  parent int(9) NOT NULL,
  sort int(5) NOT NULL,
  section_password varchar(50) NOT NULL,
  show_sig int(1) NOT NULL,
  use_power_code_allow int(1) NOT NULL,
  section_picture varchar(300) NOT NULL,
  sectionpicture_type int(1) NOT NULL,
  use_section_picture int(1) NOT NULL,
  linksection int(1) NOT NULL,
  linkvisitor int(9) NOT NULL,
  linksite varchar(300) NOT NULL,
  subject_order int(1) NOT NULL,
  hide_subject int(1) NOT NULL,
  last_writer varchar(255) NOT NULL,
  last_subject varchar(355) NOT NULL,
  last_subjectid int(9) NOT NULL,
  last_date varchar(11) NOT NULL,
  sec_section int(1) NOT NULL,
  sig_iteration int(1) NOT NULL,
  subject_num int(9) NOT NULL,
  reply_num int(9) NOT NULL,
  forums_cache longtext NOT NULL,
  moderators longtext NOT NULL,
  sectiongroup_cache longtext NOT NULL,
  footer text NOT NULL,
  header text NOT NULL,
  review_subject int(1) NOT NULL,
  icon varchar(50) NOT NULL,
  last_time varchar(60) NOT NULL,
  last_reply int(9) NOT NULL,
  last_berpage_nm int(9) NOT NULL,
  prefix_subject text NOT NULL,
  active_prefix_subject int(1) NOT NULL DEFAULT '0',
  forum_title_color varchar(7) NOT NULL,
  trash int(1) NOT NULL DEFAULT '0',
  subjects_review_num int(1) NOT NULL DEFAULT '0',
  replys_review_num int(1) NOT NULL DEFAULT '0',

) ";

$tables[] = "CREATE TABLE pbb_sectiongroup (
  id int(9) NOT NULL AUTO_INCREMENT,
  section_id int(9) NOT NULL,
  group_id int(9) NOT NULL,
  view_section int(1) NOT NULL,
  view_subject int(1) NOT NULL,
  download_attach int(1) NOT NULL,
  write_subject int(1) NOT NULL,
  write_reply int(1) NOT NULL,
  upload_attach int(1) NOT NULL,
  edit_own_subject int(1) NOT NULL,
  edit_own_reply int(1) NOT NULL,
  del_own_subject int(1) NOT NULL,
  del_own_reply int(1) NOT NULL,
  write_poll int(1) NOT NULL,
  vote_poll int(1) NOT NULL,
  no_posts int(1) NOT NULL,
  main_section int(1) NOT NULL,
  group_name varchar(355) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_smiles (
  id int(9) NOT NULL AUTO_INCREMENT,
  smile_short varchar(200) NOT NULL,
  smile_path text NOT NULL,
  smile_type int(1) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_style (
  id int(9) NOT NULL AUTO_INCREMENT,
  style_title varchar(250) NOT NULL,
  style_on int(1) NOT NULL,
  style_order int(9) NOT NULL,
  style_path varchar(250) NOT NULL,
  image_path varchar(250) NOT NULL,
  template_path varchar(250) NOT NULL,
  cache_path varchar(250) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_subject (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(355) NOT NULL,
  text text NOT NULL,
  writer varchar(250) NOT NULL,
  section int(9) NOT NULL,
  write_date varchar(10) NOT NULL,
  stick int(1) NOT NULL,
  close int(1) NOT NULL,
  delete_topic int(1) NOT NULL,
  reply_number int(9) NOT NULL,
  visitor int(9) NOT NULL,
  write_time varchar(25) NOT NULL,
  native_write_time int(15) NOT NULL,
  icon varchar(100) NOT NULL,
  subject_describe mediumtext NOT NULL,
  action_by varchar(400) NOT NULL,
  sec_subject int(1) NOT NULL,
  lastreply_cache text NOT NULL,
  last_replier varchar(255) NOT NULL,
  poll_subject int(1) NOT NULL,
  attach_subject int(1) NOT NULL,
  actiondate varchar(50) NOT NULL,
  tags_cache text NOT NULL,
  close_reason varchar(355) NOT NULL,
  delete_reason varchar(255) NOT NULL,
  review_subject int(1) NOT NULL,
  special int(1) NOT NULL,
  review_reply int(1) NOT NULL,
  rating int(9) NOT NULL,
  last_time varchar(60) NOT NULL,
  reason_edit varchar(400) NOT NULL,
  prefix_subject text NOT NULL,
  close_poll_subject int(1) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_supermemberlogs (
  id int(9) NOT NULL AUTO_INCREMENT,
  username varchar(250) NOT NULL,
  edit_action varchar(455) NOT NULL,
  subject_title varchar(350) NOT NULL,
  subject_id int(9) NOT NULL,
  edit_date varchar(10) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_tags (
  id int(9) NOT NULL AUTO_INCREMENT,
  tag varchar(255) NOT NULL,
  number int(9) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_tags_subject (
  id int(9) NOT NULL AUTO_INCREMENT,
  tag_id int(9) NOT NULL,
  subject_id int(9) NOT NULL,
  tag varchar(255) NOT NULL,
  subject_title varchar(255) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_template (
  templateid int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  styleid smallint(6) NOT NULL DEFAULT '0',
  title varchar(100) NOT NULL DEFAULT '',
  template longtext,
  template_un longtext,
  templatetype enum('template','stylevar','css','replacement') NOT NULL DEFAULT 'template',
  dateline int(10) UNSIGNED NOT NULL DEFAULT '0',
  username varchar(100) NOT NULL DEFAULT '',
  version varchar(30) NOT NULL DEFAULT '',
  product varchar(25) NOT NULL DEFAULT '',
  sort int(5) NOT NULL,
  active smallint(5) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (templateid)
) ";

$tables[] = "CREATE TABLE pbb_templates_edits (
  id int(9) NOT NULL AUTO_INCREMENT,
  addon_id int(9) NOT NULL,
  template_name varchar(250) NOT NULL,
  action varchar(250) NOT NULL,
  old_text longtext NOT NULL,
  text longtext NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_today (
  id int(9) NOT NULL AUTO_INCREMENT,
  username varchar(250) NOT NULL,
  user_id int(9) NOT NULL,
  user_date varchar(10) NOT NULL,
  logged varchar(30) NOT NULL,
  hide_browse int(1) NOT NULL,
  username_style varchar(455) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_toolbox (
  id int(9) NOT NULL AUTO_INCREMENT,
  name varchar(250) NOT NULL,
  tool_type int(1) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_topicmod (
  id int(9) NOT NULL AUTO_INCREMENT,
  title varchar(350) NOT NULL,
  enabled tinyint(1) NOT NULL DEFAULT '0',
  state varchar(10) NOT NULL DEFAULT 'leave',
  pin varchar(10) NOT NULL DEFAULT 'leave',
  move smallint(5) NOT NULL DEFAULT '0',
  move_link tinyint(1) NOT NULL DEFAULT '0',
  title_st varchar(350) NOT NULL DEFAULT '',
  title_end varchar(350) NOT NULL DEFAULT '',
  reply tinyint(1) NOT NULL DEFAULT '0',
  reply_content text NOT NULL,
  approve tinyint(1) NOT NULL DEFAULT '0',
  forums text NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_userrating (
  id int(9) NOT NULL AUTO_INCREMENT,
  rating varchar(350) NOT NULL,
  posts int(9) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_usertitle (
  id int(9) NOT NULL AUTO_INCREMENT,
  usertitle varchar(200) NOT NULL,
  posts int(9) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_visitor (
  id int(9) NOT NULL AUTO_INCREMENT,
  lang_id int(9) NOT NULL,
  ip varchar(100) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_visitormessage (
  id int(9) NOT NULL AUTO_INCREMENT,
  userid int(10) UNSIGNED NOT NULL DEFAULT '0',
  postuserid int(10) UNSIGNED NOT NULL DEFAULT '0',
  postusername varchar(100) NOT NULL DEFAULT '',
  dateline int(10) UNSIGNED NOT NULL DEFAULT '0',
  pagetext mediumtext,
  ipaddress varchar(20) NOT NULL DEFAULT '0',
  messageread smallint(5) UNSIGNED NOT NULL DEFAULT '0',

) ";

$tables[] = "CREATE TABLE pbb_vote (
  id int(9) NOT NULL AUTO_INCREMENT,
  poll_id int(9) NOT NULL,
  member_id int(9) NOT NULL,
  answer_number int(9) NOT NULL,
  votes int(9) NOT NULL,
  subject_id int(9) NOT NULL,
  user_ip varchar(100) NOT NULL,
  username varchar(255) NOT NULL,

) ";

$tables[] = "CREATE TABLE pbb_warnlog (
  id int(9) NOT NULL AUTO_INCREMENT,
  warn_from varchar(200) NOT NULL,
  warn_to varchar(200) NOT NULL,
  warn_text longtext NOT NULL,
  warn_date varchar(200) NOT NULL,
  warn_liftdate varchar(200) NOT NULL,

) ";


