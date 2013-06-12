<div class="block mytopseller">
	<h4 class="bestsellers">{l s='Best Sellers for' mod='gameworldtopseller'}</h4>
	<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
		<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
			<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
				<h4><a href="#tabs-1">{l s='All systems' mod='gameworldtopseller'}</a></h4></li>
			{foreach from=$categories item=category name=categories}
				<li class="ui-state-default ui-corner-top"><h4><a href="#tabs-{$smarty.foreach.categories.iteration+1}">{$category->name|escape:'htmlall':'UTF-8'}</a></h4></li>
			{/foreach}
		</ul>
		<div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
			<div class="block_content first_item">
			{if $best_seller}
				<ul>
				{foreach from=$best_seller item=product name=homeBestSellerProducts}
					<li class="ajax_block_product {if $smarty.foreach.homeBestSellerProducts.first}first_item{elseif $smarty.foreach.homeBestSellerProducts.last}last_item{else}item{/if}">
						<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')}" alt="{$product.name|escape:html:'UTF-8'}" /></a>
						<h3><a href="{$product.link}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:36:'...'|escape:'htmlall':'UTF-8'}</a></h3>
						<span class="category_name">{$product.category|escape:'htmlall':'UTF-8'}</span>
						<div>
							{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
						</div>
					</li>
				{/foreach}
				</ul>
			{else}
				<p style="margin: 20px;">{l s='No best sellers at this time' mod='gameworldtopseller'}</p>
			{/if}
			</div>
		</div>
		{if count($categories) > 0}
			{foreach from=$categories item=category name=categories}
				<div id="tabs-{$smarty.foreach.categories.iteration+1}" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
					<div class="block_content {if $smarty.foreach.categories.last}last_item{/if}">
						{if $category->topseller}
						<ul>
						{foreach from=$category->topseller item=product name=homeBestSellerProducts}
							<li class="ajax_block_product {if $smarty.foreach.homeBestSellerProducts.first}first_item{elseif $smarty.foreach.homeBestSellerProducts.last}last_item{else}item{/if}">
								<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')}" alt="{$product.name|escape:html:'UTF-8'}" /></a>
								<h3><a href="{$product.link}" title="{$product.name|truncate:32:'...'|escape:'htmlall':'UTF-8'}">{$product.name|escape:'htmlall':'UTF-8'}</a></h3>
								<span class="category_name">{$category->name|escape:'htmlall':'UTF-8'}</span>
								<div>
									{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
								</div>
							</li>
						{/foreach}
						</ul>
						{else}
							<p style="margin: 20px;">{l s='No best sellers at this time' mod='gameworldtopseller'}</p>
						{/if}
					</div>
				</div>
			{/foreach}
		{/if}
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$('#tabs').tabs({ fx: { opacity: 'toggle', duration:'slow'} });    
	});
</script>