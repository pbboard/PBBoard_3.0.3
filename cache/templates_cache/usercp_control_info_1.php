{template}address_bar_part1{/template}
<a href="index.php?page=usercp&amp;index=1">{$lang['User_Control_Panel']}</a>
<div class="btn-nav"></div>
{$lang['Your_Personal_Information']}
{template}address_bar_part2{/template}
<!-- table --><div style="width:98%;border-collapse: collapse;margin: auto;" class="table">
<dl>
<dt></dt>
<dd class="center_text_align usercp_left">
<form name="info" method="post" action="index.php?page=usercp&amp;control=1&amp;info=1&amp;start=1">
<div class="center_text_align">
<table class="border pkr pkr-b wd100 brd1 clpc0">
<tr>
<td class="tcat pkr center_text_align wd80" colspan="2">
{$lang['Your_Personal_Information']}
</td>
</tr>
{if {$_CONF['info_row']['active_birth_date']} == 1 }
<tr>
<td class="row1 pkr">
{$lang['Birth_date']}
</td>
<td class="row1 pkr">
{if {$_CONF['rows']['member_row']['bday_year']} == '' }
{template}birth_date{/template}
{else}
{template}usercp_birth_date{/template}
{/if}
</td>
</tr>
{/if}
<tr>
<td class="row1 pkr">
{$lang['user_country']}
</td>
<td class="row1 pkr wd60">
<input name="country" type="text" value="{$_CONF['rows']['member_row']['user_country']}" />
</td>
</tr>
<tr>
<td class="row1 pkr">
{$lang['user_gender']}
</td>
<td class="row1 pkr wd60">
<select name="gender" id="select_gender">
{if {$_CONF['rows']['member_row']['user_gender']} == m}
<option value="m" selected="selected">{$lang['gender_m']}</option>
<option value="f">{$lang['gender_f']}</option>
{else}
<option value="m">{$lang['gender_m']}</option>
<option value="f" selected="selected">{$lang['gender_f']}</option>
{/if}
</select>
</td>
</tr>
<tr>
<td class="row1 pkr">
{$lang['user_website']}
</td>
<td class="row1 pkr wd60">
{if {$_CONF['rows']['member_row']['user_website']} != ''}
<input name="website" type="text" class="max-input" value="{$_CONF['rows']['member_row']['user_website']}" size="40" dir="ltr" />
{else}
<input name="website" type="text" class="max-input" value="http://" size="40" dir="ltr" />
{/if}
</td>
</tr>
<tr>
<td class="row1 pkr">
{$lang['Information_about_you']}
</td>
<td class="row1 pkr wd60">
<textarea name="info" rows="1" id="info" class="max-input" cols="46">{$_CONF['rows']['member_row']['user_info']}</textarea>
<br />
</td>
</tr>
</table>
</div>
<br />
{if !{$No_extrafields}}
<div class="center_text_align">
<table class="border pkr pkr-b wd100 brd1 clpc0">
<tr>
<td class="tcat pkr center_text_align wd80" colspan="2">
{$lang['Additional_information']}
</td>
</tr>    {Des::while}{extrafields}
<tr>
<td class="row1 pkr">
{$extrafields['name']}
</td>
<td class="row1 pkr wd60">
{$extrafields['type_html']}
{if {$extrafields['required']} == 'yes'}
{$lang['required']}
{/if}
</td>
</tr>  {/Des::while}  </table>	</div>	<br />
{/if}
{if {$_CONF['info_row']['allow_apsent']}}
<div class="center_text_align">
<table class="border pkr pkr-b wd100 brd1 clpc0">
<tr>
<td class="tcat pkr center_text_align wd80" colspan="3">
{$lang['Absence_Settings']}
</td>
</tr>
<tr>
<td class="row1 pkr">
{$lang['Do_you_want_to_absence']}
</td>
<td class="row1 pkr wd60" colspan="2">
<select name="away" size="1">
{if {$_CONF['rows']['member_row']['away']} == 0}
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
<td class="row1 pkr">
{$lang['Reason_for_absence']}
</td>
<td class="row1 pkr wd80" colspan="2">
<textarea name="away_msg" rows="1" id="away_msg" class="max-input" cols="46">{$_CONF['rows']['member_row']['away_msg']}</textarea>
<br />
<span class="smallfont">{$lang['varchar']}</span></td>
</tr>
<tr>
<td class="row1 pkr wd80" colspan="3">
{$lang['you_naw']}
{if {$_CONF['rows']['member_row']['away']} == 0}
<strong>{$lang['No_Absent']}</strong>
{else}
<strong>{$lang['Absent']}</strong>
{/if}
</td>
</tr>
<tr>
<td class="row1 pkr wd80" colspan="3">
{$lang['absence_Note']}
</td>
</tr>
</table>
</div>
{/if}	<br />
<div class="center_text_align">
<table class="border pkr pkr-b wd100 brd1 clpc0">
<tr>
<td class="row1 pkr wd80 center_text_align">
<input name="send" type="submit" value="{$lang['Adopted_entries']}" />
</td>
</tr>
</table>
</div>
</form>
</dd>
<dd class="usercp_right">{template}usercp_menu{/template}</dd>
</dl>
</div><!-- /table -->
<br />