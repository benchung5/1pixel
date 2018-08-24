<?php
include_once './header.php';
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
                     <h1 class="page-title">Contact Us</h1>
                     <p>To inquire, please call 1 + (289) 686-9150 or kindly complete the below form and we will get back to you as soon as possible. A representative will promptly reply to your request within 24 hours.</p>
                     <div role="form" class="wpcf7">
                        <div class="screen-reader-response"></div>                        
                        <form action="https://formspree.io/ben@benchung.com" method="post" >
                           <input type="text" name="name" value="" size="40" placeholder="Name">
                           <input type="email" name="email" value="" size="40" placeholder="Email">
                           <input type="tel" name="phone" value="" size="40" placeholder="Phone number">
                           <input type="text" name="company-name" value="" size="40" placeholder="Company Name">
                           <input type="text" name="subject" value="" size="40" placeholder="Service of interest">
                           <textarea name="message" cols="40" rows="10" aria-invalid="false" placeholder="How can we help you?"></textarea>
                           <input type="submit" value="Send" ></p>
                        </form>
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

