{template}address_bar_part1{/template}
{$lang['statics']}
{template}address_bar_part2{/template}
<br />
<div class="mrgTable center_text_align" style="width: 99%;">
<table class="border pkr pkr-b f-details-s mrgTable wd14 clpc0">
<tr>
<td class="thead pkr pkr-b">
{$lang['Age_forum']}
</td>
</tr>
<tr>
<td class="row2 a-center">
{$StaticInfo['Age']}
{$lang['Day']}
</td>
</tr>
</table>
<table class="border pkr pkr-b f-details-s mrgTable wd14 clpc0">
<tr>
<td class="thead pkr pkr-b">
{$lang['Join_the_forum']}
</td>
</tr>
<tr>
<td class="row2 a-center">
{$StaticInfo['InstallDate']}
</td>
</tr>
</table>
<table class="border pkr pkr-b f-details-s mrgTable wd14 clpc0">
<tr>
<td class="thead pkr pkr-b">
{$lang['Number_Members']}
</td>
</tr>
<tr>
<td class="row2 a-center">
{$StaticInfo['GetMemberNumber']}
</td>
</tr>
</table>
<table class="border pkr pkr-b f-details-s mrgTable wd14 clpc0">
<tr>
<td class="thead pkr pkr-b">
{$lang['Number_Subjects']}
</td>
</tr>
<tr>
<td class="row2 a-center">
{$StaticInfo['GetSubjectNumber']}
</td>
</tr>
</table>
<table class="border pkr pkr-b f-details-s mrgTable wd14 clpc0">
<tr>
<td class="thead pkr pkr-b">
{$lang['Number_replys']}
</td>
</tr>
<tr>
<td class="row2 a-center">
{$StaticInfo['GetReplyNumber']}
</td>
</tr>
</table>
<table class="border pkr pkr-b f-details-s mrgTable wd14 clpc0">
<tr>
<td class="thead pkr pkr-b">
{$lang['Number_Members_active']}
</td>
</tr>
<tr>
<td class="row2 a-center">
{$StaticInfo['GetActiveMember']}
</td>
</tr>
</table>
<table class="border pkr pkr-b f-details-m mrgTable wd14 clpc0">
<tr>
<td class="thead pkr pkr-b">
{$lang['Number_forums']}
</td>
</tr>
<tr>
<td class="row2 a-center">
{$StaticInfo['GetSectionNumber']}
</td>
</tr>
</table>
</div>
<br />
<div class="mrgTable center_text_align" style="width: 99%;">
<table class="border pkr pkr-b f-details-m mrgTable wd33-3 clpc0">
<tr>
<td class="thead pkr pkr-b">
{$lang['Author_oldest_topic']}
</td>
</tr>
<tr>
<td class="row2 a-center">
<a href="index.php?page=profile&amp;show=1&amp;username={$StaticInfo['OldestSubjectWriter']}">{$StaticInfo['OldestSubjectWriter']}</a>
</td>
</tr>
</table>
<table class="border pkr pkr-b f-details-m mrgTable wd33-3 clpc0">
<tr>
<td class="thead pkr pkr-b">
{$lang['Author_Newer_topic']}
</td>
</tr>
<tr>
<td class="row2 a-center">
<a href="index.php?page=profile&amp;show=1&amp;username={$StaticInfo['NewerSubjectWriter']}">{$StaticInfo['NewerSubjectWriter']}</a>
</td>
</tr>
</table>
<table class="border pkr pkr-b f-details-m mrgTable wd33-3 clpc0">
<tr>
<td class="thead pkr pkr-b">
{$lang['topics_replies_author']}
</td>
</tr>
<tr>
<td class="row2 a-center">
<a href="index.php?page=profile&amp;show=1&amp;username={$StaticInfo['MostSubjectWriter']}">{$StaticInfo['MostSubjectWriter']}</a>
</td>
</tr>
</table>
</div>
<br />
<table class="border pkr pkr-b f-details-l mrgTable wd33-3 clpc0 a-center">
<tr>
<td class="thead pkr pkr-b wd50" colspan="2">
{$lang['More_posts_by_members']}
</td>
</tr>
{Des::while}{TopTenList}
<tr>
<td class="row2 a-center">
<a href="index.php?page=profile&amp;show=1&amp;id={$TopTenList['id']}">{$TopTenList['username']}</a>
</td>
<td class="row2 a-center">
{$TopTenList['posts']}
</td>
</tr>
{/Des::while}
</table>
<br />
<table class="border pkr pkr-b f-details-l mrgTable wd50 clpc0 a-center">
<tr>
<td class="thead pkr pkr-b wd50" colspan="2">
{$lang['More_Topic_Replies']}
</td>
</tr>
<tr>
<td class="row2">
{$lang['subject_title']}
</td>
<td class="row2">
{$lang['sort_reply_number']}
</td>
</tr>
{Des::while}{TopSubject}
<tr>
<td class="row2">
<a href="index.php?page=topic&amp;show=1&amp;id={$TopSubject['id']}">{$TopSubject['title']}</a>
</td>
<td class="row2">
{$TopSubject['reply_number']}
</td>
</tr>
{/Des::while}
</table>
<br />
<table class="border pkr pkr-b f-details-l mrgTable wd50 clpc0 a-center">
<tr>
<td class="thead pkr pkr-b wd50" colspan="2">
{$lang['The_most_visited_topics']}
</td>
</tr>
<tr>
<td class="row2">
{$lang['subject_title']}
</td>
<td class="row2">
{$lang['num_visitors']}
</td>
</tr>
{Des::while}{TopSubjectVisitor}
<tr>
<td class="row2">
<a href="index.php?page=topic&amp;show=1&amp;id={$TopSubjectVisitor['id']}">{$TopSubjectVisitor['title']}</a>
</td>
<td class="row2">
{$TopSubjectVisitor['visitor']}
</td>
</tr>
{/Des::while}
</table>
<br />
{template}jump_forums_list{/template}
<br />
<br />
<br />
