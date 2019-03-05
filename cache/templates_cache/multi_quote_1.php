{if {$mqtids}}
<?php
$mqtids = $PowerBB->_CONF['template']['mqtids'];
$subjectids = $PowerBB->_CONF['template']['subject_info']['id'];if (strstr($mqtids,$PowerBB->_CONF['template']['subject_info']['id']))
{
$PowerBB->_CONF['template']['subject_info']['text'] = $PowerBB->Powerparse->censor_words($PowerBB->_CONF['template']['subject_info']['text']);
$censorwords = preg_split('#[ 
	]+#', $PowerBB->_CONF['info_row']['censorwords'], -1, PREG_SPLIT_NO_EMPTY);
$PowerBB->_CONF['template']['subject_info']['text'] = str_ireplace($censorwords,'**', $PowerBB->_CONF['template']['subject_info']['text']);$quote_subject_info = '[quote=' . $PowerBB->_CONF['template']['subject_info']['writer'] . ']' . $PowerBB->_CONF['template']['subject_info']['text'] . '[/quote]';
echo $quote_subject_info."
";
}
$QuoteArr = $PowerBB->DB->sql_query("SELECT id,text,writer   FROM " . $PowerBB->table['reply'] . " WHERE ID IN($mqtids) and subject_id ='$subjectids' ");
while ($QuoteList = $PowerBB->DB->sql_fetch_array($QuoteArr))
{		$QuoteList['text'] = $PowerBB->Powerparse->censor_words($QuoteList['text']);
$censorwords = preg_split('#[ 
	]+#', $PowerBB->_CONF['info_row']['censorwords'], -1, PREG_SPLIT_NO_EMPTY);
$QuoteList['text'] = str_ireplace($censorwords,'**', $QuoteList['text']);
if ($QuoteList['id'] == $PowerBB->_CONF['template']['subject_info']['id'])
{
$quote_reply_info = "";
}
else
{
$quote_reply_info = '[quote=' . $QuoteList['writer'] . ']' . $QuoteList['text'] . '[/quote]';
}
echo $quote_reply_info."
";
}
?>
{/if}