<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$_CONF['info_row']['content_language']}" lang="{$_CONF['info_row']['content_language']}">
<head>
	<title> {$lang['ADMINCP']} -
 {if {$_CONF['info_row']['allowed_powered']} == 1}
 {$lang['powered']}
{/if}</title>
	<meta http-equiv="Content-Type" content="text/html; charset={$_CONF['info_row']['charset']}" />
	<link rel="stylesheet" href="../{$admincpdir}/cpstyles/{$_CONF['info_row']['cssprefs']}/style.css" type="text/css" />
</head>
<frameset rows="15%,50%">
  <frame src="index.php?page=index&amp;top=1" frameborder="0" scrolling="no" name="top">
   {if {$_CONF['info_row']['content_dir']} == 'rtl'}
  <frameset cols="70%,30%">
    <frame src="index.php?page=index&amp;left=1" frameborder="0" name="main">
    <frame src="index.php?page=index&amp;right=1" frameborder="0" name="menu">
  </frameset>
  {else}
  <frameset cols="30%,70%">
    <frame src="index.php?page=index&amp;right=1" frameborder="0" name="menu">
    <frame src="index.php?page=index&amp;left=1" frameborder="0" name="main">
  </frameset>
  {/if}
</frameset>
</html>
