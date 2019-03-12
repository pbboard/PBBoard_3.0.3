<?php
@error_reporting(E_ALL ^ E_NOTICE);
// Define safe_mode
define('SAFEMODE', (ini_get('safe_mode') == 1 OR strtolower(ini_get('safe_mode')) == 'on') ? true : false);

////////////
/*
# Security Written By Z A I D
# Pbboard Developer Group
*/
	$_Injection = array("'","%27","order","union","select",'from');
	foreach($_GET as $key=>$val)
	{
	$val = strtolower($val);
		foreach($_Injection as $String)
		{
			if(strpos($val,$String) !== false)
			{
			exit("This is access not allowed");
			}
		}
	}

// PowerBB Engine
// General systems
$not_installed = false;
if(!file_exists('includes/config.php'))
{
	$not_installed = true;
}
else
{
	// Include the required core files
	require_once('includes/config.php');
	if(!isset($config['db']['name']))
	{
		$not_installed = true;
	}
}

if($not_installed !== false)
{
	if(file_exists("install/index.php"))
	{
		header("Location: ./install/index.php");
		exit;
	}
}
// Include the required core config
require_once('includes/config.php');

// Ensure if tables are installed or not
require_once('includes/libs/functions.class.php');
// Connect to database
if($config['db']['dbtype'] == 'mysqli')
{
require_once('includes/libs/db_mysqli.class.php');
}
elseif($config['db']['dbtype'] == 'mysql')
{
	// Check PHP Version
	if(version_compare(PHP_VERSION, '7.0.0', "<"))
	{
  		require_once('includes/libs/db.class.php');
	}
	else
	{
		exit("<br /><div style='width: 400px; font: 13pt/15pt verdana, arial, sans-serif; height: 35px; vertical-align: top;'><font color=#000080>Database error:This extension '<font color=#0000FF><b>MySQL</b></font>' was deprecated in PHP 5.5.0, and it not working in PHP 7.0.0. Instead, the <font color=#33CC33><b>MySQLi</b></font>' extension should be used.</font></div>");
	}

}
require_once('includes/libs/records.class.php');
require_once('includes/libs/pager.class.php');

// General systems
require('includes/functions.class.php');
require_once('includes/pbboardCodeparse.class.php');
if (defined('IN_ADMIN'))
{
require_once('includes/FeedParser.php');
}

if (defined('IN_ADMIN'))
{
require_once('includes/templatecp.class.php');
}
else
{
require_once('includes/template.class.php');
}

////////////

if (is_array($CALL_SYSTEM))
{
	////////////

	$files = array();

	$files[] = ($CALL_SYSTEM['INFO']) 				? 'info.class.php' : null;
	$files[] = ($CALL_SYSTEM['ADS']) 				? 'ads.class.php' : null;
	$files[] = ($CALL_SYSTEM['ANNOUNCEMENT']) 		? 'announcement.class.php' : null;
	$files[] = ($CALL_SYSTEM['AVATAR']) 			? 'avatar.class.php' : null;
	$files[] = ($CALL_SYSTEM['BANNED']) 			? 'banned.class.php' : null;
	$files[] = ($CALL_SYSTEM['GROUP']) 				? 'group.class.php' : null;
	$files[] = ($CALL_SYSTEM['MEMBER']) 			? 'member.class.php' : null;
	$files[] = ($CALL_SYSTEM['ONLINE']) 			? 'online.class.php' : null;
	$files[] = ($CALL_SYSTEM['PAGES']) 				? 'pages.class.php' : null;
	$files[] = ($CALL_SYSTEM['PM']) 				? 'pm.class.php' : null;
	$files[] = ($CALL_SYSTEM['REPLY']) 				? 'reply.class.php' : null;
	$files[] = ($CALL_SYSTEM['SEARCH']) 			? 'search.class.php' : null;
	$files[] = ($CALL_SYSTEM['SECTION']) 			? 'sections.class.php' : null;
	$files[] = ($CALL_SYSTEM['STYLE']) 				? 'style.class.php' : null;
	$files[] = ($CALL_SYSTEM['SUBJECT']) 			? 'subject.class.php' : null;
	$files[] = ($CALL_SYSTEM['CACHE']) 				? 'cache.class.php' : null;
	$files[] = ($CALL_SYSTEM['REQUEST']) 			? 'request.class.php' : null;
	$files[] = ($CALL_SYSTEM['MISC']) 				? 'misc.class.php' : null;
	$files[] = ($CALL_SYSTEM['MESSAGE']) 			? 'messages.class.php' : null;
	$files[] = ($CALL_SYSTEM['ATTACH']) 			? 'attach.class.php' : null;
	$files[] = ($CALL_SYSTEM['FIXUP']) 				? 'fixup.class.php' : null;
	$files[] = ($CALL_SYSTEM['FILESEXTENSION']) 	? 'extension.class.php' : null;
	$files[] = ($CALL_SYSTEM['USERTITLE']) 			? 'usertitle.class.php' : null;
	$files[] = ($CALL_SYSTEM['ICONS']) 				? 'icons.class.php' : null;
	$files[] = ($CALL_SYSTEM['TOOLBOX']) 			? 'toolbox.class.php' : null;
	$files[] = ($CALL_SYSTEM['MODERATORS']) 		? 'moderators.class.php' : null;
	$files[] = ($CALL_SYSTEM['POLL']) 				? 'poll.class.php' : null;
	$files[] = ($CALL_SYSTEM['VOTE']) 				? 'vote.class.php' : null;
	$files[] = ($CALL_SYSTEM['TAG']) 				? 'tags.class.php' : null;
	$files[] = ($CALL_SYSTEM['TAG_SUBJECT']) 		? 'tags.class.php' : null;
	$files[] = ($CALL_SYSTEM['WARNLOG']) 			? 'warnlog.class.php' : null;
	$files[] = ($CALL_SYSTEM['EXTRAFIELD'])         ? 'extrafield.class.php' : null;
	$files[] = ($CALL_SYSTEM['LANG']) 				? 'lang.class.php' : null;
	$files[] = ($CALL_SYSTEM['REPUTATION']) 		? 'reputation.class.php' : null;
	$files[] = ($CALL_SYSTEM['RATING']) 		    ? 'rating.class.php' : null;
	$files[] = ($CALL_SYSTEM['SUPERMEMBERLOGS']) 	? 'supermemberlogs.class.php' : null;
	$files[] = ($CALL_SYSTEM['CHAT']) 	            ? 'chat.class.php' : null;
	$files[] = ($CALL_SYSTEM['EMAILED']) 	        ? 'emailed_notification.class.php' : null;
	$files[] = ($CALL_SYSTEM['VISITOR']) 	        ? 'visitor.class.php' : null;
	$files[] = ($CALL_SYSTEM['AWARD']) 	            ? 'award.class.php' : null;
	$files[] = ($CALL_SYSTEM['ADSENSE']) 	        ? 'adsense.class.php' : null;
	$files[] = ($CALL_SYSTEM['FRIENDS']) 	        ? 'friends.class.php' : null;
	$files[] = ($CALL_SYSTEM['ADDONS']) 	        ? 'addons.class.php' : null;
	$files[] = ($CALL_SYSTEM['HOOKS']) 	            ? 'hooks.class.php' : null;
	$files[] = ($CALL_SYSTEM['TEMPLATESEDITS']) 	? 'templatesedits.class.php' : null;
	$files[] = ($CALL_SYSTEM['VISITORMESSAGE']) 	? 'visitormessage.class.php' : null;
	$files[] = ($CALL_SYSTEM['USERRATING']) 	    ? 'userrating.class.php' : null;
	$files[] = ($CALL_SYSTEM['EMAILMESSAGES']) 	    ? 'emailmessages.class.php' : null;
	$files[] = ($CALL_SYSTEM['FEEDS']) 	            ? 'feeds.class.php' : null;
	$files[] = ($CALL_SYSTEM['TOPICMOD']) 	        ? 'topicmod.class.php' : null;
	$files[] = ($CALL_SYSTEM['CUSTOM_BBCODE']) 	    ? 'custom_bbcode.class.php' : null;
	$files[] = ($CALL_SYSTEM['CORE']) 	            ? 'core.class.php' : null;
    $files[] = ($CALL_SYSTEM ['LOG_VISIT_PROFILE']) ? 'profileviewer.class.php' : null;

	////////////

	if (sizeof($files) > 0)
	{
		foreach ($files as $filename)
		{
			if (!is_null($filename))
			{
				require_once('includes/systems/' . $filename);
			}
		}
	}

	////////////
}
////////////

class PowerBB
{
	// General systems
	var $DB;
	var $sys_functions;
	var $records;
	var $pager;
	// General systems
	var $functions;
	var $template;
	var $Powerparse;
	var $FeedParser;
	////////////
	// Systems
	var $ads;
	var $announcement;
	var $avatar;
	var $banned;
	var $group;
	var $member;
	var $online;
	var $pages;
	var $pm;
 	var $postcontrol;
	var $reply;
	var $search;
	var $section;
	var $style;
	var $subject;
	var $cache;
	var $misc;
	var $PowerCode;
	var $request;
	var $massege;
    var $message;
	var $attach;
	var $info;
	var $usertitle;
	var $toolbox;
	var $fixup;
	var $extension;
	var $warnlog;
	var $extrafield;
	var $lang;
	var $reputation;
	var $rating;
	var $supermemberlogs;
	var $chat;
	var $emailed;
	var $visitor;
	var $award;
	var $adsense;
	var $friends;
	var $addons;
	var $hooks;
	var $templates_edits;
	var $visitormessage;
	var $userrating;
    var $emailmessages;
    var $feeds;
    var $topicmod;
	var $custom_bbcode;

   ////////////



	function __construct()
	{
		global $config,$_VARS,$CALL_SYSTEM;

		$this->_CONF		=	array();
		$this->_GET		    =	array();
		$this->_POST		=	array();
		$this->_COOKIE		=	array();
		$this->_FILES		=	array();
		$this->_SERVER		=	array();
		//$this->table		=	array();
		$this->_REQUEST		=	array();

		// General systems
		$this->DB				= 	new PowerBBSQL($this);
  		$this->pager			=	new PowerBBPager($this);
  		$this->sys_functions	=	new PowerBBSystemFunctions($this);
  		$this->records			=	new PowerBBRecords($this);
        $this->functions        =   new PowerBBFunctions($this);

  		////////////
		if (!defined('INSTALL'))
		{
  			$this->Powerparse	  	= 	new PowerBBCodeParse($this);
  		    $this->template = new PBBTemplate($this);
	  		if (defined('IN_ADMIN'))
	  		{
				$this->FeedParser	  	= 	new FeedParser($this);

	  		}
		 }

  		$this->DB->SetInformation(	$config['db']['server'],
  									$config['db']['username'],
  									$config['db']['password'],
  									$config['db']['name'],
  									$config['db']['dbtype'],
  									$config['db']['encoding']);

  		////////////

  		if (!empty($config['db']['prefix']))
  		{
  			$this->prefix = $config['db']['prefix'];
  		}
  		if (!empty($config['Misc']['admincpdir']))
  		{
  			$this->admincpdir = $config['Misc']['admincpdir'];
  		}
  		if (!empty($config['SpecialUsers']['superadministrators']))
  		{
  			$this->superadministrators = $config['SpecialUsers']['superadministrators'];
  		}
  		if (!empty($config['HOOKS']['DISABLE_HOOKS']))
  		{
  			$this->DISABLE_HOOKS = $config['HOOKS']['DISABLE_HOOKS'];
  		}
  		////////////

  		$this->table['ads'] 			= 	$this->prefix . 'ads';
  		$this->table['announcement'] 	= 	$this->prefix . 'announcement';
  		$this->table['attach'] 			= 	$this->prefix . 'attach';
  		$this->table['avatar'] 			= 	$this->prefix . 'avatar';
  		$this->table['banned'] 			= 	$this->prefix . 'banned';
  		$this->table['email_msg'] 		= 	$this->prefix . 'email_msg';
  		$this->table['extension'] 		= 	$this->prefix . 'extension';
  		$this->table['group'] 			= 	$this->prefix . 'group';
  		$this->table['info'] 			= 	$this->prefix . 'info';
  		$this->table['member']			= 	$this->prefix . 'member';
  		$this->table['online'] 			= 	$this->prefix . 'online';
  		$this->table['pages'] 			= 	$this->prefix . 'pages';
  		$this->table['pm'] 				= 	$this->prefix . 'pm';
  		$this->table['pm_folder'] 		= 	$this->prefix . 'pm_folder';
  		$this->table['pm_lists'] 		= 	$this->prefix . 'pm_lists';
  		$this->table['poll'] 			= 	$this->prefix . 'poll';
  		$this->table['reply'] 			= 	$this->prefix . 'reply';
  		$this->table['requests'] 		= 	$this->prefix . 'requests';
  		$this->table['section'] 		= 	$this->prefix . 'section';
  		$this->table['smiles'] 			= 	$this->prefix . 'smiles';
  		$this->table['style'] 			= 	$this->prefix . 'style';
  		$this->table['subject'] 		= 	$this->prefix . 'subject';
  		$this->table['sm_logs'] 		= 	$this->prefix . 'supermemberlogs';
  		$this->table['sectionadmin'] 	= 	$this->prefix . 'sectionadmin';
  		$this->table['today'] 			= 	$this->prefix . 'today';
  		$this->table['toolbox'] 		= 	$this->prefix . 'toolbox';
  		$this->table['usertitle'] 		= 	$this->prefix . 'usertitle';
  		$this->table['vote'] 			= 	$this->prefix . 'vote';
  		$this->table['section_group']	=	$this->prefix . 'sectiongroup';
  		$this->table['extension']		=	$this->prefix . 'ex';
  		$this->table['moderators']		=	$this->prefix . 'moderators';
  		$this->table['cats']			=	$this->prefix . 'cats';
  		$this->table['tag']				=	$this->prefix . 'tags';
  		$this->table['tag_subject']		=	$this->prefix . 'tags_subject';
  		$this->table['warnlog']		    =	$this->prefix . 'warnlog';
  		$this->table['extrafield']      =   $this->prefix . 'extrafield';
  		$this->table['lang'] 			= 	$this->prefix . 'lang';
  		$this->table['faq'] 			= 	$this->prefix . 'faq';
  		$this->table['filter_words'] 	= 	$this->prefix . 'filter_words';
  		$this->table['reputation']   	= 	$this->prefix . 'reputation';
  		$this->table['rating']   	    = 	$this->prefix . 'rating';
  		$this->table['supermemberlogs'] = 	$this->prefix . 'supermemberlogs';
  		$this->table['chat']            = 	$this->prefix . 'chat';
  		$this->table['emailed']         = 	$this->prefix . 'emailed';
  		$this->table['visitor']         = 	$this->prefix . 'visitor';
  		$this->table['award']           = 	$this->prefix . 'award';
  		$this->table['adsense']         = 	$this->prefix . 'adsense';
  		$this->table['friends']         = 	$this->prefix . 'friends';
  		$this->table['addons']          = 	$this->prefix . 'addons';
  		$this->table['hooks']           = 	$this->prefix . 'hooks';
  		$this->table['templates_edits'] = 	$this->prefix . 'templates_edits';
  		$this->table['visitormessage']  = 	$this->prefix . 'visitormessage';
  		$this->table['userrating']      = 	$this->prefix . 'userrating';
  		$this->table['emailmessages']   = 	$this->prefix . 'emailmessages';
        $this->table['feeds']           = 	$this->prefix . 'feeds';
        $this->table['topicmod']        = 	$this->prefix . 'topicmod';
  		$this->table['custom_bbcode']   = 	$this->prefix . 'custom_bbcode';
  		$this->table['template']        = 	$this->prefix . 'template';
  		$this->table['phrase_language'] = 	$this->prefix . 'phrase_language';
  		$this->table['profile_view']    =   $this->prefix . 'profile_view';


  		////////////

    	$this->_CONF['temp']					=	array();
    	$this->_CONF['info']					=	array();
    	$this->_CONF['info_row']				=	array();

    	$this->_CONF['now']						=	time();
 		$this->_CONF['timeout']					=	time()-300;
 		$this->_CONF['date']					=	@date('j/n/Y');
 		$this->_CONF['day']						=	@date('D');
 		$this->_CONF['temp']['query_num']		=	0;
 		$this->_CONF['username_cookie']			=	'PowerBB_username';
 		$this->_CONF['password_cookie']			=	'PowerBB_password';
 		$this->_CONF['admin_username_cookie']	=	'PowerBB_admin_username';
 		$this->_CONF['admin_password_cookie']	=	'PowerBB_admin_password';
 		$this->_CONF['mqtids']	                =	'mqtids';
 		$this->_CONF['style_cookie']			=	'PowerBB_style';
 		$this->_CONF['lang_cookie']			    =	'PowerBB_lang';
 		$this->_CONF['today_cookie']			=	'PowerBB_today_date';

 		////////////

 		$this->sys_functions->LocalArraySetup();

 		////////////

 		if($config['db']['dbtype'] == 'mysql')
		{
			// Check PHP Version
			if(version_compare(PHP_VERSION, '7.0.0', "<"))
			{
				// Connect to database
				$this->DB->sql_connect();
				$this->DB->sql_select_db();
			}

		}

  		// Ensure if tables are installed or not
  		$check = $this->DB->check($this->prefix . 'info');
  		// Well, the table "MySBB_info" isn't exists, so return an error message
  		if (!$check
  			and !defined('INSTALL'))
  		{
		header("Location: ./install/index.php");
		exit;
  		}

		$this->info 			= 	($CALL_SYSTEM['INFO']) 				? new PowerBBInfo($this) : null;
		$this->ads 				= 	($CALL_SYSTEM['ADS']) 				? new PowerBBAds($this) : null;
		$this->announcement 	= 	($CALL_SYSTEM['ANNOUNCEMENT']) 		? new PowerBBAnnouncement($this) : null;
		$this->avatar 			= 	($CALL_SYSTEM['AVATAR']) 			? new PowerBBAvatar($this) : null;
		$this->banned 			= 	($CALL_SYSTEM['BANNED']) 			? new PowerBBBanned($this) : null;
		$this->group 			= 	($CALL_SYSTEM['GROUP']) 			? new PowerBBGroup($this) : null;
		$this->member 			= 	($CALL_SYSTEM['MEMBER']) 			? new PowerBBMember($this) : null;
		$this->online 			= 	($CALL_SYSTEM['ONLINE']) 			? new PowerBBOnline($this) : null;
		$this->pages 			= 	($CALL_SYSTEM['PAGES']) 			? new PowerBBPages($this) : null;
		$this->pm 				= 	($CALL_SYSTEM['PM']) 				? new PowerBBPM($this) : null;
		$this->reply 			= 	($CALL_SYSTEM['REPLY']) 			? new PowerBBReply($this) : null;
		$this->search 			= 	($CALL_SYSTEM['SEARCH']) 			? new PowerBBSearch($this) : null;
		$this->section 			= 	($CALL_SYSTEM['SECTION']) 			? new PowerBBSection($this) : null;
		$this->style 			= 	($CALL_SYSTEM['STYLE']) 			? new PowerBBStyle($this) : null;
		$this->subject 			= 	($CALL_SYSTEM['SUBJECT']) 			? new PowerBBSubject($this) : null;
		$this->cache 			= 	($CALL_SYSTEM['CACHE']) 			? new PowerBBCache($this) : null;
		$this->misc 			= 	($CALL_SYSTEM['MISC']) 				? new PowerBBMisc($this) : null;
		$this->request 			= 	($CALL_SYSTEM['REQUEST']) 			? new PowerBBRequest($this) : null;
		$this->message 			= 	($CALL_SYSTEM['MESSAGE']) 			? new PowerBBMessages($this) : null;
		$this->attach 			= 	($CALL_SYSTEM['ATTACH']) 			? new PowerBBAttach($this) : null;
		$this->fixup 			= 	($CALL_SYSTEM['FIXUP']) 			? new PowerBBFixup($this) : null;
		$this->extension 		= 	($CALL_SYSTEM['FILESEXTENSION']) 	? new PowerBBFileExtension($this) : null;
		$this->usertitle 		= 	($CALL_SYSTEM['USERTITLE']) 		? new PowerBBUsertitle($this) : null;
		$this->icon 			= 	($CALL_SYSTEM['ICONS']) 			? new PowerBBIcons($this) : null;
		$this->toolbox 			= 	($CALL_SYSTEM['TOOLBOX']) 			? new PowerBBToolBox($this) : null;
		$this->moderator 		= 	($CALL_SYSTEM['MODERATORS']) 		? new PowerBBModerators($this) : null;
		$this->poll 			= 	($CALL_SYSTEM['POLL']) 				? new PowerBBPoll($this) : null;
		$this->vote 			= 	($CALL_SYSTEM['VOTE']) 				? new PowerBBVote($this) : null;
		$this->tag 				= 	($CALL_SYSTEM['TAG']) 				? new PowerBBTag($this) : null;
		$this->tag_subject 		= 	($CALL_SYSTEM['TAG_SUBJECT']) 		? new PowerBBTag($this) : null;
		$this->warnlog 			= 	($CALL_SYSTEM['WARNLOG']) 			? new PowerBBWarnLog($this) : null;
		$this->extrafield       =   ($CALL_SYSTEM['EXTRAFIELD'])        ? new PowerBBExtraField($this) : null;
		$this->lang 			= 	($CALL_SYSTEM['LANG']) 				? new PowerBBLang($this) : null;
		$this->reputation 		= 	($CALL_SYSTEM['REPUTATION']) 		? new PowerBBReputation($this) : null;
		$this->rating 	     	= 	($CALL_SYSTEM['RATING']) 		    ? new PowerBBRating($this) : null;
		$this->supermemberlogs 	= 	($CALL_SYSTEM['SUPERMEMBERLOGS']) 	? new PowerBBSupermemberlogs($this) : null;
		$this->chat            	= 	($CALL_SYSTEM['CHAT']) 	            ? new PowerBBChat($this) : null;
		$this->emailed          = 	($CALL_SYSTEM['EMAILED']) 	        ? new PowerBBEmailed($this) : null;
		$this->visitor          = 	($CALL_SYSTEM['VISITOR']) 	        ? new PowerBBVisitor($this) : null;
		$this->award            = 	($CALL_SYSTEM['AWARD']) 	        ? new PowerBBAward($this) : null;
		$this->adsense          = 	($CALL_SYSTEM['ADSENSE']) 	        ? new PowerBBAdsense($this) : null;
		$this->friends          = 	($CALL_SYSTEM['FRIENDS']) 	        ? new PowerBBFriends($this) : null;
		$this->addons           = 	($CALL_SYSTEM['ADDONS']) 	        ? new PowerBBAddons($this) : null;
		$this->hooks            = 	($CALL_SYSTEM['HOOKS']) 	        ? new PowerBBHooks($this) : null;
		$this->templates_edits  = 	($CALL_SYSTEM['TEMPLATESEDITS']) 	? new PowerBBTemplatesEdits($this) : null;
		$this->visitormessage   = 	($CALL_SYSTEM['VISITORMESSAGE']) 	? new PowerBBVisitorMessage($this) : null;
		$this->userrating       = 	($CALL_SYSTEM['USERRATING']) 	    ? new PowerBBUserRating($this) : null;
		$this->emailmessages    = 	($CALL_SYSTEM['EMAILMESSAGES']) 	? new PowerBBEmailMessages($this) : null;
		$this->feeds            = 	($CALL_SYSTEM['FEEDS']) 	        ? new PowerBBFeeds($this) : null;
		$this->topicmod         = 	($CALL_SYSTEM['TOPICMOD']) 	        ? new PowerBBTopicmodr($this) : null;
		$this->custom_bbcode    = 	($CALL_SYSTEM['CUSTOM_BBCODE']) 	? new PowerBBCustom_bbcode($this) : null;
	    $this->core             = 	($CALL_SYSTEM['CORE']) 	            ? new PowerBBCore($this) : null;
        $this->log_profile_visit= ($CALL_SYSTEM['LOG_VISIT_PROFILE'])   ? new PowerBBProfileViewer($this): null;

	////////////
		// Free memory
		unset($CALL_SYSTEM);

  		// Get informations from info table
  		if (!defined('NO_INFO'))
  		{
 			$this->_GetInfoRows();
           if (!defined('INSTALL'))
           {
 			$this->_GetLangRows();
 		   }
 		}
		$this->_CONF['ip'] = $this->get_IP_address();
 	}


 	////////////

 function _GetInfoRows()
	{

		$arr 				= 	array();
		$arr['select'] 		= 	'*';
		$arr['from'] 		= 	$this->table['info'];

		$rows = $this->records->GetList($arr);

		$x = 0;
		$y = sizeof($rows);

		while ($x <= $y)
		{
			@$this->_CONF['info_row'][$rows[$x]['var_name']] = $rows[$x]['value'];

			$x += 1;
		}

  }
 	function _GetLangRows()
	{

        if (isset($this->_COOKIE[$this->_CONF['username_cookie']]))
        {
		 $username = $this->sys_functions->CleanSymbols($this->_COOKIE[$this->_CONF['username_cookie']]);
         $username = $this->sys_functions->CleanVariable($username,'trim');
         $username = $this->sys_functions->CleanVariable($username,'html');
         $username = $this->sys_functions->CleanVariable($username,'sql');
        }

        if (isset($this->_COOKIE[$this->_CONF['lang_cookie']]))
        {
		 $lang_cookie = $this->sys_functions->CleanSymbols($this->_COOKIE[$this->_CONF['lang_cookie']]);
         $lang_cookie = $this->sys_functions->CleanVariable($lang_cookie,'trim');
         $lang_cookie = $this->sys_functions->CleanVariable($lang_cookie,'html');
         $lang_cookie = $this->sys_functions->CleanVariable($lang_cookie,'sql');
         $lang_cookie = $this->sys_functions->CleanVariable($lang_cookie,'intval');
          }
        if (isset($lang_cookie))
        {
         $languageid = $lang_cookie;
        }
        else
        {
         $languageid = $this->_CONF['info_row']['def_lang'];
        }

		if (empty($username))
		{
			$this->_CONF['LangId'] = $languageid;
        }
       else
		{

	        $MemberArr							    =	array();
	 		$MemberArr['select']					=	'*';
	 		$MemberArr['from']					    =	$this->table['member'];
	 	    $MemberArr['where'] 					= 	array();
	 	    $MemberArr['where'][0] 				    = 	array();
	 	    $MemberArr['where'][0]['name'] 		    = 	'username';
	 	    $MemberArr['where'][0]['oper'] 		    = 	'=';
	 	    $MemberArr['where'][0]['value'] 		= 	$username;

 		    $MemberRows = $this->records->GetInfo($MemberArr);
 		    if($MemberRows == true)
 		    {
				if($languageid != $MemberRows['lang'])
				{
				 $idMemberRows = $MemberRows['id'];
				 $update = $this->DB->sql_query("UPDATE " . $this->table['member'] . " SET lang='$languageid' WHERE id='$idMemberRows'");
					if($update)
					{
					$this->functions->redirect2('index.php');
					exit();
					}
				}
 		    $languageid = $MemberRows['lang'];
			$this->_CONF['LangId'] = $languageid;
			}
		}

		if (empty($languageid))
		{
		  if(isset($this->_CONF['info_row']['def_lang']))
		  {
		 $languageid = $this->_CONF['info_row']['def_lang'];
		 $this->_CONF['LangId'] = $languageid;
		  }
 		}
 		else
 		{
		$LangArr							    =	array();
		$LangArr['select']					=	'*';
		$LangArr['from']					    =	$this->table['lang'];
		$LangArr['where'] 					= 	array();
		$LangArr['where'][0] 				    = 	array();
		$LangArr['where'][0]['name'] 		    = 	'id';
		$LangArr['where'][0]['oper'] 		    = 	'=';
		$LangArr['where'][0]['value'] 		= 	$languageid;

		$LangRows = $this->records->GetInfo($LangArr);
        if ($LangRows)
        {
		$languageid = $LangRows['id'];
		$this->_CONF['LangId'] = $languageid;
		$this->_CONF['LangDir'] = $LangRows['lang_path'];
        }
        else
        {
			$def_language = $this->_CONF['info_row']['def_lang'];
			ob_start();
			setcookie("PowerBB_lang", $def_language, time()+2592000);
			ob_end_flush();
			//$this->functions->redirect2('index.php');
			exit;

        }
       }
        $arr 				            = 	array();
		$arr['select'] 		            = 	'*';
		$arr['from'] 		            = 	$this->table['phrase_language'];
 	    $arr['where'] 					= 	array();
 	    $arr['where'][0] 				= 	array();
 	    $arr['where'][0]['name'] 		= 	'languageid';
 	    $arr['where'][0]['oper'] 		= 	'=';
 	    $arr['where'][0]['value'] 		= 	$languageid;
 	    if ($this->_GET['page'] != 'chat_message')
 	    {

		  if (defined('IN_ADMIN'))
			{
			$arr['where'][1]       =    array();
			$arr['where'][1]['name'] =    'and fieldname';
			$arr['where'][1]['oper']   =    '=';
			$arr['where'][1]['value']    =    'admincp';
			}
			else
			{
			$arr['where'][1]       =    array();
			$arr['where'][1]['name'] =    'and fieldname';
			$arr['where'][1]['oper']   =    '=';
			$arr['where'][1]['value']    =    'forum';
			}
		}
 	    $rows = $this->records->GetList($arr);

				$x = 0;
				$y = sizeof($rows);

				while ($x <= $y)
				{

		            $rows[$x]['text'] = str_replace("&#39;", "'", $rows[$x]['text']);
		            if ($rows[$x]['varname'] == 'post_text_max')
		            {
		             $rows[$x]['text'] = str_replace("30000", $this->_CONF['info_row']['post_text_max'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'floodctrl')
		            {
		              $rows[$x]['text'] = str_replace("30", $this->_CONF['info_row']['floodctrl'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'Reply_Editing_time_out')
		            {
		              $rows[$x]['text'] = str_replace("1440", $this->_CONF['info_row']['time_out'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'Editing_time_out')
		            {
		              $rows[$x]['text'] = str_replace("1440", $this->_CONF['info_row']['time_out'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'characters_keyword_search')
		            {
		              $rows[$x]['text'] = str_replace("3", $this->_CONF['info_row']['characters_keyword_search'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'flood_search1')
		            {
		              $rows[$x]['text'] = str_replace("40", $this->_CONF['info_row']['flood_search'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'max_avatar')
		            {
		              $rows[$x]['text'] = str_ireplace("150 في", $this->_CONF['info_row']['max_avatar_width']." في", $rows[$x]['text']);
		              $rows[$x]['text'] = str_ireplace("150 بيكسل", $this->_CONF['info_row']['max_avatar_height']." بيكسل", $rows[$x]['text']);
		              $rows[$x]['text'] = str_ireplace("150 in", $this->_CONF['info_row']['max_avatar_width']." in", $rows[$x]['text']);
		              $rows[$x]['text'] = str_ireplace("150 Pixel", $this->_CONF['info_row']['max_avatar_height']." Pixel", $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'post_text_max_subjects')
		            {
		              $rows[$x]['text'] = str_replace("60", $this->_CONF['info_row']['post_title_max'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'post_text_min_subjects')
		            {
		              $rows[$x]['text'] = str_replace("(4)", $this->_CONF['info_row']['post_title_min'], $rows[$x]['text']);
		              $rows[$x]['text'] = str_replace("60", $this->_CONF['info_row']['post_title_min'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'post_text_min')
		            {
		              $rows[$x]['text'] = str_replace("5", $this->_CONF['info_row']['post_text_min'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'Character_name_a_few_user')
		            {
		              $rows[$x]['text'] = str_replace("3", $this->_CONF['info_row']['reg_less_num'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'characters_Username_many')
		            {
		              $rows[$x]['text'] = str_replace("25", $this->_CONF['info_row']['reg_max_num'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'Character_pass_few')
		            {
		              $rows[$x]['text'] = str_replace("5", $this->_CONF['info_row']['reg_pass_min_num'], $rows[$x]['text']);
		            }
		            if ($rows[$x]['varname'] == 'Character_pass_many')
		            {
		              $rows[$x]['text'] = str_replace("25", $this->_CONF['info_row']['reg_pass_max_num'], $rows[$x]['text']);
		            }
		            $rows[$x]['text'] = str_replace("{info_row_title}", $this->_CONF['info_row']['title'], $rows[$x]['text']);
					$this->_CONF['lang'][$rows[$x]['varname']] = $rows[$x]['text'];
					$x += 1;
				}

	}

     // Function to get the client IP address
	function get_IP_address()
	{
         if(isset($this->_SERVER['REMOTE_ADDR']))
         {
			$IPaddress = $this->_SERVER['REMOTE_ADDR'];
			$IPaddress = $this->sys_functions->CleanVariable($IPaddress,'trim');
			$IPaddress = $this->sys_functions->CleanVariable($IPaddress,'html');
			$IPaddress = $this->sys_functions->CleanVariable($IPaddress,'sql');
			$ip_filter = $IPaddress;
			$ip_filter = str_replace(".", "", $ip_filter);
			$ip_filter = str_replace(":", "", $ip_filter);
			if (is_numeric($ip_filter))
			{
			return $IPaddress;
			}
			else
			{
			return 'UNKNOWN';
			}
		}
		else
		{
		return 'UNKNOWN';
		}
	}
	////////////

}
?>