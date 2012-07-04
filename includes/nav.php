<nav class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">

          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <!-- Control Panel button always visible -->
          
          <a class="pull-right btn btn-small btn-inverse" href="<?php echo "cpanel." . $siteUrl ?>"><i class="icon-cog icon-white"></i> Control <span class="hidden-phone">Panel</span></a>

          <!-- Your website name. If you have a logo you could change this to an img. 
          Change the link to point to the root of your domain -->
          <a class="brand" href="<?php echo $siteUrl ?>"><?php echo $siteName ?></a>

          <div class="nav-collapse">

            <ul class="nav">
              <!-- All the navigation items.  -->
              <li <?php if ($thisPage == "Features") echo "class=\"active\""; ?>><a href="features.php">Features</a></li>
              <li <?php if ($thisPage == "About") echo "class=\"active\""; ?>><a href="about.php">About</a></li>
              <li><a href="blog/">Blog</a></li>
              <li><a href="forum/">Forum</a></li>
              <li <?php if ($thisPage == "Contact") echo "class=\"active\""; ?>><a href="contact.php">Contact</a></li>
            </ul>

            <a class="pull-right btn btn-small btn-info" href="<?php echo "webmail." . $siteUrl ?>"><i class="icon-envelope icon-white"></i> Webmail</a>

          </div>

        </div>
      </div>
    </nav>