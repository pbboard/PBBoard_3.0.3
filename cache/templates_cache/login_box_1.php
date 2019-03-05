{if !{$_CONF['member_permission']}}
<ul class="sidebar">
<li class="tcat pkr">
<span>{$lang['Login_mem']}</span>
</li>
<li class="row_sidebar pkr pkr-b">
<form method="post" action="index.php?page=login&amp;login=1">
<input class="username" type="text" name="username" placeholder="{$lang['username']}" size="27"/>
<input class="password" type="password" name="password" placeholder="{$lang['Login_mem']}" size="27"/>
<input class="button pkr-obj button_b" type="submit" value="{$lang['login']}" />
<label><input type="checkbox" name="temporary" value="on" class="fp1" checked="checked" />  {$lang['Temp_login']}</label>
</form>
<div class="login-links pkr pkr-b">
<div class="link-wrapper"><a href="index.php?page=register&amp;index=1">{$lang['register']}</a></div>
<div class="link-wrapper"><a href="index.php?page=forget&amp;index=1">{$lang['Lost_password']}</a></div>
<div class="link-wrapper"><a href="index.php?page=forget&amp;active_member=1&amp;send_active_code=1">{$lang['send_active_code']}</a></div>
</div>
</li>
</ul>
<br />
{/if}