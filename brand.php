<?php
include_once './header.php';
include_once './lib/helpers.php';

$data = [
   'principled-trader' => ['title' => 'The Principled Trader', 'image' => 'theprincipledtrader.jpg'],
   'revitalize-solutions' => ['title' => 'Revitalize Solutions', 'image' => 'Revitalize-Solutions-Logo.jpg'],
   'sutton-100-canadian' => ['title' => 'Sutton – 100% Canadian', 'image' => 'Sutton-All-Canadian-Logo.jpg'],
   'kings-massage-therapy' => ['title' => 'Kings Massage Therapy', 'image' => 'Kings-Massage-Logo.jpg'],
   'lee-burrows-td-waterhouse-wealth-advisory-group' => ['title' => 'Lee Burrows (TD Waterhouse Wealth Advisory Group)', 'image' => 'Lee-Burrows-TD-Waterhouse.png'],
   'law-world-wide' => ['title' => 'Law World Wide', 'image' => 'Law-World-Wide-Logo.jpg'],
   'webbax-branding' => ['title' => 'Webbax branding', 'image' => 'webbax-logo.jpg'],
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
                     <div class=".portfolio-feature-image"><img src="<?= $root ?>assets/images/clients/<?= get_data($data)['image'] ?>" alt="<?= get_data($data) ? get_data($data)['title'] : '' ?>" title="<?= get_data($data)['title'] ?>">
                     </div>
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

