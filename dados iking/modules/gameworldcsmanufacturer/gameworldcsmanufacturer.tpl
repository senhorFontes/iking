<!-- CS Manufacturer module -->
<div class="manufacturerContainer">
	<div>
		<ul id="scroller">
		{foreach from=$manus item=manufacturer name=manufacturer_list}
			{if file_exists($ps_manu_img_dir|cat:$manufacturer.id_manufacturer|cat:'.jpg')}
			<li class="{if $smarty.foreach.product_list.first}first_item{elseif $smarty.foreach.product_list.last}last_item{/if}">
				<a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)}" title="{$manufacturer.name|escape:'htmlall':'UTF-8'}"><img src="{$img_manu_dir}{$manufacturer.id_manufacturer|escape:'htmlall':'UTF-8'}.jpg" alt="{$manufacturer.name|escape:'htmlall':'UTF-8'}" /></a>
			</li>
			{/if}
		{/foreach}
		</ul>
	</div>
</div>
<script type="text/javascript">
	$(window).load(function(){
		$("#scroller").simplyScroll({
        	auto: false,
			speed: 3
		});
	});
</script>
<!-- /CS Manufacturer module -->

