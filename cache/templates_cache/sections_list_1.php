<div class="sections">
{if {$SHOW_SUB_SECTIONS}}
<!-- start_category-in_page_forum -->
<ul class="categorys pkr">
<li class="category forum_sub">
<span>{$lang['forum_sub']} : {$Section_Title}</span>
</li>
{/if}
{Des::foreach}{forums_list}{forum}
{if {$forum['parent']} == 0}
{if {$forum['sort']} != 1}
</ul></div>
<!-- end_categorys_one_by_one -->
{/if}
<!-- start_categorys_one_by_one -->
<script type="text/javascript">
$(document).ready(function()
{
var img = "collapseimage_{$forum['id']}";
var imgChange = document.getElementById(img);
if($.cookie("pbboard_collapse_forumid_{$forum['id']}") == "{$forum['id']}") {
$("#collapseimg_forumbit_{$forum['id']}").css('display', 'none');
imgChange.className = "collapsed";
};
});
</script>
<ul class="categorys pkr">
<li class="category">
<a class="CollapseIcon" href="#collapseforum_{$forum['id']}" onclick="return collapse_toggle('{$forum['id']}')" id="collapseforum_{$forum['id']}">
<span id="collapseimage_{$forum['id']}" class="expanded"></span>
</a>
<a href="index.php?page=forum&amp;show=1&amp;id={$forum['id']}">
<span>{$forum['title']}</span></a>
</li>
</ul>
<div id="collapseimg_forumbit_{$forum['id']}">
<ul class="categorys pkr">
{elseif {$forum['parent']} != 0}
<li class="sub_forums pkr-b">
<div class="forum-icon pkr-b">
{if {$forum['use_section_picture']} and {$forum['sectionpicture_type']}== 1}
<span class="section_picture" title="{$lang['section_picture']}"><img src="{$forum['section_picture']}" alt="{$lang['section_picture']}" /></span>
{else}
<span class="{$forum['forum_icon']} pkr" title="{$forum['forum_icon_alt']}"></span>
{/if}
</div>
<div class="forum-stats">
<div class="title_n"><a href="index.php?page=forum&amp;show=1&amp;id={$forum['id']}">
{$forum['title']}</a></div>
{if {$forum['use_section_picture']} and {$forum['sectionpicture_type']} == 2}
<div class="section_picture_dn_describe">
<span class="section_picture" title="{$forum['forum_icon_alt']}"><img src="{$forum['section_picture']}" alt="{$forum['forum_icon_alt']}" /></span>
</div>
{/if}
{if {$_CONF['info_row']['no_describe']} and {$forum['section_describe']} != ''}
<div class="describe">
{$forum['section_describe']}
</div>
{/if}
<div class="numrs">
<span class="subject_num subject_num_icon pkr-b" title="{$lang['subject_num']}">
{$lang['subject_num']} :<b>{$forum['subject_num']}</b>
</span>
<span class="reply_num reply_num_icon pkr-b" title="{$lang['reply_num']}">
{$lang['reply_num']} : <b>{$forum['reply_num']}</b>
</span>
{if {$forum['forum_online']}}
<span class="forum_online online_num_icon pkr-b" title="{$lang['Whos_Online']}">
( <b>{$forum['forum_online']}</b>
{$lang['viewer']})
</span>
{/if}
</div>
{if {$_CONF['info_row']['no_moderators']} and {$forum['moderators_list']}}
<div class="home-moderators-lain">
{$lang['moderators_list']} {$forum['moderators_list']}
</div>
{/if}
{if {$forum['is_sub']} and {$_CONF['info_row']['no_sub']}}
<div class="home-sub-forums-lain">
{$lang['forum_sub']}:
</div>
<div class="div-sub-forums-columns">
<ol class="home-sub-forums-columns">
{$forum['sub']}
</ol>
</div>
{/if}
{if {$forum['num_subjects_awaiting_approval']} >0 and {$forum['IsModeratorCheck']}}
<div class="awaiting_approval pkr-b">{$lang['subjects_review']}: <b>{$forum['num_subjects_awaiting_approval']}</b></div>
{/if}
{if {$forum['num_replys_awaiting_approval']} >0 and {$forum['IsModeratorCheck']}}
<div class="awaiting_approval pkr-b">{$lang['replys_review_num']}: <b>{$forum['num_replys_awaiting_approval']}</b>
{if {$align} == 'right'}
<a class="appssroveposts" href="index.php?page=search&amp;option=6&amp;review_reply=1&section={$forum['id']}&amp;sort_order=DESC" title="{$lang['approveposts']}"><i class="fa fa-arrow-circle-left pkr-c" title="{$lang['approveposts']}"></i> </a>
 {else}
<a class="appssroveposts" href="index.php?page=search&amp;option=6&amp;review_reply=1&section={$forum['id']}&amp;sort_order=DESC" title="{$lang['approveposts']}"><i class="fa fa-arrow-circle-right pkr-c" title="{$lang['approveposts']}"></i> </a>
{/if}
</div>
{/if}
</div>
<div class="forum-last-post pkr pkr-b">
{if {$forum['linksection']}}
<div class="no_post">{$lang['linkvisitor']} {$forum['linkvisitor']}</div>
{elseif {$forum['hide_subject']} and {$forum['ModeratorCheck']}}
<div class="no_post">{$lang['speciality']}</div>
{elseif {$forum['section_password']} and {$forum['ModeratorCheck']}}
<div class="no_post">{$lang['speciality']}</div>
{elseif {$forum['last_subject']} != ''}
{if {$_CONF['info_row']['allow_avatar']}}
<div class="UserPhoto_tiny_RCS pkr-b" title="{$lang['Picture']} {$forum['username']} {$lang['Personal']}">
<span class="User-Picture-forum-Home" style="background-image: url({$forum['writer_photo']});"></span>
</div>
{if {$align} == 'right'}
<div class="PBB-WBS borderRightColor" style="border-right-color: #82ACD8;"></div>
 {else}
<div class="PBB-WBS borderLeftColor" style="border-left-color: #82ACD8;"></div>
{/if}

{/if}
<div class="Info_last_post">
<div class="Info_last_Reply">
<script type="text/javascript">
$(document).ready(function() {
var iconImg = new Image();
iconImg.src="{$ForumAdress}{$forum['icon']}";
$(iconImg).one('load',function(){
iconWidth = iconImg.width;
iconHeight = iconImg.height;
$(".last_icon_{$forum['id']}").css('height', iconHeight);
$(".last_icon_{$forum['id']}").css('width', iconWidth);
$(".last_icon_{$forum['id']}").css('float', 'right');
$(".last_icon_{$forum['id']}").css('margin', '0');
$(".last_icon_{$forum['id']}").css('background', 'transparent url('+iconImg.src+') no-repeat scroll center center');
});
});
</script>
<i class="Iconchevron last_icon_{$forum['id']}"></i>:<a href="index.php?page=topic&amp;show=1&amp;id={$forum['last_subjectid']}" title="{$forum['last_subject_title']}">{$forum['last_subject']}</a></div>
<div class="NewsUser">{$lang['last_writer']}
{$forum['last_writer']}
</div>
<div class="NewsTime"><i class="IconNewsTime fa fa-history pkr-c"></i> {$forum['last_date_ago']} <span class="last_time_ago">{$forum['last_time_ago']}</span>
<a href="index.php?page=topic&amp;show=1&amp;id={$forum['last_subjectid']}&amp;count={$forum['last_berpage_nm']}#{$forum['last_reply']}" title="{$lang['Go_to_last_post']}">
{if {$align} == 'right'}
<i class="Iconchevron fa fa-arrow-circle-left pkr-c" title="{$lang['Go_to_last_post']}"></i>
 {else}
<i class="Iconchevron fa fa-arrow-circle-right pkr-c" title="{$lang['Go_to_last_post']}"></i>
{/if}
</a></div>
</div>
{else}
<div class="no_post">{$lang['no_post']}</div>
{/if}
</div>
</li>
{/if}
{/Des::foreach}
</ul>
{if !{$SHOW_SUB_SECTIONS}}
</div>
{/if}
<!-- End_All-categorys -->
</div>
<br />

