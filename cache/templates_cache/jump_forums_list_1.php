<table class="l-left wd50 brd1 clpc0">
<tr>
<td class="left_text_align wd50">
<select class='select_jump' name='url' onchange="window.location.href=this.options[this.selectedIndex].value">
<option selected="selected">{$lang['quick_jump_to']}</option>
<option value='index.php'>»{$lang['home']}</option>
{if $PowerBB->_GET['page'] == 'search'}
<option value='index.php?page=search&amp;index=1' selected='selected'>»{$lang['Search_Engine']}</option>
{else}
<option value='index.php?page=search&amp;index=1'>»{$lang['Search_Engine']}</option>
{/if}
{if $PowerBB->_GET['page'] == 'online'}
<option value='index.php?page=online&amp;show=1' selected='selected'>»{$lang['Whos_Online']}</option>
{else}
<option value='index.php?page=online&amp;show=1'>»{$lang['Whos_Online']}</option>
{/if}
{if $PowerBB->_GET['page'] == 'pm_list'}
<option value='index.php?page=pm_list&amp;list=1&amp;folder=inbox' selected='selected'>»{$lang['Private_Messages']}</option>
{else}
<option value='index.php?page=pm_list&amp;list=1&amp;folder=inbox'>»{$lang['Private_Messages']}</option>
{/if}
{if $PowerBB->_GET['page'] == 'member_list'}
<option value='index.php?page=member_list&amp;index=1&amp;show=1' selected='selected'>»{$lang['members']}</option>
{else}
<option value='index.php?page=member_list&amp;index=1&amp;show=1'>»{$lang['members']}</option>
{/if}
{if $PowerBB->_GET['page'] == 'archive'}
<option value='index.php?page=archive' selected='selected'>»{$lang['archive']}</option>
{else}
<option value='index.php?page=archive'>»{$lang['archive']}</option>
{/if}
{if $PowerBB->_GET['page'] == 'calendar'}
<option value='index.php?page=calendar&amp;show=1' selected='selected'>»{$lang['Calendar']}</option>
{else}
<option value='index.php?page=calendar&amp;show=1'>»{$lang['Calendar']}</option>
{/if}
<option disabled='disabled'>-------------------------------</option>
{Des::foreach}{forumsy_list}{forumy}
<?php
if ($PowerBB->_GET['page'] == 'forum' && $PowerBB->_GET['show'] == 1 && $PowerBB->_GET['id'] == $forumy['id'])
{
$selected = ' selected="selected"';
}
else
{
$selected = "";
}
?>
{if {$forumy['parent']} == '0'}
<option value="index.php?page=forum&amp;show=1&amp;id={$forumy['id']}" <?php echo $selected; ?> class="darkfont">- {$forumy['title']}</option>
{else}
<option value="index.php?page=forum&amp;show=1&amp;id={$forumy['id']}" <?php echo $selected; ?>>-- {$forumy['title']}</option>
{if {$forumy['parent']} != 0}
{if {$forumy['linksection']} != '1'}
{if {$forumy['is_sub']}}
{$forumy['sub']}
{if {$forumy['is_sub_sub']}}
{$forumy['sub_sub']}
{/if}
{/if}
{/if}
{/if}
{/if}
{/Des::foreach}
</select>
&nbsp;
</td>
</tr>
</table>
<br />
<br />