<fieldset class="pkr-b">
<legend class="pkr-b">{$lang['icons']}</legend>
<?php $t=0;	?>
<table class="wd80 brd0 clp0 a-center" style="border-collapse: collapse">
<tr class="va-t">
{Des::while}{IconRows}
<?php
if($t== $PowerBB->_CONF['template']['_CONF']['info_row']['icon_columns_number']){
$t=0;
echo "</tr><tr>";
}?>
<td class="smbox wd4">
{if {$SRInfo['icon']} == {$IconRows['smile_path']}}
<input type="radio" value="{$SRInfo['icon']}" checked="checked" name="icon" />
{else}
<input type="radio" value="{$IconRows['smile_path']}" name="icon" />
{/if}
<label for="fp{$IconRows['id']}">
<img src="{$IconRows['smile_path']}" alt="{$IconRows['smile_path']}" class="brd0" />
</label>
</td>
<?php $t=$t+1;?>
{/Des::while}
</tr>
<tr class="va-t">
<td class="smbox wd4" colspan="{$_CONF['info_row']['icon_columns_number']}">
{if {$SRInfo['icon']} == 'look/images/icons/i1.gif'}
<input type="radio" value="{$_CONF['info_row']['icon_path']}i1.gif" checked="checked" name="icon" />
{elseif {$checked} == 'no_icon'}
<input type="radio" value="{$_CONF['info_row']['icon_path']}i1.gif" checked="checked" name="icon" />
{elseif {$SubjectInfo['icon']} == ''}
<input type="radio" value="{$_CONF['info_row']['icon_path']}i1.gif" checked="checked" name="icon" />
{else}
<input type="radio" value="{$_CONF['info_row']['icon_path']}i1.gif" name="icon" />
{/if}
<label for="fp1">
<img src="look/images/icons/i1.gif" alt="{$lang['no_icon']}" class="brd0" />
</label>
</td>
</tr>
</table>
</fieldset>
