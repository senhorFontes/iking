<?php
include_once(dirname(__FILE__).'/StaticBlockClass.php');
class csstaticblocks extends Module
{
	protected $error = false;
	private $_html;
	private $myHook = array('displaytop','displayleftColumn','displayrightColumn','displayfooter','displayhome','statictop','categoryBanner');
	
	public function __construct()
	{
	 	$this->name = 'csstaticblocks';
	 	$this->tab = 'MyBlocks';
	 	$this->version = '1.0';
		$this->author = 'Codespot';
	 	parent::__construct();

		$this->displayName = $this->l('Cs Static block');
		$this->description = $this->l('Adds static blocks with free content');
		$this->confirmUninstall = $this->l('Are you sure that you want to delete your static blocks?');
	
	}
	public function init_data()
	{
		$content_block1 = '<div class="tell"><span class="cus">Customer support</span> 1800-0000-GAMEWOLRD <span class="span_line">|</span> <a href="#">Chat with us</a></div>';
		$content_block1_fr='<div class="tell"><span class="cus">Service à la clientèle</span> 1800-0000-GAMEWOLRD <span class="span_line">|</span> <a href="#">Chattez avec nous</a></div>';
		$content_block2 = '<div class="staticmenu">
<ul>
<li><a href="#">Downloads</a><span>Games &amp; Add-ons</span></li>
<li><a href="#">Pre-Owned</a><span>Great Values</span></li>
<li><a href="#">Trade-Ins</a><span>Great Offers</span></li>
<li><a href="#">Monthly Deals</a><span>Current Sales</span></li>
</ul>
<p class="cat_share"><a title="twitter" href="#"><img src="{static_block_url}themes/gameworld/img/cms/cat_twi.png" alt="" width="86" height="25" /></a></p>
<p class="cat_share"><a title="facebook" href="#"><img src="{static_block_url}themes/gameworld/img/cms/cat_face.png" alt="" width="92" height="25" /></a></p>
</div>';
$content_block2_fr='<div class="staticmenu">
<ul>
<li><a href="#">Télécha</a><span>Jeux &amp; Add</span></li>
<li><a href="#">Predocc</a><span>Grandes</span></li>
<li><a href="#">Com-ins</a><span>Extraordinaires</span></li>
<li><a href="#">Offres</a><span>Les ventes </span></li>
</ul>
<p class="cat_share"><a title="twitter" href="#"><img src="{static_block_url}themes/gameworld/img/cms/cat_twi.png" alt="" width="86" height="25" /></a></p>
<p class="cat_share"><a title="facebook" href="#"><img src="{static_block_url}themes/gameworld/img/cms/cat_face.png" alt="" width="92" height="25" /></a></p>
</div>';
		$content_block3 = '<div class="block platform">
<h3 class="title">Platform &amp; Games</h3>
<p class="title">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac tupis egestas - <span><a href="#">BUY THIS THEME</a></span></p>
<div class="block_color color_1">
<h4><span>Xbox 360 Platforms</span><a href="./category.php?id_category=34">Shop All</a></h4>
<div class="block_content">
<ul style="height: px;">
<li class="ajax_block_product first_item"><a class="product_image" title="Cras in nunc non ipsum  cursus ultrices" href="./product.php?id_product=9"><img src="{static_block_url}themes/gameworld/img/cms/a1.png" alt="Cras in nunc non ipsum  cursus ultrices" width="120" height="166" /></a>
<div class="right">
<div>
<p class="price_container">From<span class="price">$197.<sup>99</sup></span></p>
</div>
<h3><a title="Microsoft Refurbished" href="./product.php?id_product=9">Microsoft Refurbished</a></h3>
<a class="button" title="Shop Platform" href="./product.php?id_product=9">Shop Platform</a> <a class="button2" title="Shop Accessories" href="#">Shop Accessories</a></div>
</li>
</ul>
</div>
</div>
<div class="block_color color_2">
<h4><span>PlayStation 3 Platforms</span><a href="./category.php?id_category=36">Shop All</a></h4>
<div class="block_content">
<ul style="height: px;">
<li class="ajax_block_product first_item"><a class="product_image" title="Pellentesque habitant  morbi tristique" href="./product.php?id_product=20"><img src="{static_block_url}themes/gameworld/img/cms/a2.png" alt="Pellentesque habitant  morbi tristique" width="123" height="166" /></a>
<div class="right">
<div>
<p class="price_container">From<span class="price">$299.<sup>65</sup></span></p>
</div>
<h3><a title="Sony Refurbished" href="./product.php?id_product=20">Sony Refurbished</a></h3>
<a class="button" title="Shop Platform" href="./product.php?id_product=20">Shop Platform</a> <a class="button2" title="Shop Accessories" href="#">Shop Accessories</a></div>
</li>
</ul>
</div>
</div>
<div class="block_color color_3">
<h4><span>Wii Platforms</span><a href="./category.php?id_category=38">Shop All</a></h4>
<div class="block_content">
<ul style="height: px;">
<li class="ajax_block_product first_item"><a class="product_image" title="Pellentesque habitant  morbi tristique" href="./product.php?id_product=20"><img src="{static_block_url}themes/gameworld/img/cms/a3.png" alt="Pellentesque habitant  morbi tristique" width="104" height="166" /></a>
<div class="right">
<div>
<p class="price_container">From<span class="price">$99.<sup>59</sup></span></p>
</div>
<h3><a title="Sony Refurbished" href="./product.php?id_product=20">Sony Refurbished</a></h3>
<a class="button" title="Shop Platform" href="./product.php?id_product=20">Shop Platform</a> <a class="button2" title="Shop Accessories" href="#">Shop Accessories</a></div>
</li>
</ul>
</div>
</div>
<div class="customimg">
<ul>
<li><a href="#"><img src="{static_block_url}themes/gameworld/img/cms/kinect.jpg" alt="" /></a> <a href="#"><img src="{static_block_url}themes/gameworld/img/cms/shopkinect.jpg" alt="" /></a></li>
<li><a href="#"><img src="{static_block_url}themes/gameworld/img/cms/move.jpg" alt="" /></a> <a href="#"><img src="{static_block_url}themes/gameworld/img/cms/shopmove.jpg" alt="" /></a></li>
<li><a href="#"><img src="{static_block_url}themes/gameworld/img/cms/plus.jpg" alt="" /></a> <a href="#"><img src="{static_block_url}themes/gameworld/img/cms/shopplus.jpg" alt="" /></a></li>
</ul>
</div>
</div>';
$content_block3_fr='<div class="block platform">
<h3 class="title">Plate-forme &amp; Jeux</h3>
<p class="title">Battre, habitent la triste époque ancienne et la maladie, fractionné, les Tupis conseillant la faim et lextrême pauvreté -<span><a href="#">ACHETER CE THÈME</a></span></p>
<div class="block_color color_1">
<h4><span>Plates-formes Xbox 360</span><a href="./category.php?id_category=34">Toutes</a></h4>
<div class="block_content">
<ul style="height: px;">
<li class="ajax_block_product first_item"><a class="product_image" title="Cras in nunc non ipsum  cursus ultrices" href="./product.php?id_product=9"><img src="{static_block_url}themes/gameworld/img/cms/a1.png" alt="Cras in nunc non ipsum  cursus ultrices" width="120" height="166" /></a>
<div class="right">
<div>
<p class="price_container">Partir<span class="price">$197.<sup>99</sup></span></p>
</div>
<h3><a title="Microsoft Remis à neuf" href="./product.php?id_product=9">Microsoft Remis à neuf</a></h3>
<a class="button" title="Plate-forme" href="./product.php?id_product=9">Plate-forme</a> <a class="button2" title="Boutique" href="#">Boutique</a></div>
</li>
</ul>
</div>
</div>
<div class="block_color color_2">
<h4><span>PlayStation 3 Plates-formes</span><a href="./category.php?id_category=36">Toutes</a></h4>
<div class="block_content">
<ul style="height: px;">
<li class="ajax_block_product first_item"><a class="product_image" title="Pellentesque habitant  morbi tristique" href="./product.php?id_product=20"><img src="{static_block_url}themes/gameworld/img/cms/a2.png" alt="Pellentesque habitant  morbi tristique" width="123" height="166" /></a>
<div class="right">
<div>
<p class="price_container">Partir<span class="price">$299.<sup>65</sup></span></p>
</div>
<h3><a title="Sony Refurbished" href="./product.php?id_product=20">Sony Refurbished</a></h3>
<a class="button" title="Plate-forme" href="./product.php?id_product=20">Plate-forme</a> <a class="button2" title="Boutique" href="#">Boutique</a></div>
</li>
</ul>
</div>
</div>
<div class="block_color color_3">
<h4><span>Wii Platforms</span><a href="./category.php?id_category=38">Toutes</a></h4>
<div class="block_content">
<ul style="height: px;">
<li class="ajax_block_product first_item"><a class="product_image" title="Pellentesque habitant  morbi tristique" href="./product.php?id_product=20"><img src="{static_block_url}themes/gameworld/img/cms/a3.png" alt="Pellentesque habitant  morbi tristique" width="104" height="166" /></a>
<div class="right">
<div>
<p class="price_container">Partir<span class="price">$99.<sup>59</sup></span></p>
</div>
<h3><a title="Sony Refurbished" href="./product.php?id_product=20">Sony Refurbished</a></h3>
<a class="button" title="Plate-forme" href="./product.php?id_product=20">Plate-forme</a> <a class="button2" title="Boutique" href="#">Boutique</a></div>
</li>
</ul>
</div>
</div>
<div class="customimg">
<ul>
<li><a href="#"><img src="{static_block_url}themes/gameworld/img/cms/kinect.jpg" alt="" /></a> <a href="#"><img src="{static_block_url}themes/gameworld/img/cms/shopkinect.jpg" alt="" /></a></li>
<li><a href="#"><img src="{static_block_url}themes/gameworld/img/cms/move.jpg" alt="" /></a> <a href="#"><img src="{static_block_url}themes/gameworld/img/cms/shopmove.jpg" alt="" /></a></li>
<li><a href="#"><img src="{static_block_url}themes/gameworld/img/cms/plus.jpg" alt="" /></a> <a href="#"><img src="{static_block_url}themes/gameworld/img/cms/shopplus.jpg" alt="" /></a></li>
</ul>
</div>
</div>';
		$content_block4 ='<div class="footer_sampleblock">
<h4>Sample of content Block text</h4>
<p class="title">Curabitur consectetur elit ut gravida viverra libero sem egestas metus</p>
<div class="em_post-item">
<p><img src="{static_block_url}themes/gameworld/img/cms/cms_1.jpg" alt="" /></p>
<h2><a href="#">Bellentesque habitant morbi tristique</a></h2>
<p>Maecenas a sapien tortor quis tincidunt lectus. Donec ullamcorper dui sit amet lorem ultrices sed porttitor massa</p>
<p class="readmore"><a title="Read more" href="#">Read more</a></p>
</div>
<div class="em_post-item">
<p><img src="{static_block_url}themes/gameworld/img/cms/cms_2.jpg" alt="" /></p>
<h2><a href="#">Bellentesque habitant morbi tristique</a></h2>
<p>Maecenas a sapien tortor quis tincidunt lectus. Donec ullamcorper dui sit amet lorem ultrices sed porttitor massa</p>
<p class="readmore"><a title="Read more" href="#">Read more</a></p>
</div>
<div class="em_post-item">
<p><img src="{static_block_url}themes/gameworld/img/cms/cms_3.jpg" alt="" /></p>
<h2><a href="#">Bellentesque habitant morbi tristique</a></h2>
<p>Maecenas a sapien tortor quis tincidunt lectus. Donec ullamcorper dui sit amet lorem ultrices sed porttitor massa</p>
<p class="readmore"><a title="Read more" href="#">Read more</a></p>
</div>
</div>';
$content_block4_fr='<div class="footer_sampleblock">
<h4>Exemple de texte Bloquer le contenu</h4>
<p class="title">Le développement de nouveaux produits que les concepteurs veulent toujours peur de trafic gratuit</p>
<div class="em_post-item">
<p><img src="{static_block_url}themes/gameworld/img/cms/cms_1.jpg" alt="" /></p>
<h2><a href="#">Maladie Bellentesque habite réservoir</a></h2>
<p>Lire tortionnaire nouvelle de la poste. Jusquà plus ample informé est la masse de fuite simple mais faisable</p>
<p class="readmore"><a title="Lire la suite" href="#">Lire la suite</a></p>
</div>
<div class="em_post-item">
<p><img src="{static_block_url}themes/gameworld/img/cms/cms_2.jpg" alt="" /></p>
<h2><a href="#">Maladie Bellentesque habite réservoir</a></h2>
<p>Lire tortionnaire nouvelle de la poste. Jusquà plus ample informé est la masse de fuite simple mais faisable</p>
<p class="readmore"><a title="Lire la suite" href="#">Lire la suite</a></p>
</div>
<div class="em_post-item">
<p><img src="{static_block_url}themes/gameworld/img/cms/cms_3.jpg" alt="" /></p>
<h2><a href="#">Maladie Bellentesque habite réservoir</a></h2>
<p>Lire tortionnaire nouvelle de la poste. Jusquà plus ample informé est la masse de fuite simple mais faisable</p>
<p class="readmore"><a title="Lire la suite" href="#">Lire la suite</a></p>
</div>
</div>';
		$content_block5 = '<div class="footer_cms">
<div class="block_footer_cms">
<div class="company">
<h4>Company</h4>
<ul>
<li><a title="About us" href="cms.php?id_cms=4">About us</a></li>
<li><a title="Blog" href="#">Blog</a></li>
<li><a title="Our partners" href="#">Our partners</a></li>
<li><a title="Work with us" href="cms.php?id_cms=3">Work with us</a></li>
</ul>
</div>
<div class="assistance">
<h4>Assistance</h4>
<ul>
<li><a title="Contact us" href="contact-form.php">Contact us</a></li>
<li><a title="FAQs" href="#">FAQs</a></li>
<li><a title="Shipping Information" href="cms.php?id_cms=1">Shipping Information</a></li>
<li><a title="question" href="#">Have a question? ask us</a></li>
</ul>
</div>
</div>
<div class="block_footer_cms">
<h4>Store locaton</h4>
<p>1234 Fake address name,<br /> Fake city name, <br /> Country 01234<br /> (000) 123 456 7890 / info@yourdomain.com</p>
</div>
<div class="block_footer_cms follow">
<h4>Follow us on</h4>
<ul>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/facebook.png" alt="" /></span><a title="facebook" href="#"> Facebook</a></li>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/google_plus.png" alt="" /></span><a title="google_plus" href="#"> google plus</a></li>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/rss.png" alt="" /></span><a title="rss" href="#"> rss feed</a></li>
</ul>
<ul>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/twitter.png" alt="" /></span><a title="twitter" href="#"> twitter</a></li>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/flick.png" alt="" /></span><a title="flick" href="#"> flickr</a></li>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/vimeo.png" alt="" /></span><a title="vimeo" href="#"> vimeo</a></li>
</ul>
</div>
</div>';
$content_block5_fr='<div class="footer_cms">
<div class="block_footer_cms">
<div class="company">
<h4>Entreprise</h4>
<ul>
<li><a title="À propos de nous" href="cms.php?id_cms=4">À propos de nous</a></li>
<li><a title="Blog de" href="#">Blog de</a></li>
<li><a title="Nos partenaires" href="#">Nos partenaires</a></li>
<li><a title="Travailler avec nous" href="cms.php?id_cms=3">Travailler avec nous</a></li>
</ul>
</div>
<div class="assistance">
<h4>Assistance</h4>
<ul>
<li><a title="Contactez-nous" href="contact-form.php">Contactez-nous</a></li>
<li><a title="FAQs" href="#">FAQs</a></li>
<li><a title="Informations sur la livraison." href="cms.php?id_cms=1">Informations sur la livraison.</a></li>
<li><a title="question" href="#">Vous avez une question? demandez-nous</a></li>
</ul>
</div>
</div>
<div class="block_footer_cms">
<h4>Emplacement du magasin</h4>
<p>1234 Nom Adresse Faux,<br /> Faux nom de la ville, <br /> pays 01234<br /> (000) 123 456 7890 / info@yourdomain.com</p>
</div>
<div class="block_footer_cms follow">
<h4>Suivez-nous sur</h4>
<ul>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/facebook.png" alt="" /></span><a title="facebook" href="#"> Facebook</a></li>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/google_plus.png" alt="" /></span><a title="google_plus" href="#"> google plus</a></li>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/rss.png" alt="" /></span><a title="rss" href="#"> rss feed</a></li>
</ul>
<ul>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/twitter.png" alt="" /></span><a title="twitter" href="#"> twitter</a></li>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/flick.png" alt="" /></span><a title="flick" href="#"> flickr</a></li>
<li><span><img src="{static_block_url}themes/gameworld/img/cms/vimeo.png" alt="" /></span><a title="vimeo" href="#"> vimeo</a></li>
</ul>
</div>
</div>';
$content_block6 = '<div class="footer_categories">
<h4>Categories</h4>
<ul>
<li><a title="" href="#">Lorem ipsum </a></li>
<li><a title="" href="#">Dolor sit amet</a></li>
<li><a title="" href="#">Consectetur</a></li>
<li><a title="" href="#">Adipiscing elit</a></li>
<li><a title="" href="#">Pellentesque varius</a></li>
<li><a title="" href="#">Arcu at felis</a></li>
<li><a title="" href="#">Lobortis posuere</a></li>
<li><a title="" href="#">Nunc tincidunt</a></li>
<li class="last"><a title="" href="#">Imperdiet volutpat</a></li>
<li><a title="" href="#">Suspendisse posuere</a></li>
<li><a title="" href="#">Dolor mauris</a></li>
<li><a title="" href="#">Lobortis quis</a></li>
<li><a title="" href="#">Facilisis velit sodales</a></li>
<li><a title="" href="#">Sed euismod </a></li>
<li><a title="" href="#">Risus dolor</a></li>
<li><a title="" href="#">Consectetur</a></li>
<li><a title="" href="#">Elementum </a></li>
<li><a title="" href="#">Fringilla</a></li>
<li class="last"><a title="" href="#">Maecenas Quis</a></li>
</ul>
</div>';
$content_block6_fr='<div class="footer_categories">
<h4>Catégories</h4>
<ul>
<li><a title="" href="#">Lorem ipsum </a></li>
<li><a title="" href="#">Dolor sit amet</a></li>
<li><a title="" href="#">Consectetur</a></li>
<li><a title="" href="#">Adipiscing elit</a></li>
<li><a title="" href="#">Pellentesque varius</a></li>
<li><a title="" href="#">Arcu at felis</a></li>
<li><a title="" href="#">Lobortis posuere</a></li>
<li><a title="" href="#">Nunc tincidunt</a></li>
<li class="last"><a title="" href="#">Imperdiet volutpat</a></li>
<li><a title="" href="#">Suspendisse posuere</a></li>
<li><a title="" href="#">Dolor mauris</a></li>
<li><a title="" href="#">Lobortis quis</a></li>
<li><a title="" href="#">Facilisis velit sodales</a></li>
<li><a title="" href="#">Sed euismod </a></li>
<li><a title="" href="#">Risus dolor</a></li>
<li><a title="" href="#">Consectetur</a></li>
<li><a title="" href="#">Elementum </a></li>
<li><a title="" href="#">Fringilla</a></li>
<li class="last"><a title="" href="#">Maecenas Quis</a></li>
</ul>
</div>';
$content_block7 = '<p class="copy">©2012 Prestashop Games Store - All Rights Reserved.<br /><a title="Prestashop Themes" href="http://presthemes.com">Prestashop Themes</a> by <a title="PresThemes" href="http://presthemes.com/prestashop-themes.html">PresThemes</a></p>';
$content_block7_fr='<p class="copy">© 2012 Jeux Prestashop Store - Tous droits réservés.<br /><a title="Prestashop Thèmes" href="http://presthemes.com">Prestashop Thèmes</a> by <a title="PresThemes" href="http://presthemes.com/prestashop-themes.html">PresThemes</a></p>';
$content_block8 = '<div class="author-payment"><a title="visa" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/gameworld/img/cms/logo_paiement_visa.png" alt="visa" /></a> <a title="mastercard" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/gameworld/img/cms/logo_paiement_mastercard.png" alt="mastercard" /></a> <a title="american" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/gameworld/img/cms/logo_paiement_macard.png" alt="mastercard" /></a> <a title="paypal" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/gameworld/img/cms/logo_paiement_paypal.png" alt="paypal" /></a> <a title="money" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/gameworld/img/cms/logo_paiement_one.png" alt="mastercard" /> </a></div>';
$content_block8_fr='<div class="author-payment"><a title="visa" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/gameworld/img/cms/logo_paiement_visa.png" alt="visa" /></a> <a title="mastercard" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/gameworld/img/cms/logo_paiement_mastercard.png" alt="mastercard" /></a> <a title="american" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/gameworld/img/cms/logo_paiement_macard.png" alt="mastercard" /></a> <a title="paypal" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/gameworld/img/cms/logo_paiement_paypal.png" alt="paypal" /></a> <a title="money" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/gameworld/img/cms/logo_paiement_one.png" alt="mastercard" /> </a></div>';
$content_block9 = '<div id="ads_left"><a href="#"><img src="{static_block_url}themes/gameworld/img/cms/ads-1.png" alt="" width="109" height="189" /></a></div>
<div id="ads_right"><a href="#"><img src="{static_block_url}themes/gameworld/img/cms/ads-2.png" alt="" width="112" height="188" /></a></div>';
$content_block9_fr='<div id="ads_left"><a href="#"><img src="{static_block_url}themes/gameworld/img/cms/ads-1.png" alt="" width="109" height="189" /></a></div>
<div id="ads_right"><a href="#"><img src="{static_block_url}themes/gameworld/img/cms/ads-2.png" alt="" width="112" height="188" /></a></div>';
$content_block10 = '<div class="banner_block"><a title="" href="#"><img src="{static_block_url}themes/gameworld/img/cms/bannerforcategory_custom.jpg" alt="" width="600" height="155" /></a></div>';
$content_block10_fr='<div class="banner_block"><a title="" href="#"><img src="{static_block_url}themes/gameworld/img/cms/bannerforcategory_custom.jpg" alt="" width="600" height="155" /></a></div>';
$id_hook_statictop = Hook::getIdByName('statictop');
$id_hook_categoryBanner = Hook::getIdByName('categoryBanner');
		$id_en = Language::getIdByIso('en');
		$id_fr = Language::getIdByIso('fr');
		if(!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "1", "chat-with-us","14", "1")') OR 
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "2", "download",'.$id_hook_statictop.', "1")') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "3", "platform-and-games","8", "1")') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "4", "Sample-Static-Block","21", "1")') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "5", "cms_footer_page","21", "1")') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "6", "footer-category","21", "1")') OR 
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "7", "All_right_footer","21", "1")') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "8", "logo-payment","21", "1")') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "9", "adv_left_right","14", "1")') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "10", "banner_category",'.$id_hook_categoryBanner.', "1")') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "1", "1","Chat With Us", \''.$content_block1.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "1", \''.$id_fr.'\',"Chat With Us", \''.$content_block1_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "1", "3","Chat With Us", \''.$content_block1.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "2", "1","Download", \''.$content_block2.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "2", \''.$id_fr.'\',"Download", \''.$content_block2_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "2", "3","Download", \''.$content_block2.'\')') OR  
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "3", "1","Platforms and Games", \''.$content_block3.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "3", \''.$id_fr.'\',"Platforms and Games", \''.$content_block3_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "3", "3","Platforms and Games", \''.$content_block3.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "4", "1","Sample of Static Block", \''.$content_block4.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "4", \''.$id_fr.'\',"Sample of Static Block", \''.$content_block4_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "4", "3","Sample of Static Block", \''.$content_block4.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "5", "1","CMS footer page", \''.$content_block5.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "5", \''.$id_fr.'\',"CMS footer page", \''.$content_block5_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "5", "3","CMS footer page", \''.$content_block5.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "6", "1","Footer Category", \''.$content_block6.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "6", \''.$id_fr.'\',"Footer Category", \''.$content_block6_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "6", "3","Footer Category", \''.$content_block6.'\')') OR
		
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "7", "1","All rights Footer", \''.$content_block7.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "7", \''.$id_fr.'\',"All rights Footer", \''.$content_block7_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "7", "3","All rights Footer", \''.$content_block7.'\')') OR
		
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "8", "1","Logo Payment", \''.$content_block8.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "8", \''.$id_fr.'\',"Logo Payment", \''.$content_block8_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "8", "3","Logo Payment", \''.$content_block8.'\')') OR
		
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "9", "1","Banner Left Right", \''.$content_block9.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "9", \''.$id_fr.'\',"Banner Left Right", \''.$content_block9_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "9", "3","Banner Left Right", \''.$content_block9.'\')') OR
		
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "10", "1","Banner in category page", \''.$content_block10.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "10", \''.$id_fr.'\',"Banner in category page", \''.$content_block10_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "10", "3","Banner in category page", \''.$content_block10.'\')')
		)
			return false;
		return true;
		
	}
	public function install()
	{
	 	if (parent::install() == false OR !$this->registerHook('header'))
	 		return false;
		foreach ($this->myHook AS $hook){
			if ( !$this->registerHook($hook))
				return false;
		}
	 	if (!Db::getInstance()->Execute('CREATE TABLE '._DB_PREFIX_.'staticblock (`id_block` int(10) unsigned NOT NULL AUTO_INCREMENT, `identifier_block` varchar(255) NOT NULL DEFAULT \'\', `hook` int(10) unsigned, `is_active` tinyint(1) NOT NULL DEFAULT \'1\', PRIMARY KEY (`id_block`),UNIQUE KEY `identifier_block` (`identifier_block`)) ENGINE=InnoDB default CHARSET=utf8'))
	 		return false;
		if (!Db::getInstance()->Execute('CREATE TABLE '._DB_PREFIX_.'staticblock_lang (`id_block` int(10) unsigned NOT NULL, `id_lang` int(10) unsigned NOT NULL, `title` varchar(255) NOT NULL DEFAULT \'\', `content` mediumtext, UNIQUE KEY `staticblock_lang_index` (`id_block`,`id_lang`)) ENGINE=InnoDB default CHARSET=utf8'))
	 		return false;
		$this->init_data();
	 	return true;
	}
	
	public function uninstall()
	{
	 	if (parent::uninstall() == false)
	 		return false;
	 	if (!Db::getInstance()->Execute('DROP TABLE '._DB_PREFIX_.'staticblock') OR !Db::getInstance()->Execute('DROP TABLE '._DB_PREFIX_.'staticblock_lang'))
	 		return false;
	 	return true;
	}
	
	private function _displayHelp()
	{
		$this->_html .= '
		<br/>
	 	<fieldset>
			<legend><img src="'.$this->_path.'logo.gif" alt="" title="" /> '.$this->l('Static block Helper').'</legend>
			<div>This module customize static contents on the site. Static contents are displayed at the position of the hook : top, left, home,right, footer.</div>
		</fieldset>';
	}
	
	public function getContent()
   	{
		$this->_html = '<h2>'.$this->displayName.'</h2>';
		
		
		$this->_postProcess();
		
		if (Tools::isSubmit('addBlock'))
			$this->_displayAddForm();
		elseif (Tools::isSubmit('editBlock'))
			$this->_displayUpdateForm();
		elseif (Tools::isSubmit('changeStatusStaticblock') AND Tools::getValue('id_block'))
		{
			$stblock = new StaticBlockClass(Tools::getValue('id_block'));
			$stblock->updateStatus(Tools::getValue('status'));
			$this->_displayForm();
		}
		else
			$this->_displayForm();
		$this->_displayHelp();
		return $this->_html;
	}
	
	private function _postProcess()
	{
		global $currentIndex;
		$errors = array();
		if (Tools::isSubmit('saveBlock'))
		{
			
			$block = new StaticBlockClass(Tools::getValue('id_block'));
			$block->copyFromPost();
			
			$errors = $block->validateController();
						
			if (sizeof($errors))
			{
				$this->_html .= $this->displayError(implode('<br />', $errors));
			}
			else
			{
				Tools::getValue('id_block') ? $block->update() : $block->add();
				Tools::redirectAdmin($currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&saveBlockConfirmation');
			}
		}
		elseif (Tools::isSubmit('deleteBlock') AND Tools::getValue('id_block'))
		{
			$block = new StaticBlockClass(Tools::getValue('id_block'));
			$block->delete();
			Tools::redirectAdmin($currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&deleteBlockConfirmation');
		}
		elseif (Tools::isSubmit('saveBlockConfirmation'))
			$this->_html = $this->displayConfirmation($this->l('Static block has been saved successfully'));
		elseif (Tools::isSubmit('deleteBlockConfirmation'))
			$this->_html = $this->displayConfirmation($this->l('Static block deleted successfully'));
		
	}
	
	private function getBlocks()
	{
		$defaultLanguage = intval(Configuration::get('PS_LANG_DEFAULT'));
	 	if (!$result = Db::getInstance()->ExecuteS(
			'SELECT sb.*, sbl.`title`, sbl.`content` 
			FROM `'._DB_PREFIX_.'staticblock` sb 
			LEFT JOIN `'._DB_PREFIX_.'staticblock_lang` sbl ON (sb.`id_block` = sbl.`id_block` AND sbl.`id_lang` = '.(int)($defaultLanguage).')'))
	 		return false;
	 	return $result;
	}
	
	private function getHookTitle($id_hook)
	{
		if (!$result = Db::getInstance()->getRow('
			SELECT `name`,`title`
			FROM `'._DB_PREFIX_.'hook` 
			WHERE `id_hook` = '.(int)($id_hook)))
			return false;
		return ($result['title'] != "" ? $result['title'] : $result['name']);
	}
	
	private function _displayForm()
	{
		global $currentIndex, $cookie;
	 	$this->_html .= '
		
	 	<fieldset>
			<legend><img src="'.$this->_path.'logo.gif" alt="" title="" /> '.$this->l('List of static blocks').'</legend>
			<p><a href="'.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&addBlock"><img src="'._PS_ADMIN_IMG_.'add.gif" alt="" /> '.$this->l('Add a new block').'</a></p><br/>
			<table width="100%" class="table" cellspacing="0" cellpadding="0">
			<thead>
			<tr class="nodrag nodrop">
				<th>'.$this->l('ID').'</th>
				<th class="center">'.$this->l('Title').'</th>
				<th class="center">'.$this->l('Identifier').'</th>
				<th class="center">'.$this->l('Hook into').'</th>
				<th class="right">'.$this->l('Active').'</th>
			</tr>
			</thead>
			<tbody>';
		$s_blocks = $this->getBlocks();
		if (is_array($s_blocks))
		{
			static $irow;
			foreach ($s_blocks as $block)
			{
				$this->_html .= '
				<tr class="'.($irow++ % 2 ? 'alt_row' : '').'">
					<td class="pointer" onclick="document.location = \''.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&editBlock&id_block='.$block['id_block'].'\'">'.$block['id_block'].'</td>
					<td class="pointer center" onclick="document.location = \''.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&editBlock&id_block='.$block['id_block'].'\'">'.$block['title'].'</td>
					<td class="pointer center" onclick="document.location = \''.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&editBlock&id_block='.$block['id_block'].'\'">'.$block['identifier_block'].'</td>
					<td class="pointer center" onclick="document.location = \''.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&editBlock&id_block='.$block['id_block'].'\'">'.(Validate::isInt($block['hook']) ? $this->getHookTitle($block['hook']) : '').'</td>
					<td class="pointer center"> <a href="'.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&changeStatusStaticblock&id_block='.$block['id_block'].'&status='.$block['is_active'].'">'.($block['is_active'] ? '<img src="'._PS_ADMIN_IMG_.'enabled.gif" alt="Enabled" title="Enabled" />' : '<img src="'._PS_ADMIN_IMG_.'disabled.gif" alt="Disabled" title="Disabled" />').'</a> </td>
				</tr>';
			}
		}
		$this->_html .= '
			</tbody>
			</table>
		</fieldset>';
			
		
	}
	
	private function _displayAddForm()
	{
		global $currentIndex, $cookie;
	 	// Language 
	 	$defaultLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
		$languages = Language::getLanguages(false);
		$divLangName = 'titlediv¤contentdiv';
		// TinyMCE
		$iso = Language::getIsoById((int)($cookie->id_lang));
		$isoTinyMCE = (file_exists(_PS_ROOT_DIR_.'/js/tiny_mce/langs/'.$iso.'.js') ? $iso : 'en');
		$ad = dirname($_SERVER["PHP_SELF"]);
		$this->_html .=  '
		<script type="text/javascript">	
		var iso = \''.$isoTinyMCE.'\' ;
		var pathCSS = \''._THEME_CSS_DIR_.'\' ;
		var ad = \''.$ad.'\' ;
		</script>
		<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tinymce.inc.js"></script>
		<script type="text/javascript">id_language = Number('.$defaultLanguage.');</script>	
		<script type="text/javascript">
		$(document).ready(function(){		
			tinySetup({});});
		</script>
		';
		// Form
		$this->_html .= '
		<fieldset>
			<legend><img src="'.$this->_path.'logo.gif" alt="" title="" /> '.$this->l('New block').'</legend>
			<form method="post" action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" enctype="multipart/form-data">
				<label>'.$this->l('Title:').'</label>
				<div class="margin-form">';
					foreach ($languages as $language)
					{
						$this->_html .= '
					<div id="titlediv_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
						<input type="text" name="title_'.$language['id_lang'].'" value="'.Tools::getValue('title_'.$language['id_lang']).'" size="55" /><sup> *</sup>
					</div>';
					}
					$this->_html .= $this->displayFlags($languages, $defaultLanguage, $divLangName, 'titlediv', true);	
					$this->_html .= '
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Identifier:').'</label>
				<div class="margin-form">
					<div id="identifierdiv" style="float: left;">
						<input type="text" name="identifier_block" value="'.Tools::getValue('identifier_block').'" size="55" /><sup> *</sup>
					</div>
					<p class="clear">'.$this->l('Identifier must be unique').'. '.$this->l('Match a-zA-Z-_0-9').'</p>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Hook into:').'</label>
				<div class="margin-form">
					<div id="hookdiv" style="float: left;">
						<select name="hook">
							<option value="0">'.$this->l('None').'</option>';

		foreach ($this->myHook AS $hook){
			$id_hook = Hook::getIdByName($hook);
			$this->_html .= '<option value="'.$id_hook.'"'.($id_hook == Tools::getValue('hook') ? 'selected="selected"' : '').'>'.$this->getHookTitle($id_hook).'</option>';
		}
		
		$this->_html .= '
						</select>
					</div>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Active:').'</label>
				<div class="margin-form">
					<div id="activediv" style="float: left;">
						<input type="radio" name="is_active" value="1"'.(Tools::getValue('is_active',1) ? 'checked="checked"' : '').' />
						<label class="t"><img src="'._PS_ADMIN_IMG_.'enabled.gif" alt="Enabled" title="Enabled" /></label>
						<input type="radio" name="is_active" value="0"'.(Tools::getValue('is_active',1) ? '' : 'checked="checked"').' />
						<label class="t"><img src="'._PS_ADMIN_IMG_.'disabled.gif" alt="Disabled" title="Disabled" /></label>
					</div>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Content:').'</label>
				<div class="margin-form">';									
					foreach ($languages as $language)
					{
						$this->_html .= '
					<div id="contentdiv_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
						<textarea class="rte" name="content_'.$language['id_lang'].'" id="contentInput_'.$language['id_lang'].'" cols="100" rows="20">'.Tools::getValue('content_'.$language['id_lang']).'</textarea>
					</div>';
					}
					$this->_html .= $this->displayFlags($languages, $defaultLanguage, $divLangName, 'contentdiv', true);
					$this->_html .= '
					<div class="clear"></div>
				</div>			
				<div class="margin-form">';
					$this->_html .= '<input type="submit" class="button" name="saveBlock" value="'.$this->l('Save Block').'" id="saveBlock" />
									';
					$this->_html .= '					
				</div>
				
			</form>
			<a href="'.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'"><img src="'._PS_ADMIN_IMG_.'arrow2.gif" alt="" />'.$this->l('Back to list').'</a>
		</fieldset>';
	}
	
	private function _displayUpdateForm()
	{
		global $currentIndex, $cookie;
		if (!Tools::getValue('id_block'))
		{
			$this->_html .= '<a href="'.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'"><img src="'._PS_ADMIN_IMG_.'arrow2.gif" alt="" />'.$this->l('Back to list').'</a>';
			return;
		}

		$block = new StaticBlockClass((int)Tools::getValue('id_block'));
	 	// Language 
	 	$defaultLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
		$languages = Language::getLanguages(false);
		$divLangName = 'titlediv¤contentdiv';
		// TinyMCE
		$iso = Language::getIsoById((int)($cookie->id_lang));
		$isoTinyMCE = (file_exists(_PS_ROOT_DIR_.'/js/tiny_mce/langs/'.$iso.'.js') ? $iso : 'en');
		$ad = dirname($_SERVER["PHP_SELF"]);
		$this->_html .=  '
		<script type="text/javascript">	
		var iso = \''.$isoTinyMCE.'\' ;
		var pathCSS = \''._THEME_CSS_DIR_.'\' ;
		var ad = \''.$ad.'\' ;
		</script>
		<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tinymce.inc.js"></script>
		<script type="text/javascript">id_language = Number('.$defaultLanguage.');</script>	
		<script type="text/javascript">
		$(document).ready(function(){		
			tinySetup({});});
		</script>
		';
		// Form
		$this->_html .= '
		<fieldset>
			<legend><img src="'.$this->_path.'logo.gif" alt="" title="" /> '.$this->l('Edit block').' '.$block->identifier_block.'</legend>
			<form method="post" action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" enctype="multipart/form-data">
				<input type="hidden" name="id_block" value="'.(int)$block->id_block.'" id="id_block" />
				<div class="margin-form">
					<input type="submit" class="button " name="deleteBlock" value="'.$this->l('Delete Block').'" id="deleteBlock" onclick="if (!confirm(\'Are you sure that you want to delete this static blocks?\')) return false "/>
				</div>
				<label>'.$this->l('Title:').'</label>
				<div class="margin-form">';
					foreach ($languages as $language)
					{
						$this->_html .= '
					<div id="titlediv_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
						<input type="text" name="title_'.$language['id_lang'].'" value="'.(isset($block->title[$language['id_lang']]) ? $block->title[$language['id_lang']] : '').'" size="55" /><sup> *</sup>
					</div>';
					}
					$this->_html .= $this->displayFlags($languages, $defaultLanguage, $divLangName, 'titlediv', true);	
					$this->_html .= '
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Identifier:').'</label>
				<div class="margin-form">
					<div id="identifierdiv" style="float: left;">
						<input type="text" name="identifier_block" value="'.$block->identifier_block.'" size="55" /><sup> *</sup>
					</div>
					<p class="clear">'.$this->l('Identifier must be unique').'. '.$this->l('Match a-zA-Z-_0-9').'</p>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Hook into:').'</label>
				<div class="margin-form">
					<div id="hookdiv" style="float: left;">
						<select name="hook">
							<option value="0">'.$this->l('None').'</option>';
		foreach ($this->myHook AS $hook){
			$id_hook = Hook::getIdByName($hook);
			$this->_html .= '<option value="'.$id_hook.'"'.($id_hook == $block->hook ? 'selected="selected"' : '').'>'.$this->getHookTitle($id_hook).'</option>';
		}
		$this->_html .= '
						</select>
					</div>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Status:').'</label>
				<div class="margin-form">
					<div id="activediv" style="float: left;">
						<input type="radio" name="is_active" '.($block->is_active ? 'checked="checked"' : '').' value="1" />
						<label class="t"><img src="'._PS_ADMIN_IMG_.'enabled.gif" alt="Enabled" title="Enabled" /></label>
						<input type="radio" name="is_active" '.($block->is_active ? '' : 'checked="checked"').' value="0" />
						<label class="t"><img src="'._PS_ADMIN_IMG_.'disabled.gif" alt="Disabled" title="Disabled" /></label>
					</div>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Content:').'</label>
				<div class="margin-form">';									
					foreach ($languages as $language)
					{
						$this->_html .= '
					<div id="contentdiv_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
						<textarea class="rte" name="content_'.$language['id_lang'].'" id="contentInput_'.$language['id_lang'].'" cols="100" rows="20">'.(isset($block->content[$language['id_lang']]) ? $block->content[$language['id_lang']] : '').'</textarea>
					</div>';
					}
					$this->_html .= $this->displayFlags($languages, $defaultLanguage, $divLangName, 'contentdiv', true);
					$this->_html .= '
					<div class="clear"></div>
				</div>			
				<div class="margin-form">';
					$this->_html .= '<input type="submit" class="button" name="saveBlock" value="'.$this->l('Save Block').'" id="saveBlock" />';
					$this->_html .= '					
				</div>
				
			</form>
			<a href="'.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'"><img src="'._PS_ADMIN_IMG_.'arrow2.gif" alt="" />'.$this->l('Back to list').'</a>
		</fieldset>';
	}

	public function contentById($id_block)
	{
		global $cookie;

		$staticblock = new StaticBlockClass($id_block);
		return ($staticblock->is_active ? $staticblock->content[(int)$cookie->id_lang] : '');
	}
	
	public function contentByIdentifier($identifier)
	{
		global $cookie;

		if (!$result = Db::getInstance()->getRow('
			SELECT `id_block`,`identifier_block`
			FROM `'._DB_PREFIX_.'staticblock` 
			WHERE `identifier_block` = \''.$identifier.'\''))
			return false;
		$staticblock = new StaticBlockClass($result['id_block']);
		return ($staticblock->is_active ? $staticblock->content[(int)$cookie->id_lang] : '');
	}
	
	private function getBlockInHook($hook_name)
	{
		$block_list = array();
		$id_hook = Hook::getIdByName($hook_name);
		if ($id_hook)
		{
			$results = Db::getInstance()->ExecuteS('SELECT `id_block` FROM `'._DB_PREFIX_.'staticblock` WHERE `hook` = '.(int)($id_hook));
			foreach ($results as $row)
			{
				$temp = new StaticBlockClass($row['id_block']);
				if ($temp->is_active)
					$block_list[] = $temp;
			}
		}	
		
		return $block_list;
	}
	
	public function hookDisplayTop()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('displaytop');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
	
	public function hookDisplayLeftColumn()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('displayleftColumn');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
	
	public function hookDisplayRightColumn()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('displayrightColumn');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
	
	public function hookDisplayFooter()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('displayfooter');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
	
	public function hookDisplayHome()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('displayhome');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
	
	function hookHeader($params)
	{
		global $smarty;
		$smarty->assign(array(
			'HOOK_MY_STATIC_TOP' => Hook::Exec('statictop'),
			'HOOK_CATEBORY_BANNER' => Hook::Exec('categoryBanner')
		));
	}
	
	public function hookStaticTop()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('statictop');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
	
	public function hookCategoryBanner()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('categoryBanner');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
}
?>
