<?php
include_once './header.php';
include_once './lib/helpers.php';

$data = [

   'stonehill-grille' => ['title' => 'StoneHill Grill', 'image' => ['stonehillgrille.jpg', 'stonehillgrille-about.jpg', 'stonehillgrille-food.jpg', 'stonehillgrille-beverage.jpg', 'stonehillgrille-contact.jpg'], 'website' => '', 'description' => ''],

   'bocusedor' => ['title' => 'Bocusedor', 'image' => ['bocusedor.jpg'], 'website' => '', 'description' => ''],

   'baden-k9' => ['title' => 'Baden K9', 'image' => ['badenk9.jpg', 'badenk92.jpg'], 'website' => '', 'description' => ''],

   'thebeautyparlour' => ['title' => 'The Beauty Parlour', 'image' => ['thebeautyparlour.jpg'], 'website' => '', 'description' => ''],

   'greenleafterrain' => ['title' => 'Greenleaf Terrain', 'image' => ['greenleafterrain.jpg', 'greenleaf-products.jpg', 'greenleaf-product.jpg', 'greenleaf-diagram.jpg'], 'website' => '', 'description' => ''],

   'niagaraautosales' => ['title' => 'Niagara Auto Sales', 'image' => ['niagara-auto-home.jpg', 'niagara-auto.jpg'], 'website' => '', 'description' => ''],

   'sumbookkeeper' => ['title' => 'Sum Bookkeeper', 'image' => ['sumbookkeeper.jpg'], 'website' => '', 'description' => ''],

   'taing' => ['title' => 'Taing Jewellers', 'image' => ['taing.jpg', 'taing-single-product.jpg', 'taing-jewellery-builder.jpg'], 'website' => '', 'description' => ''],

   'loveboom' => ['title' => 'Loveboom', 'image' => ['loveboom.jpg'], 'website' => '', 'description' => ''],

   'house-trade-built' => ['title' => 'House Trade Built', 'image' => 'tradebuilt.jpg', 'website' => 'http://tradebuilt.ca/', 'description' => 'House Trade Built is a Regina, Saskatchewan based website all about building a house with barter. Sounds crazy as they admin, but They explain that will the right tools – a company called <a title="Tradebank Regina" href="http://tradebuilt.ca/about-us-2/about-tradebank-regina/" target="_blank">Tradebank Regina</a> the idea can really work.'],
   
   'lawworldwide' => ['title' => 'Law Worldwide', 'image' => ['Lawworldwide.jpg'], 'website' => 'http://Lawworldwide.com/', 'description' => ''],

   'kanatagranite' => ['title' => 'Kanata Granite', 'image' => ['Kanata-Granite-Your-Ottawa-Granite-Guy-adpage.png'], 'website' => '', 'description' => ''],
   'ottawa-life-magazine' => ['title' => 'Ottawa Life Magazine', 'image' => ['portfolio-olm.jpg'], 'website' => 'http://www.ottawalife.com/', 'description' => ''],
   'revitalize-solutions' => ['title' => 'Revitalize Solutions', 'image' => ['revitalize-solutions-laptop-size.jpg'], 'website' => '', 'description' => ''],
   'web6s' => ['title' => 'Web6S', 'image' => ['web6s.jpg', 'web6s-design-packages.jpg', 'web6s-web-services.jpg'], 'website' => '', 'description' => ''],
   'tols-creations' => ['title' => 'Tols Creations', 'image' => ['tolscreations2.jpg'], 'website' => '', 'description' => ''],
   'ottawa-messenger-group' => ['title' => 'Ottawa Messenger Group', 'image' => ['omg.jpg'], 'website' => 'http://omglogistics.com/', 'description' => ''],
   'in-your-face-content' => ['title' => 'In Your Face Content', 'image' => ['Reputation-Management-inyourfacecontent.png'], 'website' => '', 'description' => ''],
   'kings-massage-therapy' => ['title' => 'Kings Massage Therapy', 'image' => ['Kings-Massage-Therapy.png'], 'website' => 'https://kingsmassagetherapy.ca/', 'description' => ''],
   'world-therapy-center' => ['title' => 'World Therapy Center', 'image' => ['World-Therapy-Center.jpg'], 'website' => '', 'description' => ''],
   'tiro-marketing' => ['title' => 'Tiro Marketing', 'image' => ['tiro-marketing.jpg'], 'website' => '', 'description' => ''],
   'shloeh' => ['title' => 'Shloeh', 'image' => ['shiloeh.jpg'], 'website' => '', 'description' => ''],
   'seesight-tours' => ['title' => 'Seesight Tours', 'image' => ['seesight2.jpg'], 'website' => '', 'description' => ''],
   'knatchbull' => ['title' => 'Knatchbull', 'image' => ['Knatchbull.jpg'], 'website' => '', 'description' => ''],
   'webbax' => ['title' => 'Webbax', 'image' => ['webbax-website.jpg'], 'website' => '', 'description' => ''],
   'continent-8-advisors' => ['title' => 'Continent 8 Advisors', 'image' => ['Continent-8-advisors-profile-page.png'], 'website' => '', 'description' => ''],
   'go-hot-tubs' => ['title' => 'Go Hot Tubs', 'image' => ['gohottubs-cropped.jpg'], 'website' => '', 'description' => ''],
   'annette-west-drapery' => ['title' => 'Annette West Drapery', 'image' => ['annettewestdrapery.jpg'], 'website' => '', 'description' => ''],
];
?>

<div id="wrap">
   <span class="primary-background seperator-addon seperator-bottom"></span>
   <div class="border"></div>
   <div id="page" class="clearfix">
      <div class="page-border clearfix">
         <div id="contentleft" class="clearfix">
            <div id="content" class="clearfix">
               <div class="singlepage clearfix post-119 page type-page status-publish hentry" id="single-page-119">
                  
                  <div class="entry">
                     <h1 class="post-title single">
                        <?= get_data($data) ? get_data($data)['title'] : '' ?>
                     </h1>
                     <div class="clear"></div>

                     <?php foreach (get_data($data)['image'] as $image) : ?>

                     <div class="portfolio-feature-image"><img src="<?= $root ?>assets/images/clients/<?= $image ?>" alt="<?= get_data($data) ? get_data($data)['title'] : '' ?>" title="<?= get_data($data)['title'] ?>">
                     </div>

                     <?php endforeach ?>

                     <?php if (get_data($data) && get_data($data)['website']) : ?>
                        <div class="spacer-sml"></div>
                        <p><a title="<?= get_data($data) ? get_data($data)['title'] : '' ?>" href="<?= get_data($data) ? get_data($data)['website'] : '' ?>" target="_blank">Visit site</a></p>
                     <?php endif ?>
                     <p><?= get_data($data) && get_data($data)['description'] ?></p>
                     <div style="clear:both;"></div>
                  </div>

               </div>
            </div>
            <!-- End #content div -->
            <?php
            include_once './sidebar_narrow.php';
            ?>
            <div style="clear:both;margin-bottom:20px;"></div>
         </div>
         <!-- End #contentleft div -->
      </div>
      <!-- End .page-border div -->
   </div>
   <!-- End #page div -->
</div>
<!-- End #wrap div -->

<?php
include_once './footer.php';
?>

