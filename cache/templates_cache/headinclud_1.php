<!doctype html>
<html dir="{$_CONF['info_row']['content_dir']}" itemscope="" itemtype="http://schema.org/WebPage" lang="{$_CONF['info_row']['content_language']}">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset={$_CONF['info_row']['charset']}" />
{if {$index}}
<meta name="keywords" content="{$keywords}" />
{else}
<meta name="keywords" content="{Des::while}{tags}{$tags['tag']},{/Des::while}keyword" />
{/if}
<meta name="description" content=" {$description}" />
<link rel="shortcut icon" href="{$ForumAdress}favicon.ico" />
<!-- CSS Stylesheet -->
<style type="text/css">
@import url("{$ForumAdress}{$style_path}");
</style>
<link rel="stylesheet" href="{$ForumAdress}look/fonts/font-awesome.min.css" />
<link rel="stylesheet" href="{$ForumAdress}look/fonts/fonts.css" />
<link rel="stylesheet" href="{$ForumAdress}applications/core/colorbox-master/colorbox.css" />
<link rel="alternate" type="application/rss+xml" title="{$lang['rss_subject']}" href="
{$ForumAdress}index.php?page=rss&amp;subject=1" />
<script type="text/javascript" src="{$ForumAdress}includes/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="{$ForumAdress}includes/js/jquery-ui.js"></script>
<script type="text/javascript" src="{$ForumAdress}includes/js/jquery.save.js"></script>
<script type="text/javascript" src="{$ForumAdress}applications/core/colorbox-master/jquery.colorbox.js"></script>
{if {$_CONF['info_row']['resize_imagesAllow']} == 1}
{template}imgs_resize{/template}
{/if}
<script type="text/javascript" src="{$ForumAdress}includes/js/shCore.js"></script>
<script type="text/javascript" src="{$ForumAdress}includes/js/shBrushPhp.js"></script>
<script type="text/javascript">SyntaxHighlighter.config.bloggerMode = true; SyntaxHighlighter.all();</script>
<script type="text/javascript" src="{$ForumAdress}includes/js/pbboardCode.js"></script>
<script type="text/javascript" src="{$ForumAdress}includes/js/pbboard_global.js"></script>
<script type="text/javascript" src="{$ForumAdress}includes/js/pbboard_toggle.js"></script>
<script type="text/javascript" src="{$ForumAdress}includes/js/jscolor.js"></script>
{template}jscolor{/template}

<title>{$title}
{if {$_CONF['info_row']['allowed_powered']} == 1}
- {$lang['powered']}
{/if}</title>
</head>
<body class="pkr">
{template}header{/template}	