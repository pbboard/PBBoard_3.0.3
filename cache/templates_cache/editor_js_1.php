<script type="text/javascript" src="{$ForumAdress}look/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.env.isCompatible = true;
var l_youtube="{$lang['l_youtube']}";
var l_phpcode="{$lang['l_phpcode']}";
var l_quote="{$lang['l_quote']}";
CKEDITOR.editorConfig = function( config )
{
config.language = "{$_CONF['info_row']['content_language']}";
config.smiley_path= 'look/images/smiles/';
config.contentsLangDirection = "{$_CONF['info_row']['content_dir']}";
config.defaultLanguage = "{$_CONF['info_row']['content_language']}";
config.jwplayerLanguage = "{$_CONF['info_row']['content_language']}";
config.extraPlugins = 'code,quote,youtube,jwplayer';
config.removePlugins = 'contextmenu,liststyle,tabletools';
config.enterMode = CKEDITOR.ENTER_BR;
config.pasteFilter = null;
config.contentsCss = '{$ForumAdress}look/fonts/fonts.css';
config.font_names = 'Droid Arabic Kufi;' + config.font_names;
config.font_defaultLabel = 'Droid Arabic Kufi';
config.fontSize_defaultLabel = '15px';
};
</script>

<script type="text/javascript">function AddSmileyIcon(text){
CKEDITOR.instances.text.insertHtml(' <img alt="" src="'+ text +'" />').value += text;
}
function AddText(text){
CKEDITOR.instances.text.insertHtml(text).value += text;
}
function Addthrough(text,filename){
CKEDITOR.instances.text.insertHtml(' <a href="'+ text +'" />'+ filename +'</a>');
}</script><script type="text/javascript" src="{$ForumAdress}includes/js/IEprompt.js"></script>

<script type='text/javascript'>

{if {$_CONF['info_row']['content_language']} != 'ar'}
function iePrompt(str){
var settings = "dialogWidth: 290px; dialogHeight: 160px; center: yes; edge: raised; scroll: no; status: no;";
return window.showModalDialog("includes/js/iePrompt_en.htm", str, settings);
}
{else}
function iePrompt(str){
var settings = "dialogWidth: 290px; dialogHeight: 160px; center: yes; edge: raised; scroll: no; status: no;";
return window.showModalDialog("includes/js/iePrompt_ar.htm", str, settings);
}
{/if}
function cbPrompt(str){
try {
if(window.showModalDialog){ return iePrompt(str); }
else { return prompt(str, ""); }
} catch (e) {
return iePrompt(str);
}
}
</script>
<!-- table --><div style="width:100%; border-collapse: collapse;" class="table">
<dl>
<dt></dt>
<dd class="v-align-t ck-editor">
<textarea cols="50" id="text" name="text" rows="5">
{$text}
{$send_text}
{$GetReplyInfo}
{$GetSubjectInfo}
{$prev}
{$quote}
{$Sign}
{template}multi_quote{/template}
</textarea>
</dd>
<dd class="smiles-bbcode">
<?php if($PowerBB->_CONF['template']['while']['Custom_bbcodesList']){?>
<fieldset class="pkr-b">
<legend class="pkr-b"><span class="smallfont" dir="rtl">{$lang['custom_bbcodes_mor']} BBcode</span></legend>
{Des::while}{Custom_bbcodesList}
{if {$Custom_bbcodesList['bbcode_useoption']} == '1'}
<img alt="" src="{$Custom_bbcodesList['bbcode_switch']}" onclick="Custom_bbcodes_option('{$Custom_bbcodesList['bbcode_tag']}');" onmouseover="overIcon(this)" onmouseout="outIcon(this)" title="{$Custom_bbcodesList['bbcode_desc']}" class="editorbutton brd0" />
{else}
<img alt="" src="{$Custom_bbcodesList['bbcode_switch']}" onclick="Custom_bbcodes('{$Custom_bbcodesList['bbcode_tag']}');" title="{$Custom_bbcodesList['bbcode_desc']}" class="editorbutton brd0" />
{/if}
<script type='text/javascript'>
function getSelectedHtml(editor)
{
var selection = editor.getSelection();
if( selection )
{
var bookmarks = selection.createBookmarks(),
range = selection.getRanges()[ 0 ],
fragment = range.clone().cloneContents();
selection.selectBookmarks( bookmarks );
var retval = "",
childList = fragment.getChildren(),
childCount = childList.count();
for ( var i = 0; i < childCount; i++ )
{
var child = childList.getItem( i );
retval += ( child.getOuterHtml?
child.getOuterHtml() : child.getText() );
}
return retval;
}
};
function Custom_bbcodes(bbcode_tag){
var editor = CKEDITOR.instances.text;
editor.insertHtml('['+bbcode_tag+']' + getSelectedHtml(editor) + '[/'+bbcode_tag+']');
}
function Custom_bbcodes_option(bbcode_tag,option){
var option = cbPrompt(bbcode_tag, '');
if(option){
var editor = CKEDITOR.instances.text;
editor.insertHtml('['+bbcode_tag+'='+option+']' + getSelectedHtml(editor) + '[/'+bbcode_tag+']');
}
}
</script>
{/Des::while}
</fieldset>
{/if}
<fieldset class="pkr-b">
<legend class="pkr-b">{$lang['smiles']}</legend>
<?php $t=0;	?>
<table class="wd100 brd0 clp0 clpc1">
<tr class="va-t">
{Des::while}{SmileRows}
<?php
if($t== $PowerBB->_CONF['template']['_CONF']['info_row']['smil_columns_number']){
$t=0;
echo "</tr><tr>";
}?>
<td class="wd10">
<a href="javascript:void(0)">
<img src="{$SmileRows['smile_path']}" OnClick="AddSmileyIcon('{$SmileRows['smile_path']}');" alt="{$SmileRows['smile_path']}" class="brd0" />
</a>
</td>
<?php $t=$t+1;?>
{/Des::while}
</tr>
</table>
<div class="smallfont center_text_align">
<a href="javascript:void(0)" OnClick="javascript:window.open('index.php?page=smile&all=1','Legends','width=250,height=550,resizable=yes,scrollbars=yes')">
<strong><u>{$lang['All_Smiles']}</u></strong>
<img class="brd0" onClick="cmd_allsmiles()" alt="{$lang['All_Smiles']}" src="{$image_path}/menu_open.gif" />
</a>
</div>
</fieldset>
</dd>
</dl>
</div><!-- /table -->
<script type="text/javascript">CKEDITOR.replace('text',
{
toolbar :
[
['RemoveFormat'],
['Maximize', 'NewPage'],
['Paste','Copy','mode', 'document', 'doctools'],
['Font','FontSize','Styles','Format'],
['Undo','Redo'],
'/',
['Bold', 'Italic','Underline','Strike'],
['JustifyRight','JustifyCenter','JustifyLeft','JustifyBlock'],
['TextColor','BGColor'],
['SelectAll'],
['HorizontalRule'],
['NumberedList','BulletedList'],
['Find','Replace','Preview', 'Print'],
'/',
['BidiRtl','BidiLtr'],
['Flash','-','Image','-', 'Smiley','-','jwplayer','youtube','Iframe'],
['Link', 'Unlink'],
['Quote','Code'],
['Table','Templates','PasteFromWord'],

['Superscript','Subscript'],
],
smiley_images :
[
{Des::while}{SmlList}<?php $PowerBB->_CONF['template']['while']['SmlList'][$this->x_loop]['smile_path'] = str_replace("look/images/smiles/", "", $PowerBB->_CONF['template']['while']['SmlList'][$this->x_loop]['smile_path']); ?>'{$SmlList['smile_path']}', {/Des::while}
],
smiley_descriptions :
[
{Des::while}{SmlList}<?php $PowerBB->_CONF['template']['while']['SmlList'][$this->x_loop]['smile_path'] = str_replace("look/images/smiles/", "", $PowerBB->_CONF['template']['while']['SmlList'][$this->x_loop]['smile_path']); ?><?php $PowerBB->_CONF['template']['while']['SmlList'][$this->x_loop]['smile_path'] = str_replace(".gif", "", $PowerBB->_CONF['template']['while']['SmlList'][$this->x_loop]['smile_path']); ?>'{$SmlList['smile_path']}', {/Des::while}
]
} );</script>
