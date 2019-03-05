<title> {$lang['Your_Options']} -
{$_CONF['info_row']['title']}</title>{template}address_bar_part1{/template}
<a href="index.php?page=usercp&amp;index=1">{$lang['User_Control_Panel']}</a>
<div class="btn-nav"></div>
{$lang['Your_Options']}
{template}address_bar_part2{/template}
<!-- table --><div style="width:98%;border-collapse: collapse;margin: auto;" class="table">
<dl>
<dt></dt>
<dd class="center_text_align usercp_left">
<form name="info" method="post" action="index.php?page=usercp&amp;control=1&amp;setting=1&amp;start=1">
<div class="center_text_align">
<table class="border pkr pkr-b wd100 brd1 clpc0">
<tr>
<td class="tcat pkr" colspan="2">
{$lang['Your_Options']}
</td>
</tr>
<!-- action_find_addons_1 -->
<tr>
<td class="row1 pkr wd30">
{$lang['Style']}
</td>
<td class="row1 pkr wd30">
<select name="style">
{Des::while}{StyleList}
<option value="{$StyleList['id']}" {if {$StyleList['id']} == {$_CONF['rows']['style']['id']}}selected="selected" style="background : #EEEEEE"{/if}>{$StyleList['style_title']}</option>
{/Des::while}
</select>
</td>
</tr>
<tr>
<td class="row1 pkr wd30">
{$lang['Lang']}
</td>
<td class="row1 pkr wd30">
<select name="lang">
{Des::while}{LangList}
<option value="{$LangList['id']}" {if {$LangList['id']} == {$member_lang}}selected="selected" style="background : #EEEEEE"{/if}>{$LangList['lang_title']}</option>
{/Des::while}
</select>
</td>
</tr>
<tr>
<td class="row1 pkr wd30">
{$lang['Invisible_browsing']}
</td>
<td class="row1 pkr wd30">
{if {$_CONF['group_info']['hide_allow']} == 1}
<select name="hide_online" size="1">
{if {$_CONF['rows']['member_row']['hide_online']} == 0}
<option value="1">{$lang['Yes']}</option>
<option selected="selected" value="0">{$lang['No']}</option>
{else}
<option selected="selected" value="1">{$lang['Yes']}</option>
<option value="0">{$lang['No']}</option>
{/if}
</select>
{else}
{$lang['Not_available']}
{/if}
</td>
</tr>
<tr>
<td class="row1 pkr wd30">
{$lang['Time']}
</td>
<td class="row1 pkr wd30">
<select size="1" name="user_time" dir="ltr">
<option selected="selected" value="{$member['user_time']}">{$member['user_time']}</option>
<option value="0">0</option>
<option value="+1">+1</option>
<option value="+2">+2</option>
<option value="+3">+3</option>
<option value="+4">+4</option>
<option value="+5">+5</option>
<option value="+6">+6</option>
<option value="+7">+7</option>
<option value="+8">+8</option>
<option value="+9">+9</option>
<option value="+10">+10</option>
<option value="+11">+11</option>
<option value="+12">+12</option>
<option value="+13">+13</option>
<option value="-1">-1</option>
<option value="-2">-2</option>
<option value="-3">-3</option>
<option value="-4">-4</option>
<option value="-5">-5</option>
<option value="-6">-6</option>
<option value="-7">-7</option>
<option value="-8">-8</option>
<option value="-9">-9</option>
<option value="-10">-10</option>
<option value="-11">-11</option>
<option value="-12">-12</option>
</select>GMT
</td>
</tr>
<tr>
<td class="row1 pkr wd30">
{$lang['Allow_members_contact_you_by_mail']}
</td>
<td class="row1 pkr wd30">
<select name="send_allow" size="1">
{if {$_CONF['rows']['member_row']['send_allow']} == 0}
<option value="1">{$lang['Yes']}</option>
<option selected="selected" value="0">{$lang['No']}</option>
{else}
<option selected="selected" value="1">{$lang['Yes']}</option>
<option value="0">{$lang['No']}</option>
{/if}
</select>
</td>
</tr>
<tr>
<td class="row1 pkr wd30">
{$lang['Receive_e-mail_notification_of_the_existence_of_a_new_private_message']}
</td>
<td class="row1 pkr wd30">
<select name="pm_emailed" size="1">
{if {$_CONF['rows']['member_row']['pm_emailed']} == 0}
<option value="1">{$lang['Yes']}</option>
<option selected="selected" value="0">{$lang['No']}</option>
{else}
<option selected="selected" value="1">{$lang['Yes']}</option>
<option value="0">{$lang['No']}</option>
{/if}
</select>
</td>
</tr>
<tr>
<td class="row1 pkr wd30">
{$lang['Display_pm_window']}
</td>
<td class="row1 pkr wd30">
<select name="pm_window" size="1">
{if {$_CONF['rows']['member_row']['pm_window']} == 0}
<option value="1">{$lang['Yes']}</option>
<option selected="selected" value="0">{$lang['No']}</option>
{else}
<option selected="selected" value="1">{$lang['Yes']}</option>
<option value="0">{$lang['No']}</option>
{/if}
</select>
</td>
</tr>
<tr>
<td class="row1 pkr wd30">
{$lang['Do_you_want_to_share_with_other_messages_in_your_profile_visitors']}
</td>
<td class="row1 pkr wd30">
<select name="visitormessage" size="1">
{if {$_CONF['rows']['member_row']['visitormessage']} == 0}
<option value="1">{$lang['Yes']}</option>
<option selected="selected" value="0">{$lang['No']}</option>
{else}
<option selected="selected" value="1">{$lang['Yes']}</option>
<option value="0">{$lang['No']}</option>
{/if}
</select>
</td>
</tr>
<tr>
<td class="row1 pkr wd30">
{$lang['activate_who_view_your_profile']}
</td>
<td class="row1 pkr wd30">
<select name="profile_viewers" size="1">
{if {$_CONF['rows']['member_row']['profile_viewers']} == 0}
<option value="1">{$lang['Yes']}</option>
<option selected="selected" value="0">{$lang['No']}</option>
{else}
<option selected="selected" value="1">{$lang['Yes']}</option>
<option value="0">{$lang['No']}</option>
{/if}
</select>
</td>
</tr>
<!-- action_find_addons_2 -->
<tr>
<td class="row1 pkr center_text_align" colspan="2">
<input name="send" type="submit" value="{$lang['Count']}" /></td>
</tr>
</table>	</div>	<br />
</form>
</dd>
<dd class="usercp_right">{template}usercp_menu{/template}</dd>
</dl>
</div><!-- /table -->
<br />