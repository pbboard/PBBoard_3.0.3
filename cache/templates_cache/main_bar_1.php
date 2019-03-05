<div id="primary_nav" class="pkr-obj pkr-b">
<div class="l-left">
<ul>
<!-- aiction_find_adidons_2 -->
<li id="color_options">
<span title="{$lang['choose_style_color']}" class="custom_theme">
<button class="btn-jscolor" onclick="document.getElementById('multi-color').jscolor.show()"></button>
<input id="multi-color" class="jscolor" onchange="update(this.jscolor)" />
</span>
<span title="{$lang['reset_original_color']}" class="remove_color">
<input id="colors-content" class="remove-picker reset" value="{$lang['reset_original_color']}" />
</span>
</li>
</ul>
</div>
<ul style="display:inline;">
{if !{$_CONF['member_permission']}}
<li class="{$latest_reply_page}">
<a href="index.php?page=latest_reply&amp;today=1">{$lang['latest_reply']}</a></li>
{/if}
<li class="{$main_page}">
<a href="index.php" title="Forum">{$lang['forum']}</a></li>
<!-- actikon_find_addokns_1 -->
{if {$_CONF['info_row']['active_portal']} == '1'}
<li class="{$portal_page}">
<a href="index.php?page=portal" title="{$lang['portal']}">
{$_CONF['info_row']['title_portal']}</a></li>
{/if}
{if {$_CONF['info_row']['active_calendar']} == '1'}
<li class="{$calendar_page}">
<a href="index.php?page=calendar&amp;show=1" title="calendar pkr">{$lang['Calendar']}</a></li>
{/if}

{if {$subject_special_nm} > '0'}
<li class="{$special_subject_page}">
<a href="index.php?page=special_subject&amp;index=1">{$lang['Special_Subject']}</a></li>
{/if}
<!-- acation_fidnd_adwdons_2 -->
{get_hook}main_bar_1{/get_hook}
</ul>
</div>
<div id="subnavigation">
<div class="l-left">
<ul>
{if {$_CONF['member_permission']}}
<li class="{$usercp_page}">
<a href="index.php?page=usercp&amp;index=1" title="{$lang['usercp']}">{$lang['usercp']}</a>
</li>
{/if}
</ul>
<!-- actiown_finwd_addons_6 -->
</div>
<ul>
<!-- action_find_addosans_1 -->
<li class="{$rules_page}">
<a href="index.php?page=misc&amp;rules=1&amp;show=1">{$lang['rules']}</a>
</li>
{if {$_CONF['info_row']['active_static']} == '1'}
<li class="{$static_page}">
<a href="index.php?page=static&amp;index=1">{$lang['static']}</a></li>

{/if}
{if {$_CONF['member_permission']}}
{else}
<li class="{$latest_reply_page}">
<a href="index.php?page=latest_reply&amp;today=1">{$lang['latest_reply']}</a></li>
{/if}
{if {$_CONF['group_info']['memberlist_allow']} == '1'}
<li class="{$member_list_page}">
<a href="index.php?page=member_list&amp;index=1&amp;show=1">{$lang['memberlist']}</a></li>
{/if}
{if {$_CONF['member_permission']}}
<li id="quick_options"><a id="usercptools-trigger" href="#">{$lang['quick_options']}
<span class="arrow_y">&#9660;</span></a>{template}usercptools{/template}</li>
{/if}
{if !{$No_PagesList}}
<li id="quick_pages"><a id="pages-trigger" href="#">{$lang['pages']}
<span class="arrow_y">&#9660;</span></a>{template}pages{/template}
</li>
{/if}
<!-- actioddn_find_addons_4 -->
{get_hook}main_bar_2{/get_hook}
</ul>
</div>
<div class="body_wrapper"></div>
<!-- action_find_adasdons_3 -->
<div class="pbb_content">
<div class="pbboard_body pkr-b">
<div class="pbb_main">
{template}info_bar{/template}