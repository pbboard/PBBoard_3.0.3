<div id="header_bar" class="pkr pkr-b">
<!-- Code search Menu start -->
{if {$_CONF['group_info']['search_allow']} == '1'}
<div id="searchContainer">
<form name="search" action="index.php?page=search" method="get">
<input type="hidden" name="page" value="search" />
<input type="hidden" name="start" value="1"/>
<input type="hidden" name="search_only" value="1" />
<input type="hidden" name="sort_order" value="desc" />
<input type="hidden" name="section" value="all" />
<ul>
<li><input type="submit" name="submit" class="submit-id pkr pkr-b" title="{$lang['start_search']}" /></li>
<li><input type="text" name="keyword" id="field" value="{$lang['search_keyword']}" onfocus="if (this.value == '{$lang['search_keyword']}') this.value = '';"
dir="{$_CONF['info_row']['content_dir']}" /></li>
<li><input title="{$lang['advanced_search']}" type="button" id="advanced_search" onclick="window.open('index.php?page=search&amp;index=1','mywindow','')" value="{$lang['advanced_search']}" /></li>
</ul>
</form>
</div>
{/if}
<!-- Code search Menu End -->
<nav id="nav_header_bar">
<ul>
{if !{$_CONF['member_permission']}}
<li class="tabsup">
<a href="index.php?page=register&amp;index=1" title="{$lang['register']}" class="pkr-b pkr-c"><i class="g_icon fa fa-user pkr-c"></i>  {$lang['register']} </a>
</li>
<!-- Start login Box-->
<li class="tabsup">
<a title="{$lang['login']}" id="login-trigger" href="#" class="pkr-b pkr-c"><i class="g_icon fa fa-sign-in pkr-c"></i> {$lang['login']} </a>
<div id="login-content">
<form method="post" action="index.php?page=login&amp;login=1">
<div id="inputs">
<input id="username" type="text" name="username" placeholder="{$lang['username']}" />
<input id="password" type="password" name="password" placeholder="{$lang['password']}" />
</div>
<div id="actions">
<input type="submit" class="submit-id pkr pkr-b" value="{$lang['login']}" />
<label><input type="checkbox" name="temporary" value="on" class="fp1" checked="checked" />  {$lang['Temp_login']}</label>
</div>
</form>
</div>
</li>
<!-- end login Box-->
{else}
<li class="userlogout">
<a href="index.php?page=logout&amp;index=1" onclick="return confirm('{$lang['confirm']}')" title="{$lang['logout']}">
<i class="userbar_icon fa fa-sign-out"></i>
</a>
</li>
<li class="userbar">
<a title="{$lang['alerts']}" id="alerts-trigger" href="#" class="pkr-b pkr-c"><i class="userbar_icon fa fa-bell"></i><sup id="sup"><b>{$all_alerts_num}</b></sup></a>
{template}alerts{/template}
</li>
{if {$_CONF['info_row']['pm_feature']}}
<li class="userbar">
{if {$_CONF['rows']['group_info']['use_pm']} == 1}
<a title="{$lang['Private_Messages']}"  href="index.php?page=pm_list&amp;list=1&amp;folder=inbox"><i class="userbar_icon fa fa-envelope"></i><sup id="sup"><b>{$pm_num}</b></sup></a>
{/if}
</li>
{/if}
{if {$_CONF['rows']['member_row']['usergroup']} == 5}
<li class="userbar">
<a title="{$lang['send_active_code']}" href="index.php?page=forget&amp;active_member=1&amp;send_active_code=1"><i class="userbar_icon fa fa-key"></i></a>
</li>
{/if}
<li id="userbar">
{if {$avater_change}}
<a href="index.php?page=usercp&amp;control=1&amp;avatar=1&amp;main=1" title="{$lang['Change_avatar']}">
{else}
<a href="index.php?page=profile&amp;show=1&amp;id={$_CONF['rows']['member_row']['id']}" title="{$lang['view_profile']}">
{/if}
<span class="UserPhoto_tiny" style="background-image: url({$avater_path});"></span>
</a>
<a id="userlink-trigger" href="#">
{$_CONF['rows']['member_row']['username']}  <i class="usermenu fa fa-caret-down"></i>
</a>
<div id="userlink_menu" class="pkr-b">
<div class="PBB-WBS-Menu"></div>
<ul class="element_menu">
<li class="row2 elm">
{if {$avater_change}}
<a href="index.php?page=usercp&amp;control=1&amp;avatar=1&amp;main=1" title="{$lang['Change_avatar']}">
{else}
<a href="index.php?page=profile&amp;show=1&amp;id={$_CONF['rows']['member_row']['id']}" title="{$lang['view_profile']}">
{/if}
<span class="UserPhoto_Menu r-right" style="background-image: url({$avater_path});"></span>
</a>
<div class="view_profile l-left">
<b>{$username_style}</b>
<br />
<span class="user_title">{$_CONF['rows']['member_row']['user_title']}</span>
<br />
<br />
<span class="a_view_profile"><a href="index.php?page=profile&amp;show=1&amp;id={$_CONF['rows']['member_row']['id']}" title="{$lang['view_profile']}">{$lang['view_profile']}</a></span>
</div>
</li>
<li class="Menu_title"> {$lang['settings']} </li>
<li class="Menu_item"><a href="index.php?page=usercp&amp;control=1&amp;setting=1&amp;main=1" title="{$lang['usercp']}">{$lang['usercp']}</a></li>
<li class="Menu_item" data-menuitem="setting security"><a href="index.php?page=privacy&amp;infosecurity=1&amp;main=1" title="{$lang['account_security_settings']}">{$lang['account_security_settings']}</a></li>
<li class="Menu_item" data-menuitem="setting email"><a href="index.php?page=usercp&amp;control=1&amp;email=1&amp;main=1" title="{$lang['Change_email']}">{$lang['Change_email']}</a></li>
<li class="Menu_item" data-menuitem="show last your subjects"><a href="index.php?page=usercp&amp;options=1&amp;subject=1&amp;main=1" title="{$lang['Your_Subjects']}">{$lang['Your_Subjects']}</a></li>
<li class="Menu_item" data-menuitem="Attachments"><a href="index.php?page=usercp&amp;options=1&amp;attach=1&amp;main=1" title="{$lang['Your_Attachments']}">{$lang['Your_attach']}</a></li>
<li class="Menu_item Menu_sep">
<a href="index.php?page=logout&amp;index=1" onclick="return confirm('{$lang['confirm']}')" title="{$lang['logout']}">
<i class="Menu_item fa fa-sign-out"></i> {$lang['logout']} </li> </a>
</ul>
</div>
</li>


{/if}
</ul>
</nav>
</div>