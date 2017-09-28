<!-- Page Loader -->
	<div class="preloader">
        <div id="loaderImage"></div>
    </div>
	
	<header id="navigation">
        <div class="navbar main-nav" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if ($logo): ?>
	                    <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
	                    	<h1><img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"></h1>
	                    </a>
                    <?php endif; ?>                    
                </div>
                <nav class="collapse navbar-collapse navbar-right">					
                    <!-- <ul class="nav navbar-nav">
                    					    <li class="scroll active"><a href="#navigation">Home</a></li> 
                    					                						<li class="scroll"><a href="#service">Service</a></li>                        
                    					    <li class="scroll"><a href="#recent-works">Works</a></li>
                    					    <li class="scroll"><a href="#about-us">About us</a></li>						
                    					                						<li class="scroll"><a href="#our-team">our Team</a></li>
                    					                						<li class="scroll"><a href="#blog">Blog</a></li>
                    					    <li class="scroll"><a href="#pricing-tables">Pricing Table</a></li>
                    					    <li class="scroll"><a href="#contact-us">Contact</a></li>                        
                    					</ul> -->					
					<?php 
		              if (module_exists('i18n_menu')) {
		                $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
		              } else {
		                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
		              }
		              print drupal_render($main_menu_tree);
		            ?>
                </nav>
            </div>
        </div>
    </header><!--/#navigation--> 
	
	<div id="carousel-wrapper">
		<?php if ($page['slider']): ?>
			<?php print render($page['slider']); ?>
		<?php endif; ?>	
    </div><!--/#carousel-wrapper-->
    <?php if($page['sidebar_first']) { $primary_col = 9; } else { $primary_col = 12; } ?> 
    <div class="container">
    	<div class="row">
			<?php if ($page['sidebar_first']): ?>
			<div class="col-sm-3">
				<?php print render($page['sidebar_first']); ?>
			</div>
			<?php endif; ?>
			<div class="col-sm-<?php print $primary_col?>">
				<?php print render($title_prefix); ?>
				<?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
				<?php print render($title_suffix); ?>
				<?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
				<?php print render($page['help']); ?>
				<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
				<?php print render($page['content']); ?>
			</div>
		</div>
	</div>
	<?php if($page['footer']) : ?>
	<footer id="footer">
		<?php print render($page['footer']); ?>
    </footer><!--/#footer--> 
  <?php endif; ?>		
	
			
		