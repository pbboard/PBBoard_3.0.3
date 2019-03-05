{if {$write_subject}}
<a href="index.php?page=new_topic&amp;index=1&amp;id={$section_id}{$password}" class="pkr-obj button_b" id="buttons_link"
title="{$lang['add_new_topic']}">
{$lang['add_new_topic']}
</a>
{else}
<a class="buttons_no_link">
{$lang['you_cannot_start_a_new_topic']}
</a>
{/if}