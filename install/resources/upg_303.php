<?php
/**
 * PBBoard 303
 * Copyright 2019 PBBoard Group, All Rights Reserved
 * Website: http://www.PBBoard.info
 */
/**
 * Upgrade Script: 3.0.2
 */

function upgrade303_dbchanges()
{
    global $db, $output ,$config, $lang;

    $output->steps = array($lang->upgrade);
    $output->print_header($lang->recheck_server_character, 'check_convert_utf8_1');

	$connect_array = array(
		"hostname" => $config['db']['server'],
		"username" => $config['db']['username'],
		"password" => $config['db']['password'] ,
		"database" => $config['db']['name'],
		"encoding" => $config['db']['encoding']
	);
	// Connect to Database
	define('TABLE_PREFIX', $config['db']['prefix']);
	$connect = $db->connect($connect_array);
	@mysqli_set_charset($connection, $config['db']['name']);
	mysqli_set_charset($connect, "latin1");
      $info_query = $db->query("SELECT * FROM " . $config['db']['prefix'] . "info WHERE var_name='rules'");
      $info_row   = $db->fetch_array($info_query);
      $rules = $info_row['value'];
    if(strstr($rules,'ق')
    or strstr($rules,'م')
    or strstr($rules,'ا')
    or strstr($rules,'ه'))
    {
    echo "<br /><br />".$lang->req_convert_utf;

echo "<script type=\"text/javascript\">
		function myFunction() {
  var x = document.getElementById(\"next_button\");
  if (x.style.display === \"none\") {
    x.style.display = \"block\";
  } else {
    x.style.display = \"none\";
  }
}
		</script>";
	$output->print_footer('upgrade303_convert_utf8');
    }
    else
    {
    echo "<br /><br />".$lang->go_update_section_cache;


	$lang->fixup_all_cache = str_replace("{1}",PBB_ROOT, $lang->fixup_all_cache);
	echo $lang->fixup_all_cache;
	$output->print_footer();
    }
}

function upgrade303_convert_utf8()
{
    global $db, $output ,$config, $lang;
	$action = "convert_utf8";
	$output->steps = array($lang->upgrade);
    $output->print_header($lang->convert_latin1, 'convert_utf8_1');

    $host = $config['db']['server'];
    $user = $config['db']['username'];
    $pass = $config['db']['password'];
    $db = $config['db']['name'];

    $mysqli = new mysqli($host, $user, $pass, $db);

    //show tables
    $result = $mysqli->query("SHOW TABLES from ".$db."");
	//change DEFAULT CHARACTER database to character utf8mb4_unicode_ci
    $mysqli->query("ALTER DATABASE ".$config['db']['name']." CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

    //print_r($result);
    while($tableName = mysqli_fetch_row($result))
    {
        $table = $tableName[0];

	    if (strstr($table,$config['db']['prefix'])
		or strstr($table,"main_"))
      	{
			// CONVERT ALL TABLES IN A MYSQL DATABASE TO utf8mb4
			$mysqli->query("ALTER TABLE ".$table." CONVERT TO CHARACTER SET utf8mb4");

	        $result2 = $mysqli->query("SHOW COLUMNS from ".$table.""); //$result2 = mysqli_query($table, 'SHOW COLUMNS FROM') or die("cannot show columns");
	        if(mysqli_num_rows($result2))
	        {
	            while($row2 = mysqli_fetch_row($result2))
	            {
	                foreach ($row2 as $key=>$value)
	                {
	                    if($value == 'longtext')
		                {
						$mysqli->query('UPDATE ' .$table. ' SET
						    '.$row2[0].'=convert(cast(convert('.$row2[0].' using  latin1) as binary) using utf8mb4)
						WHERE 1');
						 }
		                elseif(strstr($value,'varchar'))
		                {
						$mysqli->query('UPDATE ' .$table. ' SET
						    '.$row2[0].'=convert(cast(convert('.$row2[0].' using  latin1) as binary) using utf8mb4)
						WHERE 1');
		                }
		                elseif($value == 'mediumtext')
		                {
						$mysqli->query('UPDATE ' .$table. ' SET
						    '.$row2[0].'=convert(cast(convert('.$row2[0].' using  latin1) as binary) using utf8mb4)
						WHERE 1');
		                }
	                }
	            }
	        }
        }
echo '<br />
'. $lang->convert_table.' <b>'.$table.'</b> '. $lang->done.' ..<br />';
    }

	echo $lang->req_convert_reqcomplete;
		$protocol = "http://";
		if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off"))
		{
		$protocol = "https://";
		}

		if($_SERVER['HTTP_HOST'])
		{
		$hostname = $protocol.$_SERVER['HTTP_HOST'];
		}
		$currentlocation = get_current_location('', '', true);
		$noinstall = substr($currentlocation, 0, strrpos($currentlocation, '/install/'));
		$bburl = $hostname.$noinstall."/";
	$lang->fixup_all_cache = str_replace("{1}",$bburl, $lang->fixup_all_cache);
	echo $lang->fixup_all_cache;
	$output->print_footer();
}
function upgrade303_update_section_cache()
{
	global $db, $output ,$config, $lang, $PowerBB;
   $output->steps = array($lang->upgrade);
	$output->print_header($lang->update_all_sections_cache);
       echo '<br />';

   echo $lang->finish_upgrade_sections_cache;
	$output->print_footer('upgrade303_finish_upgrade');

}
function upgrade303_finish_upgrade()
{
 	global $db, $output ,$config, $lang, $PowerBB;
    $output->steps = array($lang->upgrade);
	$output->print_header($lang->done_step_upgraded_success);
	echo $lang->finish_upgrade;
	$time	   = @time();

    $update = $db->query("UPDATE " . $config['db']['prefix'] . "info SET value='3.0.3' WHERE var_name='MySBB_version'");
    $update = $db->query("UPDATE " . $config['db']['prefix'] . "info SET value='".$time."' WHERE var_name='last_time_cache'");
    $update = $db->query("UPDATE " . $config['db']['prefix'] . "info SET value='".$time."' WHERE var_name='last_time_updates'");

	$written = 0;
	if(is_writable('./'))
	{
		$lock = @fopen('./lock', 'w');
		$written = @fwrite($lock, '1');
		@fclose($lock);
		if($written)
		{
			echo $lang->done_step_locked;
		}
	}
	if(!$written)
	{
		echo $lang->done_step_dirdelete;
	}

      $info_query = $db->query("SELECT * FROM " . $config['db']['prefix'] . "info WHERE var_name='title'");
      $info_row   = $db->fetch_array($info_query);
      $title = $info_row['value'];

		$protocol = "http://";
		if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off"))
		{
		$protocol = "https://";
		}

		// Attempt auto-detection
		if($_SERVER['HTTP_HOST'])
		{
		$hostname = $protocol.$_SERVER['HTTP_HOST'];
		}
		elseif($_SERVER['SERVER_NAME'])
		{
		$hostname = $protocol.$_SERVER['SERVER_NAME'];
		}

		$currentlocation = get_current_location('', '', true);
		$noinstall = substr($currentlocation, 0, strrpos($currentlocation, '/install/'));
		$bburl = $hostname.$noinstall;
		$websiteurl = $hostname.'/';

		$file = @fopen(PBB_ROOT."includes/settings.php", "w");

		@fwrite($file, "<?php
/**
 * Website Details
 *  Forum URL
 *  Website URL
 *  Website Name
 */

\$setting['forum_url'] = '{$bburl}';
\$setting['website_url'] = '{$websiteurl}';
\$setting['forum_title'] = '{$title}';
\$setting['website_name'] = '{$title}';");

		@fclose($file);



	$output->print_footer('');

}




