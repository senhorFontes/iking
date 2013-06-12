<!-- Static Block module -->
{foreach from=$block_list item=block}
		{$block->content[(int)$cookie->id_lang]}
{/foreach}
<!-- /Static block module -->












