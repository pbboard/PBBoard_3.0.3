<title>{$lang['Send_PM']} -
{$_CONF['info_row']['title']}</title>
<div class="usercp_context">{if !{$address_bar_pm_send_SHOW}}
{template}address_bar_part1{/template}
<a href="index.php?page=pm_list&amp;list=1&amp;folder=inbox">{$lang['Private_Messages']}</a>
<div class="btn-nav"></div>
{$lang['Send_PM']}
{template}address_bar_part2{/template}
{/if}
<script language="javascript">
function AddMoreResiver(x)
{
x += 1;

var up_max = {$_CONF['info_row']['members_send_pm']};

if (x <= up_max)
{

$(".more_tr").hide();
$("#resivers").append('<tr><td class="row1 pkr rows_space">{$lang['Send_to1']} ' + x + '</td><td class="row1 pkr"><input name="to[]" class="to' + x + '" type="text" /></td></tr>');
$("#resivers").append('<tr class="more_tr"><td class="row1 pkr rows_space a-center" colspan="2"><input name="more_resiver" class="more_resiver_id" type="button" value="{$lang['Add_more_recipients']}" /></td></tr>');

$(".more_resiver_id").click(function() { AddMoreResiver(x) });

if (function() { AddMoreResiver(x) })
{
$(".more_tr").stopPropagation();

}

if (x == up_max)
{
$(".more_tr").hide();
}
}
}

function AddMoreAttach(x)
{
x += 1;

var up_max = {$_CONF['group_info']['upload_attach_num']};

if (x <= up_max)
{
$(".more_attach_tr").hide();
$("#add_attach_table").append('<tr class="a-center"><td class="row1 pkr rows_space">{$lang['File']}' + x + '</td><td class="row1 pkr rows_space"><input name="files[]" type="file" id="attach' + x + '" size="40" /></td></tr>');
$("#add_attach_table").append('<tr class="more_attach_tr a-center"><td class="row1 pkr rows_space" colspan="2"><input type="button" name="more_attach" class="more_attach_class" value="{$lang['Add_another_file']}" /></td></tr>');

$(".more_attach_class").click(function() { AddMoreAttach(x) });

if (function() { AddMoreAttach(x) })
{
$(".more_attach_tr").stopPropagation();
}

if (x == up_max)
{
$(".more_attach_tr").hide();
}
}
}

function ShowAttachTable()
{
if ($("#attach_id").is(":checked"))
{
$("#attach_table").fadeIn();
}
else
{
$("#attach_table").fadeOut();
}
}

function Ready()
{
$(".more_resiver_id").click(function() { AddMoreResiver(1) });
$("#attach_table").hide();
$("#attach_id").click(ShowAttachTable);
$(".more_attach_class").click(function() { AddMoreAttach(1) });
}

$(document).ready(Ready);

</script>
<form name="topic" method="post" enctype="multipart/form-data" action="index.php?page=pm_send&amp;send=1&amp;start=1">
<!-- table --><div style="width:98%;border-collapse: collapse;margin: auto;" class="table">
<dl>
<dt></dt>
<dd class="center_text_align usercp_left">
{if {$SHOW_MSG}}
<div class="center_text_align"><strong>{$MSG}</strong></div>
{/if}{if {$SHOW_MSG1}}
<div class="center_text_align">
<strong>{$to}
{$lang['Currently_absent']}
<br />
{$lang['Reason_for_absence']}
{$MSG1}</strong>
</div>
<br />
{/if}
<div class="center_text_align">
{template}pm_preview{/template}
<table id="resivers" class="border pkr pkr-b wd100 brd1 clpc0">
<tr>
<td class="tcat pkr" colspan="2">
{$lang['Data_transmission']}
</td>
</tr>
<tr>
<td class="row1 pkr rows_space">
{$lang['Send_to']}
</td>
<td class="row1 pkr">
<input name="to[]" value='{$to}' type="text" />
</td>
</tr>
<tr class="more_tr">
<td class="row1 pkr center_text_align" colspan="2">
<input name="more_resiver" class="more_resiver_id" type="button" value="{$lang['Add_more_recipients']}" />
</td>
</tr>
</table>
</div>
<br />
<div class="center_text_align">
<table class="border pkr pkr-b wd100 brd1 clpc0">
<tr>
<td class="tcat pkr" colspan="2">
{$lang['message']}
</td>
</tr>
</tr>
<td class="row1 pkr rows_space">
{$lang['PmTitle']}
</td>
<td class="row1 pkr">
<input name="title" value="{$send_title}" type="text" class="max-input" size="35" />
</td>
</tr>
<tr>
<td class="row1 pkr rows_space" colspan="2">
<div id="none">
<div class="center_text_align">
<table class="border pkr pkr-b wd98 brd1 clpc0" style="border-collapse: collapse">
<tr>
<td class="editortoolbar va-t">
{template}editor_js{/template}		</td>
</tr>
<tr>
<td class="editoricon va-t" colspan="2">
{template}iconbox{/template}
</td>
</tr>
</table>
</div>
</td>
</tr>
<?php if ($PowerBB->_CONF['template']['_CONF']['group_info']['upload_attach'] == '1') {  ?>
<tr>
<td class="row1 pkr center_text_align" colspan="2">
<a id="add_attach_pm" class="Button_secondary" href="{$ForumAdress}"
onclick="window.open('index.php?page=pm_send&amp;add_attach_pm=1', 'add_attach_pm','left=20,top=20,width=500,height=600,toolbar=1,resizable=0'); return false;">
<i class="fa fa-paperclip"></i> {$lang['Add_attachments']}
</a>
<br />
</td>
</tr>
{/if}
<tr>
<td class="row1 pkr center_text_align" colspan="2">
<input class="button pkr-obj button_b" name="insert" type="submit" value="{$lang['Count']}" />
<input class="button pkr-obj button_b" type="submit" value="{$lang['Preview']}" name="preview" />
</td>
</tr>
</table>		</div><br />
</dd>
<dd class="usercp_right">{template}usercp_menu{/template}</dd>
</dl>
</div><!-- /table -->
</form></div><br />