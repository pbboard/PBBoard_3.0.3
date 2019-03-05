<script type='text/javascript'>
function ShowPollTable()
{
if ($("#poll_id").is(":checked"))
{
$("#poll_table").fadeIn();
}
else
{
$("#poll_table").fadeOut();
}
}
function AddMoreAnswers(x)
{

x += 1;
var answers_max = 100;
$("#poll_answers_count_id").val(x);
$(".more_tr").hide();
$("#poll_question_answers").append('<tr align="center"><td class="row1 pkr">{$lang['answers_number']}' + x + '</td><td class="row1 pkr"><input name="answer[]" type="text" id="answer' + x + '" /></td></tr>');
$("#poll_question_answers").append('<tr align="center" class="more_tr"><td class="row1 pkr" colspan="2"><input type="button" name="more_answers" class="more_answers_class" value="{$lang['more_answers']}" /></td></tr>');

$("#answer" + x).focus();

$(".more_answers_class").click(function() { AddMoreAnswers(x) });

if (function() { AddMoreAnswers(x) })
{
$(".more_tr").stopPropagation();

}

}
function ShowTagsTable()
{
if ($("#tag_id").is(":checked"))
{
$("#tags_table").fadeIn();
}
else
{
$("#tags_table").fadeOut();
}
}
function AddMoreTags(x)
{
x += 1;

$(".more_tag_tr").hide();
$("#add_tags_table").append('<tr align="center"><td class="row1 pkr">{$lang['tag']}' + x + '</td><td class="row1 pkr"><input name="tags[]" type="text" id="tag' + x + '" size="40" /></td></tr>');
$("#add_tags_table").append('<tr align="center" class="more_tag_tr"><td class="row1 pkr" colspan="2"><input type="button" name="more_tags" class="more_tags_class" value="{$lang['add_more_tag']}" /></td></tr>');

$("#tag" + x).focus();

$(".more_tags_class").click(function() { AddMoreTags(x) });

if (function() { AddMoreTags(x) })
{
$(".more_tag_tr").stopPropagation();

}
}
function Ready()
{
$("#poll_table").hide();
$("#poll_id").click(ShowPollTable);
$(".more_answers_class").click(function() { AddMoreAnswers(2) });

$("#tags_table").hide();
$("#tag_id").click(ShowTagsTable);
$(".more_tags_class").click(function() { AddMoreTags(1) });

}
function displaylimit(thename, theid, thelimit){
var theform=theid!=""? document.getElementById(theid) : thename;
var limit_text='<font class="smallfont">{$lang['number_of_characters_remaining']} <span style="font-weight:900;" id="'+theform.toString()+'">'+thelimit+'</span></font>';
if (document.all||ns6)
document.write(limit_text)
if (document.all){
eval(theform).onkeypress=function(){ return restrictinput(thelimit,event,theform)}
eval(theform).onkeyup=function(){ countlimit(thelimit,event,theform)}
}
else if (ns6){
document.body.addEventListener('keypress', function(event) { restrictinput(thelimit,event,theform) }, true);
document.body.addEventListener('keyup', function(event) { countlimit(thelimit,event,theform) }, true);
}
}

$(document).ready(Ready);
</script>
{template}address_bar_part1{/template}
<a href="index.php?page=forum&amp;show=1&amp;id={$id}{$password}">
{$section_info['title']}
</a>
<div class="btn-nav"></div>
{$lang['add_new_topic']}
{template}address_bar_part2{/template}
{template}preview{/template}<form name="topic" method="post" enctype="multipart/form-data" action="index.php?page=new_topic&amp;start=1&amp;id={$id}{$password}"><input name="poll_answers_count" id="poll_answers_count_id" type="hidden" value="2">
<table class="border pkr-b wd98 brd1 clpc0 a-center">
<tr>
<td class="tcat pkr" colspan="2">
{$lang['text_Topic']}
</td>
</tr>
<tr class="center_text_align">
<td class="row1 pkr right_text_align">
<!-- action_find_addons_1 -->
{if {$section_info['active_prefix_subject']}}
{$lang['prefix_subject']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
$excludedWords = array();
$doubleAr = $PowerBB->_CONF['template']['section_info']['prefix_subject'];
$doubleAr = str_replace($PowerBB->_CONF['template']['prefix_subject_prev'],'',$doubleAr);
$prefix_subject = preg_split("#[n]+#", $doubleAr, -1, PREG_SPLIT_NO_EMPTY);
$excludedWords = array_merge($excludedWords, $prefix_subject);
?>
<select name="prefix_subject" style="font-weight: bold">
<option value="">{$lang['no_prefix_subject']}</option>
{if {$prefix_subject_prev} !=''}
<option value="{$prefix_subject_prev}" selected='selected'>{$prefix_subject_prev}</option>
{/if}
<?php
for ($x = 0; $x < @count($excludedWords); $x++)
{
$excludedWords[$x] = @trim($excludedWords[$x]);
$excludedWords[$x] = "<option value=".$excludedWords[$x].">".$excludedWords[$x]."</option>";echo $excludedWords[$x];
}
echo '</select>';
?>
<br />
<br />
{/if}
{$lang['subject_title']} :
<input name="title" id="title" type="text" value="{$title_prev}" size="40"
onKeyDown="countChar(this)"
onKeyUp="countChar(this)"
onFocus="countChar(this)" />
<script type='text/javascript'>
function countChar(val) {
var len = val.value.length;
if (len >= 100) {
val.value = val.value.substring(0, {$_CONF['info_row']['post_title_max']});
} else {
$('#charNum').text({$_CONF['info_row']['post_title_max']} - len);
}
};
</script>
{if {$_CONF['info_row']['subject_describe_show']} == 1}
&nbsp;&nbsp;
{$lang['subject_describe']}:
<input name="describe" type="text" value="{$describe_prev}" size="40" />
<span class="smallfont">{$lang['Optional']}</span>
{/if}
<br />
</td>
</tr>
<!-- action_find_addons_2 -->
{if !{$_CONF['member_permission']}}
<tr>
<td class="row1 pkr" colspan="2">
{$lang['Your_name']} <input name="guest_name" id="guest_name" type="text" size="35"/>
</td>
</tr>
{if {$_CONF['info_row']['captcha_type']} == 'captcha_IMG'}
<tr class="center_text_align">
<td class="row1 pkr" colspan="2">
{$lang['Image_Verification']}:&nbsp;&nbsp;
<span style="font-size:10px;">{$lang['Verification']}</span>
<br />
<input name="code" id="code_confirm" type="text" size="7"/>&nbsp;&nbsp;<img alt="" id="turing" src="includes/captcha.php" width="87" height="17" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="updateImg();">{$lang['Image_replacement']}</a>
<script type='text/javascript'>
var clicks = 0;function updateImg()
{
clicks++
var doc = document.getElementById("turing");
doc.src = "includes/captcha.php" + "?act=" + clicks;
}
</script>
</td>
</tr>
{else}<tr>
<td class="row1 pkr" colspan="2">
{$lang['random_question']}
<span class="smallfont" dir="{$_CONF['info_row']['content_dir']}"
title="{$lang['question']}">
{$question}
<u title="{$lang['correct_answer']}">
{$answer}</u></span>
<input name="code" id="code_confirm" type="text" size="40" dir="{$_CONF['info_row']['content_dir']}"/>
<input value="{$answer}" type="hidden" name="code_answer" id="code_answer" />
</td>
</tr>{/if}
{/if}<tr>
<td class="row1 pkr" colspan="2"><div id="none">
<div class="center_text_align">
<table class="border pkr-b wd100 brd0 clpc0">
<tr>
<td class="editortoolbar va-t">
{template}editor_js{/template}
<!-- action_find_addons_3 -->
</td>
</tr>
<tr>
<td class="editoricon va-t" colspan="2">
{template}iconbox{/template}
</td>
</tr>
<!-- action_find_addons_5 -->
</table></div>
</div>
</td>
</tr>
<?php if ($PowerBB->_CONF['template']['upload_attach'] and $PowerBB->_CONF['template']['_CONF']['group_info']['upload_attach'] == '1') {  ?>
<tr>
<td class="row1 pkr center_text_align" colspan="2">
<a id="add_attach" class="Button_secondary" href="{$ForumAdress}"
onclick="window.open('index.php?page=attachments&amp;add_attach=1&amp;section={$section_info['id']}', 'add_attach','left=20,top=20,width=500,height=600,toolbar=1,resizable=0'); return false;">
<i class="fa fa-paperclip"></i> {$lang['Add_attachments']}
</a>
</td>
</tr>
{/if}
<?php
if ($PowerBB->_CONF['template']['write_poll'] == '1' and $PowerBB->_CONF['template']['_CONF']['group_info']['write_poll'] == '1') {  ?>
<tr>
<td class="row1 pkr" colspan="2">
<input name="poll" id="poll_id" type="checkbox" /> <label for="poll_id">{$lang['add_polls']}</a>
</td>
</tr>
{/if}
<tr>
<td class="row1 pkr" colspan="2">
<input name="tag" id="tag_id" type="checkbox" /> <label for="tag_id">{$lang['ADD_tags']}</a>
</td>
</tr>
{if {$_CONF['info_row']['allowed_emailed']} == '1' AND {$_CONF['member_permission']}}
<tr>
<td class="row1 pkr" colspan="2">
<input name="emailed" id="emailed_id" type="checkbox" /> <label for="emailed_id">{$lang['Enabled_to_be_notified_by_the_existence_of_new_replies']}</a>
</td>
</tr>
{/if}
<tr>
<td class="row1 pkr center_text_align va-t" colspan="2">
<input class="button pkr-obj button_b" name="insert" type="submit" value="{$lang['Count']}" />
<input class="button pkr-obj button_b" type="submit" value="{$lang['Preview']}" name="preview" />
</td>
</tr>
</table><br />{if {$Admin}}
<table class="border pkr-b wd98 brd1 clpc0 a-center">
<tr>
<td class="tcat pkr" colspan="2">
{$lang['Management_options_subject']}
</td>
</tr>
<!-- action_find_addons_6 -->
<tr>
<td class="row1 pkr" colspan="2">
<input name="stick" id="stick_id" type="checkbox" /> <label for="stick_id">{$lang['Sticky_Topic']}</label>
<br />
<input name="close" id="close_id" type="checkbox" /> <label for="close_id">{$lang['locked_Topic']}</label>
</td>
</tr>
</table>
<br />
{/if}<div id="poll_table">
{template}add_poll_table{/template}
</div>
<div id="tags_table">
{template}add_tags_table{/template}
</div>
<br />
</form>
<br />
<br />
<!-- action_find_addons_7 -->
