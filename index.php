<?php $thisPage = "Home" ?>

<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>


    <div id="masterhead">
      <div class="container">
        
          <!-- Caption at the top of the mobile page -->
          <div class="visible-phone">  
            <h2 class="jumboCaption"><?php echo $tagline ?></h2>
            <p>Choose from one of our plans below to get started.</p>
          </div> 


        <div class="row"> 

          <div id="plan1" class="span4 plan muted">
            
            <h2 class="planTitle">FREE Hosting</h2>
            
            <table class="table table-bordered">
              <tbody>
                <tr><td><i class="icon-ok"></i> 2GB Disk Space</td></tr>
                <tr><td><i class="icon-ok"></i> 10GB Monthly Transfer</td></tr>
                <tr><td><i class="icon-ok"></i> 1 MySQL Database</td></tr>
                <tr><td><i class="icon-ok"></i> FREE For Life</td></tr>
              </tbody>
              <tfoot>
                <tr><td><p>FREE</p></td></tr>
              </tfoot>
            </table>
            
            <a href="#signUp" role="button" data-toggle="modal" class="btn btn-large btn-warning">Sign Up Now &raquo;</a>

          </div>


          
          <div id="plan2" class="span4 plan">

            <h2 class="planTitle">Pro Hosting <span class="label label-important">Great Value</span></h2>

            <table class="table table-bordered">
              <tbody>
                <tr><td><i class="icon-ok"></i> 5GB Disk Space</td></tr>
                <tr><td><i class="icon-ok"></i> 50GB Monthly Transfer</td></tr>
                <tr><td><i class="icon-ok"></i> 2 MySQL Databases</td></tr>
                <tr><td><i class="icon-ok"></i> Online Support</td></tr>
              </tbody>
              <tfoot>
                <tr><td><p><small><span class="oldPrice visible-desktop">£4.99</span> Only</small> £2.99 <small>/month</small></p></td></tr>
              </tfoot>
            </table>
            <a href="#signUp" role="button" data-toggle="modal" class="btn btn-large btn-warning">Sign Up Now &raquo;</a>
          </div>
          

          <div id="plan3" class="span4 plan muted">

            <h2 class="planTitle">Premium Hosting</h2>

            <table class="table table-bordered">
              <tbody>
                <tr><td><i class="icon-ok"></i> 10GB Disk Space</td></tr>
                <tr><td><i class="icon-ok"></i> 100GB Monthly Transfer</td></tr>
                <tr><td><i class="icon-ok"></i> 3 MySQL Databases</td></tr>
                <tr><td><i class="icon-ok"></i> 24 Hour Support</td></tr>
              </tbody>
              <tfoot>
                <tr><td><p><small>Only</small> £7.99 <small>/month</small></p></td></tr>
              </tfoot>
            </table>
            <a href="#signUp" role="button" data-toggle="modal" class="btn btn-large btn-warning">Sign Up Now &raquo;</a>
          </div>


        </div>
      </div>


      <!-- Caption for desktop and tablet users -->
      <div id="plansCaption" class="hidden-phone">

          <h2 class="jumboCaption"><?php echo $tagline ?></h2>
     
          <?php if(!empty($secondaryTagline)) { ?>
          	
          <div id="plansCaptionBlack">
            <h2>We offer super fast web hosting at a great price.</h2>
          </div>

          <?php } ?> 
          
      </div>

    </div>



    <hr class="visible-phone">



    <div id="mainContent" class="container">
      
      <div class="row snippets">

        <div class="span3">
          <h3><i class="icon-pencil"></i> Easy Website Builder</h3>
          <p>With our fantastic website builder, you can start making your site without any technical knowledge.</p>
        </div>

        <div class="span3">
          <h3><i class="icon-heart"></i> Community Forums</h3>
          <p>Get extra support and talk to other like-minded webmasters on our friendly forum.</p>
       	</div>

        <div class="span3">
          <h3><i class="icon-star"></i> Script Auto-Installer</h3>
          <p>Install your faviourite scripts, such as <a href="#">WordPress</a>, <a href="#">Joomla!</a> and <a href="#">Drupal</a> with just one click.</p>
        </div>

        <div class="span3">
          <h3><i class="icon-thumbs-up"></i> No Ads</h3>
          <p>We believe that your content shouldn't be altered, so all our hosting is completely ad-free.</p>
        </div>

      </div>


      <div class="row snippets">

        <div class="span3">
          <h3><i class="icon-tasks"></i> Powerful Control Panel</h3>
          <p>Our software is feature rich and allows you to take complete control of your website.</p>
        </div>

        <div class="span3">
          <h3><i class="icon-envelope"></i> Your Own Email</h3>
          <p>Create custom email addresses using your own domain for that professional feeling.</p>
        </div>

        <div class="span3">
          <h3><i class="icon-download-alt"></i> Fast Hosting</h3>
          <p>Our distributed infrastucture allows us to serve your website fast.</p>
        </div>

        <div class="span3">
          <h3><i class="icon-comment"></i> We're Social</h3>
          <p>For up-to-the-minute news and support, find us on <a href="#">Facebook</a> and <a href="#">Twitter</a></p>
        </div>

      </div>


      <hr>

      <!-- Thumbnails of featured client websites. Hideen from phones to make the page more manageable  -->
      <div class="row hidden-phone">
        <div class="span12">
          <h6>Featured Clients</h6>
          <ul class="thumbnails">
            
            <li class="span3">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/260x180" alt="">
              </a>
            </li>

            <li class="span3">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/260x180" alt="">
              </a>
            </li>

            <li class="span3">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/260x180" alt="">
              </a>
            </li>

            <li class="span3">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/260x180" alt="">
              </a>
            </li>
          </ul>

        </div>
      </div>



      <!-- Carousel showing testimonials from clients. Best to keep them to one line to avoid 
      the footer dancing about -->
      <div class="row">

        <div class="span12 center-block">
          <div id="quoteCarousel" class="carousel slide">
            <div class="carousel-inner">
              
              <div class="active item">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <small>Client 1</small>
                </blockquote>
              </div>

              <div class="item">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                  <small>Client 2</small>
                </blockquote>
              </div>

              <div class="item">
                <blockquote>
                  <p>Integer posuere erat a ante.</p>
                  <small>Client 3</small>
                </blockquote>
              </div>

              <!-- Add more "items" like the divs above to include more quotes -->
            </div>

          </div>
        </div>
      </div>


    </div>

<?php include('includes/signup.php'); ?>
<?php include('includes/footer.php'); ?>
<?php include('includes/foot.php'); ?>