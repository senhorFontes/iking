<div class="block homecategoryfeature">
	{if count($categories) > 0}
		{foreach from=$categories item=category name=categories}
		<div class="block_color color_{$smarty.foreach.categories.iteration}">
			<h4><span>{$category->name|escape:'htmlall':'UTF-8'}</span></h4>
			<div class="block_content">
				{assign var='products' value=$category->getProducts((int)($cookie->id_lang),1,$nbr,null,null,false,true,true,$nbr)}
				{if $products}
				<ul>
				{foreach from=$products item=product name=homeFeaturedProducts}
					<li class="ajax_block_product {if $smarty.foreach.homeFeaturedProducts.first}first_item{elseif $smarty.foreach.homeFeaturedProducts.last}last_item{else}item{/if}">
						<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'small_default')}" alt="{$product.name|escape:html:'UTF-8'}" /></a>
						<div class="right">
							<h3><a href="{$product.link}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|escape:'htmlall':'UTF-8'}</a></h3>
							<span class="category_name">{$category->name|escape:'htmlall':'UTF-8'}</span>
							<div>
								{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
							</div>
						</div>
					</li>
				{/foreach}
				</ul>
				{/if}
			</div>
		</div>
		{/foreach}
	{/if}
</div>