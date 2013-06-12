{*
* 2007-2011 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 1.4 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- MODULE Block specials -->
<div class="block products_block exclusive blockspecials">
	<h4><a href="{$link->getPageLink('prices-drop.php')}" title="{l s='Specials' mod='blockspecials'}">{l s='Specials' mod='gameworldspecials'}</a></h4>
	<div class="block_content">
{if $myspecial}
		<ul class="products">
			{foreach from=$myspecial item=product name=myspecial}
			<li class="product_image {if $smarty.foreach.myspecial.first}first_item{elseif $smarty.foreach.myspecial.last}last_item{else}item{/if}">
				<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'medium_default')}" alt="{$product.name|escape:html:'UTF-8'}" /></a>
				<h3><a href="{$product.link}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:42:'...'|escape:'htmlall':'UTF-8'}</a></h3>
				<p class="category_name">
					{if $product.id_category_default != 1}
						{$product.category}
					{else}
						{$shop_name}
					{/if}
				</p>
				<div class="specials_price"><span class="price-discount">{convertPrice price=$product.price_without_reduction}</span>
				<span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span>
				</div>
			</li>
			{/foreach}
		</ul>
{else}
		<p>{l s='No specials at this time' mod='blockspecials'}</p>
{/if}
	</div>
</div>
<!-- /MODULE Block specials -->