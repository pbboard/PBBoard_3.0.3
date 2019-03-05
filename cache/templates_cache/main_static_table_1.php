	<!-- action_find_addons_1 -->
<div class="border_radius">
<ul class="rUlRow">
<li class="tcat pkr">
<i id="heading_up_static" class="CollapseIcon">
<img src="{$image_path}/expanded.png" alt="" />
</i>
<i id="heading_down_static" class="CollapseIcon">
<img src="{$image_path}/collapsed.png" alt="" />
</i>

<a href="index.php?page=static&amp;index=1">
<span>{$lang['static']}</span>
</a>
</li>
</ul>

<div id="active_static" class="border_forums pkr-b">
<ul class="rUlRow">
<li class="thead1 pkr pkr-b">
<strong>
{if {$_CONF['group_info']['onlinepage_allow']}}
<a href="index.php?page=online&amp;show=1">{$lang['online_naw']}</a>
{else}
{$lang['online_naw']}
{/if}
{$all_online_number}
: </strong> ({$MemberNumber})
{$lang['member_and']}
({$MemberNumberHide})
{$lang['member_hide_and']}
({$SpidersNumber})
{$lang['Spiders_and']}
({$GuestNumber})
{$lang['Guest']}
<!-- action_find_addons_2 -->
</li>
<!-- actiojkn_find_adddons_3 -->
{if {$view_usernamestyle}}
<li class="row2">
{Des::while}{GroupList}
{$GroupList['h_title']} ,
{/Des::while}
</li>
{/if}
<li class="row1 pkr usericon">
<div class="user-icon"></div>
<div class="states-num">
<span class="describe">
{$lang['max_online']}
<strong>({$max_online})</strong>
{$lang['date']}
{$max_online_date}<br />
</span>
<?php $x = 1; ?>
{Des::while}{OnlineList}
{if {$OnlineList['user_id']} == '-1'}
{if {$OnlineList['is_bot']}}
{$OnlineList['bot_name']} ,
{else}
<?php
echo $PowerBB->_CONF['template']['while']['OnlineList'][$this->x_loop]['username_style'] = str_ireplace('Guest',$PowerBB->_CONF['template']['lang']['Guest_'],$PowerBB->_CONF['template']['while']['OnlineList'][$this->x_loop]['username_style']).$x;
$x += 1;
?> ,
{/if}
{else}
{if {$OnlineList['username_style']} != 'Guest'}
<a href="index.php?page=profile&amp;show=1&amp;id={$OnlineList['user_id']}"
title="{$lang['time_logged_online']}{$OnlineList['logged']}">{$OnlineList['username_style']}</a>،
{/if}
{/if}
{/Des::while}
{if {$_CONF['info_row']['show_onlineguest']}}
{if {$MemberNumber} + {$GuestNumber} <= 0}
{if !{$_CONF['rows']['member_row']['hide_online']}}
{$lang['no_login_member']}
{/if}
{/if}
{else}
{if {$MemberNumber} <= 0}
{if !{$_CONF['rows']['member_row']['hide_online']}}
{$lang['no_login_member']}
{/if}
{/if}
{/if}
</div>
</li>
{if {$_CONF['info_row']['show_online_list_today']}}
<li class="thead1 pkr pkr-b">
{$lang['online_today']}
{$AllTodayNumber} :
({$TodayNumber})
{$lang['member_and']}
({$GuestTodayNumber})
{$lang['Guest']}
<!-- action_find_addons_4 -->
</li>
<li class="row1 pkr usericon">
<div class="user-icon"></div>
<div class="states-num">
{if {$TodayNumber} > 0}
{Des::while}{TodayList}
<a href="index.php?page=profile&amp;show=1&amp;id={$TodayList['user_id']}">{$TodayList['username_style']}</a> ،
{/Des::while}
{elseif {$TodayNumber} <= 0}
{$lang['no_visitor_member_today']}
{/if}
</div>
</li>
{/if}
{if {$_CONF['info_row']['active_static']}}
<li class="thead1 pkr pkr-b">
{$lang['static']}
&nbsp;{$_CONF['info_row']['title']}
</li>
<li class="row1 pkr statesicon">
<div class="states-icon"></div>
<div class="states-num">
{$lang['subjects_num']}
({$sn}),
{$lang['replys_num']}
({$rn}) ,
{$lang['members_num']}
({$mn}) <br />
{$lang['last_member_register']}
<a href="index.php?page=profile&amp;show=1&amp;id={$lm['id']}">{$lm['username_style_cache']}</a>
</div>
<!-- action_find_addons_5 -->
</li>
{/if}
</ul>
</div>
</div>
<br />
<!-- action_find_addons_6 -->
{template}statistics_list{/template}
<!-- action_find_addons_7 -->
